<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\EditProfileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

use Knp\Component\Pager\PaginatorInterface;


class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin')]
    public function index(UserRepository $repository): Response
    {

        $user = $repository->findAll();
        return $this->render('admin/index.html.twig',[
            'user'=>$user
        ]);

    //     return $this->render('back.html.twig');

    // }


}

#[Route('/admin/profile/modifier', name: 'adminProfile')]

public function AdminProfile(ManagerRegistry $doctrine , Request $request,UserRepository $repository,SluggerInterface $slugger): response
{ 
    $user= $this->getUser();
    $form=$this->createForm(EditprofileType::class,$user);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){

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
            $user->setImage($newFilename);
        }
        $em = $doctrine->getManager();
        $em->persist($user);
        $em->flush();

        $this->addFlash('message', 'Profil mis à jour');
        return $this->redirectToRoute('admin');
    }

    return $this->render('admin/adminProfile.html.twig', [
        'form' => $form->createView(),
    ]);
}




  



 









}