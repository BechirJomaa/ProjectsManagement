<?php

/* user/show.html.twig */
class __TwigTemplate_6f14f8f8fe6a7b880aa146a1ae8e5ea99a4dacdd1c029616c61af2fffcce1092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e6f6f29187403b0dc60340c8af87b47d155257fb6fe3da2ea076e7bdc3cb4d = $this->env->getExtension("native_profiler");
        $__internal_a1e6f6f29187403b0dc60340c8af87b47d155257fb6fe3da2ea076e7bdc3cb4d->enter($__internal_a1e6f6f29187403b0dc60340c8af87b47d155257fb6fe3da2ea076e7bdc3cb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e6f6f29187403b0dc60340c8af87b47d155257fb6fe3da2ea076e7bdc3cb4d->leave($__internal_a1e6f6f29187403b0dc60340c8af87b47d155257fb6fe3da2ea076e7bdc3cb4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90031fe016a5eda7a4da353b84b223eef15e87fb0a5a2823384789cd439d9b2e = $this->env->getExtension("native_profiler");
        $__internal_90031fe016a5eda7a4da353b84b223eef15e87fb0a5a2823384789cd439d9b2e->enter($__internal_90031fe016a5eda7a4da353b84b223eef15e87fb0a5a2823384789cd439d9b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_90031fe016a5eda7a4da353b84b223eef15e87fb0a5a2823384789cd439d9b2e->leave($__internal_90031fe016a5eda7a4da353b84b223eef15e87fb0a5a2823384789cd439d9b2e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
