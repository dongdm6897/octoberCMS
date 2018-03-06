<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Filesystem\Filesystem
 */
class File extends Facade
{
    /**
     * Get the registered name of the components.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'files';
    }
}
