<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_a483b70123a388533d820c1f1d9a0007 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                jQuery('#field_container_";
        // line 45
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html
                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 51
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 58
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 62
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 389,  634 => 383,  618 => 374,  613 => 372,  604 => 368,  597 => 361,  593 => 360,  587 => 357,  583 => 356,  577 => 353,  567 => 346,  559 => 341,  535 => 326,  531 => 324,  527 => 320,  504 => 306,  492 => 299,  485 => 292,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  390 => 240,  342 => 210,  281 => 167,  248 => 153,  150 => 66,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  617 => 189,  614 => 188,  608 => 370,  603 => 184,  600 => 183,  576 => 149,  563 => 146,  558 => 145,  542 => 330,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  457 => 47,  448 => 44,  425 => 36,  411 => 31,  403 => 28,  393 => 221,  382 => 183,  369 => 178,  360 => 222,  355 => 171,  352 => 170,  338 => 169,  305 => 182,  299 => 160,  291 => 156,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  235 => 129,  227 => 127,  179 => 111,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 169,  555 => 144,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  480 => 290,  477 => 147,  475 => 86,  462 => 123,  453 => 46,  437 => 138,  435 => 270,  432 => 136,  421 => 35,  416 => 129,  405 => 127,  377 => 232,  375 => 231,  371 => 109,  366 => 177,  356 => 105,  337 => 96,  318 => 90,  302 => 86,  298 => 84,  289 => 81,  274 => 77,  254 => 154,  247 => 66,  236 => 63,  233 => 146,  335 => 94,  331 => 94,  326 => 90,  312 => 88,  306 => 87,  303 => 162,  286 => 80,  283 => 84,  276 => 165,  271 => 163,  250 => 67,  243 => 65,  218 => 57,  638 => 211,  633 => 209,  627 => 185,  625 => 192,  619 => 190,  610 => 199,  606 => 185,  602 => 197,  595 => 156,  591 => 153,  586 => 193,  579 => 191,  571 => 148,  568 => 188,  565 => 187,  560 => 168,  549 => 334,  545 => 109,  538 => 165,  534 => 105,  529 => 321,  526 => 96,  514 => 85,  511 => 310,  507 => 108,  505 => 97,  501 => 94,  499 => 84,  496 => 301,  493 => 82,  489 => 177,  482 => 149,  474 => 170,  472 => 287,  469 => 168,  461 => 48,  459 => 165,  450 => 119,  442 => 161,  431 => 39,  423 => 132,  415 => 32,  413 => 152,  410 => 253,  402 => 126,  400 => 248,  394 => 242,  391 => 216,  389 => 143,  384 => 237,  379 => 236,  370 => 229,  357 => 132,  353 => 104,  347 => 130,  343 => 98,  341 => 127,  332 => 167,  329 => 200,  324 => 92,  310 => 184,  301 => 117,  279 => 82,  273 => 80,  268 => 78,  265 => 109,  262 => 157,  259 => 70,  249 => 77,  241 => 149,  210 => 64,  203 => 128,  200 => 55,  197 => 54,  174 => 51,  272 => 139,  269 => 138,  264 => 72,  260 => 71,  255 => 69,  252 => 136,  245 => 66,  238 => 64,  226 => 61,  220 => 59,  211 => 53,  208 => 57,  199 => 52,  188 => 48,  182 => 54,  12 => 45,  49 => 103,  160 => 66,  156 => 44,  148 => 65,  97 => 40,  23 => 18,  87 => 59,  40 => 41,  190 => 50,  177 => 42,  62 => 30,  173 => 110,  169 => 43,  166 => 90,  134 => 26,  86 => 40,  137 => 88,  206 => 51,  185 => 55,  124 => 47,  90 => 18,  193 => 120,  164 => 72,  161 => 46,  129 => 55,  69 => 33,  222 => 138,  217 => 136,  214 => 65,  192 => 81,  187 => 118,  167 => 42,  117 => 36,  77 => 58,  183 => 83,  175 => 78,  140 => 56,  112 => 50,  56 => 40,  113 => 40,  158 => 69,  110 => 63,  99 => 23,  82 => 57,  65 => 31,  53 => 77,  20 => 11,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 151,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 133,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 126,  386 => 115,  383 => 121,  380 => 112,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 133,  359 => 106,  354 => 219,  340 => 97,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 95,  297 => 177,  293 => 157,  284 => 116,  282 => 143,  277 => 78,  267 => 85,  263 => 71,  257 => 80,  251 => 80,  246 => 134,  240 => 64,  234 => 71,  228 => 59,  223 => 58,  219 => 124,  213 => 69,  207 => 129,  198 => 122,  181 => 115,  176 => 110,  170 => 75,  168 => 60,  146 => 34,  142 => 62,  128 => 56,  125 => 51,  107 => 24,  38 => 32,  144 => 92,  141 => 61,  135 => 47,  126 => 83,  109 => 18,  103 => 60,  67 => 51,  61 => 39,  47 => 20,  105 => 26,  93 => 14,  76 => 13,  72 => 54,  68 => 49,  27 => 3,  91 => 38,  84 => 62,  94 => 43,  88 => 31,  79 => 14,  59 => 23,  21 => 2,  44 => 74,  31 => 22,  28 => 13,  225 => 126,  216 => 90,  212 => 88,  205 => 54,  201 => 123,  196 => 121,  194 => 79,  191 => 119,  189 => 77,  186 => 7,  180 => 72,  172 => 44,  159 => 61,  154 => 65,  147 => 33,  132 => 86,  127 => 65,  121 => 54,  118 => 53,  114 => 46,  104 => 23,  100 => 66,  78 => 56,  75 => 36,  71 => 30,  58 => 38,  34 => 26,  26 => 20,  24 => 13,  25 => 12,  19 => 11,  70 => 20,  63 => 50,  46 => 35,  22 => 12,  163 => 49,  155 => 81,  152 => 38,  149 => 36,  145 => 64,  139 => 61,  131 => 25,  123 => 55,  120 => 21,  115 => 75,  106 => 47,  101 => 71,  96 => 44,  83 => 58,  80 => 37,  74 => 55,  66 => 28,  55 => 45,  52 => 21,  50 => 20,  43 => 19,  41 => 17,  37 => 15,  35 => 16,  32 => 13,  29 => 14,  184 => 114,  178 => 45,  171 => 93,  165 => 58,  162 => 8,  157 => 82,  153 => 67,  151 => 48,  143 => 71,  138 => 57,  136 => 42,  133 => 58,  130 => 66,  122 => 22,  119 => 49,  116 => 35,  111 => 30,  108 => 71,  102 => 41,  98 => 21,  95 => 64,  92 => 67,  89 => 41,  85 => 37,  81 => 15,  73 => 32,  64 => 174,  60 => 3,  57 => 22,  54 => 144,  51 => 38,  48 => 40,  45 => 19,  42 => 62,  39 => 18,  36 => 18,  33 => 15,  30 => 15,);
    }
}
