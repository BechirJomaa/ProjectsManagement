<?php

/* client/edit.html.twig */
class __TwigTemplate_45c6fc9e5ce5466f17828a6d17afbed22d946fd6881c3d817d3249b5bda2677a extends Twig_Template
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
        $__internal_8fd38ef6e056ef77d44e4036fa4f38f752fffe2482545af4523d5a12dada21d0 = $this->env->getExtension("native_profiler");
        $__internal_8fd38ef6e056ef77d44e4036fa4f38f752fffe2482545af4523d5a12dada21d0->enter($__internal_8fd38ef6e056ef77d44e4036fa4f38f752fffe2482545af4523d5a12dada21d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fd38ef6e056ef77d44e4036fa4f38f752fffe2482545af4523d5a12dada21d0->leave($__internal_8fd38ef6e056ef77d44e4036fa4f38f752fffe2482545af4523d5a12dada21d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb7131e069f5cf25099377d16bedcab08d62f485e52781dcafb59d6fca86aa0a = $this->env->getExtension("native_profiler");
        $__internal_eb7131e069f5cf25099377d16bedcab08d62f485e52781dcafb59d6fca86aa0a->enter($__internal_eb7131e069f5cf25099377d16bedcab08d62f485e52781dcafb59d6fca86aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb7131e069f5cf25099377d16bedcab08d62f485e52781dcafb59d6fca86aa0a->leave($__internal_eb7131e069f5cf25099377d16bedcab08d62f485e52781dcafb59d6fca86aa0a_prof);

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
