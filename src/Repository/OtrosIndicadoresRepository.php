<?php

namespace App\Repository;

use App\Entity\OtrosIndicadores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OtrosIndicadores>
 *
 * @method OtrosIndicadores|null find($id, $lockMode = null, $lockVersion = null)
 * @method OtrosIndicadores|null findOneBy(array $criteria, array $orderBy = null)
 * @method OtrosIndicadores[]    findAll()
 * @method OtrosIndicadores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OtrosIndicadoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OtrosIndicadores::class);
    }

    public function add(OtrosIndicadores $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OtrosIndicadores $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OtrosIndicadores[] Returns an array of OtrosIndicadores objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OtrosIndicadores
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
