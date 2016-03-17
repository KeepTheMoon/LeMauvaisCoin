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
        $__internal_5a460606fa15f95337b3cab43ea007c15e3d00932fe093f7a73c94c7243b759d = $this->env->getExtension("native_profiler");
        $__internal_5a460606fa15f95337b3cab43ea007c15e3d00932fe093f7a73c94c7243b759d->enter($__internal_5a460606fa15f95337b3cab43ea007c15e3d00932fe093f7a73c94c7243b759d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a460606fa15f95337b3cab43ea007c15e3d00932fe093f7a73c94c7243b759d->leave($__internal_5a460606fa15f95337b3cab43ea007c15e3d00932fe093f7a73c94c7243b759d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b3a0cf734c6c5bd779a7956a3e2d736a8ad180f5237c2585793be664c514acb = $this->env->getExtension("native_profiler");
        $__internal_2b3a0cf734c6c5bd779a7956a3e2d736a8ad180f5237c2585793be664c514acb->enter($__internal_2b3a0cf734c6c5bd779a7956a3e2d736a8ad180f5237c2585793be664c514acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b3a0cf734c6c5bd779a7956a3e2d736a8ad180f5237c2585793be664c514acb->leave($__internal_2b3a0cf734c6c5bd779a7956a3e2d736a8ad180f5237c2585793be664c514acb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f126c605cb6d73239ec40d5c1712fc1bb44eae1d3b5c1c41cd1247189921e17c = $this->env->getExtension("native_profiler");
        $__internal_f126c605cb6d73239ec40d5c1712fc1bb44eae1d3b5c1c41cd1247189921e17c->enter($__internal_f126c605cb6d73239ec40d5c1712fc1bb44eae1d3b5c1c41cd1247189921e17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f126c605cb6d73239ec40d5c1712fc1bb44eae1d3b5c1c41cd1247189921e17c->leave($__internal_f126c605cb6d73239ec40d5c1712fc1bb44eae1d3b5c1c41cd1247189921e17c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f17e6325a10aa51a5de4a47f7d1c4a287e5ca6263a5bc16bbcd95be04031cf07 = $this->env->getExtension("native_profiler");
        $__internal_f17e6325a10aa51a5de4a47f7d1c4a287e5ca6263a5bc16bbcd95be04031cf07->enter($__internal_f17e6325a10aa51a5de4a47f7d1c4a287e5ca6263a5bc16bbcd95be04031cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f17e6325a10aa51a5de4a47f7d1c4a287e5ca6263a5bc16bbcd95be04031cf07->leave($__internal_f17e6325a10aa51a5de4a47f7d1c4a287e5ca6263a5bc16bbcd95be04031cf07_prof);

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
