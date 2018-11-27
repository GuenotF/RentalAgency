<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/v1/vehicule")
 */
class VehiculeController extends AbstractController
{
    /**
     * @Route("/liste", name="vehicule_index", methods="GET")
     */
    public function index(): Response
    {
        $vehicules = $this->getDoctrine()
            ->getRepository(Vehicule::class)
            ->findAll();

        return $this->json($vehicules);
    }

    /**
     * @Route("/new", name="vehicule_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vehicule);
            $em->flush();

            return $this->redirectToRoute('vehicule_index');
        }

        return $this->render('vehicule/new.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="vehicule_show", methods="GET")
     */
    public function show(Vehicule $vehicule): Response
    {
        return $this->json($vehicule);
    }

    /**
     * @Route("/byagence/{id}", name="agence_show", methods="GET")
     * @param $id
     * @param VehiculeRepository $vehiculeRepository
     * @return Response
     */
    public function vehiculeParAgence($id, VehiculeRepository $vehiculeRepository): Response
    {
        $response = $vehiculeRepository->findVehiculeParAgence($id);
        var_dump($response);

    }

    /**
     * @Route("/{idvehicule}/edit", name="vehicule_edit", methods="GET|POST")
     */
    public function edit(Request $request, Vehicule $vehicule): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vehicule_index', ['idvehicule' => $vehicule->getIdvehicule()]);
        }

        return $this->render('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idvehicule}", name="vehicule_delete", methods="DELETE")
     */
    public function delete(Request $request, Vehicule $vehicule): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getIdvehicule(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vehicule);
            $em->flush();
        }

        return $this->redirectToRoute('vehicule_index');
    }
}
