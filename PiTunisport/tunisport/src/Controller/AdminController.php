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
use App\Form\AdminType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class AdminController extends AbstractController
{

    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }



    // #[Route('/admin', name: 'admin')]
    // public function index(UserRepository $repository): Response
    // {

    //     $user = $repository->findByRole('ROLE_ADMIN');
    //     $userClient = $repository->findByRole('ROLE_USER');
    //    return $this->render('admin/index.html.twig', [
    //         'form' => $form->createView(),
    //         'errors' => $errors,
    //         'user'=>$user = $repository->findByRole('ROLE_ADMIN'),
    //         'userClient'=>$userClient
    //     ]);
    // }

    #[Route('/admin/profile/modifier', name: 'adminProfile',methods: ['GET', 'POST'])]

    public function AdminProfile(ManagerRegistry $doctrine, Request $request, UserRepository $repository, SluggerInterface $slugger): response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditprofileType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $photo = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();

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




    #[Route('/admin/delete/{id}', name: 'DeleteAdmin',methods: ['GET', 'POST'])]

    public function RemoveAdmin(EntityManagerInterface $em, $id, UserRepository $repository,ManagerRegistry $doctrine)
    {
     

        $user=$repository->find($id);
        $em=$doctrine->getManager();
        $user->setRoles(['ROLE_USER']);
        $user->setImage('316710464-693122482116039-1702679747015648959-n-63f8040af3f46.png');
        $user->setDateJoin(new \DateTime('now'));
        $user->setBanned(0);
        $em->flush();
        return $this->redirectToRoute('admin');
    }

    #[Route('/admin', name: 'admin',methods: ['GET', 'POST'])]

    public function AddAdmin(Request $request, ManagerRegistry $doctrine,UserRepository $repository)
    {
        $user = new User();     
        $userClient = $repository->findByRole('ROLE_USER');
        $form = $this->createForm(AdminType::class, $user);
        // $form->add('Add',SubmitType::class);

        $form->handleRequest($request);
        $errors = $form->getErrors();
        $user->setDateJoin(new \DateTime('now'));

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $user->setPassword($this->passwordHasher->hashPassword($user, $user->getPassword()));

            // Set their role
            $user->setRoles(['ROLE_ADMIN']);


            // Save
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();
       
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/index.html.twig', [
            'form' => $form->createView(),
            'errors' => $errors,
            'user'=>$user = $repository->findByRole('ROLE_ADMIN'),
            'userClient'=>$userClient
        ]);
    }
}
