<?php
namespace ;

/**
 * Class AbstractSingleton
 * @package 
 */
abstract class AbstractSingleton implements SingletonInterface
{
    /**
     * @var array
     */
    private static $_instances = [];

    /**
     * AbstractSingleton constructor.
     */
    final private function __construct(){}
    final private function __clone(){}
    final private function __wakeup(){}

    final public static function getInstance()
    {
        return self::$_instances ?: new static;
    }
}
