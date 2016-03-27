<?php

/* SYM16SimpleStockBundle:Forms:simpleform.html.twig */
class __TwigTemplate_6866a5bc34335c3b5b23294b3405535e292984b3841c16842f3c7070638ec1c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16SimpleStockBundle:Forms:simpleform.html.twig", 2);
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
        // line 6
        echo "<h3>";
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : null), "html", null, true);
        echo "<h3>
<div class=\"well\">
";
        // line 9
        echo "    <form method = \"post\" >
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    \t<input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle:Forms:simpleform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  37 => 9,  31 => 6,  28 => 4,  11 => 2,);
    }
}
/* {# template afficher un formulaire #}*/
/* {% extends 'SYM16SimpleStockBundle::layout.html.twig' %}*/
/* */
/* {% block BLOCA %}*/
/* {#<h3>Ajouter un utilisateur<h3>#}*/
/* <h3>{{titre}}<h3>*/
/* <div class="well">*/
/* {#    <form method = "post" {{ form_enctype(form) }}> #}*/
/*     <form method = "post" >*/
/* 	{{ form_widget(form) }}*/
/*     	<input type="submit" class="btn btn-primary" />*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
