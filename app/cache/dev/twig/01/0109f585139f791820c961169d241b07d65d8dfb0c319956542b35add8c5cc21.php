<?php

/* materiel/show.html.twig */
class __TwigTemplate_c9738d411025b70e0c1ffb11394ccf2fcc83d7c998440735b897f27cd4d92308 extends Twig_Template
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
        $__internal_15b309dee1c031b99f7084bb438ff3b81fd08551474c73cd76684b9d3b1a6c0b = $this->env->getExtension("native_profiler");
        $__internal_15b309dee1c031b99f7084bb438ff3b81fd08551474c73cd76684b9d3b1a6c0b->enter($__internal_15b309dee1c031b99f7084bb438ff3b81fd08551474c73cd76684b9d3b1a6c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materiel/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b309dee1c031b99f7084bb438ff3b81fd08551474c73cd76684b9d3b1a6c0b->leave($__internal_15b309dee1c031b99f7084bb438ff3b81fd08551474c73cd76684b9d3b1a6c0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0e55f606a493ea4e7bfb526f8c1e39abde762c4ebbc59c35713966c53235629 = $this->env->getExtension("native_profiler");
        $__internal_a0e55f606a493ea4e7bfb526f8c1e39abde762c4ebbc59c35713966c53235629->enter($__internal_a0e55f606a493ea4e7bfb526f8c1e39abde762c4ebbc59c35713966c53235629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a0e55f606a493ea4e7bfb526f8c1e39abde762c4ebbc59c35713966c53235629->leave($__internal_a0e55f606a493ea4e7bfb526f8c1e39abde762c4ebbc59c35713966c53235629_prof);

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
