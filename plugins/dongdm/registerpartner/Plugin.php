<?php namespace Dongdm\Registerpartner;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Dongdm\Registerpartner\Components\Register' => 'register'
        ];

    }

    public function registerSettings()
    {
    }
}
