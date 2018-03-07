<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm */
class __TwigTemplate_bc2d344962152c79493648d0aa2c7e97b72c83e6777f463c7de4965c99a9526b extends Twig_Template
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
<nav class=\"navbar navbar-expand-lg navbar-dark bg-green\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">
        <img src='/octoberCMS/storage/app/media/topic/vegetable.png' height=\"35px\" width=\"49px\">
        ViFarm Shop
    </a>


    
    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 19
            echo "        ";
            $context["items"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array());
            // line 20
            echo "        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "
                <li class=\"nav-item ";
                // line 24
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array()) || twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array()))) ? ("active") : (""));
                echo "
                    ";
                // line 25
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) ? ("dropdown btn-group") : (""));
                echo "\"
                >
                    <a class=\"nav-link ";
                // line 27
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    echo "'dropdown-toggle' ";
                }
                echo "\"
                            ";
                // line 28
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    echo " id=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"";
                }
                // line 29
                echo "                       href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                echo "\"
                    >
                        ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                echo "

                        ";
                // line 33
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    echo "<span class=\"sr-only\">(current)</span>";
                }
                // line 34
                echo "                    </a>

                    ";
                // line 36
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 37
                    echo "                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\">
                            ";
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 39
                        echo "                                <a class=\"dropdown-item\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "title", array()), "html", null, true);
                        echo "</a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                        </div>
                    ";
                }
                // line 43
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        // line 46
        echo "        </ul>
        <!-- Links -->

        <!-- Search form -->
       <div>
           <a href=\"\" style=\"color: white;text-decoration: none\">Đăng nhập/Đăng ký</a>
           <br>
           <br>
           <br>
       </div>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  127 => 45,  120 => 43,  116 => 41,  105 => 39,  101 => 38,  96 => 37,  94 => 36,  90 => 34,  86 => 33,  81 => 31,  75 => 29,  69 => 28,  63 => 27,  58 => 25,  54 => 24,  51 => 23,  47 => 22,  43 => 20,  40 => 19,  38 => 18,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-green\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">
        <img src='/octoberCMS/storage/app/media/topic/vegetable.png' height=\"35px\" width=\"49px\">
        ViFarm Shop
    </a>


    
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

                <li class=\"nav-item {{ item.isActive or item.isChildActive ? 'active' : '' }}
                    {{ item.items ? 'dropdown btn-group' : '' }}\"
                >
                    <a class=\"nav-link {% if item.items %}'dropdown-toggle' {% endif %}\"
                            {% if item.items %} id=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"{% endif %}
                       href=\"{{ item.url }}\"
                    >
                        {{ item.title }}

                        {% if item.items %}<span class=\"sr-only\">(current)</span>{% endif %}
                    </a>

                    {% if item.items %}
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\">
                            {% for child in item.items %}
                                <a class=\"dropdown-item\" href=\"{{ child.url }}\">{{ child.title }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </li>
            {% endfor %}
        {% endif %}
        </ul>
        <!-- Links -->

        <!-- Search form -->
       <div>
           <a href=\"\" style=\"color: white;text-decoration: none\">Đăng nhập/Đăng ký</a>
           <br>
           <br>
           <br>
       </div>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm", "");
    }
}
