<?php

namespace App\Controller;
use App\Repository\CategoryHebergementRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CategoryHebergement;
use App\Form\CategoryHebergementType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class CategoryHebergementController extends AbstractController
{
    #[Route('/CategoryHebergement', name: 'app_CategoryHebergement')]
    public function index(): Response
    {
        return $this->render('CategoryHebergement/index.html.twig', [
            'CategoryHebergement_name' => 'CategoryHebergementController',
        ]);
    }

    #[Route('/listC', name: 'list_CategoryHebergement')]
    public function list(ManagerRegistry $doctrine, Request $request): Response
    {
        // declaring the repository in a variable
        $repository = $doctrine->getRepository(CategoryHebergement::class);
        $CategoryHebergements = $repository->findAll();
        $CategoryHebergement = new CategoryHebergement();
        $form = $this->createForm(CategoryHebergementType::class, $CategoryHebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($CategoryHebergement);
            $em->flush();
            return $this->redirectToRoute('list_CategoryHebergement');
        }

        return $this->render('CategoryHebergement/list.html.twig', [
            'controller_name' => 'CategoryHebergementController',
            'CategoryHebergements' => $CategoryHebergements,
            'formC' => $form->createView()
        ]);
    }

    #[Route('/showC/{id}', name: 'showC')]
    public function showC(ManagerRegistry $doctrine, $id): Response
    {
        // declaring the repository in a variable
        $repository = $doctrine->getRepository(CategoryHebergement::class);
        $CategoryHebergement = $repository->find($id);

        return $this->render('CategoryHebergement/detail.html.twig', [
            'controller_name' => 'CategoryHebergementController',
            'CategoryHebergement' => $CategoryHebergement,
        ]);
    }

    #[Route('/deleteC/{id}', name: 'delete_CategoryHebergement')]
    public function deleteClass(ManagerRegistry $doctrine, $id): Response
    {
        // declaring the repository in a variable
        $repository = $doctrine->getRepository(CategoryHebergement::class);
        $CategoryHebergement = $repository->find($id);

        $em = $doctrine->getManager();
        $em->remove($CategoryHebergement);
        $em->flush();
        return $this->redirectToRoute("list_CategoryHebergement");
    }
    #[Route('/addC', name: 'addC')]
    public function addCategoryHebergement(Request $request, ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(CategoryHebergement::class);
        $CategoryHebergements = $repository->findAll();
        $CategoryHebergement = new CategoryHebergement();
        $form = $this->createForm(CategoryHebergementType::class, $CategoryHebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($CategoryHebergement);
            $em->flush();
            return $this->redirectToRoute('list_CategoryHebergement');
        }
        // return $this->render('classroom/detail.html.twig', [
        //     'formC' => $form->createView()
        // ]);
        return $this->renderForm('CategoryHebergement/list.html.twig', [
            'formC' => $form,
            'CategoryHebergements' => $CategoryHebergements
        ]);
    }
    #[Route('/{id}/edit', name: 'app_CategoryHebergement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategoryHebergement $CategoryHebergement, CategoryHebergementRepository $CategoryHebergementRepository): Response
    {
        $form = $this->createForm(CategoryHebergementType::class, $CategoryHebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $CategoryHebergementRepository->save($CategoryHebergement, true);

            return $this->redirectToRoute('list_CategoryHebergement', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('CategoryHebergement/edit.html.twig', [
            'CategoryHebergement' => $CategoryHebergement,
            'formC' => $form,
        ]);
    }
}

