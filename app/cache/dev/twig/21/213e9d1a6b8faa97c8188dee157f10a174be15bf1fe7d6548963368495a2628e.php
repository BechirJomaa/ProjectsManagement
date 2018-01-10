<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c60756b32e5f5a4b2547c307a202226f222a165077f9cbbc53b1d76b91fc187e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45fa3da7fae64074bf63b88eeb2009829c241961a0cfd61de12149302a4713be = $this->env->getExtension("native_profiler");
        $__internal_45fa3da7fae64074bf63b88eeb2009829c241961a0cfd61de12149302a4713be->enter($__internal_45fa3da7fae64074bf63b88eeb2009829c241961a0cfd61de12149302a4713be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45fa3da7fae64074bf63b88eeb2009829c241961a0cfd61de12149302a4713be->leave($__internal_45fa3da7fae64074bf63b88eeb2009829c241961a0cfd61de12149302a4713be_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_092efc565a6cb9454fd2793250b5dda624d1db0cb580b4291f4063596fd91d0b = $this->env->getExtension("native_profiler");
        $__internal_092efc565a6cb9454fd2793250b5dda624d1db0cb580b4291f4063596fd91d0b->enter($__internal_092efc565a6cb9454fd2793250b5dda624d1db0cb580b4291f4063596fd91d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_092efc565a6cb9454fd2793250b5dda624d1db0cb580b4291f4063596fd91d0b->leave($__internal_092efc565a6cb9454fd2793250b5dda624d1db0cb580b4291f4063596fd91d0b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
