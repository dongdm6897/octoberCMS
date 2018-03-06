<?php
namespace Composer\Installers;

class EliasisInstaller extends BaseInstaller
{
    protected $locations = array(
        'components' => 'components/{$name}/',
        'module'    => 'modules/{$name}/',
        'plugin'    => 'plugins/{$name}/',
        'template'  => 'templates/{$name}/',
    );
}
