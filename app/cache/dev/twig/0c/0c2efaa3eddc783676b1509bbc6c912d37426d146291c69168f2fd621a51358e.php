<?php

/* AnnoncesBundle:Recherche:search.html.twig */
class __TwigTemplate_f07098e808346744c1770e98246941c3f8e5d25e5b7e0c57f9a40beab8ee146a extends Twig_Template
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
        $__internal_263c0f5e3d831745fbab8c6b20b9e0bfc5a8e8d5cf605a6e85d3cf64bf084c25 = $this->env->getExtension("native_profiler");
        $__internal_263c0f5e3d831745fbab8c6b20b9e0bfc5a8e8d5cf605a6e85d3cf64bf084c25->enter($__internal_263c0f5e3d831745fbab8c6b20b9e0bfc5a8e8d5cf605a6e85d3cf64bf084c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesBundle:Recherche:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263c0f5e3d831745fbab8c6b20b9e0bfc5a8e8d5cf605a6e85d3cf64bf084c25->leave($__internal_263c0f5e3d831745fbab8c6b20b9e0bfc5a8e8d5cf605a6e85d3cf64bf084c25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90e8ec091503545eb7f93dbfaa2ccc1f8fd51e42730e91eff8c93e96fb2c624e = $this->env->getExtension("native_profiler");
        $__internal_90e8ec091503545eb7f93dbfaa2ccc1f8fd51e42730e91eff8c93e96fb2c624e->enter($__internal_90e8ec091503545eb7f93dbfaa2ccc1f8fd51e42730e91eff8c93e96fb2c624e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AnnoncesBundle:Recherche:search";
        
        $__internal_90e8ec091503545eb7f93dbfaa2ccc1f8fd51e42730e91eff8c93e96fb2c624e->leave($__internal_90e8ec091503545eb7f93dbfaa2ccc1f8fd51e42730e91eff8c93e96fb2c624e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3a85afc448c631389d65295c0fe10671c6b483d3ccfb6c2e10c93adc85f291f = $this->env->getExtension("native_profiler");
        $__internal_f3a85afc448c631389d65295c0fe10671c6b483d3ccfb6c2e10c93adc85f291f->enter($__internal_f3a85afc448c631389d65295c0fe10671c6b483d3ccfb6c2e10c93adc85f291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/carte"), "html", null, true);
        echo "\" />

<h1>Welcome to the Recherche:search page</h1>
";
        
        $__internal_f3a85afc448c631389d65295c0fe10671c6b483d3ccfb6c2e10c93adc85f291f->leave($__internal_f3a85afc448c631389d65295c0fe10671c6b483d3ccfb6c2e10c93adc85f291f_prof);

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
