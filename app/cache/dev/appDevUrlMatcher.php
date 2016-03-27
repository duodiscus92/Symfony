<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/e3dfa93')) {
            // _assetic_e3dfa93
            if ($pathinfo === '/js/e3dfa93.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3dfa93',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e3dfa93',);
            }

            // _assetic_e3dfa93_0
            if ($pathinfo === '/js/e3dfa93_jquery-1.12.0_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3dfa93',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e3dfa93_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/SimpleStock')) {
            if (0 === strpos($pathinfo, '/SimpleStock/home')) {
                // sym16_simple_stock_homepage
                if (rtrim($pathinfo, '/') === '/SimpleStock/home') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sym16_simple_stock_homepage');
                    }

                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\AcceuilController::indexAction',  '_route' => 'sym16_simple_stock_homepage',);
                }

                // sym16_simple_stock_changestock
                if ($pathinfo === '/SimpleStock/home/changestock') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\AcceuilController::changestockAction',  '_route' => 'sym16_simple_stock_changestock',);
                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/article')) {
                // sym16_simple_stock_article_lister
                if ($pathinfo === '/SimpleStock/article/view') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ArticleController::listerAction',  '_route' => 'sym16_simple_stock_article_lister',);
                }

                // sym16_simple_stock_article_propriete
                if ($pathinfo === '/SimpleStock/article/property') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ArticleController::proprieteAction',  '_route' => 'sym16_simple_stock_article_propriete',);
                }

                // sym16_simple_stock_article_ajouter
                if ($pathinfo === '/SimpleStock/article/add') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ArticleController::ajouterAction',  '_route' => 'sym16_simple_stock_article_ajouter',);
                }

                // sym16_simple_stock_article_supprimer
                if ($pathinfo === '/SimpleStock/article/suppr') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ArticleController::supprimerAction',  '_route' => 'sym16_simple_stock_article_supprimer',);
                }

                // sym16_simple_stock_article_modifier
                if ($pathinfo === '/SimpleStock/article/mod') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ArticleController::modifierAction',  '_route' => 'sym16_simple_stock_article_modifier',);
                }

                // sym16_simple_stock_article_prelever
                if ($pathinfo === '/SimpleStock/article/prel') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ArticleController::preleverAction',  '_route' => 'sym16_simple_stock_article_prelever',);
                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/composant')) {
                // sym16_simple_stock_composant_lister
                if ($pathinfo === '/SimpleStock/composant/view') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ComposantController::listerAction',  '_route' => 'sym16_simple_stock_composant_lister',);
                }

                // sym16_simple_stock_composant_propriete
                if ($pathinfo === '/SimpleStock/composant/property') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ComposantController::proprieteAction',  '_route' => 'sym16_simple_stock_composant_propriete',);
                }

                // sym16_simple_stock_composant_ajouter
                if ($pathinfo === '/SimpleStock/composant/add') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ComposantController::ajouterAction',  '_route' => 'sym16_simple_stock_composant_ajouter',);
                }

                // sym16_simple_stock_composant_supprimer
                if ($pathinfo === '/SimpleStock/composant/suppr') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ComposantController::supprimerAction',  '_route' => 'sym16_simple_stock_composant_supprimer',);
                }

                // sym16_simple_stock_composant_modifier
                if ($pathinfo === '/SimpleStock/composant/mod') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ComposantController::modifierAction',  '_route' => 'sym16_simple_stock_composant_modifier',);
                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/droit')) {
                // sym16_simple_stock_droit_lister
                if ($pathinfo === '/SimpleStock/droit/view') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\DroitController::listerAction',  '_route' => 'sym16_simple_stock_droit_lister',);
                }

                // sym16_simple_stock_droit_propriete
                if ($pathinfo === '/SimpleStock/droit/property') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\DroitController::proprieteAction',  '_route' => 'sym16_simple_stock_droit_propriete',);
                }

                // sym16_simple_stock_droit_ajouter
                if ($pathinfo === '/SimpleStock/droit/add') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\DroitController::ajouterAction',  '_route' => 'sym16_simple_stock_droit_ajouter',);
                }

                // sym16_simple_stock_droit_modifier
                if ($pathinfo === '/SimpleStock/droit/mod') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\DroitController::modifierAction',  '_route' => 'sym16_simple_stock_droit_modifier',);
                }

                // sym16_simple_stock_droit_supprimer
                if ($pathinfo === '/SimpleStock/droit/del') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\DroitController::supprimerAction',  '_route' => 'sym16_simple_stock_droit_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/e')) {
                if (0 === strpos($pathinfo, '/SimpleStock/emplacement')) {
                    // sym16_simple_stock_emplacement_lister
                    if ($pathinfo === '/SimpleStock/emplacement/view') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EmplacementController::listerAction',  '_route' => 'sym16_simple_stock_emplacement_lister',);
                    }

                    // sym16_simple_stock_emplacement_propriete
                    if ($pathinfo === '/SimpleStock/emplacement/property') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EmplacementController::proprieteAction',  '_route' => 'sym16_simple_stock_emplacement_propriete',);
                    }

                    // sym16_simple_stock_emplacement_ajouter
                    if ($pathinfo === '/SimpleStock/emplacement/add') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EmplacementController::ajouterAction',  '_route' => 'sym16_simple_stock_emplacement_ajouter',);
                    }

                    // sym16_simple_stock_emplacement_supprimer
                    if ($pathinfo === '/SimpleStock/emplacement/suppr') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EmplacementController::supprimerAction',  '_route' => 'sym16_simple_stock_emplacement_supprimer',);
                    }

                    // sym16_simple_stock_emplacement_modifier
                    if ($pathinfo === '/SimpleStock/emplacement/mod') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EmplacementController::modifierAction',  '_route' => 'sym16_simple_stock_emplacement_modifier',);
                    }

                }

                if (0 === strpos($pathinfo, '/SimpleStock/entrepot')) {
                    // sym16_simple_stock_entrepot_lister
                    if ($pathinfo === '/SimpleStock/entrepot/view') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EntrepotController::listerAction',  '_route' => 'sym16_simple_stock_entrepot_lister',);
                    }

                    // sym16_simple_stock_entrepot_propriete
                    if ($pathinfo === '/SimpleStock/entrepot/property') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EntrepotController::proprieteAction',  '_route' => 'sym16_simple_stock_entrepot_propriete',);
                    }

                    // sym16_simple_stock_entrepot_ajouter
                    if ($pathinfo === '/SimpleStock/entrepot/add') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EntrepotController::ajouterAction',  '_route' => 'sym16_simple_stock_entrepot_ajouter',);
                    }

                    // sym16_simple_stock_entrepot_modifier
                    if ($pathinfo === '/SimpleStock/entrepot/mod') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EntrepotController::modifierAction',  '_route' => 'sym16_simple_stock_entrepot_modifier',);
                    }

                    // sym16_simple_stock_entrepot_supprimer
                    if ($pathinfo === '/SimpleStock/entrepot/del') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\EntrepotController::supprimerAction',  '_route' => 'sym16_simple_stock_entrepot_supprimer',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/famille')) {
                // sym16_simple_stock_famille_lister
                if ($pathinfo === '/SimpleStock/famille/view') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\FamilleController::listerAction',  '_route' => 'sym16_simple_stock_famille_lister',);
                }

                // sym16_simple_stock_famille_propriete
                if ($pathinfo === '/SimpleStock/famille/property') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\FamilleController::proprieteAction',  '_route' => 'sym16_simple_stock_famille_propriete',);
                }

                // sym16_simple_stock_famille_ajouter
                if ($pathinfo === '/SimpleStock/famille/add') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\FamilleController::ajouterAction',  '_route' => 'sym16_simple_stock_famille_ajouter',);
                }

                // sym16_simple_stock_famille_modifier
                if ($pathinfo === '/SimpleStock/famille/mod') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\FamilleController::modifierAction',  '_route' => 'sym16_simple_stock_famille_modifier',);
                }

                // sym16_simple_stock_famille_supprimer
                if ($pathinfo === '/SimpleStock/famille/del') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\FamilleController::supprimerAction',  '_route' => 'sym16_simple_stock_famille_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/m')) {
                // sym16_simple_stock_mail_confreg
                if (0 === strpos($pathinfo, '/SimpleStock/mail/confreg') && preg_match('#^/SimpleStock/mail/confreg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sym16_simple_stock_mail_confreg')), array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\MailController::confregMailAction',));
                }

                // sym16_simple_stock__lister
                if ($pathinfo === '/SimpleStock/monpremier/lister') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\MonPremierController::listerAction',  '_route' => 'sym16_simple_stock__lister',);
                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/reference')) {
                // sym16_simple_stock_reference_lister
                if ($pathinfo === '/SimpleStock/reference/view') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::listerAction',  '_route' => 'sym16_simple_stock_reference_lister',);
                }

                // sym16_simple_stock_reference_propriete
                if ($pathinfo === '/SimpleStock/reference/property') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::proprieteAction',  '_route' => 'sym16_simple_stock_reference_propriete',);
                }

                // sym16_simple_stock_reference_filtrer
                if ($pathinfo === '/SimpleStock/reference/filter') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::filtrerAction',  '_route' => 'sym16_simple_stock_reference_filtrer',);
                }

                // sym16_simple_stock_reference_ajouter
                if ($pathinfo === '/SimpleStock/reference/add') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::ajouterAction',  '_route' => 'sym16_simple_stock_reference_ajouter',);
                }

                // sym16_simple_stock_reference_modifier
                if ($pathinfo === '/SimpleStock/reference/mod') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::modifierAction',  '_route' => 'sym16_simple_stock_reference_modifier',);
                }

                // sym16_simple_stock_reference_supprimer
                if ($pathinfo === '/SimpleStock/reference/suppr') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::supprimerAction',  '_route' => 'sym16_simple_stock_reference_supprimer',);
                }

                if (0 === strpos($pathinfo, '/SimpleStock/reference/reference-ajax')) {
                    // reference_ajax
                    if ($pathinfo === '/SimpleStock/reference/reference-ajax') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::referenceAjaxAction',  '_route' => 'reference_ajax',);
                    }

                    // reference_ajax1
                    if ($pathinfo === '/SimpleStock/reference/reference-ajax1') {
                        return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\ReferenceController::referenceAjax1Action',  '_route' => 'reference_ajax1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/stocklist')) {
                // sym16_simple_stock_stocklist_lister
                if ($pathinfo === '/SimpleStock/stocklist/view') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\StocklistController::listerAction',  '_route' => 'sym16_simple_stock_stocklist_lister',);
                }

                // sym16_simple_stock_stocklist_propriete
                if ($pathinfo === '/SimpleStock/stocklist/property') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\StocklistController::proprieteAction',  '_route' => 'sym16_simple_stock_stocklist_propriete',);
                }

            }

            if (0 === strpos($pathinfo, '/SimpleStock/utilisateur')) {
                // sym16_simple_stock_utilisateur_lister
                if ($pathinfo === '/SimpleStock/utilisateur/view') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\UtilisateurController::listerAction',  '_route' => 'sym16_simple_stock_utilisateur_lister',);
                }

                // sym16_simple_stock_utilisateur_propriete
                if ($pathinfo === '/SimpleStock/utilisateur/property') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\UtilisateurController::proprieteAction',  '_route' => 'sym16_simple_stock_utilisateur_propriete',);
                }

                // sym16_simple_stock_utilisateur_ajouter
                if ($pathinfo === '/SimpleStock/utilisateur/add') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\UtilisateurController::ajouterAction',  '_route' => 'sym16_simple_stock_utilisateur_ajouter',);
                }

                // sym16_simple_stock_utilisateur_sinscrire
                if ($pathinfo === '/SimpleStock/utilisateur/inscr') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\UtilisateurController::sinscrireAction',  '_route' => 'sym16_simple_stock_utilisateur_sinscrire',);
                }

                // sym16_simple_stock_utilisateur_supprimer
                if ($pathinfo === '/SimpleStock/utilisateur/del') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\UtilisateurController::supprimerAction',  '_route' => 'sym16_simple_stock_utilisateur_supprimer',);
                }

                // sym16_simple_stock_utilisateur_modifier
                if ($pathinfo === '/SimpleStock/utilisateur/mod') {
                    return array (  '_controller' => 'SYM16\\SimpleStockBundle\\Controller\\UtilisateurController::modifierAction',  '_route' => 'sym16_simple_stock_utilisateur_modifier',);
                }

            }

            // login
            if ($pathinfo === '/SimpleStock/login') {
                return array (  '_controller' => 'SYM16\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
