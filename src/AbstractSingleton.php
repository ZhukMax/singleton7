<?php
namespace Singleton7;

/**
 * Class AbstractSingleton
 * @package Singleton7
 */
abstract class AbstractSingleton implements SingletonInterface
{
    /**
     * @var array
     */
    private static $_instances;

    /**
     * AbstractSingleton constructor.
     */
    final private function __construct(){}
    final private function __clone(){}
    final private function __wakeup(){}

    final public static function getInstance()
    {
        self::$_instances = self::$_instances ?: new static;
        return self::$_instances;
    }
}
