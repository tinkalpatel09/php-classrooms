<?php

namespace App\Repository;

use App\Entity\MyUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MyUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyUser[]    findAll()
 * @method MyUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MyUser::class);
    }

    
}
