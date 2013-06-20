<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_4fcd581a042c0133ac13f8081508b0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 17
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 0, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 20
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                // line 21
                echo "</a>
    ";
            } else {
                // line 23
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 1, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 25
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                // line 26
                echo "</a>
    ";
            }
        } else {
            // line 29
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 30
                echo "        <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 31
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            } else {
                // line 33
                echo "        <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 34
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 211,  633 => 209,  627 => 207,  625 => 206,  619 => 202,  610 => 199,  606 => 198,  602 => 197,  595 => 196,  591 => 195,  586 => 193,  579 => 191,  571 => 189,  568 => 188,  565 => 187,  560 => 106,  549 => 104,  545 => 103,  538 => 99,  534 => 98,  529 => 97,  526 => 96,  514 => 85,  511 => 84,  507 => 108,  505 => 96,  501 => 94,  499 => 84,  496 => 83,  493 => 82,  489 => 177,  482 => 172,  474 => 170,  472 => 169,  469 => 168,  461 => 166,  459 => 165,  450 => 163,  442 => 161,  431 => 158,  423 => 155,  415 => 153,  413 => 152,  410 => 151,  402 => 149,  400 => 148,  394 => 145,  391 => 144,  389 => 143,  384 => 140,  379 => 137,  370 => 134,  357 => 132,  353 => 131,  347 => 130,  343 => 128,  341 => 127,  332 => 123,  329 => 122,  324 => 119,  310 => 118,  301 => 117,  279 => 115,  273 => 112,  268 => 110,  265 => 109,  262 => 82,  259 => 81,  249 => 77,  241 => 73,  210 => 64,  203 => 62,  200 => 61,  197 => 60,  174 => 51,  272 => 75,  269 => 74,  264 => 72,  260 => 71,  255 => 70,  252 => 78,  245 => 67,  238 => 65,  226 => 61,  220 => 59,  211 => 56,  208 => 55,  199 => 52,  188 => 48,  182 => 54,  12 => 45,  49 => 23,  160 => 66,  156 => 44,  148 => 41,  97 => 40,  23 => 13,  87 => 25,  40 => 13,  190 => 49,  177 => 42,  62 => 19,  173 => 70,  169 => 50,  166 => 68,  134 => 42,  86 => 181,  137 => 43,  206 => 8,  185 => 55,  124 => 47,  90 => 39,  193 => 50,  164 => 67,  161 => 46,  129 => 55,  69 => 33,  222 => 68,  217 => 66,  214 => 65,  192 => 81,  187 => 78,  167 => 79,  117 => 36,  77 => 13,  183 => 6,  175 => 6,  140 => 56,  112 => 47,  56 => 26,  113 => 40,  158 => 66,  110 => 29,  99 => 23,  82 => 23,  65 => 24,  53 => 10,  20 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 164,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 159,  429 => 144,  426 => 157,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 133,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 116,  282 => 88,  277 => 114,  267 => 85,  263 => 84,  257 => 80,  251 => 80,  246 => 76,  240 => 66,  234 => 71,  228 => 70,  223 => 71,  219 => 67,  213 => 69,  207 => 63,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 46,  142 => 62,  128 => 40,  125 => 53,  107 => 45,  38 => 18,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 47,  103 => 45,  67 => 30,  61 => 29,  47 => 21,  105 => 26,  93 => 41,  76 => 22,  72 => 31,  68 => 24,  27 => 14,  91 => 38,  84 => 36,  94 => 39,  88 => 31,  79 => 34,  59 => 23,  21 => 2,  44 => 27,  31 => 15,  28 => 14,  225 => 96,  216 => 90,  212 => 88,  205 => 54,  201 => 7,  196 => 63,  194 => 79,  191 => 56,  189 => 77,  186 => 7,  180 => 72,  172 => 16,  159 => 61,  154 => 65,  147 => 58,  132 => 58,  127 => 52,  121 => 33,  118 => 50,  114 => 49,  104 => 42,  100 => 28,  78 => 33,  75 => 32,  71 => 34,  58 => 16,  34 => 16,  26 => 14,  24 => 12,  25 => 12,  19 => 11,  70 => 20,  63 => 28,  46 => 21,  22 => 2,  163 => 49,  155 => 69,  152 => 64,  149 => 47,  145 => 62,  139 => 61,  131 => 55,  123 => 52,  120 => 52,  115 => 48,  106 => 44,  101 => 44,  96 => 42,  83 => 35,  80 => 14,  74 => 60,  66 => 31,  55 => 23,  52 => 15,  50 => 22,  43 => 20,  41 => 18,  37 => 21,  35 => 17,  32 => 16,  29 => 4,  184 => 84,  178 => 52,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 43,  151 => 48,  143 => 45,  138 => 57,  136 => 42,  133 => 54,  130 => 39,  122 => 50,  119 => 51,  116 => 35,  111 => 30,  108 => 44,  102 => 41,  98 => 42,  95 => 19,  92 => 38,  89 => 17,  85 => 36,  81 => 26,  73 => 30,  64 => 30,  60 => 24,  57 => 5,  54 => 25,  51 => 29,  48 => 20,  45 => 21,  42 => 26,  39 => 3,  36 => 16,  33 => 16,  30 => 15,);
    }
}
