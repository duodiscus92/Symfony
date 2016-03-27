<?php

/* SYM16SimpleStockBundle:Common:inforegistrationdone.html.twig */
class __TwigTemplate_27f49ef1a7af8ae036f63f279e22ff95f5aad8d93b3ba2950999e267a5c272f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16SimpleStockBundle:Common:inforegistrationdone.html.twig", 1);
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

    // line 3
    public function block_BLOCA($context, array $blocks = array())
    {
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3dfa93_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3dfa93_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e3dfa93_jquery-1.12.0_1.js");
            // line 5
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
        // line 7
        echo "
";
        // line 9
        echo "<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header modal-header-warning\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-dismiss=\"modal\">×</button>
                <h4 class=\"modal-title\">Inscription faite !!!!</h4>
            </div>
            <div class=\"modal-body\">
\t\t<p>Votre inscription a été prise en compte<p>
                <p>Un mail de confirmation vous a été envoyé<p>
\t\t<p>Provisoirement vous avez le statut \"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["statut"]) ? $context["statut"] : null), "html", null, true);
        echo "\"<p>
\t\t<p>Patientez: un gestionnaire vous attribura bientôt un autre statut<p>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 24
        echo "                <button class=\"btn btn-primary\" id=\"confirmModalNo\" href=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["homepath"]) ? $context["homepath"] : null));
        echo "\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> OK</button>
            </div>
        </div>
    </div>
</div>
";
        // line 30
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {

\t\$(\"#confirmModal\").modal(\"show\");

        \$(\"#confirmModalNo\").click(function(e) {
            window.location.href =  \$(this).attr(\"href\");
            //(\"#confirmModal\").modal(\"hide\");
        });

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle:Common:inforegistrationdone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  71 => 24,  64 => 19,  52 => 9,  49 => 7,  35 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SYM16SimpleStockBundle::layout.html.twig' %}*/
/* */
/* {% block BLOCA %}*/
/* {% javascripts '@SYM16SimpleStockBundle/Resources/public/js/jquery-1.12.0.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* */
/* {#=============== Code HTML de la fenêtre modale ======================#}*/
/* <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header modal-header-warning">*/
/*                 <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>*/
/*                 <h4 class="modal-title">Inscription faite !!!!</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/* 		<p>Votre inscription a été prise en compte<p>*/
/*                 <p>Un mail de confirmation vous a été envoyé<p>*/
/* 		<p>Provisoirement vous avez le statut "{{statut}}"<p>*/
/* 		<p>Patientez: un gestionnaire vous attribura bientôt un autre statut<p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 {#<button class="btn btn-primary" id="confirmModalYes" type="button"><i class="icon icon-check icon-lg"></i> Supprimer</button>#}*/
/*                 <button class="btn btn-primary" id="confirmModalNo" href="{{ path(homepath) }}" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> OK</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {#========== Java Script pour gestion de la fenêtre modale =============#}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/* */
/* 	$("#confirmModal").modal("show");*/
/* */
/*         $("#confirmModalNo").click(function(e) {*/
/*             window.location.href =  $(this).attr("href");*/
/*             //("#confirmModal").modal("hide");*/
/*         });*/
/* */
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* */
