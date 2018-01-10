<?php

/* layoutAdmin.html.twig */
class __TwigTemplate_88afb4513650da6b9af21c1c7c5e7c7b013bfdf09ba4fb3b9efe493f992e86ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee264b82d2e024f0073cebbc92d09cc856a6125870d497bc6845abc27ffddd3c = $this->env->getExtension("native_profiler");
        $__internal_ee264b82d2e024f0073cebbc92d09cc856a6125870d497bc6845abc27ffddd3c->enter($__internal_ee264b82d2e024f0073cebbc92d09cc856a6125870d497bc6845abc27ffddd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\" style=\"background-image: linear-gradient(to bottom, #0039ff, #111111);\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                     
                    <a class=\"brand\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("projet_index");
        echo "\">Sotetel</a>
                    ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
                      <a class=\"brand\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" style=\"float: right;\">Se déconnecter</a>
                    ";
        } else {
            // line 29
            echo "                     <a class=\"brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" style=\"float: right;\"><span class=\"glyphicon glyphicon-user\"> </span>Se connecter</a>
                       ";
        }
        // line 30
        echo "          
                </div>
            </div>
        </div>
            
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 37
        $this->loadTemplate("::modulesUsed/navigationAdmin.html.twig", "layoutAdmin.html.twig", 37)->display($context);
        // line 38
        echo "                <div class=\"span9\">
                    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "                </div>
            </div>
        </div>

        <hr />
\t<footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright 2017 - Sotetel</p>
                </div>
            </div>
\t</footer>\t
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </body>
</html>";
        
        $__internal_ee264b82d2e024f0073cebbc92d09cc856a6125870d497bc6845abc27ffddd3c->leave($__internal_ee264b82d2e024f0073cebbc92d09cc856a6125870d497bc6845abc27ffddd3c_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c16e503cbf282f20e39f8c12449d1e4c96ab42e888323091ef31041169dab517 = $this->env->getExtension("native_profiler");
        $__internal_c16e503cbf282f20e39f8c12449d1e4c96ab42e888323091ef31041169dab517->enter($__internal_c16e503cbf282f20e39f8c12449d1e4c96ab42e888323091ef31041169dab517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Setotel";
        
        $__internal_c16e503cbf282f20e39f8c12449d1e4c96ab42e888323091ef31041169dab517->leave($__internal_c16e503cbf282f20e39f8c12449d1e4c96ab42e888323091ef31041169dab517_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_83da56e92040509a781f878b278525f6b89d7d61fd498ca867ff01046a667b4c = $this->env->getExtension("native_profiler");
        $__internal_83da56e92040509a781f878b278525f6b89d7d61fd498ca867ff01046a667b4c->enter($__internal_83da56e92040509a781f878b278525f6b89d7d61fd498ca867ff01046a667b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_83da56e92040509a781f878b278525f6b89d7d61fd498ca867ff01046a667b4c->leave($__internal_83da56e92040509a781f878b278525f6b89d7d61fd498ca867ff01046a667b4c_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_9fe18193ba74d2ba0aca915f3ec3b0cc0633872b70f12e73a93ef6b9923b6be3 = $this->env->getExtension("native_profiler");
        $__internal_9fe18193ba74d2ba0aca915f3ec3b0cc0633872b70f12e73a93ef6b9923b6be3->enter($__internal_9fe18193ba74d2ba0aca915f3ec3b0cc0633872b70f12e73a93ef6b9923b6be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_9fe18193ba74d2ba0aca915f3ec3b0cc0633872b70f12e73a93ef6b9923b6be3->leave($__internal_9fe18193ba74d2ba0aca915f3ec3b0cc0633872b70f12e73a93ef6b9923b6be3_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2851b252ae6999c5683452d2bbaebf4ae7ce5ad4b79c6d81d79f8dfd0432fcd0 = $this->env->getExtension("native_profiler");
        $__internal_2851b252ae6999c5683452d2bbaebf4ae7ce5ad4b79c6d81d79f8dfd0432fcd0->enter($__internal_2851b252ae6999c5683452d2bbaebf4ae7ce5ad4b79c6d81d79f8dfd0432fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2851b252ae6999c5683452d2bbaebf4ae7ce5ad4b79c6d81d79f8dfd0432fcd0->leave($__internal_2851b252ae6999c5683452d2bbaebf4ae7ce5ad4b79c6d81d79f8dfd0432fcd0_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc5b77879ff761fd12aac88b56d4e41b1d2be2db955e22624cc494aab7ed1d02 = $this->env->getExtension("native_profiler");
        $__internal_cc5b77879ff761fd12aac88b56d4e41b1d2be2db955e22624cc494aab7ed1d02->enter($__internal_cc5b77879ff761fd12aac88b56d4e41b1d2be2db955e22624cc494aab7ed1d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc5b77879ff761fd12aac88b56d4e41b1d2be2db955e22624cc494aab7ed1d02->leave($__internal_cc5b77879ff761fd12aac88b56d4e41b1d2be2db955e22624cc494aab7ed1d02_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af076fdaf37ce72fe312a73188c3e14491f576411eea6ced0faa4f31383ea834 = $this->env->getExtension("native_profiler");
        $__internal_af076fdaf37ce72fe312a73188c3e14491f576411eea6ced0faa4f31383ea834->enter($__internal_af076fdaf37ce72fe312a73188c3e14491f576411eea6ced0faa4f31383ea834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af076fdaf37ce72fe312a73188c3e14491f576411eea6ced0faa4f31383ea834->leave($__internal_af076fdaf37ce72fe312a73188c3e14491f576411eea6ced0faa4f31383ea834_prof);

    }

    public function getTemplateName()
    {
        return "layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 56,  197 => 39,  186 => 12,  175 => 7,  164 => 6,  152 => 5,  144 => 57,  142 => 56,  138 => 55,  134 => 54,  130 => 53,  115 => 40,  113 => 39,  110 => 38,  108 => 37,  99 => 30,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}Setotel{% endblock %}</title>*/
/*         <meta name="keywords" content="{% block motsCles %}{% endblock %}" />*/
/*         <meta name="description" content="{% block description %}{% endblock %}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner" style="background-image: linear-gradient(to bottom, #0039ff, #111111);">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                      */
/*                     <a class="brand" href="{{ path('projet_index') }}">Sotetel</a>*/
/*                     {% if is_granted('IS_AUTHENTICATED_FULLY')%} */
/*                       <a class="brand" href="{{ path('fos_user_security_logout') }}" style="float: right;">Se déconnecter</a>*/
/*                     {% else%}*/
/*                      <a class="brand" href="{{ path('fos_user_security_login')}}" style="float: right;"><span class="glyphicon glyphicon-user"> </span>Se connecter</a>*/
/*                        {% endif %}          */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*             */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% include '::modulesUsed/navigationAdmin.html.twig' %}*/
/*                 <div class="span9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr />*/
/* 	<footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*             <div class="row">*/
/*                 <div class="span4">*/
/*                     <p>&copy; Copyright 2017 - Sotetel</p>*/
/*                 </div>*/
/*             </div>*/
/* 	</footer>	*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('/js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('bundles/pages/ckeditor/ckeditor.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
