<?php

/* layoutAdmin.html.twig */
class __TwigTemplate_2f24b336b38ebcd92d313f23b1b53014d713f961772ec1618a90a210af474d69 extends Twig_Template
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
        $__internal_a46bfe1c9d4da1932e676f031d21021f274e4bea2e4f96e09b96bfd7adbd5d59 = $this->env->getExtension("native_profiler");
        $__internal_a46bfe1c9d4da1932e676f031d21021f274e4bea2e4f96e09b96bfd7adbd5d59->enter($__internal_a46bfe1c9d4da1932e676f031d21021f274e4bea2e4f96e09b96bfd7adbd5d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

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
        
        $__internal_a46bfe1c9d4da1932e676f031d21021f274e4bea2e4f96e09b96bfd7adbd5d59->leave($__internal_a46bfe1c9d4da1932e676f031d21021f274e4bea2e4f96e09b96bfd7adbd5d59_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d5732641c79da566922694964fb6cf82907ccf77ca943830fdeede0e4be89918 = $this->env->getExtension("native_profiler");
        $__internal_d5732641c79da566922694964fb6cf82907ccf77ca943830fdeede0e4be89918->enter($__internal_d5732641c79da566922694964fb6cf82907ccf77ca943830fdeede0e4be89918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Setotel";
        
        $__internal_d5732641c79da566922694964fb6cf82907ccf77ca943830fdeede0e4be89918->leave($__internal_d5732641c79da566922694964fb6cf82907ccf77ca943830fdeede0e4be89918_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_b335aa10fc780fd826d2de6740f851fd99bdaf48faab5659c0de2197632c3197 = $this->env->getExtension("native_profiler");
        $__internal_b335aa10fc780fd826d2de6740f851fd99bdaf48faab5659c0de2197632c3197->enter($__internal_b335aa10fc780fd826d2de6740f851fd99bdaf48faab5659c0de2197632c3197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_b335aa10fc780fd826d2de6740f851fd99bdaf48faab5659c0de2197632c3197->leave($__internal_b335aa10fc780fd826d2de6740f851fd99bdaf48faab5659c0de2197632c3197_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_13230880b3c7875fbe5d3c75ef132e0626dd95198ceb63a4c34053ff70853279 = $this->env->getExtension("native_profiler");
        $__internal_13230880b3c7875fbe5d3c75ef132e0626dd95198ceb63a4c34053ff70853279->enter($__internal_13230880b3c7875fbe5d3c75ef132e0626dd95198ceb63a4c34053ff70853279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_13230880b3c7875fbe5d3c75ef132e0626dd95198ceb63a4c34053ff70853279->leave($__internal_13230880b3c7875fbe5d3c75ef132e0626dd95198ceb63a4c34053ff70853279_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbbfc4f68e5e6b8a69850ad373444a3fc4d8168d220f2359f7f8d9a7d0a62f68 = $this->env->getExtension("native_profiler");
        $__internal_cbbfc4f68e5e6b8a69850ad373444a3fc4d8168d220f2359f7f8d9a7d0a62f68->enter($__internal_cbbfc4f68e5e6b8a69850ad373444a3fc4d8168d220f2359f7f8d9a7d0a62f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbbfc4f68e5e6b8a69850ad373444a3fc4d8168d220f2359f7f8d9a7d0a62f68->leave($__internal_cbbfc4f68e5e6b8a69850ad373444a3fc4d8168d220f2359f7f8d9a7d0a62f68_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_f654cf1b206804d6362b7c184102cbc3dba50faa03c3c81a2201a924be3465c1 = $this->env->getExtension("native_profiler");
        $__internal_f654cf1b206804d6362b7c184102cbc3dba50faa03c3c81a2201a924be3465c1->enter($__internal_f654cf1b206804d6362b7c184102cbc3dba50faa03c3c81a2201a924be3465c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f654cf1b206804d6362b7c184102cbc3dba50faa03c3c81a2201a924be3465c1->leave($__internal_f654cf1b206804d6362b7c184102cbc3dba50faa03c3c81a2201a924be3465c1_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_940e7748938c462ba5a867340df138d0dd8d8da45ab2c4f94511488e38db93af = $this->env->getExtension("native_profiler");
        $__internal_940e7748938c462ba5a867340df138d0dd8d8da45ab2c4f94511488e38db93af->enter($__internal_940e7748938c462ba5a867340df138d0dd8d8da45ab2c4f94511488e38db93af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_940e7748938c462ba5a867340df138d0dd8d8da45ab2c4f94511488e38db93af->leave($__internal_940e7748938c462ba5a867340df138d0dd8d8da45ab2c4f94511488e38db93af_prof);

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
