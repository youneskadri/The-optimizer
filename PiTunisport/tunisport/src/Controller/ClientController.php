<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\EditProfileType;
use App\Form\UserEditType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
class ClientController extends AbstractController
{

    #[Route('/front', name: 'front')]
    public function Front(): Response
    {
        return $this->render('frontTest.html.twig');
    }

    #[Route('/', name: 'tunisport')]
    public function index(): Response
    {
        return $this->render('front.html.twig');
    }

    #[Route('/client', name: 'client')]
    public function Client(): Response
    {
        return $this->render('frontUser.html.twig');
    }


    #[Route('/client/profile/modifier', name: 'clientProfile')]

    public function userProfile(ManagerRegistry $doctrine , Request $request,UserRepository $repository,SluggerInterface $slugger): response
{ 
    $user= $this->getUser();
    $form=$this->createForm(UserEditType::class,$user);

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
        return $this->redirectToRoute('client');
    }

    return $this->render('client/index.html.twig', [
        'form' => $form->createView(),
    ]);
}


#[Route('/client/profile/modifier/{email}', name: 'deleteProfile')]
     
function DeleteUser($email,UserRepository $repository ,ManagerRegistry $doctrine){
 
$user=$repository->find($email);
$em=$doctrine->getManager();
$em->remove($user);
$em->flush();

return $this->redirectToRoute('front');

 }








}
