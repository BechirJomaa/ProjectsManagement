<?php

/* materiel/index.html.twig */
class __TwigTemplate_7512c8b56c39a07d6220f2adcd50436e337478d809958704234fced3a2a7cc3d extends Twig_Template
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
        $__internal_f2cb9544d97dd7a375ef2b65e9499c8f6bb14b25afc8dca51dd74ebebafead40 = $this->env->getExtension("native_profiler");
        $__internal_f2cb9544d97dd7a375ef2b65e9499c8f6bb14b25afc8dca51dd74ebebafead40->enter($__internal_f2cb9544d97dd7a375ef2b65e9499c8f6bb14b25afc8dca51dd74ebebafead40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2cb9544d97dd7a375ef2b65e9499c8f6bb14b25afc8dca51dd74ebebafead40->leave($__internal_f2cb9544d97dd7a375ef2b65e9499c8f6bb14b25afc8dca51dd74ebebafead40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_827b322ad1b71c5b032206d2192ad4f01b4c441121b66d38f7492d49c6473335 = $this->env->getExtension("native_profiler");
        $__internal_827b322ad1b71c5b032206d2192ad4f01b4c441121b66d38f7492d49c6473335->enter($__internal_827b322ad1b71c5b032206d2192ad4f01b4c441121b66d38f7492d49c6473335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_827b322ad1b71c5b032206d2192ad4f01b4c441121b66d38f7492d49c6473335->leave($__internal_827b322ad1b71c5b032206d2192ad4f01b4c441121b66d38f7492d49c6473335_prof);

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
