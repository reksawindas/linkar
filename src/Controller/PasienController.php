<?php

namespace App\Controller;

use App\Entity\Pasien;
use App\Form\PasienType;
use App\Repository\PasienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pasien")
 */
class PasienController extends AbstractController
{
    /**
     * @Route("/", name="pasien_index", methods={"GET"})
     */
    public function index(PasienRepository $pasienRepository): Response
    {
        return $this->render('pasien/index.html.twig', [
            'pasiens' => $pasienRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pasien_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pasien = new Pasien();
        $form = $this->createForm(PasienType::class, $pasien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pasien);
            $entityManager->flush();

            return $this->redirectToRoute('pasien_index');
        }

        return $this->render('pasien/new.html.twig', [
            'pasien' => $pasien,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pasien_show", methods={"GET"})
     */
    public function show(Pasien $pasien): Response
    {
        return $this->render('pasien/show.html.twig', [
            'pasien' => $pasien,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pasien_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pasien $pasien): Response
    {
        $form = $this->createForm(PasienType::class, $pasien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pasien_index');
        }

        return $this->render('pasien/edit.html.twig', [
            'pasien' => $pasien,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pasien_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pasien $pasien): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pasien->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pasien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pasien_index');
    }
}
