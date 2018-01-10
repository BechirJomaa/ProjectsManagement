<?php

/* user/new.html.twig */
class __TwigTemplate_1ee9851a308c357834a0a78621afe4b4f546e53d70bb544c1b692326c55caa7d extends Twig_Template
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
        $__internal_5b5d6e46eb451da60f6ed2c230e2ff2066fee339ab2ea5443532f077c999d11d = $this->env->getExtension("native_profiler");
        $__internal_5b5d6e46eb451da60f6ed2c230e2ff2066fee339ab2ea5443532f077c999d11d->enter($__internal_5b5d6e46eb451da60f6ed2c230e2ff2066fee339ab2ea5443532f077c999d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b5d6e46eb451da60f6ed2c230e2ff2066fee339ab2ea5443532f077c999d11d->leave($__internal_5b5d6e46eb451da60f6ed2c230e2ff2066fee339ab2ea5443532f077c999d11d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64433c06b70e0111b75276e8b1c6c6a335ad6e8b4ecb85022e053ccc95ff3807 = $this->env->getExtension("native_profiler");
        $__internal_64433c06b70e0111b75276e8b1c6c6a335ad6e8b4ecb85022e053ccc95ff3807->enter($__internal_64433c06b70e0111b75276e8b1c6c6a335ad6e8b4ecb85022e053ccc95ff3807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64433c06b70e0111b75276e8b1c6c6a335ad6e8b4ecb85022e053ccc95ff3807->leave($__internal_64433c06b70e0111b75276e8b1c6c6a335ad6e8b4ecb85022e053ccc95ff3807_prof);

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
