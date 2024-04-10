<?php
// src/Repository/ValaMobileRepository.php
namespace Mac\VMobile\Repository\ValaMobileCompatibilityRepository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Mac\VMobile\Entity\ValaCompatibility;


class ValaMobileCompatibilityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValaCompatibility::class);
    }

    // Define your custom query methods here
    public function findAllMobiles()
    {
        return $this->createQueryBuilder('m')
            ->getQuery()
            ->getResult();
    }
}
