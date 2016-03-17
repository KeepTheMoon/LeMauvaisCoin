<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cf1c510ac768d0b83528f3a20eed98092c4c3e49db31aa8ebb813958944c006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ca44725ef856547b503782ff62f5ca10ef2a1b5928754f2654afb0fe511581e = $this->env->getExtension("native_profiler");
        $__internal_7ca44725ef856547b503782ff62f5ca10ef2a1b5928754f2654afb0fe511581e->enter($__internal_7ca44725ef856547b503782ff62f5ca10ef2a1b5928754f2654afb0fe511581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca44725ef856547b503782ff62f5ca10ef2a1b5928754f2654afb0fe511581e->leave($__internal_7ca44725ef856547b503782ff62f5ca10ef2a1b5928754f2654afb0fe511581e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8277e7dbc8151ac9be4827539da3db3d6d7c3f3442b97022d46418c4a8b97db = $this->env->getExtension("native_profiler");
        $__internal_a8277e7dbc8151ac9be4827539da3db3d6d7c3f3442b97022d46418c4a8b97db->enter($__internal_a8277e7dbc8151ac9be4827539da3db3d6d7c3f3442b97022d46418c4a8b97db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8277e7dbc8151ac9be4827539da3db3d6d7c3f3442b97022d46418c4a8b97db->leave($__internal_a8277e7dbc8151ac9be4827539da3db3d6d7c3f3442b97022d46418c4a8b97db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_395a3fb565b1f9297901fcf211b99a238bae7c44d464ecfd1c3da15d8d038f33 = $this->env->getExtension("native_profiler");
        $__internal_395a3fb565b1f9297901fcf211b99a238bae7c44d464ecfd1c3da15d8d038f33->enter($__internal_395a3fb565b1f9297901fcf211b99a238bae7c44d464ecfd1c3da15d8d038f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_395a3fb565b1f9297901fcf211b99a238bae7c44d464ecfd1c3da15d8d038f33->leave($__internal_395a3fb565b1f9297901fcf211b99a238bae7c44d464ecfd1c3da15d8d038f33_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f29e4b75062c2edfb81f5a3e9dbc06ea60d6552e72fe86269c467bcdb6535164 = $this->env->getExtension("native_profiler");
        $__internal_f29e4b75062c2edfb81f5a3e9dbc06ea60d6552e72fe86269c467bcdb6535164->enter($__internal_f29e4b75062c2edfb81f5a3e9dbc06ea60d6552e72fe86269c467bcdb6535164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f29e4b75062c2edfb81f5a3e9dbc06ea60d6552e72fe86269c467bcdb6535164->leave($__internal_f29e4b75062c2edfb81f5a3e9dbc06ea60d6552e72fe86269c467bcdb6535164_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
