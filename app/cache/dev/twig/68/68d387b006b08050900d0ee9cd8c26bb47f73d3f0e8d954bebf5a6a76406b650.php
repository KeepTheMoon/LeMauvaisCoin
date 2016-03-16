<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cd85480580dc3dfcd1ebb80f4019b2326e4c84b8760eee8b98b818ff9fd69f6b extends Twig_Template
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
        $__internal_41abb310967ab02b1c876cf8a8225e87e9579be91209acfb59e32d83ff131d16 = $this->env->getExtension("native_profiler");
        $__internal_41abb310967ab02b1c876cf8a8225e87e9579be91209acfb59e32d83ff131d16->enter($__internal_41abb310967ab02b1c876cf8a8225e87e9579be91209acfb59e32d83ff131d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41abb310967ab02b1c876cf8a8225e87e9579be91209acfb59e32d83ff131d16->leave($__internal_41abb310967ab02b1c876cf8a8225e87e9579be91209acfb59e32d83ff131d16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_897dc4396aa2130cbca372cc4f2ca9e5fe4518b192936cd3b4f48ccd871245a9 = $this->env->getExtension("native_profiler");
        $__internal_897dc4396aa2130cbca372cc4f2ca9e5fe4518b192936cd3b4f48ccd871245a9->enter($__internal_897dc4396aa2130cbca372cc4f2ca9e5fe4518b192936cd3b4f48ccd871245a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_897dc4396aa2130cbca372cc4f2ca9e5fe4518b192936cd3b4f48ccd871245a9->leave($__internal_897dc4396aa2130cbca372cc4f2ca9e5fe4518b192936cd3b4f48ccd871245a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ac642c832299301758646e46cc6c0b8ef00107672957fdd57ac7f282f5b6e33 = $this->env->getExtension("native_profiler");
        $__internal_9ac642c832299301758646e46cc6c0b8ef00107672957fdd57ac7f282f5b6e33->enter($__internal_9ac642c832299301758646e46cc6c0b8ef00107672957fdd57ac7f282f5b6e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ac642c832299301758646e46cc6c0b8ef00107672957fdd57ac7f282f5b6e33->leave($__internal_9ac642c832299301758646e46cc6c0b8ef00107672957fdd57ac7f282f5b6e33_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82128c77053c377d63eebd991c9040826e0f5df80ec1a4f59213fc934c28a9e3 = $this->env->getExtension("native_profiler");
        $__internal_82128c77053c377d63eebd991c9040826e0f5df80ec1a4f59213fc934c28a9e3->enter($__internal_82128c77053c377d63eebd991c9040826e0f5df80ec1a4f59213fc934c28a9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_82128c77053c377d63eebd991c9040826e0f5df80ec1a4f59213fc934c28a9e3->leave($__internal_82128c77053c377d63eebd991c9040826e0f5df80ec1a4f59213fc934c28a9e3_prof);

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
