<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LogicController extends Controller
{
    /**
     * @Route("l/m/a/o")
     */

    public function index() {
        return new Response("Hey lmao");
    }

    public function validateForm() {
        $res = "";
        if(!isset($_POST['bis-stats-chose']))
            return "Please choose a stat";
        $bonusType = substr($_POST['bis-stats-chose'], strlen($_POST['bis-stats-chose'])-3, strlen($_POST['bis-stats-chose']));

        if(!isset($_POST['bis-att-def']) && $bonusType !== "str")
            return "Please choose a Attack or Defence";

        return $res;
    }
}
