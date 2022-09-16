<?php

namespace App\Repository;

use App\Entity\RequisitosFormadores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RequisitosFormadores>
 *
 * @method RequisitosFormadores|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequisitosFormadores|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequisitosFormadores[]    findAll()
 * @method RequisitosFormadores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequisitosFormadoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequisitosFormadores::class);
    }

    public function add(RequisitosFormadores $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RequisitosFormadores $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RequisitosFormadores[] Returns an array of RequisitosFormadores objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RequisitosFormadores
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
