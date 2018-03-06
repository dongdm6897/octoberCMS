<?php namespace Cms\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\ComponentBase;

class UnknownComponent extends ComponentBase
{
    /**
     * @var string Error message that is shown with this error components.
     */
    protected $errorMessage;

    /**
     * @inheritDoc
     */
    public function __construct($cmsObject, $properties, $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        $this->componentCssClass = 'error-components';
        $this->inspectorEnabled = false;

        parent::__construct($cmsObject, $properties);
    }

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Unknown components',
            'description' => $this->errorMessage
        ];
    }
}
