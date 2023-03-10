<?php



namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ReclamtionfrontController extends AbstractController
{
    #[Route('/reclamtionfront', name: 'app_reclamtionfront')]
    public function index(ReclamationRepository $reclamationRepository): Response
    {      
      $reclamtionfronts=  $reclamationRepository->findAll();
        return $this->render('reclamtionfront/index.html.twig', [
            'reclamtionfronts' => $reclamtionfronts,
        ]);
    }

    #[Route('/addR', name: 'reclamtionfront_addR', methods: ['GET', 'POST'])]

    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/addR.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }    
    

    #[Route('/{id}', name: 'reclamtionfront_show', methods: ['GET'])]
    public function show(Reclamation $reclamtion): Response
    {
        return $this->render('reclamtionfront/show.html.twig', [
            'reclamtion' => $reclamtion,
        ]);
    }
    #[Route('/{id}/edit', name: 'reclamtionfront_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamtionfront, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamtionfront);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamtionfront, true);

            return $this->redirectToRoute('reclamtionfront_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamtionfront/edit.html.twig', [
            'reclamation' => $reclamtionfront,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'reclamtionfront_deleteRec', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamtionfront, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamtionfront->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamtionfront, true);
        }

        return $this->redirectToRoute('reclamtionfront_index', [], Response::HTTP_SEE_OTHER);
    }
    



}