<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm */
class __TwigTemplate_fec05952f56b3ef8100ee4204bffbb68c393f42a4755ad285afb9b0301593899 extends Twig_Template
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
        $context["links"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "resetMenu", array(0 => ($context["getMenu"] ?? null)), "method");
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 3
            echo "    
    <div class=\"widget-wrapper\">
        <h4 class=\"dark-grey-text\">";
            // line 5
            echo twig_escape_filter($this->env, twig_replace_filter(($context["subMenu"] ?? null), array("-" => " ")), "html", null, true);
            echo "</h4>
        <div class=\"list-group\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                echo "\" class=\"list-group-item ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  36 => 8,  32 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set links = staticMenu.resetMenu( getMenu ) %}
{% if staticMenu.menuItems %}
    
    <div class=\"widget-wrapper\">
        <h4 class=\"dark-grey-text\">{{ subMenu|replace({'-': ' '}) }}</h4>
        <div class=\"list-group\">
            {% for item in staticMenu.menuItems %}
                <a href=\"{{ item.url }}\" class=\"list-group-item {% if this.page.title == item.title %}active{% endif %}\">{{ item.title }}</a>
            {% endfor %}
        </div>
    </div>

{% endif %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm", "");
    }
}
