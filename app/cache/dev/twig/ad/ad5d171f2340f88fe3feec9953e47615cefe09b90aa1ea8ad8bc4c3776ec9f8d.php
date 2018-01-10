<?php

/* materiel/materielByTache.html.twig */
class __TwigTemplate_3137ef02fa95dcaacbeaf160fe96fa88b9c075bb1a74d7000890166785e9b943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "materiel/materielByTache.html.twig", 1);
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
        $__internal_7686684ca48ee437e490a22207c58ff58881763ebcc9cd59bf3129ec3244cbbb = $this->env->getExtension("native_profiler");
        $__internal_7686684ca48ee437e490a22207c58ff58881763ebcc9cd59bf3129ec3244cbbb->enter($__internal_7686684ca48ee437e490a22207c58ff58881763ebcc9cd59bf3129ec3244cbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/materielByTache.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7686684ca48ee437e490a22207c58ff58881763ebcc9cd59bf3129ec3244cbbb->leave($__internal_7686684ca48ee437e490a22207c58ff58881763ebcc9cd59bf3129ec3244cbbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dfa16dd7ab8e4e79b8d2a404dfa544d1a4234625e474b1f25c10256c6385eb7 = $this->env->getExtension("native_profiler");
        $__internal_5dfa16dd7ab8e4e79b8d2a404dfa544d1a4234625e474b1f25c10256c6385eb7->enter($__internal_5dfa16dd7ab8e4e79b8d2a404dfa544d1a4234625e474b1f25c10256c6385eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des materiels</h1>
 
        <dl>
        <dt>
              ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
            // line 9
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_add_by_tache", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array()))), "html", null, true);
            echo "\" class=\"btn\">
                Nouveau materiel
            </a>
           ";
        }
        // line 13
        echo "        </dt>
       
    </dl>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
              
                <th>Nom</th>
                <th>Type</th>
                <th>Etat</th>
                <th>Nbrmatreserve</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "etat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "nbrMatReserve", array()), "html", null, true);
            echo "</td>
                <td>
                     <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_show", array("id" => $this->getAttribute($context["materiel"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                      ";
            // line 36
            if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
                // line 37
                echo "                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_edit", array("id" => $this->getAttribute($context["materiel"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-edit\"></i></a>
                         ";
            }
            // line 39
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    
";
        
        $__internal_5dfa16dd7ab8e4e79b8d2a404dfa544d1a4234625e474b1f25c10256c6385eb7->leave($__internal_5dfa16dd7ab8e4e79b8d2a404dfa544d1a4234625e474b1f25c10256c6385eb7_prof);

    }

    public function getTemplateName()
    {
        return "materiel/materielByTache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  109 => 39,  103 => 37,  101 => 36,  97 => 35,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  77 => 29,  73 => 28,  56 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des materiels</h1>*/
/*  */
/*         <dl>*/
/*         <dt>*/
/*               {% if  us.roles[0] == "COMMERCIAL" %}*/
/*             <a href="{{ path('materiel_add_by_tache', { 'id': tache.id }) }}" class="btn">*/
/*                 Nouveau materiel*/
/*             </a>*/
/*            {% endif %}*/
/*         </dt>*/
/*        */
/*     </dl>*/
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*               */
/*                 <th>Nom</th>*/
/*                 <th>Type</th>*/
/*                 <th>Etat</th>*/
/*                 <th>Nbrmatreserve</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for materiel in materiels %}*/
/*             <tr>*/
/*                 <td>{{ materiel.nom }}</td>*/
/*                 <td>{{ materiel.type }}</td>*/
/*                 <td>{{ materiel.etat }}</td>*/
/*                 <td>{{ materiel.nbrMatReserve }}</td>*/
/*                 <td>*/
/*                      <a href="{{ path('materiel_show', { 'id': materiel.id }) }}"><i class="icon-book"></i></a>*/
/*                       {% if  us.roles[0] == "COMMERCIAL" %}*/
/*                      <a href="{{ path('materiel_edit', { 'id': materiel.id }) }}"><i class="icon-edit"></i></a>*/
/*                          {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
