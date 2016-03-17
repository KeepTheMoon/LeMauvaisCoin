<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7c5d61686fb78e56fb908e741eb9756badfb32b734a3c5b6aecbaa702a65955f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c178b0633878e44a33c728ba577dac4fb326191aadaa0ee07d170e5f647a77cf = $this->env->getExtension("native_profiler");
        $__internal_c178b0633878e44a33c728ba577dac4fb326191aadaa0ee07d170e5f647a77cf->enter($__internal_c178b0633878e44a33c728ba577dac4fb326191aadaa0ee07d170e5f647a77cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c178b0633878e44a33c728ba577dac4fb326191aadaa0ee07d170e5f647a77cf->leave($__internal_c178b0633878e44a33c728ba577dac4fb326191aadaa0ee07d170e5f647a77cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a911d53107c93dbd9b4c05005988bb20a832c417e8fdcc3568ca066bfef98dac = $this->env->getExtension("native_profiler");
        $__internal_a911d53107c93dbd9b4c05005988bb20a832c417e8fdcc3568ca066bfef98dac->enter($__internal_a911d53107c93dbd9b4c05005988bb20a832c417e8fdcc3568ca066bfef98dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<div class = \"container\">
\t<div class=\"wrapper\">
\t\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t    <h3 class=\"form-signin-heading\">Bienvenue ! Veuillez vous connecter</h3>
\t\t\t  <hr class=\"colorgraph\"><br>
\t\t\t  
\t\t\t   <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
   \t\t\t  <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Nom d'utilisateur\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t <input type=\"password\"  class=\"form-control\" placeholder=\"Mot de passe\"  id=\"password\" name=\"_password\" required=\"required\" />    \t\t  
\t\t\t <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t  <button class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" type=\"Submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>  \t\t\t
\t\t</form>\t\t\t
\t</div>
</div>

    

";
        
        $__internal_a911d53107c93dbd9b4c05005988bb20a832c417e8fdcc3568ca066bfef98dac->leave($__internal_a911d53107c93dbd9b4c05005988bb20a832c417e8fdcc3568ca066bfef98dac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 18,  64 => 15,  60 => 14,  53 => 10,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div class="alert alert-danger">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* <div class = "container">*/
/* 	<div class="wrapper">*/
/* 		<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 		    <h3 class="form-signin-heading">Bienvenue ! Veuillez vous connecter</h3>*/
/* 			  <hr class="colorgraph"><br>*/
/* 			  */
/* 			   <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*    			  <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur" name="_username" value="{{ last_username }}" required="required" />*/
/* 			 <input type="password"  class="form-control" placeholder="Mot de passe"  id="password" name="_password" required="required" />    		  */
/* 			 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* 			  <button class="btn btn-lg btn-success btn-block" id="_submit" name="_submit" type="Submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>  			*/
/* 		</form>			*/
/* 	</div>*/
/* </div>*/
/* */
/*     */
/* */
/* {% endblock fos_user_content %}*/
