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
        return array (  33 => 16,  22 => 12,  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  776 => 187,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  690 => 151,  687 => 150,  681 => 148,  678 => 147,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  662 => 137,  661 => 136,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  609 => 117,  604 => 115,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  523 => 93,  521 => 92,  516 => 91,  513 => 90,  495 => 89,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  467 => 77,  462 => 76,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  393 => 52,  387 => 50,  382 => 48,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  350 => 35,  345 => 33,  342 => 32,  334 => 27,  323 => 24,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  278 => 8,  272 => 6,  269 => 5,  267 => 4,  264 => 3,  260 => 332,  258 => 331,  256 => 330,  254 => 329,  248 => 326,  244 => 324,  238 => 321,  236 => 315,  233 => 314,  231 => 308,  226 => 300,  223 => 299,  220 => 297,  215 => 287,  213 => 272,  208 => 266,  205 => 265,  202 => 263,  195 => 250,  192 => 249,  179 => 222,  176 => 220,  171 => 213,  166 => 206,  161 => 199,  159 => 193,  156 => 192,  154 => 186,  141 => 172,  139 => 166,  136 => 165,  129 => 145,  126 => 144,  124 => 129,  121 => 128,  116 => 113,  114 => 108,  106 => 101,  99 => 68,  96 => 67,  94 => 57,  91 => 56,  84 => 41,  66 => 12,  64 => 3,  61 => 2,  26 => 2,  335 => 94,  331 => 92,  326 => 90,  312 => 89,  306 => 87,  303 => 86,  286 => 85,  283 => 84,  276 => 81,  271 => 79,  255 => 69,  250 => 327,  245 => 66,  243 => 65,  240 => 64,  218 => 288,  211 => 53,  206 => 51,  190 => 240,  187 => 239,  184 => 237,  181 => 47,  175 => 45,  172 => 44,  167 => 42,  164 => 200,  152 => 35,  147 => 33,  144 => 173,  120 => 21,  115 => 20,  112 => 19,  109 => 102,  103 => 16,  101 => 86,  93 => 14,  80 => 9,  77 => 8,  73 => 7,  68 => 30,  65 => 5,  56 => 78,  53 => 77,  50 => 25,  42 => 8,  40 => 7,  32 => 32,  27 => 14,  24 => 13,  51 => 21,  45 => 9,  34 => 38,  28 => 3,  52 => 20,  47 => 25,  37 => 40,  31 => 4,  29 => 31,  20 => 1,  23 => 12,  19 => 11,  638 => 211,  633 => 209,  627 => 207,  625 => 206,  619 => 202,  610 => 199,  606 => 116,  602 => 197,  595 => 196,  591 => 195,  586 => 193,  579 => 191,  571 => 189,  568 => 188,  565 => 187,  560 => 106,  549 => 104,  545 => 103,  538 => 99,  534 => 98,  529 => 97,  526 => 96,  514 => 85,  511 => 84,  507 => 108,  505 => 96,  501 => 94,  499 => 84,  496 => 83,  493 => 88,  489 => 177,  482 => 172,  474 => 170,  472 => 169,  469 => 78,  461 => 166,  459 => 75,  456 => 74,  450 => 72,  442 => 161,  434 => 159,  431 => 158,  426 => 157,  423 => 155,  415 => 153,  413 => 152,  410 => 151,  402 => 57,  400 => 148,  394 => 145,  391 => 144,  389 => 143,  384 => 49,  379 => 47,  370 => 134,  361 => 133,  357 => 132,  353 => 36,  347 => 34,  343 => 128,  341 => 127,  332 => 123,  329 => 26,  324 => 119,  310 => 118,  301 => 117,  284 => 116,  279 => 82,  277 => 114,  273 => 80,  268 => 78,  265 => 109,  262 => 82,  259 => 70,  257 => 80,  252 => 328,  249 => 77,  246 => 325,  241 => 323,  234 => 71,  228 => 307,  222 => 68,  219 => 67,  217 => 66,  214 => 65,  210 => 271,  207 => 63,  203 => 62,  200 => 260,  197 => 259,  191 => 56,  185 => 55,  182 => 223,  178 => 46,  174 => 214,  169 => 207,  163 => 49,  151 => 185,  149 => 179,  146 => 178,  143 => 45,  140 => 44,  137 => 43,  134 => 158,  131 => 157,  128 => 24,  125 => 39,  122 => 22,  119 => 114,  117 => 36,  111 => 107,  108 => 31,  104 => 87,  100 => 28,  97 => 27,  89 => 47,  86 => 46,  81 => 40,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  63 => 14,  60 => 3,  57 => 27,  54 => 26,  48 => 64,  43 => 21,  41 => 23,  38 => 18,  35 => 5,);
    }
}
