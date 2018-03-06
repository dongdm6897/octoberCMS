<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/books.htm */
class __TwigTemplate_671aaeb752dd7572ce0af62824f6732ae2f44c85c711874c3a6db618b53545dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("eventform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/books.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% components 'eventform' %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/books.htm", "");
    }
}
