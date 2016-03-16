<?php

/* annonce/index.html.twig */
class __TwigTemplate_493375c28c10e6d03902b41b68a2525677eac44b7042e6e75ee6e6f477b15910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonce/index.html.twig", 1);
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
        $__internal_1b9dc167356270be3ccc99d17c3a9d9d64639aef20c8f484c304b6b84bdfda12 = $this->env->getExtension("native_profiler");
        $__internal_1b9dc167356270be3ccc99d17c3a9d9d64639aef20c8f484c304b6b84bdfda12->enter($__internal_1b9dc167356270be3ccc99d17c3a9d9d64639aef20c8f484c304b6b84bdfda12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b9dc167356270be3ccc99d17c3a9d9d64639aef20c8f484c304b6b84bdfda12->leave($__internal_1b9dc167356270be3ccc99d17c3a9d9d64639aef20c8f484c304b6b84bdfda12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4e513ad1c71d18dceb4874267d522db8f7221e5d959b511f13b2d5cf9bd39f9 = $this->env->getExtension("native_profiler");
        $__internal_c4e513ad1c71d18dceb4874267d522db8f7221e5d959b511f13b2d5cf9bd39f9->enter($__internal_c4e513ad1c71d18dceb4874267d522db8f7221e5d959b511f13b2d5cf9bd39f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce list</h1>

    <table>
        <thead>
            <tr>
                <th>Aid</th>
                <th>Atitre</th>
                <th>Adescription</th>
                <th>Aprix</th>
                <th>Aimage</th>
                <th>Aprofessionnel</th>
                <th>Atype</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute($context["annonce"], "aId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aId", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aTitre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aPrix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "aImage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["annonce"], "aProfessionnel", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["annonce"], "aType", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute($context["annonce"], "aId", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute($context["annonce"], "aId", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("annonce_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_c4e513ad1c71d18dceb4874267d522db8f7221e5d959b511f13b2d5cf9bd39f9->leave($__internal_c4e513ad1c71d18dceb4874267d522db8f7221e5d959b511f13b2d5cf9bd39f9_prof);

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
        return array (  131 => 46,  124 => 41,  112 => 35,  106 => 32,  95 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Annonce list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Aid</th>*/
/*                 <th>Atitre</th>*/
/*                 <th>Adescription</th>*/
/*                 <th>Aprix</th>*/
/*                 <th>Aimage</th>*/
/*                 <th>Aprofessionnel</th>*/
/*                 <th>Atype</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for annonce in annonces %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('annonce_show', { 'id': annonce.aId }) }}">{{ annonce.aId }}</a></td>*/
/*                 <td>{{ annonce.aTitre }}</td>*/
/*                 <td>{{ annonce.aDescription }}</td>*/
/*                 <td>{{ annonce.aPrix }}</td>*/
/*                 <td>{{ annonce.aImage }}</td>*/
/*                 <td>{% if annonce.aProfessionnel %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if annonce.aType %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('annonce_show', { 'id': annonce.aId }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('annonce_edit', { 'id': annonce.aId }) }}">edit</a>*/
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
/*             <a href="{{ path('annonce_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
