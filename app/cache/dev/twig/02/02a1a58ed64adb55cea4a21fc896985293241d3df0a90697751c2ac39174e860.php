<?php

/* user/index.html.twig */
class __TwigTemplate_7ef0f17a59ff1151bb38f699272bb9b93312f8b0ee254ed5338b163911f0201c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "user/index.html.twig", 1);
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
        $__internal_71cf665d4737d2d2e4ed5a70aacf8e4a347e931d5949db839a77e0c659f8be58 = $this->env->getExtension("native_profiler");
        $__internal_71cf665d4737d2d2e4ed5a70aacf8e4a347e931d5949db839a77e0c659f8be58->enter($__internal_71cf665d4737d2d2e4ed5a70aacf8e4a347e931d5949db839a77e0c659f8be58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71cf665d4737d2d2e4ed5a70aacf8e4a347e931d5949db839a77e0c659f8be58->leave($__internal_71cf665d4737d2d2e4ed5a70aacf8e4a347e931d5949db839a77e0c659f8be58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_babd86070e7d6b66f31222b34f689f3242caafe723482dba8364b7c9c659bb7e = $this->env->getExtension("native_profiler");
        $__internal_babd86070e7d6b66f31222b34f689f3242caafe723482dba8364b7c9c659bb7e->enter($__internal_babd86070e7d6b66f31222b34f689f3242caafe723482dba8364b7c9c659bb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des Agents</h1>
 
        <dl>
        <dt>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"btn\">
                Nouvel Ajent
            </a>
          
        </dt>
       
    </dl>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                 <th>Role</th>
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "             ";
            $context["loopIndex"] = $this->getAttribute($context["loop"], "index", array());
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                ";
            // line 30
            if (($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                // line 31
                echo "                             <td>Administrateur</td>
                  ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 32
$context["user"], "roles", array()), 0, array(), "array") == "ROLE_CHEF")) {
                // line 33
                echo "                              <td>Chef de projet</td>
                   ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 34
$context["user"], "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
                // line 35
                echo "                              <td>Responsable de projet</td>
                   ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 36
$context["user"], "roles", array()), 0, array(), "array") == "COMMERCIAL")) {
                // line 37
                echo "                              <td>Comercial</td>
                   ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 38
$context["user"], "roles", array()), 0, array(), "array") == "FINANCIER")) {
                // line 39
                echo "                              <td>Financier</td>
                              
                    ";
            } else {
                // line 42
                echo "                             <td> pas de role</td>
                        ";
            }
            // line 44
            echo "
                
                
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    
";
        
        $__internal_babd86070e7d6b66f31222b34f689f3242caafe723482dba8364b7c9c659bb7e->leave($__internal_babd86070e7d6b66f31222b34f689f3242caafe723482dba8364b7c9c659bb7e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  128 => 44,  124 => 42,  119 => 39,  117 => 38,  114 => 37,  112 => 36,  109 => 35,  107 => 34,  104 => 33,  102 => 32,  99 => 31,  97 => 30,  93 => 29,  89 => 28,  86 => 27,  83 => 26,  66 => 25,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des Agents</h1>*/
/*  */
/*         <dl>*/
/*         <dt>*/
/*             <a href="{{ path('user_new') }}" class="btn">*/
/*                 Nouvel Ajent*/
/*             </a>*/
/*           */
/*         </dt>*/
/*        */
/*     </dl>*/
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <th>Email</th>*/
/*                  <th>Role</th>*/
/*                */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*              {% set loopIndex = loop.index %}*/
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
/* */
/*                 */
/*                 */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
