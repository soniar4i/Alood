<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_41eabd98dada71fcae9437b7d76e7172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  87 => 25,  40 => 11,  190 => 60,  177 => 56,  62 => 19,  173 => 71,  169 => 54,  166 => 68,  134 => 41,  86 => 39,  137 => 69,  206 => 8,  185 => 59,  124 => 38,  90 => 40,  193 => 6,  164 => 79,  161 => 78,  129 => 64,  69 => 18,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 61,  77 => 21,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 23,  113 => 34,  158 => 66,  110 => 33,  99 => 29,  82 => 22,  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 6,  144 => 44,  141 => 60,  135 => 47,  126 => 64,  109 => 41,  103 => 28,  67 => 20,  61 => 13,  47 => 19,  105 => 59,  93 => 29,  76 => 35,  72 => 21,  68 => 32,  27 => 4,  91 => 27,  84 => 37,  94 => 41,  88 => 25,  79 => 37,  59 => 25,  21 => 2,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 53,  121 => 62,  118 => 51,  114 => 61,  104 => 30,  100 => 27,  78 => 19,  75 => 36,  71 => 17,  58 => 18,  34 => 5,  26 => 11,  24 => 6,  25 => 3,  19 => 1,  70 => 33,  63 => 16,  46 => 14,  22 => 1,  163 => 51,  155 => 69,  152 => 47,  149 => 64,  145 => 46,  139 => 43,  131 => 57,  123 => 57,  120 => 52,  115 => 39,  106 => 7,  101 => 58,  96 => 28,  83 => 21,  80 => 36,  74 => 16,  66 => 15,  55 => 13,  52 => 12,  50 => 8,  43 => 8,  41 => 7,  37 => 8,  35 => 6,  32 => 10,  29 => 8,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 65,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 49,  108 => 60,  102 => 43,  98 => 42,  95 => 44,  92 => 27,  89 => 41,  85 => 38,  81 => 24,  73 => 18,  64 => 17,  60 => 23,  57 => 11,  54 => 16,  51 => 14,  48 => 11,  45 => 8,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
