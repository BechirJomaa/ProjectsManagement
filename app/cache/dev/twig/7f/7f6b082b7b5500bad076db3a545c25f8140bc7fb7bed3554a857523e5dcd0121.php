<?php

/* tache/edit.html.twig */
class __TwigTemplate_985593f47e02d6f0b25c01ad04de7eec5d75173e362af83f7c0d912777d0752a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "tache/edit.html.twig", 2);
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
        $__internal_e954d3b5864ef0c7513cb56fef70296aad00eb66d295c0e86db5ba6682c2a7cf = $this->env->getExtension("native_profiler");
        $__internal_e954d3b5864ef0c7513cb56fef70296aad00eb66d295c0e86db5ba6682c2a7cf->enter($__internal_e954d3b5864ef0c7513cb56fef70296aad00eb66d295c0e86db5ba6682c2a7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tache/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e954d3b5864ef0c7513cb56fef70296aad00eb66d295c0e86db5ba6682c2a7cf->leave($__internal_e954d3b5864ef0c7513cb56fef70296aad00eb66d295c0e86db5ba6682c2a7cf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_86a703e1b7cdcc2e83bb3be03ca8697d4d83dfb3283aec35186e2af937bb2ff5 = $this->env->getExtension("native_profiler");
        $__internal_86a703e1b7cdcc2e83bb3be03ca8697d4d83dfb3283aec35186e2af937bb2ff5->enter($__internal_86a703e1b7cdcc2e83bb3be03ca8697d4d83dfb3283aec35186e2af937bb2ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Modifier tache</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <dl class=\"record_actions\">
        <dt>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "projet", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">  Retour à la liste</a>
       </dt></br>
        <dt>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </dt>
             </dl>
      
";
        
        $__internal_86a703e1b7cdcc2e83bb3be03ca8697d4d83dfb3283aec35186e2af937bb2ff5->leave($__internal_86a703e1b7cdcc2e83bb3be03ca8697d4d83dfb3283aec35186e2af937bb2ff5_prof);

    }

    public function getTemplateName()
    {
        return "tache/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  62 => 16,  56 => 13,  49 => 9,  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Modifier tache</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         */
/*     {{ form_end(edit_form) }}*/
/* */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('tache_index', { 'id': tache.projet.id }) }}" class="btn">  Retour à la liste</a>*/
/*        </dt></br>*/
/*         <dt>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </dt>*/
/*              </dl>*/
/*       */
/* {% endblock %}*/
