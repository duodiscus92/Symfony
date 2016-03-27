<?php

/* SYM16UserBundle:Security:login.html.twig */
class __TwigTemplate_371ec4080aeb3371e8082e84fc0e227023189c7f8ff8ea1e65323f582671363b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("SYM16SimpleStockBundle::layout.html.twig", "SYM16UserBundle:Security:login.html.twig", 4);
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

    // line 5
    public function block_BLOCA($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"well\">
  ";
        // line 8
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "
  ";
        // line 13
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "SYM16UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  46 => 13,  43 => 11,  37 => 9,  34 => 8,  31 => 6,  28 => 5,  11 => 4,);
    }
}
/* {# src/SYM16/UserBundle/Resources/views/Security/login.html.twig #}*/
/* */
/* {#{% extends "SimpleStockBundle:Acceuil:index.html.twig" %}#}*/
/* {% extends "SYM16SimpleStockBundle::layout.html.twig" %}*/
/* {% block BLOCA %}*/
/* <div class="well">*/
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* {#*/
/* {% block id_statut %}*/
/* {% endblock %}*/
/* {% block menu0 %}*/
/* {% endblock %}*/
/* #}*/
/* */
