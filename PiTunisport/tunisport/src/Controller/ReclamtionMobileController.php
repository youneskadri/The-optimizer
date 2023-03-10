<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Entity\Reclamation;

class ReclamationMobileController extends AbstractController
{
    /**
     * @Route("/reclamationmobile", name="reclamationmobile")
     */
    public function reclamationmobileindex( NormalizerInterface  $normalizer)
    {

        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        $json = $normalizer->normalize($reclamation, "json", ['groups' => ['reclamation','reclamation']]);
        return new JsonResponse($json);
    }

      /**
     * @Route("/SupprimerReclamation", name="SupprimerReclamation")
     */
    public function SupprimerReclamation(Request $request)
    {

        $idE = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(reclamation::class)->find($idE);
        if($reclamation != null)                         
        {
            $em->remove($reclamation);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formated = $serializer->normalize("reclamation ete supprimer avec succées ");
            return new JsonResponse($formated);
        }

    }

    
       /**
     * @Route("/newreclamation_mobile/{sujet}/{descreption}/{email}", name="newreclamation_mobile", methods={"GET","POST"})
     */
    public function newreclamation($tite,$descreption,$email,NormalizerInterface  $normalizer )
    {

        $reclamation = new reclamation();
        
        $reclamation->setsujet($sujet);
        $reclamation->setDescription($descreption);
        $reclamation->setemail($email);



        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reclamation);
        $entityManager->flush();
        $json = $normalizer->normalize($reclamation, "json", ['groups' => ['reclamation']]);
        return new JsonResponse($json);
    }

     /******************Modifier Reclamation*****************************************/
    /**
     * @Route("/updateReclamation", name="updateReclamation")
     */
    public function updateReclamation(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getManager()->getRepository(Reclamation::class)->find($request->get("id"));


        $reclamation->setsujet($request->get("sujet"));
        $reclamation->setdescreption($request->get("descreption"));
        $reclamation->setemail($request->get("email"));
        $reclamation->setdate($request->get("date"));

        $em->persist($reclamation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamation);
        return new JsonResponse("reclamation a ete modifiee avec success.");

    }






}
