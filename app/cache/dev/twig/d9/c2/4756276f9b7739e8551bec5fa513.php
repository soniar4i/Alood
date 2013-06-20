<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_d9c24756276f9b7739e8551bec5fa513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 154,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  323 => 124,  319 => 123,  315 => 122,  288 => 109,  270 => 100,  261 => 96,  239 => 86,  231 => 83,  221 => 78,  215 => 76,  202 => 72,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  604 => 368,  597 => 361,  593 => 360,  587 => 357,  583 => 356,  577 => 353,  567 => 346,  559 => 341,  535 => 326,  531 => 324,  527 => 320,  504 => 306,  492 => 299,  485 => 292,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  390 => 155,  342 => 134,  281 => 167,  248 => 89,  150 => 66,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  617 => 189,  614 => 188,  608 => 370,  603 => 184,  600 => 183,  576 => 149,  563 => 146,  558 => 145,  542 => 330,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  457 => 47,  448 => 44,  425 => 36,  411 => 31,  403 => 28,  393 => 156,  382 => 183,  369 => 178,  360 => 140,  355 => 171,  352 => 170,  338 => 169,  305 => 182,  299 => 160,  291 => 156,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  235 => 129,  227 => 127,  179 => 63,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 169,  555 => 144,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  480 => 290,  477 => 147,  475 => 86,  462 => 123,  453 => 46,  437 => 138,  435 => 270,  432 => 136,  421 => 35,  416 => 129,  405 => 127,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  337 => 96,  318 => 90,  302 => 116,  298 => 84,  289 => 81,  274 => 77,  254 => 92,  247 => 66,  236 => 63,  233 => 84,  335 => 94,  331 => 94,  326 => 90,  312 => 88,  306 => 87,  303 => 162,  286 => 80,  283 => 107,  276 => 165,  271 => 163,  250 => 67,  243 => 87,  218 => 57,  638 => 211,  633 => 209,  627 => 185,  625 => 192,  619 => 190,  610 => 199,  606 => 185,  602 => 197,  595 => 156,  591 => 153,  586 => 193,  579 => 191,  571 => 148,  568 => 188,  565 => 187,  560 => 168,  549 => 334,  545 => 109,  538 => 165,  534 => 105,  529 => 321,  526 => 96,  514 => 85,  511 => 310,  507 => 108,  505 => 97,  501 => 94,  499 => 84,  496 => 301,  493 => 82,  489 => 177,  482 => 149,  474 => 170,  472 => 287,  469 => 168,  461 => 48,  459 => 165,  450 => 119,  442 => 161,  431 => 39,  423 => 132,  415 => 32,  413 => 152,  410 => 253,  402 => 126,  400 => 248,  394 => 242,  391 => 216,  389 => 143,  384 => 237,  379 => 236,  370 => 229,  357 => 132,  353 => 138,  347 => 130,  343 => 98,  341 => 127,  332 => 167,  329 => 127,  324 => 92,  310 => 184,  301 => 117,  279 => 82,  273 => 80,  268 => 78,  265 => 109,  262 => 157,  259 => 70,  249 => 77,  241 => 149,  210 => 64,  203 => 128,  200 => 55,  197 => 54,  174 => 77,  272 => 139,  269 => 138,  264 => 98,  260 => 71,  255 => 69,  252 => 136,  245 => 66,  238 => 64,  226 => 81,  220 => 59,  211 => 53,  208 => 73,  199 => 52,  188 => 48,  182 => 82,  12 => 45,  49 => 20,  160 => 66,  156 => 55,  148 => 65,  97 => 44,  23 => 18,  87 => 59,  40 => 41,  190 => 69,  177 => 42,  62 => 30,  173 => 110,  169 => 43,  166 => 90,  134 => 26,  86 => 40,  137 => 88,  206 => 51,  185 => 67,  124 => 44,  90 => 35,  193 => 120,  164 => 72,  161 => 58,  129 => 55,  69 => 24,  222 => 138,  217 => 136,  214 => 65,  192 => 81,  187 => 68,  167 => 60,  117 => 36,  77 => 58,  183 => 83,  175 => 78,  140 => 56,  112 => 50,  56 => 40,  113 => 40,  158 => 69,  110 => 63,  99 => 23,  82 => 57,  65 => 31,  53 => 77,  20 => 11,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 151,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 133,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 126,  386 => 115,  383 => 121,  380 => 112,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 133,  359 => 106,  354 => 219,  340 => 97,  336 => 131,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 95,  297 => 177,  293 => 157,  284 => 116,  282 => 143,  277 => 104,  267 => 99,  263 => 71,  257 => 80,  251 => 80,  246 => 134,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 124,  213 => 69,  207 => 129,  198 => 122,  181 => 115,  176 => 62,  170 => 75,  168 => 60,  146 => 34,  142 => 51,  128 => 56,  125 => 51,  107 => 24,  38 => 32,  144 => 92,  141 => 61,  135 => 47,  126 => 83,  109 => 18,  103 => 60,  67 => 27,  61 => 18,  47 => 19,  105 => 26,  93 => 14,  76 => 13,  72 => 25,  68 => 49,  27 => 3,  91 => 38,  84 => 62,  94 => 43,  88 => 31,  79 => 31,  59 => 23,  21 => 12,  44 => 19,  31 => 15,  28 => 14,  225 => 126,  216 => 90,  212 => 75,  205 => 54,  201 => 123,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 7,  180 => 72,  172 => 44,  159 => 61,  154 => 65,  147 => 33,  132 => 86,  127 => 65,  121 => 54,  118 => 53,  114 => 46,  104 => 23,  100 => 66,  78 => 29,  75 => 28,  71 => 30,  58 => 23,  34 => 16,  26 => 13,  24 => 13,  25 => 12,  19 => 11,  70 => 20,  63 => 24,  46 => 35,  22 => 12,  163 => 49,  155 => 81,  152 => 38,  149 => 53,  145 => 64,  139 => 61,  131 => 25,  123 => 55,  120 => 21,  115 => 75,  106 => 47,  101 => 45,  96 => 21,  83 => 58,  80 => 37,  74 => 55,  66 => 25,  55 => 21,  52 => 20,  50 => 20,  43 => 18,  41 => 18,  37 => 17,  35 => 16,  32 => 13,  29 => 14,  184 => 114,  178 => 45,  171 => 61,  165 => 58,  162 => 8,  157 => 82,  153 => 67,  151 => 48,  143 => 71,  138 => 57,  136 => 48,  133 => 58,  130 => 46,  122 => 22,  119 => 42,  116 => 23,  111 => 39,  108 => 71,  102 => 22,  98 => 21,  95 => 64,  92 => 42,  89 => 41,  85 => 32,  81 => 15,  73 => 29,  64 => 26,  60 => 22,  57 => 22,  54 => 144,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 15,  30 => 15,);
    }
}
