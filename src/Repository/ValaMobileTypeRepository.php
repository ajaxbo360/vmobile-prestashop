<?php
// src/Repository/ValaMobileRepository.php
namespace Mac\VMobile\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Mac\VMobile\Entity\ValaMobileType;

class ValaMobileTypeRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValaMobileType::class);
    }

    // get all my types from valamobileEntity

    public function findAllTypes()
    {
        return $this->createQueryBuilder('t')
            ->getQuery()
            ->getResult();
    }
}
