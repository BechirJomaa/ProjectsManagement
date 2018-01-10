<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fdf88b714f38394afb131e7a92e0764c9ed9385a5c279b5486f36e933f3e1387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7987e3037b14a4a6231d75a702feaf753b3ab6e9905f716cefb2f6abe752f596 = $this->env->getExtension("native_profiler");
        $__internal_7987e3037b14a4a6231d75a702feaf753b3ab6e9905f716cefb2f6abe752f596->enter($__internal_7987e3037b14a4a6231d75a702feaf753b3ab6e9905f716cefb2f6abe752f596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7987e3037b14a4a6231d75a702feaf753b3ab6e9905f716cefb2f6abe752f596->leave($__internal_7987e3037b14a4a6231d75a702feaf753b3ab6e9905f716cefb2f6abe752f596_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f70f9007e1d8346e600a912a5140f3bbfbc89ae3476ca3a3f54e1d81b233cebb = $this->env->getExtension("native_profiler");
        $__internal_f70f9007e1d8346e600a912a5140f3bbfbc89ae3476ca3a3f54e1d81b233cebb->enter($__internal_f70f9007e1d8346e600a912a5140f3bbfbc89ae3476ca3a3f54e1d81b233cebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f70f9007e1d8346e600a912a5140f3bbfbc89ae3476ca3a3f54e1d81b233cebb->leave($__internal_f70f9007e1d8346e600a912a5140f3bbfbc89ae3476ca3a3f54e1d81b233cebb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
