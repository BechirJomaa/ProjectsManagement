<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_104c045cdd216508f6533e1de83281b56cb4ae25caa08774cf8ddfe91242218c extends Twig_Template
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
        $__internal_da697fcf35cd67ee8de8e7d6ea760e167c7f4d3cf8433e225e05e96db9d97faf = $this->env->getExtension("native_profiler");
        $__internal_da697fcf35cd67ee8de8e7d6ea760e167c7f4d3cf8433e225e05e96db9d97faf->enter($__internal_da697fcf35cd67ee8de8e7d6ea760e167c7f4d3cf8433e225e05e96db9d97faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_da697fcf35cd67ee8de8e7d6ea760e167c7f4d3cf8433e225e05e96db9d97faf->leave($__internal_da697fcf35cd67ee8de8e7d6ea760e167c7f4d3cf8433e225e05e96db9d97faf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
