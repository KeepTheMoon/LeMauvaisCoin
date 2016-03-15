<?php

/* annonce/show.html.twig */
class __TwigTemplate_e049ed84637d624717b1c38a0a89f9781fd81a003a55396b1c6c976db82eb1e1 extends Twig_Template
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
        $__internal_9f7274f8c3f3f0df44aa8041f6da946f07b4ae9dcebdcc1cb435e1a9d40210ad = $this->env->getExtension("native_profiler");
        $__internal_9f7274f8c3f3f0df44aa8041f6da946f07b4ae9dcebdcc1cb435e1a9d40210ad->enter($__internal_9f7274f8c3f3f0df44aa8041f6da946f07b4ae9dcebdcc1cb435e1a9d40210ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7274f8c3f3f0df44aa8041f6da946f07b4ae9dcebdcc1cb435e1a9d40210ad->leave($__internal_9f7274f8c3f3f0df44aa8041f6da946f07b4ae9dcebdcc1cb435e1a9d40210ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55fc10118f637bfe4f59c975f0220f68ff0e5c19f3159a53be146552e1abcdc4 = $this->env->getExtension("native_profiler");
        $__internal_55fc10118f637bfe4f59c975f0220f68ff0e5c19f3159a53be146552e1abcdc4->enter($__internal_55fc10118f637bfe4f59c975f0220f68ff0e5c19f3159a53be146552e1abcdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aPrix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aImage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vendeur</th>
                <td>";
        // line 26
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
        // line 30
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
                
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "html", null, true);
        echo "</td>
                <th>Mail </th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getAuser", array()), "getEmail", array(), "method"), "html", null, true);
        echo "</td>
                <th> Telephone </th>
                <td>";
        // line 40
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
        // line 50
        echo $this->env->getExtension('routing')->getPath("annonce_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "aId", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_55fc10118f637bfe4f59c975f0220f68ff0e5c19f3159a53be146552e1abcdc4->leave($__internal_55fc10118f637bfe4f59c975f0220f68ff0e5c19f3159a53be146552e1abcdc4_prof);

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
        return array (  144 => 58,  139 => 56,  133 => 53,  127 => 50,  110 => 40,  105 => 38,  100 => 36,  87 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
