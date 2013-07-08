<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_b5298052203314c55c103798a4eea343 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 24,  160 => 66,  156 => 65,  148 => 63,  97 => 44,  23 => 3,  87 => 25,  40 => 19,  190 => 60,  177 => 56,  62 => 19,  173 => 70,  169 => 54,  166 => 68,  134 => 41,  86 => 39,  137 => 60,  206 => 8,  185 => 59,  124 => 38,  90 => 40,  193 => 6,  164 => 67,  161 => 78,  129 => 55,  69 => 14,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 47,  77 => 28,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 26,  113 => 34,  158 => 66,  110 => 33,  99 => 29,  82 => 37,  65 => 30,  53 => 25,  20 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 18,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 28,  67 => 31,  61 => 18,  47 => 17,  105 => 59,  93 => 43,  76 => 34,  72 => 20,  68 => 30,  27 => 14,  91 => 27,  84 => 19,  94 => 38,  88 => 40,  79 => 16,  59 => 27,  21 => 2,  44 => 16,  31 => 15,  28 => 14,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 54,  121 => 52,  118 => 51,  114 => 61,  104 => 30,  100 => 45,  78 => 35,  75 => 36,  71 => 17,  58 => 18,  34 => 4,  26 => 11,  24 => 13,  25 => 12,  19 => 11,  70 => 32,  63 => 16,  46 => 9,  22 => 12,  163 => 51,  155 => 69,  152 => 64,  149 => 64,  145 => 62,  139 => 61,  131 => 57,  123 => 50,  120 => 52,  115 => 50,  106 => 7,  101 => 58,  96 => 28,  83 => 21,  80 => 29,  74 => 15,  66 => 15,  55 => 12,  52 => 20,  50 => 25,  43 => 21,  41 => 19,  37 => 18,  35 => 13,  32 => 16,  29 => 12,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 57,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 48,  108 => 60,  102 => 41,  98 => 42,  95 => 44,  92 => 27,  89 => 22,  85 => 38,  81 => 24,  73 => 18,  64 => 13,  60 => 23,  57 => 27,  54 => 26,  51 => 19,  48 => 11,  45 => 8,  42 => 7,  39 => 7,  36 => 16,  33 => 16,  30 => 1,);
    }
}
