<?php

/* AnnoncesBundle:MesAnnonces:mes_annonces.html.twig */
class __TwigTemplate_24962a5f6063a205e264d871c40cc49dbc4333595da7628b31a2d7c50d73d2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnoncesBundle:MesAnnonces:mes_annonces.html.twig", 1);
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
        $__internal_117985133b8465dbb71b4f11b296a23fdac8ee2d27c7bb3b3c9b47c7bab01fd0 = $this->env->getExtension("native_profiler");
        $__internal_117985133b8465dbb71b4f11b296a23fdac8ee2d27c7bb3b3c9b47c7bab01fd0->enter($__internal_117985133b8465dbb71b4f11b296a23fdac8ee2d27c7bb3b3c9b47c7bab01fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesBundle:MesAnnonces:mes_annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117985133b8465dbb71b4f11b296a23fdac8ee2d27c7bb3b3c9b47c7bab01fd0->leave($__internal_117985133b8465dbb71b4f11b296a23fdac8ee2d27c7bb3b3c9b47c7bab01fd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d6ea84c75e42c4da7cf9bce605eaff72897bc959ebfb8861a3b4f3cd051fb70 = $this->env->getExtension("native_profiler");
        $__internal_6d6ea84c75e42c4da7cf9bce605eaff72897bc959ebfb8861a3b4f3cd051fb70->enter($__internal_6d6ea84c75e42c4da7cf9bce605eaff72897bc959ebfb8861a3b4f3cd051fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mes annonces";
        
        $__internal_6d6ea84c75e42c4da7cf9bce605eaff72897bc959ebfb8861a3b4f3cd051fb70->leave($__internal_6d6ea84c75e42c4da7cf9bce605eaff72897bc959ebfb8861a3b4f3cd051fb70_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d14eacc89bcc630fac82ffc1cd05464126da9a30b91927b0d507d2d8ac8b26f = $this->env->getExtension("native_profiler");
        $__internal_5d14eacc89bcc630fac82ffc1cd05464126da9a30b91927b0d507d2d8ac8b26f->enter($__internal_5d14eacc89bcc630fac82ffc1cd05464126da9a30b91927b0d507d2d8ac8b26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table>
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
        
        $__internal_5d14eacc89bcc630fac82ffc1cd05464126da9a30b91927b0d507d2d8ac8b26f->leave($__internal_5d14eacc89bcc630fac82ffc1cd05464126da9a30b91927b0d507d2d8ac8b26f_prof);

    }

    public function getTemplateName()
    {
        return "AnnoncesBundle:MesAnnonces:mes_annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  135 => 41,  123 => 35,  117 => 32,  106 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  76 => 22,  73 => 21,  69 => 20,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Mes annonces{% endblock %}*/
/* */
/* {% block body %}*/
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
/* */
/* {% endblock %}*/
/* */
