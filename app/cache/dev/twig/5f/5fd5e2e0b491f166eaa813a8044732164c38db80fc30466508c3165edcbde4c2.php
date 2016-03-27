<?php

/* SYM16SimpleStockBundle:Reference:ajouter.html.twig */
class __TwigTemplate_2f89805a284ed65d4bbb3248d1e0464c1943c430172e03a39ea27800cc2d4e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16SimpleStockBundle:Reference:ajouter.html.twig", 1);
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

    // line 2
    public function block_BLOCA($context, array $blocks = array())
    {
        // line 3
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3dfa93_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3dfa93_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e3dfa93_jquery-1.12.0_1.js");
            // line 4
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function(){
\t// on construite l'url à partir de l'identifiant de la route route
        var url = \"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("reference_ajax");
            echo "\";
        var urlfamille = \"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("reference_ajax1");
            echo "\";
\t// via le DOM on récupère les sélection courantes dans les listes Entrpot et Emplacement
        var entrepotElement = '#sym16_simplestockbundle_reference_entrepot';
        var emplacementElement = '#sym16_simplestockbundle_reference_emplacement';
\t// via le DOM on récupère les sélection courantes dans les listes Famille et Composant
        var familleElement = '#sym16_simplestockbundle_reference_famille';
        var composantElement = '#sym16_simplestockbundle_reference_composant';
\t// dès que l'internaute change la selection de la liste Entrepot
\t// ça crée un événement permettant activer le code qui suit
\t\$(entrepotElement).on('change', function(){
\t    // on récupère l'id entrepot qui a été sélectionnée
            var entrepot_id = \$(this).val();
            \$.ajax({ 
\t\t// on constuit l'objet XMLHttpRequest 
\t\ttype: \"POST\", // passage de paramètres par méthode POST (on peut aussi utiliser GET)
                url: url,     // url de la fonction qui tratera côté serveur la requête
                data: {'entrepot_id':entrepot_id}, // paramètres passé par la méthode POST ou GET
                dataType: 'JSON', //codage attendu pour la réponse du serveur (ici c'est encodé en JSON)
                timeout: 30000,
\t\t// traitement si ça a fonctionné
                success: function (data) {
                    //réinitialise la liste des emplacements
                    \$(emplacementElement).html('<option value> -- Selectionnez un emplacement -- </option>');
                    //met à jour la liste des emplacements
                    \$.each(data, function(index){
                            var id = data[index].id;
                            var nom = data[index].nom;
                            \$(emplacementElement).append('<option value=\"'+id+'\">'+nom+'</option>');
                    });
                },
\t\t// traitement si ça a pas fonctionné
                error: function(){
                    alert('Erreur entrepot, la connexion au serveur a été interrompue');
                }
            });
        });
\t// dès que l'internaute change la selection de la liste Famille
\t// ça crée un événement permettant activer le code qui suit
\t\$(familleElement).on('change', function(){
\t    // on récupère l'id de la famille qui a été sélectionnée
            var famille_id = \$(this).val();
            \$.ajax({ 
\t\t// on constuit l'objet XMLHttpRequest 
\t\ttype: \"POST\", // passage de paramètres par méthode POST (on peut aussi utiliser GET)
                url: urlfamille,     // url de la fonction qui tratera côté serveur la requête
                data: {'famille_id':famille_id}, // paramètres passé par la méthode POST ou GET
                dataType: 'JSON', //codage attendu pour la réponse du serveur (ici c'est encodé en JSON)
                timeout: 30000,
\t\t// traitement si ça a fonctionné
                success: function (data) {
                    //réinitialise la liste des composants
                    \$(composantElement).html('<option value> -- Selectionnez un composant -- </option>');
                    //met à jour la liste des composants
                    \$.each(data, function(index){
                            var id = data[index].id;
                            var nom = data[index].nom;
                            \$(composantElement).append('<option value=\"'+id+'\">'+nom+'</option>');
                    });
                },
\t\t// traitement si ça a pas fonctionné
                error: function(){
                    alert('Erreur famille, la connexion au serveur a été interrompue');
                }
            });
        });
    });
    </script> 
