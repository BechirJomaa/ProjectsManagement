<?php

/* tache/show.html.twig */
class __TwigTemplate_44bcfefa275d8a111ae395d674b43cf7770878bff519857fdf0d11e09aaf4bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "tache/show.html.twig", 1);
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
        $__internal_47452953818f74b003898568b229e34fd37f9a33559d954ccff1e96634c31763 = $this->env->getExtension("native_profiler");
        $__internal_47452953818f74b003898568b229e34fd37f9a33559d954ccff1e96634c31763->enter($__internal_47452953818f74b003898568b229e34fd37f9a33559d954ccff1e96634c31763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tache/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47452953818f74b003898568b229e34fd37f9a33559d954ccff1e96634c31763->leave($__internal_47452953818f74b003898568b229e34fd37f9a33559d954ccff1e96634c31763_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7c0569482e72489f2cb06d9121933cf545c83a9793f8c7eb47f26b615d8a696 = $this->env->getExtension("native_profiler");
        $__internal_d7c0569482e72489f2cb06d9121933cf545c83a9793f8c7eb47f26b615d8a696->enter($__internal_d7c0569482e72489f2cb06d9121933cf545c83a9793f8c7eb47f26b615d8a696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tache</h1>
    <dl class=\"record_actions\">
        <dt>
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "projet", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">  Retour à la liste</a>
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_by_tache", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">Liste des materiels</a>
              ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
            // line 10
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_edit", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array()))), "html", null, true);
            echo "\" class=\"btn\">Modifier</a>
            ";
        }
        // line 12
        echo "            

        </dt>
    </dl>

    <table class=\"table table-striped table-hover\" border=\"1\">
        <tbody>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "dateDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 25
        if ($this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "duree", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cout</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "cout", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "statut", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Progress</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "progress", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

            
    <dl class=\"record_actions\">
        <dt>";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</dt>
     </dl>

";
        
        $__internal_d7c0569482e72489f2cb06d9121933cf545c83a9793f8c7eb47f26b615d8a696->leave($__internal_d7c0569482e72489f2cb06d9121933cf545c83a9793f8c7eb47f26b615d8a696_prof);

    }

    public function getTemplateName()
    {
        return "tache/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 48,  111 => 41,  104 => 37,  97 => 33,  90 => 29,  81 => 25,  72 => 21,  61 => 12,  55 => 10,  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Tache</h1>*/
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('tache_index', { 'id': tache.projet.id }) }}" class="btn">  Retour à la liste</a>*/
/*             <a href="{{ path('materiel_by_tache', { 'id': tache.id }) }}" class="btn">Liste des materiels</a>*/
/*               {% if  us.roles[0] == "COMMERCIAL" %}*/
/*             <a href="{{ path('tache_edit', { 'id': tache.id }) }}" class="btn">Modifier</a>*/
/*             {% endif %}*/
/*             */
/* */
/*         </dt>*/
/*     </dl>*/
/* */
/*     <table class="table table-striped table-hover" border="1">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Datedebut</th>*/
/*                 <td>{% if tache.dateDebut %}{{ tache.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datefin</th>*/
/*                 <td>{% if tache.dateFin %}{{ tache.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Duree</th>*/
/*                 <td>{{ tache.duree }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cout</th>*/
/*                 <td>{{ tache.cout }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Statut</th>*/
/*                 <td>{{ tache.statut }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Progress</th>*/
/*                 <td>{{ tache.progress }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*             */
/*     <dl class="record_actions">*/
/*         <dt>{{ form(delete_form) }}</dt>*/
/*      </dl>*/
/* */
/* {% endblock %}*/
/* */
