<?php

/* base.html.twig */
class __TwigTemplate_2ff76dcb4c51c131f4261f1e61097237796dba7bdfd84bf2b80e0cee9bb8b674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95fead7d3768a3358f64f333f6d2f0d581ff23a6e6e2c018f2f4076550485070 = $this->env->getExtension("native_profiler");
        $__internal_95fead7d3768a3358f64f333f6d2f0d581ff23a6e6e2c018f2f4076550485070->enter($__internal_95fead7d3768a3358f64f333f6d2f0d581ff23a6e6e2c018f2f4076550485070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_95fead7d3768a3358f64f333f6d2f0d581ff23a6e6e2c018f2f4076550485070->leave($__internal_95fead7d3768a3358f64f333f6d2f0d581ff23a6e6e2c018f2f4076550485070_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fca3ea995da5de69a37f81ffc6c71fa4c12598fc2f05da19d9f20f389d8319d = $this->env->getExtension("native_profiler");
        $__internal_3fca3ea995da5de69a37f81ffc6c71fa4c12598fc2f05da19d9f20f389d8319d->enter($__internal_3fca3ea995da5de69a37f81ffc6c71fa4c12598fc2f05da19d9f20f389d8319d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3fca3ea995da5de69a37f81ffc6c71fa4c12598fc2f05da19d9f20f389d8319d->leave($__internal_3fca3ea995da5de69a37f81ffc6c71fa4c12598fc2f05da19d9f20f389d8319d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a58fe8526481934678ba486de54f4ce842875b6dd2e440b06e87b8c6aa04288 = $this->env->getExtension("native_profiler");
        $__internal_8a58fe8526481934678ba486de54f4ce842875b6dd2e440b06e87b8c6aa04288->enter($__internal_8a58fe8526481934678ba486de54f4ce842875b6dd2e440b06e87b8c6aa04288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8a58fe8526481934678ba486de54f4ce842875b6dd2e440b06e87b8c6aa04288->leave($__internal_8a58fe8526481934678ba486de54f4ce842875b6dd2e440b06e87b8c6aa04288_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5458bae9195e4fb7af33bff7222dc92c72d1425492d6a3b7cfb690835081f8d4 = $this->env->getExtension("native_profiler");
        $__internal_5458bae9195e4fb7af33bff7222dc92c72d1425492d6a3b7cfb690835081f8d4->enter($__internal_5458bae9195e4fb7af33bff7222dc92c72d1425492d6a3b7cfb690835081f8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5458bae9195e4fb7af33bff7222dc92c72d1425492d6a3b7cfb690835081f8d4->leave($__internal_5458bae9195e4fb7af33bff7222dc92c72d1425492d6a3b7cfb690835081f8d4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0aa8aaa4030520cc126bbc0ac12cb7557fdc33ce299dd5aebd3b59f30ec38f68 = $this->env->getExtension("native_profiler");
        $__internal_0aa8aaa4030520cc126bbc0ac12cb7557fdc33ce299dd5aebd3b59f30ec38f68->enter($__internal_0aa8aaa4030520cc126bbc0ac12cb7557fdc33ce299dd5aebd3b59f30ec38f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0aa8aaa4030520cc126bbc0ac12cb7557fdc33ce299dd5aebd3b59f30ec38f68->leave($__internal_0aa8aaa4030520cc126bbc0ac12cb7557fdc33ce299dd5aebd3b59f30ec38f68_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
