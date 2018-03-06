<?php

namespace Illuminate\Support\Facades;

use Psr\Log\LoggerInterface;

/**
 * @see \Illuminate\Log\Writer
 */
class Log extends Facade
{
    /**
     * Get the registered name of the components.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return LoggerInterface::class;
    }
}
