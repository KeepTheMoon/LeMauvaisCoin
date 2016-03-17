<?php

/* AnnoncesBundle:Recherche:search.html.twig */
class __TwigTemplate_8b0b7f7ce96006bedde60d631b9027518c4c921fc14adf1606b7c53f1ad7f5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnoncesBundle:Recherche:search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2028faeec708d10d73fa45cd6d0331f8a822bf587a239592667457537b63cafe = $this->env->getExtension("native_profiler");
        $__internal_2028faeec708d10d73fa45cd6d0331f8a822bf587a239592667457537b63cafe->enter($__internal_2028faeec708d10d73fa45cd6d0331f8a822bf587a239592667457537b63cafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesBundle:Recherche:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2028faeec708d10d73fa45cd6d0331f8a822bf587a239592667457537b63cafe->leave($__internal_2028faeec708d10d73fa45cd6d0331f8a822bf587a239592667457537b63cafe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69ef31ea6784be69ee421d67cd884e20814e7c9a8fc5357b3b26160258916b8e = $this->env->getExtension("native_profiler");
        $__internal_69ef31ea6784be69ee421d67cd884e20814e7c9a8fc5357b3b26160258916b8e->enter($__internal_69ef31ea6784be69ee421d67cd884e20814e7c9a8fc5357b3b26160258916b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AnnoncesBundle:Recherche:search";
        
        $__internal_69ef31ea6784be69ee421d67cd884e20814e7c9a8fc5357b3b26160258916b8e->leave($__internal_69ef31ea6784be69ee421d67cd884e20814e7c9a8fc5357b3b26160258916b8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da2ee5a9907030286773b44f80c8161bfb10ea2fa9b31e1535edc3ce90b1b284 = $this->env->getExtension("native_profiler");
        $__internal_da2ee5a9907030286773b44f80c8161bfb10ea2fa9b31e1535edc3ce90b1b284->enter($__internal_da2ee5a9907030286773b44f80c8161bfb10ea2fa9b31e1535edc3ce90b1b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/carte"), "html", null, true);
        echo "\" />

<h1>Welcome to the Recherche:search page</h1>
";
        
        $__internal_da2ee5a9907030286773b44f80c8161bfb10ea2fa9b31e1535edc3ce90b1b284->leave($__internal_da2ee5a9907030286773b44f80c8161bfb10ea2fa9b31e1535edc3ce90b1b284_prof);

    }

    public function getTemplateName()
    {
        return "AnnoncesBundle:Recherche:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AnnoncesBundle:Recherche:search{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <img src="{{asset('images/carte')}}" />*/
/* */
/* <h1>Welcome to the Recherche:search page</h1>*/
/* {% endblock %}*/
/* */
