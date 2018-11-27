<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/v1/auth")
 */
class AuthController extends AbstractController
{
    /**
     * @Route("/inscription", name="auth_register", methods="POST")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function register (Request $request, UserPasswordEncoderInterface $encoder) {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setNom('hello');
        $user->setPrenom('hello');
        $user->setTelephone('hello');
        $user->setMail($request->request->get('mail'));
        $password = $request->request->get('password');
        $password_confirmation = $request->request->get('password_confirmation');
        if ($password == $password_confirmation) {
            $user->setPassword($encoder->encodePassword($user, $password));
        }
        $em->persist($user);
        $em->flush();

        return $this->json('ok');
    }

    /**
     * @Route("/connexion", name="auth_login", methods="POST")
     */
    public function login (Request $request) {

        $username = $request->request->get('username');
        $password = $request->request->get('password');

        return $this->json($username);
    }

    /**
     * @Route("/connexion_verification", name="auth_login_check", methods="POST")
     */
    public function login_check () {

    }
}
