<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_812be42d1daedab51d095be4cbddfc83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 45
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'actions' => array($this, 'block_actions'),
                'side_menu' => array($this, 'block_side_menu'),
                'form' => array($this, 'block_form'),
            )
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
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions\">
        ";
        // line 24
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show")) > 0))) {
            // line 25
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                <i class=\"icon-zoom-in\"></i>
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 29
        echo "        ";
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 30
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                <i class=\"icon-book\"></i>
                ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 34
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 35
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 36
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                <i class=\"icon-list\"></i>
                ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
    }

    // line 43
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 47
    public function block_form($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  12 => 45,  49 => 16,  160 => 66,  156 => 65,  148 => 63,  97 => 44,  23 => 3,  87 => 25,  40 => 19,  190 => 60,  177 => 56,  62 => 19,  173 => 70,  169 => 54,  166 => 68,  134 => 41,  86 => 39,  137 => 60,  206 => 8,  185 => 59,  124 => 47,  90 => 40,  193 => 6,  164 => 67,  161 => 78,  129 => 55,  69 => 24,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 47,  77 => 27,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 24,  113 => 40,  158 => 66,  110 => 33,  99 => 35,  82 => 29,  65 => 24,  53 => 21,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 18,  144 => 62,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 28,  67 => 31,  61 => 26,  47 => 21,  105 => 59,  93 => 43,  76 => 28,  72 => 20,  68 => 30,  27 => 14,  91 => 32,  84 => 19,  94 => 38,  88 => 31,  79 => 16,  59 => 23,  21 => 2,  44 => 16,  31 => 15,  28 => 14,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 48,  121 => 52,  118 => 43,  114 => 61,  104 => 30,  100 => 45,  78 => 35,  75 => 36,  71 => 25,  58 => 18,  34 => 16,  26 => 11,  24 => 13,  25 => 12,  19 => 11,  70 => 32,  63 => 22,  46 => 15,  22 => 12,  163 => 51,  155 => 69,  152 => 64,  149 => 64,  145 => 62,  139 => 61,  131 => 57,  123 => 50,  120 => 52,  115 => 50,  106 => 7,  101 => 58,  96 => 34,  83 => 21,  80 => 29,  74 => 31,  66 => 23,  55 => 18,  52 => 20,  50 => 22,  43 => 14,  41 => 19,  37 => 18,  35 => 13,  32 => 16,  29 => 12,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 57,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 48,  108 => 38,  102 => 36,  98 => 42,  95 => 44,  92 => 27,  89 => 22,  85 => 30,  81 => 24,  73 => 27,  64 => 13,  60 => 23,  57 => 27,  54 => 26,  51 => 19,  48 => 11,  45 => 8,  42 => 19,  39 => 16,  36 => 17,  33 => 16,  30 => 1,);
    }
}
