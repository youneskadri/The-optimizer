<?php

namespace App\Controller;

use App\Entity\User;

use App\Repository\StateUserRepository;
use App\Repository\UserRepository;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use App\Service\Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MobileController extends AbstractController
{
    private $passwordHasher;
    private $randomStringGenerator;
    private $mailer;
    private $SerializerInterface;
    public function __construct(UserPasswordHasherInterface $passwordHasher,Mailer $mailer,SerializerInterface $SerializerInterface)
    {
        $this->passwordHasher = $passwordHasher;
        $this->mailer =$mailer;
        $this->SerializerInterface =$SerializerInterface;
    }

    /**
     * @Route("/getCodeM", name="getCode")
    
     * @param Mailer $mailer
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserRepository $userRepository
     * @return Response
     * @throws ExceptionInterface
     */

    public function getCode(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {
        $user=new User();
        $userEmail = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]
        );

        if($userEmail)
        {
            $user=$userEmail;
        }

        $code = md5(uniqid());
        $mailer->sendPasswordResetEmail($user->getEmail(), $user->getToken(),$user->getFirstName());

        $jsonContent=$normalizable->normalize($code,'json',['groups'=>'user']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/checkUserUnique", name="checkUserUnique")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @return Response
     * @throws ExceptionInterface
     */
    public function checkUserUnique(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {

        $userBD_email = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]
        );

        if($userBD_email)
        {
            $result=-2;
        }
        else{
            $result=1;
        }
        $jsonContent=$normalizable->normalize($result,'json',[]);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/loginCheck", name="loginCheck")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserRepository $userRepository
     * @return Response
     * @throws ExceptionInterface
     */

    public function loginCheck(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response //mail
    {  $result=-1;
        $user=new User();
        $User = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]);

        $password= $passwordHasher->hashPassword($user,$request->get('password'));
        if($User)
        {

            if($User[0]->getPassword()==$password)
            {

                if (in_array('ROLE_USER',$User[0]->getRoles(), true))
                $result=2;
                else if (in_array('ROLE_ADMIN', $User[0]->getRoles(), true))
                    $result=1;
            }}

        $jsonContent=$normalizable->normalize($result,'json',[]);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/getUser", name="getUser")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserRepository $userRepository
     * @return Response
     * @throws ExceptionInterface
     */

    public function getUserByEmail(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {
        $user=new User();
        $userEmail = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]
        );

        if($userEmail)
        {
            $user=$userEmail;
        }

        $jsonContent=$normalizable->normalize($user,'json',['groups'=>'user']);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/modifyEnt", name="modifyEnt")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @return Response
     * @throws ExceptionInterface
     */
    public function modifyEnt(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {
        $em=$doctrine->getManager();
        $User = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]);
        $user = $User[0];
        $user->setFirstName($request->get('firstName'));
        $user->setSecondName($request->get('secondName'));
        $user->setPhone($request->get('phone'));

        // if($request->get('photo')!=null && $user->getPhoto()!=$request->get('photo')  )
        // {
        //     $fileNamePhoto = $request->get('photo');
        //     $filePathMobilePhoto="C://Users//ASUS//AppData//Local//Temp";
        //     $uploads_directoryPic = $this->getParameter('images_directory');
        //     $filesystempic = new Filesystem();
        //     $filesystempic->copy($filePathMobilePhoto."//".$fileNamePhoto , $uploads_directoryPic."$fileNamePhoto");
        //     $user->setPhoto($request->get('photo'));
        // }

        $em->flush();
        $jsonContent=$normalizable->normalize($user,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }



 /**
     * @Route("/modifyMembre", name="modifyMembre")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     * @throws ExceptionInterface
     */
    public function modifyMembre(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {
        $em=$doctrine->getManager();
        $User = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]);
        $user = $User[0];
        $user->setFirstName($request->get('firstName'));
        $user->setSecondName($request->get('secondName'));
        $user->setPhone($request->get('phone'));



    //    if($request->get('photo')!=null && $user->getPhoto()!=$request->get('photo')  )
    //     {
    //         $fileNamePhoto = $request->get('photo');
    //         $filePathMobilePhoto="C://Users//ASUS//AppData//Local//Temp";
    //         $uploads_directoryPic = $this->getParameter('images_directory');
    //         $filesystempic = new Filesystem();
    //         $filesystempic->copy($filePathMobilePhoto."//".$fileNamePhoto , $uploads_directoryPic."$fileNamePhoto");
    //         $user->setPhoto($request->get('photo'));
    //     }

        $em->flush();
        $jsonContent=$normalizable->normalize($user,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }


//     /**
//      * @Route("/newMembreM", name="membreNewM", methods={"GET","POST"})
//      * @param Request $request
//      * @param NormalizerInterface $normalizable
//      * @param UserPasswordEncoderInterface $encoder
//      * @param StateUserRepository $stateUserRepository
//      * @return Response
//      * @throws ExceptionInterface
//      */
//     public function newMembre(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
//     {
//         $em=$doctrine->getManager();
//         $user=new User();
//         $password= $passwordHasher->hashPassword($user,$request->get('password'));

//         // $fileNamePhoto = $request->get('photo');

//         // $uploads_directoryPic = $this->getParameter('images_directory');
//         // $filesystempic = new Filesystem();



//         $user->setFirstName($request->get('firstName'));
//         $user->setSecondName($request->get('secondName'));
//         $user->setTel($request->get('phone'));
//         $user->setCreateddtm(new \DateTime());
//         $user->setTel($request->get('tel'));
//         $user->setRoles(array('ROLE_MEMBRE'));
//         $stateuser =$stateUserRepository->find(0);
//         $user->setStateuser($stateuser);
// $user->setPassword($password);
// $user->setPhoto($fileNamePhoto);
// $user->setDescuser($request->get('descuser'));
//         $em->persist($user);
//         $em->flush();

//         $jsonContent=$normalizable->normalize($user,'json',[]);
//         return new Response(json_encode($jsonContent));
//     }

    /**
     * @Route("/newEntrepriseM", name="entrepriseNewM", methods={"GET","POST"})
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserPasswordEncoderInterface $encoder
     * @param StateUserRepository $stateUserRepository
     * @return Response
     * @throws ExceptionInterface
     */
    public function newEnt(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {
        $em=$doctrine->getManager();
        $user=new User();
        $password= $passwordHasher->hashPassword($user,$request->get('password'));

        // $fileNamePhoto = $request->get('photo');

        // $uploads_directoryPic = $this->getParameter('images_directory');
        // $filesystempic = new Filesystem();


  
        $user->setFirstName($request->get('firstName'));
        $user->setSecondName($request->get('secondName'));
        $user->setPhone($request->get('phone'));

        $user->setEmail($request->get('email'));
        $user->setDateJoin(new \DateTime());
      
        $user->setRoles(array('ROLE_ADMIN'));
      
    
     
        $user->setPassword($password);
        $em->persist($user);
        $em->flush();

        $jsonContent=$normalizable->normalize($user,'json',[]);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @return Response
     * @throws ExceptionInterface
     * @Route("/Entreprise/Profil/Change_informationsM", name="ProfilEtudiantM")
     */

    function modifierEnt(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {
        $em=$doctrine->getManager();
        $User = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]);
        $user = $User[0];
        $user->setFirstName($request->get('firstName'));
        $user->setSecondName($request->get('secondName'));



        // if($request->get('photo')!=null && $user->getPhoto()!=$request->get('photo')  )
        // {
        //     $fileNamePhoto = $request->get('photo');
        //     $filePathMobilePhoto="C://Users//ASUS//AppData//Local//Temp";
        //     $uploads_directoryPic = $this->getParameter('images_directory');
        //     $filesystempic = new Filesystem();
        //     $filesystempic->copy($filePathMobilePhoto."//".$fileNamePhoto , $uploads_directoryPic."$fileNamePhoto");
        //     $user->setPhoto($request->get('photo'));
        // }

        $em->flush();
        $jsonContent=$normalizable->normalize($user,'json',['groups'=>'user']);
        return new Response(json_encode($jsonContent));

    }




    /**
     * @Route("/modifyPasswordEnt", name="entrepriseModifyPassword")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     * @throws ExceptionInterface
     */
    public function modifyEtuPassword(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {   $User=new User();
        $em=$doctrine->getManager();
        $user = $doctrine->getRepository(User::class)->find($request->get('email'));
        $password= $passwordHasher->hashPassword($user,$request->get('password'));
        $user->setPassword($password);
        $em->flush();
        $jsonContent=$normalizable->normalize($user,'json',['groups'=>'user']);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/modifyPasswordUser", name="UserModifyPassword")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     * @throws ExceptionInterface
     */
    public function modifyEntPassword(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {   $User=new User();
        $em=$doctrine->getManager();
        $user = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]);

            $password= $passwordHasher->hashPassword($user,$request->get('password'));

        $user[0]->setPassword($password);
        $em->flush();
        $jsonContent=$normalizable->normalize($user,'json',['groups'=>'user']);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/api/client/forgetPasswordCheck", name="api_forgetPasswordCheck")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserRepository $userRepository
     * @return Response
     * @throws ExceptionInterface
     */

    public function forgetPasswordCheck(Mailer $mailer,Request $request,NormalizerInterface $normalizable,UserPasswordHasherInterface $passwordHasher,UserRepository $userRepository,ManagerRegistry $doctrine, TokenGeneratorInterface $tokenGenerator,SerializerInterface $SerializerInterface): Response
    {   $result=false;
        $user=new User();
        $user = $doctrine->getRepository(User::class)->findBy(
            ['email' =>$request->get('email')]);

        if($user)
        {
        if($user[0]->getEmail()==$request->get("email"))
        {
            $result=true;

        }}

        $jsonContent=$normalizable->normalize($result,'json',[]);
        return new Response(json_encode($jsonContent));
    }

}