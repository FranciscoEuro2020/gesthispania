<?php

namespace App\Repository;

use App\Entity\SubjectsCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use PDO;
/**
 * @method SubjectsCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubjectsCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubjectsCourse[]    findAll()
 * @method SubjectsCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubjectsCourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubjectsCourse::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(SubjectsCourse $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(SubjectsCourse $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return SubjectsCourse[] Returns an array of SubjectsCourse objects
    //  */
    
     public function getsubjectCourseList($id){
        $entityManager = $this->getEntityManager();
        $sqlConnection = $entityManager->getConnection();
        $queryTotal = "
        select a.title as course, sub.name as signature,sub.id as idsubject
        from course a
        INNER JOIN subjects_course n ON a.id = n.idcourse
        INNER JOIN `subject` sub ON sub.id = n.idsubject
        WHERE a.id= $id
        ";
        $queryTotal = $sqlConnection->executeQuery($queryTotal)->fetchAllAssociative(PDO::FETCH_ASSOC);

        return $queryTotal;
    }
    public function getsubjectCourseListAssign($id){
        $entityManager = $this->getEntityManager();
        $sqlConnection = $entityManager->getConnection();
        $queryTotal = "
        select a.title as course, sub.name as signature,sub.id as idsubject
        from course a
        INNER JOIN subjects_course n ON a.id = n.idcourse
        INNER JOIN `subject` sub ON sub.id = n.idsubject
        INNER JOIN `register` reg ON reg.idcourse= a.id and reg.idsubject =n.idsubject
        where reg.iduser= $id
        ";
        $queryTotal = $sqlConnection->executeQuery($queryTotal)->fetchAllAssociative(PDO::FETCH_ASSOC);

        return $queryTotal;
    }
}
