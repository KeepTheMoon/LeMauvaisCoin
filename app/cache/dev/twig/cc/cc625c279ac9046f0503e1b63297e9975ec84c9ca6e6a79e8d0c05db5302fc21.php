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
        $__internal_3d7c2e61b618b4593d149920180db5bf47cf2427d637c024a2f34a0e858fc11d = $this->env->getExtension("native_profiler");
        $__internal_3d7c2e61b618b4593d149920180db5bf47cf2427d637c024a2f34a0e858fc11d->enter($__internal_3d7c2e61b618b4593d149920180db5bf47cf2427d637c024a2f34a0e858fc11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7c2e61b618b4593d149920180db5bf47cf2427d637c024a2f34a0e858fc11d->leave($__internal_3d7c2e61b618b4593d149920180db5bf47cf2427d637c024a2f34a0e858fc11d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7067074dd8eb78be16eb85bcd9e6a5a35d97c3f29861cc6c9a100cce7f45e7e1 = $this->env->getExtension("native_profiler");
        $__internal_7067074dd8eb78be16eb85bcd9e6a5a35d97c3f29861cc6c9a100cce7f45e7e1->enter($__internal_7067074dd8eb78be16eb85bcd9e6a5a35d97c3f29861cc6c9a100cce7f45e7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7067074dd8eb78be16eb85bcd9e6a5a35d97c3f29861cc6c9a100cce7f45e7e1->leave($__internal_7067074dd8eb78be16eb85bcd9e6a5a35d97c3f29861cc6c9a100cce7f45e7e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f349553693591a04cb5f19f2b7469bbaa519f928fdf76eae3fd41b4d9de1ba3 = $this->env->getExtension("native_profiler");
        $__internal_2f349553693591a04cb5f19f2b7469bbaa519f928fdf76eae3fd41b4d9de1ba3->enter($__internal_2f349553693591a04cb5f19f2b7469bbaa519f928fdf76eae3fd41b4d9de1ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f349553693591a04cb5f19f2b7469bbaa519f928fdf76eae3fd41b4d9de1ba3->leave($__internal_2f349553693591a04cb5f19f2b7469bbaa519f928fdf76eae3fd41b4d9de1ba3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a74f4e922b2b46cbf865349adcc957b6f0d4d9129af0e176bf980b6ce2013aa = $this->env->getExtension("native_profiler");
        $__internal_8a74f4e922b2b46cbf865349adcc957b6f0d4d9129af0e176bf980b6ce2013aa->enter($__internal_8a74f4e922b2b46cbf865349adcc957b6f0d4d9129af0e176bf980b6ce2013aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8a74f4e922b2b46cbf865349adcc957b6f0d4d9129af0e176bf980b6ce2013aa->leave($__internal_8a74f4e922b2b46cbf865349adcc957b6f0d4d9129af0e176bf980b6ce2013aa_prof);

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
