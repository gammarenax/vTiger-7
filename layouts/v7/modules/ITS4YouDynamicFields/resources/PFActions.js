/*********************************************************************************
 * The content of this file is subject to the ListView Colors 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

Vtiger.Class("ITS4YouDynamicFields_PFActions_Js",{

	getInstance: function(){
	},

	getInstanceByModuleName : function(moduleName){
	},
},{
    firstLoad: true,
    viewType: false,
    forModule: false,
    forView: false,
    forRecord: false,
    modulefields : false,
    nummodulefields : 0,
    formElement : false,
    control_man_file : [],
    cf: false,
    dfContainer: false,
    isreadonlyfield : [],

    run : function(recordId, actiondata, container){
        thisInstance = this;

        thisInstance.viewType = app.view();

		if (actiondata.data) {
            if(typeof actiondata.data.action != "undefined") {

                if (actiondata.data.action == "setDynamicFields") {

                    thisInstance.forModule = actiondata.data.for_module;
                    thisInstance.forView = actiondata.data.for_view;
                    thisInstance.forRecord = actiondata.data.for_record;


                	//this.setColor(actiondata.data);
                    var load_modulefields = [];
                    thisInstance.setContainer(container);
                    thisInstance.HideOrShowFields(thisInstance,actiondata.data.fields,0,load_modulefields);

                    thisInstance.firstLoad = false;
                }
            }
		}
    },
    HideOrShowFields : function(thisInstance,response,nummodulefields,modulefields){

        var thisInstance = this;
        var result = response['success'];
        var module = thisInstance.forModule;

        if(result == true) {

            jQuery('.fieldBlockContainer').each(function() {

                thisInstance.modifyBlockContent(this,'start');
            });

            jQuery('.block').each(function() {
                var blockid = jQuery(this).data('blockid');
                if (typeof blockid != 'undefined') {
                    thisInstance.modifyBlockContent(this,'start');
                }
            });

            var new_fields = [];

            thisInstance.modulefields =  response['fields'];
            thisInstance.nummodulefields =  response['numfields'];



            var numhidefields = response['numhidefields'];

            thisInstance.setDebugText("HideOrShowFields Start view:"+thisInstance.forView);

            if (numhidefields > 0) {
                var hidefields = response['hidefields'];
                for(var i=0; i< numhidefields; i++){
                    var fieldname = hidefields[i];

                    if (thisInstance.forView == "Detail"){
                        var link_key = this.getLinkKey();
                        if (link_key == "LBL_RECORD_DETAILS" || typeof link_key == 'undefined') {
                            jQuery("#"+module+"_detailView_fieldLabel_"+fieldname).hide();
                            jQuery("#"+module+"_detailView_fieldValue_"+fieldname).hide();
                        } else if (link_key == "LBL_RECORD_SUMMARY") {
                            var fieldElement = jQuery("#"+module+"_detailSummary_fieldName_"+fieldname);
                            if (fieldElement.length > 0){
                                this.modifyTRLine(fieldElement,"hide");
                            } else if (module == "Assets") {
                                jQuery("#"+module+"_detailView_fieldLabel_"+fieldname).hide();
                                jQuery("#"+module+"_detailView_fieldValue_"+fieldname).hide();
                            }
                        }
                        if (fieldname == "imagename") {
                            jQuery( "#imageContainer" ).closest('tr').find('td').hide();
                        }

                    } else {
                        thisInstance.setDebugText('hide fieldname ' + fieldname + ' start ');
                        var fieldElement = thisInstance.getFieldElementByName(fieldname);
                        if (fieldElement.length > 0){

                            thisInstance.setDebugText('hide fieldname ' + fieldname + ' continue');
                            this.disableField(fieldElement,true);
                            this.modifyTRLine(fieldElement,"hide");
                        }
                    }
                }
            }
            var numshowreadonlyfields = response['numshowreadonlyfields'];
            var numhideinblock = response['numhideinblock'];
            var numshowfields = response['numshowfields'];
            if (numshowfields > 0) {
                var showfields = response['showfields'];
                for(var i=0; i<numshowfields; i++){

                    var fieldElement = this.getFieldElementByName(showfields[i]);
                    this.disableField(fieldElement,false);

                    var is_mofified = this.modifyTRLine(fieldElement,"show");

                    if (is_mofified) {
                        fieldtype = fieldElement.attr('type');

                        if (typeof fieldtype == 'undefined') {
                            fieldtype = "";
                        }

                        if (fieldtype != "file") {
                            if (numshowreadonlyfields > 0 || numhideinblock > 0 ) {
                                if (jQuery.inArray(showfields[i], response['showreadonlyfields']) == -1){
                                //if (jQuery.inArray(showfields[i], response['showreadonlyfields']) == -1 && jQuery.inArray(showfields[i], response['hideinblock'])){
                                    new_fields.push(showfields[i]);
                                }
                            } else {
                                new_fields.push(showfields[i]);
                            }
                        }
                    }

                    if (jQuery.inArray(showfields[i], response['showmanfields']) == -1){

                        var fieldElement = thisInstance.getFieldElementByName(showfields[i]);
                        var controlMan = fieldElement.closest('tr').find('.redColor');

                        if (controlMan) {
                            if (controlMan.length > 0) {
                                var is_mofified = thisInstance.modifyValidationToElement(showfields[i],"hide");
                            }
                        }
                    }
                }
            }

            if (numshowreadonlyfields > 0) {
                var showreadonlyfields = response['showreadonlyfields'];

                for(var i=0; i<numshowreadonlyfields; i++){
                    var fieldElement = this.getFieldElementByName(showreadonlyfields[i]);

                    this.disableField(fieldElement,false);

                    this.readonlyField(showreadonlyfields[i],fieldElement,true);
                }
            }

            var numhidereadonlyfields = response['numhidereadonlyfields'];
            if (numhidereadonlyfields > 0) {
                var hidereadonlyfields = response['hidereadonlyfields'];

                for(var i=0; i<numhidereadonlyfields; i++){
                    var fieldElement = this.getFieldElementByName(hidereadonlyfields[i]);
                    this.readonlyField(hidereadonlyfields[i],fieldElement,false);
                }
            }

            if (thisInstance.forView == "Edit"){
                var numshowmanfields = response['numshowmanfields'];
                if (numshowmanfields > 0) {
                    var showmanfields = response['showmanfields'];
                    for(var i=0; i<numshowmanfields; i++){
                        is_mofified = false;

                        var is_mofified = thisInstance.modifyValidationToElement(showmanfields[i],"show");
/*
                        if (fieldElement.length > 0){
                            var ClosestTR = fieldElement.closest('tr');
                            var ClosestTD = fieldElement.closest('td');

                            var ClosestTDContent = ClosestTD.html();

                            var fieldElement2 = jQuery("[name='"+showmanfields[i]+"[]']");
                            if (fieldElement2.length > 0){
                                fieldElement = fieldElement2;
                            }

                            for(var c=0; c<2; c++){
                                var k = c * 2;
                                var TDContent1 = ClosestTR.find('td').eq((k));
                                var TDContent2 = ClosestTR.find('td').eq((k + 1)).html();
                                if (ClosestTDContent == TDContent2) {
                                    var RedSpan = TDContent1.find('.redColor');

                                    if (RedSpan.length > 0) {

                                        if (RedSpan.is(':hidden')) {
                                            is_mofified = true;
                                            RedSpan.show();
                                        }
                                    } else {
                                        //ClosestTR.find('td').eq(k).find('label').prepend('<span class="redColor">*</span> ');
                                        TDContent1.append(' <span class="redColor">*</span>');
                                        is_mofified = true;
                                    }

                                    this.addValidationToElement(showmanfields[i],fieldElement,true);
                                } else if (ClosestTDContent == TDContent1.html()) {
                                    is_mofified = true;
                                    this.addValidationToElement(showmanfields[i],fieldElement,true);
                                }
                            }
                        }*/
                        if (is_mofified) {
                            if (numhideinblock > 0 ) {
                                if (jQuery.inArray(showmanfields[i], response['hideinblock']) == -1){
                                    new_fields.push(showmanfields[i]);
                                }
                            } else {
                                new_fields.push(showmanfields[i]);
                            }
                        }
                    }
                }

                var numhidemanfields = response['numhidemanfields'];
                if (numhidemanfields > 0) {
                    var hidemanfields = response['hidemanfields'];
                    for(var i=0; i<numhidemanfields; i++){


                        is_mofified = thisInstance.modifyValidationToElement(hidemanfields[i],"hide");

                    }
                }
            }

            var numshowinpopup = response['numshowinpopup'];
            if (numshowinpopup > 0) {
                var showinpopup = response['showinpopup'];

                for(var i=0; i<numshowinpopup; i++){
                    if (jQuery.inArray(showinpopup[i], new_fields) == -1 && jQuery.inArray(showinpopup[i], response['showreadonlyfields']) == -1) {
                        new_fields.push(showinpopup[i]);
                    }
                }
            }
            if (response['hideinvblock'] != '') {

                var totalProductCount = jQuery('input[name="total"]');

                if (totalProductCount.length > 0) {
                    var invElement = totalProductCount.next('div[name="editContent"]');
                } else {
                    var invElement = jQuery(".details.block");
                }

                if (response['hideinvblock'] == '1') {
                    invElement.addClass('hide');
                } else if (response['hideinvblock'] == '0') {
                    invElement.removeClass('hide');
                }
            }
            if (new_fields.length > 0 && !thisInstance.firstLoad){
                thisInstance.createPopup(new_fields, response);
            }

            thisInstance.setDebugText("HideOrShowFields End");
        }

        //jQuery(".contentsDiv").find('.showInlineTable, .detailview-table').each(function() {
        jQuery('.fieldBlockContainer').each(function() {

            thisInstance.modifyBlockContent(this,'end');
        });

        jQuery('.block').each(function() {
            var blockid = jQuery(this).data('blockid');
            if (typeof blockid != 'undefined') {
                thisInstance.modifyBlockContent(this,'end');
            }
        });

    },
    modifyValidationToElement: function (fieldname,type) {

        var fieldElement = this.getFieldElementByName(fieldname);

        var thisInstance = this;
        var is_mofified = false;

        if (fieldElement.length > 0){
            var ClosestTR = fieldElement.closest('tr');
            var ClosestTD = fieldElement.closest('td');

            ClosestTDContent = ClosestTD.html();
            var fieldElement2 = jQuery("[name='"+fieldname+"[]']");
            if (fieldElement2.length > 0){
                fieldElement = fieldElement2;
            }

            for(var c=0; c<2; c++){
                var k = c * 2;
                var TDContent1 = ClosestTR.find('td').eq((k));
                var TDContent2 = ClosestTR.find('td').eq((k + 1)).html();

                if (type == "hide") {
                    if (ClosestTDContent == TDContent2) {
                        TDContent1.find('.redColor').hide();
                        thisInstance.addValidationToElement(fieldname,fieldElement,false);
                    } else if (ClosestTDContent == TDContent1.html()) {
                        thisInstance.addValidationToElement(fieldname,fieldElement,false);
                    }
                } else if (type == "show") {
                    if (ClosestTDContent == TDContent2) {
                        var RedSpan = TDContent1.find('.redColor');

                        if (RedSpan.length > 0) {

                            if (RedSpan.is(':hidden')) {
                                is_mofified = true;
                                RedSpan.show();
                            }
                        } else {
                            //ClosestTR.find('td').eq(k).find('label').prepend('<span class="redColor">*</span> ');
                            TDContent1.append(' <span class="redColor">*</span>');
                            is_mofified = true;
                        }

                        thisInstance.addValidationToElement(fieldname,fieldElement,true);
                    } else if (ClosestTDContent == TDContent1.html()) {
                        is_mofified = true;
                        thisInstance.addValidationToElement(fieldname,fieldElement,true);
                    }

                    thisInstance.readonlyField(fieldname,fieldElement,false);

                }

            }
        }
        return is_mofified;
    },
    modifyBlockContent: function (self,type) {
        var thisInstance = this;
        var elementTable = jQuery(self);

        if (type == "start") {
            elementTable.show();
            elementTable.next("br").show();
        } else {
            var is_hidden = false;
            var allTD = jQuery(self).find('tbody > tr > td').length;
            var hiddenTD = jQuery(self).find('tbody > tr').find( "td:hidden" ).length;
            var is_two = allTD - hiddenTD;

            if (is_two == "2") {
                var is_blank = true;
                jQuery(self).find('tbody > tr').find( "td:visible" ).each(function() {
                    var contentTD = jQuery(this).html();
                    if (contentTD != "") {
                        is_blank = false;
                    }
                })

                if (is_blank == true){
                    allTD = hiddenTD;
                }
            }

            if (thisInstance.forView == "Detail" && allTD == hiddenTD) {
                jQuery(self).find(".blockToggle:visible" ).each(function() {
                    var hidden_type = jQuery(self).data("mode");
                    if (hidden_type == "hide") is_hidden = true;
                })
            }
            if (allTD == hiddenTD) {
                if(jQuery(self).is(":visible") == false) {
                    is_hidden = true;
                }

                if (!is_hidden) {
                    elementTable.hide();
                    elementTable.next("br").hide();
                }
            } else {
                elementTable.show();
                elementTable.next("br").show();
            }
        }
    },
    disableField: function (fieldElement, disabled_value) {
        if (fieldElement.hasClass("nodisablefield") && disabled_value == true) {
            return;
        }
        fieldElement.prop( "disabled", disabled_value);
    },
    readonlyField: function (fieldname, fieldElement, disabled_value) {

        var thisInstance = this;
        /*
        if (jQuery.inArray(fieldname, thisInstance.isreadonlyfield) > -1  && disabled_value == true) {
            return;
        } else if (jQuery.inArray(fieldname, thisInstance.isreadonlyfield) == -1  && disabled_value == false) {
            return;
        }*/

        if (fieldElement.hasClass("noreadonlyfield") && disabled_value == true) {
            return;
        }
        var fieldtype = "";

        if (fieldElement.hasClass("dateField")) {

            fieldtype = "date";

            var contextDivFieldElement = fieldElement.closest('div');

            if (disabled_value) {
                fieldElement.addClass("dateFieldDisabled");
                fieldElement.unbind();
            } else {
                fieldElement.removeClass("dateFieldDisabled");
                fieldElement.bind();
                //app.registerEventForDatePickerFields(fieldElement);
            }
        } else if (fieldElement.is("select")) {

            if (fieldElement.hasClass("select2")) {
                this.disableField(fieldElement,disabled_value);
                app.showSelect2ElementView(fieldElement);
                fieldElement.attr('disabled',false);
            } else {
                fieldElement.attr('disabled',disabled_value).trigger("liszt:updated");
                fieldElement.attr('disabled',false);
            }

        } else {
            /*
            var fieldtype = "";
           var fieldDataInfo = fieldElement.data('fieldinfo');
           if (typeof fieldDataInfo != 'undefined') {
               var fieldtype = fieldDataInfo.type;
           }*/

            var fieldtype = fieldElement.data('fieldtype');

            if (typeof fieldtype == "undefined") {
                fieldtype = fieldElement.attr('type');
            }

            if (fieldtype == "hidden") {
                if (fieldElement.hasClass('sourceField')) {
                    var controlElement = fieldElement.closest('td').find("[name='"+fieldname+"_display']");
                    if (controlElement.length > 0) {
                        fieldElement = controlElement;
                        fieldtype = "reference";
                    }
                }
            }

            if (fieldtype == "file") {
                var fileDeleteElements = fieldElement.closest('td').find('.fileDelete');
                if (disabled_value) {
                    fieldElement.hide();
                    fileDeleteElements.hide();
                } else {
                    fieldElement.show();
                    fileDeleteElements.show();
                }

            } else {

                var select2Element = jQuery("[name='"+fieldElement.attr("name")+"[]']");

                if (typeof select2Element != "undefined") {
                    if (select2Element.hasClass("select2")) {
                        this.disableField(select2Element,disabled_value);
                        app.showSelect2ElementView(select2Element);
                        select2Element.attr('disabled',false);
                    }
                }
            }
        }

        if (disabled_value) {
            var newFieldElement = jQuery('.fieldname_' + fieldname + '_readonly');
            if (fieldElement.length > 1) {
                var copyElement = jQuery('#'+thisInstance.forModule+'_editView_fieldName_'+fieldname);
            } else if (fieldtype == "reference") {
                var copyElement = fieldElement.closest('td').find("[name='"+fieldname+"_display']");
            } else {
                var copyElement = fieldElement;
            }

            if (newFieldElement.length === 0 && copyElement.length != 0) {
                newFieldElement = copyElement.clone();

                newFieldElement.insertAfter( copyElement );
                newFieldElement.attr('id','');
                newFieldElement.attr('name','');
                newFieldElement.addClass('fieldname_' + fieldname + '_readonly');
                newFieldElement.prop('disabled', true);

                fieldElement.hide();
            }

            if (fieldtype == "reference") {
                fieldElement.closest('td').find('.cursorPointer').hide();
                fieldElement.closest('td').find('.clearReferenceSelection').addClass('hide');
            }


            fieldElement.closest('td').find('.action').hide();

            thisInstance.isreadonlyfield.push(fieldname);

        } else {
            jQuery('.fieldname_' + fieldname + '_readonly').remove();
            fieldElement.show();

            if (fieldtype == "reference") {
                fieldElement.closest('td').find('.cursorPointer').show();
                if (fieldElement.val() != "") {
                    fieldElement.closest('td').find('.clearReferenceSelection').removeClass('hide');
                }
            }

            var k = jQuery.inArray(fieldname, thisInstance.isreadonlyfield);
            if (k > -1){
                thisInstance.isreadonlyfield.splice(k, 1);
            }

            fieldElement.closest('td').find('.action').show();
        }

        fieldElement.prop( "readonly", disabled_value);
    },
    getFieldElementByName: function(fieldname) {
        var thisInstance = this;

        var container = thisInstance.getContainer();
        if (container) {
            var fieldElement = container.find("[name='"+fieldname+"[]']",);
            if (!fieldElement.length){
                fieldElement = container.find("[name='"+fieldname+"']");
            }
        } else {

            var fieldElement = jQuery("[name='"+fieldname+"[]']");
            if (!fieldElement.length){
                fieldElement = jQuery("[name='"+fieldname+"']");
            }
        }
        /*
                thisInstance.setDebugText('getFieldElementByName ' + thisInstance.forModule+"_editView_fieldName_"+fieldname );
                var fieldElement = jQuery("#"+thisInstance.forModule+"_editView_fieldName_"+fieldname);

                var fieldElement = jQuery("[name='"+fieldname+"[]']");
                if (!fieldElement.length){
                    fieldElement = jQuery("[name='"+fieldname+"']");
                }*/




        if (!fieldElement.length){

            fieldElement = jQuery("#"+thisInstance.forModule+"_detailView_fieldValue_"+fieldname).find('span');
        }
        return fieldElement;
    },
    modifyTRLine : function (fieldElement, type) {
        var is_mofified = false;
        if (fieldElement.length > 0){
            var ClosestTABLE = fieldElement.closest('table');
            var ClosestTR = fieldElement.closest('tr');
            var ClosestTD = fieldElement.closest('td');

            if (ClosestTD.is(':hidden')) {
                if (type == "show") {
                    is_mofified = true;
                }
            } else {
                if (type == "hide") {
                    is_mofified = true;
                }
            }
            if (type == "show") {
                if (ClosestTABLE.is(':hidden')) {
                    ClosestTABLE.show();
                    ClosestTABLE.next("br").show();
                };
                ClosestTD.attr('display','');
                ClosestTD.show();
            } else {
                ClosestTD.hide();
            }

            ClosestTDContent = ClosestTD.html();

            for(var c=0; c<2; c++){
                var k = c * 2;
                var TDContent = ClosestTR.find('td').eq((k + 1)).html();
                if (ClosestTDContent == TDContent) {
                    var TDElement = ClosestTR.find('td').eq(k);

                    if (type == "show") {
                        TDElement.attr('display','');
                        TDElement.show();
                    } else {
                        TDElement.hide();
                    }
                }
            }
        }

        return is_mofified;
    },
    addValidationToElement : function(elementName,fieldElement,is_mandatory) {
        var thisInstance = this;
        var is_select2 = false;
        var actualize_selectbox = false;

        //var fieldDataInfo = fieldElement.data('fieldinfo');
        //if (typeof fieldDataInfo != 'undefined') {
            //var fieldMandatory = fieldDataInfo.mandatory;
            //var fieldType = fieldDataInfo.type;
            //var fieldName = fieldDataInfo.name;

            var fieldname = fieldElement.data('fieldname');
            if (typeof fieldname == "undefined") {
                var fieldName = fieldElement.attr('name');
            }

            var fieldtype = fieldElement.data('fieldtype');
            if (typeof fieldtype == "undefined") {
                fieldtype = fieldElement.attr('type');
            }

            var fieldMandatory = fieldElement.data('rule-required');

        //
            if (fieldtype == "hidden") {
                if (fieldElement.hasClass('sourceField')) {
                    var controlElement = fieldElement.closest('td').find("[name='"+fieldName+"_display']");
                    if (controlElement.length > 0) {
                        fieldElement = controlElement;
                        fieldtype == "reference";
                    }
                }
            }

            if (fieldtype == "file") {
                var ClosestTD = fieldElement.closest('td');
                var uploadedFileNameElement = ClosestTD.find(".uploadedFileName");
                if (uploadedFileNameElement.not(":empty") && is_mandatory){
                    var totalInputElements = uploadedFileNameElement.find("input");
                    if (totalInputElements.length > 0){
                        var inputElements = uploadedFileNameElement.find("input[value='1']");
                        if (inputElements.length > 0){
                            is_mandatory = false;
                        }
                    } else {
                        is_mandatory = false;
                    }
                }

                if ((fieldMandatory || thisInstance.control_man_file[fieldName]) && !is_mandatory){
                    thisInstance.control_man_file[fieldName] = true;
                } else {
                    thisInstance.control_man_file[fieldName] = false;
                }
            } else if (fieldtype == "multipicklist" || fieldtype == "picklist") {
                actualize_selectbox = true;
            }

            thisInstance.setDebugText("addValidationToElement " + fieldName);

            if (fieldMandatory != is_mandatory) {
                thisInstance.setDebugText("modifi mandatory " + fieldName);

                fieldElement.data('rule-required',is_mandatory);

                fieldElement.attr('aria-required',is_mandatory);

                if (fieldtype == "reference"){
                    fieldElement.data('rule-reference_required',is_mandatory);
                }

                /*
                var validationHandler = fieldElement.attr('data-validation-engine');

                if (typeof validationHandler == "undefined") validationHandler = "";

                var newValidationHandler = validationHandler;

                if(is_mandatory && validationHandler == "") {
                    var newValidationHandler = 'validate[';
                    newValidationHandler +="required,";
                    newValidationHandler +="funcCall[Vtiger_";
                    newValidationHandler +="Base";
                    newValidationHandler +="_Validator_Js.invokeValidation]]";
                } else {
                    var controlrequired = validationHandler.substring(9, 18);

                    if ((controlrequired == "required," || controlrequired == " required") && is_mandatory == false) {
                        newValidationHandler = 'validate[';
                        if (controlrequired == " required") {
                            var subnum = 19;
                        } else {
                            var subnum = 18;
                        }
                        newValidationHandler += validationHandler.substring(subnum);
                    }
                    if (controlrequired != "required," && controlrequired != " required" &&  is_mandatory == true) {
                        newValidationHandler = 'validate[required,';
                        newValidationHandler += validationHandler.substring(9);
                    }
                }
                fieldMandatory = is_mandatory;
                fieldDataInfo.mandatory = is_mandatory;


                fieldElement.attr('data-fieldinfo', JSON.stringify(fieldDataInfo));


                if (fieldElement.data('fieldinfo') == fieldDataInfo) {
                    thisInstance.setDebugText("modifi fieldinfo " + fieldName + " ok - "+fieldType+" - " + JSON.stringify(fieldDataInfo));
                } else {
                    thisInstance.setDebugText("modifi fieldinfo " + fieldName + " error");
                }
                if (newValidationHandler != validationHandler && fieldElement.hasClass("ckEditorSource") == false) {
                    fieldElement.attr('data-validation-engine', newValidationHandler);
                }*/

                if (fieldElement.hasClass("select2")) {
                    is_select2 = true;
                    actualize_selectbox = true;
                }

                if (actualize_selectbox) {

                    if (is_select2 == true) {
                        app.showSelect2ElementView(fieldElement);
                    } else {
                        save_form = thisInstance.getForm();
                        app.destroyChosenElement(fieldElement);
                        app.changeSelectElementView(save_form);
                    }
                }


            } else {
                thisInstance.setDebugText("no modifi mandatory " + fieldName);
            }
        //}
    },
    getContainer: function () {
        return this.dfContainer;
    },
    setContainer: function (element) {
        this.dfContainer = element;
        return this;
    },
    setDebugText : function(text){
        if (window.console) console.log('[ITS4YouDynamicFields] ' + text);

    },
    updateFields : function(load_form,save_form,type){

        var thisInstance = this;
        var params = load_form.serializeFormData();

        if (thisInstance.forView == "Edit"){

            for (fieldname in params) {
                var is_select2 = false
                var loadFieldElement = load_form.find("[name='"+fieldname+"']");
                var fieldElement = save_form.find("[name='"+fieldname+"']");

                if (fieldElement.length > 0){
                    if (fieldElement.is('select')){
                        var choicesSaveList = fieldElement.find('option');
                        if (fieldElement.hasClass("select2")) {
                            is_select2 = true;
                        }
                        choicesSaveList.each(function(choiceSaveListIndex,saveElement){
                            var SaveOptionElement = jQuery(saveElement);

                            if (loadFieldElement.find('option[value="'+SaveOptionElement.val()+'"]').is(':selected')) {
                                SaveOptionElement.attr("selected","selected");
                            } else {
                                SaveOptionElement.removeAttr("selected");
                            }
                        });
                        fieldElement.trigger("liszt:updated");

                        if (is_select2 == true) {
                            app.showSelect2ElementView(fieldElement);
                        } else {
                            app.destroyChosenElement(fieldElement);
                            app.changeSelectElementView(save_form);
                        }
                    } else {
                        if(fieldElement.length > 1){
                            fieldElement.each(function(i, obj) {
                                var newFieldElement = jQuery(obj);
                                thisInstance.setFieldVal(fieldname,newFieldElement,loadFieldElement,params[fieldname]);
                            });
                        } else {
                            thisInstance.setFieldVal(fieldname,fieldElement,loadFieldElement,params[fieldname]);
                        }
                    }
                }
            }
        } else {
            if (type == "save") {
                var postData = {
                    "module" : thisInstance.forModule,
                    "record" : thisInstance.forRecord,
                    "action" : "SaveAjax"
                }
                postData = jQuery.extend(params, postData);
                app.request.post({data:postData}).then(function(err,data){
                    if(err === null) {
                        if (!data.error) {
                            jQuery('.vt-notification').remove();
                            app.event.trigger("post.its4you.DF.QuickEditForm.save",data,params);
                            app.helper.hideModal();
                            app.helper.showSuccessNotification({"message":app.vtranslate('JS_RECORD_UPDATED')});
                            window.location.reload();
                        } else {
                            app.helper.showErrorNotification({"message":data.error});
                        }
                    }else{
                        app.event.trigger("post.its4you.DF.QuickEditForm.save",data,params);
                        app.helper.showErrorNotification({"message":err});
                    }
                });
            }
        }
    },
    setFieldVal : function(fieldname,fieldElement,loadFieldElement,newval){
/*
        var fieldtype = "";
        var fieldDataInfo = fieldElement.data('fieldinfo');
        if (typeof fieldDataInfo != 'undefined') {
            fieldtype = fieldDataInfo.type;
        }
*/
        var fieldtype = fieldElement.data('fieldtype');
        if (typeof fieldtype == "undefined") {
            fieldtype = fieldElement.attr('type');
        }

        if (fieldtype == "boolean" || fieldtype == "checkbox") {
            if(loadFieldElement.is(':checked')) {
                fieldElement.attr('checked','checked');
            } else {
                fieldElement.removeAttr('checked');
            }
        } else {
            fieldElement.val(newval);
        }

    },
    updateSelectFields : function(load_form,save_form){
        var params = load_form.serializeFormData();

        for (fieldname in params) {
            var loadFieldElement = load_form.find("[name='"+fieldname+"']");
            var fieldElement = save_form.find("[name='"+fieldname+"']");

            if (fieldElement.length > 0){
                if (fieldElement.is('select')){
                    var load_options = loadFieldElement.html();
                    fieldElement.html(load_options);
                } else {
                    fieldElement.val(params[fieldname]);
                }
            }
        }

        return save_form;
    },
    createPopup : function(new_fields,response,callBackFunction){

        var thisInstance = this;
        var module = app.getModuleName();

        if(typeof callBackFunction == 'function'){
            thisInstance.cf = callBackFunction;
        } else {
            thisInstance.cf = false;
        }

        var postData = {
            "module": "ITS4YouDynamicFields",
            "its4you_for_module" : thisInstance.forModule,
            "its4you_for_view" : thisInstance.forView,
            "its4you_for_record" : thisInstance.forRecord,
            "view" : "showFieldsAjax",
            "show_fields" : JSON.stringify(new_fields),
            "showmanfields" : JSON.stringify(response['showmanfields']),
            "hidemanfields" : JSON.stringify(response['hidemanfields']),
        }

        this.setDebugText("createPopup");

        var str = jQuery.param( postData );
        thisInstance.setDebugText('createPopup');
        thisInstance.setDebugText(str);


        app.request.post({data: postData}).then(
            function (error, result) {

                if (!error) {
/*
                    if(typeof thisInstance.cf == 'function'){
                        var callBackFunction = thisInstance.cf;
                    } else {
                    */
                        var callBackFunction = function(data, save_form) {

                            //var form = jQuery('#QuickEdit');
                            //var form = jQuery(data).find('.recordEditView');
                            var form = data.find('.recordEditView');

                            form.submit(function(e) {
                                e.preventDefault();
                            });

                            var params = {
                                submitHandler : function(form){
                                    //var save_form = thisInstance.getForm();
                                    var load_form = jQuery(form);

                                    thisInstance.updateFields(load_form,save_form,'save');
                                    app.hideModalWindow();
                                }
                            }
                            form.vtValidate(params);
/*
                            var params = app.validationEngineOptions;
                            params.onValidationComplete = function(load_form, valid){
                                if(valid) {
                                    var save_form = thisInstance.getForm();
                                    thisInstance.updateFields(load_form,save_form);
                                    app.hideModalWindow();
                                    return valid;
                                }
                            }
                            form.validationEngine(params);

                            form.submit(function(e) {
                                e.preventDefault();
                            })
*/
                            if(jQuery('.QuickEditScroll').height() > 400){
                                app.showScrollBar(jQuery('.QuickEditScroll'), {
                                    height: '400px',
                                    railVisible:true,
                                    alwaysVisible: true
                                });
                            }
                        }
                        /*
                    }
*/
                    var load_form = thisInstance.getForm();
                    var edit_data = thisInstance.updateSelectFields(load_form,jQuery(result));

                    app.helper.showModal(edit_data, {
                        'cb' : function(modalContainer) {
                            modalContainer.find("a[name='copyAddress']").closest('div').hide();
                            thisInstance.updateFields(load_form,modalContainer,'load');

                            modalContainer.on('click', '.relatedPopup', function(e){
                                var editViewObj = new Vtiger_Edit_Js();
                                editViewObj.openPopUp(e);
                                return false;
                            });

                            if(typeof callBackFunction == 'function'){
                                callBackFunction(modalContainer, load_form);
                            }
                        }
                    });
                }
            },
            function(error) {
            })

    },
    getForm : function(){
        if(this.formElement == false){
            this.setForm(jQuery('#EditView'));
        }
        return this.formElement;
    },
    setForm : function(element){
        this.formElement = element;
        return this;
    },
    getLinkKey : function(){
        tabContainer =  jQuery('div.related-tabs');
        var active_tab = tabContainer.find('li.active');
        var link_key = active_tab.data('link-key');

        return link_key;
    },
});
