<?php

/* materiel/edit.html.twig */
class __TwigTemplate_161330a3e484e7c7f28a858c8f673b05dd0b8b0c725c6027539dad20c7d90fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "materiel/edit.html.twig", 1);
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
        $__internal_ca9b066bf86e1d07524e2ced4a0ad118127a6e14628f1c45d025b1d1961ad03c = $this->env->getExtension("native_profiler");
        $__internal_ca9b066bf86e1d07524e2ced4a0ad118127a6e14628f1c45d025b1d1961ad03c->enter($__internal_ca9b066bf86e1d07524e2ced4a0ad118127a6e14628f1c45d025b1d1961ad03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9b066bf86e1d07524e2ced4a0ad118127a6e14628f1c45d025b1d1961ad03c->leave($__internal_ca9b066bf86e1d07524e2ced4a0ad118127a6e14628f1c45d025b1d1961ad03c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b31ea284f90da833a52be951084a78acfa5db407397a2e71af22b3aea9966f0c = $this->env->getExtension("native_profiler");
        $__internal_b31ea284f90da833a52be951084a78acfa5db407397a2e71af22b3aea9966f0c->enter($__internal_b31ea284f90da833a52be951084a78acfa5db407397a2e71af22b3aea9966f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier materiel</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <dl class=\"record_actions\">
        <dt>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("materiel_index");
        echo "\" class=\"btn\">  Retour à la liste</a>
       </dt></br>
        <dt>
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </dt>
             </dl>
      
";
        
        $__internal_b31ea284f90da833a52be951084a78acfa5db407397a2e71af22b3aea9966f0c->leave($__internal_b31ea284f90da833a52be951084a78acfa5db407397a2e71af22b3aea9966f0c_prof);

    }

    public function getTemplateName()
    {
        return "materiel/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  62 => 15,  56 => 12,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Modifier materiel</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         */
/*     {{ form_end(edit_form) }}*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('materiel_index') }}" class="btn">  Retour à la liste</a>*/
/*        </dt></br>*/
/*         <dt>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </dt>*/
/*              </dl>*/
/*       */
/* {% endblock %}*/
/* */
/* */
