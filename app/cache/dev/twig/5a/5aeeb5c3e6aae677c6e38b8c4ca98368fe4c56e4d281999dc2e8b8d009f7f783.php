<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_35bfb1735f571f4214f2298d4d89866305f5a6cb7871dfa52cb91f17c22bd121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ec961b3c01a1bd39377ed8c956128b44f3ac81fddf3baa1b9ae431b4220f53b = $this->env->getExtension("native_profiler");
        $__internal_7ec961b3c01a1bd39377ed8c956128b44f3ac81fddf3baa1b9ae431b4220f53b->enter($__internal_7ec961b3c01a1bd39377ed8c956128b44f3ac81fddf3baa1b9ae431b4220f53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ec961b3c01a1bd39377ed8c956128b44f3ac81fddf3baa1b9ae431b4220f53b->leave($__internal_7ec961b3c01a1bd39377ed8c956128b44f3ac81fddf3baa1b9ae431b4220f53b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5be0469f997dda5963565119909555194c8b494e01611fbff792c6812ea3dfd = $this->env->getExtension("native_profiler");
        $__internal_f5be0469f997dda5963565119909555194c8b494e01611fbff792c6812ea3dfd->enter($__internal_f5be0469f997dda5963565119909555194c8b494e01611fbff792c6812ea3dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5be0469f997dda5963565119909555194c8b494e01611fbff792c6812ea3dfd->leave($__internal_f5be0469f997dda5963565119909555194c8b494e01611fbff792c6812ea3dfd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_016f0f9aa3f21c7c3474019cbd6039fbcdb3b6d150151aef0e68f3f6cfc7ba3f = $this->env->getExtension("native_profiler");
        $__internal_016f0f9aa3f21c7c3474019cbd6039fbcdb3b6d150151aef0e68f3f6cfc7ba3f->enter($__internal_016f0f9aa3f21c7c3474019cbd6039fbcdb3b6d150151aef0e68f3f6cfc7ba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_016f0f9aa3f21c7c3474019cbd6039fbcdb3b6d150151aef0e68f3f6cfc7ba3f->leave($__internal_016f0f9aa3f21c7c3474019cbd6039fbcdb3b6d150151aef0e68f3f6cfc7ba3f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be7fc652cd22ca18d3f9eebb5d1ed4084212248589dc69add56b175da2a212b4 = $this->env->getExtension("native_profiler");
        $__internal_be7fc652cd22ca18d3f9eebb5d1ed4084212248589dc69add56b175da2a212b4->enter($__internal_be7fc652cd22ca18d3f9eebb5d1ed4084212248589dc69add56b175da2a212b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_be7fc652cd22ca18d3f9eebb5d1ed4084212248589dc69add56b175da2a212b4->leave($__internal_be7fc652cd22ca18d3f9eebb5d1ed4084212248589dc69add56b175da2a212b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
