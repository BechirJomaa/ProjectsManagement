<?php

/* projet/index.html.twig */
class __TwigTemplate_38fe25886c2db43bf0401826d7017c07e40cfe37fc3d5b9e30fea3aa32047d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "projet/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_383ecbc178f82986ce299dcaf5a07bdeb462feb32743e2e8468d0176383df77c = $this->env->getExtension("native_profiler");
        $__internal_383ecbc178f82986ce299dcaf5a07bdeb462feb32743e2e8468d0176383df77c->enter($__internal_383ecbc178f82986ce299dcaf5a07bdeb462feb32743e2e8468d0176383df77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383ecbc178f82986ce299dcaf5a07bdeb462feb32743e2e8468d0176383df77c->leave($__internal_383ecbc178f82986ce299dcaf5a07bdeb462feb32743e2e8468d0176383df77c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_205b6176ff8ad0b750f01be401ed211d195a8177be5e059da78db0ae29acf3cf = $this->env->getExtension("native_profiler");
        $__internal_205b6176ff8ad0b750f01be401ed211d195a8177be5e059da78db0ae29acf3cf->enter($__internal_205b6176ff8ad0b750f01be401ed211d195a8177be5e059da78db0ae29acf3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des projets</h1>
 
        <dl>
        <dt>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("projet_new");
        echo "\" class=\"btn\">
                Nouveau projet
            </a>
          
        </dt>
       
    </dl>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
               
                <th>Datedebut</th>
                <th>Datefin</th>
                <th>Description</th>
                <th>Cout</th>
                <th>Statut</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 30
            echo "            <tr>
             
                <td>";
            // line 32
            if ($this->getAttribute($context["projet"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["projet"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["projet"], "description", array())) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["projet"], "description", array()), 0, 100) . "...")) : ($this->getAttribute($context["projet"], "description", array()))), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "cout", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "statut", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_edit", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                   
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script>

                                 if(window.Notification && Notification.permission !== \"denied\") {
                            Notification.requestPermission(function(status) {  
                            var n = new Notification('Notification', { 
                            body: 'you have a new project',
                            icon: 'images/message.png' 
\t\t}); 
\t});
}
</script>

    
";
        
        $__internal_205b6176ff8ad0b750f01be401ed211d195a8177be5e059da78db0ae29acf3cf->leave($__internal_205b6176ff8ad0b750f01be401ed211d195a8177be5e059da78db0ae29acf3cf_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  122 => 45,  111 => 40,  107 => 39,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  84 => 33,  78 => 32,  74 => 30,  70 => 29,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des projets</h1>*/
/*  */
/*         <dl>*/
/*         <dt>*/
/*             <a href="{{ path('projet_new') }}" class="btn">*/
/*                 Nouveau projet*/
/*             </a>*/
/*           */
/*         </dt>*/
/*        */
/*     </dl>*/
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                */
/*                 <th>Datedebut</th>*/
/*                 <th>Datefin</th>*/
/*                 <th>Description</th>*/
/*                 <th>Cout</th>*/
/*                 <th>Statut</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for projet in projets %}*/
/*             <tr>*/
/*              */
/*                 <td>{% if projet.dateDebut %}{{ projet.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if projet.dateFin %}{{ projet.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ projet.description|length > 100 ? projet.description|slice(0, 100) ~ '...' : projet.description  }}</td>*/
/*                 <td>{{ projet.cout }}</td>*/
/*                 <td>{{ projet.statut }}</td>*/
/*                 <td>{{ projet.adresse }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('projet_show', { 'id': projet.id }) }}"><i class="icon-book"></i></a>*/
/*                     <a href="{{ path('projet_edit', { 'id': projet.id }) }}"><i class="icon-edit"></i></a>*/
/*                    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         <script src="{{asset('http://code.jquery.com/jquery-2.1.3.min.js')}}"></script>*/
/* */
/* 			<script>*/
/* */
/*                                  if(window.Notification && Notification.permission !== "denied") {*/
/*                             Notification.requestPermission(function(status) {  */
/*                             var n = new Notification('Notification', { */
/*                             body: 'you have a new project',*/
/*                             icon: 'images/message.png' */
/* 		}); */
/* 	});*/
/* }*/
/* </script>*/
/* */
/*     */
/* {% endblock %}*/
/* */
