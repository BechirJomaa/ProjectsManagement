<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d635ed75153db9b74e637e89ead08d72dd5d2c437eb2053895bfa22032c83e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_114f643c434c20128990f8b6afe767e465dd06e61eb8753dcfc193ecc6d04fb2 = $this->env->getExtension("native_profiler");
        $__internal_114f643c434c20128990f8b6afe767e465dd06e61eb8753dcfc193ecc6d04fb2->enter($__internal_114f643c434c20128990f8b6afe767e465dd06e61eb8753dcfc193ecc6d04fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_114f643c434c20128990f8b6afe767e465dd06e61eb8753dcfc193ecc6d04fb2->leave($__internal_114f643c434c20128990f8b6afe767e465dd06e61eb8753dcfc193ecc6d04fb2_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f688a5158a2f0492268eae6dafb6c24a53e8770490f9e2603267a4a65746258e = $this->env->getExtension("native_profiler");
        $__internal_f688a5158a2f0492268eae6dafb6c24a53e8770490f9e2603267a4a65746258e->enter($__internal_f688a5158a2f0492268eae6dafb6c24a53e8770490f9e2603267a4a65746258e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "

    <div class=\"content\">
        <div class=\"container\">
            <div class=\"login-page\">
                <div class=\"account_grid\">
                    <div class=\"col-md-6 login-left wow fadeInLeft\" data-wow-delay=\"0.4s\">
                        <h2>NOUVEAUX CLIENTS</h2>
                        <p>En créant un compte sur notre boutique, vous serez en mesure de se déplacer 
                            à travers le processus de paiement plus rapide, stocker les adresses de livraison 
                            multiples, consulter et suivre vos commandes dans votre compte et plus encore.</p>

                        <a class=\"acount-btn\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
                    </div>
                    <div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">
                        <h3>CLIENTS ENREGISTRÉS</h3>
                        <p>Si vous avez un compte avec nous, s'il vous plaît connecter.</p>
                        <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <div>
                                <h4>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></h4>
                                <input type=\"text\"  name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                            </div>
                            <div>
                                <h4>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></h4>
                                <input type=\"password\"  name=\"_password\" required=\"required\" />
                            </div>
                            <a class=\"forgot\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>     
                            <input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                        </form>
                    </div>\t
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f688a5158a2f0492268eae6dafb6c24a53e8770490f9e2603267a4a65746258e->leave($__internal_f688a5158a2f0492268eae6dafb6c24a53e8770490f9e2603267a4a65746258e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  84 => 32,  78 => 29,  71 => 25,  67 => 24,  62 => 22,  54 => 17,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/*     <div class="content">*/
/*         <div class="container">*/
/*             <div class="login-page">*/
/*                 <div class="account_grid">*/
/*                     <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">*/
/*                         <h2>NOUVEAUX CLIENTS</h2>*/
/*                         <p>En créant un compte sur notre boutique, vous serez en mesure de se déplacer */
/*                             à travers le processus de paiement plus rapide, stocker les adresses de livraison */
/*                             multiples, consulter et suivre vos commandes dans votre compte et plus encore.</p>*/
/* */
/*                         <a class="acount-btn" href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*                     </div>*/
/*                     <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">*/
/*                         <h3>CLIENTS ENREGISTRÉS</h3>*/
/*                         <p>Si vous avez un compte avec nous, s'il vous plaît connecter.</p>*/
/*                         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                             <div>*/
/*                                 <h4>{{ 'security.login.username'|trans }}<label>*</label></h4>*/
/*                                 <input type="text"  name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                             </div>*/
/*                             <div>*/
/*                                 <h4>{{ 'security.login.password'|trans }}<label>*</label></h4>*/
/*                                 <input type="password"  name="_password" required="required" />*/
/*                             </div>*/
/*                             <a class="forgot" href="{{ path('fos_user_resetting_request') }}">Mot de passe oublié ?</a>     */
/*                             <input type="submit" value="{{ 'security.login.submit'|trans }}">*/
/*                         </form>*/
/*                     </div>	*/
/*                     <div class="clearfix"> </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
