/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

Settings_ITS4YouDynamicFields_EditGroup_Js("Settings_ITS4YouDynamicFields_EditGroup1_Js", {}, {
    step1Container: false,
    advanceFilterInstance: false,
    init: function () {
        this.initialize();
    },
    /**
     * Function to get the container which holds all the reports step1 elements
     * @return jQuery object
     */
    getContainer: function () {
        return this.step1Container;
    },
    /**
     * Function to set the reports step1 container
     * @params : element - which represents the reports step1 container
     * @return : current instance
     */
    setContainer: function (element) {
        this.step1Container = element;
        return this;
    },
    /**
     * Function  to intialize the reports step1
     */
    initialize: function (container) {
        if (typeof container == 'undefined') {
            container = jQuery('#dynamicfields_step1');
        }
        if (container.is('#dynamicfields_step1')) {
            this.setContainer(container);
        } else {
            this.setContainer(jQuery('#dynamicfields_step1'));
        }

    },
    submit: function () {
        var aDeferred = jQuery.Deferred();
        var form = this.getContainer();
        var formData = form.serializeFormData();

        var progressIndicatorElement = jQuery.progressIndicator({
            'position': 'html',
            'blockInfo': {
                'enabled': true
            }
        });
        AppConnector.request(formData).then(
                function (data) {
                    form.hide();
                    if (data.result) {
                        Settings_Vtiger_Index_Js.showMessage({text: app.vtranslate('JS_DYNAMICFIELDS_SAVED_SUCCESSFULLY')});
                        var dynamicfieldsRecordElement = jQuery('[name="record"]', form);
                        if (dynamicfieldsRecordElement.val() == '') {
                            dynamicfieldsRecordElement.val(data.result.id);
                        }
                        var params = {
                            module: app.getModuleName(),
                            parent: app.getParentModuleName(),
                            view: 'EditGroup',
                            mode: 'Step2',
                            record: data.result.id
                        };

                        AppConnector.request(params).then(function (data) {
                            aDeferred.resolve(data);
                            
                            progressIndicatorElement.progressIndicator({
                                'mode': 'hide'
                            });
                        });
                    }
                    
                },
                function (error, err) {

                }
        );
        return aDeferred.promise();
    },
    registerEvents: function () {

        var opts = app.validationEngineOptions;
        // to prevent the page reload after the validation has completed
        opts['onValidationComplete'] = function (form, valid) {
            //returns the valid status
            return valid;
        };
        opts['promptPosition'] = "bottomRight";
        jQuery('#dynamicfields_step1').validationEngine(opts);

        var container = this.getContainer();
        
        app.changeSelectElementView(container);
    }
});