<?php

/* departement/edit.html.twig */
class __TwigTemplate_803137c2decf54788bcfb2c2cd66dd0f31e66da0eed78537a5b62117ed4b554f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "departement/edit.html.twig", 1);
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
        $__internal_d0581d82800bbfe9b2b7a85ccd3677442d157bbc235a09fe8c6756074ae9c488 = $this->env->getExtension("native_profiler");
        $__internal_d0581d82800bbfe9b2b7a85ccd3677442d157bbc235a09fe8c6756074ae9c488->enter($__internal_d0581d82800bbfe9b2b7a85ccd3677442d157bbc235a09fe8c6756074ae9c488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departement/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0581d82800bbfe9b2b7a85ccd3677442d157bbc235a09fe8c6756074ae9c488->leave($__internal_d0581d82800bbfe9b2b7a85ccd3677442d157bbc235a09fe8c6756074ae9c488_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_169eb8fd659036533a133bc12b3d80f53d370e46d99de43a30a66c2c7dfa0678 = $this->env->getExtension("native_profiler");
        $__internal_169eb8fd659036533a133bc12b3d80f53d370e46d99de43a30a66c2c7dfa0678->enter($__internal_169eb8fd659036533a133bc12b3d80f53d370e46d99de43a30a66c2c7dfa0678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departement edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("departement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_169eb8fd659036533a133bc12b3d80f53d370e46d99de43a30a66c2c7dfa0678->leave($__internal_169eb8fd659036533a133bc12b3d80f53d370e46d99de43a30a66c2c7dfa0678_prof);

    }

    public function getTemplateName()
    {
        return "departement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Departement edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('departement_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
