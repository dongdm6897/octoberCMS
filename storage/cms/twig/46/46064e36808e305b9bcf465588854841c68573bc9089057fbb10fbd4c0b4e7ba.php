<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/event/topic_detail.htm */
class __TwigTemplate_634efd973196604435f4b261d6f340eb9e4a88d8c5dc48f171bd6545586b3a57 extends Twig_Template
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
        $context["imgTest"] = "/octoberCMS/storage/app/media/topic/subject.png";
        // line 2
        $context["content"] = "This is Content";
        // line 3
        echo "


    <!--Second row-->
    <div class=\"row mt-5 pt-4\">
        <!--First columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["imgTest"] ?? null), "html", null, true);
        echo "\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("event/event-details", array("event_id" => 10));
        echo "\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.4s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["imgTest"] ?? null), "html", null, true);
        echo "\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.6s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["imgTest"] ?? null), "html", null, true);
        echo "\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">";
        // line 72
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
    </div>
    <!--/.Second row-->

    <!--Third row-->
    <div class=\"row mb-4\">
        <!--First columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["imgTest"] ?? null), "html", null, true);
        echo "\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">";
        // line 100
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.4s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["imgTest"] ?? null), "html", null, true);
        echo "\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">";
        // line 124
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.6s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, ($context["imgTest"] ?? null), "html", null, true);
        echo "\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">";
        // line 149
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
    </div>
    <!--/.Third row-->

    <!--Pagination dark grey-->
    <div class=\"row my-4 d-flex justify-content-center\">
        <nav>
            <ul class=\"pagination primary\">
                <!--Arrow left-->
                <li class=\"page-item\">
                    <a class=\"page-link\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>

                <!--Numbers-->
                <li class=\"page-item active\">
                    <a class=\"page-link\">1</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">2</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">3</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">4</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">5</a>
                </li>

                <!--Arrow right-->
                <li class=\"page-item\">
                    <a class=\"page-link\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--/Pagination dark grey-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/event/topic_detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 149,  195 => 140,  176 => 124,  164 => 115,  146 => 100,  134 => 91,  112 => 72,  100 => 63,  81 => 47,  69 => 38,  52 => 24,  48 => 23,  36 => 14,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set imgTest = '/octoberCMS/storage/app/media/topic/subject.png' %}
{% set content = 'This is Content' %}



    <!--Second row-->
    <div class=\"row mt-5 pt-4\">
        <!--First columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"{{imgTest}}\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">{{content}}</p>
                    <a href=\"{{ 'event/event-details'|page({event_id:10})}}\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.4s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"{{imgTest}}\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">{{content}}</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card wow fadeIn\" data-wow-delay=\"0.6s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"{{imgTest}}\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">{{content}}</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
    </div>
    <!--/.Second row-->

    <!--Third row-->
    <div class=\"row mb-4\">
        <!--First columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.2s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"{{imgTest}}\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">{{content}}</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.4s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"{{imgTest}}\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">{{content}}</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class=\"col-lg-4\">
            <!--Card-->
            <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.6s\">

                <!--Card image-->
                <img class=\"img-fluid\" src=\"{{imgTest}}\" alt=\"Card image cap\">

                <!--Card content-->
                <div class=\"card-body\">
                    <!--Title-->
                    <h4 class=\"card-title\">
                        <strong>This is title</strong>
                    </h4>
                    <!--Text-->
                    <p class=\"card-text\">{{content}}</p>
                    <a href=\"#\" class=\"btn btn-blue btn-md\">Read more</a>
                </div>

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
    </div>
    <!--/.Third row-->

    <!--Pagination dark grey-->
    <div class=\"row my-4 d-flex justify-content-center\">
        <nav>
            <ul class=\"pagination primary\">
                <!--Arrow left-->
                <li class=\"page-item\">
                    <a class=\"page-link\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>

                <!--Numbers-->
                <li class=\"page-item active\">
                    <a class=\"page-link\">1</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">2</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">3</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">4</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\">5</a>
                </li>

                <!--Arrow right-->
                <li class=\"page-item\">
                    <a class=\"page-link\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--/Pagination dark grey-->
</div>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/event/topic_detail.htm", "");
    }
}
