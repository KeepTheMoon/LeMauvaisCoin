<?php

/* annonce/new.html.twig */
class __TwigTemplate_a507a2386fb695a26b487f9f69c03e2e7976947ee41f136b59eda874e5d5ac62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonce/new.html.twig", 1);
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
        $__internal_f0f28e3401864218aac0022f9c67a03ab3121f113547332a35bfaa76753efbda = $this->env->getExtension("native_profiler");
        $__internal_f0f28e3401864218aac0022f9c67a03ab3121f113547332a35bfaa76753efbda->enter($__internal_f0f28e3401864218aac0022f9c67a03ab3121f113547332a35bfaa76753efbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f28e3401864218aac0022f9c67a03ab3121f113547332a35bfaa76753efbda->leave($__internal_f0f28e3401864218aac0022f9c67a03ab3121f113547332a35bfaa76753efbda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdd7248bd560664bf198ab5609dda74e39f5de89db94a4059b9cc5463bfa4201 = $this->env->getExtension("native_profiler");
        $__internal_fdd7248bd560664bf198ab5609dda74e39f5de89db94a4059b9cc5463bfa4201->enter($__internal_fdd7248bd560664bf198ab5609dda74e39f5de89db94a4059b9cc5463bfa4201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("annonce_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fdd7248bd560664bf198ab5609dda74e39f5de89db94a4059b9cc5463bfa4201->leave($__internal_fdd7248bd560664bf198ab5609dda74e39f5de89db94a4059b9cc5463bfa4201_prof);

    }

    public function getTemplateName()
    {
        return "annonce/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Annonce creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('annonce_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
