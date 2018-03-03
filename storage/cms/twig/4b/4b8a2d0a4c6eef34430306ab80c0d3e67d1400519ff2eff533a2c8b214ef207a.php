<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/layouts/teamProfiles.htm */
class __TwigTemplate_fca180be288c89a5395d84b36d0e37b9d5bbbc6e8c231becb40fd81a2f460a7e extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "






<div class=\"container my-3\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"h2-responsive text-center\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h2>
            <hr>
        </div>
    </div>

    <div class=\"row mb-5 wow fadeIn\" data-wow-delay=\"0.4s\">
        <div class=\"col-md-12\">
            <div class=\"card card-image\"
                 style=\"background-image: url(";
        // line 21
        if (($context["featuredImage"] ?? null)) {
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["featuredImage"] ?? null));
        } else {
            echo "'https://mdbootstrap.com/img/Photos/Others/gradient1.jpg'";
        }
        echo ");\">
                <div class=\"text-white text-center d-flex align-items-center py-5 px-4 my-5\">
                    <div>
                        <h1 class=\"card-title pt-2 mb-4 font-bold\"><strong>";
        // line 24
        echo twig_escape_filter($this->env, ($context["featuredTitle"] ?? null), "html", null, true);
        echo "</strong></h1>
                        <p class=\"mx-5 mb-5\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["featuredText"] ?? null), "html", null, true);
        echo "</p>
                        ";
        // line 26
        if (($context["useBtn"] ?? null)) {
            // line 27
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, ($context["btnLink"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-white btn-rounded\"><i class=\"fa fa-clone left\"></i> ";
            echo twig_escape_filter($this->env, ($context["btnText"] ?? null), "html", null, true);
            echo "</a>
                        ";
        }
        // line 29
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["extraData"] ?? null), "Profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 39
            echo "
        
        
        
        <div class=\"col-lg-3 col-md-6\">
            <!--Card-->
            <div class=\"card mb-r light-grey\">
                <!--Card image-->
                <div class=\"view\">
                    <img src=\"";
            // line 48
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileImage", array()));
            echo "\" class=\"img-fluid mx-auto\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "\">
                    <div class=\"mask waves-effect waves-light\"></div>
                </div>
                <!--Card content-->
                <div class=\"p-3\">
                    <!--Title-->
                    <h5 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "</h5>
                    <!--Text-->
                    <p class=\"card-text text-muted\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array()), "html", null, true);
            echo "</p>
                </div>
                <!--Card footer-->
                <div class=\"card-footer pb-1\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm float-right\"
                            data-toggle=\"modal\"
                            data-target=\"#";
            // line 62
            echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), array(" " => "-")), array("(" => "-")), array(")" => "")), "html", null, true);
            echo "\">
                        View Bio
                    </button>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), array(" " => "-")), array("(" => "-")), array(")" => "")), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <!--Content-->
                <div class=\"modal-content\">
                    <!--Header-->
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title w-100\" id=\"myModalLabel\">
                            ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "
                            ";
            // line 80
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array())) {
                // line 81
                echo "                                <small class=\"text-muted\">- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array()), "html", null, true);
                echo "</small>
                            ";
            }
            // line 83
            echo "                        </h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class=\"modal-body\">
                        <img src=\"";
            // line 90
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileImage", array()));
            echo "\" class=\"img-thumbnail mx-auto d-block\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "\">
                        <br>
                        ";
            // line 92
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileBio", array());
            echo "
                    </div>
                    <!--Footer-->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Modal -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div>
</div>

";
        // line 107
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/layouts/teamProfiles.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 107,  198 => 104,  180 => 92,  173 => 90,  164 => 83,  158 => 81,  156 => 80,  152 => 79,  142 => 72,  129 => 62,  120 => 56,  115 => 54,  104 => 48,  93 => 39,  89 => 38,  78 => 29,  70 => 27,  68 => 26,  64 => 25,  60 => 24,  50 => 21,  39 => 13,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}







<div class=\"container my-3\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"h2-responsive text-center\">{{ this.page.title }}</h2>
            <hr>
        </div>
    </div>

    <div class=\"row mb-5 wow fadeIn\" data-wow-delay=\"0.4s\">
        <div class=\"col-md-12\">
            <div class=\"card card-image\"
                 style=\"background-image: url({% if featuredImage %}{{ featuredImage|media }}{% else %}'https://mdbootstrap.com/img/Photos/Others/gradient1.jpg'{% endif %});\">
                <div class=\"text-white text-center d-flex align-items-center py-5 px-4 my-5\">
                    <div>
                        <h1 class=\"card-title pt-2 mb-4 font-bold\"><strong>{{ featuredTitle }}</strong></h1>
                        <p class=\"mx-5 mb-5\">{{ featuredText }}</p>
                        {% if useBtn %}
                            <a href=\"{{ btnLink }}\" class=\"btn btn-outline-white btn-rounded\"><i class=\"fa fa-clone left\"></i> {{ btnText }}</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        {% for fields in extraData.Profiles %}

        
        
        
        <div class=\"col-lg-3 col-md-6\">
            <!--Card-->
            <div class=\"card mb-r light-grey\">
                <!--Card image-->
                <div class=\"view\">
                    <img src=\"{{ fields.profileImage|media }}\" class=\"img-fluid mx-auto\" alt=\"{{ fields.profileName }}\">
                    <div class=\"mask waves-effect waves-light\"></div>
                </div>
                <!--Card content-->
                <div class=\"p-3\">
                    <!--Title-->
                    <h5 class=\"card-title\">{{ fields.profileName }}</h5>
                    <!--Text-->
                    <p class=\"card-text text-muted\">{{ fields.profileTitle }}</p>
                </div>
                <!--Card footer-->
                <div class=\"card-footer pb-1\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm float-right\"
                            data-toggle=\"modal\"
                            data-target=\"#{{ fields.profileName|replace({' ':'-'})|replace({'(':'-'})|replace({')':''}) }}\">
                        View Bio
                    </button>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"{{ fields.profileName|replace({' ':'-'})|replace({'(':'-'})|replace({')':''}) }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <!--Content-->
                <div class=\"modal-content\">
                    <!--Header-->
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title w-100\" id=\"myModalLabel\">
                            {{ fields.profileName }}
                            {% if fields.profileTitle %}
                                <small class=\"text-muted\">- {{ fields.profileTitle }}</small>
                            {% endif %}
                        </h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class=\"modal-body\">
                        <img src=\"{{ fields.profileImage|media }}\" class=\"img-thumbnail mx-auto d-block\" alt=\"{{ fields.profileName }}\">
                        <br>
                        {{ fields.profileBio|raw }}
                    </div>
                    <!--Footer-->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Modal -->
{% endfor %}
    </div>
</div>

{% partial 'site/footer' %}", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/layouts/teamProfiles.htm", "");
    }
}
