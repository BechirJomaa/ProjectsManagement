<?php

/* materiel/new.html.twig */
class __TwigTemplate_0e79a0d7a32d1b8ff76c7f6b9015202c685a7a890ca700db3cbcc347be30afa9 extends Twig_Template
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
        $__internal_78f6ff1aa9bcc39e6baa3fb08b91696c68e59e26e5e1793e77b5f427c50af301 = $this->env->getExtension("native_profiler");
        $__internal_78f6ff1aa9bcc39e6baa3fb08b91696c68e59e26e5e1793e77b5f427c50af301->enter($__internal_78f6ff1aa9bcc39e6baa3fb08b91696c68e59e26e5e1793e77b5f427c50af301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f6ff1aa9bcc39e6baa3fb08b91696c68e59e26e5e1793e77b5f427c50af301->leave($__internal_78f6ff1aa9bcc39e6baa3fb08b91696c68e59e26e5e1793e77b5f427c50af301_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c7f93cbb1d694af4361c22f863aaedd9ff000c2d0dd376e5531b1c35a30a79c = $this->env->getExtension("native_profiler");
        $__internal_2c7f93cbb1d694af4361c22f863aaedd9ff000c2d0dd376e5531b1c35a30a79c->enter($__internal_2c7f93cbb1d694af4361c22f863aaedd9ff000c2d0dd376e5531b1c35a30a79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c7f93cbb1d694af4361c22f863aaedd9ff000c2d0dd376e5531b1c35a30a79c->leave($__internal_2c7f93cbb1d694af4361c22f863aaedd9ff000c2d0dd376e5531b1c35a30a79c_prof);

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
