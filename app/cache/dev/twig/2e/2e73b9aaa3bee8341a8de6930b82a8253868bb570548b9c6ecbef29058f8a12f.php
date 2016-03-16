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
        $__internal_4fcd9ef9f938d92e59255818c66e41b6ea67196a7e449dd2d2c079717e45ed83 = $this->env->getExtension("native_profiler");
        $__internal_4fcd9ef9f938d92e59255818c66e41b6ea67196a7e449dd2d2c079717e45ed83->enter($__internal_4fcd9ef9f938d92e59255818c66e41b6ea67196a7e449dd2d2c079717e45ed83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcd9ef9f938d92e59255818c66e41b6ea67196a7e449dd2d2c079717e45ed83->leave($__internal_4fcd9ef9f938d92e59255818c66e41b6ea67196a7e449dd2d2c079717e45ed83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2c35fbe46d9d90b5177ada70fbbac3b8309f46fccb91f78fea1c71846d64755 = $this->env->getExtension("native_profiler");
        $__internal_f2c35fbe46d9d90b5177ada70fbbac3b8309f46fccb91f78fea1c71846d64755->enter($__internal_f2c35fbe46d9d90b5177ada70fbbac3b8309f46fccb91f78fea1c71846d64755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f2c35fbe46d9d90b5177ada70fbbac3b8309f46fccb91f78fea1c71846d64755->leave($__internal_f2c35fbe46d9d90b5177ada70fbbac3b8309f46fccb91f78fea1c71846d64755_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d514c8ca052799e84d7c8608361b961694fe070d96624555c063fa3891da19ea = $this->env->getExtension("native_profiler");
        $__internal_d514c8ca052799e84d7c8608361b961694fe070d96624555c063fa3891da19ea->enter($__internal_d514c8ca052799e84d7c8608361b961694fe070d96624555c063fa3891da19ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d514c8ca052799e84d7c8608361b961694fe070d96624555c063fa3891da19ea->leave($__internal_d514c8ca052799e84d7c8608361b961694fe070d96624555c063fa3891da19ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebf2d6d8f75fc13e17cadd2f9747edf3df88fdc0139daf173915ceddd2b27163 = $this->env->getExtension("native_profiler");
        $__internal_ebf2d6d8f75fc13e17cadd2f9747edf3df88fdc0139daf173915ceddd2b27163->enter($__internal_ebf2d6d8f75fc13e17cadd2f9747edf3df88fdc0139daf173915ceddd2b27163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebf2d6d8f75fc13e17cadd2f9747edf3df88fdc0139daf173915ceddd2b27163->leave($__internal_ebf2d6d8f75fc13e17cadd2f9747edf3df88fdc0139daf173915ceddd2b27163_prof);

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
