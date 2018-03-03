<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/Calculator.htm */
class __TwigTemplate_b242f71600182d595705bcae729e7f49f5db5a675d034955a57a6c1a450f762b extends Twig_Template
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
        echo "<h3> This is a calculator</h3>
   
<form class =\"form-inline\" 
        data-request=\"onTest\" 
        data-request-update=\"calcresult: '#result'\"> 
 <input type=\"text\" name =\"value1\" value=\"\" class=\"form-control\" style=\"width:100px\">
 <select name=\"operation\" class =\"form-control\" style=\"width: 70px\">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
</select>
<input type=\"text\" name =\"value2\" value=\"\" class=\"form-control\" style=\"width:100px\">
<button type=\"submit\" class =\"btn btn-primary\">Go</button>
</form>
<h3>Result<small>The calcresult partial</small></h3>
<div id=\"result\">

";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("calcresult"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/Calculator.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 20,  39 => 19,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3> This is a calculator</h3>
   
<form class =\"form-inline\" 
        data-request=\"onTest\" 
        data-request-update=\"calcresult: '#result'\"> 
 <input type=\"text\" name =\"value1\" value=\"\" class=\"form-control\" style=\"width:100px\">
 <select name=\"operation\" class =\"form-control\" style=\"width: 70px\">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
</select>
<input type=\"text\" name =\"value2\" value=\"\" class=\"form-control\" style=\"width:100px\">
<button type=\"submit\" class =\"btn btn-primary\">Go</button>
</form>
<h3>Result<small>The calcresult partial</small></h3>
<div id=\"result\">

{% partial \"calcresult\" %}
</div>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/Calculator.htm", "");
    }
}
