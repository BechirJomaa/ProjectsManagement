<?php

/* tache/new.html.twig */
class __TwigTemplate_6cbde81b3bdcf4eb8aab38995f5f0948a304bd4c9afbdd7f9462764c76162f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "tache/new.html.twig", 1);
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
        $__internal_0691d9cc194920a8b7ba440ed1290427e877028a973567f8b800e801f89ed306 = $this->env->getExtension("native_profiler");
        $__internal_0691d9cc194920a8b7ba440ed1290427e877028a973567f8b800e801f89ed306->enter($__internal_0691d9cc194920a8b7ba440ed1290427e877028a973567f8b800e801f89ed306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tache/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0691d9cc194920a8b7ba440ed1290427e877028a973567f8b800e801f89ed306->leave($__internal_0691d9cc194920a8b7ba440ed1290427e877028a973567f8b800e801f89ed306_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03bd2f06aaa5c45cc7abc2775adcda222305dc466cff287ded43ea3fa980970c = $this->env->getExtension("native_profiler");
        $__internal_03bd2f06aaa5c45cc7abc2775adcda222305dc466cff287ded43ea3fa980970c->enter($__internal_03bd2f06aaa5c45cc7abc2775adcda222305dc466cff287ded43ea3fa980970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Ajouter Tache</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_new", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_index", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
                Retour à la liste
            </a>
        </dt>
    </dl>
";
        
        $__internal_03bd2f06aaa5c45cc7abc2775adcda222305dc466cff287ded43ea3fa980970c->leave($__internal_03bd2f06aaa5c45cc7abc2775adcda222305dc466cff287ded43ea3fa980970c_prof);

    }

    public function getTemplateName()
    {
        return "tache/new.html.twig";
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
/*     <h1>Ajouter Tache</h1>*/
/* */
/*     <form action="{{ path('tache_new', { 'id': projet.id }) }}" method="POST" {{ form_enctype(form) }}>*/
/*         {{ form(form) }}*/
/*     </form>*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('tache_index', { 'id': projet.id }) }}" class="btn">*/
/*                 Retour à la liste*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* {% endblock %}*/
