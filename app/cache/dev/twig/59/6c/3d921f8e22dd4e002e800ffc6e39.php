<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_596c3d921f8e22dd4e002e800ffc6e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help");
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 211,  633 => 209,  627 => 207,  625 => 206,  619 => 202,  610 => 199,  606 => 198,  602 => 197,  595 => 196,  591 => 195,  586 => 193,  579 => 191,  571 => 189,  568 => 188,  565 => 187,  560 => 106,  549 => 104,  545 => 103,  538 => 99,  534 => 98,  529 => 97,  526 => 96,  514 => 85,  511 => 84,  507 => 108,  505 => 96,  501 => 94,  499 => 84,  496 => 83,  493 => 82,  489 => 177,  482 => 172,  474 => 170,  472 => 169,  469 => 168,  461 => 166,  459 => 165,  450 => 163,  442 => 161,  431 => 158,  423 => 155,  415 => 153,  413 => 152,  410 => 151,  402 => 149,  400 => 148,  394 => 145,  391 => 144,  389 => 143,  384 => 140,  379 => 137,  370 => 134,  357 => 132,  353 => 131,  347 => 130,  343 => 128,  341 => 127,  332 => 123,  329 => 122,  324 => 119,  310 => 118,  301 => 117,  279 => 115,  273 => 112,  268 => 110,  265 => 109,  262 => 82,  259 => 81,  249 => 77,  241 => 73,  210 => 64,  203 => 62,  200 => 61,  197 => 60,  174 => 51,  272 => 75,  269 => 74,  264 => 72,  260 => 71,  255 => 70,  252 => 78,  245 => 67,  238 => 65,  226 => 61,  220 => 59,  211 => 56,  208 => 55,  199 => 52,  188 => 48,  182 => 54,  12 => 45,  49 => 28,  160 => 66,  156 => 44,  148 => 41,  97 => 27,  23 => 11,  87 => 25,  40 => 13,  190 => 49,  177 => 42,  62 => 19,  173 => 70,  169 => 50,  166 => 68,  134 => 42,  86 => 181,  137 => 43,  206 => 8,  185 => 55,  124 => 47,  90 => 40,  193 => 50,  164 => 67,  161 => 46,  129 => 55,  69 => 31,  222 => 68,  217 => 66,  214 => 65,  192 => 81,  187 => 78,  167 => 79,  117 => 36,  77 => 13,  183 => 6,  175 => 6,  140 => 56,  112 => 48,  56 => 24,  113 => 40,  158 => 66,  110 => 29,  99 => 23,  82 => 23,  65 => 24,  53 => 10,  20 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 164,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 159,  429 => 144,  426 => 157,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 133,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 116,  282 => 88,  277 => 114,  267 => 85,  263 => 84,  257 => 80,  251 => 80,  246 => 76,  240 => 66,  234 => 71,  228 => 70,  223 => 71,  219 => 67,  213 => 69,  207 => 63,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 46,  142 => 62,  128 => 40,  125 => 51,  107 => 45,  38 => 15,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 28,  67 => 30,  61 => 26,  47 => 21,  105 => 26,  93 => 41,  76 => 75,  72 => 19,  68 => 24,  27 => 14,  91 => 22,  84 => 19,  94 => 38,  88 => 31,  79 => 76,  59 => 23,  21 => 11,  44 => 16,  31 => 15,  28 => 13,  225 => 96,  216 => 90,  212 => 88,  205 => 54,  201 => 7,  196 => 63,  194 => 79,  191 => 56,  189 => 77,  186 => 7,  180 => 72,  172 => 16,  159 => 61,  154 => 65,  147 => 58,  132 => 58,  127 => 52,  121 => 33,  118 => 49,  114 => 61,  104 => 42,  100 => 28,  78 => 32,  75 => 36,  71 => 59,  58 => 12,  34 => 13,  26 => 12,  24 => 12,  25 => 12,  19 => 11,  70 => 32,  63 => 28,  46 => 21,  22 => 11,  163 => 49,  155 => 69,  152 => 64,  149 => 47,  145 => 62,  139 => 61,  131 => 41,  123 => 51,  120 => 52,  115 => 48,  106 => 7,  101 => 43,  96 => 34,  83 => 15,  80 => 14,  74 => 60,  66 => 17,  55 => 25,  52 => 24,  50 => 23,  43 => 17,  41 => 23,  37 => 21,  35 => 20,  32 => 3,  29 => 13,  184 => 84,  178 => 52,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 43,  151 => 48,  143 => 45,  138 => 51,  136 => 42,  133 => 54,  130 => 39,  122 => 50,  119 => 37,  116 => 35,  111 => 30,  108 => 44,  102 => 41,  98 => 42,  95 => 19,  92 => 38,  89 => 17,  85 => 30,  81 => 178,  73 => 30,  64 => 27,  60 => 24,  57 => 26,  54 => 22,  51 => 29,  48 => 20,  45 => 26,  42 => 19,  39 => 21,  36 => 20,  33 => 16,  30 => 15,);
    }
}
