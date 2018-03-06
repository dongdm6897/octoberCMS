<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Routing\UrlGenerator
 */
class URL extends Facade
{
    /**
     * Get the registered name of the components.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'url';
    }
}
