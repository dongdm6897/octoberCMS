<?php

/* C:\xampp\htdocs\octoberCMS/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_a5c582fd73fab5c9e69d8448bf04b53ae07645672412c78b00bf8192cc8e80dd extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "content", array());
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/plugins/rainlab/pages/components/staticpage/default.htm";
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
        return new Twig_Source("{{ __SELF__.content|raw }}", "C:\\xampp\\htdocs\\octoberCMS/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
