<?php

/* materiel/index.html.twig */
class __TwigTemplate_9e1c623deed5b0c36d150a40b93a2c9656daffef1eea7e8beba5ad00989c56ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "materiel/index.html.twig", 1);
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
        $__internal_049da05a149b77382c0468ec17607831e85ef89b69f0d3a7a04bd3f04894ccf7 = $this->env->getExtension("native_profiler");
        $__internal_049da05a149b77382c0468ec17607831e85ef89b69f0d3a7a04bd3f04894ccf7->enter($__internal_049da05a149b77382c0468ec17607831e85ef89b69f0d3a7a04bd3f04894ccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_049da05a149b77382c0468ec17607831e85ef89b69f0d3a7a04bd3f04894ccf7->leave($__internal_049da05a149b77382c0468ec17607831e85ef89b69f0d3a7a04bd3f04894ccf7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f6b0d42ebf54f2948b89880ade329893550bef48434615d81bc3f41e18eaf92 = $this->env->getExtension("native_profiler");
        $__internal_5f6b0d42ebf54f2948b89880ade329893550bef48434615d81bc3f41e18eaf92->enter($__internal_5f6b0d42ebf54f2948b89880ade329893550bef48434615d81bc3f41e18eaf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des materiels</h1>
 
        <dl>
        <dt>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("materiel_new");
        echo "\" class=\"btn\">
                Nouveau materiel
            </a>
          
        </dt>
       
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "etat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "nbrMatReserve", array()), "html", null, true);
            echo "</td>
                <td>
                     <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_show", array("id" => $this->getAttribute($context["materiel"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                     <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_edit", array("id" => $this->getAttribute($context["materiel"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    
";
        
        $__internal_5f6b0d42ebf54f2948b89880ade329893550bef48434615d81bc3f41e18eaf92->leave($__internal_5f6b0d42ebf54f2948b89880ade329893550bef48434615d81bc3f41e18eaf92_prof);

    }

    public function getTemplateName()
    {
        return "materiel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  96 => 35,  92 => 34,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  72 => 28,  68 => 27,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des materiels</h1>*/
/*  */
/*         <dl>*/
/*         <dt>*/
/*             <a href="{{ path('materiel_new') }}" class="btn">*/
/*                 Nouveau materiel*/
/*             </a>*/
/*           */
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
/*                      <a href="{{ path('materiel_edit', { 'id': materiel.id }) }}"><i class="icon-edit"></i></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
