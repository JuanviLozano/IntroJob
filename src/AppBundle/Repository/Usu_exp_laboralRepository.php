<?php

namespace AppBundle\Repository;

/**
 * Usu_exp_laboralRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Usu_exp_laboralRepository extends \Doctrine\ORM\EntityRepository
{
    public function findById($id) {
        $result = $this->getEntityManager()
                       ->createQuery('SELECT e
                                           FROM AppBundle:Usu_exp_laboral e
                                           WHERE :id = e.usuario')
                       ->setParameter('id', $id);

        return $result->getResult();
    }
}
