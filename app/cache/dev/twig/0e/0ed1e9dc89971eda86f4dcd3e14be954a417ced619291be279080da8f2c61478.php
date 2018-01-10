<?php

/* client/new.html.twig */
class __TwigTemplate_bda0050c6b76bd451330f2fe452349a4b5f238c3d0ed68bf505cae5446d9fd8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "client/new.html.twig", 1);
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
        $__internal_628e4135da5d13225755609acf3cc527593352ab3c4fe1487dea531d33d082bc = $this->env->getExtension("native_profiler");
        $__internal_628e4135da5d13225755609acf3cc527593352ab3c4fe1487dea531d33d082bc->enter($__internal_628e4135da5d13225755609acf3cc527593352ab3c4fe1487dea531d33d082bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628e4135da5d13225755609acf3cc527593352ab3c4fe1487dea531d33d082bc->leave($__internal_628e4135da5d13225755609acf3cc527593352ab3c4fe1487dea531d33d082bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e15cf47f912deb7bec59e55a5e9943342937ea680f06d95b50332103fad511d0 = $this->env->getExtension("native_profiler");
        $__internal_e15cf47f912deb7bec59e55a5e9943342937ea680f06d95b50332103fad511d0->enter($__internal_e15cf47f912deb7bec59e55a5e9943342937ea680f06d95b50332103fad511d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Ajouter Client</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("client_new");
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
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\" class=\"btn\">
                Retour à la liste
            </a>
        </dt>
    </dl>
";
        
        $__internal_e15cf47f912deb7bec59e55a5e9943342937ea680f06d95b50332103fad511d0->leave($__internal_e15cf47f912deb7bec59e55a5e9943342937ea680f06d95b50332103fad511d0_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
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
/*     <h1>Ajouter Client</h1>*/
/* */
/*     <form action="{{ path('client_new') }}" method="POST" {{ form_enctype(form) }}>*/
/*         {{ form(form) }}*/
/*     </form>*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('client_index') }}" class="btn">*/
/*                 Retour à la liste*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* {% endblock %}*/
/* */
