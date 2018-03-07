<?php

/* C:\xampp\htdocs\octoberCMS/plugins/dongdm/registerpartner/components/register/default.htm */
class __TwigTemplate_1844b62842649ca89b4b0f2e54cb40075e9c4d1140575701a96f171be0792b17 extends Twig_Template
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
    <div class=\"row\">
        <div class=\"col\">
            <p class=\"h5 text-center mb-4\">Register</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6\" id=\"myForm\">
            <form data-request=\"onSubmit\" data-request-files data-request-flash>

                <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
                ";
        // line 12
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "


                <!--Tên nhà sản xuất-->
                <div class=\"md-form\">
                    <i class=\"fa fa-book prefix grey-text\" aria-hidden=\"true\"></i>
                    <input type=\"text\" id=\"orangeForm-name\" class=\"form-control\" name=\"name\">
                    <label for=\"orangeForm-name\">Corporation name</label>
                </div>
                <!--Đia chỉ-->
                <div class=\"md-form\">
                    <i class=\"fa fa-address-card prefix grey-text\" aria-hidden=\"true\" ></i>
                    <input type=\"text\" id=\"orangeForm-address\" class=\"form-control\" name=\"address\">
                    <label for=\"orangeForm-address\">Your address</label>
                </div>
                <!--Sản phẩm-->
                <div class=\"md-form\">

                    <i class=\"fa fa-diamond prefix grey-text\" ></i>
                    <input type=\"text\" id=\"orangeForm-product\" class=\"form-control\" name=\"product\">
                    <label for=\"orangeForm-product\">Your product</label>
                </div>
                <!--Miêu tả về sản phẩm-->
                <div class=\"md-form\">
                    <i class=\"fa fa-pencil prefix grey-text\"></i>
                    <input type=\"text\" id=\"form8\" class=\"md-textarea\" style=\"height: 100px\" name=\"description\">
                    <label for=\"form8\">Your message</label>
                </div>
                <!--buuton-->
                <div class=\"md-form\">
                    <i class=\"fa fa-upload prefix grey-text\" ></i>
                    <input type=\"file\" name=\"avatarimage\" accept=\"image/*\" data-request=\"onImageUpload\" data-request-files data-request-flash>

                </div>

                <br><br>



                <div class=\"text-center\">
                    <button type=\"button\" class=\"btn btn-danger\">Send</button>
                </div>


            </form>
        </div>
        <div class=\"col-sm-12 col-md-6\">

            <!--google map-->
            <div class=\"row\" >
                ";
        // line 63
        $context['__cms_content_params'] = [];
        $context['__cms_content_params']['he'] =         twig_escape_filter($this->env, 25        )        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("googlemap/location"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 64
        echo "            </div>
            <div class=\"row mt-2 ml-1\">
                <div id=\"imageResult\"></div>
            </div>
            <!--&lt;!&ndash;get height div form&ndash;&gt;-->
            <!--<script>-->
                <!--\$(document).ready(function{-->
                    <!--\$heightForm = \$('#myForm').height();-->
                    <!--\$('#gmap').css('height',\$heightForm/4);-->
                <!--});-->
            <!--</script>-->

        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/plugins/dongdm/registerpartner/components/register/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 64,  89 => 63,  36 => 13,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <p class=\"h5 text-center mb-4\">Register</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6\" id=\"myForm\">
            <form data-request=\"onSubmit\" data-request-files data-request-flash>

                <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
                {{ form_token() }}
                {{ form_sessionKey() }}


                <!--Tên nhà sản xuất-->
                <div class=\"md-form\">
                    <i class=\"fa fa-book prefix grey-text\" aria-hidden=\"true\"></i>
                    <input type=\"text\" id=\"orangeForm-name\" class=\"form-control\" name=\"name\">
                    <label for=\"orangeForm-name\">Corporation name</label>
                </div>
                <!--Đia chỉ-->
                <div class=\"md-form\">
                    <i class=\"fa fa-address-card prefix grey-text\" aria-hidden=\"true\" ></i>
                    <input type=\"text\" id=\"orangeForm-address\" class=\"form-control\" name=\"address\">
                    <label for=\"orangeForm-address\">Your address</label>
                </div>
                <!--Sản phẩm-->
                <div class=\"md-form\">

                    <i class=\"fa fa-diamond prefix grey-text\" ></i>
                    <input type=\"text\" id=\"orangeForm-product\" class=\"form-control\" name=\"product\">
                    <label for=\"orangeForm-product\">Your product</label>
                </div>
                <!--Miêu tả về sản phẩm-->
                <div class=\"md-form\">
                    <i class=\"fa fa-pencil prefix grey-text\"></i>
                    <input type=\"text\" id=\"form8\" class=\"md-textarea\" style=\"height: 100px\" name=\"description\">
                    <label for=\"form8\">Your message</label>
                </div>
                <!--buuton-->
                <div class=\"md-form\">
                    <i class=\"fa fa-upload prefix grey-text\" ></i>
                    <input type=\"file\" name=\"avatarimage\" accept=\"image/*\" data-request=\"onImageUpload\" data-request-files data-request-flash>

                </div>

                <br><br>



                <div class=\"text-center\">
                    <button type=\"button\" class=\"btn btn-danger\">Send</button>
                </div>


            </form>
        </div>
        <div class=\"col-sm-12 col-md-6\">

            <!--google map-->
            <div class=\"row\" >
                {%content 'googlemap/location' he=25 %}
            </div>
            <div class=\"row mt-2 ml-1\">
                <div id=\"imageResult\"></div>
            </div>
            <!--&lt;!&ndash;get height div form&ndash;&gt;-->
            <!--<script>-->
                <!--\$(document).ready(function{-->
                    <!--\$heightForm = \$('#myForm').height();-->
                    <!--\$('#gmap').css('height',\$heightForm/4);-->
                <!--});-->
            <!--</script>-->

        </div>

    </div>
</div>", "C:\\xampp\\htdocs\\octoberCMS/plugins/dongdm/registerpartner/components/register/default.htm", "");
    }
}
