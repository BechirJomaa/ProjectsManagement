<?php

/* projet/show.html.twig */
class __TwigTemplate_cd5f6df92a5f07ea7aee840027713340f9f8aa3730c19a0b68bccfb05551aeac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "projet/show.html.twig", 1);
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
        $__internal_6c0956504831d12ee44f5a2a36f8d4cdac17ad1d49d49d19ed0eae1f708d89ea = $this->env->getExtension("native_profiler");
        $__internal_6c0956504831d12ee44f5a2a36f8d4cdac17ad1d49d49d19ed0eae1f708d89ea->enter($__internal_6c0956504831d12ee44f5a2a36f8d4cdac17ad1d49d49d19ed0eae1f708d89ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c0956504831d12ee44f5a2a36f8d4cdac17ad1d49d49d19ed0eae1f708d89ea->leave($__internal_6c0956504831d12ee44f5a2a36f8d4cdac17ad1d49d49d19ed0eae1f708d89ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a044be490f136c6d47a03728df974492ddef6d4a4ec7404761c5f7c82af8cb85 = $this->env->getExtension("native_profiler");
        $__internal_a044be490f136c6d47a03728df974492ddef6d4a4ec7404761c5f7c82af8cb85->enter($__internal_a044be490f136c6d47a03728df974492ddef6d4a4ec7404761c5f7c82af8cb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projet</h1>
    <dl>
        <dt>
      <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_index", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
                    Liste Des Taches
      </a>
      ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
            // line 11
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_add_by_projet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
            echo "\" class=\"btn\">
               Affecter Responsabes
        </a>
     ";
        }
        // line 15
        echo "     ";
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
            // line 16
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("financier_add_by_projet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
            echo "\" class=\"btn\">
             Affecter Financier
      </a>
             ";
        }
        // line 20
        echo "        </dt>
    </dl>

    <table class=\"table table-striped table-hover\" border=\"1\">
        <tbody>
          
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 28
        if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 32
        if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cout</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "cout", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "statut", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
           <tr>
                <th>Client</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "nom", array()), "html", null, true);
        echo "    
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "id", array()))), "html", null, true);
        echo "\"><i class=\"icon-book\"></i></a>
                   </td>
                
            </tr>
        </tbody>
    </table>
            
            
    <dl class=\"record_actions\">
        <dt>
                <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("projet_index");
        echo "\" class=\"btn\">  Retour à la liste</a>
        </dt></br>
        <dt>
            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_edit", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
                Modifier
            </a>
        </dt></br>
        <dt>";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</dt>
    </dl>

  
";
        
        $__internal_a044be490f136c6d47a03728df974492ddef6d4a4ec7404761c5f7c82af8cb85->leave($__internal_a044be490f136c6d47a03728df974492ddef6d4a4ec7404761c5f7c82af8cb85_prof);

    }

    public function getTemplateName()
    {
        return "projet/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 70,  151 => 66,  145 => 63,  132 => 53,  128 => 52,  121 => 48,  114 => 44,  107 => 40,  100 => 36,  91 => 32,  82 => 28,  72 => 20,  64 => 16,  61 => 15,  53 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Projet</h1>*/
/*     <dl>*/
/*         <dt>*/
/*       <a href="{{ path('tache_index', { 'id': projet.id }) }}" class="btn">*/
/*                     Liste Des Taches*/
/*       </a>*/
/*       {% if  us.roles[0] == "COMMERCIAL" %}*/
/*         <a href="{{ path('client_add_by_projet', { 'id': projet.id }) }}" class="btn">*/
/*                Affecter Responsabes*/
/*         </a>*/
/*      {% endif %}*/
/*      {% if  us.roles[0] == "ROLE_RESPONSABLE" %}*/
/*       <a href="{{ path('financier_add_by_projet', { 'id': projet.id }) }}" class="btn">*/
/*              Affecter Financier*/
/*       </a>*/
/*              {% endif %}*/
/*         </dt>*/
/*     </dl>*/
/* */
/*     <table class="table table-striped table-hover" border="1">*/
/*         <tbody>*/
/*           */
/*             <tr>*/
/*                 <th>Datedebut</th>*/
/*                 <td>{% if projet.dateDebut %}{{ projet.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datefin</th>*/
/*                 <td>{% if projet.dateFin %}{{ projet.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ projet.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cout</th>*/
/*                 <td>{{ projet.cout }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Statut</th>*/
/*                 <td>{{ projet.statut }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresse</th>*/
/*                 <td>{{ projet.adresse }}</td>*/
/*             </tr>*/
/*            <tr>*/
/*                 <th>Client</th>*/
/*                 <td>{{ projet.client.nom }}    */
/*                     <a href="{{ path('client_show', { 'id': projet.client.id }) }}"><i class="icon-book"></i></a>*/
/*                    </td>*/
/*                 */
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*             */
/*             */
/*     <dl class="record_actions">*/
/*         <dt>*/
/*                 <a href="{{ path('projet_index') }}" class="btn">  Retour à la liste</a>*/
/*         </dt></br>*/
/*         <dt>*/
/*             <a href="{{ path('projet_edit', { 'id': projet.id }) }}" class="btn">*/
/*                 Modifier*/
/*             </a>*/
/*         </dt></br>*/
/*         <dt>{{ form(delete_form) }}</dt>*/
/*     </dl>*/
/* */
/*   */
/* {% endblock %}*/
/* */
