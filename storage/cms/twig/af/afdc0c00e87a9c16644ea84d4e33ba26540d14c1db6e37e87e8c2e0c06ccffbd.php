<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/register-partner.htm */
class __TwigTemplate_ac54be90afb5d5bd1a2ecc3d62e5d04f5741f55c73b880a053219e0705ac946e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("register"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/register-partner.htm";
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
        return new Twig_Source("{% component 'register' %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/register-partner.htm", "");
    }
}
