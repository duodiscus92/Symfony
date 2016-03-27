<?php

/* SYM16SimpleStockBundle:Common:property.html.twig */
class __TwigTemplate_c601e5297ccad1db35bbd600de7b7935c68249d9ec1e0ee6422183406ced7f21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16SimpleStockBundle:Common:property.html.twig", 2);
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
        echo twig_escape_filter($this->env, (isset($context["propertyname"]) ? $context["propertyname"] : null), "html", null, true);
        echo "</h3>
    <table class=\"table table-striped\">
\t";
        // line 11
        echo "        <thead>
\t    <tr>
                <th>Caractéristique</th>
                <th>Valeur</th>
            </tr>
        </thead>
\t";
        // line 18
        echo "\t<tbody>
        ";
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valeurs"]) ? $context["valeurs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["valeur"]) {
            // line 21
            echo "            <tr>
                <td> ";
            // line 22
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " </td>
                <td> ";
            // line 23
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo " </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle:Common:property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  78 => 23,  74 => 22,  71 => 21,  66 => 20,  63 => 18,  55 => 11,  49 => 8,  35 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# template pour afficher les propriété d'un élément d'un table #}*/
/* {% extends 'SYM16SimpleStockBundle::layout.html.twig' %}*/
/* */
/* {% block BLOCA %}*/
/* {% javascripts '@SYM16SimpleStockBundle/Resources/public/js/jquery-1.12.0.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/*     <h3>{{propertyname}}</h3>*/
/*     <table class="table table-striped">*/
/* 	{# première ligne du tableau : intitulé des colonnes #}*/
/*         <thead>*/
/* 	    <tr>*/
/*                 <th>Caractéristique</th>*/
/*                 <th>Valeur</th>*/
/*             </tr>*/
/*         </thead>*/
/* 	{# les autres lignes du tableau : intitulé et valeur #}*/
/* 	<tbody>*/
/*         {# boucle sur les propriétés#}*/
/*         {% for key,valeur in valeurs %}*/
/*             <tr>*/
/*                 <td> {{ key }} </td>*/
/*                 <td> {{ valeur }} </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* */
/* */
