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
        $__internal_ca35cf91ff3f6fc47fb477353625ff301638429eebb7e9d7c56c6cbb916c288e = $this->env->getExtension("native_profiler");
        $__internal_ca35cf91ff3f6fc47fb477353625ff301638429eebb7e9d7c56c6cbb916c288e->enter($__internal_ca35cf91ff3f6fc47fb477353625ff301638429eebb7e9d7c56c6cbb916c288e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca35cf91ff3f6fc47fb477353625ff301638429eebb7e9d7c56c6cbb916c288e->leave($__internal_ca35cf91ff3f6fc47fb477353625ff301638429eebb7e9d7c56c6cbb916c288e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b0d4ba7b6b87595d23b0570b260c76719d2b312c44229d14acbfef8b20471e2 = $this->env->getExtension("native_profiler");
        $__internal_1b0d4ba7b6b87595d23b0570b260c76719d2b312c44229d14acbfef8b20471e2->enter($__internal_1b0d4ba7b6b87595d23b0570b260c76719d2b312c44229d14acbfef8b20471e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b0d4ba7b6b87595d23b0570b260c76719d2b312c44229d14acbfef8b20471e2->leave($__internal_1b0d4ba7b6b87595d23b0570b260c76719d2b312c44229d14acbfef8b20471e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f91bae12060d9a632553520714eb56faf56f15c930bf9fccf0621b9f5197760c = $this->env->getExtension("native_profiler");
        $__internal_f91bae12060d9a632553520714eb56faf56f15c930bf9fccf0621b9f5197760c->enter($__internal_f91bae12060d9a632553520714eb56faf56f15c930bf9fccf0621b9f5197760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f91bae12060d9a632553520714eb56faf56f15c930bf9fccf0621b9f5197760c->leave($__internal_f91bae12060d9a632553520714eb56faf56f15c930bf9fccf0621b9f5197760c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b716aad74590f3c0a6efeb6f90fda192a39cb84dee480d0c11ce1831ee5026b = $this->env->getExtension("native_profiler");
        $__internal_1b716aad74590f3c0a6efeb6f90fda192a39cb84dee480d0c11ce1831ee5026b->enter($__internal_1b716aad74590f3c0a6efeb6f90fda192a39cb84dee480d0c11ce1831ee5026b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b716aad74590f3c0a6efeb6f90fda192a39cb84dee480d0c11ce1831ee5026b->leave($__internal_1b716aad74590f3c0a6efeb6f90fda192a39cb84dee480d0c11ce1831ee5026b_prof);

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
