<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;

/**
 * @see \Illuminate\Contracts\Auth\Access\Gate
 */
class Gate extends Facade
{
    /**
     * Get the registered name of the components.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return GateContract::class;
    }
}
