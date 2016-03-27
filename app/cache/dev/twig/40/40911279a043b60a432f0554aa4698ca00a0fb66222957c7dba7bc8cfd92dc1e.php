<?php

/* SYM16SimpleStockBundle:Acceuil:index.html.twig */
class __TwigTemplate_5558dbe2fd997650cf87c037aef0fb3d17541da516f69bf914142c20523600a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16SimpleStockBundle:Acceuil:index.html.twig", 2);
        $this->blocks = array(
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

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle:Acceuil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* {# template pour le menu principal #}*/
/* {% extends 'SYM16SimpleStockBundle::layout.html.twig' %}*/
/* {#<html>*/
/*   <body>*/
/*     <h2>Hello utilisateur {{ name }}!</h2>#}*/
/*     {#<h2>Menu principal</h2>#}*/
/*     {#{% block BLOCA %}*/
/*     <h3>Articles</h3>*/
/* 	<li><a href="{{ path('sym16_simple_stock_article_lister') }}">*/
/* 		Lister les articles</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_article_ajouter') }}">*/
/* 		Ajouter un article</a></li>*/
/*     <h3>Utilisateurs et statuts</h3>*/
/* 	<li><a href="{{ path('sym16_simple_stock_droit_lister') }}">*/
/* 		Lister les différents statuts</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_utilisateur_lister') }}">*/
/* 		Lister les utilisateurs enregistrés et leur statut</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_utilisateur_ajouter') }}">*/
/* 		Enregistrer un nouvel utilisateur</a></li>*/
/*     <h3>Familles et composants</h3>*/
/* 	<li><a href="{{ path('sym16_simple_stock_famille_lister') }}">*/
/* 		Lister les familles</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_famille_ajouter') }}">*/
/* 		Ajouter une famille</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_composant_lister') }}">*/
/* 		Lister les composants</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_composant_ajouter') }}">*/
/* 		Ajouter un composant</a></li>*/
/*     <h3>Lieux de stockage</h3>*/
/* 	<li><a href="{{ path('sym16_simple_stock_entrepot_lister') }}">*/
/* 		Lister les entrepots</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_entrepot_ajouter') }}">*/
/* 		Ajouter un entrepot</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_emplacement_lister') }}">*/
/* 		Lister les emplacements</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_emplacement_ajouter') }}">*/
/* 		Ajouter un emplacement</a></li>*/
/*     <h3>Références</h3>*/
/* 	<li><a href="{{ path('sym16_simple_stock_reference_lister') }}">*/
/* 		Lister les références</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_reference_filtrer') }}">*/
/* 		Lister les références filtrées</a></li>*/
/* 	<li><a href="{{ path('sym16_simple_stock_reference_ajouter') }}">*/
/* 		Ajouter une reference</a></li>*/
/*         <ul>*/
/*         	{% for message in app.session.flashbag.get('infoliste') %}*/
/* 	    		<li>Message n° {{loop.revindex}}: {{message}}</li>*/
/*         	{% endfor %}*/
/*     	</ul>*/
/*     {% endblock %}#}*/
/* {#  </body>*/
/* </html>#}*/
/* */
