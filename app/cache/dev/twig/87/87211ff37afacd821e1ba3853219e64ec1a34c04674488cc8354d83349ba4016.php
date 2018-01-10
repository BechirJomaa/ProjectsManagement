<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bf24ec27ca242302a24a9e6f23f649449722b4ac29df8f577443c73a6224b360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_b8d4b0079894059aa4e061370a86a42295e686d6c5670a91a7e0a5a801137dbf = $this->env->getExtension("native_profiler");
        $__internal_b8d4b0079894059aa4e061370a86a42295e686d6c5670a91a7e0a5a801137dbf->enter($__internal_b8d4b0079894059aa4e061370a86a42295e686d6c5670a91a7e0a5a801137dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d4b0079894059aa4e061370a86a42295e686d6c5670a91a7e0a5a801137dbf->leave($__internal_b8d4b0079894059aa4e061370a86a42295e686d6c5670a91a7e0a5a801137dbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_847b3cad7ce58684c6391b20f00f5116663c7fe9e314fcb98480c2853a93692b = $this->env->getExtension("native_profiler");
        $__internal_847b3cad7ce58684c6391b20f00f5116663c7fe9e314fcb98480c2853a93692b->enter($__internal_847b3cad7ce58684c6391b20f00f5116663c7fe9e314fcb98480c2853a93692b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_847b3cad7ce58684c6391b20f00f5116663c7fe9e314fcb98480c2853a93692b->leave($__internal_847b3cad7ce58684c6391b20f00f5116663c7fe9e314fcb98480c2853a93692b_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
