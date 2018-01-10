<?php

/* user/edit.html.twig */
class __TwigTemplate_af60aedb1ca67d7440874038b979de76b1fb944ee69eb5f2c51802f0fb8034d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "user/edit.html.twig", 1);
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
        $__internal_e98e76bcde8070a43507dcb6bc31d40294008424ace581134945f4524f158950 = $this->env->getExtension("native_profiler");
        $__internal_e98e76bcde8070a43507dcb6bc31d40294008424ace581134945f4524f158950->enter($__internal_e98e76bcde8070a43507dcb6bc31d40294008424ace581134945f4524f158950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98e76bcde8070a43507dcb6bc31d40294008424ace581134945f4524f158950->leave($__internal_e98e76bcde8070a43507dcb6bc31d40294008424ace581134945f4524f158950_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_175d24fa910f62b69c0b7ae89289f84462d0ba059fb401e47038d23c32d43886 = $this->env->getExtension("native_profiler");
        $__internal_175d24fa910f62b69c0b7ae89289f84462d0ba059fb401e47038d23c32d43886->enter($__internal_175d24fa910f62b69c0b7ae89289f84462d0ba059fb401e47038d23c32d43886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User edit</h1>

    
         ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
 

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_175d24fa910f62b69c0b7ae89289f84462d0ba059fb401e47038d23c32d43886->leave($__internal_175d24fa910f62b69c0b7ae89289f84462d0ba059fb401e47038d23c32d43886_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  60 => 17,  54 => 14,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>User edit</h1>*/
/* */
/*     */
/*          {{ form_widget(edit_form.roles)}}*/
/*         <input type="submit" value="Edit" />*/
/*  */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
