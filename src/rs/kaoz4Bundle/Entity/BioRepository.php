<?php

namespace rs\kaoz4Bundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BioRepository extends EntityRepository
{
    /**
     * find all bios by category
     * 
     * @return array 
     */
    public function findByCategory($category)
    {
        return $this->findBy(array(
            'category'=>$category,
            'active'=>true
        ));
    }    
}