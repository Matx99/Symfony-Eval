<?php

namespace App\Controller;

use App\Entity\Litigation;
use App\Form\LitigationType;
use App\Repository\LitigationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LitigationController extends AbstractController
{
    /**
     * @Route("/", name="litigation_index", methods={"GET"})
     */
    public function index(LitigationRepository $litigationRepository): Response
    {
        return $this->render('litigation/index.html.twig', [
            'litigations' => $litigationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/litigation/new", name="litigation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $litigation = new Litigation();
        $form = $this->createForm(LitigationType::class, $litigation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($litigation);
            $entityManager->flush();

            return $this->redirectToRoute('litigation_index');
        }

        return $this->render('litigation/new.html.twig', [
            'litigation' => $litigation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/litigation/{id}", name="litigation_show", methods={"GET"})
     */
    public function show(Litigation $litigation): Response
    {
        return $this->render('litigation/show.html.twig', [
            'litigation' => $litigation,
        ]);
    }

    /**
     * @Route("/litigation/{id}/edit", name="litigation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Litigation $litigation): Response
    {
        $form = $this->createForm(LitigationType::class, $litigation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('litigation_index');
        }

        return $this->render('litigation/edit.html.twig', [
            'litigation' => $litigation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/litigation/{id}", name="litigation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Litigation $litigation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$litigation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($litigation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('litigation_index');
    }
}
