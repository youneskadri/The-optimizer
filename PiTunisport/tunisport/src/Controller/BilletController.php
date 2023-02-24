<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\BilletRepository;
use App\Repository\ReservationRepository;
use App\Entity\Billet;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\BilletType;

class BilletController extends AbstractController
{

    #[Route('/readB', name: 'readBillet')]
    public function readR(BilletRepository $repository): Response
    {
        $b =$repository->findAll();
        return $this->render('billet/readB.html.twig', [
            'billet' => $b,
        ]);
    }

    #[Route('/readBillet', name: 'read_Billet')]
    public function readBillet(BilletRepository $repository): Response
    {
        $b =$repository->findAll();
        
        return $this->render('billet/readBillet.html.twig', [
            'billet' => $b,
            
        ]);
    }


/////////////// CREATE


    #[Route('/createB', name: 'createBillet')]
    public function createR(ManagerRegistry $doctrine, BilletRepository $repository, Request $request): Response
    {

        $billet = new Billet();
        $form = $this->createForm(BilletType::class, $billet);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
            $em = $doctrine->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute("readBillet");
        }         
        return $this->renderForm('billet/createB.html.twig', array('f' => $form));
        
    }


//////////////////////// UPDATE



    #[Route('/updateB/{id}', name: 'updateBillet')]
    public function updateR(ManagerRegistry $doctrine, BilletRepository $repository, Request $request, $id): Response
    {
        $billet = $repository->find($id);
        $form = $this->createForm(BilletType::class, $billet);
        $form->handleRequest($request);
        
        if ($form->isSubmitted())  {
            $em = $doctrine->getManager();
            $em->persist($billet);
            $em->flush();
            return $this->redirectToRoute("readBillet");
        }         
        return $this->renderForm('billet/updateB.html.twig', array('f' => $form));
        
    }


/////////////////////// DELETE


    #[Route('/deleteB/{id}', name: 'deleteBillet')]
    public function deleteR(ManagerRegistry $doctrine, BilletRepository $repository, $id): Response
    {
        $m = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($m);
        $em->flush();
        return $this->redirectToRoute("readBillet");
        
    }

}

 
