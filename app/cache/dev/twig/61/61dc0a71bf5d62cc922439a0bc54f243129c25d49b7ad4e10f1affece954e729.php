<?php

/* annonce/new.html.twig */
class __TwigTemplate_31fa8d6594ec43e9ffffc6d5954bfdd86f8c44ac7fa45d7311939586de4ebb96 extends Twig_Template
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
        $__internal_7c5fcf5d84464a878b29fe66d0979e8a6166af33f2bc9dd80511a6521a321c83 = $this->env->getExtension("native_profiler");
        $__internal_7c5fcf5d84464a878b29fe66d0979e8a6166af33f2bc9dd80511a6521a321c83->enter($__internal_7c5fcf5d84464a878b29fe66d0979e8a6166af33f2bc9dd80511a6521a321c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5fcf5d84464a878b29fe66d0979e8a6166af33f2bc9dd80511a6521a321c83->leave($__internal_7c5fcf5d84464a878b29fe66d0979e8a6166af33f2bc9dd80511a6521a321c83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9269c70d3daf6d6b2e8115f5a259b975956c2f04417e529163748d805e7f11c = $this->env->getExtension("native_profiler");
        $__internal_c9269c70d3daf6d6b2e8115f5a259b975956c2f04417e529163748d805e7f11c->enter($__internal_c9269c70d3daf6d6b2e8115f5a259b975956c2f04417e529163748d805e7f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9269c70d3daf6d6b2e8115f5a259b975956c2f04417e529163748d805e7f11c->leave($__internal_c9269c70d3daf6d6b2e8115f5a259b975956c2f04417e529163748d805e7f11c_prof);

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
