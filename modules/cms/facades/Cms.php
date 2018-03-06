<?php namespace Cms\Facades;

use October\Rain\Support\Facade;

class Cms extends Facade
{
    /**
     * Get the registered name of the components.
     *
     * @see \Cms\Helpers\Cms
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cms.helper';
    }
}
