<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_05945c04d6217d5111d631dab8581502de7249a31a5c10114952b670e63fcfdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7454d063b81cf1f94af5b47cbdab2b613bc3c37cee3449f65db3e5c35bd06426 = $this->env->getExtension("native_profiler");
        $__internal_7454d063b81cf1f94af5b47cbdab2b613bc3c37cee3449f65db3e5c35bd06426->enter($__internal_7454d063b81cf1f94af5b47cbdab2b613bc3c37cee3449f65db3e5c35bd06426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7454d063b81cf1f94af5b47cbdab2b613bc3c37cee3449f65db3e5c35bd06426->leave($__internal_7454d063b81cf1f94af5b47cbdab2b613bc3c37cee3449f65db3e5c35bd06426_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7df40dfebfb8818322761366777fb682dbcafa4d47cdc8c5fa104dccde5316a1 = $this->env->getExtension("native_profiler");
        $__internal_7df40dfebfb8818322761366777fb682dbcafa4d47cdc8c5fa104dccde5316a1->enter($__internal_7df40dfebfb8818322761366777fb682dbcafa4d47cdc8c5fa104dccde5316a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7df40dfebfb8818322761366777fb682dbcafa4d47cdc8c5fa104dccde5316a1->leave($__internal_7df40dfebfb8818322761366777fb682dbcafa4d47cdc8c5fa104dccde5316a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd929d268cfbc22aa2f0628232dfffac80b82db286a9982d766153f22b76276e = $this->env->getExtension("native_profiler");
        $__internal_dd929d268cfbc22aa2f0628232dfffac80b82db286a9982d766153f22b76276e->enter($__internal_dd929d268cfbc22aa2f0628232dfffac80b82db286a9982d766153f22b76276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd929d268cfbc22aa2f0628232dfffac80b82db286a9982d766153f22b76276e->leave($__internal_dd929d268cfbc22aa2f0628232dfffac80b82db286a9982d766153f22b76276e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba23c3c5fb5e41bc752538c97c697e95a923d7df86b93fca376cb811fce2eff4 = $this->env->getExtension("native_profiler");
        $__internal_ba23c3c5fb5e41bc752538c97c697e95a923d7df86b93fca376cb811fce2eff4->enter($__internal_ba23c3c5fb5e41bc752538c97c697e95a923d7df86b93fca376cb811fce2eff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ba23c3c5fb5e41bc752538c97c697e95a923d7df86b93fca376cb811fce2eff4->leave($__internal_ba23c3c5fb5e41bc752538c97c697e95a923d7df86b93fca376cb811fce2eff4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
