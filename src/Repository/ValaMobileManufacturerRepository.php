<?php
// src/Repository/ValaMobileRepository.php
namespace Mac\VMobile\Repository\ValaMobileManufacturerRepository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Mac\VMobile\Entity\ValaMobile;

class ValaMobileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValaMobile::class);
    }

    // Define your custom query methods here
    public function findAllMobiles()
    {
        return $this->createQueryBuilder('m')
            ->getQuery()
            ->getResult();
    }
}
