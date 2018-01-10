<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_2eaedc7305d46f785d61344d0d69809a4c064e993c8313824137f29500577a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2edfbe78b83faf3c1569319548c375d364bdec82a76f0c2c0e29b042bc728ab = $this->env->getExtension("native_profiler");
        $__internal_e2edfbe78b83faf3c1569319548c375d364bdec82a76f0c2c0e29b042bc728ab->enter($__internal_e2edfbe78b83faf3c1569319548c375d364bdec82a76f0c2c0e29b042bc728ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigationAdmin.html.twig"));

        // line 1
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("projet_index");
        echo "\">Projets</a>
            </li>
          
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("materiel_index");
        echo "\">Materiels</a>
            </li>
          
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Agents</a>
            </li>
        </ul>
    </div>   
              <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Clients</a>
            </li>
            
        </ul>
    </div>
</div>";
        
        $__internal_e2edfbe78b83faf3c1569319548c375d364bdec82a76f0c2c0e29b042bc728ab->leave($__internal_e2edfbe78b83faf3c1569319548c375d364bdec82a76f0c2c0e29b042bc728ab_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  53 => 24,  41 => 15,  29 => 6,  22 => 1,);
    }
}
/* <div class="span3">*/
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('projet_index') }}">Projets</a>*/
/*             </li>*/
/*           */
/*         </ul>*/
/*     </div>*/
/*     */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('materiel_index') }}">Materiels</a>*/
/*             </li>*/
/*           */
/*         </ul>*/
/*     </div>*/
/*     */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('user_index') }}">Agents</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>   */
/*               <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('client_index') }}">Clients</a>*/
/*             </li>*/
/*             */
/*         </ul>*/
/*     </div>*/
/* </div>*/
