<?php

/* ExtranetBundle:Default:home.html.twig */
class __TwigTemplate_35cd106c128e61b98941a4be80029bc6 extends Twig_Template
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
\t<title>Panel de control | ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
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
\t\t\t<section id=\"extranet_ppal\">
\t\t\t\t<h2>Bienvenido al panel de control de Alood</h2>
\t\t\t\t
\t\t\t\t<div class=\"n_prod\">
\t\t\t\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto"), "html", null, true);
        echo "\" class=\"button_new\">
\t\t\t\t\t\t<em></em>
\t\t\t\t\t\tNuevo producto
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"buscar\">
\t\t\t\t\t<form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buscarProd"), "html", null, true);
        echo "\" method=\"post\" class=\"button_search\">
\t\t\t\t\t\t<p>Buscar por código de barras:</p>
\t\t\t\t\t\t<input type=\"text\" name=\"barcode\" id=\"search_barcode\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<table style=\"empty-cells: show; width: 100%\" class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:15%\">Código de barras</th>
\t\t\t\t\t\t\t<th style=\"width:25%\">Nombre</th>
\t\t\t\t\t\t\t<th style=\"width:15%\">Última revisión</th>
\t\t\t\t\t\t\t<th style=\"width:10%\">Calorias</th>
\t\t\t\t\t\t\t<th style=\"width:10%\">Puntos</th>
\t\t\t\t\t\t\t<th style=\"width:15%\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entities"]) {
            // line 58
            echo "\t\t\t\t\t<tr> 
\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "barcode"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("verProducto", array("id" => $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "barcode"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "nombre"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Revision"), "Y-m-d"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "calorias"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "puntos"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarProducto", array("id" => $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "barcode"))), "html", null, true);
            echo "\">Modificar</a> | 
\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarProducto", array("id" => $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "barcode"))), "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"center\" colspan=\"6\">No tienes ningun producto en nuestro sistema</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div style=\"clear:both\"></div>
\t\t\t<ul class=\"paginador\">
\t\t\t    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "minPageInRange"), $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "maxPageInRange")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 78
            echo "\t\t\t        ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "currentPage"))) {
                // line 79
                echo "\t\t\t            <li class=\"actual\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</li>
\t\t\t        ";
            } else {
                // line 81
                echo "\t\t\t            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extranet", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
\t\t\t        ";
            }
            // line 83
            echo "\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t  </ul>
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
        return "ExtranetBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 6,  164 => 79,  161 => 78,  129 => 64,  69 => 33,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 73,  117 => 61,  77 => 36,  183 => 8,  175 => 6,  140 => 65,  112 => 52,  56 => 23,  113 => 6,  158 => 7,  110 => 50,  99 => 57,  82 => 39,  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 81,  168 => 60,  146 => 58,  142 => 69,  128 => 50,  125 => 63,  107 => 59,  38 => 14,  144 => 66,  141 => 60,  135 => 47,  126 => 45,  109 => 41,  103 => 6,  67 => 15,  61 => 13,  47 => 19,  105 => 59,  93 => 28,  76 => 16,  72 => 14,  68 => 32,  27 => 6,  91 => 39,  84 => 28,  94 => 39,  88 => 45,  79 => 37,  59 => 25,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 8,  196 => 7,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 55,  121 => 62,  118 => 44,  114 => 51,  104 => 58,  100 => 44,  78 => 39,  75 => 36,  71 => 31,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 4,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 6,  152 => 49,  149 => 64,  145 => 46,  139 => 55,  131 => 57,  123 => 57,  120 => 6,  115 => 39,  106 => 7,  101 => 32,  96 => 21,  83 => 38,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 20,  43 => 7,  41 => 7,  37 => 8,  35 => 13,  32 => 10,  29 => 9,  184 => 84,  178 => 83,  171 => 74,  165 => 58,  162 => 78,  157 => 77,  153 => 65,  151 => 73,  143 => 54,  138 => 51,  136 => 58,  133 => 65,  130 => 47,  122 => 43,  119 => 42,  116 => 53,  111 => 60,  108 => 46,  102 => 30,  98 => 31,  95 => 44,  92 => 6,  89 => 41,  85 => 38,  81 => 37,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 15,  39 => 14,  36 => 5,  33 => 4,  30 => 6,);
    }
}
