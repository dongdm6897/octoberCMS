<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/event/details.htm */
class __TwigTemplate_fbb413997728792208b0dac72cce6c132d1e484b78b1496db7a91401c5a9abb9 extends Twig_Template
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
        $context["imgTest"] = ("/octoberCMS/storage/app/media/topic/" . "test.png");
        // line 2
        $context["arrayImg"] = array(0 => "/octoberCMS/storage/app/media/topic/test1.png", 1 => "/octoberCMS/storage/app/media/topic/test1.png", 2 => "/octoberCMS/storage/app/media/topic/test1.png");
        // line 3
        $context["icon_cor"] = "/octoberCMS/storage/app/media/topic/icon_cor.png";
        // line 4
        echo "
<main>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img class=\"img-fluid\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["imgTest"] ?? null), "html", null, true);
        echo "\"  width=\"100%\"  alt=\"Title\">
            </div>
        </div>
        <div class=\"row mt-4 \">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrayImg"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 14
            echo "                    <div class=\"col\">
                        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $context["img"], "html", null, true);
            echo "\" alt=\"content\" class=\"img-fluid\">
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>

        <br>
        <hr />
        <!--media object-->
        <div class=\"media\">
            <img class=\"d-flex align-self-start mr-3\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["icon_cor"] ?? null), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
            <div class=\"media-body\">
                <div>
                    <h5 class=\"mt-0\">ViFarm Up</h5>

                </div>
                <p>Người tổ chức: công ty Vifarms</p>
                <p>Time: 2018/02/15 18:00 (còn 10 ngày nữa)</p>
                <p>Số người cần thiết: 50 người</p>
                <p>Số người đã đăng kí tham gia: 10 người</p>
                <p>Địa điểm xuất phát: Hà Nội</p>
                <p>Đích đến: Mộc Châu</p>
                <p>Cách thức di chuyển: đi tập trung, theo bus</p>
                <p>Chi phí tham gia: 100.000đ</p>
                <p>Chi phí hủy chuyến (trước 1 ngày): 40%</p>
            </div>
        </div>

        <br>
        <!-- Tag -->
        <div>
            <ul class=\"list-group-horizontal\">
                <li class=\"list-group-item\">Phượt</li>
                <li class=\"list-group-item\">Học hỏi</li>
                <li class=\"list-group-item\">Tình Nguyện</li>
                <li class=\"list-group-item\">Du lich</li>
                <li class=\"list-group-item\">WorkShop</li>
                <li class=\"list-group-item\">Filter</li>
            </ul>
            <hr >
        </div>
        <!--google map-->
        ";
        // line 56
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("googlemap/location.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 57
        echo "
        <!--mô tả chương trình-->
        <h3>Mô tả chương trình</h3>
        <div class=\"row\">
            <div class=\"col-12\" style=\"background-color: #FF0000;height: 10rem\" >
            </div>
        </div>


        <!--comment-->
        <h3>Comment</h3>
        <div class=\"row\">
            <div class=\"col-12\" style=\"background-color: #00A000;height: 10rem\">
            </div>
        </div>

        <!--các hoạt động -->
        <h3>Các hoạt động</h3>
        <div class=\"row\">
            <div class=\"col-12\" style=\"background-color: yellowgreen;height: 10rem\">
            </div>
        </div>

    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/event/details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 57,  98 => 56,  63 => 24,  55 => 18,  46 => 15,  43 => 14,  39 => 13,  32 => 9,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set imgTest = '/octoberCMS/storage/app/media/topic/'~'test.png' %}
{% set arrayImg = ['/octoberCMS/storage/app/media/topic/test1.png','/octoberCMS/storage/app/media/topic/test1.png','/octoberCMS/storage/app/media/topic/test1.png'] %}
{% set icon_cor = '/octoberCMS/storage/app/media/topic/icon_cor.png' %}

<main>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img class=\"img-fluid\" src=\"{{imgTest}}\"  width=\"100%\"  alt=\"Title\">
            </div>
        </div>
        <div class=\"row mt-4 \">
                {% for img in arrayImg %}
                    <div class=\"col\">
                        <img src=\"{{img}}\" alt=\"content\" class=\"img-fluid\">
                    </div>
                {% endfor%}
        </div>

        <br>
        <hr />
        <!--media object-->
        <div class=\"media\">
            <img class=\"d-flex align-self-start mr-3\" src=\"{{icon_cor}}\" alt=\"Generic placeholder image\">
            <div class=\"media-body\">
                <div>
                    <h5 class=\"mt-0\">ViFarm Up</h5>

                </div>
                <p>Người tổ chức: công ty Vifarms</p>
                <p>Time: 2018/02/15 18:00 (còn 10 ngày nữa)</p>
                <p>Số người cần thiết: 50 người</p>
                <p>Số người đã đăng kí tham gia: 10 người</p>
                <p>Địa điểm xuất phát: Hà Nội</p>
                <p>Đích đến: Mộc Châu</p>
                <p>Cách thức di chuyển: đi tập trung, theo bus</p>
                <p>Chi phí tham gia: 100.000đ</p>
                <p>Chi phí hủy chuyến (trước 1 ngày): 40%</p>
            </div>
        </div>

        <br>
        <!-- Tag -->
        <div>
            <ul class=\"list-group-horizontal\">
                <li class=\"list-group-item\">Phượt</li>
                <li class=\"list-group-item\">Học hỏi</li>
                <li class=\"list-group-item\">Tình Nguyện</li>
                <li class=\"list-group-item\">Du lich</li>
                <li class=\"list-group-item\">WorkShop</li>
                <li class=\"list-group-item\">Filter</li>
            </ul>
            <hr >
        </div>
        <!--google map-->
        {% content 'googlemap/location.htm'%}

        <!--mô tả chương trình-->
        <h3>Mô tả chương trình</h3>
        <div class=\"row\">
            <div class=\"col-12\" style=\"background-color: #FF0000;height: 10rem\" >
            </div>
        </div>


        <!--comment-->
        <h3>Comment</h3>
        <div class=\"row\">
            <div class=\"col-12\" style=\"background-color: #00A000;height: 10rem\">
            </div>
        </div>

        <!--các hoạt động -->
        <h3>Các hoạt động</h3>
        <div class=\"row\">
            <div class=\"col-12\" style=\"background-color: yellowgreen;height: 10rem\">
            </div>
        </div>

    </div>
</main>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/event/details.htm", "");
    }
}
