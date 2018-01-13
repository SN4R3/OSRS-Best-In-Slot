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

    public function filterItemsByLvl($skillLvls) {
        $conn = $this->getEntityManager()->getConnection();
        $result = array();
        $sql = '
            SELECT * FROM item i
            INNER JOIN stats_req ON i.req_id = stats_req.req_id
            ';
    
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $res = $stmt->fetchAll();
        //Filter out the rows that have higher lvl reqs than the lvls the user has input
        foreach($res as $row) {
            foreach($row as $key => $value) {
                if($key === "att") {
                    if($skillLvls["att_lvl"] < $value) break;
                }
                if($key === "str") {
                    if($skillLvls["str_lvl"] < $value) break;
                }  
                if($key === "def") {
                    if($skillLvls["def_lvl"] < $value) break;
                }
                if($key === "hp") {
                    if($skillLvls["hp_lvl"] < $value) break;
                }   
                if($key === "mage") {
                    if($skillLvls["mag_lvl"] < $value) break;
                }   
                if($key === "rang") {
                    if($skillLvls["ran_lvl"] < $value) break;
                }
                array_push($result, $row);            
            }
        }
        return $result;
    }

}
