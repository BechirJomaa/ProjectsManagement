<?php

/* projet/edit.html.twig */
class __TwigTemplate_08939ea3888b70f86631484cd63476e51822fe5aa942bafbd3afc4f460f95d7d extends Twig_Template
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
        $__internal_0c3c0da0dbcf19d0c300ee6a13da0dde09224e9b2333785b0ff2c9cc0cc40fd9 = $this->env->getExtension("native_profiler");
        $__internal_0c3c0da0dbcf19d0c300ee6a13da0dde09224e9b2333785b0ff2c9cc0cc40fd9->enter($__internal_0c3c0da0dbcf19d0c300ee6a13da0dde09224e9b2333785b0ff2c9cc0cc40fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c3c0da0dbcf19d0c300ee6a13da0dde09224e9b2333785b0ff2c9cc0cc40fd9->leave($__internal_0c3c0da0dbcf19d0c300ee6a13da0dde09224e9b2333785b0ff2c9cc0cc40fd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92563aa25b1001c0f73c0234bd47153435db4cc589446cad75541f02ad48f2a7 = $this->env->getExtension("native_profiler");
        $__internal_92563aa25b1001c0f73c0234bd47153435db4cc589446cad75541f02ad48f2a7->enter($__internal_92563aa25b1001c0f73c0234bd47153435db4cc589446cad75541f02ad48f2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92563aa25b1001c0f73c0234bd47153435db4cc589446cad75541f02ad48f2a7->leave($__internal_92563aa25b1001c0f73c0234bd47153435db4cc589446cad75541f02ad48f2a7_prof);

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
