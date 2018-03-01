<?php

/* C:\xampp\htdocs\octoberCMS/themes/demo/partials/calcresult.htm */
class __TwigTemplate_6edfe3cf6129fcb90e243586609d427cb17e6202d8d480080bd3ae9ac7d8e97c extends Twig_Template
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
        if (($context["result"] ?? null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 6
            echo "    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/demo/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if result %}
    <span class=\"lead\">
        The result is <span class=\"label label-success\">{{ result }}</span>
    </span>
{% else %}
    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
{% endif %}", "C:\\xampp\\htdocs\\octoberCMS/themes/demo/partials/calcresult.htm", "");
    }
}
