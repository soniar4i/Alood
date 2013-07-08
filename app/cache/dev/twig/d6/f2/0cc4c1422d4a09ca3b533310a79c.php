<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_d6f20cc4c1422d4a09ca3b533310a79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 1)) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 2)) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 8)) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 4)) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" >
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('actions')->renderAction("sonata.admin.controller.admin:getShortObjectDescriptionAction", array(), array("query" => array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"))));
            // line 67
            echo "            ";
        }
        // line 68
        echo "        </span>
        <span style=\"display: none\" >
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </span>

        <span id=\"field_actions_";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">

            ";
        // line 75
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 76
            echo "
                <a  href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_list_";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-list\"></i>
                    ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 86
        echo "
            ";
        // line 87
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 88
            echo "                <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_add_";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-plus\"></i>
                    ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 97
        echo "
            ";
        // line 98
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method"))) {
            // line 99
            echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-off\"></i>
                    ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 108
        echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 115
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
    }

    // line 118
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        // line 120
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 1)) {
            // line 121
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 2)) {
            // line 123
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 8)) {
            // line 125
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 4)) {
            // line 127
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 129
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
    }

    // line 133
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == 4)) {
            // line 135
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 137
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 135,  292 => 134,  275 => 127,  237 => 110,  388 => 154,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  323 => 124,  319 => 123,  315 => 122,  288 => 109,  270 => 100,  261 => 96,  239 => 86,  231 => 83,  221 => 102,  215 => 76,  202 => 94,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  604 => 368,  597 => 361,  593 => 360,  587 => 357,  583 => 356,  577 => 353,  567 => 346,  559 => 341,  535 => 326,  531 => 324,  527 => 320,  504 => 306,  492 => 299,  485 => 292,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  390 => 155,  342 => 134,  281 => 129,  248 => 89,  150 => 73,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  617 => 189,  614 => 188,  608 => 370,  603 => 184,  600 => 183,  576 => 149,  563 => 146,  558 => 145,  542 => 330,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  457 => 47,  448 => 44,  425 => 36,  411 => 31,  403 => 28,  393 => 156,  382 => 183,  369 => 178,  360 => 140,  355 => 171,  352 => 170,  338 => 169,  305 => 182,  299 => 160,  291 => 156,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  235 => 129,  227 => 105,  179 => 63,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 169,  555 => 144,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  480 => 290,  477 => 147,  475 => 86,  462 => 123,  453 => 46,  437 => 138,  435 => 270,  432 => 136,  421 => 35,  416 => 129,  405 => 127,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  337 => 96,  318 => 90,  302 => 116,  298 => 84,  289 => 133,  274 => 77,  254 => 120,  247 => 66,  236 => 63,  233 => 108,  335 => 94,  331 => 94,  326 => 90,  312 => 88,  306 => 87,  303 => 162,  286 => 80,  283 => 107,  276 => 165,  271 => 163,  250 => 67,  243 => 87,  218 => 57,  638 => 211,  633 => 209,  627 => 185,  625 => 192,  619 => 190,  610 => 199,  606 => 185,  602 => 197,  595 => 156,  591 => 153,  586 => 193,  579 => 191,  571 => 148,  568 => 188,  565 => 187,  560 => 168,  549 => 334,  545 => 109,  538 => 165,  534 => 105,  529 => 321,  526 => 96,  514 => 85,  511 => 310,  507 => 108,  505 => 97,  501 => 94,  499 => 84,  496 => 301,  493 => 82,  489 => 177,  482 => 149,  474 => 170,  472 => 287,  469 => 168,  461 => 48,  459 => 165,  450 => 119,  442 => 161,  431 => 39,  423 => 132,  415 => 32,  413 => 152,  410 => 253,  402 => 126,  400 => 248,  394 => 242,  391 => 216,  389 => 143,  384 => 237,  379 => 236,  370 => 229,  357 => 132,  353 => 138,  347 => 130,  343 => 98,  341 => 127,  332 => 167,  329 => 127,  324 => 92,  310 => 184,  301 => 137,  279 => 82,  273 => 80,  268 => 78,  265 => 109,  262 => 157,  259 => 70,  249 => 118,  241 => 149,  210 => 64,  203 => 128,  200 => 55,  197 => 54,  174 => 77,  272 => 139,  269 => 125,  264 => 98,  260 => 71,  255 => 69,  252 => 119,  245 => 115,  238 => 64,  226 => 81,  220 => 59,  211 => 98,  208 => 97,  199 => 52,  188 => 48,  182 => 82,  12 => 45,  49 => 20,  160 => 77,  156 => 55,  148 => 65,  97 => 44,  23 => 18,  87 => 59,  40 => 41,  190 => 69,  177 => 42,  62 => 29,  173 => 110,  169 => 80,  166 => 90,  134 => 60,  86 => 43,  137 => 67,  206 => 51,  185 => 67,  124 => 44,  90 => 35,  193 => 120,  164 => 78,  161 => 58,  129 => 55,  69 => 24,  222 => 138,  217 => 136,  214 => 65,  192 => 81,  187 => 68,  167 => 60,  117 => 36,  77 => 58,  183 => 83,  175 => 83,  140 => 68,  112 => 52,  56 => 40,  113 => 40,  158 => 69,  110 => 51,  99 => 23,  82 => 57,  65 => 31,  53 => 77,  20 => 11,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 151,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 133,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 126,  386 => 115,  383 => 121,  380 => 112,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 133,  359 => 106,  354 => 219,  340 => 97,  336 => 131,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 95,  297 => 177,  293 => 157,  284 => 116,  282 => 143,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 80,  246 => 134,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 124,  213 => 99,  207 => 129,  198 => 122,  181 => 86,  176 => 62,  170 => 75,  168 => 60,  146 => 34,  142 => 51,  128 => 58,  125 => 51,  107 => 24,  38 => 17,  144 => 70,  141 => 61,  135 => 47,  126 => 83,  109 => 18,  103 => 60,  67 => 32,  61 => 18,  47 => 19,  105 => 26,  93 => 14,  76 => 13,  72 => 37,  68 => 49,  27 => 3,  91 => 38,  84 => 62,  94 => 43,  88 => 31,  79 => 31,  59 => 28,  21 => 12,  44 => 19,  31 => 15,  28 => 14,  225 => 126,  216 => 100,  212 => 75,  205 => 54,  201 => 123,  196 => 91,  194 => 79,  191 => 89,  189 => 77,  186 => 88,  180 => 72,  172 => 44,  159 => 61,  154 => 65,  147 => 33,  132 => 59,  127 => 65,  121 => 54,  118 => 53,  114 => 46,  104 => 49,  100 => 66,  78 => 40,  75 => 39,  71 => 30,  58 => 23,  34 => 16,  26 => 13,  24 => 13,  25 => 12,  19 => 11,  70 => 33,  63 => 24,  46 => 21,  22 => 12,  163 => 49,  155 => 75,  152 => 38,  149 => 53,  145 => 64,  139 => 61,  131 => 25,  123 => 57,  120 => 56,  115 => 75,  106 => 47,  101 => 45,  96 => 21,  83 => 58,  80 => 41,  74 => 55,  66 => 25,  55 => 21,  52 => 20,  50 => 20,  43 => 20,  41 => 18,  37 => 17,  35 => 16,  32 => 13,  29 => 14,  184 => 87,  178 => 45,  171 => 61,  165 => 58,  162 => 8,  157 => 76,  153 => 67,  151 => 48,  143 => 71,  138 => 57,  136 => 48,  133 => 58,  130 => 46,  122 => 22,  119 => 42,  116 => 23,  111 => 39,  108 => 71,  102 => 22,  98 => 47,  95 => 64,  92 => 45,  89 => 41,  85 => 32,  81 => 15,  73 => 29,  64 => 26,  60 => 22,  57 => 22,  54 => 25,  51 => 24,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 15,  30 => 15,);
    }
}
