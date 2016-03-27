<?php

/* SYM16SimpleStockBundle:Mails:registration.html.twig */
class __TwigTemplate_3d54ec52681c78a8f21b8690d21f3b26f8aa4fe77678d2c2900b3c98d2148f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "Confirmation de votre inscription sur SimpleStock!
";
        // line 5
        echo "Chèr(e) ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo "

Félicitations, votre inscription a été prise en compte.
Vous pouvez dès à présent ouvir une session sur SimpleStock avec des droits limités à votre statut.
Votre statut provisoire est \"TEMPORAIRE\".
Il sera prochainement modifié et vous en serez avisé par mail.

A bientôt.

Mail généré automatiqueent par SimpleStock - Ne pas répondre à ce mail.
";
    }

    public function getTemplateName()
    {
        return "SYM16SimpleStockBundle:Mails:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 2,);
    }
}
/* {# app/Resources/views/Emails/registration.html.twig #}*/
/* Confirmation de votre inscription sur SimpleStock!*/
/* {# example, assuming you have a route named "login" #}*/
/* {#To login, go to: <a href="{{ url('login') }}">...</a>.#}*/
/* Chèr(e) {{prenom}} {{nom}}*/
/* */
/* Félicitations, votre inscription a été prise en compte.*/
/* Vous pouvez dès à présent ouvir une session sur SimpleStock avec des droits limités à votre statut.*/
/* Votre statut provisoire est "TEMPORAIRE".*/
/* Il sera prochainement modifié et vous en serez avisé par mail.*/
/* */
/* A bientôt.*/
/* */
/* Mail généré automatiqueent par SimpleStock - Ne pas répondre à ce mail.*/
/* */
