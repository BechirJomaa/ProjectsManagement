<?php

/* user/addFinancierToProjet.html.twig */
class __TwigTemplate_82b86207291d819c7e90f4dd6962e8762b1c24a74925993676ad16dd40c23bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "user/addFinancierToProjet.html.twig", 1);
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
        $__internal_009928abfabb47599df6badc52e4584661d0782b8e0a3cd34fb8c12d52bc9226 = $this->env->getExtension("native_profiler");
        $__internal_009928abfabb47599df6badc52e4584661d0782b8e0a3cd34fb8c12d52bc9226->enter($__internal_009928abfabb47599df6badc52e4584661d0782b8e0a3cd34fb8c12d52bc9226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/addFinancierToProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009928abfabb47599df6badc52e4584661d0782b8e0a3cd34fb8c12d52bc9226->leave($__internal_009928abfabb47599df6badc52e4584661d0782b8e0a3cd34fb8c12d52bc9226_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11031171253396accd64de1ed089ee61cfc54103c8b9973327714d79b6a77f39 = $this->env->getExtension("native_profiler");
        $__internal_11031171253396accd64de1ed089ee61cfc54103c8b9973327714d79b6a77f39->enter($__internal_11031171253396accd64de1ed089ee61cfc54103c8b9973327714d79b6a77f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des Agents</h1>
 
      
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                 <th>Role</th>
                 <th>Financier</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "             
            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                ";
            // line 23
            if (($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                // line 24
                echo "                             <td>Administrateur</td>
                  ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 25
$context["user"], "roles", array()), 0, array(), "array") == "ROLE_CHEF")) {
                // line 26
                echo "                              <td>Chef de projet</td>
                   ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 27
$context["user"], "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
                // line 28
                echo "                              <td>Responsable de projet</td>
                   ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 29
$context["user"], "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
                // line 30
                echo "                              <td>Comercial</td>
                   ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 31
$context["user"], "roles", array()), 0, array(), "array") == "FINANCIER")) {
                // line 32
                echo "                              <td>Financier</td>
                              
                    ";
            } else {
                // line 35
                echo "                             <td> pas de role</td>
                        ";
            }
            // line 37
            echo "                       
                
                     <td>
                     ";
            // line 40
            if ( !twig_test_empty($this->getAttribute($context["user"], "projects", array()))) {
                // line 41
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 42
                    echo "                        ";
                    if ((($this->getAttribute($context["p"], "id", array()) == $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array())) && ($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "FINANCIER"))) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("financier_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\">
                                <i class=\"icon-check\"></i></a> 
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 44
$context["user"], "roles", array()), 0, array(), "array") == "FINANCIER")) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("financier_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                            ";
                    }
                    // line 47
                    echo "                        
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                      ";
            } elseif (($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "FINANCIER")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("financier_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                     ";
            }
            // line 51
            echo "  
                    </td>
              
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

    
";
        
        $__internal_11031171253396accd64de1ed089ee61cfc54103c8b9973327714d79b6a77f39->leave($__internal_11031171253396accd64de1ed089ee61cfc54103c8b9973327714d79b6a77f39_prof);

    }

    public function getTemplateName()
    {
        return "user/addFinancierToProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  147 => 51,  138 => 49,  131 => 47,  123 => 44,  115 => 42,  110 => 41,  108 => 40,  103 => 37,  99 => 35,  94 => 32,  92 => 31,  89 => 30,  87 => 29,  84 => 28,  82 => 27,  79 => 26,  77 => 25,  74 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des Agents</h1>*/
/*  */
/*       */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <th>Email</th>*/
/*                  <th>Role</th>*/
/*                  <th>Financier</th>*/
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*              */
/*             <tr>*/
/*                 <td>{{ user.username }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 {% if  user.roles[0] == "ROLE_ADMIN" %}*/
/*                              <td>Administrateur</td>*/
/*                   {% elseif user.roles[0] == "ROLE_CHEF" %}*/
/*                               <td>Chef de projet</td>*/
/*                    {% elseif user.roles[0] == "ROLE_RESPONSABLE" %}*/
/*                               <td>Responsable de projet</td>*/
/*                    {% elseif user.roles[0] == "COMMERCIAL" %}*/
/*                               <td>Comercial</td>*/
/*                    {% elseif user.roles[0] == "FINANCIER" %}*/
/*                               <td>Financier</td>*/
/*                               */
/*                     {% else %}*/
/*                              <td> pas de role</td>*/
/*                         {% endif %}*/
/*                        */
/*                 */
/*                      <td>*/
/*                      {% if  user.projects is not empty %}*/
/*                      {% for p in user.projects %}*/
/*                         {% if p.id==projet.id and user.roles[0]== "FINANCIER"%}<a href="{{ path('financier_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check"></i></a> */
/*                         {% elseif  user.roles[0]== "FINANCIER" %}<a href="{{ path('financier_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check-empty"></i> </a>*/
/*                             {% endif %}*/
/*                         */
/*                      {% endfor %}*/
/*                       {% elseif  user.roles[0]== "FINANCIER" %} <a href="{{ path('financier_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check-empty"></i> </a>*/
/*                      {% endif %}  */
/*                     </td>*/
/*               */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
