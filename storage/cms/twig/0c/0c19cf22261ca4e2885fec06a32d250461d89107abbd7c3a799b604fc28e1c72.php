<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/search-events.htm */
class __TwigTemplate_8966fce4f61e0c3e382f4cf6f95e8fed95bcaa3b939368bd5641743c598c0b88 extends Twig_Template
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
    <!--google map-->
        <div class=\"container\">
            <div id=\"map\" style=\"width: 100%;height: 400px\"></div>
            ";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 6
        echo "
            <script>
                function myMap() {
                    var mapOptions = {
                        center: new google.maps.LatLng(20.993099, 105.849653),
                        zoom: 13

                    };
                    var map = new google.maps.Map(document.getElementById(\"map\"), mapOptions);

                }
            </script>

            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqOZsc-3AlMLBbpBW5uLFfEmDyq1XLtMs&callback=myMap\"></script>
            
        </div>

        <br>
        <hr >
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
            <hr >
        </div>

    <!--Card-->
        ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("topic/topic_detail"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "</main>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/search-events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 41,  64 => 40,  28 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<main>
    <!--google map-->
        <div class=\"container\">
            <div id=\"map\" style=\"width: 100%;height: 400px\"></div>
            {% scripts %}

            <script>
                function myMap() {
                    var mapOptions = {
                        center: new google.maps.LatLng(20.993099, 105.849653),
                        zoom: 13

                    };
                    var map = new google.maps.Map(document.getElementById(\"map\"), mapOptions);

                }
            </script>

            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqOZsc-3AlMLBbpBW5uLFfEmDyq1XLtMs&callback=myMap\"></script>
            
        </div>

        <br>
        <hr >
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
            <hr >
        </div>

    <!--Card-->
        {% partial 'topic/topic_detail' %}
</main>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/search-events.htm", "");
    }
}
