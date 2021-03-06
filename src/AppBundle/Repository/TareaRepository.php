<?php

namespace AppBundle\Repository;

/**
 * TareaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TareaRepository extends \Doctrine\ORM\EntityRepository
{
    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e.id, e.titulo, e.descripcion
                FROM AppBundle:Tarea e
                WHERE e.titulo LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }
}