";
        } else {
            // asset "e3dfa93"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3dfa93") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e3dfa93.js");
            // line 4
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function(){
\t// on construite l'url à partir de l'identifiant de la route route
        var url = \"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("reference_ajax");
            echo "\";
        var urlfamille = \"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("reference_ajax1");
            echo "\";
\t// via le DOM on récupère les sélection courantes dans les listes Entrpot et Emplacement
        var entrepotElement = '#sym16_simplestockbundle_reference_entrepot';
        var emplacementElement = '#sym16_simplestockbundle_reference_emplacement';
\t// via le DOM on récupère les sélection courantes dans les listes Famille et Composant
        var familleElement = '#sym16_simplestockbundle_reference_famille';
        var composantElement = '#sym16_simplestockbundle_reference_composant';
\t// dès que l'internaute change la selection de la liste Entrepot
\t// ça crée un événement permettant activer le code qui suit
\t\$(entrepotElement).on('change', function(){
\t    // on récupère l'id entrepot qui a été sélectionnée
            var entrepot_id = \$(this).val();
            \$.ajax({ 
\t\t// on constuit l'objet XMLHttpRequest 
\t\ttype: \"POST\", // passage de paramètres par méthode POST (on peut aussi utiliser GET)
                url: url,     // url de la fonction qui tratera côté serveur la requête
                data: {'entrepot_id':entrepot_id}, // paramètres passé par la méthode POST ou GET
                dataType: 'JSON', //codage attendu pour la réponse du serveur (ici c'est encodé en JSON)
                timeout: 30000,
\t\t// traitement si ça a fonctionné
                success: function (data) {
                    //réinitialise la liste des emplacements
                    \$(emplacementElement).html('<option value> -- Selectionnez un emplacement -- </option>');
                    //met à jour la liste des emplacements
                    \$.each(data, function(index){
                            var id = data[index].id;
                            var nom = data[index].nom;
                            \$(emplacementElement).append('<option value=\"'+id+'\">'+nom+'</option>');
                    });
                },
\t\t// traitement si ça a pas fonctionné
                error: function(){
                    alert('Erreur entrepot, la connexion au serveur a été interrompue');
                }
            });
        });
\t// dès que l'internaute change la selection de la liste Famille
\t// ça crée un événement permettant activer le code qui suit
\t\$(familleElement).on('change', function(){
\t    // on récupère l'id de la famille qui a été sélectionnée
            var famille_id = \$(this).val();
            \$.ajax({ 
\t\t// on constuit l'objet XMLHttpRequest 
\t\ttype: \"POST\", // passage de paramètres par méthode POST (on peut aussi utiliser GET)
                url: urlfamille,     // url de la fonction qui tratera côté serveur la requête
                data: {'famille_id':famille_id}, // paramètres passé par la méthode POST ou GET
                dataType: 'JSON', //codage attendu pour la réponse du serveur (ici c'est encodé en JSON)
                timeout: 30000,
\t\t// traitement si ça a fonctionné
                success: function (data) {
                    //réinitialise la liste des composants
                    \$(composantElement).html('<option value> -- Selectionnez un composant -- </option>');
                    //met à jour la liste des composants
                    \$.each(data, function(index){
                            var id = data[index].id;
                            var nom = data[index].nom;
                            \$(composantElement).append('<option value=\"'+id+'\">'+nom+'</option>');
                    });
                },
\t\t// traitement si ça a pas fonctionné
                error: function(){
                    alert('Erreur famille, la connexion au serveur a été interrompue');
                }
            });
        });
    });
    </script> 
";
        }
        unset($context["asset_url"]);
        // line 76
        echo " 

<h3>";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : null), "html", null, true);
        echo "<h3>
<div class=\"well\">
    <form method = \"post\" ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t";
        // line 83
        echo "\t";
        // line 84
        echo "\t";
        // line 85
        echo "    \t<input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle:Reference:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 85,  223 => 84,  221 => 83,  217 => 81,  213 => 80,  208 => 78,  204 => 76,  132 => 9,  128 => 8,  120 => 4,  47 => 9,  43 => 8,  35 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'SYM16SimpleStockBundle::layout.html.twig' %}*/
