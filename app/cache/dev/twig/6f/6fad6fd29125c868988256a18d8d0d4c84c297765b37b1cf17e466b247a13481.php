<?php

/* tache/index.html.twig */
class __TwigTemplate_11ebfb13f4b70df338908c28fa5d8233db8303e60c8ba3ab422b8789acb93be8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "tache/index.html.twig", 1);
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
        $__internal_dc6181e49e48ac8ae905d81420af1d61a4621b654d3a8d365fbff96ed2fea3f0 = $this->env->getExtension("native_profiler");
        $__internal_dc6181e49e48ac8ae905d81420af1d61a4621b654d3a8d365fbff96ed2fea3f0->enter($__internal_dc6181e49e48ac8ae905d81420af1d61a4621b654d3a8d365fbff96ed2fea3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc6181e49e48ac8ae905d81420af1d61a4621b654d3a8d365fbff96ed2fea3f0->leave($__internal_dc6181e49e48ac8ae905d81420af1d61a4621b654d3a8d365fbff96ed2fea3f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40f81c869be25d10f7d3a49dd49f2b434c7fee2afda8208a4a0a77b9b22cc95 = $this->env->getExtension("native_profiler");
        $__internal_b40f81c869be25d10f7d3a49dd49f2b434c7fee2afda8208a4a0a77b9b22cc95->enter($__internal_b40f81c869be25d10f7d3a49dd49f2b434c7fee2afda8208a4a0a77b9b22cc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des taches</h1>

    <dl>
        <dt>
              ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
            // line 9
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_new", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
            echo "\" class=\"btn\">
                Nouvelle tache
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
               
                <th>Datedebut</th>
                <th>Datefin</th>
                <th>Duree</th>
                <th>Cout</th>
                <th>Statut</th>
                <th>Progress</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) ? $context["taches"] : $this->getContext($context, "taches")));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            if ($this->getAttribute($context["tache"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tache"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["tache"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tache"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "duree", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "cout", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "statut", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "progress", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_show", array("id" => $this->getAttribute($context["tache"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                     ";
            // line 41
            if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
                // line 42
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_edit", array("id" => $this->getAttribute($context["tache"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-edit\"></i></a>
                    ";
            }
            // line 44
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

";
        
        $__internal_b40f81c869be25d10f7d3a49dd49f2b434c7fee2afda8208a4a0a77b9b22cc95->leave($__internal_b40f81c869be25d10f7d3a49dd49f2b434c7fee2afda8208a4a0a77b9b22cc95_prof);

    }

    public function getTemplateName()
    {
        return "tache/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  124 => 44,  118 => 42,  116 => 41,  112 => 40,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  89 => 34,  83 => 33,  80 => 32,  76 => 31,  56 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des taches</h1>*/
/* */
/*     <dl>*/
/*         <dt>*/
/*               {% if  us.roles[0] == "COMMERCIAL" %}*/
/*             <a href="{{ path('tache_new', { 'id': projet.id }) }}" class="btn">*/
/*                 Nouvelle tache*/
/*             </a>*/
/*                  {% endif %}*/
/*               */
/*         </dt>*/
/*        */
/*     </dl>*/
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                */
/*                 <th>Datedebut</th>*/
/*                 <th>Datefin</th>*/
/*                 <th>Duree</th>*/
/*                 <th>Cout</th>*/
/*                 <th>Statut</th>*/
/*                 <th>Progress</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tache in taches %}*/
/*             <tr>*/
/*                 <td>{% if tache.dateDebut %}{{ tache.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if tache.dateFin %}{{ tache.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ tache.duree }}</td>*/
/*                 <td>{{ tache.cout }}</td>*/
/*                 <td>{{ tache.statut }}</td>*/
/*                 <td>{{ tache.progress }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('tache_show', { 'id': tache.id }) }}"><i class="icon-book"></i></a>*/
/*                      {% if  us.roles[0] == "COMMERCIAL" %}*/
/*                     <a href="{{ path('tache_edit', { 'id': tache.id }) }}"><i class="icon-edit"></i></a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
