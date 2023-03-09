<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TypeEventRepository;
use App\Entity\TypeEvent;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\TypeType;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;

class TypeEventController extends AbstractController
{

    #[Route('/readT', name: 'readTypeEvent')]
    public function readR(TypeEventRepository $repository): Response
    {
        $te =$repository->findAll();
        return $this->render('type_event/readT.html.twig', [
            'TypeEvent' => $te,
        ]);
    }


/////////////// CREATE


    #[Route('/createT', name: 'createTypeEvent')]
    public function createR(ManagerRegistry $doctrine, TypeEventRepository $repository, Request $request): Response
    {

        $typeEvent = new TypeEvent();
        $form = $this->createForm(TypeType::class, $typeEvent);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
            $em = $doctrine->getManager();
            $em->persist($typeEvent);
            $em->flush();
            return $this->redirectToRoute("readTypeEvent");
        }         
        return $this->renderForm('type_event/createT.html.twig', array('f' => $form));
        
    }


//////////////////////// UPDATE



    #[Route('/updateT/{id}', name: 'updateTypeEvent')]
    public function updateR(ManagerRegistry $doctrine, TypeEventRepository $repository, Request $request, $id): Response
    {
        $typeEvent = $repository->find($id);
        $form = $this->createForm(TypeType::class, $typeEvent);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())  {
            $em = $doctrine->getManager();
            $em->persist($typeEvent);
            $em->flush();
            return $this->redirectToRoute("readTypeEvent");
        }         
        return $this->renderForm('type_event/updateT.html.twig', array('f' => $form));
        
    }


/////////////////////// DELETE


    #[Route('/deleteT/{id}', name: 'deleteTypeEvent')]
    public function deleteR(ManagerRegistry $doctrine, TypeEventRepository $repository, $id): Response
    {
        $m = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($m);
        $em->flush();
        return $this->redirectToRoute("readTypeEvent");
        
    }




    #[Route('/listTypeEvent', name: 'list_Type_Event')]
    public function listMatchs(TypeEventRepository $repository, SerializerInterface $serializerintertface): Response
    {
        $typeevent =$repository->findAll();
        $serializedData = $serializerintertface->serialize($typeevent,'json',['groups' => 'typeevent']);
        return new Response($serializedData, 200, [
            'Content-Type' => 'application/json'
        ]);
       
    }

    #[Route('/addTypeEvent/{NomType}', name: 'addT', methods: ['GET'])]
    public function AddMatchF($NomType)
        {
    
        $typeevent = new TypeEvent();
        $typeevent->setNomType($NomType);
        
        
    
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($typeevent);
        $entityManager->flush();
        
        return new Response('Type added with ID: ' . $typeevent->getId());
    }

    #[Route('/supprimerTypeEvent/{id}', name: 'suppT', methods: ['GET'])]
    public function supprimerT($id, Request $request, TypeEventRepository $repository, ManagerRegistry $doctrine): JsonResponse
    {

        $typeevent = $repository->find($id);
        $em = $doctrine->getManager();

        /* $idE = $request->get($id);
        $em = $this->getDoctrine()->getManager();
        $equipement = $em->getRepository(Equipement::class)->find($idE);*/
        
            $em->remove($typeevent);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formated = $serializer->normalize("Type a ete supprimé avec succées ");
            return new JsonResponse($formated);
       
    }

    #[Route('/updateTypeEvent/{id}/{NomType}', name: 'updateT', methods: ['GET'])]
    public function updateTypeEvent($id, $NomType, TypeEventRepository $repository)
        {
    
        $typeevent = $repository->find($id);
        
        $typeevent->setNomType($NomType);
        
        
    
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($typeevent);
        $entityManager->flush();
        
        return new Response('Type modifié avec ID: ' . $typeevent->getId());
    }


}

 

