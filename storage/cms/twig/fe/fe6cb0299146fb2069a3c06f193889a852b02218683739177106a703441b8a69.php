<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/pagination.htm */
class __TwigTemplate_65d2492a4a905d5108f7611733eb097140f8b2534f8d875d32aa00c362c831c5 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 2
            echo "    <nav class=\"my-4 d-flex justify-content-center wow fadeIn\" data-wow-delay=\"0.2s\">
        <ul class=\"pagination\">
            ";
            // line 4
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 5
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 6
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>
            ";
            }
            // line 12
            echo "
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                echo "                <li class=\"page-item ";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a class=\"page-link\" href=\"";
                // line 15
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()))) {
                // line 20
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 21
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
            ";
            }
            // line 27
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  70 => 21,  67 => 20,  65 => 19,  62 => 18,  51 => 15,  46 => 14,  42 => 13,  39 => 12,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if posts.lastPage > 1 %}
    <nav class=\"my-4 d-flex justify-content-center wow fadeIn\" data-wow-delay=\"0.2s\">
        <ul class=\"pagination\">
            {% if posts.currentPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>
            {% endif %}

            {% for page in 1..posts.lastPage %}
                <li class=\"page-item {{ posts.currentPage == page ? 'active' : null }}\">
                    <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                </li>
            {% endfor %}

            {% if posts.lastPage > posts.currentPage %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/pagination.htm", "");
    }
}
