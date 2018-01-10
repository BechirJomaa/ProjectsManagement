<?php

/* user/new.html.twig */
class __TwigTemplate_bfdf517195c266e3b9a6b0c3a77c13bf8c5f4130e731e7f5a96e09cde7d3b625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "user/new.html.twig", 1);
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
        $__internal_a59530f008713a516b51c4d2956aed9d472ba70b067b87fa72bfb7ebdc910efa = $this->env->getExtension("native_profiler");
        $__internal_a59530f008713a516b51c4d2956aed9d472ba70b067b87fa72bfb7ebdc910efa->enter($__internal_a59530f008713a516b51c4d2956aed9d472ba70b067b87fa72bfb7ebdc910efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59530f008713a516b51c4d2956aed9d472ba70b067b87fa72bfb7ebdc910efa->leave($__internal_a59530f008713a516b51c4d2956aed9d472ba70b067b87fa72bfb7ebdc910efa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47e148f8610072e076dee3870ab2a3e3898e4c6e09b9ba983f7ae8dc7ecc7463 = $this->env->getExtension("native_profiler");
        $__internal_47e148f8610072e076dee3870ab2a3e3898e4c6e09b9ba983f7ae8dc7ecc7463->enter($__internal_47e148f8610072e076dee3870ab2a3e3898e4c6e09b9ba983f7ae8dc7ecc7463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nouvel Agent</h1>


 <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </form>
            
             <dl class=\"record_actions\">
        <dt>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn\">
                Retour à la liste
            </a>
        </dt>
    </dl>
";
        
        $__internal_47e148f8610072e076dee3870ab2a3e3898e4c6e09b9ba983f7ae8dc7ecc7463->leave($__internal_47e148f8610072e076dee3870ab2a3e3898e4c6e09b9ba983f7ae8dc7ecc7463_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  51 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Nouvel Agent</h1>*/
/* */
/* */
/*  <form action="{{ path('user_new') }}" method="POST" {{ form_enctype(form) }}>*/
/*         {{ form(form) }}*/
/*     </form>*/
/*             */
/*              <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('user_index') }}" class="btn">*/
/*                 Retour à la liste*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* {% endblock %}*/
/* */
