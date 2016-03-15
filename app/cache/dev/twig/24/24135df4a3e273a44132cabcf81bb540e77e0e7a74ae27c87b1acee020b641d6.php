<?php

/* annonce/edit.html.twig */
class __TwigTemplate_8693a56fe3f36e38197f4ee92fd62e9fd2b5bd739016d8fc554116ad497034b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonce/edit.html.twig", 1);
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
        $__internal_3c03d0106e292770d4741f6abdd672d85d5c78c0a6d42196100b0acc13f54c5c = $this->env->getExtension("native_profiler");
        $__internal_3c03d0106e292770d4741f6abdd672d85d5c78c0a6d42196100b0acc13f54c5c->enter($__internal_3c03d0106e292770d4741f6abdd672d85d5c78c0a6d42196100b0acc13f54c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c03d0106e292770d4741f6abdd672d85d5c78c0a6d42196100b0acc13f54c5c->leave($__internal_3c03d0106e292770d4741f6abdd672d85d5c78c0a6d42196100b0acc13f54c5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eafb26cc79f2ecf401661d405b6624979c51f8eb171b953dd7083062b83005d0 = $this->env->getExtension("native_profiler");
        $__internal_eafb26cc79f2ecf401661d405b6624979c51f8eb171b953dd7083062b83005d0->enter($__internal_eafb26cc79f2ecf401661d405b6624979c51f8eb171b953dd7083062b83005d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("annonce_index");
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
        
        $__internal_eafb26cc79f2ecf401661d405b6624979c51f8eb171b953dd7083062b83005d0->leave($__internal_eafb26cc79f2ecf401661d405b6624979c51f8eb171b953dd7083062b83005d0_prof);

    }

    public function getTemplateName()
    {
        return "annonce/edit.html.twig";
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
/*     <h1>Annonce edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('annonce_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
