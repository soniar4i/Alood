<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_e337fb30f42049bd853b80f7ec7e9779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
            'list_filters' => array($this, 'block_list_filters'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('preview', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 17
        echo "
    <div class=\"sonata-ba-filter\">
        ";
        // line 19
        $this->displayBlock('list_filters', $context, $blocks);
        // line 20
        echo "    </div>
    <div class=\"sonata-ba-list\">
        ";
        // line 22
        $this->displayBlock('list_table', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 13
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
    }

    // line 16
    public function block_show($context, array $blocks = array())
    {
    }

    // line 19
    public function block_list_filters($context, array $blocks = array())
    {
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  156 => 65,  148 => 63,  97 => 39,  23 => 3,  87 => 25,  40 => 19,  190 => 60,  177 => 56,  62 => 19,  173 => 70,  169 => 54,  166 => 68,  134 => 41,  86 => 33,  137 => 60,  206 => 8,  185 => 59,  124 => 38,  90 => 40,  193 => 6,  164 => 67,  161 => 78,  129 => 64,  69 => 14,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 47,  77 => 28,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 23,  113 => 34,  158 => 66,  110 => 33,  99 => 29,  82 => 22,  65 => 28,  53 => 20,  20 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 14,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 28,  67 => 25,  61 => 18,  47 => 17,  105 => 59,  93 => 29,  76 => 35,  72 => 20,  68 => 22,  27 => 13,  91 => 27,  84 => 19,  94 => 38,  88 => 25,  79 => 16,  59 => 23,  21 => 2,  44 => 16,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 53,  121 => 62,  118 => 51,  114 => 61,  104 => 30,  100 => 40,  78 => 19,  75 => 36,  71 => 17,  58 => 18,  34 => 4,  26 => 11,  24 => 6,  25 => 12,  19 => 1,  70 => 33,  63 => 16,  46 => 9,  22 => 1,  163 => 51,  155 => 69,  152 => 64,  149 => 64,  145 => 46,  139 => 43,  131 => 57,  123 => 50,  120 => 52,  115 => 39,  106 => 7,  101 => 58,  96 => 28,  83 => 21,  80 => 29,  74 => 15,  66 => 15,  55 => 12,  52 => 20,  50 => 22,  43 => 8,  41 => 15,  37 => 18,  35 => 13,  32 => 16,  29 => 12,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 65,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 45,  108 => 60,  102 => 41,  98 => 42,  95 => 44,  92 => 27,  89 => 22,  85 => 38,  81 => 24,  73 => 18,  64 => 13,  60 => 23,  57 => 22,  54 => 14,  51 => 19,  48 => 11,  45 => 8,  42 => 7,  39 => 7,  36 => 17,  33 => 5,  30 => 1,);
    }
}
