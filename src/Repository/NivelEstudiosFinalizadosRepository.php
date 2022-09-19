<?php

namespace App\Repository;

use App\Entity\NivelEstudiosFinalizados;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NivelEstudiosFinalizados>
 *
 * @method NivelEstudiosFinalizados|null find($id, $lockMode = null, $lockVersion = null)
 * @method NivelEstudiosFinalizados|null findOneBy(array $criteria, array $orderBy = null)
 * @method NivelEstudiosFinalizados[]    findAll()
 * @method NivelEstudiosFinalizados[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NivelEstudiosFinalizadosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NivelEstudiosFinalizados::class);
    }

    public function add(NivelEstudiosFinalizados $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(NivelEstudiosFinalizados $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return NivelEstudiosFinalizados[] Returns an array of NivelEstudiosFinalizados objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NivelEstudiosFinalizados
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
