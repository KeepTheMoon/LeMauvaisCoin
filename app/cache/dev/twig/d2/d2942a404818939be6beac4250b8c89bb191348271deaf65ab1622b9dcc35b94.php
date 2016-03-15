<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0579d31127dcc0d4cc1fc53350f4f801e96fb75634d79662de0abafdcdabf03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48bbc11734014b485d10334391f771495c440fce6b355b6f9b3b4b5755172838 = $this->env->getExtension("native_profiler");
        $__internal_48bbc11734014b485d10334391f771495c440fce6b355b6f9b3b4b5755172838->enter($__internal_48bbc11734014b485d10334391f771495c440fce6b355b6f9b3b4b5755172838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48bbc11734014b485d10334391f771495c440fce6b355b6f9b3b4b5755172838->leave($__internal_48bbc11734014b485d10334391f771495c440fce6b355b6f9b3b4b5755172838_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77ee587d0566f6122be0aaa3b14d4702a4b909d80c900433c14f24bb3a7b358b = $this->env->getExtension("native_profiler");
        $__internal_77ee587d0566f6122be0aaa3b14d4702a4b909d80c900433c14f24bb3a7b358b->enter($__internal_77ee587d0566f6122be0aaa3b14d4702a4b909d80c900433c14f24bb3a7b358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_77ee587d0566f6122be0aaa3b14d4702a4b909d80c900433c14f24bb3a7b358b->leave($__internal_77ee587d0566f6122be0aaa3b14d4702a4b909d80c900433c14f24bb3a7b358b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
