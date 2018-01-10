<?php

/* materiel/new.html.twig */
class __TwigTemplate_8739c95c7fcb20a4abb209ce7d44e8db47fe1dd5653a8f72504882d1ac7487c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "materiel/new.html.twig", 1);
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
        $__internal_15f9d0f776f520d3e7b74b9cc3ec326b53a6f52e9e3ace93ce36e333e2f901fc = $this->env->getExtension("native_profiler");
        $__internal_15f9d0f776f520d3e7b74b9cc3ec326b53a6f52e9e3ace93ce36e333e2f901fc->enter($__internal_15f9d0f776f520d3e7b74b9cc3ec326b53a6f52e9e3ace93ce36e333e2f901fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f9d0f776f520d3e7b74b9cc3ec326b53a6f52e9e3ace93ce36e333e2f901fc->leave($__internal_15f9d0f776f520d3e7b74b9cc3ec326b53a6f52e9e3ace93ce36e333e2f901fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3620a343d8146971c2135da94d1439837d0de4b30b1ba82e924e4444e27cd25d = $this->env->getExtension("native_profiler");
        $__internal_3620a343d8146971c2135da94d1439837d0de4b30b1ba82e924e4444e27cd25d->enter($__internal_3620a343d8146971c2135da94d1439837d0de4b30b1ba82e924e4444e27cd25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Ajouter materiel</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("materiel_new");
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
        echo $this->env->getExtension('routing')->getPath("materiel_index");
        echo "\" class=\"btn\">
                Retour à la liste
            </a>
        </dt>
    </dl>
";
        
        $__internal_3620a343d8146971c2135da94d1439837d0de4b30b1ba82e924e4444e27cd25d->leave($__internal_3620a343d8146971c2135da94d1439837d0de4b30b1ba82e924e4444e27cd25d_prof);

    }

    public function getTemplateName()
    {
        return "materiel/new.html.twig";
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
/*     <h1>Ajouter materiel</h1>*/
/* */
/*     <form action="{{ path('materiel_new') }}" method="POST" {{ form_enctype(form) }}>*/
/*         {{ form(form) }}*/
/*     </form>*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('materiel_index') }}" class="btn">*/
/*                 Retour à la liste*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* {% endblock %}*/
/* */
