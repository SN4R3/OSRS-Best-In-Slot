<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $result = "";
        return $this->render('base.html.twig', ['result'=>$result]);
    }
}
