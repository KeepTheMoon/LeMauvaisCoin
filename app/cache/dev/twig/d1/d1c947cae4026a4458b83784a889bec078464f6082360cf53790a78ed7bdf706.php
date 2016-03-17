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
        $__internal_495823af799bb3a6e573ca293970a963e45eeb6262574493909c8a4a25a10fb7 = $this->env->getExtension("native_profiler");
        $__internal_495823af799bb3a6e573ca293970a963e45eeb6262574493909c8a4a25a10fb7->enter($__internal_495823af799bb3a6e573ca293970a963e45eeb6262574493909c8a4a25a10fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495823af799bb3a6e573ca293970a963e45eeb6262574493909c8a4a25a10fb7->leave($__internal_495823af799bb3a6e573ca293970a963e45eeb6262574493909c8a4a25a10fb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66954a7f3b5fbf0cf8d3b41a388533ea6699cfcd7605b996aad359d63b57e228 = $this->env->getExtension("native_profiler");
        $__internal_66954a7f3b5fbf0cf8d3b41a388533ea6699cfcd7605b996aad359d63b57e228->enter($__internal_66954a7f3b5fbf0cf8d3b41a388533ea6699cfcd7605b996aad359d63b57e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66954a7f3b5fbf0cf8d3b41a388533ea6699cfcd7605b996aad359d63b57e228->leave($__internal_66954a7f3b5fbf0cf8d3b41a388533ea6699cfcd7605b996aad359d63b57e228_prof);

    }

    // line 17
    public function block_offre($context, array $blocks = array())
    {
        $__internal_ddd0ffc2af4a399dd41853a328a25c83c9afceea75c989b36b5b76e4f9e0da2a = $this->env->getExtension("native_profiler");
        $__internal_ddd0ffc2af4a399dd41853a328a25c83c9afceea75c989b36b5b76e4f9e0da2a->enter($__internal_ddd0ffc2af4a399dd41853a328a25c83c9afceea75c989b36b5b76e4f9e0da2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        echo "class=\"active\"";
        
        $__internal_ddd0ffc2af4a399dd41853a328a25c83c9afceea75c989b36b5b76e4f9e0da2a->leave($__internal_ddd0ffc2af4a399dd41853a328a25c83c9afceea75c989b36b5b76e4f9e0da2a_prof);

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
        return array (  143 => 17,  132 => 43,  128 => 41,  122 => 40,  119 => 39,  115 => 37,  113 => 36,  107 => 33,  93 => 32,  86 => 30,  80 => 27,  75 => 24,  71 => 22,  68 => 21,  63 => 20,  61 => 19,  58 => 18,  56 => 17,  41 => 4,  35 => 3,  11 => 1,);
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
/*                             */
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
