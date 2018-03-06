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
        echo "<form data-request=\"onSubmit\" data-request-files data-request-flash>

    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "

    <p class=\"h5 text-center mb-4\">Register</p>

    <div class=\"md-form\">
        <i class=\"fa fa-book prefix grey-text\" aria-hidden=\"true\"></i>
        <input type=\"text\" id=\"orangeForm-name\" class=\"form-control\" name=\"name\">
        <label for=\"orangeForm-name\">Corporation name</label>
    </div>
    <div class=\"md-form\">
        <i class=\"fa fa-address-card prefix grey-text\" aria-hidden=\"true\" ></i>
        <input type=\"text\" id=\"orangeForm-address\" class=\"form-control\" name=\"address\">
        <label for=\"orangeForm-address\">Your address</label>
    </div>


    <div class=\"md-form\">

        <i class=\"fa fa-diamond prefix grey-text\" ></i>
        <input type=\"text\" id=\"orangeForm-product\" class=\"form-control\" name=\"product\">
        <label for=\"orangeForm-product\">Your product</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-pencil prefix grey-text\"></i>
        <input type=\"text\" id=\"form8\" class=\"md-textarea\" style=\"height: 100px\" name=\"description\">
        <label for=\"form8\">Your message</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-upload prefix grey-text\" ></i>
        <input type=\"file\" name=\"avatarimage\" accept=\"image/*\" data-request=\"onImageUpload\" data-request-files data-request-flash>

    </div>
    <div id=\"imageResult\">No image to preview!</div>
    <br><br>



    <div class=\"text-center\">
        <button class=\"btn btn-deep-orange\">Send</button>
    </div>


</form>";
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
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"onSubmit\" data-request-files data-request-flash>

    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    {{ form_token() }}
    {{ form_sessionKey() }}

    <p class=\"h5 text-center mb-4\">Register</p>

    <div class=\"md-form\">
        <i class=\"fa fa-book prefix grey-text\" aria-hidden=\"true\"></i>
        <input type=\"text\" id=\"orangeForm-name\" class=\"form-control\" name=\"name\">
        <label for=\"orangeForm-name\">Corporation name</label>
    </div>
    <div class=\"md-form\">
        <i class=\"fa fa-address-card prefix grey-text\" aria-hidden=\"true\" ></i>
        <input type=\"text\" id=\"orangeForm-address\" class=\"form-control\" name=\"address\">
        <label for=\"orangeForm-address\">Your address</label>
    </div>


    <div class=\"md-form\">

        <i class=\"fa fa-diamond prefix grey-text\" ></i>
        <input type=\"text\" id=\"orangeForm-product\" class=\"form-control\" name=\"product\">
        <label for=\"orangeForm-product\">Your product</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-pencil prefix grey-text\"></i>
        <input type=\"text\" id=\"form8\" class=\"md-textarea\" style=\"height: 100px\" name=\"description\">
        <label for=\"form8\">Your message</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-upload prefix grey-text\" ></i>
        <input type=\"file\" name=\"avatarimage\" accept=\"image/*\" data-request=\"onImageUpload\" data-request-files data-request-flash>

    </div>
    <div id=\"imageResult\">No image to preview!</div>
    <br><br>



    <div class=\"text-center\">
        <button class=\"btn btn-deep-orange\">Send</button>
    </div>


</form>", "C:\\xampp\\htdocs\\octoberCMS/plugins/dongdm/registerpartner/components/register/default.htm", "");
    }
}
