<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_ad936d040c7de91d801c28701b8404c93fea1b4d9aa846456363ca5318decadd extends Twig_Template
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
        $__internal_ca7593d460e7c133a6dd95f07a0f60787aa371ad1bcec775210d384b20b743a2 = $this->env->getExtension("native_profiler");
        $__internal_ca7593d460e7c133a6dd95f07a0f60787aa371ad1bcec775210d384b20b743a2->enter($__internal_ca7593d460e7c133a6dd95f07a0f60787aa371ad1bcec775210d384b20b743a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

<!DOCTYPE html>
<html>
<head>
 
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>Connexion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
   <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/AdminLTE.css"), "html", null, true);
        echo "\">
  <!-- iCheck -->
  <style>
  body{ 
  background-color : #002080 ;}
  
    </style>
</head>
<body>
<div class=\"login-box\">
  <div class=\"login-logo \">
    <a style=\"color :red\"  ><b>SOTETEL</a>
  </div>
  <!-- /.login-logo -->
  
  <div class=\"login-box\" style=\"color :red\" >

    <p class=\"login-box-msg\" style=\"color :red\">Sign in to start your session</p>

   <form action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
         <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
      <div class=\"form-group has-feedback\">
         <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
         <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
        
        <div class=\"col-xs-13\">
          <input class=\"btn btn-primary btn-block\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
         
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a>I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icheck.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>









";
        
        $__internal_ca7593d460e7c133a6dd95f07a0f60787aa371ad1bcec775210d384b20b743a2->leave($__internal_ca7593d460e7c133a6dd95f07a0f60787aa371ad1bcec775210d384b20b743a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 70,  118 => 68,  114 => 67,  99 => 55,  87 => 46,  82 => 44,  78 => 43,  56 => 24,  47 => 18,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*  */
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>Connexion</title>*/
/*   <!-- Tell the browser to be responsive to screen width -->*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*   <!-- Bootstrap 3.3.6 -->*/
/*    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*   <!-- Font Awesome -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*   <!-- Ionicons -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*   <!-- Theme style -->*/
/*   <link rel="stylesheet" href="{{ asset('css/AdminLTE.css') }}">*/
/*   <!-- iCheck -->*/
/*   <style>*/
/*   body{ */
/*   background-color : #002080 ;}*/
/*   */
/*     </style>*/
/* </head>*/
/* <body>*/
/* <div class="login-box">*/
/*   <div class="login-logo ">*/
/*     <a style="color :red"  ><b>SOTETEL</a>*/
/*   </div>*/
/*   <!-- /.login-logo -->*/
/*   */
/*   <div class="login-box" style="color :red" >*/
/* */
/*     <p class="login-box-msg" style="color :red">Sign in to start your session</p>*/
/* */
/*    <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*          <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*       <div class="form-group has-feedback">*/
/*          <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*       </div>*/
/*       <div class="form-group has-feedback">*/
/*          <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/*         <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*       </div>*/
/*         */
/*         <div class="col-xs-13">*/
/*           <input class="btn btn-primary btn-block"  type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*          */
/*         </div>*/
/*         <!-- /.col -->*/
/*       </div>*/
/*     </form>*/
/*     <a>I forgot my password</a><br>*/
/*   </div>*/
/*   <!-- /.login-box-body -->*/
/* </div>*/
/* <!-- /.login-box -->*/
/* */
/* <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/* <script src="{{ asset('/js/bootstrap.js') }}"></script>*/
/* <!-- iCheck -->*/
/* <script src="{{ asset('icheck.min.js') }}"></script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
