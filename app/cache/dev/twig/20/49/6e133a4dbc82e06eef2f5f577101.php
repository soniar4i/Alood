<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_20496e133a4dbc82e06eef2f5f577101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br />
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 75,  269 => 74,  264 => 72,  260 => 71,  255 => 70,  252 => 69,  245 => 67,  238 => 65,  226 => 61,  220 => 59,  211 => 56,  208 => 55,  199 => 52,  188 => 48,  182 => 46,  12 => 45,  49 => 16,  160 => 66,  156 => 44,  148 => 41,  97 => 44,  23 => 1,  87 => 25,  40 => 6,  190 => 49,  177 => 42,  62 => 19,  173 => 70,  169 => 54,  166 => 68,  134 => 37,  86 => 39,  137 => 60,  206 => 8,  185 => 47,  124 => 47,  90 => 40,  193 => 50,  164 => 67,  161 => 46,  129 => 55,  69 => 17,  222 => 8,  217 => 58,  214 => 6,  192 => 81,  187 => 78,  167 => 79,  117 => 47,  77 => 27,  183 => 6,  175 => 6,  140 => 38,  112 => 30,  56 => 24,  113 => 40,  158 => 66,  110 => 29,  99 => 24,  82 => 29,  65 => 24,  53 => 10,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 66,  234 => 63,  228 => 62,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 35,  125 => 34,  107 => 45,  38 => 18,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 28,  67 => 16,  61 => 26,  47 => 21,  105 => 26,  93 => 43,  76 => 19,  72 => 18,  68 => 24,  27 => 14,  91 => 22,  84 => 19,  94 => 38,  88 => 31,  79 => 16,  59 => 23,  21 => 11,  44 => 16,  31 => 23,  28 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 54,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 16,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 48,  121 => 33,  118 => 32,  114 => 61,  104 => 30,  100 => 45,  78 => 35,  75 => 36,  71 => 25,  58 => 12,  34 => 16,  26 => 14,  24 => 13,  25 => 12,  19 => 11,  70 => 32,  63 => 20,  46 => 9,  22 => 12,  163 => 77,  155 => 69,  152 => 64,  149 => 64,  145 => 62,  139 => 61,  131 => 57,  123 => 50,  120 => 52,  115 => 50,  106 => 7,  101 => 58,  96 => 34,  83 => 20,  80 => 29,  74 => 31,  66 => 23,  55 => 11,  52 => 20,  50 => 22,  43 => 14,  41 => 19,  37 => 24,  35 => 4,  32 => 3,  29 => 2,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 43,  151 => 42,  143 => 73,  138 => 51,  136 => 42,  133 => 57,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 48,  108 => 38,  102 => 36,  98 => 42,  95 => 44,  92 => 27,  89 => 21,  85 => 30,  81 => 24,  73 => 27,  64 => 15,  60 => 23,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 1,);
    }
}
