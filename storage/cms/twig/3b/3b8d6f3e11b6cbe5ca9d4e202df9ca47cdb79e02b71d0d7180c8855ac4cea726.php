<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/layouts/login-layout.htm */
class __TwigTemplate_530c203d6ff116099c121c0401871bd5761a8c7a1217bb1d359c87164d269f2e extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
<div >
    
    ";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 6
        echo "    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/layouts/login-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  31 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %} 
<div >
    
    {% page %}
    
</div>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/layouts/login-layout.htm", "");
    }
}
