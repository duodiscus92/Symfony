<?php

/* ::stocklayout.html.twig */
class __TwigTemplate_4f662f49772d701239a932152eb5d4a2e6b709e5c50264bcc878b0d15b4e67d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'HEADER' => array($this, 'block_HEADER'),
            'RACCOURCI' => array($this, 'block_RACCOURCI'),
            'MENU0' => array($this, 'block_MENU0'),
            'BLOCA' => array($this, 'block_BLOCA'),
            'FOOTER' => array($this, 'block_FOOTER'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      ";
        // line 17
        $this->displayBlock('HEADER', $context, $blocks);
        // line 20
        echo "      </p>
      ";
        // line 21
        $this->displayBlock('RACCOURCI', $context, $blocks);
        // line 28
        echo "    </div>

    <ul class=\"nav nav-pills\">
    ";
        // line 31
        $this->displayBlock('MENU0', $context, $blocks);
        // line 37
        echo "    </ul>

    <div class=\"row\">
      <div id=\"content\" class=\"col-md-12\">
        ";
        // line 41
        $this->displayBlock('BLOCA', $context, $blocks);
        // line 43
        echo "      </div>
    </div>

    <footer>
    ";
        // line 47
        $this->displayBlock('FOOTER', $context, $blocks);
        // line 50
        echo "    </footer>
  </div>

  ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Application Web";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  ";
    }

    // line 17
    public function block_HEADER($context, array $blocks = array())
    {
        // line 18
        echo "      <h1>Simple Stock !</h1>
      ";
    }

    // line 21
    public function block_RACCOURCI($context, array $blocks = array())
    {
        // line 22
        echo "      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"#\">
          Bouton pour action fréquente
        </a>
      </p>
      ";
    }

    // line 31
    public function block_MENU0($context, array $blocks = array())
    {
        // line 32
        echo "\t<li class=\"active\"><a href=\"#\">Home</a></li>
\t<li><a href=\"#\">Menu 1</a></li>
\t<li><a href=\"#\">Menu 2</a></li>
\t<li><a href=\"#\">Menu 3</a></li>
    ";
    }

    // line 41
    public function block_BLOCA($context, array $blocks = array())
    {
        // line 42
        echo "        ";
    }

    // line 47
    public function block_FOOTER($context, array $blocks = array())
    {
        // line 48
        echo "      <p>Ce projet est propulsé par Symfony2.</p>
    ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::stocklayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 55,  161 => 54,  158 => 53,  153 => 48,  150 => 47,  146 => 42,  143 => 41,  135 => 32,  132 => 31,  123 => 22,  120 => 21,  115 => 18,  112 => 17,  106 => 10,  101 => 9,  98 => 8,  92 => 6,  85 => 58,  83 => 53,  78 => 50,  76 => 47,  70 => 43,  68 => 41,  62 => 37,  60 => 31,  55 => 28,  53 => 21,  50 => 20,  48 => 17,  41 => 12,  39 => 8,  34 => 6,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <title>{% block title %}Application Web{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />*/
/*     <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       {% block HEADER %}*/
/*       <h1>Simple Stock !</h1>*/
/*       {% endblock %}*/
/*       </p>*/
/*       {% block RACCOURCI %}*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="#">*/
/*           Bouton pour action fréquente*/
/*         </a>*/
/*       </p>*/
/*       {% endblock %}*/
/*     </div>*/
/* */
/*     <ul class="nav nav-pills">*/
/*     {% block MENU0 %}*/
/* 	<li class="active"><a href="#">Home</a></li>*/
/* 	<li><a href="#">Menu 1</a></li>*/
/* 	<li><a href="#">Menu 2</a></li>*/
/* 	<li><a href="#">Menu 3</a></li>*/
/*     {% endblock %}*/
/*     </ul>*/
/* */
/*     <div class="row">*/
/*       <div id="content" class="col-md-12">*/
/*         {% block BLOCA %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <footer>*/
/*     {% block FOOTER %}*/
/*       <p>Ce projet est propulsé par Symfony2.</p>*/
/*     {% endblock %}*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
