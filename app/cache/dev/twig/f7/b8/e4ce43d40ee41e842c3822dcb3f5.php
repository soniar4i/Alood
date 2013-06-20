<?php

/* MakerLabsPagerBundle:Pager:paginate.html.twig */
class __TwigTemplate_f7b8e4ce43d40ee41e842c3822dcb3f5 extends Twig_Template
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
        echo "<ul class=\"pager\">
   ";
        // line 2
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "isFirstPage") == false)) {
            echo "    
        <li class=\"first\"><a href=\"";
            // line 3
            echo $this->env->getExtension('pager')->path((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getFirstPage"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
            echo "\">&laquo;</a></li>
        <li class=\"previous\"><a href=\"";
            // line 4
            echo $this->env->getExtension('pager')->path((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getPreviousPage"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
            echo "\">&lsaquo;</a></li>
   ";
        }
        // line 6
        echo "   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getPages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 7
            echo "      ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getPage"))) {
                // line 8
                echo "        <li class=\"selected\">
            <b>";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</b>
        </li>      
      ";
            } else {
                // line 12
                echo "        <li>
            <a href=\"";
                // line 13
                echo $this->env->getExtension('pager')->path((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a>
        </li>
      ";
            }
            // line 16
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
   ";
        // line 17
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "isLastPage") == false)) {
            // line 18
            echo "        <li class=\"next\"><a href=\"";
            echo $this->env->getExtension('pager')->path((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNextPage"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
            echo "\">&rsaquo;</a></li>
        <li class=\"last\"><a href=\"";
            // line 19
            echo $this->env->getExtension('pager')->path((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getLastPage"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
            echo "\">&raquo;</a></li>
   ";
        }
        // line 21
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "MakerLabsPagerBundle:Pager:paginate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  190 => 60,  177 => 56,  62 => 16,  173 => 71,  169 => 54,  166 => 68,  134 => 41,  86 => 39,  137 => 69,  206 => 8,  185 => 59,  124 => 38,  90 => 40,  193 => 6,  164 => 79,  161 => 78,  129 => 64,  69 => 18,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 61,  77 => 21,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 23,  113 => 34,  158 => 66,  110 => 33,  99 => 29,  82 => 22,  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 14,  144 => 44,  141 => 60,  135 => 47,  126 => 64,  109 => 41,  103 => 44,  67 => 15,  61 => 13,  47 => 19,  105 => 59,  93 => 28,  76 => 35,  72 => 14,  68 => 32,  27 => 4,  91 => 39,  84 => 37,  94 => 41,  88 => 25,  79 => 37,  59 => 25,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 53,  121 => 62,  118 => 51,  114 => 61,  104 => 30,  100 => 44,  78 => 19,  75 => 36,  71 => 17,  58 => 15,  34 => 11,  26 => 3,  24 => 3,  25 => 3,  19 => 1,  70 => 33,  63 => 16,  46 => 9,  22 => 2,  163 => 51,  155 => 69,  152 => 47,  149 => 64,  145 => 46,  139 => 43,  131 => 57,  123 => 57,  120 => 52,  115 => 39,  106 => 7,  101 => 58,  96 => 28,  83 => 21,  80 => 36,  74 => 16,  66 => 15,  55 => 13,  52 => 12,  50 => 20,  43 => 8,  41 => 7,  37 => 8,  35 => 6,  32 => 10,  29 => 9,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 65,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 49,  108 => 60,  102 => 43,  98 => 42,  95 => 44,  92 => 27,  89 => 41,  85 => 38,  81 => 37,  73 => 18,  64 => 17,  60 => 23,  57 => 11,  54 => 13,  51 => 14,  48 => 10,  45 => 8,  42 => 15,  39 => 14,  36 => 5,  33 => 4,  30 => 4,);
    }
}
