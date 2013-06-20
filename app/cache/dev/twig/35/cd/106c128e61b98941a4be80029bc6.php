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
        return array (  201 => 8,  196 => 7,  193 => 6,  184 => 84,  178 => 83,  170 => 81,  164 => 79,  161 => 78,  157 => 77,  151 => 73,  142 => 69,  133 => 65,  129 => 64,  125 => 63,  121 => 62,  117 => 61,  111 => 60,  107 => 59,  104 => 58,  99 => 57,  78 => 39,  69 => 33,  56 => 23,  50 => 20,  42 => 15,  38 => 14,  32 => 10,  30 => 6,  25 => 4,  20 => 1,);
    }
}
