<?php

/* client/edit.html.twig */
class __TwigTemplate_8c73a41e8e9185a9ea1b057db709ea968133ea44dcefdb717011aa912e2aea0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "client/edit.html.twig", 1);
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
        $__internal_da57c19a34057449b488088e2abb7b2a06571890410fa8ae9566743c74bc74cb = $this->env->getExtension("native_profiler");
        $__internal_da57c19a34057449b488088e2abb7b2a06571890410fa8ae9566743c74bc74cb->enter($__internal_da57c19a34057449b488088e2abb7b2a06571890410fa8ae9566743c74bc74cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da57c19a34057449b488088e2abb7b2a06571890410fa8ae9566743c74bc74cb->leave($__internal_da57c19a34057449b488088e2abb7b2a06571890410fa8ae9566743c74bc74cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4b655574b50462dff6c30880d229f27156de2f3cbb439b706351596d8517b96 = $this->env->getExtension("native_profiler");
        $__internal_e4b655574b50462dff6c30880d229f27156de2f3cbb439b706351596d8517b96->enter($__internal_e4b655574b50462dff6c30880d229f27156de2f3cbb439b706351596d8517b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier client</h1>

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
        echo $this->env->getExtension('routing')->getPath("client_index");
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
        
        $__internal_e4b655574b50462dff6c30880d229f27156de2f3cbb439b706351596d8517b96->leave($__internal_e4b655574b50462dff6c30880d229f27156de2f3cbb439b706351596d8517b96_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
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
/*     <h1>Modifier client</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         */
/*     {{ form_end(edit_form) }}*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('client_index') }}" class="btn">  Retour à la liste</a>*/
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
