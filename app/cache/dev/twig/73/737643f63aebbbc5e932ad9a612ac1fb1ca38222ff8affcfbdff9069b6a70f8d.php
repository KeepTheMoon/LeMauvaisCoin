<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_56ac3cb5a38925e8b1b2b26972892e712cd92c558dfbf13facd7bea55aa01ed0 extends Twig_Template
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
        $__internal_1029f151edbb73038dae1dec4d86a490b17ccafe2c9204ca6d1a011b5416a48f = $this->env->getExtension("native_profiler");
        $__internal_1029f151edbb73038dae1dec4d86a490b17ccafe2c9204ca6d1a011b5416a48f->enter($__internal_1029f151edbb73038dae1dec4d86a490b17ccafe2c9204ca6d1a011b5416a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1029f151edbb73038dae1dec4d86a490b17ccafe2c9204ca6d1a011b5416a48f->leave($__internal_1029f151edbb73038dae1dec4d86a490b17ccafe2c9204ca6d1a011b5416a48f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b4b645e4a3a5bccc5b152258e6b2e69e38f7447031c066948a7de8ce827a5bf = $this->env->getExtension("native_profiler");
        $__internal_9b4b645e4a3a5bccc5b152258e6b2e69e38f7447031c066948a7de8ce827a5bf->enter($__internal_9b4b645e4a3a5bccc5b152258e6b2e69e38f7447031c066948a7de8ce827a5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9b4b645e4a3a5bccc5b152258e6b2e69e38f7447031c066948a7de8ce827a5bf->leave($__internal_9b4b645e4a3a5bccc5b152258e6b2e69e38f7447031c066948a7de8ce827a5bf_prof);

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
