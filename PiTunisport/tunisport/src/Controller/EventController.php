<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\EventRepository;
use App\Entity\Event;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Form\EventType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EventController extends AbstractController
{

    #[Route('/readE', name: 'readEvent')]
    public function readE(EventRepository $repository): Response
    {
        $e =$repository->findAll();
        return $this->render('event/readE.html.twig', [
            'event' => $e,
        ]);
    }

    #[Route('/listE', name: 'list_Evet')]
    public function listEvet(EventFRepository $repository, SerializerInterface $serializerintertface): Response
    {
        $evet =$repository->findAll();
        $serializedData = $serializerintertface->serialize($evet,'json',['groups' => 'Evet']);
        return new Response($serializedData, 200, [
            'Content-Type' => 'application/json'
        ]);
       
    }
    #[Route('/detailsE/{id}', name: 'detailsE')]
    public function detailsE(EventRepository $repository, $id): Response
    {
        $event = $repository->findByid($id);
        return $this->render('event/detailsE.html.twig', [
            'event' => $event,
        ]);
    }


/////////////// CREATE


    #[Route('/createE', name: 'createEvent')]
    public function createE(ManagerRegistry $doctrine, EventRepository $repository, Request $request, SluggerInterface $slugger): Response
    {

        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
            $brochureFile = $form->get('image')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('event_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $event->setImage($newFilename);
            }
            $em = $doctrine->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute("readEvent");
        }         
        return $this->renderForm('event/createE.html.twig', array('f' => $form));
        
    }


//////////////////////// UPDATE



    #[Route('/updateE/{id}', name: 'updateEvent')]
    public function updateE(ManagerRegistry $doctrine, EventRepository $repository, Request $request, $id): Response
    {
        $event = $repository->find($id);
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())  {
            $em = $doctrine->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute("readEvent");
        }         
        return $this->renderForm('event/updateE.html.twig', array('f' => $form));
        
    }


/////////////////////// DELETE


    #[Route('/deleteE/{id}', name: 'deleteEvent')]
    public function deleteE(ManagerRegistry $doctrine, EventRepository $repository, $id): Response
    {
        $event = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute("readEvent");
        
    }

    #[Route('/readEvent', name: 'read_Event')]
    public function readEvent(EventRepository $repository): Response
    {
        $e =$repository->findAll();
        return $this->render('event/readEvent.html.twig', [
            'event' => $e,
        ]);
    }

    #[Route('/detailsEvent/{id}', name: 'detailsEvent')]
    public function detailsEvent(EventRepository $repository, $id): Response
    {
        $e =$repository->findByid($id);
        return $this->render('event/detailsEvent.html.twig', [
            'event' => $e,
        ]);
    }

}

 


