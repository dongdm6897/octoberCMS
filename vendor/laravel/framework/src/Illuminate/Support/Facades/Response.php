<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Routing\ResponseFactory as ResponseFactoryContract;

/**
 * @see \Illuminate\Contracts\Routing\ResponseFactory
 */
class Response extends Facade
{
    /**
     * Get the registered name of the components.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ResponseFactoryContract::class;
    }
}
