<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LogicController extends Controller
{
    /**
     * @Route("/go")
     */

    public function index() {
        $errMsg = self::validateForm();
        if(strlen($errMsg) > 1) {
            return $this->render('base.html.twig', ['result'=>$errMsg]);
        }
        $skillLvls = array();
        $budget = $_POST["totalBud"];
        $bonus = array(
            "type" => $_POST["bis-att-def"],
            "bonus" => $_POST["bis-stats-chose"]
        );
        //Get all the user's skill levels
        foreach($_POST as $key => $value) {
            $keyword = substr($key, strlen($key)-3, strlen($key));
            if($keyword === "lvl") {
                $skillLvls[$key] = $value;
            }
        } 
        $itemsFiltered = $this->forward('App\Controller\ItemController::findItems', array(
            'skillLvls'=>$skillLvls,
            'bonus'=>$bonus
        ));
        return new Response($itemsFiltered);
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
