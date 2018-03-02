<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/3column.htm */
class __TwigTemplate_76ce45729744d4a882528062894a39aa3e5bedb317e316301eecf627655728ed extends Twig_Template
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
        echo "<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <div class=\"col-lg-4\">

        <!--Card-->
        <div class=\"card hoverable mb-r\">
            ";
            // line 8
            $context["image"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "first", array());
            // line 9
            echo "            <!--Card image-->
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">
                <img data-src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "filename", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "description", array()), "html", null, true);
            echo "\">
            </a>

            <!--Card content-->
            <div class=\"card-body\">
                <!--Title-->
                <h4 class=\"card-title dark-grey-text\">
                    <strong>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</strong>
                </h4>
                <h6 class=\"blue-text font-small font-bold\">
                    <strong>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</strong>
                </h6>
                <!--Text-->
                <p class=\"card-text\">";
            // line 24
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array());
            echo "</p>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\">Button</a>
            </div>

        </div>
        <!--/.Card-->

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/3column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  72 => 25,  68 => 24,  62 => 21,  56 => 18,  42 => 11,  38 => 10,  35 => 9,  33 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">

    {% for post in posts %}
    <div class=\"col-lg-4\">

        <!--Card-->
        <div class=\"card hoverable mb-r\">
            {% set image = post.featured_images.first %}
            <!--Card image-->
            <a href=\"{{ post.url }}\">
                <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" class=\"img-fluid\" alt=\"{{ image.description }}\">
            </a>

            <!--Card content-->
            <div class=\"card-body\">
                <!--Title-->
                <h4 class=\"card-title dark-grey-text\">
                    <strong>{{ post.title }}</strong>
                </h4>
                <h6 class=\"blue-text font-small font-bold\">
                    <strong>{{ post.published_at|date('M d, Y') }}</strong>
                </h6>
                <!--Text-->
                <p class=\"card-text\">{{ post.summary|raw }}</p>
                <a href=\"{{ post.url }}\" class=\"btn btn-primary btn-md\">Button</a>
            </div>

        </div>
        <!--/.Card-->

    </div>
    {% endfor %}
    
</div>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/3column.htm", "");
    }
}
