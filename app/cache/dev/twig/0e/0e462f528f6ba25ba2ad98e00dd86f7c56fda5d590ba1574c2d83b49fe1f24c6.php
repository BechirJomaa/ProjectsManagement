<?php

/* projet/new.html.twig */
class __TwigTemplate_608b2e12e94e88fb46576789eccb666d2f1d8ea933d7ed924d2058065de6f6e0 extends Twig_Template
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
        $__internal_a7ad9ea42bea777c4f2e1e883e2d8cbbc058e8d928798ce0f2a23ab98bf203f7 = $this->env->getExtension("native_profiler");
        $__internal_a7ad9ea42bea777c4f2e1e883e2d8cbbc058e8d928798ce0f2a23ab98bf203f7->enter($__internal_a7ad9ea42bea777c4f2e1e883e2d8cbbc058e8d928798ce0f2a23ab98bf203f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7ad9ea42bea777c4f2e1e883e2d8cbbc058e8d928798ce0f2a23ab98bf203f7->leave($__internal_a7ad9ea42bea777c4f2e1e883e2d8cbbc058e8d928798ce0f2a23ab98bf203f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b2f2d683706b3c2ae474486133edbc3297683cb5f8121a5ede21d25d8fee94a = $this->env->getExtension("native_profiler");
        $__internal_0b2f2d683706b3c2ae474486133edbc3297683cb5f8121a5ede21d25d8fee94a->enter($__internal_0b2f2d683706b3c2ae474486133edbc3297683cb5f8121a5ede21d25d8fee94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b2f2d683706b3c2ae474486133edbc3297683cb5f8121a5ede21d25d8fee94a->leave($__internal_0b2f2d683706b3c2ae474486133edbc3297683cb5f8121a5ede21d25d8fee94a_prof);

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
