<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/1column.htm */
class __TwigTemplate_42c165197661f41cc8fb7f5982df9b541ec110b20f0dc74abf4a0ebf7d4fe803 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">
    <!--Featured image-->
    ";
            // line 4
            $context["image"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "first", array());
            // line 5
            echo "    <div class=\"col-lg-7\">
        <div class=\"view overlay hm-white-light z-depth-1 rounded\">
            <img data-src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "filename", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "description", array()), "html", null, true);
            echo "\">
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">
                <div class=\"mask\"></div>
            </a>
        </div>
    </div>
    <!--/.Featured image-->

    <!--Post excerpt-->
    <div class=\"col-lg-5\">
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">
            <h2 class=\"post-title font-bold\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</h2>
        </a>
        <h6 class=\"dark-grey-text font-bold font-small\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</h6>
        <p class=\"my-4 dark-grey-text\">";
            // line 21
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array());
            echo "</p>
        <div class=\"read-more\">
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\">Read more</a>
        </div>
    </div>
    <!--/.Post excerpt-->
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/1column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  66 => 21,  62 => 20,  57 => 18,  53 => 17,  41 => 8,  33 => 7,  29 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in posts %}
<div class=\"row mt-5 wow fadeIn\" data-wow-delay=\"0.2s\">
    <!--Featured image-->
    {% set image = post.featured_images.first %}
    <div class=\"col-lg-7\">
        <div class=\"view overlay hm-white-light z-depth-1 rounded\">
            <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" class=\"img-fluid\" alt=\"{{ image.description }}\">
            <a href=\"{{ post.url }}\">
                <div class=\"mask\"></div>
            </a>
        </div>
    </div>
    <!--/.Featured image-->

    <!--Post excerpt-->
    <div class=\"col-lg-5\">
        <a href=\"{{ post.url }}\">
            <h2 class=\"post-title font-bold\">{{ post.title }}</h2>
        </a>
        <h6 class=\"dark-grey-text font-bold font-small\">{{ post.published_at|date('M d, Y') }}</h6>
        <p class=\"my-4 dark-grey-text\">{{ post.summary|raw }}</p>
        <div class=\"read-more\">
            <a href=\"{{ post.url }}\" class=\"btn btn-primary btn-md\">Read more</a>
        </div>
    </div>
    <!--/.Post excerpt-->
</div>
{% endfor %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/1column.htm", "");
    }
}
