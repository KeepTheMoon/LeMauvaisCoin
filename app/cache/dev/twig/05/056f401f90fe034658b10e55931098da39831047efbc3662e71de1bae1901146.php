<?php

/* base.html.twig */
class __TwigTemplate_4c237f6555d52227dbaad1f6422d3babfeeca6ba2cc8b820680fe0d47d7f6b7f extends Twig_Template
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
        $__internal_faca715f38e0b1018e6e1c54194cd3f9adcf374b8aaca32a0c47411c4ad4f088 = $this->env->getExtension("native_profiler");
        $__internal_faca715f38e0b1018e6e1c54194cd3f9adcf374b8aaca32a0c47411c4ad4f088->enter($__internal_faca715f38e0b1018e6e1c54194cd3f9adcf374b8aaca32a0c47411c4ad4f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_faca715f38e0b1018e6e1c54194cd3f9adcf374b8aaca32a0c47411c4ad4f088->leave($__internal_faca715f38e0b1018e6e1c54194cd3f9adcf374b8aaca32a0c47411c4ad4f088_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_959a96c3898079046ecc38e637aad374a400a01627c14f9b24866d9a74aa832c = $this->env->getExtension("native_profiler");
        $__internal_959a96c3898079046ecc38e637aad374a400a01627c14f9b24866d9a74aa832c->enter($__internal_959a96c3898079046ecc38e637aad374a400a01627c14f9b24866d9a74aa832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_959a96c3898079046ecc38e637aad374a400a01627c14f9b24866d9a74aa832c->leave($__internal_959a96c3898079046ecc38e637aad374a400a01627c14f9b24866d9a74aa832c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ce5a27a62f9eb83850bc89e5620f68c308ca767f255bd2c022cce5f95e9c7c6 = $this->env->getExtension("native_profiler");
        $__internal_2ce5a27a62f9eb83850bc89e5620f68c308ca767f255bd2c022cce5f95e9c7c6->enter($__internal_2ce5a27a62f9eb83850bc89e5620f68c308ca767f255bd2c022cce5f95e9c7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ce5a27a62f9eb83850bc89e5620f68c308ca767f255bd2c022cce5f95e9c7c6->leave($__internal_2ce5a27a62f9eb83850bc89e5620f68c308ca767f255bd2c022cce5f95e9c7c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_85005483218695bf6f45e0f934a01f8176f3d20a10e37e73c7054ed4b0995e64 = $this->env->getExtension("native_profiler");
        $__internal_85005483218695bf6f45e0f934a01f8176f3d20a10e37e73c7054ed4b0995e64->enter($__internal_85005483218695bf6f45e0f934a01f8176f3d20a10e37e73c7054ed4b0995e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85005483218695bf6f45e0f934a01f8176f3d20a10e37e73c7054ed4b0995e64->leave($__internal_85005483218695bf6f45e0f934a01f8176f3d20a10e37e73c7054ed4b0995e64_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_308f2035a944ec1182d834943456a413101fdae4c9dca5228b9b8dabdd796242 = $this->env->getExtension("native_profiler");
        $__internal_308f2035a944ec1182d834943456a413101fdae4c9dca5228b9b8dabdd796242->enter($__internal_308f2035a944ec1182d834943456a413101fdae4c9dca5228b9b8dabdd796242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_308f2035a944ec1182d834943456a413101fdae4c9dca5228b9b8dabdd796242->leave($__internal_308f2035a944ec1182d834943456a413101fdae4c9dca5228b9b8dabdd796242_prof);

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
