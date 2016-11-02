<?php

namespace PUGX\MultiUserBundle\Model;

/**
 * @author leonardo proietti (leonardo.proietti@gmail.com)
 */
class UserFactory implements UserFactoryInterface
{
    /**
     * @param type $class
     *
     * @return \PUGX\MultiUserBundle\Model\class
     */
    public static function build($class)
    {
        $user = new $class();

        return $user;
    }
}
