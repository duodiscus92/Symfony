<?php

/* SYM16SimpleStockBundle::layout.html.twig */
class __TwigTemplate_5c9a198ee534bc1a4c64662f9e226fae962fd7051692bc7b5aa37a79f856c93f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("::stocklayout.html.twig", "SYM16SimpleStockBundle::layout.html.twig", 5);
        $this->blocks = array(
            'HEADER' => array($this, 'block_HEADER'),
            'RACCOURCI' => array($this, 'block_RACCOURCI'),
            'FOOTER' => array($this, 'block_FOOTER'),
            'MENU0' => array($this, 'block_MENU0'),
            'BLOCA' => array($this, 'block_BLOCA'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::stocklayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_HEADER($context, array $blocks = array())
    {
        // line 7
        echo "    <h2>Bienvenue sur Simple Stock</h2>
    <h3>Nom du stock en cours d'utilisation: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "stockusage"), "method"), "html", null, true);
        echo "</h3>
    ";
        // line 10
        echo "    <h3>Utilisateur : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "stockuser"), "method"), "html", null, true);
        echo " - Votre statut est : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "stockuserstatut"), "method"), "html", null, true);
        echo "</h3>
      ";
    }

    // line 12
    public function block_RACCOURCI($context, array $blocks = array())
    {
        // line 13
        echo "      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_article_ajouter");
        echo "\">
          Déposer dans le stock
        </a>
      </p>
      ";
    }

    // line 19
    public function block_FOOTER($context, array $blocks = array())
    {
        // line 20
        echo "    <footer>
    <dl>
    <ht><b>Mentions légales</b></dt>
    <dd>Propulsé par : Symfony, Linux, Apache, PHP, MySQL</dd>
    <dd>Simple Stock est un projet à vocation pédagogique</dd>
    <dd>Conception d'JET Conseil - Formation - Projets</dd>
    ";
        // line 27
        echo "    </dl>
    </footer>
    ";
    }

    // line 30
    public function block_MENU0($context, array $blocks = array())
    {
        // line 31
        echo "    <nav class=\"navbar navbar-primary\" role=\"navigation\">
    \t<div class=\"container-fluid\">
    \t    <div class=\"navbar-header\">
      \t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\">
        \t    <span class=\"sr-only\">Toggle navigation</span>
        \t    <span class=\"icon-bar\"></span>
        \t    <span class=\"icon-bar\"></span>
        \t    <span class=\"icon-bar\"></span>
      \t\t</button>
      \t\t";
        // line 41
        echo "    \t    </div>            
\t    <div class=\"collapse navbar-collapse navbar-ex2-collapse\">
            \t<ul class=\"nav navbar-nav\">
               \t    <li class=\"active\"><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sym16_simple_stock_homepage", array("name" => (isset($context["stockuser"]) ? $context["stockuser"] : null))), "html", null, true);
        echo "\"\">Accueil</a></li>
                    <li class=\"dropdown dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\tArticles et Références<b class=\"caret\"></b>
          \t\t</a>
          \t\t<ul class=\"dropdown-menu dropdown-menu-primary\">
\t\t\t    ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_TEMPORAIRE")) {
            // line 51
            echo "            \t\t    <li class=\"dropdown-header\">Articles</li>
            \t\t    <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_article_lister");
            echo "\">Voir les articles</a></li>
            \t\t    <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_article_ajouter");
            echo "\">Déposer un article dans le stock</a></li>
            \t\t    ";
            // line 55
            echo "            \t\t    <li class=\"divider\"></li>
            \t\t    <li class=\"dropdown-header\">Références</li>
            \t\t    <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_reference_lister");
            echo "\">Voir les références</a></li>
            \t\t    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_reference_filtrer");
            echo "\">Voir les références filtrées</a></li>
            \t\t    <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_reference_ajouter");
            echo "\">Ajouter une référence</a></li>
\t\t\t    ";
        } else {
            // line 61
            echo "\t\t\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><font color=\"grey\">Connectez-vous pour acceder à ce menu</font></a></li>
\t\t\t    ";
        }
        // line 63
        echo "          \t\t</ul>
