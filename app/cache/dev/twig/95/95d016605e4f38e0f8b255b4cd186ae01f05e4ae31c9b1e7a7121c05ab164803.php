<?php

/* materiel/addMaterielToTache.html.twig */
class __TwigTemplate_a466917d32088430b2aabded20b27ff6a9fdde686997c72c3974e2aab11ab99c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "materiel/addMaterielToTache.html.twig", 1);
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
        $__internal_d5b453e90393ebd7126a7c3a3afbc59f86496593f38805052b9fc71776a14e01 = $this->env->getExtension("native_profiler");
        $__internal_d5b453e90393ebd7126a7c3a3afbc59f86496593f38805052b9fc71776a14e01->enter($__internal_d5b453e90393ebd7126a7c3a3afbc59f86496593f38805052b9fc71776a14e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/addMaterielToTache.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b453e90393ebd7126a7c3a3afbc59f86496593f38805052b9fc71776a14e01->leave($__internal_d5b453e90393ebd7126a7c3a3afbc59f86496593f38805052b9fc71776a14e01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aabd39b940aa587d0728e34bd94103a98840ec9ad0355cf66ea81af511f2c44a = $this->env->getExtension("native_profiler");
        $__internal_aabd39b940aa587d0728e34bd94103a98840ec9ad0355cf66ea81af511f2c44a->enter($__internal_aabd39b940aa587d0728e34bd94103a98840ec9ad0355cf66ea81af511f2c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des materiels</h1>
 
 
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
              
                <th>Nom</th>
                <th>Type</th>
                <th>Etat</th>
                <th>Nbrmatreserve</th>
                <th>Affecter</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "etat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "nbrMatReserve", array()), "html", null, true);
            echo "</td>
                <td>
                        ";
            // line 27
            if ((($this->getAttribute($context["materiel"], "tache", array()) != null) && ($this->getAttribute($this->getAttribute($context["materiel"], "tache", array()), "id", array()) == $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array())))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_affecter_by_tache", array("idMateriel" => $this->getAttribute($context["materiel"], "id", array()), "idTache" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"icon-check\"></i></a> 
                        ";
            } else {
                // line 29
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_affecter_by_tache", array("idMateriel" => $this->getAttribute($context["materiel"], "id", array()), "idTache" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                            ";
            }
            // line 32
            echo "                    </td>
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
        
        $__internal_aabd39b940aa587d0728e34bd94103a98840ec9ad0355cf66ea81af511f2c44a->leave($__internal_aabd39b940aa587d0728e34bd94103a98840ec9ad0355cf66ea81af511f2c44a_prof);

    }

    public function getTemplateName()
    {
        return "materiel/addMaterielToTache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  105 => 35,  101 => 34,  97 => 32,  90 => 29,  82 => 27,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des materiels</h1>*/
/*  */
/*  */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*               */
/*                 <th>Nom</th>*/
/*                 <th>Type</th>*/
/*                 <th>Etat</th>*/
/*                 <th>Nbrmatreserve</th>*/
/*                 <th>Affecter</th>*/
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
/*                         {% if materiel.tache!=null and materiel.tache.id==tache.id%}<a href="{{ path('materiel_affecter_by_tache', { 'idMateriel': materiel.id, 'idTache': tache.id }) }}">*/
/*                                 <i class="icon-check"></i></a> */
/*                         {% else %}<a href="{{ path('materiel_affecter_by_tache', { 'idMateriel': materiel.id, 'idTache': tache.id }) }}">*/
/*                                 <i class="icon-check-empty"></i> </a>*/
/*                             {% endif %}*/
/*                     </td>*/
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
