<?php namespace Cms\Classes;

use Str;
use System\Classes\PluginManager;
use SystemException;
use Illuminate\Support\Facades\App;

/**
 * Component manager
 *
 * @package october\cms
 * @author Alexey Bobkov, Samuel Georges
 */
class ComponentManager
{
    use \October\Rain\Support\Traits\Singleton;

    /**
     * @var array Cache of registration callbacks.
     */
    protected $callbacks = [];

    /**
     * @var array An array where keys are codes and values are class names.
     */
    protected $codeMap;

    /**
     * @var array An array where keys are class names and values are codes.
     */
    protected $classMap;

    /**
     * @var array An array containing references to a corresponding plugin for each components class.
     */
    protected $pluginMap;

    /**
     * @var array A cached array of components details.
     */
    protected $detailsCache;

    /**
     * Scans each plugin an loads it's components.
     * @return void
     */
    protected function loadComponents()
    {
        /*
         * Load module components
         */
        foreach ($this->callbacks as $callback) {
            $callback($this);
        }

        /*
         * Load plugin components
         */
        $pluginManager = PluginManager::instance();
        $plugins = $pluginManager->getPlugins();

        foreach ($plugins as $plugin) {
            $components = $plugin->registerComponents();
            if (!is_array($components)) {
                continue;
            }

            foreach ($components as $className => $code) {
                $this->registerComponent($className, $code, $plugin);
            }
        }
    }

    /**
     * Manually registers a components for consideration.
     * Usage:
     *
     *     ComponentManager::registerComponents(function($manager){
     *         $manager->registerComponent('October\Demo\Components\Test', 'testComponent');
     *     });
     *
     * @param callable $definitions
     * @return array Array values are class names.
     */
    public function registerComponents(callable $definitions)
    {
        $this->callbacks[] = $definitions;
    }

    /**
     * Registers a single components.
     */
    public function registerComponent($className, $code = null, $plugin = null)
    {
        if (!$this->classMap) {
            $this->classMap = [];
        }

        if (!$this->codeMap) {
            $this->codeMap = [];
        }

        if (!$code) {
            $code = Str::getClassId($className);
        }

        if ($code == 'viewBag' && $className != 'Cms\Components\ViewBag') {
            throw new SystemException(sprintf(
                'The components code viewBag is reserved. Please use another code for the components class %s.',
                $className
            ));
        }

        $className = Str::normalizeClassName($className);
        $this->codeMap[$code] = $className;
        $this->classMap[$className] = $code;
        if ($plugin !== null) {
            $this->pluginMap[$className] = $plugin;
        }
    }

    /**
     * Returns a list of registered components.
     * @return array Array keys are codes, values are class names.
     */
    public function listComponents()
    {
        if ($this->codeMap === null) {
            $this->loadComponents();
        }

        return $this->codeMap;
    }

    /**
     * Returns an array of all components detail definitions.
     * @return array Array keys are components codes, values are the details defined in the components.
     */
    public function listComponentDetails()
    {
        if ($this->detailsCache !== null) {
            return $this->detailsCache;
        }

        $details = [];
        foreach ($this->listComponents() as $componentAlias => $componentClass) {
            $details[$componentAlias] = $this->makeComponent($componentClass)->componentDetails();
        }

        return $this->detailsCache = $details;
    }

    /**
     * Returns a class name from a components code
     * Normalizes a class name or converts an code to it's class name.
     * @return string The class name resolved, or null.
     */
    public function resolve($name)
    {
        $codes = $this->listComponents();

        if (isset($codes[$name])) {
            return $codes[$name];
        }

        $name = Str::normalizeClassName($name);
        if (isset($this->classMap[$name])) {
            return $name;
        }

        return null;
    }

    /**
     * Checks to see if a components has been registered.
     * @param string $name A components class name or code.
     * @return bool Returns true if the components is registered, otherwise false.
     */
    public function hasComponent($name)
    {
        $className = $this->resolve($name);
        if (!$className) {
            return false;
        }

        return isset($this->classMap[$className]);
    }

    /**
     * Makes a components object with properties set.
     * @param string $name A components class name or code.
     * @param CmsObject $cmsObject The Cms object that spawned this components.
     * @param array $properties The properties set by the Page or Layout.
     * @return ComponentBase The components object.
     */
    public function makeComponent($name, $cmsObject = null, $properties = [])
    {
        $className = $this->resolve($name);
        if (!$className) {
            throw new SystemException(sprintf(
                'Class name is not registered for the components "%s". Check the components plugin.',
                $name
            ));
        }

        if (!class_exists($className)) {
            throw new SystemException(sprintf(
                'Component class not found "%s". Check the components plugin.',
                $className
            ));
        }

        $component = App::make($className, [$cmsObject, $properties]);
        $component->name = $name;

        return $component;
    }

    /**
     * Returns a parent plugin for a specific components object.
     * @param mixed $component A components to find the plugin for.
     * @return mixed Returns the plugin object or null.
     */
    public function findComponentPlugin($component)
    {
        $className = Str::normalizeClassName(get_class($component));
        if (isset($this->pluginMap[$className])) {
            return $this->pluginMap[$className];
        }

        return null;
    }
}
