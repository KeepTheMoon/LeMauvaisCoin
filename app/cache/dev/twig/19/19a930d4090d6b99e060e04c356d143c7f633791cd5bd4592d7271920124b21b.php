<?php

/* base.html.twig */
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
        $__internal_8a6a6c8d8522bc86c4f847cd0277a55fc131aa46623aa33fa40a6d77ebcf5f94 = $this->env->getExtension("native_profiler");
        $__internal_8a6a6c8d8522bc86c4f847cd0277a55fc131aa46623aa33fa40a6d77ebcf5f94->enter($__internal_8a6a6c8d8522bc86c4f847cd0277a55fc131aa46623aa33fa40a6d77ebcf5f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8a6a6c8d8522bc86c4f847cd0277a55fc131aa46623aa33fa40a6d77ebcf5f94->leave($__internal_8a6a6c8d8522bc86c4f847cd0277a55fc131aa46623aa33fa40a6d77ebcf5f94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84798c6fed03d65106312020fa63a9b69037183c1821a0b245801b06ab9883e6 = $this->env->getExtension("native_profiler");
        $__internal_84798c6fed03d65106312020fa63a9b69037183c1821a0b245801b06ab9883e6->enter($__internal_84798c6fed03d65106312020fa63a9b69037183c1821a0b245801b06ab9883e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_84798c6fed03d65106312020fa63a9b69037183c1821a0b245801b06ab9883e6->leave($__internal_84798c6fed03d65106312020fa63a9b69037183c1821a0b245801b06ab9883e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e598773ca2f16f33d2f7c89f5270e66e19bab51288d4cec6d44d832ae6f9ef03 = $this->env->getExtension("native_profiler");
        $__internal_e598773ca2f16f33d2f7c89f5270e66e19bab51288d4cec6d44d832ae6f9ef03->enter($__internal_e598773ca2f16f33d2f7c89f5270e66e19bab51288d4cec6d44d832ae6f9ef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e598773ca2f16f33d2f7c89f5270e66e19bab51288d4cec6d44d832ae6f9ef03->leave($__internal_e598773ca2f16f33d2f7c89f5270e66e19bab51288d4cec6d44d832ae6f9ef03_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_729da4ef0a1aba342390942794e869aa2036b19b536cb0e14d1eb6addb8b1a43 = $this->env->getExtension("native_profiler");
        $__internal_729da4ef0a1aba342390942794e869aa2036b19b536cb0e14d1eb6addb8b1a43->enter($__internal_729da4ef0a1aba342390942794e869aa2036b19b536cb0e14d1eb6addb8b1a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_729da4ef0a1aba342390942794e869aa2036b19b536cb0e14d1eb6addb8b1a43->leave($__internal_729da4ef0a1aba342390942794e869aa2036b19b536cb0e14d1eb6addb8b1a43_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21b20dc879d2043583892f099ea875110e4d84c1ffae0fe1e337f94a63769248 = $this->env->getExtension("native_profiler");
        $__internal_21b20dc879d2043583892f099ea875110e4d84c1ffae0fe1e337f94a63769248->enter($__internal_21b20dc879d2043583892f099ea875110e4d84c1ffae0fe1e337f94a63769248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_21b20dc879d2043583892f099ea875110e4d84c1ffae0fe1e337f94a63769248->leave($__internal_21b20dc879d2043583892f099ea875110e4d84c1ffae0fe1e337f94a63769248_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
