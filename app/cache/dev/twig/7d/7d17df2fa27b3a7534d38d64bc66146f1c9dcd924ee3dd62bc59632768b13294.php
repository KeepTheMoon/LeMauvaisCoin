<?php

/* annonce/edit.html.twig */
class __TwigTemplate_7d0a3fa21f61771b2742225582c9b8d8fd899989b82557c37121248ab064608a extends Twig_Template
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
        $__internal_f1445be29b46a752a613e59e3ed4d992364957c6b0b86ada523a6ea1dc8636c9 = $this->env->getExtension("native_profiler");
        $__internal_f1445be29b46a752a613e59e3ed4d992364957c6b0b86ada523a6ea1dc8636c9->enter($__internal_f1445be29b46a752a613e59e3ed4d992364957c6b0b86ada523a6ea1dc8636c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1445be29b46a752a613e59e3ed4d992364957c6b0b86ada523a6ea1dc8636c9->leave($__internal_f1445be29b46a752a613e59e3ed4d992364957c6b0b86ada523a6ea1dc8636c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f34da5b6df005968bc6bd16ce67ecc75f1b335d44f3fa5d645353294680a27f = $this->env->getExtension("native_profiler");
        $__internal_8f34da5b6df005968bc6bd16ce67ecc75f1b335d44f3fa5d645353294680a27f->enter($__internal_8f34da5b6df005968bc6bd16ce67ecc75f1b335d44f3fa5d645353294680a27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8f34da5b6df005968bc6bd16ce67ecc75f1b335d44f3fa5d645353294680a27f->leave($__internal_8f34da5b6df005968bc6bd16ce67ecc75f1b335d44f3fa5d645353294680a27f_prof);

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
