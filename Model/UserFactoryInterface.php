<?php

namespace PUGX\MultiUserBundle\Model;

interface UserFactoryInterface
{
    /**
     * @param string $class
     */
    public static function build($class);
}
