<?php

namespace App\Controller;

use App\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ItemController extends Controller
{
    /**
     * @Route("/go")
     */
    public function index(Request $request) {
        $dataRef = $request->request->get('data');

        //$errMsg = self::validateForm();
        $skillLvls = $dataRef[0];
        $budget = $dataRef[2];
        $bonus = array(
            "type" => $dataRef[1],
            "bonus" => $dataRef[1]
        );
        
        return new JsonResponse(self::findItems($skillLvls,$bonus));
    }

    public function findItems($skillLvls,$bonus) {
        $allItems = $this->getDoctrine()
            ->getRepository(Item::class)
            ->getAllItems();
        
        //Filter items
        $result = self::filterItemsByLvl($allItems, $skillLvls);
        //$result = self::filterItemsByBonus($allItems, $skillLvls);

        return $result;
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
            if($row["att"] > $skillLvls[0][1]) {
                $booOk = false;
            }
            if($row["str"] > $skillLvls[1][1]) {
                $booOk = false;
            }
            if($row["def"] >  $skillLvls[2][1]) {
                $booOk = false;
            }
            if($row["rang"] >  $skillLvls[3][1]) {
                $booOk = false;
            }
            if($row["pray"] >  $skillLvls[4][1]) {
                $booOk = false;
            }
            if($row["mage"] >  $skillLvls[5][1]) {
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
