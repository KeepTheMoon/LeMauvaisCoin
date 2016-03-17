<?php

/* base.html.twig */
class __TwigTemplate_20cc095624183b276c635a9cca159d9a0fbdef57c1f27396db3ad7b4741aed0a extends Twig_Template
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
        $__internal_7612d061c67ca1727ccb785a9621bf9525d74925a34943d026f4dc3c53112664 = $this->env->getExtension("native_profiler");
        $__internal_7612d061c67ca1727ccb785a9621bf9525d74925a34943d026f4dc3c53112664->enter($__internal_7612d061c67ca1727ccb785a9621bf9525d74925a34943d026f4dc3c53112664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
</html>";
        
        $__internal_7612d061c67ca1727ccb785a9621bf9525d74925a34943d026f4dc3c53112664->leave($__internal_7612d061c67ca1727ccb785a9621bf9525d74925a34943d026f4dc3c53112664_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62cf1ac1b8ffd69147d5130a1673fdc03b62730012447635269a4d4736afe58a = $this->env->getExtension("native_profiler");
        $__internal_62cf1ac1b8ffd69147d5130a1673fdc03b62730012447635269a4d4736afe58a->enter($__internal_62cf1ac1b8ffd69147d5130a1673fdc03b62730012447635269a4d4736afe58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LeBonCoin.fr";
        
        $__internal_62cf1ac1b8ffd69147d5130a1673fdc03b62730012447635269a4d4736afe58a->leave($__internal_62cf1ac1b8ffd69147d5130a1673fdc03b62730012447635269a4d4736afe58a_prof);

    }

    // line 26
    public function block_offre($context, array $blocks = array())
    {
        $__internal_021eed04f3a3fa8947e069d604a74176ea8b3f7ead8ab8b522dd66cfa9239c67 = $this->env->getExtension("native_profiler");
        $__internal_021eed04f3a3fa8947e069d604a74176ea8b3f7ead8ab8b522dd66cfa9239c67->enter($__internal_021eed04f3a3fa8947e069d604a74176ea8b3f7ead8ab8b522dd66cfa9239c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        
        $__internal_021eed04f3a3fa8947e069d604a74176ea8b3f7ead8ab8b522dd66cfa9239c67->leave($__internal_021eed04f3a3fa8947e069d604a74176ea8b3f7ead8ab8b522dd66cfa9239c67_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_00a4114e3e155ecf39b9e126c34bb499baa74ddabdc0d17db236367274b4c994 = $this->env->getExtension("native_profiler");
        $__internal_00a4114e3e155ecf39b9e126c34bb499baa74ddabdc0d17db236367274b4c994->enter($__internal_00a4114e3e155ecf39b9e126c34bb499baa74ddabdc0d17db236367274b4c994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_00a4114e3e155ecf39b9e126c34bb499baa74ddabdc0d17db236367274b4c994->leave($__internal_00a4114e3e155ecf39b9e126c34bb499baa74ddabdc0d17db236367274b4c994_prof);

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
        return array (  118 => 41,  107 => 26,  95 => 5,  78 => 42,  76 => 41,  58 => 26,  43 => 14,  31 => 5,  25 => 1,);
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
