<?php

/* AnnoncesBundle:Recherche:mes_annonces.html.twig */
class __TwigTemplate_833280a8b7d3e2a6dee3d1a4e6a558d2ae00c5da60727697a3371cbcec754765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnoncesBundle:Recherche:mes_annonces.html.twig", 1);
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
        $__internal_6e633837dafd057c1f990e7fe31ea6d73c5f03494c46f352fd07949deae46011 = $this->env->getExtension("native_profiler");
        $__internal_6e633837dafd057c1f990e7fe31ea6d73c5f03494c46f352fd07949deae46011->enter($__internal_6e633837dafd057c1f990e7fe31ea6d73c5f03494c46f352fd07949deae46011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesBundle:Recherche:mes_annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e633837dafd057c1f990e7fe31ea6d73c5f03494c46f352fd07949deae46011->leave($__internal_6e633837dafd057c1f990e7fe31ea6d73c5f03494c46f352fd07949deae46011_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58e6a015085915bb0b66bc494b321696474f7a9f16efd098413cfc6710a8fd46 = $this->env->getExtension("native_profiler");
        $__internal_58e6a015085915bb0b66bc494b321696474f7a9f16efd098413cfc6710a8fd46->enter($__internal_58e6a015085915bb0b66bc494b321696474f7a9f16efd098413cfc6710a8fd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AnnoncesBundle:Recherche:mesAnnonces";
        
        $__internal_58e6a015085915bb0b66bc494b321696474f7a9f16efd098413cfc6710a8fd46->leave($__internal_58e6a015085915bb0b66bc494b321696474f7a9f16efd098413cfc6710a8fd46_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94826db7435ded2f24d75dce0d54d5865b196a735a0deaf909b4068bf329bda = $this->env->getExtension("native_profiler");
        $__internal_f94826db7435ded2f24d75dce0d54d5865b196a735a0deaf909b4068bf329bda->enter($__internal_f94826db7435ded2f24d75dce0d54d5865b196a735a0deaf909b4068bf329bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Recherche:mesAnnonces page</h1>
";
        
        $__internal_f94826db7435ded2f24d75dce0d54d5865b196a735a0deaf909b4068bf329bda->leave($__internal_f94826db7435ded2f24d75dce0d54d5865b196a735a0deaf909b4068bf329bda_prof);

    }

    public function getTemplateName()
    {
        return "AnnoncesBundle:Recherche:mes_annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AnnoncesBundle:Recherche:mesAnnonces{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Recherche:mesAnnonces page</h1>*/
/* {% endblock %}*/
/* */
