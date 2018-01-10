<?php

/* client/new.html.twig */
class __TwigTemplate_574092c8ae4cb3ee39660e702fdca73d9d06468143edcafaebce8128320c3b45 extends Twig_Template
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
        $__internal_26d87f3b7b94fe43eedd30b2c6ce9a1c4b97a124c2827643392764d03716c770 = $this->env->getExtension("native_profiler");
        $__internal_26d87f3b7b94fe43eedd30b2c6ce9a1c4b97a124c2827643392764d03716c770->enter($__internal_26d87f3b7b94fe43eedd30b2c6ce9a1c4b97a124c2827643392764d03716c770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d87f3b7b94fe43eedd30b2c6ce9a1c4b97a124c2827643392764d03716c770->leave($__internal_26d87f3b7b94fe43eedd30b2c6ce9a1c4b97a124c2827643392764d03716c770_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_039814de83d9b57dce566d1b3624ef0d321f798955de982f76dfa9f1c2c588d4 = $this->env->getExtension("native_profiler");
        $__internal_039814de83d9b57dce566d1b3624ef0d321f798955de982f76dfa9f1c2c588d4->enter($__internal_039814de83d9b57dce566d1b3624ef0d321f798955de982f76dfa9f1c2c588d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_039814de83d9b57dce566d1b3624ef0d321f798955de982f76dfa9f1c2c588d4->leave($__internal_039814de83d9b57dce566d1b3624ef0d321f798955de982f76dfa9f1c2c588d4_prof);

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
