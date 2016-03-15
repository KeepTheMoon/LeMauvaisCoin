<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_264c653d1d4f56431891c224754476cf9f9db3eb31be78c1a338a3b33aaa0595 extends Twig_Template
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
        $__internal_8d3e3ce03f6098185aba020b1536e0ae8e8377945b04a3125dc9965a6a124983 = $this->env->getExtension("native_profiler");
        $__internal_8d3e3ce03f6098185aba020b1536e0ae8e8377945b04a3125dc9965a6a124983->enter($__internal_8d3e3ce03f6098185aba020b1536e0ae8e8377945b04a3125dc9965a6a124983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3e3ce03f6098185aba020b1536e0ae8e8377945b04a3125dc9965a6a124983->leave($__internal_8d3e3ce03f6098185aba020b1536e0ae8e8377945b04a3125dc9965a6a124983_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5521aecc46178887953ac17efb743363b4bdf21a962818754cb248ed241a2a1f = $this->env->getExtension("native_profiler");
        $__internal_5521aecc46178887953ac17efb743363b4bdf21a962818754cb248ed241a2a1f->enter($__internal_5521aecc46178887953ac17efb743363b4bdf21a962818754cb248ed241a2a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5521aecc46178887953ac17efb743363b4bdf21a962818754cb248ed241a2a1f->leave($__internal_5521aecc46178887953ac17efb743363b4bdf21a962818754cb248ed241a2a1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5205170fe9e4fc828db00fbc477f53cad954716887410fecc4a6d266a1278bb = $this->env->getExtension("native_profiler");
        $__internal_d5205170fe9e4fc828db00fbc477f53cad954716887410fecc4a6d266a1278bb->enter($__internal_d5205170fe9e4fc828db00fbc477f53cad954716887410fecc4a6d266a1278bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5205170fe9e4fc828db00fbc477f53cad954716887410fecc4a6d266a1278bb->leave($__internal_d5205170fe9e4fc828db00fbc477f53cad954716887410fecc4a6d266a1278bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0381ed35ba8fb2cc28e5076bc6ed70d606f40ff16063ef29fabc12f93c1fb3fe = $this->env->getExtension("native_profiler");
        $__internal_0381ed35ba8fb2cc28e5076bc6ed70d606f40ff16063ef29fabc12f93c1fb3fe->enter($__internal_0381ed35ba8fb2cc28e5076bc6ed70d606f40ff16063ef29fabc12f93c1fb3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0381ed35ba8fb2cc28e5076bc6ed70d606f40ff16063ef29fabc12f93c1fb3fe->leave($__internal_0381ed35ba8fb2cc28e5076bc6ed70d606f40ff16063ef29fabc12f93c1fb3fe_prof);

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