\t\t    </li>
                    <li class=\"dropdown dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\tCatégories<b class=\"caret\"></b>
          \t\t</a>
          \t\t<ul class=\"dropdown-menu dropdown-menu-primary\">
\t\t\t    ";
        // line 70
        if ($this->env->getExtension('security')->isGranted("ROLE_TEMPORAIRE")) {
            // line 71
            echo "            \t\t    <li class=\"dropdown-header\">Familles</li>
            \t\t    <li><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_famille_lister");
            echo "\">Voir les familles</a></li>
            \t\t    <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_famille_ajouter");
            echo "\">Ajouter une famille</a></li>
            \t\t    <li class=\"divider\"></li>
            \t\t    <li class=\"dropdown-header\">Composants</li>
            \t\t    <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_composant_lister");
            echo "\">Voir les composants</a></li>
            \t\t    <li><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_composant_ajouter");
            echo "\">Ajouter un composant</a></li>
                            ";
        } else {
            // line 79
            echo "\t\t\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><font color=\"grey\">Connectez-vous pour acceder à ce menu</font></a></li>
\t\t\t    ";
        }
        // line 80
        echo " 
          \t\t</ul>
       \t\t    </li>
                    <li class=\"dropdown dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\tLieux de stockage<b class=\"caret\"></b>
          \t\t</a>
          \t\t<ul class=\"dropdown-menu dropdown-menu-primary\">
\t\t\t    ";
        // line 88
        if ($this->env->getExtension('security')->isGranted("ROLE_TEMPORAIRE")) {
            // line 89
            echo "            \t\t    <li class=\"dropdown-header\">Entrepôts</li>
            \t\t    <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_entrepot_lister");
            echo "\">Voir les entrepôts</a></li>
            \t\t    <li><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_entrepot_ajouter");
            echo "\">Ajouter un entrepôt</a></li>
            \t\t    <li class=\"divider\"></li>
            \t\t    <li class=\"dropdown-header\">Emplacements</li>
            \t\t    <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_emplacement_lister");
            echo "\">Voir les emplacements</a></li>
            \t\t    <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_emplacement_ajouter");
            echo "\">Ajouter un emplacement </a></li>
                            ";
        } else {
            // line 97
            echo "\t\t\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><font color=\"grey\">Connectez-vous pour acceder à ce menu</font></a></li>
\t\t\t    ";
        }
        // line 98
        echo " 
          \t\t</ul>
       \t\t    </li>
                    <li class=\"dropdown dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\tStocks<b class=\"caret\"></b>
          \t\t</a>
          \t\t<ul class=\"dropdown-menu dropdown-menu-primary\">
\t\t\t    ";
        // line 106
        if ($this->env->getExtension('security')->isGranted("ROLE_TEMPORAIRE")) {
            // line 107
            echo "            \t\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_stocklist_lister");
            echo "\">Voir les stocks</a></li>
            \t\t    <li class=\"divider\"></li>
            \t\t    ";
            // line 110
            echo "            \t\t    <li class=\"dropdown-header\">Selection d'un stock</li>
\t\t\t    ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "stocklist"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 112
                echo "\t\t\t\t";
                if (($this->getAttribute($context["stock"], "usage", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "stockusage"), "method"))) {
                    // line 113
                    echo "\t\t\t    \t    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sym16_simple_stock_changestock", array("stockusage" => $this->getAttribute($context["stock"], "usage", array()))), "html", null, true);
                    echo "\"\">>>>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "usage", array()), "html", null, true);
                    echo "<<<</a></li>
\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t    \t    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sym16_simple_stock_changestock", array("stockusage" => $this->getAttribute($context["stock"], "usage", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "usage", array()), "html", null, true);
                    echo "</a></li>
\t\t\t\t";
                }
                // line 116
                echo " 
