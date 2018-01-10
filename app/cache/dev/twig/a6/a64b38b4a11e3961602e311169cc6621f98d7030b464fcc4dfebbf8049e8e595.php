<?php

/* projet/edit.html.twig */
class __TwigTemplate_04b7077539a861959ad020da9295d071a0b150cc1df95a2edba4f24f65928a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "projet/edit.html.twig", 1);
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
        $__internal_2deb9f06c63ef779760b9857ef2f5c5558de0abef967519ec3c0062201f03d10 = $this->env->getExtension("native_profiler");
        $__internal_2deb9f06c63ef779760b9857ef2f5c5558de0abef967519ec3c0062201f03d10->enter($__internal_2deb9f06c63ef779760b9857ef2f5c5558de0abef967519ec3c0062201f03d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2deb9f06c63ef779760b9857ef2f5c5558de0abef967519ec3c0062201f03d10->leave($__internal_2deb9f06c63ef779760b9857ef2f5c5558de0abef967519ec3c0062201f03d10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8c7873f8b6188f56296623d51191f1b4e53b22e37b42ff5ef520b6d6f3e1189 = $this->env->getExtension("native_profiler");
        $__internal_e8c7873f8b6188f56296623d51191f1b4e53b22e37b42ff5ef520b6d6f3e1189->enter($__internal_e8c7873f8b6188f56296623d51191f1b4e53b22e37b42ff5ef520b6d6f3e1189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier projet</h1>

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
        echo $this->env->getExtension('routing')->getPath("projet_index");
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
        
        $__internal_e8c7873f8b6188f56296623d51191f1b4e53b22e37b42ff5ef520b6d6f3e1189->leave($__internal_e8c7873f8b6188f56296623d51191f1b4e53b22e37b42ff5ef520b6d6f3e1189_prof);

    }

    public function getTemplateName()
    {
        return "projet/edit.html.twig";
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
/*     <h1>Modifier projet</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         */
/*     {{ form_end(edit_form) }}*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('projet_index') }}" class="btn">  Retour à la liste</a>*/
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
/* */
/* */
