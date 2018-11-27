<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/v1/securite/utilisateur")
 */
class SecurityController extends AbstractController
{
    /**
     * @Route("/connexion", name="security_login", methods="post")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function login(Request $request)
    {
        $user = new User();
        return $this->json($user);
    }

    /**
     * @Route("/inscription", name="security_register", methods="POST")
     * @param Request $request
     * @return Response
     */
    public function register(Request $request): Response {
        var_dump($request->request->get('nom'));
        $user = new User();
        $user->setNom($request->request->get('nom'));
        $user->setPrenom($request->request->get('prenom'));
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $form->submit($request->request->all());
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->json($user);
    }
}
