<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f2e4d64c5b429b9eeb8fc4e555ea2ff831c59080b063c15c87498c17025fa88f extends Twig_Template
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
        $__internal_1b6814e6596bcc21e9e4b34967b517033d07ecd682cfc067c9896a5810245327 = $this->env->getExtension("native_profiler");
        $__internal_1b6814e6596bcc21e9e4b34967b517033d07ecd682cfc067c9896a5810245327->enter($__internal_1b6814e6596bcc21e9e4b34967b517033d07ecd682cfc067c9896a5810245327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6814e6596bcc21e9e4b34967b517033d07ecd682cfc067c9896a5810245327->leave($__internal_1b6814e6596bcc21e9e4b34967b517033d07ecd682cfc067c9896a5810245327_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3983f4a7761c93e98eaaf1f2f2c333078a76433f5581369d09cc9bb745c7be2a = $this->env->getExtension("native_profiler");
        $__internal_3983f4a7761c93e98eaaf1f2f2c333078a76433f5581369d09cc9bb745c7be2a->enter($__internal_3983f4a7761c93e98eaaf1f2f2c333078a76433f5581369d09cc9bb745c7be2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3983f4a7761c93e98eaaf1f2f2c333078a76433f5581369d09cc9bb745c7be2a->leave($__internal_3983f4a7761c93e98eaaf1f2f2c333078a76433f5581369d09cc9bb745c7be2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1935dd461f00ca31521861b6d146dbe07b59e88f1fb0a4cc629fc5bef4fa0763 = $this->env->getExtension("native_profiler");
        $__internal_1935dd461f00ca31521861b6d146dbe07b59e88f1fb0a4cc629fc5bef4fa0763->enter($__internal_1935dd461f00ca31521861b6d146dbe07b59e88f1fb0a4cc629fc5bef4fa0763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1935dd461f00ca31521861b6d146dbe07b59e88f1fb0a4cc629fc5bef4fa0763->leave($__internal_1935dd461f00ca31521861b6d146dbe07b59e88f1fb0a4cc629fc5bef4fa0763_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a851db401e56e8514236673a204d6072499b1586d74628e689352404c02d4bf = $this->env->getExtension("native_profiler");
        $__internal_8a851db401e56e8514236673a204d6072499b1586d74628e689352404c02d4bf->enter($__internal_8a851db401e56e8514236673a204d6072499b1586d74628e689352404c02d4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a851db401e56e8514236673a204d6072499b1586d74628e689352404c02d4bf->leave($__internal_8a851db401e56e8514236673a204d6072499b1586d74628e689352404c02d4bf_prof);

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
