<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3684f4811b1725281178c50294acfbd3fd7835b2941942e68fa304461050d77c extends Twig_Template
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
        $__internal_4dc0cab56f042cc66f73f76a94a3210d5b9d50433884b6414efa1db537a272e8 = $this->env->getExtension("native_profiler");
        $__internal_4dc0cab56f042cc66f73f76a94a3210d5b9d50433884b6414efa1db537a272e8->enter($__internal_4dc0cab56f042cc66f73f76a94a3210d5b9d50433884b6414efa1db537a272e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc0cab56f042cc66f73f76a94a3210d5b9d50433884b6414efa1db537a272e8->leave($__internal_4dc0cab56f042cc66f73f76a94a3210d5b9d50433884b6414efa1db537a272e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_464759a7fdfd990336a26795aa5a6443ea3b43a9fdc3e4e47b6711cf2e92c929 = $this->env->getExtension("native_profiler");
        $__internal_464759a7fdfd990336a26795aa5a6443ea3b43a9fdc3e4e47b6711cf2e92c929->enter($__internal_464759a7fdfd990336a26795aa5a6443ea3b43a9fdc3e4e47b6711cf2e92c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_464759a7fdfd990336a26795aa5a6443ea3b43a9fdc3e4e47b6711cf2e92c929->leave($__internal_464759a7fdfd990336a26795aa5a6443ea3b43a9fdc3e4e47b6711cf2e92c929_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0450c872659f3f155e8b7f9f71ffdc2d84dbb857f22668add254c102553b5d40 = $this->env->getExtension("native_profiler");
        $__internal_0450c872659f3f155e8b7f9f71ffdc2d84dbb857f22668add254c102553b5d40->enter($__internal_0450c872659f3f155e8b7f9f71ffdc2d84dbb857f22668add254c102553b5d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0450c872659f3f155e8b7f9f71ffdc2d84dbb857f22668add254c102553b5d40->leave($__internal_0450c872659f3f155e8b7f9f71ffdc2d84dbb857f22668add254c102553b5d40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de4473faeb5a4c089f15fb2c6acfec76214cc969d800cd8ae7b3726149c80b75 = $this->env->getExtension("native_profiler");
        $__internal_de4473faeb5a4c089f15fb2c6acfec76214cc969d800cd8ae7b3726149c80b75->enter($__internal_de4473faeb5a4c089f15fb2c6acfec76214cc969d800cd8ae7b3726149c80b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de4473faeb5a4c089f15fb2c6acfec76214cc969d800cd8ae7b3726149c80b75->leave($__internal_de4473faeb5a4c089f15fb2c6acfec76214cc969d800cd8ae7b3726149c80b75_prof);

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
