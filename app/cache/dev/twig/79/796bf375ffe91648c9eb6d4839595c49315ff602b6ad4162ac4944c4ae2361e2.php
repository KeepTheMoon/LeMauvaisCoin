<?php

/* annonce/index.html.twig */
class __TwigTemplate_863d4c2446113eb783e66ce98a18f96d5de47da713469567daad5a3d2cd77789 extends Twig_Template
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
        $__internal_cf11c3c739577d4702bf31d552ab08b7e7d5a815b8e1987ff8b10d4e39f6155c = $this->env->getExtension("native_profiler");
        $__internal_cf11c3c739577d4702bf31d552ab08b7e7d5a815b8e1987ff8b10d4e39f6155c->enter($__internal_cf11c3c739577d4702bf31d552ab08b7e7d5a815b8e1987ff8b10d4e39f6155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf11c3c739577d4702bf31d552ab08b7e7d5a815b8e1987ff8b10d4e39f6155c->leave($__internal_cf11c3c739577d4702bf31d552ab08b7e7d5a815b8e1987ff8b10d4e39f6155c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49e0e86abe45f40ee10bc0efbce45a7124db2e744bc80b5d526799dd0840012b = $this->env->getExtension("native_profiler");
        $__internal_49e0e86abe45f40ee10bc0efbce45a7124db2e744bc80b5d526799dd0840012b->enter($__internal_49e0e86abe45f40ee10bc0efbce45a7124db2e744bc80b5d526799dd0840012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49e0e86abe45f40ee10bc0efbce45a7124db2e744bc80b5d526799dd0840012b->leave($__internal_49e0e86abe45f40ee10bc0efbce45a7124db2e744bc80b5d526799dd0840012b_prof);

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
