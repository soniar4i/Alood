<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_544d663aa65c510b38ac4b2c299f5754 extends Twig_Template
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
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                success: function(html) {
                   field_dialog_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                }
            });

            return;
        }

        jQuery('#";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('change');

        field_dialog_";
        // line 59
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');
    }


    // handle the add link
    var field_dialog_form_list_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        initialize_popup_";
        // line 66
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 83
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 86
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 88
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").live('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                jQuery('form', field_dialog_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").live('submit', function(event) {
                    event.preventDefault();

                    var form = jQuery(this);

                    jQuery(form).ajaxSubmit({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        dataType: 'html',
                        data: {_xml_http_request: true},
                        success: function(html) {
                           field_dialog_";
        // line 104
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                        }
                    });
                });

                // open the dialog in modal mode
                field_dialog_";
        // line 110
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 115
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 118
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").die('submit');
                    },
                    zIndex: 9998,
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 128
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 129
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 136
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        Admin.log('[";
        // line 138
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 146
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // populate the popup container
                field_dialog_";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 153
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").live('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                jQuery('form', field_dialog_";
        // line 154
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").live('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 157
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 650,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 163
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 165
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] dialog closed - removing `live` events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 167
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 168
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").die('submit');
                    },
                    zIndex: 9998
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 177
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 182
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 184
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        var element = jQuery(this);

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 200
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 210
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {

                Admin.log('[";
        // line 219
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] ajax success');

                if (typeof data == 'string') {
                    field_dialog_";
        // line 222
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(data);
                    return;
                };

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (data.result == 'ok') {
                    field_dialog_";
        // line 229
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');

                    ";
        // line 231
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 232
            echo "                        ";
            // line 236
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val(data.objectId);
                        jQuery('#";
            // line 237
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').change();

                    ";
        } else {
            // line 240
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 242
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 243
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code")));
            // line 248
            echo "',
                            data: {_xml_http_request: true },
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 252
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 253
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 260
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 265
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 270
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                Admin.add_pretty_errors(field_dialog_";
        // line 272
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 275
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 282
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    function initialize_popup_";
        // line 284
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 286
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
            field_dialog_";
        // line 287
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 290
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

            Admin.log('[";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 299
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 301
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 306
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 310
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 317
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");


    ";
        // line 320
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 321
            echo "        ";
            // line 324
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 326
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 330
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 334
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 341
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 346
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 353
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 356
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " option').get(0)) {
                jQuery('#";
            // line 357
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 360
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val('');
            jQuery('#";
            // line 361
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('change');

            return false;
        }
        ";
            // line 368
            echo "
        // update the label
        jQuery('#";
            // line 370
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').live('change', function(event) {

            Admin.log('[";
            // line 372
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "] update the label');

            jQuery('#field_widget_";
            // line 374
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 377
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "code")));
            // line 381
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                success: function(html) {
                    jQuery('#field_widget_";
            // line 383
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 389
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 389,  634 => 383,  618 => 374,  613 => 372,  604 => 368,  597 => 361,  593 => 360,  587 => 357,  583 => 356,  577 => 353,  567 => 346,  559 => 341,  535 => 326,  531 => 324,  527 => 320,  504 => 306,  492 => 299,  485 => 292,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  390 => 240,  342 => 210,  281 => 167,  248 => 153,  150 => 93,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  617 => 189,  614 => 188,  608 => 370,  603 => 184,  600 => 183,  576 => 149,  563 => 146,  558 => 145,  542 => 330,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  457 => 47,  448 => 44,  425 => 36,  411 => 31,  403 => 28,  393 => 221,  382 => 183,  369 => 178,  360 => 222,  355 => 171,  352 => 170,  338 => 169,  305 => 182,  299 => 160,  291 => 156,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  235 => 129,  227 => 127,  179 => 111,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 169,  555 => 144,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  480 => 290,  477 => 147,  475 => 86,  462 => 123,  453 => 46,  437 => 138,  435 => 270,  432 => 136,  421 => 35,  416 => 129,  405 => 127,  377 => 232,  375 => 231,  371 => 109,  366 => 177,  356 => 105,  337 => 96,  318 => 90,  302 => 86,  298 => 84,  289 => 81,  274 => 77,  254 => 154,  247 => 66,  236 => 63,  233 => 146,  335 => 94,  331 => 94,  326 => 90,  312 => 88,  306 => 87,  303 => 162,  286 => 80,  283 => 84,  276 => 165,  271 => 163,  250 => 67,  243 => 65,  218 => 57,  638 => 211,  633 => 209,  627 => 185,  625 => 192,  619 => 190,  610 => 199,  606 => 185,  602 => 197,  595 => 156,  591 => 153,  586 => 193,  579 => 191,  571 => 148,  568 => 188,  565 => 187,  560 => 168,  549 => 334,  545 => 109,  538 => 165,  534 => 105,  529 => 321,  526 => 96,  514 => 85,  511 => 310,  507 => 108,  505 => 97,  501 => 94,  499 => 84,  496 => 301,  493 => 82,  489 => 177,  482 => 149,  474 => 170,  472 => 287,  469 => 168,  461 => 48,  459 => 165,  450 => 119,  442 => 161,  431 => 39,  423 => 132,  415 => 32,  413 => 152,  410 => 253,  402 => 126,  400 => 248,  394 => 242,  391 => 216,  389 => 143,  384 => 237,  379 => 236,  370 => 229,  357 => 132,  353 => 104,  347 => 130,  343 => 98,  341 => 127,  332 => 167,  329 => 200,  324 => 92,  310 => 184,  301 => 117,  279 => 82,  273 => 80,  268 => 78,  265 => 109,  262 => 157,  259 => 70,  249 => 77,  241 => 149,  210 => 64,  203 => 128,  200 => 55,  197 => 54,  174 => 51,  272 => 139,  269 => 138,  264 => 72,  260 => 71,  255 => 69,  252 => 136,  245 => 66,  238 => 64,  226 => 61,  220 => 59,  211 => 53,  208 => 57,  199 => 52,  188 => 48,  182 => 54,  12 => 45,  49 => 103,  160 => 66,  156 => 44,  148 => 41,  97 => 40,  23 => 18,  87 => 59,  40 => 41,  190 => 50,  177 => 42,  62 => 156,  173 => 110,  169 => 43,  166 => 90,  134 => 26,  86 => 59,  137 => 88,  206 => 51,  185 => 55,  124 => 47,  90 => 18,  193 => 120,  164 => 104,  161 => 46,  129 => 55,  69 => 190,  222 => 138,  217 => 136,  214 => 65,  192 => 81,  187 => 118,  167 => 42,  117 => 36,  77 => 8,  183 => 6,  175 => 43,  140 => 56,  112 => 26,  56 => 40,  113 => 40,  158 => 66,  110 => 63,  99 => 23,  82 => 57,  65 => 5,  53 => 77,  20 => 11,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 151,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 133,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 126,  386 => 115,  383 => 121,  380 => 112,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 133,  359 => 106,  354 => 219,  340 => 97,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 95,  297 => 177,  293 => 157,  284 => 116,  282 => 143,  277 => 78,  267 => 85,  263 => 71,  257 => 80,  251 => 80,  246 => 134,  240 => 64,  234 => 71,  228 => 59,  223 => 58,  219 => 124,  213 => 69,  207 => 129,  198 => 122,  181 => 115,  176 => 110,  170 => 81,  168 => 60,  146 => 34,  142 => 62,  128 => 24,  125 => 51,  107 => 24,  38 => 32,  144 => 92,  141 => 61,  135 => 47,  126 => 83,  109 => 18,  103 => 60,  67 => 52,  61 => 39,  47 => 20,  105 => 26,  93 => 14,  76 => 13,  72 => 54,  68 => 49,  27 => 3,  91 => 38,  84 => 16,  94 => 40,  88 => 31,  79 => 14,  59 => 155,  21 => 2,  44 => 74,  31 => 22,  28 => 13,  225 => 126,  216 => 90,  212 => 88,  205 => 54,  201 => 123,  196 => 121,  194 => 79,  191 => 119,  189 => 77,  186 => 7,  180 => 72,  172 => 44,  159 => 61,  154 => 65,  147 => 33,  132 => 86,  127 => 65,  121 => 29,  118 => 28,  114 => 46,  104 => 23,  100 => 66,  78 => 56,  75 => 32,  71 => 30,  58 => 38,  34 => 53,  26 => 20,  24 => 2,  25 => 12,  19 => 11,  70 => 20,  63 => 50,  46 => 19,  22 => 2,  163 => 49,  155 => 81,  152 => 38,  149 => 36,  145 => 62,  139 => 31,  131 => 25,  123 => 30,  120 => 21,  115 => 75,  106 => 61,  101 => 22,  96 => 42,  83 => 58,  80 => 57,  74 => 55,  66 => 28,  55 => 21,  52 => 104,  50 => 75,  43 => 33,  41 => 17,  37 => 15,  35 => 14,  32 => 13,  29 => 21,  184 => 114,  178 => 45,  171 => 93,  165 => 58,  162 => 8,  157 => 82,  153 => 43,  151 => 48,  143 => 71,  138 => 57,  136 => 42,  133 => 67,  130 => 66,  122 => 22,  119 => 49,  116 => 35,  111 => 30,  108 => 71,  102 => 41,  98 => 21,  95 => 64,  92 => 19,  89 => 12,  85 => 37,  81 => 15,  73 => 7,  64 => 174,  60 => 3,  57 => 145,  54 => 144,  51 => 38,  48 => 64,  45 => 19,  42 => 62,  39 => 16,  36 => 18,  33 => 13,  30 => 15,);
    }
}
