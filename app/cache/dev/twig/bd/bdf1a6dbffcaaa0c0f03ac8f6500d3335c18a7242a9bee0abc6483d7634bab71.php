<?php

/* client/index.html.twig */
class __TwigTemplate_e53c827958e0b5a46f48bee9e43b8520ccfb72555a07ddf831a4dbff6ee82e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "client/index.html.twig", 1);
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
        $__internal_12c894e6c87aef0637e947319eff0abf2c825921e38993085c59f982d250cdd3 = $this->env->getExtension("native_profiler");
        $__internal_12c894e6c87aef0637e947319eff0abf2c825921e38993085c59f982d250cdd3->enter($__internal_12c894e6c87aef0637e947319eff0abf2c825921e38993085c59f982d250cdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c894e6c87aef0637e947319eff0abf2c825921e38993085c59f982d250cdd3->leave($__internal_12c894e6c87aef0637e947319eff0abf2c825921e38993085c59f982d250cdd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_617213b0c08277219605ef46da5d333cf3cfd18d13b757fcd36c19e308346ead = $this->env->getExtension("native_profiler");
        $__internal_617213b0c08277219605ef46da5d333cf3cfd18d13b757fcd36c19e308346ead->enter($__internal_617213b0c08277219605ef46da5d333cf3cfd18d13b757fcd36c19e308346ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des clients</h1>
 
        <dl>
        <dt>
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 9
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("client_new");
            echo "\" class=\"btn\">
                Nouvel client
            </a>
           ";
        }
        // line 13
        echo "           
        </dt>
       
    </dl>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>

                <th>Nom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                    ";
            // line 37
            if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                // line 38
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-edit\"></i></a>
                    ";
            }
            // line 40
            echo "                     ";
            if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
                // line 41
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_email", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-mail-forward\"></i></a>
                    ";
            }
            // line 43
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    
";
        
        $__internal_617213b0c08277219605ef46da5d333cf3cfd18d13b757fcd36c19e308346ead->leave($__internal_617213b0c08277219605ef46da5d333cf3cfd18d13b757fcd36c19e308346ead_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  119 => 43,  113 => 41,  110 => 40,  104 => 38,  102 => 37,  98 => 36,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  78 => 30,  74 => 29,  56 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des clients</h1>*/
/*  */
/*         <dl>*/
/*         <dt>*/
/*             {% if  us.roles[0] == "ROLE_ADMIN" %}*/
/*             <a href="{{ path('client_new') }}" class="btn">*/
/*                 Nouvel client*/
/*             </a>*/
/*            {% endif %}*/
/*            */
/*         </dt>*/
/*        */
/*     </dl>*/
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/* */
/*                 <th>Nom</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Email</th>*/
/*                 <th>Telephone</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for client in clients %}*/
/*             <tr>*/
/*                 <td>{{ client.nom }}</td>*/
/*                 <td>{{ client.adresse }}</td>*/
/*                 <td>{{ client.email }}</td>*/
/*                 <td>{{ client.telephone }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('client_show', { 'id': client.id }) }}"><i class="icon-book"></i></a>*/
/*                     {% if  us.roles[0] == "ROLE_ADMIN" %}*/
/*                     <a href="{{ path('client_edit', { 'id': client.id }) }}"><i class="icon-edit"></i></a>*/
/*                     {% endif %}*/
/*                      {% if  us.roles[0] == "ROLE_RESPONSABLE" %}*/
/*                     <a href="{{ path('client_email', { 'id': client.id }) }}"><i class="icon-mail-forward"></i></a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
