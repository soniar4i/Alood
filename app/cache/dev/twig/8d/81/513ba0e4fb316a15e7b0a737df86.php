<?php

/* IdeupSimplePaginatorBundle:Paginator:simple-paginator-list-view.html.twig */
class __TwigTemplate_8d81513ba0e4fb316a15e7b0a737df86 extends Twig_Template
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
        // line 1
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, (isset($context["container_class"]) ? $context["container_class"] : $this->getContext($context, "container_class")), "html", null, true);
        echo "\">
    <!-- FIRST -->
    ";
        // line 3
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) > 1)) {
            // line 4
            echo "        ";
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["firstPage"]) ? $context["firstPage"] : $this->getContext($context, "firstPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 5
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["firstEnabledClass"]) ? $context["firstEnabledClass"] : $this->getContext($context, "firstEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["firstPageText"]) ? $context["firstPageText"] : $this->getContext($context, "firstPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 9
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["firstDisabledClass"]) ? $context["firstDisabledClass"] : $this->getContext($context, "firstDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["firstPageText"]) ? $context["firstPageText"] : $this->getContext($context, "firstPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 13
        echo "
    <!-- PREVIOUS -->
    ";
        // line 15
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) > 1)) {
            echo "   
        ";
            // line 16
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["previousPage"]) ? $context["previousPage"] : $this->getContext($context, "previousPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 17
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["previousEnabledClass"]) ? $context["previousEnabledClass"] : $this->getContext($context, "previousEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["previousPageText"]) ? $context["previousPageText"] : $this->getContext($context, "previousPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 21
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["previousDisabledClass"]) ? $context["previousDisabledClass"] : $this->getContext($context, "previousDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["previousPageText"]) ? $context["previousPageText"] : $this->getContext($context, "previousPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 25
        echo "
    <!-- NUMBERS -->
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["minPage"]) ? $context["minPage"] : $this->getContext($context, "minPage")), (isset($context["maxPage"]) ? $context["maxPage"] : $this->getContext($context, "maxPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 28
            echo "        ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                // line 29
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, (isset($context["currentClass"]) ? $context["currentClass"] : $this->getContext($context, "currentClass")), "html", null, true);
                echo "\">
                ";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "
            </li>
        ";
            } else {
                // line 33
                echo "            ";
                $context["rParams"] = twig_array_merge(array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
                // line 34
                echo "            <li>
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <!-- NEXT -->
    ";
        // line 41
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) < (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")))) {
            // line 42
            echo "        ";
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 43
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["nextEnabledClass"]) ? $context["nextEnabledClass"] : $this->getContext($context, "nextEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nextPageText"]) ? $context["nextPageText"] : $this->getContext($context, "nextPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 47
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["nextDisabledClass"]) ? $context["nextDisabledClass"] : $this->getContext($context, "nextDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["nextPageText"]) ? $context["nextPageText"] : $this->getContext($context, "nextPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 51
        echo "
    <!-- LAST -->
    ";
        // line 53
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) < (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")))) {
            // line 54
            echo "        ";
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 55
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["lastEnabledClass"]) ? $context["lastEnabledClass"] : $this->getContext($context, "lastEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["lastPageText"]) ? $context["lastPageText"] : $this->getContext($context, "lastPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 59
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["lastDisabledClass"]) ? $context["lastDisabledClass"] : $this->getContext($context, "lastDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["lastPageText"]) ? $context["lastPageText"] : $this->getContext($context, "lastPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 63
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "IdeupSimplePaginatorBundle:Paginator:simple-paginator-list-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 60,  177 => 56,  62 => 16,  173 => 71,  169 => 54,  166 => 68,  134 => 41,  86 => 39,  137 => 69,  206 => 8,  185 => 59,  124 => 38,  90 => 40,  193 => 6,  164 => 79,  161 => 78,  129 => 64,  69 => 18,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 61,  77 => 21,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 23,  113 => 34,  158 => 66,  110 => 33,  99 => 29,  82 => 22,  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 14,  144 => 44,  141 => 60,  135 => 47,  126 => 64,  109 => 41,  103 => 44,  67 => 15,  61 => 13,  47 => 19,  105 => 59,  93 => 28,  76 => 35,  72 => 14,  68 => 32,  27 => 4,  91 => 39,  84 => 37,  94 => 41,  88 => 25,  79 => 37,  59 => 25,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 53,  121 => 62,  118 => 51,  114 => 61,  104 => 30,  100 => 44,  78 => 39,  75 => 36,  71 => 31,  58 => 15,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 33,  63 => 24,  46 => 7,  22 => 2,  163 => 51,  155 => 69,  152 => 47,  149 => 64,  145 => 46,  139 => 43,  131 => 57,  123 => 57,  120 => 52,  115 => 39,  106 => 7,  101 => 58,  96 => 28,  83 => 38,  80 => 36,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 20,  43 => 9,  41 => 7,  37 => 8,  35 => 6,  32 => 10,  29 => 9,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 65,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 49,  108 => 60,  102 => 43,  98 => 42,  95 => 44,  92 => 27,  89 => 41,  85 => 38,  81 => 37,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 13,  51 => 14,  48 => 10,  45 => 8,  42 => 15,  39 => 14,  36 => 5,  33 => 4,  30 => 5,);
    }
}
