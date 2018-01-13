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
        $skillLvls = array();
        $budget = $_POST["totalBud"];
        //Get all the user's skill levels
        foreach($_POST as $key => $value) {
            $keyword = substr($key, strlen($key)-3, strlen($key));
            if($keyword === "lvl") {
                $skillLvls[$key] = $value;
            }
        } 
        $itemsFiltered = $this->forward('App\Controller\ItemController::findItems', array(
            'skillLvls'=>$skillLvls
        ));

        return new Response($itemsFiltered);
    }
}
