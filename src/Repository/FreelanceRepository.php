<?php

namespace App\Repository;

use App\Entity\Freelance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @extends ServiceEntityRepository<Freelance>
 *
 * @method Freelance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Freelance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Freelance[]    findAll()
 * @method Freelance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FreelanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Freelance::class);
    }

    public function save(Freelance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Freelance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //    /**
    //     * @return Freelance[] Returns an array of Student objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Freelance
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function searchCategory($cat)
    {
        $EM = $this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Freelance v  WHERE v.categoryF LIKE :a')
            ->setParameter('a', '%' . $cat . '%');
        return $query->getResult();
    }

    public function findByDateRange($postedWithin)
    {
        $qb = $this->createQueryBuilder('f');

        switch ($postedWithin) {
            case 'today':
                $dateRange = '1 day ago';
                break;
            case '2_days':
                $dateRange = '2 days ago';
                break;
            case '3_days':
                $dateRange = '3 days ago';
                break;
            case '5_days':
                $dateRange = '5 days ago';
                break;
            case '10_days':
                $dateRange = '10 days ago';
                break;
            default:
                $dateRange = null;
                break;
        }

        if ($dateRange) {
            $qb->andWhere('f.adddate >= :date_range')
                ->setParameter('date_range', new \DateTime($dateRange));
        }

        return $qb->getQuery()->getResult();
    }


    public function paginate(QueryBuilder $queryBuilder, int $page, int $limit, PaginatorInterface $paginator): PaginationInterface
    {
        $pagination = $paginator->paginate(
            $queryBuilder->getQuery(),
            $page,
            $limit
        );

        return $pagination;
    }
}
