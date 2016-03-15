<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5dc3a62173fe69267ffd1655cba68e3af2342a49d42759b231824aebe6c62186 extends Twig_Template
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
        $__internal_2e03fb89e569563a434544f0153977f6e474233f1f6f0ae1f8708a5001bb7c79 = $this->env->getExtension("native_profiler");
        $__internal_2e03fb89e569563a434544f0153977f6e474233f1f6f0ae1f8708a5001bb7c79->enter($__internal_2e03fb89e569563a434544f0153977f6e474233f1f6f0ae1f8708a5001bb7c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e03fb89e569563a434544f0153977f6e474233f1f6f0ae1f8708a5001bb7c79->leave($__internal_2e03fb89e569563a434544f0153977f6e474233f1f6f0ae1f8708a5001bb7c79_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91e5506777317a56417b8b247dd5ac5945d8a8aa345fc7c14b8082a2a0bccc4a = $this->env->getExtension("native_profiler");
        $__internal_91e5506777317a56417b8b247dd5ac5945d8a8aa345fc7c14b8082a2a0bccc4a->enter($__internal_91e5506777317a56417b8b247dd5ac5945d8a8aa345fc7c14b8082a2a0bccc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91e5506777317a56417b8b247dd5ac5945d8a8aa345fc7c14b8082a2a0bccc4a->leave($__internal_91e5506777317a56417b8b247dd5ac5945d8a8aa345fc7c14b8082a2a0bccc4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a73356b2ebcee7027e6564b4b0cb028b9bdb1b1fbb3f4a01b46ed3342efc08ad = $this->env->getExtension("native_profiler");
        $__internal_a73356b2ebcee7027e6564b4b0cb028b9bdb1b1fbb3f4a01b46ed3342efc08ad->enter($__internal_a73356b2ebcee7027e6564b4b0cb028b9bdb1b1fbb3f4a01b46ed3342efc08ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a73356b2ebcee7027e6564b4b0cb028b9bdb1b1fbb3f4a01b46ed3342efc08ad->leave($__internal_a73356b2ebcee7027e6564b4b0cb028b9bdb1b1fbb3f4a01b46ed3342efc08ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1af66931044ca19384061026af73fcca76429dbc57404c7e7423e8d871f86073 = $this->env->getExtension("native_profiler");
        $__internal_1af66931044ca19384061026af73fcca76429dbc57404c7e7423e8d871f86073->enter($__internal_1af66931044ca19384061026af73fcca76429dbc57404c7e7423e8d871f86073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1af66931044ca19384061026af73fcca76429dbc57404c7e7423e8d871f86073->leave($__internal_1af66931044ca19384061026af73fcca76429dbc57404c7e7423e8d871f86073_prof);

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
