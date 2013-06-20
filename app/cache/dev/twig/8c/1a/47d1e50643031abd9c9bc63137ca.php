<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8c1a47d1e50643031abd9c9bc63137ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  87 => 25,  40 => 11,  190 => 60,  177 => 56,  62 => 19,  173 => 71,  169 => 54,  166 => 68,  134 => 41,  86 => 39,  137 => 69,  206 => 8,  185 => 59,  124 => 38,  90 => 40,  193 => 6,  164 => 79,  161 => 78,  129 => 64,  69 => 18,  222 => 8,  217 => 7,  214 => 6,  192 => 81,  187 => 78,  167 => 53,  117 => 61,  77 => 21,  183 => 6,  175 => 6,  140 => 60,  112 => 52,  56 => 23,  113 => 34,  158 => 66,  110 => 33,  99 => 29,  82 => 22,  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 6,  181 => 66,  176 => 76,  170 => 81,  168 => 60,  146 => 58,  142 => 62,  128 => 50,  125 => 63,  107 => 45,  38 => 6,  144 => 44,  141 => 60,  135 => 47,  126 => 64,  109 => 41,  103 => 28,  67 => 18,  61 => 13,  47 => 19,  105 => 59,  93 => 29,  76 => 35,  72 => 20,  68 => 32,  27 => 4,  91 => 27,  84 => 37,  94 => 41,  88 => 25,  79 => 37,  59 => 25,  21 => 2,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 7,  196 => 63,  194 => 79,  191 => 8,  189 => 77,  186 => 7,  180 => 72,  172 => 55,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 53,  121 => 62,  118 => 51,  114 => 61,  104 => 30,  100 => 27,  78 => 19,  75 => 36,  71 => 17,  58 => 18,  34 => 5,  26 => 2,  24 => 6,  25 => 3,  19 => 1,  70 => 33,  63 => 16,  46 => 9,  22 => 1,  163 => 51,  155 => 69,  152 => 47,  149 => 64,  145 => 46,  139 => 43,  131 => 57,  123 => 57,  120 => 52,  115 => 39,  106 => 7,  101 => 58,  96 => 28,  83 => 21,  80 => 36,  74 => 16,  66 => 15,  55 => 12,  52 => 12,  50 => 8,  43 => 8,  41 => 10,  37 => 8,  35 => 6,  32 => 10,  29 => 8,  184 => 84,  178 => 83,  171 => 73,  165 => 58,  162 => 8,  157 => 48,  153 => 65,  151 => 68,  143 => 73,  138 => 51,  136 => 42,  133 => 65,  130 => 39,  122 => 63,  119 => 42,  116 => 35,  111 => 49,  108 => 60,  102 => 43,  98 => 42,  95 => 44,  92 => 27,  89 => 41,  85 => 38,  81 => 24,  73 => 18,  64 => 17,  60 => 14,  57 => 11,  54 => 16,  51 => 11,  48 => 11,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 5,  30 => 1,);
    }
}
