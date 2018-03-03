<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/adong/simpleNav.htm */
class __TwigTemplate_8f7455ca058d421c606f4e6998115ae8a2ae2181cc8015b4d024cf10d12392ca extends Twig_Template
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
        echo "<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark nav-blue\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 14
            echo "        ";
            $context["items"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array());
            // line 15
            echo "        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "                <li class=\"nav-item ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))) {
                    echo " active ";
                }
                echo "\">
                    <a class=\"nav-link\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                echo " ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))) {
                    echo " <span class=\"sr-only\">(current)</span> ";
                }
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        // line 23
        echo "        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/adong/simpleNav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  68 => 22,  53 => 19,  46 => 18,  42 => 17,  38 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark nav-blue\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        {% if staticMenu.menuItems %}
        {% set items = staticMenu.menuItems %}
        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            {% for item in items %}
                <li class=\"nav-item {% if this.page.title == item.title %} active {% endif %}\">
                    <a class=\"nav-link\" href=\"{{ item.url }}\">{{ item.title }} {% if this.page.title == item.title %} <span class=\"sr-only\">(current)</span> {% endif %}</a>
                </li>
            {% endfor %}
        {% endif %}
        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/adong/simpleNav.htm", "");
    }
}
