<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blogcategories/default.htm */
class __TwigTemplate_29a75b61e525d9eb4df995450f659532ea52932dbf323a0f5f1ba6b2db7f1dd9 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "categories", array())) {
            // line 2
            echo "<div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
    <h4 class=\"font-bold dark-grey-text\">Categories:</h4>
    <br>
    <div class=\"list-group\">
        ";
            // line 6
            $context["categories"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "categories", array());
            // line 7
            echo "        ";
            $context["currentCategorySlug"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "currentCategorySlug", array());
            // line 8
            echo "        
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "            ";
                $context["postCount"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "post_count", array());
                // line 11
                echo "                <a class=\"font-bold list-group-item ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "slug", array()) == ($context["currentCategorySlug"] ?? null))) {
                    echo "active";
                }
                echo "\"
                   href=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo " 
                    ";
                // line 13
                if (($context["postCount"] ?? null)) {
                    // line 14
                    echo "                        <span class=\"badge badge-primary float-right\">";
                    echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 16
                echo "                </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blogcategories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  63 => 16,  57 => 14,  55 => 13,  49 => 12,  42 => 11,  39 => 10,  35 => 9,  32 => 8,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.categories %}
<div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
    <h4 class=\"font-bold dark-grey-text\">Categories:</h4>
    <br>
    <div class=\"list-group\">
        {% set categories = __SELF__.categories %}
        {% set currentCategorySlug = __SELF__.currentCategorySlug %}
        
        {% for category in categories %}
            {% set postCount = category.post_count %}
                <a class=\"font-bold list-group-item {% if category.slug == currentCategorySlug %}active{% endif %}\"
                   href=\"{{ category.url }}\">{{ category.name }} 
                    {% if postCount %}
                        <span class=\"badge badge-primary float-right\">{{ postCount }}</span>
                    {% endif %}
                </a>
        {% endfor %}
    </div>
</div>
{% endif %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blogcategories/default.htm", "");
    }
}
