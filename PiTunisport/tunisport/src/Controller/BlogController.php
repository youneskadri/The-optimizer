<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Commentaire;
use App\Form\BlogFormType;
use App\Repository\BlogRepository;
use App\Repository\CommentaireRepository;
use  Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\Form\FormTypeInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;


class BlogController extends AbstractController
{
 



#[Route('/readblog', name: 'read_blog')]
public function read(PaginatorInterface $paginator,BlogRepository $repository, Request $request): Response
{
    $blogs = $repository->findAll();
    $length = intdiv(count($blogs),3);
    $pagination = $paginator->paginate(
        $blogs, /* query NOT result */
        $request->query->getInt('page', 1), /*page number*/
        $length /*limit per page*/
    );
    return $this->render('blog/read.html.twig',
        ["blogs" => $pagination]);
}



#[Route('/readblogfront', name: 'readblogfront')]
public function readfront(BlogRepository $repository): Response
{
    $blogs = $repository->findAll();
    return $this->render('blog/read_front.html.twig',
        ["blogs" => $blogs]);
}



#[Route('/update/{id}', name: 'update_blog')]
public function  update(ManagerRegistry $doctrine,$id,  Request  $request) : Response
{ $blog = $doctrine
    ->getRepository(blog::class)
    ->find($id);
    $form = $this->createForm(blogFormType::class, $blog);
    $form->add('update', SubmitType::class) ;
    $form->handleRequest($request);
    if ($form->isSubmitted())
    { $em = $doctrine->getManager();
        $em->flush();
        return $this->redirectToRoute('read_blog');
    }
    return $this->renderForm("blog/update.html.twig",
        ["f"=>$form]) ;
}



#[Route("/blogdetails/{id}", name:'blogdetails')]
public function detail($id, BlogRepository $repository, CommentaireRepository $rep)
{$blogs = $repository->findByid($id);
    $resultOfSearch = $rep->findByExampleField($id);
    return $this->render('blog/show_front.html.twig',
        ["blogs" => $blogs,"comments"=>$resultOfSearch]);
}


#[Route("/delete/{id}", name:'delete_blog')]
public function delete($id, ManagerRegistry $doctrine)
{$c = $doctrine
    ->getRepository(blog::class)
    ->find($id);
    $em = $doctrine->getManager();
    $em->remove($c);
    $em->flush() ;
    return $this->redirectToRoute('read_blog');
}



#[Route('/add', name: 'add_blog')]
public function  add(Request $request,SluggerInterface $slugger,ManagerRegistry $doctrine) : Response
{ $blog = new blog() ;
    $form = $this->createForm(blogFormType::class, $blog);
    // $form->add('ajouter', SubmitType::class) ;
    $form->handleRequest($request);
    if ($form->isSubmitted()&&$form->isValid()
    )

    {
        $photo = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photo->move(
                        $this->getParameter('app.path.product_images'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $blog->setImage($newFilename);
            }
         $em = $doctrine->getManager();
        $em->persist($blog);
        $em->flush();
        return $this->redirectToRoute('read_blog');
    }
    return $this->renderForm("blog/add.html.twig",
        ["f"=>$form]) ;


}




#[Route('/findblog', name: 'find_blog')]
public function find(BlogRepository $rep, Request $request): Response
{   $blogs = $rep->findAll();
    if ($request->isMethod("post")) {
        $titre=$request->get('titre');
        $resultOfSearch = $rep->findByExampleField($titre);
        return $this->render('blog/serach.html.twig', [
            'blogs' => $resultOfSearch]);
    }

    return $this->render("blogs/read.html.twig",
        ["blogs"=>$blogs]);
}






    
}