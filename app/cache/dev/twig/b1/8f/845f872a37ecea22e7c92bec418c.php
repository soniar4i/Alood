<?php

/* ExtranetBundle:Default:verprod.html.twig */
class __TwigTemplate_b18f845f872a37ecea22e7c92bec418c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<title>Ver producto | ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
        echo "</title>
\t<meta charset=\"utf-8\">
\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
\t<div class=\"contenedor\">
\t\t<header>
\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extranet"), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/alood_logo.png"), "html", null, true);
        echo "\"/>
\t\t\t</a>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarPerfil", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario"))), "html", null, true);
        echo "\">Editar perfil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"no-space\">
\t\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\"> <p class=\"button1 green\">Logout</p></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t<article>
\t\t\t<section id=\"ver_prod\">
\t\t\t\t<h3>Ver producto</h3>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t";
        // line 32
        if ($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "foto")) {
            // line 33
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "foto"))), "html", null, true);
            echo "\"/>
\t\t\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/no_img.jpg"), "html", null, true);
            echo "\">
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h2>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
        echo "</h2>
\t\t\t\t\t<p>Código de barras: ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "barcode"), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>Fecha de última revisión: ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "revision"), "Y-m-d"), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>Calorías: ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "calorias"), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>Estrellas: ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "puntos"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t<div class=\"alergeno_prod\">
\t\t\t\t\t<h3>Alergenos</h3>
\t\t\t\t\t<ul id=\"prod_alerg\">
\t\t\t\t\t\t";
        // line 49
        if ((!twig_test_empty($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "alergenos")))) {
            // line 50
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "alergenos"));
            foreach ($context['_seq'] as $context["_key"] => $context["alergeno"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alergeno"]) ? $context["alergeno"] : $this->getContext($context, "alergeno")), "nombre"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alergeno'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t<li>Tu producto está libre de alergenos</li>
\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t<div class=\"alergeno_prod\">
\t\t\t\t\t<h3>Comentarios</h3>
\t\t\t\t\t<ul id=\"prod_comen\">
\t\t\t\t\t\t";
        // line 62
        if ((!twig_test_empty($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "comentarios")))) {
            // line 63
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "comentarios"));
            foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
                // line 64
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "usuario"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "usuario"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cometario"]) ? $context["cometario"] : $this->getContext($context, "cometario")), "puntuacion"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t<li>Aún no hay comentarios para tu producto</li>
\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</section>
\t\t</article>
\t</div>
</body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/portada.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/extranet/css/extranet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t";
    }

    public function getTemplateName()
    {
        return "ExtranetBundle:Default:verprod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 71,  169 => 69,  166 => 68,  134 => 56,  86 => 39,  137 => 69,  206 => 8,  185 => 82,  124 => 53,  90 => 40,  193 => 6,  164 => 79,  161 => 78,  129 => 64,  69 => 33,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 73,  117 => 61,  77 => 36,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 23,  113 => 50,  158 => 66,  110 => 50,  99 => 57,  82 => 37,  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 14,  144 => 63,  141 => 60,  135 => 47,  126 => 64,  109 => 41,  103 => 44,  67 => 15,  61 => 13,  47 => 19,  105 => 59,  93 => 28,  76 => 35,  72 => 14,  68 => 32,  27 => 6,  91 => 39,  84 => 37,  94 => 41,  88 => 45,  79 => 37,  59 => 25,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 7,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 67,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 53,  121 => 62,  118 => 51,  114 => 61,  104 => 59,  100 => 44,  78 => 39,  75 => 36,  71 => 31,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 4,  19 => 1,  70 => 33,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 69,  152 => 49,  149 => 64,  145 => 46,  139 => 55,  131 => 57,  123 => 57,  120 => 52,  115 => 39,  106 => 7,  101 => 58,  96 => 21,  83 => 38,  80 => 36,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 20,  43 => 7,  41 => 7,  37 => 8,  35 => 13,  32 => 10,  29 => 9,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 7,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 59,  133 => 65,  130 => 54,  122 => 63,  119 => 42,  116 => 51,  111 => 49,  108 => 60,  102 => 43,  98 => 42,  95 => 44,  92 => 6,  89 => 41,  85 => 38,  81 => 37,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 15,  39 => 14,  36 => 5,  33 => 4,  30 => 6,);
    }
}
