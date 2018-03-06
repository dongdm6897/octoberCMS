<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Redis\RedisManager
 * @see \Illuminate\Contracts\Redis\Factory
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the components.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
