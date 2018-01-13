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
    public function findItems($skillLvls) {
        $result = $this->getDoctrine()
            ->getRepository(Item::class)
            ->filterItemsByLvl($skillLvls);
        
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
}
