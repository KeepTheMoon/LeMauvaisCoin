<?php

/* annonce/show.html.twig */
class __TwigTemplate_719cdfe0d09c073ed25b9265d851d79987d060dceb22f973540becc140450a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonce/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e45858e2bf9dfd2f2602daecae7ef9efff85c00577fe30105bfbd7d3e82148 = $this->env->getExtension("native_profiler");
        $__internal_e4e45858e2bf9dfd2f2602daecae7ef9efff85c00577fe30105bfbd7d3e82148->enter($__internal_e4e45858e2bf9dfd2f2602daecae7ef9efff85c00577fe30105bfbd7d3e82148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e45858e2bf9dfd2f2602daecae7ef9efff85c00577fe30105bfbd7d3e82148->leave($__internal_e4e45858e2bf9dfd2f2602daecae7ef9efff85c00577fe30105bfbd7d3e82148_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f9ba1437b91169dbb38ce460b98d2646083af28e39a2e98c315383eb34c6f31 = $this->env->getExtension("native_profiler");
        $__internal_7f9ba1437b91169dbb38ce460b98d2646083af28e39a2e98c315383eb34c6f31->enter($__internal_7f9ba1437b91169dbb38ce460b98d2646083af28e39a2e98c315383eb34c6f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">

        <!-- Portfolio Item Heading -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aTitre", array()), "html", null, true);
        echo "
                    <small>de ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "html", null, true);
        echo "</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class=\"row\">

            <div class=\"col-md-8\">
                <img class=\"img-responsive\" src=";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aImage", array()), "html", null, true);
        echo " alt=\"\">
            </div>

            <div class=\"col-md-4\">
                <h3>Mail : </h3>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "getEmail", array(), "method"), "html", null, true);
        echo " <button href=\"mailto:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "getEmail", array(), "method"), "html", null, true);
        echo "\" type=\"button\" class=\"btn sm btn-primary\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span></button></p>
                <h3>Téléphone : </h3>
                <p>";
        // line 28
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aTel", array()) == 0)) {
            echo "Non communiqué";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aTel", array()), "html", null, true);
        }
        echo "</p>
            </div>

        </div>
        <!-- /.row -->
        </div>
    <h1>Annonce</h1>

    <table>
        <tbody>
            <tr>
                <th>Titre </th>
                <td></td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aPrix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td></td>
            </tr>
            <tr>
                <th>Vendeur</th>
                <td>";
        // line 56
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aProfessionnel", array())) {
            echo "Professionnel";
        } else {
            echo "Particulier";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 60
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aType", array())) {
            echo "Offre";
        } else {
            echo "Demande";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Contact</th>
            </tr>
                
                <td></td>
                <th>Mail </th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "getEmail", array(), "method"), "html", null, true);
        echo "</td>
                <th> Telephone </th>
                <td></td>


            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("annonce_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aId", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li>
            ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7f9ba1437b91169dbb38ce460b98d2646083af28e39a2e98c315383eb34c6f31->leave($__internal_7f9ba1437b91169dbb38ce460b98d2646083af28e39a2e98c315383eb34c6f31_prof);

    }

    public function getTemplateName()
    {
        return "annonce/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 88,  174 => 86,  168 => 83,  162 => 80,  147 => 68,  132 => 60,  121 => 56,  110 => 48,  103 => 44,  80 => 28,  73 => 26,  65 => 21,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <!-- Portfolio Item Heading -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{{ annonce.aTitre }}*/
/*                     <small>de {{ annonce.getAuser}}</small>*/
/*                 </h1>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <!-- Portfolio Item Row -->*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-8">*/
/*                 <img class="img-responsive" src={{ annonce.aImage }} alt="">*/
/*             </div>*/
/* */
/*             <div class="col-md-4">*/
/*                 <h3>Mail : </h3>*/
/*                 <p>{{ annonce.getAuser.getEmail()}} <button href="mailto:{{ annonce.getAuser.getEmail()}}" type="button" class="btn sm btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></button></p>*/
/*                 <h3>Téléphone : </h3>*/
/*                 <p>{% if annonce.aTel ==0 %}Non communiqué{% else %}{{annonce.aTel}}{% endif %}</p>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <!-- /.row -->*/
/*         </div>*/
/*     <h1>Annonce</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Titre </th>*/
/*                 <td></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ annonce.aDescription }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prix</th>*/
/*                 <td>{{ annonce.aPrix }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Image</th>*/
/*                 <td></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Vendeur</th>*/
/*                 <td>{% if annonce.aProfessionnel %}Professionnel{% else %}Particulier{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{% if annonce.aType %}Offre{% else %}Demande{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contact</th>*/
/*             </tr>*/
/*                 */
/*                 <td></td>*/
/*                 <th>Mail </th>*/
/*                 <td>{{ annonce.getAuser.getEmail()}}</td>*/
/*                 <th> Telephone </th>*/
/*                 <td></td>*/
/* */
/* */
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('annonce_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('annonce_edit', { 'id': annonce.aId }) }}">Modifier</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
