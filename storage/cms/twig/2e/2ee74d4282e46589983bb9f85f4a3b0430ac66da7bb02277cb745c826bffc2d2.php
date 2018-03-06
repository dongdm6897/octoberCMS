<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/post.htm */
class __TwigTemplate_d9c4c6dd9872ddc9ef86b9ac060ba4a12d5a0eb74afadb0a57b4b22230a1c613 extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPost"] ?? null), "post", array());
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/post"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = blogPost.post %}

{% partial 'blog/post' %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/post.htm", "");
    }
}
