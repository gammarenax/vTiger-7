/*********************************************************************************
 * The content of this file is subject to the ListView Colors 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

Settings_ITS4YouDynamicFields_EditGroup_Js("Settings_ITS4YouDynamicFields_EditGroup2_Js", {}, {
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
    registerMandatoryClickEvent: function () {
        $("input[name$='mandatory']").each(function () {
            $(this).click(function () {
                var fieldname = $(this).closest("td").data("fieldname");
                var fieldnameVisible = "visibility_" + fieldname;
                var select = $('select[name="' + fieldnameVisible + '"] option');
                var fieldnameVisibleId = '#' + fieldnameVisible;
                var optionValueVisible = fieldnameVisibleId + ' option[value="visible"]';
                var optionEmptyValue = fieldnameVisibleId + ' option[value=""]';
                if ($(this).is(':checked')) {
                    $(optionValueVisible).attr("selected", true);
                    $(optionEmptyValue).attr("selected", false);
                    $(fieldnameVisibleId).val('visible');
                    iterator = 0;
                    jQuery(select).each(function () {
                        jQuery('#' + fieldnameVisible + '_chzn_o_' + iterator).removeClass('result-selected');
                        var value = jQuery(this).val();
                        if (value === 'visible') {
                            jQuery(fieldnameVisibleId + '_chzn_o_' + iterator).addClass('result-selected');
                            jQuery(fieldnameVisibleId + '_chzn').find('a').find('span').text('Visible');
                        }
                        iterator++;
                    });
                } else {
                    $(optionEmptyValue).attr("selected", true);
                    $(optionValueVisible).attr("selected", false);
                    $(fieldnameVisibleId).val('');
                    iterator = 0;
                    jQuery(select).each(function () {
                        jQuery('#' + fieldnameVisible + '_chzn_o_' + iterator).removeClass('result-selected');
                        var value = jQuery(this).val();
                        if (value === '') {
                            jQuery(fieldnameVisibleId + '_chzn_o_' + iterator).addClass('result-selected');
                            jQuery(fieldnameVisibleId + '_chzn').find('a').find('span').text('Select option');
                        }
                        iterator++;
                    });
                }
            });
        });
    },    
    registerLoadBackStepClickEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.loadBackStep', function (e) {
            var dfRecordElement = jQuery('[name="record"]',container);
            var recordId = dfRecordElement.val();
            window.location.href = "index.php?module=ITS4YouDynamicFields&parent=Settings&view=EditGroup&mode=step1&record="+recordId;
        });
    },   
    registerSetAllClickEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.btn-set-all', function (e) {
           var fieldElement = jQuery(this);
           
           var fieldTable = fieldElement.closest('table');
           
           var fieldValue = fieldTable.find('.set-all-select').val();
          
           fieldTable.find('tbody').find('select').each(function() {
          
                var fieldSelect = jQuery(this);
                var selectId = fieldSelect.attr('id');
                //alert("selectId" + selectId);
                fieldSelect.val(fieldValue);
                app.destroyChosenElement(fieldSelect);
           });
           
           app.changeSelectElementView(container);
        });
    },
     
    registerAddFieldEvent:function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.addField', function (e) {
           var fieldElement = jQuery(this);
           
           var fieldseq = jQuery("#new_fields").val();
           fieldseq++;
           var select_content = jQuery("#field_options").html();
           
           jQuery("#new_fields").val(fieldseq);
           
           $('#fieldsTable').append('<tr id="field_tr_seq_'+fieldseq+'"><td class="fieldLabel medium"><select class="chzn-select row-fluid" name="field_visibility_'+fieldseq+'">'+select_content+'</select></td><td style="width:2%;vertical-align: middle;"><a href="javascript:;"><i class="icon-trash trashField" data-type="field" data-seq="'+fieldseq+'"></i></a></td></tr>');
           
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
           
           jQuery("#new_blocks").val(blockseq);
           
           $('#blocksTable').append('<tr id="block_tr_seq_'+blockseq+'"><td class="fieldLabel medium"><select class="chzn-select row-fluid" name="block_visibility_'+blockseq+'">'+select_content+'</select></td><td style="width:2%;vertical-align: middle;"><a href="javascript:;"><i class="icon-trash trashBlock" data-type="block" data-seq="'+blockseq+'"></i></a></td></tr>');
           
           app.changeSelectElementView(container);
           
           return false;
       })

    }, 
   
    registerTrashIconEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.icon-trash', function (e) {
            var fieldElement = jQuery(this);
            var tr_seq = fieldElement.data('seq');
            var tr_type = fieldElement.data('type');
            
            if (tr_type == "field" || tr_type == 'block') {                
                var message = app.vtranslate('LBL_DELETE_CONFIRMATION');
                Vtiger_Helper_Js.showConfirmationBox({'message' : message}).then(
                function(e) {
                    jQuery('#'+tr_type+'_tr_seq_'+tr_seq).fadeOut(300, function(){ $(this).remove();});
                });
            }
        });

    },
    
   registerSelectVisibleBlock: function () {
    
        jQuery(".selectVisibleBlock").each(function () {
            jQuery(this).change(function () {
                var value = jQuery(this).val();
                var block_seq = jQuery(this).data("blockseq");
                
                if (value == '2') {
                    jQuery('#table_tbody_' + block_seq).hide();
                    jQuery('#table_set_' + block_seq).hide();
                } else {
                    jQuery('#table_tbody_' + block_seq).show();
                    jQuery('#table_set_' + block_seq).show();
                }
            });
        });
    },    
    registerEvents: function () {
        var container = this.getContainer();
        this.registerMandatoryClickEvent();
        this.registerLoadBackStepClickEvent();
        this.registerSetAllClickEvent();
        this.registerAddFieldEvent();
        this.registerAddBlockEvent();
        this.registerTrashIconEvent();
        this.registerSelectVisibleBlock();
    }
});