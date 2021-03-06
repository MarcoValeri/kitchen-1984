<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {

    /**
     * @Route("/")
     */
    public function home() {
        return $this->render('pages/home.html.twig');
    }

}