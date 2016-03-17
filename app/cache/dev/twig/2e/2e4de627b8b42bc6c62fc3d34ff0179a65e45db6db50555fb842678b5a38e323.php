<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8b00da0eaf237b0246b8dd525f8b61a46f649b1d1cf2b6d4795b51edbfc8f175 extends Twig_Template
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
        $__internal_81021d2dad56eb54e75ae527ad3061ec59a0efa96022fe1fdec1cf9e632b24af = $this->env->getExtension("native_profiler");
        $__internal_81021d2dad56eb54e75ae527ad3061ec59a0efa96022fe1fdec1cf9e632b24af->enter($__internal_81021d2dad56eb54e75ae527ad3061ec59a0efa96022fe1fdec1cf9e632b24af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81021d2dad56eb54e75ae527ad3061ec59a0efa96022fe1fdec1cf9e632b24af->leave($__internal_81021d2dad56eb54e75ae527ad3061ec59a0efa96022fe1fdec1cf9e632b24af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8ecb1a176d90a35019837f76efef1bd15a959a4957e15eee48fa18ac2e928d2 = $this->env->getExtension("native_profiler");
        $__internal_e8ecb1a176d90a35019837f76efef1bd15a959a4957e15eee48fa18ac2e928d2->enter($__internal_e8ecb1a176d90a35019837f76efef1bd15a959a4957e15eee48fa18ac2e928d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e8ecb1a176d90a35019837f76efef1bd15a959a4957e15eee48fa18ac2e928d2->leave($__internal_e8ecb1a176d90a35019837f76efef1bd15a959a4957e15eee48fa18ac2e928d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96f4f062251be8ff372128d2add34509d455996ce2b23cfc2a12b8c0f0726c3e = $this->env->getExtension("native_profiler");
        $__internal_96f4f062251be8ff372128d2add34509d455996ce2b23cfc2a12b8c0f0726c3e->enter($__internal_96f4f062251be8ff372128d2add34509d455996ce2b23cfc2a12b8c0f0726c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96f4f062251be8ff372128d2add34509d455996ce2b23cfc2a12b8c0f0726c3e->leave($__internal_96f4f062251be8ff372128d2add34509d455996ce2b23cfc2a12b8c0f0726c3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47749db1b45062405692888c0089b4d515f46415289dc7e69e506754d9055f5b = $this->env->getExtension("native_profiler");
        $__internal_47749db1b45062405692888c0089b4d515f46415289dc7e69e506754d9055f5b->enter($__internal_47749db1b45062405692888c0089b4d515f46415289dc7e69e506754d9055f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_47749db1b45062405692888c0089b4d515f46415289dc7e69e506754d9055f5b->leave($__internal_47749db1b45062405692888c0089b4d515f46415289dc7e69e506754d9055f5b_prof);

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
