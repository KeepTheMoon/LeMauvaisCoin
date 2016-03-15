<?php

/* ::base.html.twig */
class __TwigTemplate_19e2666a56c7cdeb1b38782410601c0cab6199ae54da64e29f4795e6c7d818d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bea07fd6c15e38b8805dc4e5bb3479ad85c5c8b9c983bc07ecfd5ee9a3bf28b = $this->env->getExtension("native_profiler");
        $__internal_6bea07fd6c15e38b8805dc4e5bb3479ad85c5c8b9c983bc07ecfd5ee9a3bf28b->enter($__internal_6bea07fd6c15e38b8805dc4e5bb3479ad85c5c8b9c983bc07ecfd5ee9a3bf28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6bea07fd6c15e38b8805dc4e5bb3479ad85c5c8b9c983bc07ecfd5ee9a3bf28b->leave($__internal_6bea07fd6c15e38b8805dc4e5bb3479ad85c5c8b9c983bc07ecfd5ee9a3bf28b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_24f90b2cf21b1c4cafc7ec2260bfdf16784157eb1dfef8170f30c51062c82b3e = $this->env->getExtension("native_profiler");
        $__internal_24f90b2cf21b1c4cafc7ec2260bfdf16784157eb1dfef8170f30c51062c82b3e->enter($__internal_24f90b2cf21b1c4cafc7ec2260bfdf16784157eb1dfef8170f30c51062c82b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_24f90b2cf21b1c4cafc7ec2260bfdf16784157eb1dfef8170f30c51062c82b3e->leave($__internal_24f90b2cf21b1c4cafc7ec2260bfdf16784157eb1dfef8170f30c51062c82b3e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a223b48610791fc106a03c3f3c2bdd2540fb8a09461fc08e5c9810d8a2f91ce4 = $this->env->getExtension("native_profiler");
        $__internal_a223b48610791fc106a03c3f3c2bdd2540fb8a09461fc08e5c9810d8a2f91ce4->enter($__internal_a223b48610791fc106a03c3f3c2bdd2540fb8a09461fc08e5c9810d8a2f91ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a223b48610791fc106a03c3f3c2bdd2540fb8a09461fc08e5c9810d8a2f91ce4->leave($__internal_a223b48610791fc106a03c3f3c2bdd2540fb8a09461fc08e5c9810d8a2f91ce4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_64a327425be921772d135ac4db6244397b0c91045736857d2af9e885dc1097b4 = $this->env->getExtension("native_profiler");
        $__internal_64a327425be921772d135ac4db6244397b0c91045736857d2af9e885dc1097b4->enter($__internal_64a327425be921772d135ac4db6244397b0c91045736857d2af9e885dc1097b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64a327425be921772d135ac4db6244397b0c91045736857d2af9e885dc1097b4->leave($__internal_64a327425be921772d135ac4db6244397b0c91045736857d2af9e885dc1097b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7830936d29dfbd276474153c6dd36c0506fe8d35968b5cbeb18dee5e6d0e2fc9 = $this->env->getExtension("native_profiler");
        $__internal_7830936d29dfbd276474153c6dd36c0506fe8d35968b5cbeb18dee5e6d0e2fc9->enter($__internal_7830936d29dfbd276474153c6dd36c0506fe8d35968b5cbeb18dee5e6d0e2fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7830936d29dfbd276474153c6dd36c0506fe8d35968b5cbeb18dee5e6d0e2fc9->leave($__internal_7830936d29dfbd276474153c6dd36c0506fe8d35968b5cbeb18dee5e6d0e2fc9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
