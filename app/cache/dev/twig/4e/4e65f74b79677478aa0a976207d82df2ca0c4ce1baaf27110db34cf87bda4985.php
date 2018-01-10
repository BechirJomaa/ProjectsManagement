<?php

/* materiel/show.html.twig */
class __TwigTemplate_38a5be21b23e09f5b7269d507dd0bf08ce2705b644a8182c444db40eca4c98fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "materiel/show.html.twig", 1);
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
        $__internal_979e39ebaa729036c9141d3b38ff547b9fb4ceb310cd4e32b1454f2844e64ef2 = $this->env->getExtension("native_profiler");
        $__internal_979e39ebaa729036c9141d3b38ff547b9fb4ceb310cd4e32b1454f2844e64ef2->enter($__internal_979e39ebaa729036c9141d3b38ff547b9fb4ceb310cd4e32b1454f2844e64ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_979e39ebaa729036c9141d3b38ff547b9fb4ceb310cd4e32b1454f2844e64ef2->leave($__internal_979e39ebaa729036c9141d3b38ff547b9fb4ceb310cd4e32b1454f2844e64ef2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c4c3e0f07453d73fb1eb8e0e812d1cbc07498b6e6ac2a7eb68ed60199835526 = $this->env->getExtension("native_profiler");
        $__internal_4c4c3e0f07453d73fb1eb8e0e812d1cbc07498b6e6ac2a7eb68ed60199835526->enter($__internal_4c4c3e0f07453d73fb1eb8e0e812d1cbc07498b6e6ac2a7eb68ed60199835526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Materiel</h1>
    <dl>
        <dt>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("materiel_index");
        echo "\" class=\"btn\">
                            Retour à la liste
              </a>
               ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 11
            echo "               <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiel_edit", array("id" => $this->getAttribute((isset($context["materiel"]) ? $context["materiel"] : $this->getContext($context, "materiel")), "id", array()))), "html", null, true);
            echo "\" class=\"btn\">
                        Modifier
               </a>
                        ";
        }
        // line 15
        echo "        </dt>
    </dl>

    <table class=\"table table-striped table-hover\" border=\"1\">
        <tbody>
           
            <tr>
                <th>Nom</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiel"]) ? $context["materiel"] : $this->getContext($context, "materiel")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiel"]) ? $context["materiel"] : $this->getContext($context, "materiel")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiel"]) ? $context["materiel"] : $this->getContext($context, "materiel")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrmatreserve</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiel"]) ? $context["materiel"] : $this->getContext($context, "materiel")), "nbrMatReserve", array()), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    
";
        
        $__internal_4c4c3e0f07453d73fb1eb8e0e812d1cbc07498b6e6ac2a7eb68ed60199835526->leave($__internal_4c4c3e0f07453d73fb1eb8e0e812d1cbc07498b6e6ac2a7eb68ed60199835526_prof);

    }

    public function getTemplateName()
    {
        return "materiel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  85 => 31,  78 => 27,  71 => 23,  61 => 15,  53 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Materiel</h1>*/
/*     <dl>*/
/*         <dt>*/
/*             <a href="{{ path('materiel_index') }}" class="btn">*/
/*                             Retour à la liste*/
/*               </a>*/
/*                {% if  us.roles[0] == "ROLE_ADMIN" %}*/
/*                <a href="{{ path('materiel_edit', { 'id': materiel.id }) }}" class="btn">*/
/*                         Modifier*/
/*                </a>*/
/*                         {% endif %}*/
/*         </dt>*/
/*     </dl>*/
/* */
/*     <table class="table table-striped table-hover" border="1">*/
/*         <tbody>*/
/*            */
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ materiel.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ materiel.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Etat</th>*/
/*                 <td>{{ materiel.etat }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nbrmatreserve</th>*/
/*                 <td>{{ materiel.nbrMatReserve }}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
