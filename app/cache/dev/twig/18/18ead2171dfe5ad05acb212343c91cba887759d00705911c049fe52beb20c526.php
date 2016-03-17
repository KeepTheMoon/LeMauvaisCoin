<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0f3655ce0de8a7833fd16c035b2a2de20d31461b1cb0007a40ac73f0a1729cdc extends Twig_Template
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
        $__internal_d401772de26a8cb7442f52f954c281408618d9dfffad06e664d2f674ccd6de59 = $this->env->getExtension("native_profiler");
        $__internal_d401772de26a8cb7442f52f954c281408618d9dfffad06e664d2f674ccd6de59->enter($__internal_d401772de26a8cb7442f52f954c281408618d9dfffad06e664d2f674ccd6de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d401772de26a8cb7442f52f954c281408618d9dfffad06e664d2f674ccd6de59->leave($__internal_d401772de26a8cb7442f52f954c281408618d9dfffad06e664d2f674ccd6de59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce8e0b2f44e0de4b15c45019184ef6f226e6930f98647a1c11529deb1cfb15b9 = $this->env->getExtension("native_profiler");
        $__internal_ce8e0b2f44e0de4b15c45019184ef6f226e6930f98647a1c11529deb1cfb15b9->enter($__internal_ce8e0b2f44e0de4b15c45019184ef6f226e6930f98647a1c11529deb1cfb15b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce8e0b2f44e0de4b15c45019184ef6f226e6930f98647a1c11529deb1cfb15b9->leave($__internal_ce8e0b2f44e0de4b15c45019184ef6f226e6930f98647a1c11529deb1cfb15b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cc88f40a354b72da6f3a99ae7330e6ef0ed6046dbd4bca9e526b4522b29e093 = $this->env->getExtension("native_profiler");
        $__internal_5cc88f40a354b72da6f3a99ae7330e6ef0ed6046dbd4bca9e526b4522b29e093->enter($__internal_5cc88f40a354b72da6f3a99ae7330e6ef0ed6046dbd4bca9e526b4522b29e093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5cc88f40a354b72da6f3a99ae7330e6ef0ed6046dbd4bca9e526b4522b29e093->leave($__internal_5cc88f40a354b72da6f3a99ae7330e6ef0ed6046dbd4bca9e526b4522b29e093_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2dc1daed818aeedb0e20efa927d223d77feb198ff38d7fb1440d33ad4e5508b = $this->env->getExtension("native_profiler");
        $__internal_b2dc1daed818aeedb0e20efa927d223d77feb198ff38d7fb1440d33ad4e5508b->enter($__internal_b2dc1daed818aeedb0e20efa927d223d77feb198ff38d7fb1440d33ad4e5508b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b2dc1daed818aeedb0e20efa927d223d77feb198ff38d7fb1440d33ad4e5508b->leave($__internal_b2dc1daed818aeedb0e20efa927d223d77feb198ff38d7fb1440d33ad4e5508b_prof);

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
