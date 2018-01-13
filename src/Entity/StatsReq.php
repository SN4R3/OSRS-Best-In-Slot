<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatsReqRepository")
 */
class StatsReq
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Item", mappedBy="stats_req")
     */
    private $items;

    public function __construct() {
        $this->items = new ArrayCollection();
    }

    /**
     * @return Collection|Item[]
     */
    public function getItems() {
        return $this->items;
    }
}
