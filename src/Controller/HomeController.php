<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController {

    /**
     * @Route("/hello/{prenom}/age/{age}", name = "hello")
     * @Route("/bonjour", name = "hello_base")
     * @Route("/hello/{prenom}", name = "hello_prenom")
     * Montre la page qui dit bonjour
     * 
     * @return void
     */

    public function hello ($prenom = "", $age = 0) {
        return $this->render(
            'hello.html.twig',
            [ 
                'prenom' => $prenom, 
                'age' => $age
            ]    
            );
    }
 



    /**
     * @Route("/", name = "homepage")
     */
    public function Home() {
        $prenoms = ['Martin' => 21 , 'Matthieu' => 12, 'Clément' => 50];

        return $this->render(
            'home.html.twig', 
            [ 
                'title' => "Bonjour",
                'age' => 12, 
                'tableau' => $prenoms   
            ]
        );
    }

}

?>