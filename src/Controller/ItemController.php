<?php

namespace App\Controller;

use App\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller
{
    /**
     * @Route("/item", name="item")
     */
    public function index() {
        return new Response('Welcome to your new controller!');
    }
    /**
     * @Route ("/item/{skillLvls}")
     */
    public function findItems($skillLvls,$bonus) {
        $result = $this->getDoctrine()
            ->getRepository(Item::class)
            ->getAllItems();
        
        //Filter items
        $result = self::filterItemsByLvl($result, $skillLvls);
        $result = self::filterItemsByBonus($result, $bonus);

        //Render result
        return $this->render('base.html.twig', ['result'=>$result]);
    }

    /**
     * @Route("/item/{id}", name="item")
     */ 
    public function showAction($id) {
        $item = $this->getDoctrine()
            ->getRepository(Item::class)
            ->find($id);

        if(!$item) {
            throw $this->createNotFoundException(
                'Item not found, id: '.$id
            );
        }

        return new Response('Item found! '.$item->getItem_name());
    }

    //Filter out the rows that have higher lvl reqs than the lvls the user has input & return
    public function filterItemsByLvl($items, $skillLvls) {
        $result = array();
        foreach($items as $row) {
            $booOk = true;//User's lvls meet the items requirements
            if($row["att"] > $skillLvls["att_lvl"]) {
                $booOk = false;
            }
            if($row["str"] > $skillLvls["str_lvl"]) {
                $booOk = false;
            }
            if($row["def"] > $skillLvls["def_lvl"]) {
                $booOk = false;
            }
            if($row["rang"] > $skillLvls["ran_lvl"]) {
                $booOk = false;
            }
            if($row["pray"] > $skillLvls["pray_lvl"]) {
                $booOk = false;
            }
            if($row["mage"] > $skillLvls["mag_lvl"]) {
                $booOk = false;
            }
            if($booOk)
                array_push($result, $row);        
        }
        return $result;
    }

    /*
    *Filter out the rows that do not give ANY of the specified bonus
    *Then, sort by highest bonuses and return
    */
    public function filterItemsByBonus($items, $bonus) {
        $result = array();
        foreach($items as $row) {

        }

        return $result;
    }
}
