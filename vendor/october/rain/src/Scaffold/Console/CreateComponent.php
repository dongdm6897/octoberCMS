<?php namespace October\Rain\Scaffold\Console;

use October\Rain\Scaffold\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CreateComponent extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'create:components';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new plugin components.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Component';

    /**
     * A mapping of stub to generated file.
     *
     * @var array
     */
    protected $stubs = [
        'components/components.stub'  => 'components/{{studly_name}}.php',
        'components/default.stub' => 'components/{{lower_name}}/default.htm',
    ];

    /**
     * Prepare variables for stubs.
     *
     * return @array
     */
    protected function prepareVars()
    {
        $pluginCode = $this->argument('plugin');

        $parts = explode('.', $pluginCode);
        $plugin = array_pop($parts);
        $author = array_pop($parts);
        $component = $this->argument('components');

        return [
            'name' => $component,
            'author' => $author,
            'plugin' => $plugin
        ];
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['plugin', InputArgument::REQUIRED, 'The name of the plugin to create. Eg: RainLab.Blog'],
            ['components', InputArgument::REQUIRED, 'The name of the components. Eg: Posts'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Overwrite existing files with generated ones.']
        ];
    }
}
