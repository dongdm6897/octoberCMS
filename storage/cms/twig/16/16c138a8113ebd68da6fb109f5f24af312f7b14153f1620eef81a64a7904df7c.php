<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/site/head.htm */
class __TwigTemplate_7c701d56b31396f962705ba2bc1c91c0a4c1ae59a2685f1e1fc28c88db214336 extends Twig_Template
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
        echo "<html lang=\"en\">
<head>  
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"google-signin-client_id\" content=\"99613043205-6fen8km2e2b77ft7erj7t68m2emijmfg.apps.googleusercontent.com\">
        <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    
    <title>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        
    <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/mdb.min.css", 2 => "assets/css/style.css"));
        // line 20
        echo "\" rel=\"stylesheet\">
    
    ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 23
        echo "</head>
<body>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/site/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 23,  44 => 22,  40 => 20,  38 => 15,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"en\">
<head>  
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"google-signin-client_id\" content=\"99613043205-6fen8km2e2b77ft7erj7t68m2emijmfg.apps.googleusercontent.com\">
        <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    
    <title>{{ this.page.title }}</title>

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        
    <link href=\"{{ [
        'assets/css/bootstrap.min.css',
        'assets/css/mdb.min.css',
        'assets/css/style.css'
       
    ]|theme }}\" rel=\"stylesheet\">
    
    {% styles %}
</head>
<body>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/partials/site/head.htm", "");
    }
}
