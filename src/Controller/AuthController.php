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
     */
    public function register (Request $request, UserPasswordEncoderInterface $encoder) {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $username = $request->request->get('username');
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
}
