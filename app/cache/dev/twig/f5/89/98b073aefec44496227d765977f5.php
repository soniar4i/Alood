<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_f58998b073aefec44496227d765977f5 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  644 => 443,  609 => 434,  540 => 398,  523 => 397,  518 => 395,  385 => 159,  362 => 153,  344 => 147,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  280 => 114,  258 => 103,  209 => 77,  204 => 94,  333 => 141,  325 => 138,  316 => 145,  309 => 141,  295 => 121,  292 => 120,  275 => 111,  237 => 110,  388 => 160,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 145,  323 => 149,  319 => 123,  315 => 122,  288 => 129,  270 => 100,  261 => 96,  239 => 86,  231 => 88,  221 => 83,  215 => 79,  202 => 73,  643 => 389,  634 => 383,  618 => 437,  613 => 435,  604 => 432,  597 => 361,  593 => 360,  587 => 357,  583 => 356,  577 => 353,  567 => 346,  559 => 341,  535 => 326,  531 => 324,  527 => 320,  504 => 306,  492 => 299,  485 => 292,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  390 => 155,  342 => 146,  281 => 125,  248 => 89,  150 => 75,  672 => 216,  667 => 209,  661 => 444,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  617 => 189,  614 => 188,  608 => 370,  603 => 184,  600 => 183,  576 => 149,  563 => 146,  558 => 401,  542 => 330,  528 => 104,  520 => 396,  513 => 393,  508 => 391,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  457 => 47,  448 => 44,  425 => 36,  411 => 31,  403 => 28,  393 => 156,  382 => 183,  369 => 178,  360 => 152,  355 => 171,  352 => 149,  338 => 169,  305 => 182,  299 => 160,  291 => 156,  287 => 118,  285 => 168,  278 => 141,  266 => 137,  235 => 129,  227 => 105,  179 => 63,  686 => 451,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  624 => 184,  607 => 182,  590 => 431,  585 => 152,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 169,  555 => 144,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  480 => 290,  477 => 147,  475 => 86,  462 => 123,  453 => 46,  437 => 138,  435 => 270,  432 => 136,  421 => 35,  416 => 129,  405 => 127,  377 => 157,  375 => 231,  371 => 145,  366 => 155,  356 => 163,  337 => 96,  318 => 90,  302 => 137,  298 => 84,  289 => 119,  274 => 121,  254 => 101,  247 => 97,  236 => 63,  233 => 108,  335 => 157,  331 => 94,  326 => 90,  312 => 88,  306 => 128,  303 => 162,  286 => 80,  283 => 107,  276 => 248,  271 => 163,  250 => 67,  243 => 87,  218 => 57,  638 => 211,  633 => 442,  627 => 185,  625 => 192,  619 => 190,  610 => 199,  606 => 433,  602 => 197,  595 => 156,  591 => 153,  586 => 193,  579 => 191,  571 => 148,  568 => 188,  565 => 187,  560 => 168,  549 => 334,  545 => 109,  538 => 165,  534 => 105,  529 => 321,  526 => 96,  514 => 85,  511 => 310,  507 => 108,  505 => 97,  501 => 94,  499 => 84,  496 => 301,  493 => 82,  489 => 177,  482 => 149,  474 => 170,  472 => 287,  469 => 168,  461 => 48,  459 => 165,  450 => 119,  442 => 161,  431 => 39,  423 => 132,  415 => 32,  413 => 152,  410 => 253,  402 => 126,  400 => 248,  394 => 242,  391 => 216,  389 => 143,  384 => 237,  379 => 158,  370 => 156,  357 => 151,  353 => 138,  347 => 160,  343 => 159,  341 => 127,  332 => 167,  329 => 127,  324 => 92,  310 => 184,  301 => 125,  279 => 82,  273 => 110,  268 => 107,  265 => 109,  262 => 236,  259 => 109,  249 => 118,  241 => 149,  210 => 64,  203 => 77,  200 => 55,  197 => 54,  174 => 58,  272 => 139,  269 => 125,  264 => 105,  260 => 235,  255 => 69,  252 => 138,  245 => 96,  238 => 218,  226 => 86,  220 => 59,  211 => 81,  208 => 97,  199 => 52,  188 => 66,  182 => 64,  12 => 45,  49 => 17,  160 => 59,  156 => 77,  148 => 74,  97 => 23,  23 => 3,  87 => 33,  40 => 11,  190 => 89,  177 => 59,  62 => 21,  173 => 85,  169 => 56,  166 => 82,  134 => 54,  86 => 29,  137 => 67,  206 => 78,  185 => 68,  124 => 44,  90 => 41,  193 => 68,  164 => 63,  161 => 80,  129 => 55,  69 => 20,  222 => 138,  217 => 83,  214 => 82,  192 => 72,  187 => 68,  167 => 64,  117 => 36,  77 => 25,  183 => 63,  175 => 83,  140 => 42,  112 => 52,  56 => 15,  113 => 40,  158 => 56,  110 => 42,  99 => 23,  82 => 19,  65 => 22,  53 => 17,  20 => 1,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 151,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 133,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 126,  386 => 115,  383 => 121,  380 => 112,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 133,  359 => 106,  354 => 150,  340 => 158,  336 => 131,  321 => 91,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 177,  293 => 157,  284 => 116,  282 => 115,  277 => 104,  267 => 99,  263 => 123,  257 => 234,  251 => 80,  246 => 134,  240 => 219,  234 => 89,  228 => 87,  223 => 58,  219 => 124,  213 => 99,  207 => 95,  198 => 69,  181 => 87,  176 => 61,  170 => 60,  168 => 60,  146 => 64,  142 => 63,  128 => 45,  125 => 44,  107 => 27,  38 => 6,  144 => 73,  141 => 61,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 21,  61 => 18,  47 => 15,  105 => 26,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 4,  91 => 34,  84 => 27,  94 => 43,  88 => 20,  79 => 35,  59 => 21,  21 => 2,  44 => 11,  31 => 6,  28 => 6,  225 => 88,  216 => 100,  212 => 78,  205 => 71,  201 => 123,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 88,  180 => 72,  172 => 64,  159 => 61,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 54,  118 => 53,  114 => 46,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  26 => 3,  24 => 2,  25 => 14,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 81,  155 => 75,  152 => 38,  149 => 53,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 48,  101 => 33,  96 => 35,  83 => 28,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 16,  43 => 8,  41 => 12,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 21,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 60,  133 => 58,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 39,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 21,  89 => 28,  85 => 32,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 11,  45 => 14,  42 => 8,  39 => 9,  36 => 9,  33 => 6,  30 => 7,);
    }
}
