/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

Settings_ITS4YouDynamicFields_Edit_Js("Settings_ITS4YouDynamicFields_Edit2_Js", {}, {
    step2Container: false,
    advanceFilterInstance: false,
    ckEditorInstance: false,
    fieldValueMap: false,
    init: function () {
        this.initialize();
    },
    /**
     * Function to get the container which holds all the reports step1 elements
     * @return jQuery object
     */
    getContainer: function () {
        return this.step2Container;
    },
    /**
     * Function to set the reports step1 container
     * @params : element - which represents the reports step1 container
     * @return : current instance
     */
    setContainer: function (element) {
        this.step2Container = element;
        return this;
    },
    /**
     * Function  to intialize the reports step1
     */
    initialize: function (container) {
        if (typeof container == 'undefined') {
            container = jQuery('#dynamicfields_step2');
        }
        if (container.is('#dynamicfields_step2')) {
            this.setContainer(container);
        } else {
            this.setContainer(jQuery('#dynamicfields_step2'));
        }
    },
    getModuleName: function () {
        return app.getModuleName();
    },
    getFieldValueMapping: function () {
        var fieldValueMap = this.fieldValueMap;
        if (fieldValueMap != false) {
            return fieldValueMap;
        } else {
            return '';
        }
    },
    registerLoadBackStepClickEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.loadBackStep', function (e) {
            var dfRecordElement = jQuery('[name="record"]',container);
            var recordId = dfRecordElement.val();
            window.location.href = "index.php?module=ITS4YouDynamicFields&parent=Settings&view=Edit&mode=step1&record="+recordId;
        });
    },

    registerAddFieldEvent:function () {
        var thisInstance = this;

        var container = this.getContainer();
        container.on('click', '.addField', function (e) {

            var actualmode = jQuery('input[name="actualmode"]').val();

            var fieldseq = jQuery("#new_fields").val();
            fieldseq++;
            var select_content = jQuery("#field_options").html();
            var select_action_content = jQuery("#field_action_options").html();

            jQuery("#new_fields").val(fieldseq);

            var addcontent = '<tr id="field_tr_seq_'+fieldseq+'"><td class="fieldLabel medium"><select class="select2 col-lg-12" name="field_visibility_'+fieldseq+'">'+select_content+'</select></td>';
            if (actualmode != "FieldsGroup") {
                addcontent += '<td><select class="select2 col-lg-6" name="field_select_visibility_'+fieldseq+'">'+select_action_content+'</select></td>';
            }
            addcontent += '<td style="width:2%;vertical-align: middle;"><a href="javascript:;"><i class="fa fa-trash trashField" data-type="field" data-seq="'+fieldseq+'"></i></a></td></tr>';

            jQuery('#fieldsTable').append(addcontent);

           app.changeSelectElementView(container);

           return false;
       })

    }, 
   
    registerAddBlockEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();



        container.on('click', '.addBlock', function (e) {
           var fieldElement = jQuery(this);
           
           var blockseq = jQuery("#new_blocks").val();
           blockseq++;
           
           var select_content = jQuery("#block_options").html();
           var select_action_content = jQuery("#block_action_options").html();
           
           jQuery("#new_blocks").val(blockseq);

            var actualmode = jQuery('input[name="actualmode"]').val();

            var addcontent = '<tr id="block_tr_seq_'+blockseq+'"><td class="fieldLabel medium"><select class="select2 col-lg-12" name="block_visibility_'+blockseq+'">'+select_content+'</select></td>';
            if (actualmode != "FieldsGroup") {
                addcontent += '<td><select class="select2 col-lg-6" name="block_select_visibility_'+blockseq+'" id="block_select_visibility_'+blockseq+'">'+select_action_content+'</select></td>';
            }
            addcontent += '<td style="width:2%;vertical-align: middle;"><a href="javascript:;"><i class="fa fa-trash trashBlock" data-type="block" data-seq="'+blockseq+'"></i></a></td></tr>';

            jQuery('#blocksTable').append(addcontent);

            var is_inventory_module = jQuery('input[name="is_inventory_module"]').val();
            if (is_inventory_module == '1') {

                jQuery('#blocksTable').find('select[name="block_visibility_'+blockseq+'"]').change(function(){
                    var disableValue = jQuery('#block_select_visibility_'+blockseq).find('option[value="3"]');

                    if (jQuery(this).val() == 'LBL_ITEM_DETAILS') {
                        disableValue.attr('disabled','disabled');
                    } else {
                        disableValue.removeAttr('disabled');
                    }
                    app.changeSelectElementView(container);
                });
            }

            app.changeSelectElementView(container);
           
           return false;
       })

    }, 
   
    registerAddFieldsGroupEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.addFieldsGroup', function (e) {
           var fieldElement = jQuery(this);
           
           var fields_groups_seq = jQuery("#new_fields_groups").val();
           fields_groups_seq++;
           
           var select_content = jQuery("#fields_groups_options").html();
           var select_action_content = jQuery("#field_action_options").html();
           
           jQuery("#new_fields_groups").val(fields_groups_seq);
           
           $('#fieldsGroupsTable').append('<tr id="fields_group_tr_seq_'+fields_groups_seq+'"><td class="fieldLabel medium"><select class="select2 col-lg-12" name="fields_group_visibility_'+fields_groups_seq+'">'+select_content+'</select></td><td><select class="select2 col-lg-6" name="fields_group_select_visibility_'+fields_groups_seq+'">'+select_action_content+'</select></td><td style="width:2%;vertical-align: middle;"><a href="javascript:;"><i class="fa fa-trash trashFieldsGroup" data-type="fields_group" data-seq="'+fields_groups_seq+'"></i></a></td></tr>');
           
           app.changeSelectElementView(container);
           
           return false;
       })

    }, 
   
   
    registerTrashIconEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.fa-trash', function (e) {
            var fieldElement = jQuery(this);
            var tr_seq = fieldElement.data('seq');
            var tr_type = fieldElement.data('type');
            
            if (tr_type == "field" || tr_type == 'block' || tr_type == 'fields_group') {                
                var message = app.vtranslate('LBL_DELETE_CONFIRMATION');
                app.helper.showConfirmationBox({'message' : message}).then(
                function(e) {
                    jQuery('#'+tr_type+'_tr_seq_'+tr_seq).fadeOut(300, function(){ $(this).remove();});
                });
            }
        });

    },

    registerFormSubmitEvent : function() {
        var self = this;
        var form = jQuery('#dynamicfields_step2');
        var params = {
            submitHandler: function(form) {
                return true;
            }
        };
        form.vtValidate(params);
    },

    registerHideBlockSelect : function() {

        var selectElement = jQuery('.hideBlockSelect');
        selectElement.on('change', function(e) {
            var currentElement = jQuery(e.currentTarget);
            var selectedOption = currentElement.find('option:selected');
            var action = selectedOption.val();

            var blockseq = currentElement.data('blockseq');

            var tableTbodyElement = jQuery('#table_tbody_' + blockseq);

            if (action == "1") {
                tableTbodyElement.removeClass('hide');
            } else {
                tableTbodyElement.addClass('hide');
            }
        });

    },

    registerEvents: function () {
        var container = this.getContainer();

        this.registerFormSubmitEvent();
        $("[name^=visibility]").each(function () {
            app.changeSelectElementView($(this));
        });

        this.registerLoadBackStepClickEvent();

        this.registerAddFieldEvent();
        this.registerAddBlockEvent();
        this.registerAddFieldsGroupEvent();
        this.registerTrashIconEvent();
        this.registerHideBlockSelect();
    }
});