/* {% block BLOCA %}*/
/* {% javascripts '@SYM16SimpleStockBundle/Resources/public/js/jquery-1.12.0.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     <script type="text/javascript">*/
/*     $(document).ready(function(){*/
/* 	// on construite l'url à partir de l'identifiant de la route route*/
/*         var url = "{{ path('reference_ajax') }}";*/
/*         var urlfamille = "{{ path('reference_ajax1') }}";*/
/* 	// via le DOM on récupère les sélection courantes dans les listes Entrpot et Emplacement*/
/*         var entrepotElement = '#sym16_simplestockbundle_reference_entrepot';*/
/*         var emplacementElement = '#sym16_simplestockbundle_reference_emplacement';*/
/* 	// via le DOM on récupère les sélection courantes dans les listes Famille et Composant*/
/*         var familleElement = '#sym16_simplestockbundle_reference_famille';*/
/*         var composantElement = '#sym16_simplestockbundle_reference_composant';*/
/* 	// dès que l'internaute change la selection de la liste Entrepot*/
/* 	// ça crée un événement permettant activer le code qui suit*/
/* 	$(entrepotElement).on('change', function(){*/
/* 	    // on récupère l'id entrepot qui a été sélectionnée*/
/*             var entrepot_id = $(this).val();*/
/*             $.ajax({ */
/* 		// on constuit l'objet XMLHttpRequest */
/* 		type: "POST", // passage de paramètres par méthode POST (on peut aussi utiliser GET)*/
/*                 url: url,     // url de la fonction qui tratera côté serveur la requête*/
/*                 data: {'entrepot_id':entrepot_id}, // paramètres passé par la méthode POST ou GET*/
/*                 dataType: 'JSON', //codage attendu pour la réponse du serveur (ici c'est encodé en JSON)*/
/*                 timeout: 30000,*/
/* 		// traitement si ça a fonctionné*/
/*                 success: function (data) {*/
/*                     //réinitialise la liste des emplacements*/
/*                     $(emplacementElement).html('<option value> -- Selectionnez un emplacement -- </option>');*/
/*                     //met à jour la liste des emplacements*/
/*                     $.each(data, function(index){*/
/*                             var id = data[index].id;*/
/*                             var nom = data[index].nom;*/
/*                             $(emplacementElement).append('<option value="'+id+'">'+nom+'</option>');*/
/*                     });*/
/*                 },*/
/* 		// traitement si ça a pas fonctionné*/
/*                 error: function(){*/
/*                     alert('Erreur entrepot, la connexion au serveur a été interrompue');*/
/*                 }*/
/*             });*/
/*         });*/
/* 	// dès que l'internaute change la selection de la liste Famille*/
/* 	// ça crée un événement permettant activer le code qui suit*/
/* 	$(familleElement).on('change', function(){*/
/* 	    // on récupère l'id de la famille qui a été sélectionnée*/
/*             var famille_id = $(this).val();*/
/*             $.ajax({ */
/* 		// on constuit l'objet XMLHttpRequest */
/* 		type: "POST", // passage de paramètres par méthode POST (on peut aussi utiliser GET)*/
/*                 url: urlfamille,     // url de la fonction qui tratera côté serveur la requête*/
/*                 data: {'famille_id':famille_id}, // paramètres passé par la méthode POST ou GET*/
/*                 dataType: 'JSON', //codage attendu pour la réponse du serveur (ici c'est encodé en JSON)*/
/*                 timeout: 30000,*/
/* 		// traitement si ça a fonctionné*/
/*                 success: function (data) {*/
/*                     //réinitialise la liste des composants*/
/*                     $(composantElement).html('<option value> -- Selectionnez un composant -- </option>');*/
/*                     //met à jour la liste des composants*/
/*                     $.each(data, function(index){*/
/*                             var id = data[index].id;*/
/*                             var nom = data[index].nom;*/
/*                             $(composantElement).append('<option value="'+id+'">'+nom+'</option>');*/
/*                     });*/
/*                 },*/
/* 		// traitement si ça a pas fonctionné*/
/*                 error: function(){*/
/*                     alert('Erreur famille, la connexion au serveur a été interrompue');*/
/*                 }*/
/*             });*/
/*         });*/
/*     });*/
/*     </script> */
/* {% endjavascripts %} */
/* */
/* <h3>{{titre}}<h3>*/
/* <div class="well">*/
/*     <form method = "post" {{ form_enctype(form) }}>*/
/* 	{{ form_widget(form) }}*/
/* 	{# ci-dessous à décommenter si on met le bouton dans ReferenceType.php #}*/
/* 	{#{{ form_widget(form.valider) }}#}*/
/* 	{# si-dessous à commenter si on met le bouton dans ReferenceType.php #}*/
/*     	<input type="submit" class="btn btn-primary" />*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
