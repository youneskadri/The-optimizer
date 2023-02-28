<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ReservationRepository;
use App\Entity\Reservation;
use App\Entity\Billet;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ReservationType;


class ReservationController extends AbstractController
{


    #[Route('/readR', name: 'readReservation')]
    public function readR(ReservationRepository $repository): Response
    {
        $r =$repository->findAll();
        return $this->render('reservation/readR.html.twig', [
            'reservation' => $r,
        ]);
    }

    


/////////////// CREATE


    #[Route('/createR', name: 'createReservation')]
    public function createR(ManagerRegistry $doctrine, ReservationRepository $repository, Request $request): Response
    {

        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
            $numBillets = $form->get('nombreBillet')->getData();
            $em = $doctrine->getManager();
            $em->persist($reservation);
            for ($i = 0; $i < $numBillets; $i++) {
                $billet = new Billet();
                $billet->setReservation($reservation);
                $billet->setPrix($reservation->getMatchF()->getPrix());
                $reservation->addBillet($billet);
                $em->persist($billet);
            }
            $em->flush();
            return $this->redirectToRoute("readReservation", ['id' => $reservation->getId()]);
        }         
        return $this->renderForm('reservation/createR.html.twig', array('f' => $form));
        
    }

    #[Route('/createReservation', name: 'create_Reservation')]
    public function createReservation(ManagerRegistry $doctrine, ReservationRepository $repository, Request $request): Response
    {

        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
            $numBillets = $form->get('nombreBillet')->getData();
            $em = $doctrine->getManager();
            $em->persist($reservation);
            for ($i = 0; $i < $numBillets; $i++) {
                $billet = new Billet();
                $billet->setReservation($reservation);
                $billet->setPrix($reservation->getMatchF()->getPrix());
                $reservation->addBillet($billet);
                $em->persist($billet);
            }
            $em->flush();
            return $this->redirectToRoute("read_Billet", ['id' => $reservation->getId()]);
        }         
        return $this->renderForm('reservation/createReservation.html.twig', array('f' => $form));
        
    }


//////////////////////// UPDATE



    #[Route('/updateR/{id}', name: 'updateReservation')]
    public function updateR(ManagerRegistry $doctrine, ReservationRepository $repository, Request $request, $id): Response
    {
        $reservation = $repository->find($id);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted())  {
            $em = $doctrine->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute("readReservation");
        }         
        return $this->renderForm('reservation/updateR.html.twig', array('f' => $form));
        
    }


/////////////////////// DELETE


    #[Route('/deleteR/{id}', name: 'deleteReservation')]
    public function deleteR(ManagerRegistry $doctrine, ReservationRepository $repository, $id): Response
    {
        $m = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($m);
        $em->flush();
        return $this->redirectToRoute("readReservation");
        
    }

}

 
