<?php

/* ::base.html.twig */
class __TwigTemplate_19e2666a56c7cdeb1b38782410601c0cab6199ae54da64e29f4795e6c7d818d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f6fe79ea85c1c30c874e739bc2380670366d8aa8249736807c8521bf04c8ef = $this->env->getExtension("native_profiler");
        $__internal_96f6fe79ea85c1c30c874e739bc2380670366d8aa8249736807c8521bf04c8ef->enter($__internal_96f6fe79ea85c1c30c874e739bc2380670366d8aa8249736807c8521bf04c8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_96f6fe79ea85c1c30c874e739bc2380670366d8aa8249736807c8521bf04c8ef->leave($__internal_96f6fe79ea85c1c30c874e739bc2380670366d8aa8249736807c8521bf04c8ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c36a24922ee3825e47c1ef8cb1fe4d885e6f023c8e25db2081b8a66839c4a606 = $this->env->getExtension("native_profiler");
        $__internal_c36a24922ee3825e47c1ef8cb1fe4d885e6f023c8e25db2081b8a66839c4a606->enter($__internal_c36a24922ee3825e47c1ef8cb1fe4d885e6f023c8e25db2081b8a66839c4a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c36a24922ee3825e47c1ef8cb1fe4d885e6f023c8e25db2081b8a66839c4a606->leave($__internal_c36a24922ee3825e47c1ef8cb1fe4d885e6f023c8e25db2081b8a66839c4a606_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47b3216c4ca52e7618a4f51c063587712881dd3d81975c4cf9108d20bba13e80 = $this->env->getExtension("native_profiler");
        $__internal_47b3216c4ca52e7618a4f51c063587712881dd3d81975c4cf9108d20bba13e80->enter($__internal_47b3216c4ca52e7618a4f51c063587712881dd3d81975c4cf9108d20bba13e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47b3216c4ca52e7618a4f51c063587712881dd3d81975c4cf9108d20bba13e80->leave($__internal_47b3216c4ca52e7618a4f51c063587712881dd3d81975c4cf9108d20bba13e80_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_715413cbbe1664e0223680a3067a96ce434da435394ac3bcec025a0d3da7cffa = $this->env->getExtension("native_profiler");
        $__internal_715413cbbe1664e0223680a3067a96ce434da435394ac3bcec025a0d3da7cffa->enter($__internal_715413cbbe1664e0223680a3067a96ce434da435394ac3bcec025a0d3da7cffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_715413cbbe1664e0223680a3067a96ce434da435394ac3bcec025a0d3da7cffa->leave($__internal_715413cbbe1664e0223680a3067a96ce434da435394ac3bcec025a0d3da7cffa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5511b38d2ad7ea2cc7033456836547aa6c9b6c6a61dc36ee87cafbb1c5d099aa = $this->env->getExtension("native_profiler");
        $__internal_5511b38d2ad7ea2cc7033456836547aa6c9b6c6a61dc36ee87cafbb1c5d099aa->enter($__internal_5511b38d2ad7ea2cc7033456836547aa6c9b6c6a61dc36ee87cafbb1c5d099aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5511b38d2ad7ea2cc7033456836547aa6c9b6c6a61dc36ee87cafbb1c5d099aa->leave($__internal_5511b38d2ad7ea2cc7033456836547aa6c9b6c6a61dc36ee87cafbb1c5d099aa_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
