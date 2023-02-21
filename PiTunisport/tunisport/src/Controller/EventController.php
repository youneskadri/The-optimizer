<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\EventRepository;
use App\Entity\Event;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EventType;

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


/////////////// CREATE


    #[Route('/createE', name: 'createEvent')]
    public function createE(ManagerRegistry $doctrine, EventRepository $repository, Request $request): Response
    {

        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
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

}

 


