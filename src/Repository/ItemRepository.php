<?php

namespace App\Repository;

use App\Entity\Item;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ItemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Item::class);
    }
    public function getAllItems() {
        $conn = $this->getEntityManager()->getConnection();
        $result = array();
        $sql = '
            SELECT * FROM item i
            INNER JOIN stats_req ON i.req_id = stats_req.req_id
            ';
    
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}
