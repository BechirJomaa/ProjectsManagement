<?php

/* client/show.html.twig */
class __TwigTemplate_54993d2ede255bb8f9e74eaacb864bcdc4d8fc38efbedbf9749fb0e7b68fa62e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "client/show.html.twig", 1);
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
        $__internal_0a40a66d62ceeb3e37f2739d3d58042b841f1ccea7f5bbf56179d703d5159adf = $this->env->getExtension("native_profiler");
        $__internal_0a40a66d62ceeb3e37f2739d3d58042b841f1ccea7f5bbf56179d703d5159adf->enter($__internal_0a40a66d62ceeb3e37f2739d3d58042b841f1ccea7f5bbf56179d703d5159adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a40a66d62ceeb3e37f2739d3d58042b841f1ccea7f5bbf56179d703d5159adf->leave($__internal_0a40a66d62ceeb3e37f2739d3d58042b841f1ccea7f5bbf56179d703d5159adf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_383142912d9333784fe787fc368b60b1856d65b2d50568b68eda41c454364ff0 = $this->env->getExtension("native_profiler");
        $__internal_383142912d9333784fe787fc368b60b1856d65b2d50568b68eda41c454364ff0->enter($__internal_383142912d9333784fe787fc368b60b1856d65b2d50568b68eda41c454364ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>
    
    <dl class=\"record_actions\">
        <dt>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\" class=\"btn\">  Retour à la liste</a>
              ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 10
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
            echo "\" class=\"btn\">Modifier</a>
             ";
        }
        // line 12
        echo "        </dt>
    </dl>

    <table class=\"table table-striped table-hover\" border=\"1\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    
";
        
        $__internal_383142912d9333784fe787fc368b60b1856d65b2d50568b68eda41c454364ff0->leave($__internal_383142912d9333784fe787fc368b60b1856d65b2d50568b68eda41c454364ff0_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  81 => 27,  74 => 23,  67 => 19,  58 => 12,  52 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client</h1>*/
/*     */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('client_index') }}" class="btn">  Retour à la liste</a>*/
/*               {% if  us.roles[0] == "ROLE_ADMIN" %}*/
/*             <a href="{{ path('client_edit', { 'id': client.id }) }}" class="btn">Modifier</a>*/
/*              {% endif %}*/
/*         </dt>*/
/*     </dl>*/
/* */
/*     <table class="table table-striped table-hover" border="1">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ client.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresse</th>*/
/*                 <td>{{ client.adresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ client.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telephone</th>*/
/*                 <td>{{ client.telephone }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
