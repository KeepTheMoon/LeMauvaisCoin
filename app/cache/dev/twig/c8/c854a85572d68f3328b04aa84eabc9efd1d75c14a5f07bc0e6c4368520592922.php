<?php

/* region/edit.html.twig */
class __TwigTemplate_b3f89082908c364a068c78bef1b5f71c8fff9c2b284f22b0b43e57d2db023638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "region/edit.html.twig", 1);
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
        $__internal_9cc61f5aea4848db9c9d3ee545dacf279a060f1386049098666137ef3860b161 = $this->env->getExtension("native_profiler");
        $__internal_9cc61f5aea4848db9c9d3ee545dacf279a060f1386049098666137ef3860b161->enter($__internal_9cc61f5aea4848db9c9d3ee545dacf279a060f1386049098666137ef3860b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "region/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc61f5aea4848db9c9d3ee545dacf279a060f1386049098666137ef3860b161->leave($__internal_9cc61f5aea4848db9c9d3ee545dacf279a060f1386049098666137ef3860b161_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8f4900b5e0b9970922e417705a16a7a725f06766e0fcc474e6ae03391300fae = $this->env->getExtension("native_profiler");
        $__internal_a8f4900b5e0b9970922e417705a16a7a725f06766e0fcc474e6ae03391300fae->enter($__internal_a8f4900b5e0b9970922e417705a16a7a725f06766e0fcc474e6ae03391300fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Region edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("region_index");
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
        
        $__internal_a8f4900b5e0b9970922e417705a16a7a725f06766e0fcc474e6ae03391300fae->leave($__internal_a8f4900b5e0b9970922e417705a16a7a725f06766e0fcc474e6ae03391300fae_prof);

    }

    public function getTemplateName()
    {
        return "region/edit.html.twig";
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
/*     <h1>Region edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('region_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
