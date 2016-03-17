<?php

/* region/index.html.twig */
class __TwigTemplate_d9f22b6b25c7ec2cda3c8a064658091e412b8c1842cee687fb44a396c032d8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "region/index.html.twig", 1);
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
        $__internal_72f193d77ddb7ce9b8f9af1f9af437d49bf054ae63dd643b97a9b2bfb6d0af01 = $this->env->getExtension("native_profiler");
        $__internal_72f193d77ddb7ce9b8f9af1f9af437d49bf054ae63dd643b97a9b2bfb6d0af01->enter($__internal_72f193d77ddb7ce9b8f9af1f9af437d49bf054ae63dd643b97a9b2bfb6d0af01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "region/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f193d77ddb7ce9b8f9af1f9af437d49bf054ae63dd643b97a9b2bfb6d0af01->leave($__internal_72f193d77ddb7ce9b8f9af1f9af437d49bf054ae63dd643b97a9b2bfb6d0af01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17fc41e3637ff350fca97e17edbe3a8009cc2c9c2157dd74801715dd6f491b52 = $this->env->getExtension("native_profiler");
        $__internal_17fc41e3637ff350fca97e17edbe3a8009cc2c9c2157dd74801715dd6f491b52->enter($__internal_17fc41e3637ff350fca97e17edbe3a8009cc2c9c2157dd74801715dd6f491b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Region list</h1>

    <table>
        <thead>
            <tr>
                <th>Idregion</th>
                <th>Nomregion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_show", array("id" => $this->getAttribute($context["region"], "idregion", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "idregion", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "nomregion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_show", array("id" => $this->getAttribute($context["region"], "idregion", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_edit", array("id" => $this->getAttribute($context["region"], "idregion", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("region_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_17fc41e3637ff350fca97e17edbe3a8009cc2c9c2157dd74801715dd6f491b52->leave($__internal_17fc41e3637ff350fca97e17edbe3a8009cc2c9c2157dd74801715dd6f491b52_prof);

    }

    public function getTemplateName()
    {
        return "region/index.html.twig";
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
/*     <h1>Region list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idregion</th>*/
/*                 <th>Nomregion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for region in regions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('region_show', { 'id': region.idregion }) }}">{{ region.idregion }}</a></td>*/
/*                 <td>{{ region.nomregion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('region_show', { 'id': region.idregion }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('region_edit', { 'id': region.idregion }) }}">edit</a>*/
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
/*             <a href="{{ path('region_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
