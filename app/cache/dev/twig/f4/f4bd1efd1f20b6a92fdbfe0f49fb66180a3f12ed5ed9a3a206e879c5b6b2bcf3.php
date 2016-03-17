<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_500ff60d4cf3244e68c0df16b9e9d98658decbad14cc193947d8a333d1ec4438 extends Twig_Template
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
        $__internal_bee53b0261b1410f5f6c7d93f9aa567ff3ff4188265a67827314a87b5b7e7a51 = $this->env->getExtension("native_profiler");
        $__internal_bee53b0261b1410f5f6c7d93f9aa567ff3ff4188265a67827314a87b5b7e7a51->enter($__internal_bee53b0261b1410f5f6c7d93f9aa567ff3ff4188265a67827314a87b5b7e7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class = \"container\">
\t<div class=\"wrapper\">
\t<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
<h3 class=\"form-signin-heading\">Pour vous enreistrer, veuillez remplir le formulaire : </h3>
\t\t\t  <hr class=\"colorgraph\"><br>
    
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom d'utilisateur")));
        echo "
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "E-mail")));
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
        echo "
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Confirmez")));
        echo "
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <div>
        <button class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" type=\"Submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button> 
    </div>
</form>
</div></div>";
        
        $__internal_bee53b0261b1410f5f6c7d93f9aa567ff3ff4188265a67827314a87b5b7e7a51->leave($__internal_bee53b0261b1410f5f6c7d93f9aa567ff3ff4188265a67827314a87b5b7e7a51_prof);

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
        return array (  60 => 14,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  26 => 3,  22 => 1,);
    }
}
/* <div class = "container">*/
/* 	<div class="wrapper">*/
/* 	<form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/* <h3 class="form-signin-heading">Pour vous enreistrer, veuillez remplir le formulaire : </h3>*/
/* 			  <hr class="colorgraph"><br>*/
/*     */
/*     {{ form_start(form) }}*/
/* 	{{ form_row(form.username, {'attr': {'class': 'form-control', 'placeholder': "Nom d'utilisateur"}}) }}*/
/* 	{{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder': "E-mail"}}) }}*/
/* 	{{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': "Mot de passe"}}) }}*/
/* 	{{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': "Confirmez"}}) }}*/
/* 	{{ form_end(form) }}*/
/*     <div>*/
/*         <button class="btn btn-lg btn-success btn-block" id="_submit" name="_submit" type="Submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}">{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}</button> */
/*     </div>*/
/* </form>*/
/* </div></div>*/
