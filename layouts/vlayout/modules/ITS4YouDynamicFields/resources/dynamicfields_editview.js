/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

jQuery.Class("ITS4YouDynamicFields_Fields_Js",{
    viewType: false,
    modulefields : false,
    nummodulefields : 0,
    formElement : false,    
    control_man_file : [],
    cf: false,
    getInstance : function(view){
        this.setDebugText("ITS4YouDynamicFields_Fields_Js start");
        var thisInstance = this;
        var formElement = this.getForm();
        this.viewType = view;

        if (view == "Edit" || view == 'AdminEdit' || view == 'Detail'){

            if (view == "Edit"){           
                this.getFields();

                jQuery(".chzn-select",formElement).change(function(){            
                    var forfieldname = jQuery(this).attr("name");
                    thisInstance.controlField(forfieldname,jQuery(this),false);
                });   

                jQuery(".select2",formElement).change(function(){            
                    var fieldDataInfo = jQuery(this).data('fieldinfo');
                    if (typeof fieldDataInfo != 'undefined') {
                        var forfieldname = fieldDataInfo.name;
                        thisInstance.controlField(forfieldname,jQuery(this),false);
                    }
                });  

                jQuery(".its-multicheckbox",formElement).on("click",function(e){ 
                    var CHElement = jQuery(this);
                    var fieldDataInfo = CHElement.data('fieldinfo');
                    if (typeof fieldDataInfo != 'undefined') {
                        var forfieldname = fieldDataInfo.name;

                        if (window.its4you_modulefields_data[forfieldname] == CHElement.val()) {
                            window.its4you_modulefields_data[forfieldname] = "";
                        }                       

                        thisInstance.controlField(forfieldname,CHElement,false);
                    }
                });  

                jQuery(document).on('Vtiger.Reference.Selection',  function(e,data){
                    var selectElement = jQuery(e.target);
                    var forfieldname = selectElement.attr("name");
                    thisInstance.controlField(forfieldname,selectElement,false);
                });

            } else {            
                var link_key = this.getLinkKey();
                if (link_key == "LBL_RECORD_DETAILS" || link_key == "LBL_RECORD_SUMMARY" || typeof link_key == 'undefined') {
                    this.getFields();
                }
            }          

            formElement.find('.clearReferenceSelection').on("click",function(e){
                var ClosestTD = jQuery(this).closest('td');
                var selectElement = ClosestTD.find('.sourceField');
                var forfieldname = selectElement.attr("name");
                thisInstance.controlField(forfieldname,jQuery(this),false);
            });
        }
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
    getSelectedColumns : function(selectElement) {
            var select2Element = app.getSelect2ElementFromSelect(selectElement);
            var selectedValuesByOrder = new Array();            
            var Options = selectElement.find('option');
        
            var selectedOptions = selectElement.find('option:selected');
            var orderedSelect2Options = select2Element.find('li.select2-search-choice').find('div');
            orderedSelect2Options.each(function(index,element){
                    var chosenOption = jQuery(element);
                    selectedOptions.each(function(optionIndex, domOption){
                            var option = jQuery(domOption);
                            if(option.html() == chosenOption.html()) {
                                    selectedValuesByOrder.push(option.val());
                                    return false;
                            }
                    });
            });
            return selectedValuesByOrder;
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
    updateFields : function(load_form,save_form){
        var thisInstance = this;
        var params = load_form.serializeFormData();

        for (fieldname in params) {  
            var is_select2 = false
            var loadFieldElement = load_form.find("[name='"+fieldname+"']");
            var fieldElement = save_form.find("[name='"+fieldname+"']");
            
            if (fieldElement.length > 0){               

                if (fieldElement.is('select')){      

                    var selectId = loadFieldElement.attr('id');
                    var selectId2 = fieldElement.attr('id');
                    
                    var new_values = [];
                    var choicesSaveList = fieldElement.find('option');                    
                    
                    if (fieldElement.hasClass("select2")) { 
                        is_select2 = true;
                        var select2LoadElement = load_form.find('#s2id_'+selectId);
                        var select2SaveElement = save_form.find('#s2id_'+selectId2);

                        var choicesLoadContainer = select2LoadElement.find('ul.select2-choices');
                        var choicesLoadList = choicesLoadContainer.find('li.select2-search-choice').find('div');
                        
                    } else {  

                        var select2LoadElement = load_form.find('#'+selectId+'_chzn');
                        var select2SaveElement = save_form.find('#'+selectId2+'_chzn');

                        var choicesLoadContainer = select2LoadElement.find('.chzn-drop').find('ul.chzn-results');
                        var choicesLoadList = choicesLoadContainer.find('li.active-result');                   
                    }                    
                    
                    choicesSaveList.each(function(choiceSaveListIndex,saveElement){
                            var liSaveElement = jQuery(saveElement);
                            liSaveElement.removeAttr("selected");    
                            choicesLoadList.each(function(choiceLoadListIndex,loadElement){                             
                                var liLoadElement = jQuery(loadElement);    

                                if (liLoadElement.html() == liSaveElement.html()) {
                                    if (liLoadElement.hasClass("result-selected") || is_select2 == true) {
                                        new_values.push(liSaveElement.val());
                                    }
                                }
                            }) 
                    })
                    
                    fieldElement.val(new_values);
                    if (is_select2 == true) {
                        app.showSelect2ElementView(fieldElement);
                    } else {
                        app.destroyChosenElement(fieldElement);
                        app.changeSelectElementView(save_form);
                    }
                } else {     
                    
                    if(fieldElement.length > 1){
                        fieldElement.each(function() {
                            var newFieldElement = jQuery(this);    
                            thisInstance.setFieldVal(newFieldElement,loadFieldElement,params[fieldname]);
                        });
                    } else {
                        thisInstance.setFieldVal(fieldElement,loadFieldElement,params[fieldname]);
                    }
                    
                   
                }                
            }
        }
    }, 
    setFieldVal : function(fieldElement,loadFieldElement,newval){
        var fieldtype = "";
        var fieldDataInfo = fieldElement.data('fieldinfo');
        if (typeof fieldDataInfo != 'undefined') {
            fieldtype = fieldDataInfo.type;
        }

        if (fieldtype == "boolean") {
            if(loadFieldElement.is(':checked')) {
                fieldElement.attr('checked','checked');
            } else {
                fieldElement.removeAttr('checked');
            }
        } else {
            fieldElement.val(newval);
        }

    }, 
    setDebugText : function(text){
    if (window.console) console.log('[ITS4YouDynamicFields] ' + text);

    },    
    createPopup : function(new_fields,response,callBackFunction){
        
        var thisInstance = this;
        var module = app.getModuleName();    

        if(typeof callBackFunction == 'function'){
            thisInstance.cf = callBackFunction;
        } else {
            thisInstance.cf = false;
        }

        var urlParams = {
            "module": "ITS4YouDynamicFields",
            "its4you_for_module" : module,
            "view" : "showFieldsAjax",
            "show_fields" : JSON.stringify(new_fields),
            "showmanfields" : JSON.stringify(response['showmanfields']),
            "hidemanfields" : JSON.stringify(response['hidemanfields']),
        } 
        
        this.setDebugText("createPopup");
        
        AppConnector.request(urlParams).then(
                function(data) {
                    if (data) {
                        if(typeof thisInstance.cf == 'function'){
                            var callBackFunction = thisInstance.cf;
                        } else {    
                        var callBackFunction = function(data) {
                                var form = jQuery('#QuickEdit');

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

                                if(jQuery('.QuickEditScroll').height() > 400){
                                    app.showScrollBar(jQuery('.QuickEditScroll'), {
                                       height: '400px',
                                       railVisible:true,
                                       alwaysVisible: true
                                    });
                                }
                            }
                        }
                        var load_form = thisInstance.getForm();

                        var edit_data = thisInstance.updateSelectFields(load_form,jQuery(data));

                        app.showModalWindow(edit_data,function(data){

                                thisInstance.updateFields(load_form,data);

                                if(typeof callBackFunction == 'function'){
                                        callBackFunction(data);
                                }   
                        });
                    }
                },
                function(error) {
                })
        
    },
    getFields : function(){
        var thisInstance = this;
        var module = app.getModuleName();
        
        if (this.viewType == "Edit"){  
            var formElement = this.getForm();
            var formData = formElement.serializeFormData();
            var recordId = formData["record"];
        } else {
            var recordId = jQuery('#recordId').val();
        }

        var urlParams = {
            "module": "ITS4YouDynamicFields",
            "its4you_for_module" : module,
            "action" : "IndexAjax",
            "mode" : "getFields",
            "recordId" : recordId,
            "viewtype" : this.viewType
        }        
        
        var progressInstance = jQuery.progressIndicator({
            'position' : 'html',
            'blockInfo' : {
                'enabled' : true
            }
        });

        this.setDebugText("getFields");

        AppConnector.request(urlParams).then(
            function(data){
                if (data) {
                    if (typeof data['result'] != 'undefined') {
                        var response = data['result'];
                        var result = response['success'];

                        if(result == true) {       
                            window.its4you_modulefields =  response['fields']; 
                            window.its4you_nummodulefields =  response['numfields'];                         

                            if (thisInstance.viewType == "Edit"){
                                if (document.readyState == "complete") {
                                    thisInstance.setDebugText("controlFields a");
                                        thisInstance.controlFields();

                                } else {
                                    jQuery(document).ready(function() {
                                        thisInstance.setDebugText("controlFields b");
                                        thisInstance.controlFields();
                                    }); 
                                }
                            } else {
                                var load_modulefields = [];
                                thisInstance.HideOrShowFields(thisInstance,data,0,load_modulefields); 
                            }
                        } else {

                            if (response['message']) thisInstance.setDebugText("message: "+ response['message']);
                        }
                    }
                    progressInstance.progressIndicator({
                        'mode' : 'hide'
                    });
                    thisInstance.setDebugText("ITS4YouDynamicFields_Fields_Js end");
                }
            },  
            function(error) {
                    thisInstance.setDebugText("ITS4YouDynamicFields_Fields_Js error end ");
                    progressInstance.progressIndicator({
                            'mode' : 'hide'
                        });
            });
    },
    getLinkKey : function(){
        tabContainer =  jQuery('div.related');
        var active_tab = tabContainer.find('li.active');
        var link_key = active_tab.data('link-key');
                        
        return link_key;
    },
    HideOrShowFields : function(thisInstance,data,nummodulefields,modulefields){
        var module = app.getModuleName();
        var thisInstance = this;
        var response = data['result'];
        var result = response['success'];

        if(result == true) {
            var new_fields = [];
            var result_text = response['text'];
            var numhidefields = response['numhidefields']; 
            
            var numconditions = response['debug'].length;
  
            thisInstance.setDebugText("HideOrShowFields Start");
            if (numconditions > 0) {              
                var debugs = response['debug'];
                
                for(var i=0; i< numconditions; i++){
                    
                    this.setDebugText("name: "+ debugs[i]["name"]);
                    if (debugs[i]["conditions"]) this.setDebugText("conditions: "+ debugs[i]["conditions"]);
                    this.setDebugText("conditions_result: "+ debugs[i]["conditions_result"]);
                    if (debugs[i]["info"]) this.setDebugText("info: "+ debugs[i]["info"]);
                }
            }
                       
            if (numhidefields > 0) {
                var hidefields = response['hidefields'];
                for(var i=0; i< numhidefields; i++){
                    var fieldname = hidefields[i];
                    if (thisInstance.viewType == "Detail"){
                        var link_key = this.getLinkKey();
                        if (link_key == "LBL_RECORD_DETAILS" || typeof link_key == 'undefined') {
                            jQuery("#"+module+"_detailView_fieldLabel_"+fieldname).hide();
                            jQuery("#"+module+"_detailView_fieldValue_"+fieldname).hide();
                        } else if (link_key == "LBL_RECORD_SUMMARY") {
                            var fieldElement = jQuery("#"+module+"_editView_fieldName_"+fieldname);

                            if (fieldElement.length > 0){
                                this.modifyTRLine(fieldElement,"hide");
                            } else if (module == "Assets") {                                
                                jQuery("#"+module+"_detailView_fieldLabel_"+fieldname).hide();
                                jQuery("#"+module+"_detailView_fieldValue_"+fieldname).hide();
                            }
                        }
                    } else {                        

                        var fieldElement = this.getFieldElementByName(fieldname);
                        if (fieldElement.length > 0){
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
                        if (numshowreadonlyfields > 0 || numhideinblock > 0 ) {
                            if (jQuery.inArray(showfields[i], response['showreadonlyfields']) == -1 && jQuery.inArray(showfields[i], response['hideinblock']) == -1){
                                new_fields.push(showfields[i]);
                            }                         
                        } else {
                            new_fields.push(showfields[i]);
                        }
                    }
                }
            } 
             
            if (numshowreadonlyfields > 0) {
                var showreadonlyfields = response['showreadonlyfields'];
                
                for(var i=0; i<numshowreadonlyfields; i++){
                    var fieldElement = this.getFieldElementByName(showreadonlyfields[i]);
                            
                    this.disableField(fieldElement,false);
                    this.readonlyField(fieldElement,true);
                }
            }

            var numhidereadonlyfields = response['numhidereadonlyfields']; 
            if (numhidereadonlyfields > 0) {
                var hidereadonlyfields = response['hidereadonlyfields'];
                
                for(var i=0; i<numhidereadonlyfields; i++){
                    var fieldElement = this.getFieldElementByName(hidereadonlyfields[i]);
                    this.readonlyField(fieldElement,false);
                }
            }
            
            if (thisInstance.viewType == "Edit"){  
                var numshowmanfields = response['numshowmanfields'];
                if (numshowmanfields > 0) {
                    var showmanfields = response['showmanfields'];
                    for(var i=0; i<numshowmanfields; i++){
                        is_mofified = false;
                        var fieldElement = this.getFieldElementByName(showmanfields[i]);
                        
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
                                        ClosestTR.find('td').eq(k).find('label').prepend('<span class="redColor">*</span> ');
                                        is_mofified = true;
                                    }

                                    this.addValidationToElement(showmanfields[i],fieldElement,true);
                                } else if (ClosestTDContent == TDContent1.html()) {                                   
                                    is_mofified = true;
                                    this.addValidationToElement(showmanfields[i],fieldElement,true);
                                }
                            } 
                        }                    
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
                        var fieldElement = this.getFieldElementByName(hidemanfields[i]);
                        
                        if (fieldElement.length > 0){
                            var ClosestTR = fieldElement.closest('tr');
                            var ClosestTD = fieldElement.closest('td');

                            ClosestTDContent = ClosestTD.html();
                            var fieldElement2 = jQuery("[name='"+hidemanfields[i]+"[]']");
                            if (fieldElement2.length > 0){
                                fieldElement = fieldElement2;
                            }

                            for(var c=0; c<2; c++){                        
                                var k = c * 2;                         
                                var TDContent1 = ClosestTR.find('td').eq((k));
                                var TDContent2 = ClosestTR.find('td').eq((k + 1)).html();
                                if (ClosestTDContent == TDContent2) {
                                    TDContent1.find('.redColor').hide();
                                    this.addValidationToElement(hidemanfields[i],fieldElement,false);
                                } else if (ClosestTDContent == TDContent1.html()) {                                   
                                    this.addValidationToElement(hidemanfields[i],fieldElement,false);
                                }
                            }  
                        }
                    }
                }            

                if (nummodulefields > 0 && new_fields.length > 0){
                    thisInstance.createPopup(new_fields, response);
                }
            }
        }
        
        jQuery(".contentsDiv").find('.showInlineTable, .detailview-table').each(function() {
            var is_hidden = false;
            var allTD = jQuery(this).find('tbody > tr > td').length;  
            var hiddenTD = jQuery(this).find('tbody > tr').find( "td:hidden" ).length;
            
            elementTable = jQuery(this);

            var is_two = allTD - hiddenTD;
            
            if (is_two == "2") {
               
                var is_blank = true;
                jQuery(this).find('tbody > tr').find( "td:visible" ).each(function() {
                    var contentTD = jQuery(this).html();  
                    if (contentTD != "") { 
                        is_blank = false;
                    }
                })
                
                if (is_blank == true){ 
                    allTD = hiddenTD;
                }
            } 

            if (thisInstance.viewType == "Detail" && allTD == hiddenTD) {
                jQuery(this).find(".blockToggle:visible" ).each(function() {
                    var hidden_type = jQuery(this).data("mode");
                    if (hidden_type == "hide") is_hidden = true;
                })
            }

            if (allTD == hiddenTD) {
                if(jQuery(this).is(":visible") == false) {
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
            
        });         
    },    
    disableField: function (fieldElement, disabled_value) {
        if (fieldElement.hasClass("nodisablefield") && disabled_value == true) { 
            return;
        }
        fieldElement.prop( "disabled", disabled_value);
    }, 
    readonlyField: function (fieldElement, disabled_value) {
        
        if (fieldElement.hasClass("noreadonlyfield") && disabled_value == true) { 
            return;
        }
        if (fieldElement.hasClass("dateField")) { 
            
            var contextDivFieldElement = fieldElement.closest('div');
            
            if (disabled_value) {
                fieldElement.addClass("dateFieldDisabled");
                fieldElement.unbind();
            } else {
                fieldElement.removeClass("dateFieldDisabled");
                fieldElement.bind();
                app.registerEventForDatePickerFields(fieldElement);
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
            var fieldtype = "";
            var fieldDataInfo = fieldElement.data('fieldinfo');
            if (typeof fieldDataInfo != 'undefined') {
                var fieldtype = fieldDataInfo.type;
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
        
        fieldElement.prop( "readonly", disabled_value);
    },    
    getFieldElementByName: function(fieldname) {
        var fieldElement = jQuery("[name='"+fieldname+"[]']");
        if (!fieldElement.length){
            fieldElement = jQuery("[name='"+fieldname+"']");
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
        var fieldDataInfo = fieldElement.data('fieldinfo');
        if (typeof fieldDataInfo != 'undefined') {
            var fieldMandatory = fieldDataInfo.mandatory;
            var fieldType = fieldDataInfo.type;
            var fieldName = fieldDataInfo.name;

            if (fieldType == "reference"){
                fieldElement = jQuery("[name='"+fieldName+"_display']");
            } else if (fieldType == "file") {
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
            } else if (fieldType == "multipicklist" || fieldType == "picklist") {
                actualize_selectbox = true;
            }
           
            thisInstance.setDebugText("addValidationToElement " + fieldName);
           
            if (fieldMandatory != is_mandatory) {
                thisInstance.setDebugText("modifi mandatory " + fieldName);
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
                }
                
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
        }
    },
    controlField : function(forfieldname, field, validate){
        this.setDebugText("controlField start");
        var thisInstance = this;
        var modulefields = window.its4you_modulefields; 
        var nummodulefields = window.its4you_nummodulefields;
        if (forfieldname != ""){ 

            if (thisInstance.control_man_file[forfieldname] && validate == true){
                var fieldElement = thisInstance.getFieldElementByName(forfieldname);
                thisInstance.addValidationToElement(forfieldname,fieldElement,true);
            }
            if(jQuery.inArray(forfieldname, modulefields) !== -1) {
                if(typeof field != 'undefined' && typeof window.its4you_modulefields_data != 'undefined'){
                    var fieldtype = "";
                    var field_val = field.val();
                    var fieldDataInfo = field.data('fieldinfo');
                    if (typeof fieldDataInfo != 'undefined') {
                        fieldtype = fieldDataInfo.type;
                        if (fieldtype == "boolean" && field.not(':checked')){
                            field_val = "";
                        }
                    }
                    
                    if (window.its4you_modulefields_data[forfieldname] == field_val) {
                        return false;
                    }
                }            
                thisInstance.controlFields();
            }
        }
    },
    controlFields : function(){
        
        this.setDebugText("controlFields start");
        var thisInstance = this;
        var modulefields = window.its4you_modulefields; 
        var nummodulefields = window.its4you_nummodulefields;
        thisInstance.setDebugText("controlField point 1");
        var for_module = app.getModuleName();
        var postData = {
            "module": "ITS4YouDynamicFields",
            "action": "IndexAjax",
            "mode": "controlFields",
            "its4you_for_module": for_module
        };

        var formElement = this.getForm();
        var formData = formElement.serializeFormData();
        thisInstance.setDebugText("controlField point 2");
        for(var i=0; i<nummodulefields; i++){
            var fieldName = modulefields[i];
            var fieldValue = formData[fieldName];
            //if (typeof formData[fieldName] == 'undefined') {

            var fieldElement = thisInstance.getFieldElementByName(fieldName);
            if (typeof fieldElement != 'undefined') {
                var fieldDataInfo = fieldElement.data('fieldinfo');
                if (typeof fieldDataInfo != 'undefined') {
                    var fieldtype = fieldDataInfo.type;

                    if (fieldtype == "multipicklist") {
                        fieldValue = "";
                        if (typeof fieldDataInfo.fieldtype != "undefined" && fieldDataInfo.fieldtype == "CH"){

                            var fieldValuesCH = [];
                            fieldElement.each(function(index,element){
                                var chosenCheckbox = jQuery(element);
                                if (chosenCheckbox.is(":checked")){
                                    fieldValuesCH.push(chosenCheckbox.val());
                                }
                            });
                            if (fieldValuesCH.length > 0){
                                fieldValue = fieldValuesCH.join(" |##| ");
                            }
                        } else {
                            if (fieldElement.val() != null) {
                                fieldValue = fieldElement.val().join(" |##| ");
                            }
                        }
                    }
                    if (fieldtype == "file") {
                        var fieldValue = "";
                        if (fieldElement.val() != null && fieldElement.val() != "") {
                            fieldValue = fieldElement.val();
                        } else {
                            var closestDiv = fieldElement.closest("div");
                            var inputElements = jQuery(".uploadedFileDetails",closestDiv).find("input[value='1']");
                            if (inputElements.length > 0){
                                fieldValue = "1";
                            }
                        }
                    }
                }
            }            //}
            postData[fieldName] = fieldValue;                    
        }
        window.its4you_modulefields_data = postData;
        thisInstance.setDebugText("controlField point 3");
        AppConnector.request(postData).then(
            function(data) {
                thisInstance.HideOrShowFields(thisInstance,data,nummodulefields,modulefields);   
                thisInstance.setDebugText("controlFields end");
            }
        )
    }
},{
   
});

var view = app.getViewName();
ITS4YouDynamicFields_Fields_Js.getInstance(view);

jQuery(document).ready(function() {
    var view = app.getViewName();

    if (view == 'Edit' || view == 'AdminEdit' || view == 'Detail') {        
        
        if (view == 'Detail') {
            ITS4YouDynamicFields_Fields_Js.getInstance(view);

            app.listenPostAjaxReady(function(){

                view = app.getViewName();
                ITS4YouDynamicFields_Fields_Js.getInstance(view);
                
            }); 
        }
        if (view == 'Edit' || view == 'AdminEdit') {
            
            var ITS4YouDynamicFieldsoldInvokeValidation = Vtiger_Base_Validator_Js.invokeValidation
           
            Vtiger_Base_Validator_Js.invokeValidation = function (field, rules, i, options){

               var result = ITS4YouDynamicFieldsoldInvokeValidation(field, rules, i, options);
               
                if(!result){                    
                    if(typeof window.its4you_modulefields != 'undefined'){
                        
                        var fieldData = field.data();
                        var fieldInfo = fieldData.fieldinfo;
                        if(typeof fieldInfo != 'undefined'){
                            
                            
                            ITS4YouDynamicFields_Fields_Js.controlField(fieldInfo.name, field, true);
                        }
                    }
                    
                } else {  
                    
                    return result;
                }               
            }
            
        }   
        
    } 
});  
       