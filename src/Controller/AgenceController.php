<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Form\AgenceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/v1/agence")
 */
class AgenceController extends AbstractController
{
    /**
     * @Route("/bycp/{codePostal}", name="agence_index", methods="GET")
     */
    public function index($codePostal): Response
    {
        $agences = $this->getDoctrine()
            ->getRepository(Agence::class)
            ->findBy(['codepostal' => $codePostal]);

        return $this->json($agences);
    }

    /**
     * @Route("/new", name="agence_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $agence = new Agence();
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agence);
            $em->flush();

            return $this->redirectToRoute('agence_index');
        }

        return $this->render('agence/new.html.twig', [
            'agence' => $agence,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="agence_show", methods="GET")
     */
    public function show(Agence $agence): Response
    {
        return $this->json($agence);
    }

    /**
     * @Route("/{idagence}/edit", name="agence_edit", methods="GET|POST")
     */
    public function edit(Request $request, Agence $agence): Response
    {
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('agence_index', ['idagence' => $agence->getIdagence()]);
        }

        return $this->render('agence/edit.html.twig', [
            'agence' => $agence,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idagence}", name="agence_delete", methods="DELETE")
     */
    public function delete(Request $request, Agence $agence): Response
    {
        if ($this->isCsrfTokenValid('delete'.$agence->getIdagence(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agence);
            $em->flush();
        }

        return $this->redirectToRoute('agence_index');
    }
}
