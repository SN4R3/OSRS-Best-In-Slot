<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ge_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $req_id;
    /**
     * @ORM\Column(type="string")
    */
    private $item_name;

    /**
     * @ORM\Column(type="integer")
     */

    private $stats_id;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StatsReq", inversedBy="item")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stats_req;

    /**
     * @ORM\Column(type="integer")
     */
    private $gp_value;

    /**
     * @ORM\Column(type="string")
    */
    private $item_slot;

    /**
    * @ORM\Column(type="integer")
    */
    private $hand;

    /**
    * @ORM\Column(type="integer")
    */
    private $p2p;

    public function getStatsReq(): StatsReq {
        return $this->stats_req;
    }

    public function setStatsReq(StatsReq $sq) {
        return $this->$stats_req = $sq;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of ge_id
     */ 
    public function getGe_id()
    {
        return $this->ge_id;
    }

    /**
     * Set the value of ge_id
     *
     * @return  self
     */ 
    public function setGe_id($ge_id)
    {
        $this->ge_id = $ge_id;

        return $this;
    }

    /**
     * Get the value of req_id
     */ 
    public function getReq_id()
    {
        return $this->req_id;
    }

    /**
     * Set the value of req_id
     *
     * @return  self
     */ 
    public function setReq_id($req_id)
    {
        $this->req_id = $req_id;

        return $this;
    }

    /**
     * Get the value of item_name
     */ 
    public function getItem_name()
    {
        return $this->item_name;
    }

    /**
     * Set the value of item_name
     *
     * @return  self
     */ 
    public function setItem_name($item_name)
    {
        $this->item_name = $item_name;

        return $this;
    }

    /**
     * Get the value of stats_id
     */ 
    public function getStats_id()
    {
        return $this->stats_id;
    }

    /**
     * Set the value of stats_id
     *
     * @return  self
     */ 
    public function setStats_id($stats_id)
    {
        $this->stats_id = $stats_id;

        return $this;
    }

    /**
     * Get the value of gp_value
     */ 
    public function getGp_value()
    {
        return $this->gp_value;
    }

    /**
     * Set the value of gp_value
     *
     * @return  self
     */ 
    public function setGp_value($gp_value)
    {
        $this->gp_value = $gp_value;

        return $this;
    }

    /**
     * Get the value of item_slot
     */ 
    public function getItem_slot()
    {
        return $this->item_slot;
    }

    /**
     * Set the value of item_slot
     *
     * @return  self
     */ 
    public function setItem_slot($item_slot)
    {
        $this->item_slot = $item_slot;

        return $this;
    }

    /**
     * Get the value of hand
     */ 
    public function getHand()
    {
        return $this->hand;
    }

    /**
     * Set the value of hand
     *
     * @return  self
     */ 
    public function setHand($hand)
    {
        $this->hand = $hand;

        return $this;
    }

    /**
     * Get the value of p2p
     */ 
    public function getP2p()
    {
        return $this->p2p;
    }

    /**
     * Set the value of p2p
     *
     * @return  self
     */ 
    public function setP2p($p2p)
    {
        $this->p2p = $p2p;

        return $this;
    }
}
