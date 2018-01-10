<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9fc82463df9de921fe43192e9e6d9f7af28c800d93d3032b17ab58c6879e200b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_cff61fb19aa4b6768ffa489db66e9025733290b4f7cf8b581c9af4fa70835f9d = $this->env->getExtension("native_profiler");
        $__internal_cff61fb19aa4b6768ffa489db66e9025733290b4f7cf8b581c9af4fa70835f9d->enter($__internal_cff61fb19aa4b6768ffa489db66e9025733290b4f7cf8b581c9af4fa70835f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff61fb19aa4b6768ffa489db66e9025733290b4f7cf8b581c9af4fa70835f9d->leave($__internal_cff61fb19aa4b6768ffa489db66e9025733290b4f7cf8b581c9af4fa70835f9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae7a427ea753ca5b868f58889d165bdae82829b0b6f027adc9cf8b270a0b878b = $this->env->getExtension("native_profiler");
        $__internal_ae7a427ea753ca5b868f58889d165bdae82829b0b6f027adc9cf8b270a0b878b->enter($__internal_ae7a427ea753ca5b868f58889d165bdae82829b0b6f027adc9cf8b270a0b878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ae7a427ea753ca5b868f58889d165bdae82829b0b6f027adc9cf8b270a0b878b->leave($__internal_ae7a427ea753ca5b868f58889d165bdae82829b0b6f027adc9cf8b270a0b878b_prof);

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
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