\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                            ";
        } else {
            // line 119
            echo "\t\t\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><font color=\"grey\">Connectez-vous pour acceder à ce menu</font></a></li>
\t\t\t    ";
        }
        // line 120
        echo " 
          \t\t</ul>
       \t\t    </li>
                    <li class=\"dropdown dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\tSession<b class=\"caret\"></b>
          \t\t</a>
          \t\t<ul class=\"dropdown-menu dropdown-menu-primary\">
            \t\t    <li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Se connecter</a></li>
            \t\t    <li><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Se déconnecter</a></li>
            \t\t    <li class=\"divider\"></li>
            \t\t    <li class=\"dropdown-header\">Pas encore inscrit ?</li>
            \t\t    ";
        // line 133
        echo "            \t\t    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_utilisateur_sinscrire");
        echo "\">S'inscrire</a></li>
            \t\t    <li class=\"divider\"></li>
            \t\t    <li class=\"dropdown-header\">Mot de passe perdu ?</li>
            \t\t    <li><a href=\"#\">Obtenir un nouveau mot de passe (en construction)</a></li>
          \t\t</ul>
       \t\t    </li>
                    <li class=\"dropdown dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\tGestion<b class=\"caret\"></b>
          \t\t</a>
          \t\t<ul class=\"dropdown-menu dropdown-menu-primary\">
\t\t\t    ";
        // line 144
        if ($this->env->getExtension('security')->isGranted("ROLE_GESTIONNAIRE")) {
            // line 145
            echo "            \t\t    <li class=\"dropdown-header\">Utilisateurs</li>
            \t\t    <li><a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_utilisateur_lister");
            echo "\">Voir les utilisateurs et leur statut</a></li>
            \t\t    <li><a href=\"";
            // line 147
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_utilisateur_ajouter");
            echo "\">Ajouter un utilisateur</a></li>
            \t\t    <li class=\"divider\"></li>
            \t\t    <li class=\"dropdown-header\">Statuts</li>
            \t\t    <li><a href=\"";
            // line 150
            echo $this->env->getExtension('routing')->getPath("sym16_simple_stock_droit_lister");
            echo "\">Voir les statuts</a></li>
                            ";
        } else {
            // line 152
            echo "\t\t\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><font color=\"grey\">Réservé au SUPER UTILISATEUR</font></a></li>
\t\t\t    ";
        }
        // line 153
        echo " 
                        </ul>
       \t\t    </li>
\t\t</ul>
\t    </div>
\t</div>
    </nav>
