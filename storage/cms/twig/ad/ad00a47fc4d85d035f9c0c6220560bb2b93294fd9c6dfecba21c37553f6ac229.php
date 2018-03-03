<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/calcresult.htm */
class __TwigTemplate_fd5c8e96c2d1f6de0adc962d43303809f987dc1c5b04d29504dfc58793305c43 extends Twig_Template
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
        if (($context["answer"] ?? null)) {
            // line 2
            echo "<span class=\"lead\">
The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["answer"] ?? null), "html", null, true);
            echo " </span>
</span>
";
        } else {
            // line 6
            echo " <span class=\"text-muted\">
     Click the button to find out the answer ";
            // line 7
            echo twig_escape_filter($this->env, ($context["answer"] ?? null), "html", null, true);
            echo "
     
 </span>
 ";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if answer %}
<span class=\"lead\">
The result is <span class=\"label label-success\">{{answer}} </span>
</span>
{% else %}
 <span class=\"text-muted\">
     Click the button to find out the answer {{answer}}
     
 </span>
 {% endif %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/calcresult.htm", "");
    }
}
