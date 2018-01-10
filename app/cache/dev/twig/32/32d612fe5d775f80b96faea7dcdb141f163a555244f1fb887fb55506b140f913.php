<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1412cb6398ee2395a73aa40f9d283774f86c5d037bfa26ef9030468d3a87f30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16bcad5e220ecb64c7d9e2713a1c4a309318c931f9100e31d2766def0c071cd0 = $this->env->getExtension("native_profiler");
        $__internal_16bcad5e220ecb64c7d9e2713a1c4a309318c931f9100e31d2766def0c071cd0->enter($__internal_16bcad5e220ecb64c7d9e2713a1c4a309318c931f9100e31d2766def0c071cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16bcad5e220ecb64c7d9e2713a1c4a309318c931f9100e31d2766def0c071cd0->leave($__internal_16bcad5e220ecb64c7d9e2713a1c4a309318c931f9100e31d2766def0c071cd0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4829bb1a0a5857e7c71f62b179bccbbd8655fbfaed3684e574b3bc5b466fc08 = $this->env->getExtension("native_profiler");
        $__internal_d4829bb1a0a5857e7c71f62b179bccbbd8655fbfaed3684e574b3bc5b466fc08->enter($__internal_d4829bb1a0a5857e7c71f62b179bccbbd8655fbfaed3684e574b3bc5b466fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_d4829bb1a0a5857e7c71f62b179bccbbd8655fbfaed3684e574b3bc5b466fc08->leave($__internal_d4829bb1a0a5857e7c71f62b179bccbbd8655fbfaed3684e574b3bc5b466fc08_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dd87e3ed5d7d758f834faeeb2cb524061fae6b9b54e2d5d0603d60556369fc7 = $this->env->getExtension("native_profiler");
        $__internal_9dd87e3ed5d7d758f834faeeb2cb524061fae6b9b54e2d5d0603d60556369fc7->enter($__internal_9dd87e3ed5d7d758f834faeeb2cb524061fae6b9b54e2d5d0603d60556369fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_9dd87e3ed5d7d758f834faeeb2cb524061fae6b9b54e2d5d0603d60556369fc7->leave($__internal_9dd87e3ed5d7d758f834faeeb2cb524061fae6b9b54e2d5d0603d60556369fc7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}        */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="alert alert-{{ type }}">*/
/*                 <strong>{{ message }}</strong>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* {% endblock %}*/
