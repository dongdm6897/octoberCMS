<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/event/search-events.htm */
class __TwigTemplate_68bc8e297739feaa26abf0467af02002e56af8013d4f254a35f6402140c7ef83 extends Twig_Template
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
        echo "<main>
    <form class=\"form-inline\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success btn-sm my-0\" type=\"submit\">Search</button>
    </form>

    <!--google map-->
      ";
        // line 8
        $context['__cms_content_params'] = [];
        $context['__cms_content_params']['he'] =         twig_escape_filter($this->env, 50        )        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("googlemap/location.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 9
        echo "    <!--Filter-->
        <div>
            <ul class=\"list-group-horizontal\">
                <li class=\"list-group-item active\">Tất cả</li>
                <li class=\"list-group-item\">Phượt</li>
                <li class=\"list-group-item\">Học hỏi</li>
                <li class=\"list-group-item\">Tình Nguyện</li>
                <li class=\"list-group-item\">Du lich</li>
                <li class=\"list-group-item\">WorkShop</li>
                <li class=\"list-group-item\">Filter</li>
            </ul>
            <hr class=\"hr-red\">
        </div>

    <!--Card-->
        ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("event/topic_detail"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "</main>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/event/search-events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 25,  50 => 24,  33 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<main>
    <form class=\"form-inline\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success btn-sm my-0\" type=\"submit\">Search</button>
    </form>

    <!--google map-->
      {% content 'googlemap/location.htm' he=50 %}
    <!--Filter-->
        <div>
            <ul class=\"list-group-horizontal\">
                <li class=\"list-group-item active\">Tất cả</li>
                <li class=\"list-group-item\">Phượt</li>
                <li class=\"list-group-item\">Học hỏi</li>
                <li class=\"list-group-item\">Tình Nguyện</li>
                <li class=\"list-group-item\">Du lich</li>
                <li class=\"list-group-item\">WorkShop</li>
                <li class=\"list-group-item\">Filter</li>
            </ul>
            <hr class=\"hr-red\">
        </div>

    <!--Card-->
        {% partial 'event/topic_detail' %}
</main>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/event/search-events.htm", "");
    }
}
