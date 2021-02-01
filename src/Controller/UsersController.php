<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
	// podemos agregar rutas directamente en los controladores como anotaciones o en config/routes.yaml
    /**
     * @Route("/users", name="users")
     */
    public function index(): Response
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
    	// tiene que retorna un reponse si no sale error
        return new Response(123);
    }
}
