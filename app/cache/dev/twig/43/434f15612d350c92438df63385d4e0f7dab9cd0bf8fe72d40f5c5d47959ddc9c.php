<?php

/* SYM16SimpleStockBundle:Common:list.html.twig */
class __TwigTemplate_4d8d9a9746987237658f80ce38f0afc29f37c268521e04ef3caf6abb1f66ebd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16SimpleStockBundle:Common:list.html.twig", 2);
        $this->blocks = array(
            'BLOCA' => array($this, 'block_BLOCA'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SYM16SimpleStockBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_BLOCA($context, array $blocks = array())
    {
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3dfa93_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3dfa93_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e3dfa93_jquery-1.12.0_1.js");
            // line 6
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "e3dfa93"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3dfa93") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e3dfa93.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 8
        echo "    <h3>";
        echo twig_escape_filter($this->env, (isset($context["listname"]) ? $context["listname"] : null), "html", null, true);
        echo "</h3>
    ";
        // line 10
        echo "    <table class=\"table table-striped\">
    ";
        // line 12
        echo "    ";
        // line 13
        echo "\t";
        // line 14
        echo "        <thead>
\t    <tr>
\t\t";
        // line 17
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listColnames"]) ? $context["listColnames"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colname"]) {
            // line 18
            echo "\t\t    ";
            // line 19
            echo "\t\t    <th>";
            echo twig_escape_filter($this->env, $context["colname"], "html", null, true);
            echo "</th>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t";
        // line 23
        echo "                <th>
\t\t    ";
        // line 24
        if (($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "prel", array()) != null)) {
            // line 25
            echo "\t\t    <span class=\"glyphicon glyphicon-export\"></span>
\t\t    ";
        }
        // line 27
        echo "                    <span class=\"glyphicon glyphicon-pencil\"></span>
                    <span class=\"glyphicon glyphicon-trash\"></span>
\t\t</th>
            </tr>
        </thead>
\t";
        // line 33
        echo "\t<tbody>
        ";
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEntities"]) ? $context["listEntities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entitie"]) {
            // line 36
            echo "            <tr>
                ";
            // line 38
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["entitie"]);
            foreach ($context['_seq'] as $context["key"] => $context["article"]) {
                // line 39
                echo "\t\t    ";
                if (($context["key"] == "id")) {
                    // line 40
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "prop", array()), array("valeur" => $this->getAttribute($context["entitie"], "id", array()), "exposant" => $this->getAttribute($context["entitie"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["article"], "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 42
                    echo "                        <td> ";
                    echo twig_escape_filter($this->env, $context["article"], "html", null, true);
                    echo " </td>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t<td>
\t\t";
            // line 46
            if (($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "prel", array()) != null)) {
                // line 47
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "prel", array()), array("valeur" => $this->getAttribute($context["entitie"], "id", array()), "exposant" => $this->getAttribute($context["entitie"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-export\"></span>
\t\t";
            }
            // line 49
            echo "\t        ";
            if (($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "mod", array()) != "NULL")) {
                // line 50
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "mod", array()), array("valeur" => $this->getAttribute($context["entitie"], "id", array()), "exposant" => $this->getAttribute($context["entitie"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                ";
            } else {
                // line 52
                echo "                <span class=\"glyphicon glyphicon-pencil\"></span>
                ";
            }
            // line 54
            echo "\t        ";
            if (($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "supr", array()) != "NULL")) {
                // line 55
                echo "                <a class=\"confirmModalLink\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "supr", array()), array("valeur" => $this->getAttribute($context["entitie"], "id", array()), "exposant" => $this->getAttribute($context["entitie"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                ";
            } else {
                // line 57
                echo "                <span class=\"glyphicon glyphicon-trash\"></span>
                ";
            }
            // line 59
            echo "\t\t</td>
\t     </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
    <ul>
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            echo "\t<li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </ul>
    <b>Nombre total d'item(s) dans cette liste : ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["totaluser"]) ? $context["totaluser"] : null), "html", null, true);
        echo "</b>
";
        // line 71
        echo "<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header modal-header-warning\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-dismiss=\"modal\">×</button>
                <h4 class=\"modal-title\">Confirmation de la suppression</h4>
            </div>
            <div class=\"modal-body\">
                <p>Etes-vous sur de vouloir supprimer cet élément ?</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-primary\" id=\"confirmModalYes\" type=\"button\"><i class=\"icon icon-check icon-lg\"></i> Supprimer</button>
                <button class=\"btn btn-inverse\" id=\"confirmModalNo\"  type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Annuler</button>
            </div>
        </div>
    </div>
</div>
";
        // line 89
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        var theHREF;

        \$(\".confirmModalLink\").click(function(e) {
            e.preventDefault();
            theHREF = \$(this).attr(\"href\");
            \$(\"#confirmModal\").modal(\"show\");
        });

        \$(\"#confirmModalNo\").click(function(e) {
            \$(\"#confirmModal\").modal(\"hide\");
        });

        \$(\"#confirmModalYes\").click(function(e) {
            window.location.href = theHREF;
        });
    });
</script> 
";
    }

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle:Common:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 89,  208 => 71,  204 => 69,  201 => 68,  192 => 66,  188 => 65,  183 => 62,  175 => 59,  171 => 57,  165 => 55,  162 => 54,  158 => 52,  152 => 50,  149 => 49,  143 => 47,  141 => 46,  138 => 45,  132 => 44,  126 => 42,  118 => 40,  115 => 39,  110 => 38,  107 => 36,  102 => 35,  99 => 33,  92 => 27,  88 => 25,  86 => 24,  83 => 23,  81 => 21,  72 => 19,  70 => 18,  65 => 17,  61 => 14,  59 => 13,  57 => 12,  54 => 10,  49 => 8,  35 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# template pour lister les éléments d'un tableau #}*/
/* {% extends 'SYM16SimpleStockBundle::layout.html.twig' %}*/
/* */
/* {% block BLOCA %}*/
/* {% javascripts '@SYM16SimpleStockBundle/Resources/public/js/jquery-1.12.0.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/*     <h3>{{listname}}</h3>*/
/*     {#<a href = "{{path('sym16_simple_stock_homepage',{'name':stockuser}) }}">Retour page d'accueil</a>#}*/
/*     <table class="table table-striped">*/
/*     {#<table border=1 width=40% bordercolor=blue>#}*/
/*     {#<table class="records_list" border=1>#}*/
/* 	{# première ligne du tableau : intitulé des colonnes #}*/
/*         <thead>*/
/* 	    <tr>*/
/* 		{# boucle sur les intitulés des colonnes #}*/
/* 		{% for colname in listColnames %}*/
/* 		    {#<th width=5%>{{ colname }}</th>#}*/
/* 		    <th>{{ colname }}</th>*/
/* 		{% endfor %}*/
/* 		{#<th>Modifier</th>*/
/* 		<th>Supprimer</th>#}*/
/*                 <th>*/
/* 		    {% if path.prel !=NULL %}*/
/* 		    <span class="glyphicon glyphicon-export"></span>*/
/* 		    {% endif %}*/
/*                     <span class="glyphicon glyphicon-pencil"></span>*/
/*                     <span class="glyphicon glyphicon-trash"></span>*/
/* 		</th>*/
/*             </tr>*/
/*         </thead>*/
/* 	{# les autres lignes du tableau #}*/
/* 	<tbody>*/
/*         {# boucle sur les lignes #}*/
/*         {% for entitie in listEntities %}*/
/*             <tr>*/
/*                 {# boucle sur les articles d'une ligne #}*/
/* 		{% for key, article in entitie %}*/
/* 		    {% if key  == 'id' %}*/
/*                         <td><a href="{{ path(path.prop,{'valeur':entitie.id, 'exposant':entitie.id }) }}">{{article}}</a>*/
/*                     {% else %}*/
/*                         <td> {{ article }} </td>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* 		<td>*/
/* 		{% if path.prel !=NULL %}*/
/* 		<a href="{{ path(path.prel,{'valeur':entitie.id, 'exposant':entitie.id }) }}"><span class="glyphicon glyphicon-export"></span>*/
/* 		{% endif %}*/
/* 	        {% if path.mod != 'NULL' %}*/
/*                 <a href="{{ path(path.mod,{'valeur':entitie.id, 'exposant':entitie.id }) }}"><span class="glyphicon glyphicon-pencil"></span></a>*/
/*                 {% else %}*/
/*                 <span class="glyphicon glyphicon-pencil"></span>*/
/*                 {% endif %}*/
/* 	        {% if path.supr != 'NULL' %}*/
/*                 <a class="confirmModalLink" href="{{ path(path.supr,{'valeur':entitie.id, 'exposant':entitie.id }) }}"><span class="glyphicon glyphicon-trash"></span></a>*/
/*                 {% else %}*/
/*                 <span class="glyphicon glyphicon-trash"></span>*/
/*                 {% endif %}*/
/* 		</td>*/
/* 	     </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <ul>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/* 	<li>{{message}}</li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*     <b>Nombre total d'item(s) dans cette liste : {{totaluser}}</b>*/
/* {#=============== Code HTML de la fenêtre modale ======================#}*/
/* <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header modal-header-warning">*/
/*                 <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>*/
/*                 <h4 class="modal-title">Confirmation de la suppression</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <p>Etes-vous sur de vouloir supprimer cet élément ?</p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button class="btn btn-primary" id="confirmModalYes" type="button"><i class="icon icon-check icon-lg"></i> Supprimer</button>*/
/*                 <button class="btn btn-inverse" id="confirmModalNo"  type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Annuler</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {#========== Java Script pour gestion de la fenêtre modale =============#}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         var theHREF;*/
/* */
/*         $(".confirmModalLink").click(function(e) {*/
/*             e.preventDefault();*/
/*             theHREF = $(this).attr("href");*/
/*             $("#confirmModal").modal("show");*/
/*         });*/
/* */
/*         $("#confirmModalNo").click(function(e) {*/
/*             $("#confirmModal").modal("hide");*/
/*         });*/
/* */
/*         $("#confirmModalYes").click(function(e) {*/
/*             window.location.href = theHREF;*/
/*         });*/
/*     });*/
/* </script> */
/* {% endblock %}*/
/* */
/* */
/* */
