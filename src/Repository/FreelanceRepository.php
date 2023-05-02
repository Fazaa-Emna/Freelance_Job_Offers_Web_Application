<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Freelance;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
    /**
    * @var PaginatorInterface
    */
    private $paginator;
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Freelance::class);
        $this->paginator = $paginator;
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
    public function findSearch(SearchData $search): PaginationInterface
    {
        $query=$this
            ->createQueryBuilder('f');
        
        if(!empty($search->q)){
            $query=$query
                ->andWhere('f.categoryF LIKE :q')
                ->setParameter('q',"%{$search->q}%");
        }

        if(!empty($search->min)){
            $query=$query
                ->andWhere('f.budget >= :min')
                ->setParameter('min', $search->min);
        }

        if(!empty($search->max)){
            $query=$query
                ->andWhere('f.budget <= :max')
                ->setParameter('max', $search->max);
        }

        if(!empty($search->categories)){
            $query=$query
                ->andWhere('f.categoryF LIKE :cat')
                ->setParameter('cat', $search->categories);
        }

        if(!empty($search->dates)){
            $dateRanges = array();
            foreach ($search->dates as $dateOption) {
                switch ($dateOption) {
                    case 'today':
                        $dateRanges[] = '1 day ago';
                        break;
                    case '2_days':
                        $dateRanges[] = '2 days ago';
                        break;
                    case '3_days':
                        $dateRanges[] = '3 days ago';
                        break;
                    case '5_days':
                        $dateRanges[] = '5 days ago';
                        break;
                    case '10_days':
                        $dateRanges[] = '10 days ago';
                        break;
                    default:
                        // Handle unknown option value
                        break;
                }
            }
            foreach ($dateRanges as $dateRange) {
                $query=$query
                    ->andWhere('f.adddate >= :date_range')
                    ->setParameter('date_range', new \DateTime($dateRange));
            }      
        }
        
        $query=$query->getQuery();
        

        return ($this->paginator)->paginate(
            $query, // query to paginate
            $search->page, // current page number
            4 // number of items per page == LIMIT
        );
    }

    public function findCategories(): array
    {
        $qb = $this->createQueryBuilder('f');
        $qb->select('f.categoryF');
        $qb->distinct(true);

        $categories = [];
        $results = $qb->getQuery()->getResult();

        foreach ($results as $result) {
            $categories[] = $result['categoryF'];
        }

        return $categories;
    }
}
