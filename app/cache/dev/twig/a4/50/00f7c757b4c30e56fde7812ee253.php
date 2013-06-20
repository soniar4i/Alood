<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_a45000f7c757b4c30e56fde7812ee253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        ";
        // line 16
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 17
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">
            \t<i class=\"icon-plus\"></i>
            \t";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 21
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 22
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
            \t<i class=\"icon-list\"></i>
            \t";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 26
        echo "    </div>
";
    }

    // line 29
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        }
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 24,  160 => 66,  156 => 65,  148 => 63,  97 => 44,  23 => 3,  87 => 25,  40 => 19,  190 => 60,  177 => 56,  62 => 19,  173 => 70,  169 => 54,  166 => 68,  134 => 41,  86 => 39,  137 => 60,  206 => 8,  185 => 59,  124 => 38,  90 => 40,  193 => 6,  164 => 67,  161 => 78,  129 => 55,  69 => 26,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 47,  77 => 32,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 24,  113 => 34,  158 => 66,  110 => 33,  99 => 29,  82 => 30,  65 => 24,  53 => 21,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 18,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 28,  67 => 31,  61 => 26,  47 => 21,  105 => 59,  93 => 43,  76 => 28,  72 => 20,  68 => 30,  27 => 14,  91 => 27,  84 => 19,  94 => 38,  88 => 31,  79 => 16,  59 => 23,  21 => 2,  44 => 16,  31 => 15,  28 => 14,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 54,  121 => 52,  118 => 51,  114 => 61,  104 => 30,  100 => 45,  78 => 35,  75 => 36,  71 => 17,  58 => 18,  34 => 16,  26 => 11,  24 => 13,  25 => 12,  19 => 11,  70 => 32,  63 => 16,  46 => 19,  22 => 12,  163 => 51,  155 => 69,  152 => 64,  149 => 64,  145 => 62,  139 => 61,  131 => 57,  123 => 50,  120 => 52,  115 => 50,  106 => 7,  101 => 58,  96 => 28,  83 => 21,  80 => 29,  74 => 31,  66 => 29,  55 => 12,  52 => 20,  50 => 22,  43 => 21,  41 => 19,  37 => 18,  35 => 13,  32 => 16,  29 => 12,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 57,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 48,  108 => 60,  102 => 41,  98 => 42,  95 => 44,  92 => 27,  89 => 22,  85 => 38,  81 => 24,  73 => 27,  64 => 13,  60 => 23,  57 => 27,  54 => 26,  51 => 19,  48 => 11,  45 => 8,  42 => 19,  39 => 16,  36 => 17,  33 => 16,  30 => 1,);
    }
}
