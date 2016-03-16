<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_25bd1b6e64b17b7a474b481d7bc974ed6fd0a4032fbe6d13043960a11bb6575b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7740b9e8269431d7035389431c55a7477305a02506059912e6e556ca8da17b44 = $this->env->getExtension("native_profiler");
        $__internal_7740b9e8269431d7035389431c55a7477305a02506059912e6e556ca8da17b44->enter($__internal_7740b9e8269431d7035389431c55a7477305a02506059912e6e556ca8da17b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7740b9e8269431d7035389431c55a7477305a02506059912e6e556ca8da17b44->leave($__internal_7740b9e8269431d7035389431c55a7477305a02506059912e6e556ca8da17b44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4c118a896e17a4d0926617f471ff0265de236a8864e286071136788ebccd6ad = $this->env->getExtension("native_profiler");
        $__internal_a4c118a896e17a4d0926617f471ff0265de236a8864e286071136788ebccd6ad->enter($__internal_a4c118a896e17a4d0926617f471ff0265de236a8864e286071136788ebccd6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a4c118a896e17a4d0926617f471ff0265de236a8864e286071136788ebccd6ad->leave($__internal_a4c118a896e17a4d0926617f471ff0265de236a8864e286071136788ebccd6ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74c7412e4bc84b00c1a8c80d5c7cf60fbbf244da969b4fdbabb7fcec91ce42f0 = $this->env->getExtension("native_profiler");
        $__internal_74c7412e4bc84b00c1a8c80d5c7cf60fbbf244da969b4fdbabb7fcec91ce42f0->enter($__internal_74c7412e4bc84b00c1a8c80d5c7cf60fbbf244da969b4fdbabb7fcec91ce42f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74c7412e4bc84b00c1a8c80d5c7cf60fbbf244da969b4fdbabb7fcec91ce42f0->leave($__internal_74c7412e4bc84b00c1a8c80d5c7cf60fbbf244da969b4fdbabb7fcec91ce42f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac87440ad03c28dd8aee315c794b8b54596d42f82387ae1feb810f9351484d70 = $this->env->getExtension("native_profiler");
        $__internal_ac87440ad03c28dd8aee315c794b8b54596d42f82387ae1feb810f9351484d70->enter($__internal_ac87440ad03c28dd8aee315c794b8b54596d42f82387ae1feb810f9351484d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac87440ad03c28dd8aee315c794b8b54596d42f82387ae1feb810f9351484d70->leave($__internal_ac87440ad03c28dd8aee315c794b8b54596d42f82387ae1feb810f9351484d70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
