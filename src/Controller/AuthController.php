<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthController extends AbstractController
{
    /**
     * @Route("/register", name="user_register", methods="POST")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();

        $username = $request->request->get('username');
        $password = $request->request->get('password');
        $password_confirm = $request->request->get('password_confirmation');
        if ($password == $password_confirm) {
            var_dump($password_confirm);
            $user = new User($username);
            $user->setNom("t");
            $user->setPrenom("t");
            $user->setMail("hello@hello.fr");
            $user->setPassword($encoder->encodePassword($user, $password));
            $em->persist($user);
            $em->flush();
        }

        return new Response(sprintf('User %s successfully created', $user->getUsername()));
    }
    /**
     * @Route("/api", name="api", methods="GET")
     */
    public function api()
    {
        return new Response(sprintf('Logged in as %s', $this->getUser()->getUsername()));
    }

    /**
     * @Route("/login_check", name="login_check", methods="POST")
     */
    public function login_check()
    {

    }
}
