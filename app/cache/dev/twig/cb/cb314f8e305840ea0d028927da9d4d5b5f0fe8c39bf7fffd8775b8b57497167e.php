<?php

/* user/addClientToProjet.html.twig */
class __TwigTemplate_71bb84d8ecac3905997ec88ea84e270d135adc258f735ec0bf00956fc5be8d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "user/addClientToProjet.html.twig", 1);
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
        $__internal_ff3c191d8ca70537d00887b9aff56c78c681d52c974a88eed1b1212df3de8714 = $this->env->getExtension("native_profiler");
        $__internal_ff3c191d8ca70537d00887b9aff56c78c681d52c974a88eed1b1212df3de8714->enter($__internal_ff3c191d8ca70537d00887b9aff56c78c681d52c974a88eed1b1212df3de8714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/addClientToProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3c191d8ca70537d00887b9aff56c78c681d52c974a88eed1b1212df3de8714->leave($__internal_ff3c191d8ca70537d00887b9aff56c78c681d52c974a88eed1b1212df3de8714_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51876b95604bcd6fcd31cea7210a2e86f297cdae2179eb7ef136e3c3dba0f884 = $this->env->getExtension("native_profiler");
        $__internal_51876b95604bcd6fcd31cea7210a2e86f297cdae2179eb7ef136e3c3dba0f884->enter($__internal_51876b95604bcd6fcd31cea7210a2e86f297cdae2179eb7ef136e3c3dba0f884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des Agents</h1>
 
      
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                 <th>Role</th>
                 <th>Affecter</th>
                
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
            // line 39
            if ( !twig_test_empty($this->getAttribute($context["user"], "projects", array()))) {
                // line 40
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 41
                    echo "                        ";
                    if ((($this->getAttribute($context["p"], "id", array()) == $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array())) && ($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE"))) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\">
                                <i class=\"icon-check\"></i></a> 
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 43
$context["user"], "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                            ";
                    }
                    // line 46
                    echo "                        
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                      ";
            } elseif (($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                     ";
            }
            // line 50
            echo "  
                    </td>
                     <td>
                     ";
            // line 53
            if ( !twig_test_empty($this->getAttribute($context["user"], "projects", array()))) {
                // line 54
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 55
                    echo "                        ";
                    if ((($this->getAttribute($context["p"], "id", array()) == $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array())) && ($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "ROLE_CHEF"))) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\">
                                <i class=\"icon-check\"></i></a> 
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 57
$context["user"], "roles", array()), 0, array(), "array") == "ROLE_CHEF")) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                            ";
                    }
                    // line 60
                    echo "                        
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                      ";
            } elseif (($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "ROLE_CHEF")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_affecter_by_projet", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "idClient" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                     ";
            }
            // line 64
            echo "  
                    </td>
              
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>

    
";
        
        $__internal_51876b95604bcd6fcd31cea7210a2e86f297cdae2179eb7ef136e3c3dba0f884->leave($__internal_51876b95604bcd6fcd31cea7210a2e86f297cdae2179eb7ef136e3c3dba0f884_prof);

    }

    public function getTemplateName()
    {
        return "user/addClientToProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 69,  190 => 64,  181 => 62,  174 => 60,  166 => 57,  158 => 55,  153 => 54,  151 => 53,  146 => 50,  137 => 48,  130 => 46,  122 => 43,  114 => 41,  109 => 40,  107 => 39,  103 => 37,  99 => 35,  94 => 32,  92 => 31,  89 => 30,  87 => 29,  84 => 28,  82 => 27,  79 => 26,  77 => 25,  74 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
/*                  <th>Affecter</th>*/
/*                 */
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
/*                  <td>*/
/*                     {% if  user.projects is not empty %}*/
/*                      {% for p in user.projects %}*/
/*                         {% if p.id==projet.id and user.roles[0]== "ROLE_RESPONSABLE"%}<a href="{{ path('client_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check"></i></a> */
/*                         {% elseif  user.roles[0]== "ROLE_RESPONSABLE" %}<a href="{{ path('client_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check-empty"></i> </a>*/
/*                             {% endif %}*/
/*                         */
/*                      {% endfor %}*/
/*                       {% elseif  user.roles[0]== "ROLE_RESPONSABLE" %} <a href="{{ path('client_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check-empty"></i> </a>*/
/*                      {% endif %}  */
/*                     </td>*/
/*                      <td>*/
/*                      {% if  user.projects is not empty %}*/
/*                      {% for p in user.projects %}*/
/*                         {% if p.id==projet.id and user.roles[0]== "ROLE_CHEF"%}<a href="{{ path('client_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check"></i></a> */
/*                         {% elseif  user.roles[0]== "ROLE_CHEF" %}<a href="{{ path('client_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
/*                                 <i class="icon-check-empty"></i> </a>*/
/*                             {% endif %}*/
/*                         */
/*                      {% endfor %}*/
/*                       {% elseif  user.roles[0]== "ROLE_CHEF" %} <a href="{{ path('client_affecter_by_projet', { 'idProjet': projet.id, 'idClient': user.id }) }}">*/
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
