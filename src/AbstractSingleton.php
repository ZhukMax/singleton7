<?php
namespace Singleton7;

/**
 * Class AbstractSingleton
 * @package Singleton7
 */
abstract class AbstractSingleton implements SingletonInterface
{
    /**
     * @var SingletonInterface
     */
    private static $_instances;

    /**
     * AbstractSingleton constructor.
     * @param array $options
     */
    abstract private function __construct(array $options);
    final private function __clone(){}
    final private function __wakeup(){}

    final public static function getInstance($options = []) : SingletonInterface
    {
        self::$_instances = self::$_instances ?: new static($options);
        return self::$_instances;
    }
}
