<?php
namespace Composer\Installers;

class AnnotateCmsInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'    => 'addons/modules/{$name}/',
        'components' => 'addons/components/{$name}/',
        'service'   => 'addons/services/{$name}/',
    );
}
