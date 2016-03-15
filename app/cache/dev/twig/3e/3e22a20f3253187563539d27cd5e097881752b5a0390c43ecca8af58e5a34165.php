<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c7db6c99546a223082061d1dcbec6074f394a9049760d9bdf726408f2c934bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce2f9a111dff3e60b63d4f3eac8081f56112a897b82d3d3f3d94f6a1ccb35ace = $this->env->getExtension("native_profiler");
        $__internal_ce2f9a111dff3e60b63d4f3eac8081f56112a897b82d3d3f3d94f6a1ccb35ace->enter($__internal_ce2f9a111dff3e60b63d4f3eac8081f56112a897b82d3d3f3d94f6a1ccb35ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class = \"container\">
\t<div class=\"wrapper\">
\t\t<form class=\"form-horizontal\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
\t\t    <h3 class=\"form-signin-heading\">Pour vous enregistrer, veuillez remplir le formulaire suivant : </h3>
\t\t\t  <hr class=\"colorgraph\"><br>


    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("placeholder" => "Nom d'utilisateur", "class" => "form-control")));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("placeholder" => "Confirmez", "class" => "form-control")));
        echo "

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <div>

        <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
\t</div>
</div>
";
        
        $__internal_ce2f9a111dff3e60b63d4f3eac8081f56112a897b82d3d3f3d94f6a1ccb35ace->leave($__internal_ce2f9a111dff3e60b63d4f3eac8081f56112a897b82d3d3f3d94f6a1ccb35ace_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  57 => 14,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  26 => 3,  22 => 1,);
    }
}
/* <div class = "container">*/
/* 	<div class="wrapper">*/
/* 		<form class="form-horizontal" action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/* 		    <h3 class="form-signin-heading">Pour vous enregistrer, veuillez remplir le formulaire suivant : </h3>*/
/* 			  <hr class="colorgraph"><br>*/
/* */
/* */
/*     {{ form_start(form) }}*/
/*       {{ form_row(form.username, { 'attr': {'placeholder': "Nom d'utilisateur", 'class': 'form-control'} }) }}*/
/*         {{ form_row(form.email,  { 'attr': {'placeholder': 'Email', 'class': 'form-control'} }) }}*/
/*         {{ form_row(form.plainPassword.first,  { 'attr': {'placeholder': 'Mot de passe', 'class': 'form-control'} }) }}*/
/*         {{ form_row(form.plainPassword.second,  { 'attr': {'placeholder': 'Confirmez', 'class': 'form-control'} }) }}*/
/* */
/*     {{ form_end(form) }}*/
/*     <div>*/
/* */
/*         <input class="btn btn-lg btn-success btn-block" type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* 	</div>*/
/* </div>*/
/* */
