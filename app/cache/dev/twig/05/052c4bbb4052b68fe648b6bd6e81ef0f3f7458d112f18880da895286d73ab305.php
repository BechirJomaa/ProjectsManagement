<?php

/* client/newemail.html.twig */
class __TwigTemplate_4995ea7db7d21daf39a2d4e913cc1b8aa674317c5735b93f5cf3e47439766490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "client/newemail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e52f575a2e08d754a116ad895e6e0ac787f65cbb9a2ad82ddcd45faebcd8c89 = $this->env->getExtension("native_profiler");
        $__internal_7e52f575a2e08d754a116ad895e6e0ac787f65cbb9a2ad82ddcd45faebcd8c89->enter($__internal_7e52f575a2e08d754a116ad895e6e0ac787f65cbb9a2ad82ddcd45faebcd8c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/newemail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e52f575a2e08d754a116ad895e6e0ac787f65cbb9a2ad82ddcd45faebcd8c89->leave($__internal_7e52f575a2e08d754a116ad895e6e0ac787f65cbb9a2ad82ddcd45faebcd8c89_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_833855c21cffc2b20867abbb8c10113e10d6f679d2723c951d077a0364c53c1a = $this->env->getExtension("native_profiler");
        $__internal_833855c21cffc2b20867abbb8c10113e10d6f679d2723c951d077a0364c53c1a->enter($__internal_833855c21cffc2b20867abbb8c10113e10d6f679d2723c951d077a0364c53c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2> <strong> Envoyer un email à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</strong> </h2>
<hr>

<p>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>


 ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        
  ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



<hr>

 ";
        
        $__internal_833855c21cffc2b20867abbb8c10113e10d6f679d2723c951d077a0364c53c1a->leave($__internal_833855c21cffc2b20867abbb8c10113e10d6f679d2723c951d077a0364c53c1a_prof);

    }

    public function getTemplateName()
    {
        return "client/newemail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  47 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* {% block body %}*/
/* <h2> <strong> Envoyer un email à {{client.email}}</strong> </h2>*/
/* <hr>*/
/* */
/* <p>{{form_errors(form)}}</p>*/
/* */
/* */
/*  {{ form_start(form) }}*/
/*         */
/*   {{ form_end(form) }}*/
/* */
/* */
/* */
/* <hr>*/
/* */
/*  {% endblock %}*/
/* */
