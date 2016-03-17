<?php

/* departement/index.html.twig */
class __TwigTemplate_200328b64b67d774392e10b07dbf479c19d26181822919f6314612eddc6f278b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "departement/index.html.twig", 1);
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
        $__internal_d5eab0359d108dec9aedbefb91a303cc5766ee8958093b659fade3a9a6182bff = $this->env->getExtension("native_profiler");
        $__internal_d5eab0359d108dec9aedbefb91a303cc5766ee8958093b659fade3a9a6182bff->enter($__internal_d5eab0359d108dec9aedbefb91a303cc5766ee8958093b659fade3a9a6182bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departement/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5eab0359d108dec9aedbefb91a303cc5766ee8958093b659fade3a9a6182bff->leave($__internal_d5eab0359d108dec9aedbefb91a303cc5766ee8958093b659fade3a9a6182bff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_454c875790dd554cd02bd3bef2ad0e06549237d15af16a92b87309ba79ab7dad = $this->env->getExtension("native_profiler");
        $__internal_454c875790dd554cd02bd3bef2ad0e06549237d15af16a92b87309ba79ab7dad->enter($__internal_454c875790dd554cd02bd3bef2ad0e06549237d15af16a92b87309ba79ab7dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departement list</h1>

    <table>
        <thead>
            <tr>
                <th>Iddepartement</th>
                <th>Nomdepartement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departements"]) ? $context["departements"] : $this->getContext($context, "departements")));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_show", array("id" => $this->getAttribute($context["departement"], "iddepartement", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "iddepartement", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nomdepartement", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_show", array("id" => $this->getAttribute($context["departement"], "iddepartement", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_edit", array("id" => $this->getAttribute($context["departement"], "iddepartement", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("departement_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_454c875790dd554cd02bd3bef2ad0e06549237d15af16a92b87309ba79ab7dad->leave($__internal_454c875790dd554cd02bd3bef2ad0e06549237d15af16a92b87309ba79ab7dad_prof);

    }

    public function getTemplateName()
    {
        return "departement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Departement list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Iddepartement</th>*/
/*                 <th>Nomdepartement</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for departement in departements %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('departement_show', { 'id': departement.iddepartement }) }}">{{ departement.iddepartement }}</a></td>*/
/*                 <td>{{ departement.nomdepartement }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('departement_show', { 'id': departement.iddepartement }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('departement_edit', { 'id': departement.iddepartement }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('departement_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
