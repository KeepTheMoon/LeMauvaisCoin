<?php

/* annonce/show.html.twig */
class __TwigTemplate_9e96a595fe61f833d5e2923de736d0105c8d1cdb5b787500515514f9c7e7e9c1 extends Twig_Template
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
        $__internal_2e59857ab4bfa56e99623d1804fd81f509689f0508c5e7bc6c7e199a6088ea74 = $this->env->getExtension("native_profiler");
        $__internal_2e59857ab4bfa56e99623d1804fd81f509689f0508c5e7bc6c7e199a6088ea74->enter($__internal_2e59857ab4bfa56e99623d1804fd81f509689f0508c5e7bc6c7e199a6088ea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e59857ab4bfa56e99623d1804fd81f509689f0508c5e7bc6c7e199a6088ea74->leave($__internal_2e59857ab4bfa56e99623d1804fd81f509689f0508c5e7bc6c7e199a6088ea74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b20ac3c9323da93c442b0638a1d5fa79ec921629ce5db1554d2cdffecb602d5 = $this->env->getExtension("native_profiler");
        $__internal_3b20ac3c9323da93c442b0638a1d5fa79ec921629ce5db1554d2cdffecb602d5->enter($__internal_3b20ac3c9323da93c442b0638a1d5fa79ec921629ce5db1554d2cdffecb602d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>

    <table>
        <tbody>
            <tr>
                <th>Titre </th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aTitre", array()), "html", null, true);
        echo "</td>
            </tr>
              <tr>
                <th>Categorie</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aNomcat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aPrix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aImage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vendeur</th>
                <td>";
        // line 30
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
        // line 34
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aType", array())) {
            echo "Offre";
        } else {
            echo "Demande";
        }
        echo "</td>
            </tr>

            <tr>
                <th>Ville</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contact</th>
            </tr>
                
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "html", null, true);
        echo "</td>
                <th>Mail </th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "getEmail", array(), "method"), "html", null, true);
        echo "</td>
                <th> Telephone </th>
                <td>";
        // line 49
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aTel", array()) == 0)) {
            echo "Non communiqué";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aTel", array()), "html", null, true);
        }
        echo "</td>


            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("annonce_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aId", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3b20ac3c9323da93c442b0638a1d5fa79ec921629ce5db1554d2cdffecb602d5->leave($__internal_3b20ac3c9323da93c442b0638a1d5fa79ec921629ce5db1554d2cdffecb602d5_prof);

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
        return array (  159 => 67,  154 => 65,  148 => 62,  142 => 59,  125 => 49,  120 => 47,  115 => 45,  106 => 39,  94 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Annonce</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Titre </th>*/
/*                 <td>{{ annonce.aTitre }}</td>*/
/*             </tr>*/
/*               <tr>*/
/*                 <th>Categorie</th>*/
/*                 <td>{{annonce.aNomcat}}</td>*/
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
/*                 <td>{{ annonce.aImage }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Vendeur</th>*/
/*                 <td>{% if annonce.aProfessionnel %}Professionnel{% else %}Particulier{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{% if annonce.aType %}Offre{% else %}Demande{% endif %}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Ville</th>*/
/*                 <td>{{annonce.aville}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contact</th>*/
/*             </tr>*/
/*                 */
/*                 <td>{{ annonce.getAuser}}</td>*/
/*                 <th>Mail </th>*/
/*                 <td>{{ annonce.getAuser.getEmail()}}</td>*/
/*                 <th> Telephone </th>*/
/*                 <td>{% if annonce.aTel ==0 %}Non communiqué{% else %}{{annonce.aTel}}{% endif %}</td>*/
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
/*             <a href="{{ path('annonce_edit', { 'id': annonce.aId }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
