<?php

namespace App\Repository;

use App\Entity\UnidadesFormativas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UnidadesFormativas>
 *
 * @method UnidadesFormativas|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnidadesFormativas|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnidadesFormativas[]    findAll()
 * @method UnidadesFormativas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnidadesFormativasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnidadesFormativas::class);
    }

    public function add(UnidadesFormativas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(UnidadesFormativas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return UnidadesFormativas[] Returns an array of UnidadesFormativas objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UnidadesFormativas
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
