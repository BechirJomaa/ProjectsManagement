<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2fdd109206d9b5b16ebc31ffbebcc0063ff24a80861f11d8a6d5216c9b682fc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_2a04144a37e62bb6a56af0fbe4c9d91a9d470f1c4de095b1eb6a147cdc4f7cbf = $this->env->getExtension("native_profiler");
        $__internal_2a04144a37e62bb6a56af0fbe4c9d91a9d470f1c4de095b1eb6a147cdc4f7cbf->enter($__internal_2a04144a37e62bb6a56af0fbe4c9d91a9d470f1c4de095b1eb6a147cdc4f7cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a04144a37e62bb6a56af0fbe4c9d91a9d470f1c4de095b1eb6a147cdc4f7cbf->leave($__internal_2a04144a37e62bb6a56af0fbe4c9d91a9d470f1c4de095b1eb6a147cdc4f7cbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_314161af3d640574a0749d456fe5aff5c10f5852325bd2956a3de934a1f14af3 = $this->env->getExtension("native_profiler");
        $__internal_314161af3d640574a0749d456fe5aff5c10f5852325bd2956a3de934a1f14af3->enter($__internal_314161af3d640574a0749d456fe5aff5c10f5852325bd2956a3de934a1f14af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_314161af3d640574a0749d456fe5aff5c10f5852325bd2956a3de934a1f14af3->leave($__internal_314161af3d640574a0749d456fe5aff5c10f5852325bd2956a3de934a1f14af3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
