<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\MatchFRepository;
use App\Entity\MatchF;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MatchFType;

class MatchFController extends AbstractController
{



    #[Route('/readM', name: 'readMatch')]
    public function readM(MatchFRepository $repository): Response
    {
        $m =$repository->findAll();
        return $this->render('match_f/readM.html.twig', [
            'match' => $m,
        ]);
    }


/////////////// CREATE


    #[Route('/createM', name: 'createMatch')]
    public function createM(ManagerRegistry $doctrine, MatchFRepository $repository, Request $request): Response
    {
        $match = new MatchF();
        $form = $this->createForm(MatchFType::class, $match);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
            $em = $doctrine->getManager();
            $em->persist($match);
            $em->flush();
            return $this->redirectToRoute("readMatch");
        }         
        return $this->renderForm('match_f/createM.html.twig', array('f' => $form));
        
    }


//////////////////////// UPDATE



    #[Route('/updateM/{id}', name: 'updateMatch')]
    public function updateM(ManagerRegistry $doctrine, MatchFRepository $repository, Request $request, $id): Response
    {
        $match = $repository->find($id);
        $form = $this->createForm(MatchFType::class, $match);
        $form->handleRequest($request);
        
        if ($form->isSubmitted())  {
            $em = $doctrine->getManager();
            $em->persist($match);
            $em->flush();
            return $this->redirectToRoute("readMatch");
        }         
        return $this->renderForm('match_f/updateM.html.twig', array('f' => $form));
        
    }


/////////////////////// DELETE


    #[Route('/deleteM/{id}', name: 'deleteMatch')]
    public function deleteM(ManagerRegistry $doctrine, MatchFRepository $repository, $id): Response
    {
        $m = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($m);
        $em->flush();
        return $this->redirectToRoute("readMatch");
        
    }


    #[Route('/bookTicket', name: 'bookTicket')]
    public function front(): Response
    {
        return $this->render('bookTicket.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}

