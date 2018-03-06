<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm */
class __TwigTemplate_4c856f6addf0a14cda949d9af05c0c3e2d2879117b46f0e40fb880b10845add4 extends Twig_Template
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
        echo "<div class=\"container\">
    <!--row-->
    <div class=\"row wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"col-md-12\">
            <!--Card-->
            <div class=\"card\">

                ";
        // line 8
        $context["image"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "first", array());
        // line 9
        echo "                <!--Card image-->
                <div class=\"view overlay hm-white-slight\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "description", array()), "html", null, true);
        echo "\">
                    <div class=\"mask\"></div>
                </div>

                <!--Card content-->
                <div class=\"card-body mb-3\">
                    <!--Title-->
                    <h3 class=\"card-title text-center mt-2 pb-4\">
                        <strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</strong>
                    </h3>
                    <!--Text-->
                    <div class=\"card-text\">
                        ";
        // line 23
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "
                    </div>
                </div>

                <dif class=\"card-footer text-muted\">
                    Posted";
        // line 28
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 31
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    ";
        }
        // line 33
        echo "                    <small class=\"float-right\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "d M Y"), "html", null, true);
        echo "</small>
                </dif>

            </div>
            <!--/.Card-->
        </div>
    </div>
    <!--/.row-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  106 => 32,  92 => 31,  83 => 30,  66 => 29,  62 => 28,  54 => 23,  47 => 19,  34 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <!--row-->
    <div class=\"row wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"col-md-12\">
            <!--Card-->
            <div class=\"card\">

                {% set image = post.featured_images.first %}
                <!--Card image-->
                <div class=\"view overlay hm-white-slight\">
                    <img src=\"{{ image.path }}\" class=\"img-fluid\" alt=\"{{ image.description }}\">
                    <div class=\"mask\"></div>
                </div>

                <!--Card content-->
                <div class=\"card-body mb-3\">
                    <!--Title-->
                    <h3 class=\"card-title text-center mt-2 pb-4\">
                        <strong>{{ post.title}}</strong>
                    </h3>
                    <!--Text-->
                    <div class=\"card-text\">
                        {{ post.content_html|raw }}
                    </div>
                </div>

                <dif class=\"card-footer text-muted\">
                    Posted{% if post.categories.count %} in
                        {% for category in post.categories %}
                            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                        {% endfor %}
                    {% endif %}
                    <small class=\"float-right\">{{ post.published_at|date('d M Y') }}</small>
                </dif>

            </div>
            <!--/.Card-->
        </div>
    </div>
    <!--/.row-->
</div>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm", "");
    }
}
