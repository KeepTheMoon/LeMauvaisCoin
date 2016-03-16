<?php

/* AnnoncesBundle:Recherche:search.html.twig */
class __TwigTemplate_5bb03430799f5c165501de4070a775a4e280729edb58ab3586a3815ea7b4dfc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnoncesBundle:Recherche:search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d65f486ae590c515c7565d1bea73e36e898bb8ab5f7b816188c3414bc6a1a2f = $this->env->getExtension("native_profiler");
        $__internal_7d65f486ae590c515c7565d1bea73e36e898bb8ab5f7b816188c3414bc6a1a2f->enter($__internal_7d65f486ae590c515c7565d1bea73e36e898bb8ab5f7b816188c3414bc6a1a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesBundle:Recherche:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d65f486ae590c515c7565d1bea73e36e898bb8ab5f7b816188c3414bc6a1a2f->leave($__internal_7d65f486ae590c515c7565d1bea73e36e898bb8ab5f7b816188c3414bc6a1a2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02b785e24f659bc39349c90f8fce8e71165e2632326a2156e3c25235b7cb6407 = $this->env->getExtension("native_profiler");
        $__internal_02b785e24f659bc39349c90f8fce8e71165e2632326a2156e3c25235b7cb6407->enter($__internal_02b785e24f659bc39349c90f8fce8e71165e2632326a2156e3c25235b7cb6407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AnnoncesBundle:Recherche:search";
        
        $__internal_02b785e24f659bc39349c90f8fce8e71165e2632326a2156e3c25235b7cb6407->leave($__internal_02b785e24f659bc39349c90f8fce8e71165e2632326a2156e3c25235b7cb6407_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_582c6ab3021a445aab3aa16c2dabe508377d1bf82c7c8869f097391a0d250c26 = $this->env->getExtension("native_profiler");
        $__internal_582c6ab3021a445aab3aa16c2dabe508377d1bf82c7c8869f097391a0d250c26->enter($__internal_582c6ab3021a445aab3aa16c2dabe508377d1bf82c7c8869f097391a0d250c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/carte"), "html", null, true);
        echo "\" />

<h1>Welcome to the Recherche:search page</h1>
";
        
        $__internal_582c6ab3021a445aab3aa16c2dabe508377d1bf82c7c8869f097391a0d250c26->leave($__internal_582c6ab3021a445aab3aa16c2dabe508377d1bf82c7c8869f097391a0d250c26_prof);

    }

    public function getTemplateName()
    {
        return "AnnoncesBundle:Recherche:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AnnoncesBundle:Recherche:search{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <img src="{{asset('images/carte')}}" />*/
/* */
/* <h1>Welcome to the Recherche:search page</h1>*/
/* {% endblock %}*/
/* */
