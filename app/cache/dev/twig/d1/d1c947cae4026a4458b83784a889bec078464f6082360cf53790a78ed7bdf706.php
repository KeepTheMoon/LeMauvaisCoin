<?php

/* annonce/index.html.twig */
class __TwigTemplate_e7eef6a64943b620575db4aa874c9aea04a43ac68a4261d33ed46e85a90056cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonce/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'offre' => array($this, 'block_offre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c702c15f012112a88dccde645e466e3dcb1a79baceb57a109736923be39ef577 = $this->env->getExtension("native_profiler");
        $__internal_c702c15f012112a88dccde645e466e3dcb1a79baceb57a109736923be39ef577->enter($__internal_c702c15f012112a88dccde645e466e3dcb1a79baceb57a109736923be39ef577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c702c15f012112a88dccde645e466e3dcb1a79baceb57a109736923be39ef577->leave($__internal_c702c15f012112a88dccde645e466e3dcb1a79baceb57a109736923be39ef577_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee135badb0803e90c090d2f81738310905bd5ea364373f371d6c14ffe050c91b = $this->env->getExtension("native_profiler");
        $__internal_ee135badb0803e90c090d2f81738310905bd5ea364373f371d6c14ffe050c91b->enter($__internal_ee135badb0803e90c090d2f81738310905bd5ea364373f371d6c14ffe050c91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
              <!-- Page Content -->
        <div class=\"container\">

            <!-- Page Header -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Affichage de toutes les annonces disponible
                        <small>ici, en dessous</small>
                    </h1>
                    
                </div>
            </div>
            ";
        // line 17
        $this->displayBlock('offre', $context, $blocks);
        // line 18
        echo "            <!-- /.row -->
            ";
        // line 19
        $context["cpt"] = 0;
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 21
            echo "            ";
            if ((((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) % 3) == 0)) {
                // line 22
                echo "               <div class=\"row\">
            ";
            }
            // line 24
            echo "
                    <div class=\"col-md-4 portfolio-item\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aImage", array()), "html", null, true);
            echo "\" alt=\"\">
                </a>
                <h3>
                    <a href=\"#\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aTitre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aPrix", array()), "html", null, true);
            echo "€</a>
                </h3>
                <p>";
            // line 32
            if ($this->getAttribute($context["annonce"], "aProfessionnel", array())) {
                echo "Professionnel";
            } else {
                echo "Particulier";
            }
            echo " - ";
            if ($this->getAttribute($context["annonce"], "aType", array())) {
                echo "Offre";
            } else {
                echo "Demande";
            }
            echo "</p>
                 <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute($context["annonce"], "aId", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Show</button></a>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute($context["annonce"], "aId", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Edit</button></a>
            </div>
             ";
            // line 36
            if ((((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) % 3) == 2)) {
                // line 37
                echo "               </div>
            ";
            }
            // line 39
            echo "            ";
            $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("annonce_new");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">New</button></a>

    </div>
";
        
        $__internal_ee135badb0803e90c090d2f81738310905bd5ea364373f371d6c14ffe050c91b->leave($__internal_ee135badb0803e90c090d2f81738310905bd5ea364373f371d6c14ffe050c91b_prof);

    }

    // line 17
    public function block_offre($context, array $blocks = array())
    {
        $__internal_987a885a955cde892139b8e4fc7aa5fbf99559792d6bc169064f2e9c637b390f = $this->env->getExtension("native_profiler");
        $__internal_987a885a955cde892139b8e4fc7aa5fbf99559792d6bc169064f2e9c637b390f->enter($__internal_987a885a955cde892139b8e4fc7aa5fbf99559792d6bc169064f2e9c637b390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        echo "class=\"active\"";
        
        $__internal_987a885a955cde892139b8e4fc7aa5fbf99559792d6bc169064f2e9c637b390f->leave($__internal_987a885a955cde892139b8e4fc7aa5fbf99559792d6bc169064f2e9c637b390f_prof);

    }

    public function getTemplateName()
    {
        return "annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 17,  135 => 43,  131 => 41,  125 => 40,  122 => 39,  118 => 37,  116 => 36,  111 => 34,  107 => 33,  93 => 32,  86 => 30,  80 => 27,  75 => 24,  71 => 22,  68 => 21,  63 => 20,  61 => 19,  58 => 18,  56 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*               <!-- Page Content -->*/
/*         <div class="container">*/
/* */
/*             <!-- Page Header -->*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h1 class="page-header">Affichage de toutes les annonces disponible*/
/*                         <small>ici, en dessous</small>*/
/*                     </h1>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*             {% block offre %}class="active"{% endblock %}*/
/*             <!-- /.row -->*/
/*             {% set cpt = 0 %}*/
/*         {% for annonce in annonces %}*/
/*             {% if cpt%3==0 %}*/
/*                <div class="row">*/
/*             {% endif %}*/
/* */
/*                     <div class="col-md-4 portfolio-item">*/
/*                 <a href="#">*/
/*                     <img class="img-responsive" src="{{ annonce.aImage }}" alt="">*/
/*                 </a>*/
/*                 <h3>*/
/*                     <a href="#">{{ annonce.aTitre }} - {{ annonce.aPrix }}€</a>*/
/*                 </h3>*/
/*                 <p>{% if annonce.aProfessionnel %}Professionnel{% else %}Particulier{% endif %} - {% if annonce.aType %}Offre{% else %}Demande{% endif %}</p>*/
/*                  <a href="{{ path('annonce_show', { 'id': annonce.aId }) }}"><button type="button" class="btn btn-primary">Show</button></a>*/
/*                             <a href="{{ path('annonce_edit', { 'id': annonce.aId }) }}"><button type="button" class="btn btn-primary">Edit</button></a>*/
/*             </div>*/
/*              {% if cpt%3==2 %}*/
/*                </div>*/
/*             {% endif %}*/
/*             {% set cpt = cpt+1 %}*/
/*         {% endfor %}*/
/* */
/* */
/*             <a href="{{ path('annonce_new') }}"><button type="button" class="btn btn-primary">New</button></a>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
