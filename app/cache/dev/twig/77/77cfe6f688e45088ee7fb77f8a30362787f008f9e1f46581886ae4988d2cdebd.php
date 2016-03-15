<?php

/* base.html.twig */
class __TwigTemplate_06433c8d2ed4f376d3e024ce79f720ebefbde221fcad63b5dc75db221c08b6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'offre' => array($this, 'block_offre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66f9b36308e658b5b9fb61be77ea67002a7fe3466310931deb28693725ee9647 = $this->env->getExtension("native_profiler");
        $__internal_66f9b36308e658b5b9fb61be77ea67002a7fe3466310931deb28693725ee9647->enter($__internal_66f9b36308e658b5b9fb61be77ea67002a7fe3466310931deb28693725ee9647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"background.css\" type=\"text/css\" />
<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">


        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Leboncoin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li ";
        // line 26
        $this->displayBlock('offre', $context, $blocks);
        echo " >
                        <a href=\"#\">Offres</a>
                    </li>
                    <li>
                        <a href=\"#\">Demandes</a>
                    </li>
                    <li>
                        <a href=\"#\">Mon compte</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><br>
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        <style>
        body { 
background-image: url(\"bg.jpg\");
}
</style>
     
           <!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
      
    </body>
</html>
";
        
        $__internal_66f9b36308e658b5b9fb61be77ea67002a7fe3466310931deb28693725ee9647->leave($__internal_66f9b36308e658b5b9fb61be77ea67002a7fe3466310931deb28693725ee9647_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03103e26d4ed788ff8302df93e9ae043bed4fe3d064993e8bae1a963ca7ddd6 = $this->env->getExtension("native_profiler");
        $__internal_b03103e26d4ed788ff8302df93e9ae043bed4fe3d064993e8bae1a963ca7ddd6->enter($__internal_b03103e26d4ed788ff8302df93e9ae043bed4fe3d064993e8bae1a963ca7ddd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LeBonCoin.fr";
        
        $__internal_b03103e26d4ed788ff8302df93e9ae043bed4fe3d064993e8bae1a963ca7ddd6->leave($__internal_b03103e26d4ed788ff8302df93e9ae043bed4fe3d064993e8bae1a963ca7ddd6_prof);

    }

    // line 26
    public function block_offre($context, array $blocks = array())
    {
        $__internal_1dfda7b2e8acbe9a5fc5b4c8c5efa52d69a787da537acc6eb5a01ab6bbc14d15 = $this->env->getExtension("native_profiler");
        $__internal_1dfda7b2e8acbe9a5fc5b4c8c5efa52d69a787da537acc6eb5a01ab6bbc14d15->enter($__internal_1dfda7b2e8acbe9a5fc5b4c8c5efa52d69a787da537acc6eb5a01ab6bbc14d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        
        $__internal_1dfda7b2e8acbe9a5fc5b4c8c5efa52d69a787da537acc6eb5a01ab6bbc14d15->leave($__internal_1dfda7b2e8acbe9a5fc5b4c8c5efa52d69a787da537acc6eb5a01ab6bbc14d15_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_61949f58e3b5051a8d6cb3c64c6d7d8dcc62032680238121577841da0a89f8f3 = $this->env->getExtension("native_profiler");
        $__internal_61949f58e3b5051a8d6cb3c64c6d7d8dcc62032680238121577841da0a89f8f3->enter($__internal_61949f58e3b5051a8d6cb3c64c6d7d8dcc62032680238121577841da0a89f8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61949f58e3b5051a8d6cb3c64c6d7d8dcc62032680238121577841da0a89f8f3->leave($__internal_61949f58e3b5051a8d6cb3c64c6d7d8dcc62032680238121577841da0a89f8f3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  108 => 26,  96 => 5,  78 => 42,  76 => 41,  58 => 26,  43 => 14,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}LeBonCoin.fr{% endblock %}</title>*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <link rel="stylesheet" href="background.css" type="text/css" />*/
/* <!-- Optional theme -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* */
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <a class="navbar-brand" href="#">Leboncoin</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li {% block offre %}{% endblock %} >*/
/*                         <a href="#">Offres</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Demandes</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Mon compte</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav><br>*/
/*         {% block body %}{% endblock %}*/
/*         <style>*/
/*         body { */
/* background-image: url("bg.jpg");*/
/* }*/
/* </style>*/
/*      */
/*            <!-- Latest compiled and minified JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*       */
/*     </body>*/
/* </html>*/
/* */
