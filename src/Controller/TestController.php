<?php

namespace App\Controller;

// agregar la entidad
use App\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index(): Response
    {
        // return $this->render('users/index.html.twig', [
        //     'controller_name' => 'UsersController',
        // ]);

        //  $entityManager = $this->getDoctrine()->getManager();

        // $users = new Users();
        // $users->setFirstName('jonathan');
        // $users->setLastName('castro');
        // $users->setEmail('admin@hotmail.com');

        // // tell Doctrine you want to (eventually) save the Product (no queries yet)
        // $entityManager->persist($users);

        // // actually executes the queries (i.e. the INSERT query)
        // $entityManager->flush();

        // return new Response('usuario registrado'.$users->getId());




    	// $users = $this->getDoctrine()
    	// ->getRepository(Users::class)
    	// ->findAll();

        // if (!$product) {
        //     throw $this->createNotFoundException(
        //         'No product found for id '.$id
        //     );
        // }


    	$repository = $this->getDoctrine()->getRepository(Users::class);

    	$users = $repository->findAll();


        print_r($users);

    	return new Response();

    	// return 123;



    }



    // ejemplo para insertar
    // public function index(): Response
    // {
    //     // return $this->render('users/index.html.twig', [
    //     //     'controller_name' => 'UsersController',
    //     // ]);

    //      $entityManager = $this->getDoctrine()->getManager();

    //     $users = new Users();
    //     $users->setFirstName('jonathan');
    //     $users->setLastName('castro');
    //     $users->setEmail('admin@hotmail.com');

    //     // tell Doctrine you want to (eventually) save the Product (no queries yet)
    //     $entityManager->persist($users);

    //     // actually executes the queries (i.e. the INSERT query)
    //     $entityManager->flush();

    //     return new Response('usuario registrado'.$users->getId());



    // }
}