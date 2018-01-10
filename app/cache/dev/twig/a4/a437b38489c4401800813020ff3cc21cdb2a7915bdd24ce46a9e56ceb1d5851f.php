<?php

/* projet/new.html.twig */
class __TwigTemplate_e1eaefbdeb5a93f48ce336824bdb3904377656cd37b2f29749773cae965db483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "projet/new.html.twig", 1);
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
        $__internal_77511af6a79cd0fd072e483007fe852e8db3b4e434e175edf316408cd4fcc08e = $this->env->getExtension("native_profiler");
        $__internal_77511af6a79cd0fd072e483007fe852e8db3b4e434e175edf316408cd4fcc08e->enter($__internal_77511af6a79cd0fd072e483007fe852e8db3b4e434e175edf316408cd4fcc08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77511af6a79cd0fd072e483007fe852e8db3b4e434e175edf316408cd4fcc08e->leave($__internal_77511af6a79cd0fd072e483007fe852e8db3b4e434e175edf316408cd4fcc08e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44085891b0d50b377fe04f69618a4129cef1ba7999ae5ab1c807c62ca8de13d5 = $this->env->getExtension("native_profiler");
        $__internal_44085891b0d50b377fe04f69618a4129cef1ba7999ae5ab1c807c62ca8de13d5->enter($__internal_44085891b0d50b377fe04f69618a4129cef1ba7999ae5ab1c807c62ca8de13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Ajouter Projet</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("projet_new");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </form>

    <dl class=\"record_actions\">
        <dt>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("projet_index");
        echo "\" class=\"btn\">
                Retour à la liste
            </a>
        </dt>
    </dl>
";
        
        $__internal_44085891b0d50b377fe04f69618a4129cef1ba7999ae5ab1c807c62ca8de13d5->leave($__internal_44085891b0d50b377fe04f69618a4129cef1ba7999ae5ab1c807c62ca8de13d5_prof);

    }

    public function getTemplateName()
    {
        return "projet/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Ajouter Projet</h1>*/
/* */
/*     <form action="{{ path('projet_new') }}" method="POST" {{ form_enctype(form) }}>*/
/*         {{ form(form) }}*/
/*     </form>*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('projet_index') }}" class="btn">*/
/*                 Retour à la liste*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* {% endblock %}*/
/* */