";
    }

    // line 161
    public function block_BLOCA($context, array $blocks = array())
    {
        // line 162
        echo "    <div class=\"row\">
\t<div class=\"col-sm-6 col-md-4\">
   \t    <div class=\"thumbnail\">
\t    \t";
        // line 166
        echo "\t    \t<div class=\"caption\">
       \t\t    <h3>Déposer dans le stock et créer des références</h3>
\t\t\tSeuls les utilisateurs possédant le 
\t\t\tstatut GESTIONNAIRE (ou supérieur) 
\t\t\tpeuvent déposer/retirer dans le stock
\t\t\tou  créer/supprimer des références.<p>
        \t    <p><b>Déposer dans le stock :</b>
\t\t\tOn dépose dans le stock des articles
\t\t\tréférencés. Pour cela il faut avoir au préalable
\t\t\tcréé des références.
\t\t\t<p><b>Créer des références : </b>
\t\t\tQuand on crée une référence
\t\t\til faut préciser la catégorie à laquelle 
\t\t\telle appartient et son lieu de stockage. Voir les
\t\t\trubriques \"Catégories et lieux de stockage\".
\t\t    </p>
        \t    <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Plus d'info ...</a> ";
        // line 182
        echo "</p>
\t    \t</div>
\t    </div>
\t</div>
\t<div class=\"col-sm-6 col-md-4\">
   \t    <div class=\"thumbnail\">
\t    \t";
        // line 189
        echo "\t    \t<div class=\"caption\">
       \t\t    <h3>Catégories</h3>
\t\t\tSeuls les utilisateurs possédant le statut
\t\t\tADMINISTRATEUR (ou supérieur) 
\t\t\tpeuvent créer ou supprimer
\t\t\tdes catégories.<p>
        \t    <p><b>Catégories :</b>
\t\t\tLes références sont classées dans des familles.
\t\t\tLes familles (exemple : OUTILLAGE) sont elles-mêmes décomposées
\t\t\ten composants (exemples : PERCEUSE, PONCEUSE). Il faut donc
\t\t\td'abord créer des familles et ensuite des composants, chaque composant
\t\t\tétant rattaché à une famille.<br><br><br><br>
\t\t    </p>
        \t    <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Plus d'info ...</a> ";
        // line 202
        echo "</p>
\t    \t</div>
\t    </div>
\t</div>
\t<div class=\"col-sm-6 col-md-4\">
   \t    <div class=\"thumbnail\">
\t    \t";
        // line 209
        echo "\t    \t<div class=\"caption\">
       \t\t    <h3>Lieux de stockage</h3>
\t\t\tSeuls les utilisateurs possédant le statut
\t\t\tADMINISTRATEUR (ou supérieur) 
\t\t\tpeuvent crééer ou supprimer
\t\t\tdes lieux de stockage.<p>
        \t    <p><b>Lieux de stockage :</b>
\t\t\tLes références sont rangées dans 
\t\t\tdans des entrepôts (exemples : BATIMENT B, HANGAR SUD). 
\t\t\tLes entrepôts sont eux-mêmes  décomposés en emplacements (exemples : ARMOIRE N°3, RACK 32-3).
\t\t\tIl faut donc d'abord créer des entrepots et ensuite des
\t\t\templacements chaque emplacement étant rattaché à un entrepot.<br><br><br><br> 
\t\t    </p>
        \t    <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Plus d'info ...</a> ";
        // line 222
        echo "</p>
\t    \t</div>
\t    </div>
\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 222,  415 => 209,  407 => 202,  392 => 189,  384 => 182,  366 => 166,  361 => 162,  358 => 161,  347 => 153,  341 => 152,  336 => 150,  330 => 147,  326 => 146,  323 => 145,  321 => 144,  306 => 133,  300 => 129,  296 => 128,  286 => 120,  280 => 119,  277 => 118,  270 => 116,  262 => 115,  254 => 113,  251 => 112,  247 => 111,  244 => 110,  238 => 107,  236 => 106,  226 => 98,  220 => 97,  215 => 95,  211 => 94,  205 => 91,  201 => 90,  198 => 89,  196 => 88,  186 => 80,  180 => 79,  175 => 77,  171 => 76,  165 => 73,  161 => 72,  158 => 71,  156 => 70,  147 => 63,  141 => 61,  136 => 59,  132 => 58,  128 => 57,  124 => 55,  120 => 53,  116 => 52,  113 => 51,  111 => 50,  102 => 44,  97 => 41,  86 => 31,  83 => 30,  77 => 27,  69 => 20,  66 => 19,  57 => 14,  54 => 13,  51 => 12,  42 => 10,  38 => 8,  35 => 7,  32 => 6,  11 => 5,);
    }
}
/* {#<!DOCTYPE html>*/
/* */
/* <html>*/
/*   <body>#}*/
/* {% extends '::stocklayout.html.twig' %}*/
/*       {% block HEADER %}*/
/*     <h2>Bienvenue sur Simple Stock</h2>*/
/*     <h3>Nom du stock en cours d'utilisation: {{app.session.get('stockusage')}}</h3>*/
/*     {# utilisation de variables de sessions déclarées dans AcceuilController.php #}*/
/*     <h3>Utilisateur : {{ app.session.get('stockuser') }} - Votre statut est : {{app.session.get('stockuserstatut') }}</h3>*/
/*       {% endblock %}*/
/*       {% block RACCOURCI %}*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="{{ path('sym16_simple_stock_article_ajouter') }}">*/
/*           Déposer dans le stock*/
/*         </a>*/
/*       </p>*/
/*       {% endblock %}*/
/*     {% block FOOTER %}*/
/*     <footer>*/
/*     <dl>*/
/*     <ht><b>Mentions légales</b></dt>*/
/*     <dd>Propulsé par : Symfony, Linux, Apache, PHP, MySQL</dd>*/
/*     <dd>Simple Stock est un projet à vocation pédagogique</dd>*/
/*     <dd>Conception d'JET Conseil - Formation - Projets</dd>*/
/*     {#<dd>Projet réalisé par les étudiants de {{university}}, Cursus : {{cursus}}, Cours : {{lecture}}, Prof :  {{prof}}</dd>#}*/
/*     </dl>*/
/*     </footer>*/
/*     {% endblock%}*/
/*     {% block MENU0 %}*/
/*     <nav class="navbar navbar-primary" role="navigation">*/
/*     	<div class="container-fluid">*/
/*     	    <div class="navbar-header">*/
/*       		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">*/
/*         	    <span class="sr-only">Toggle navigation</span>*/
/*         	    <span class="icon-bar"></span>*/
/*         	    <span class="icon-bar"></span>*/
/*         	    <span class="icon-bar"></span>*/
/*       		</button>*/
/*       		{#<a class="navbar-brand" href="#">Brand</a>#}*/
/*     	    </div>            */
/* 	    <div class="collapse navbar-collapse navbar-ex2-collapse">*/
/*             	<ul class="nav navbar-nav">*/
/*                	    <li class="active"><a href="{{path('sym16_simple_stock_homepage',{'name':stockuser}) }}"">Accueil</a></li>*/
/*                     <li class="dropdown dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             		Articles et Références<b class="caret"></b>*/
/*           		</a>*/
/*           		<ul class="dropdown-menu dropdown-menu-primary">*/
/* 			    {% if is_granted('ROLE_TEMPORAIRE') %}*/
/*             		    <li class="dropdown-header">Articles</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_article_lister') }}">Voir les articles</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_article_ajouter') }}">Déposer un article dans le stock</a></li>*/
/*             		    {#<li><a href="#">Prélever des articles dans le stock</a></li>#}*/
/*             		    <li class="divider"></li>*/
/*             		    <li class="dropdown-header">Références</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_reference_lister') }}">Voir les références</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_reference_filtrer') }}">Voir les références filtrées</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_reference_ajouter') }}">Ajouter une référence</a></li>*/
/* 			    {% else %}*/
/* 			    <li><a href="{{ path('login') }}"><font color="grey">Connectez-vous pour acceder à ce menu</font></a></li>*/
/* 			    {% endif %}*/
/*           		</ul>*/
/* 		    </li>*/
/*                     <li class="dropdown dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             		Catégories<b class="caret"></b>*/
/*           		</a>*/
/*           		<ul class="dropdown-menu dropdown-menu-primary">*/
/* 			    {% if is_granted('ROLE_TEMPORAIRE') %}*/
/*             		    <li class="dropdown-header">Familles</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_famille_lister') }}">Voir les familles</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_famille_ajouter') }}">Ajouter une famille</a></li>*/
/*             		    <li class="divider"></li>*/
/*             		    <li class="dropdown-header">Composants</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_composant_lister') }}">Voir les composants</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_composant_ajouter') }}">Ajouter un composant</a></li>*/
/*                             {% else %}*/
/* 			    <li><a href="{{ path('login') }}"><font color="grey">Connectez-vous pour acceder à ce menu</font></a></li>*/
/* 			    {% endif %} */
/*           		</ul>*/
/*        		    </li>*/
/*                     <li class="dropdown dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             		Lieux de stockage<b class="caret"></b>*/
/*           		</a>*/
/*           		<ul class="dropdown-menu dropdown-menu-primary">*/
/* 			    {% if is_granted('ROLE_TEMPORAIRE') %}*/
/*             		    <li class="dropdown-header">Entrepôts</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_entrepot_lister') }}">Voir les entrepôts</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_entrepot_ajouter') }}">Ajouter un entrepôt</a></li>*/
/*             		    <li class="divider"></li>*/
/*             		    <li class="dropdown-header">Emplacements</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_emplacement_lister') }}">Voir les emplacements</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_emplacement_ajouter') }}">Ajouter un emplacement </a></li>*/
/*                             {% else %}*/
/* 			    <li><a href="{{ path('login') }}"><font color="grey">Connectez-vous pour acceder à ce menu</font></a></li>*/
/* 			    {% endif %} */
/*           		</ul>*/
/*        		    </li>*/
/*                     <li class="dropdown dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             		Stocks<b class="caret"></b>*/
/*           		</a>*/
/*           		<ul class="dropdown-menu dropdown-menu-primary">*/
/* 			    {% if is_granted('ROLE_TEMPORAIRE') %}*/
/*             		    <li><a href="{{ path('sym16_simple_stock_stocklist_lister') }}">Voir les stocks</a></li>*/
/*             		    <li class="divider"></li>*/
/*             		    {#<li><a href="#">Choisir un stock</a></li>#}*/
/*             		    <li class="dropdown-header">Selection d'un stock</li>*/
/* 			    {% for stock in  app.session.get('stocklist') %}*/
/* 				{% if stock.usage == app.session.get('stockusage') %}*/
/* 			    	    <li><a href="{{ path('sym16_simple_stock_changestock',{'stockusage':stock.usage }) }}"">>>>{{stock.usage}}<<<</a></li>*/
/* 				{% else %}*/
/* 			    	    <li><a href="{{ path('sym16_simple_stock_changestock',{'stockusage':stock.usage }) }}">{{stock.usage}}</a></li>*/
/* 				{% endif %} */
/* 			    {% endfor %}*/
/*                             {% else %}*/
/* 			    <li><a href="{{ path('login') }}"><font color="grey">Connectez-vous pour acceder à ce menu</font></a></li>*/
/* 			    {% endif %} */
/*           		</ul>*/
/*        		    </li>*/
/*                     <li class="dropdown dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             		Session<b class="caret"></b>*/
/*           		</a>*/
/*           		<ul class="dropdown-menu dropdown-menu-primary">*/
/*             		    <li><a href="{{ path('login') }}">Se connecter</a></li>*/
/*             		    <li><a href="{{ path('logout') }}">Se déconnecter</a></li>*/
/*             		    <li class="divider"></li>*/
/*             		    <li class="dropdown-header">Pas encore inscrit ?</li>*/
/*             		    {#<li><a href="#">S'inscrire (en construction) </a></li>#}*/
/*             		    <li><a href="{{ path('sym16_simple_stock_utilisateur_sinscrire') }}">S'inscrire</a></li>*/
/*             		    <li class="divider"></li>*/
/*             		    <li class="dropdown-header">Mot de passe perdu ?</li>*/
/*             		    <li><a href="#">Obtenir un nouveau mot de passe (en construction)</a></li>*/
/*           		</ul>*/
/*        		    </li>*/
/*                     <li class="dropdown dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             		Gestion<b class="caret"></b>*/
/*           		</a>*/
/*           		<ul class="dropdown-menu dropdown-menu-primary">*/
/* 			    {% if is_granted('ROLE_GESTIONNAIRE') %}*/
/*             		    <li class="dropdown-header">Utilisateurs</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_utilisateur_lister') }}">Voir les utilisateurs et leur statut</a></li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_utilisateur_ajouter') }}">Ajouter un utilisateur</a></li>*/
/*             		    <li class="divider"></li>*/
/*             		    <li class="dropdown-header">Statuts</li>*/
/*             		    <li><a href="{{ path('sym16_simple_stock_droit_lister') }}">Voir les statuts</a></li>*/
/*                             {% else %}*/
/* 			    <li><a href="{{ path('login') }}"><font color="grey">Réservé au SUPER UTILISATEUR</font></a></li>*/
/* 			    {% endif %} */
/*                         </ul>*/
/*        		    </li>*/
/* 		</ul>*/
/* 	    </div>*/
/* 	</div>*/
/*     </nav>*/
/* {% endblock %}*/
/* {% block BLOCA %}*/
/*     <div class="row">*/
/* 	<div class="col-sm-6 col-md-4">*/
/*    	    <div class="thumbnail">*/
/* 	    	{#<img src="..." alt="...">#}*/
/* 	    	<div class="caption">*/
/*        		    <h3>Déposer dans le stock et créer des références</h3>*/
/* 			Seuls les utilisateurs possédant le */
/* 			statut GESTIONNAIRE (ou supérieur) */
/* 			peuvent déposer/retirer dans le stock*/
/* 			ou  créer/supprimer des références.<p>*/
/*         	    <p><b>Déposer dans le stock :</b>*/
/* 			On dépose dans le stock des articles*/
/* 			référencés. Pour cela il faut avoir au préalable*/
/* 			créé des références.*/
/* 			<p><b>Créer des références : </b>*/
/* 			Quand on crée une référence*/
/* 			il faut préciser la catégorie à laquelle */
/* 			elle appartient et son lieu de stockage. Voir les*/
/* 			rubriques "Catégories et lieux de stockage".*/
/* 		    </p>*/
/*         	    <p><a href="#" class="btn btn-primary" role="button">Plus d'info ...</a> {#<a href="#" class="btn btn-default" role="button">Button</a>#}</p>*/
/* 	    	</div>*/
/* 	    </div>*/
/* 	</div>*/
/* 	<div class="col-sm-6 col-md-4">*/
/*    	    <div class="thumbnail">*/
/* 	    	{#<img src="..." alt="...">#}*/
/* 	    	<div class="caption">*/
/*        		    <h3>Catégories</h3>*/
/* 			Seuls les utilisateurs possédant le statut*/
/* 			ADMINISTRATEUR (ou supérieur) */
/* 			peuvent créer ou supprimer*/
/* 			des catégories.<p>*/
/*         	    <p><b>Catégories :</b>*/
/* 			Les références sont classées dans des familles.*/
/* 			Les familles (exemple : OUTILLAGE) sont elles-mêmes décomposées*/
/* 			en composants (exemples : PERCEUSE, PONCEUSE). Il faut donc*/
/* 			d'abord créer des familles et ensuite des composants, chaque composant*/
/* 			étant rattaché à une famille.<br><br><br><br>*/
/* 		    </p>*/
/*         	    <p><a href="#" class="btn btn-primary" role="button">Plus d'info ...</a> {#<a href="#" class="btn btn-default" role="button">Button</a>#}</p>*/
/* 	    	</div>*/
/* 	    </div>*/
/* 	</div>*/
/* 	<div class="col-sm-6 col-md-4">*/
/*    	    <div class="thumbnail">*/
/* 	    	{#<img src="..." alt="...">#}*/
/* 	    	<div class="caption">*/
/*        		    <h3>Lieux de stockage</h3>*/
/* 			Seuls les utilisateurs possédant le statut*/
/* 			ADMINISTRATEUR (ou supérieur) */
/* 			peuvent crééer ou supprimer*/
/* 			des lieux de stockage.<p>*/
/*         	    <p><b>Lieux de stockage :</b>*/
/* 			Les références sont rangées dans */
/* 			dans des entrepôts (exemples : BATIMENT B, HANGAR SUD). */
/* 			Les entrepôts sont eux-mêmes  décomposés en emplacements (exemples : ARMOIRE N°3, RACK 32-3).*/
/* 			Il faut donc d'abord créer des entrepots et ensuite des*/
/* 			emplacements chaque emplacement étant rattaché à un entrepot.<br><br><br><br> */
/* 		    </p>*/
/*         	    <p><a href="#" class="btn btn-primary" role="button">Plus d'info ...</a> {#<a href="#" class="btn btn-default" role="button">Button</a>#}</p>*/
/* 	    	</div>*/
/* 	    </div>*/
/* 	</div>*/
/*     </div>*/
/* {% endblock %} */
/* {# </body> */
/* </html>#}*/
/* */
