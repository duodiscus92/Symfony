<?php

/* SYM16SimpleStockBundle:Common:alertaccessdenied.html.twig */
class __TwigTemplate_8f0a962a24ed3304e4f765049dce58d24ecdb8a14f4b1f75fac5ff268e25aec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16SimpleStockBundle:Common:alertaccessdenied.html.twig", 1);
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
                <h4 class=\"modal-title\">Accès refusé !!!!</h4>
            </div>
            <div class=\"modal-body\">
\t\t<p>Action réservée aux utilisateurs ayant des droits suffisants<p>
\t\t<p>Vous devez posséder au moins le droit ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["statut"]) ? $context["statut"] : null), "html", null, true);
        echo "<p>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 22
        echo "                <button class=\"btn btn-primary\" id=\"confirmModalNo\" href=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["homepath"]) ? $context["homepath"] : null));
        echo "\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> OK</button>
            </div>
        </div>
    </div>
</div>
";
        // line 28
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
        return "SYM16SimpleStockBundle:Common:alertaccessdenied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  69 => 22,  63 => 18,  52 => 9,  49 => 7,  35 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/*                 <h4 class="modal-title">Accès refusé !!!!</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/* 		<p>Action réservée aux utilisateurs ayant des droits suffisants<p>*/
/* 		<p>Vous devez posséder au moins le droit {{statut}}<p>*/
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
