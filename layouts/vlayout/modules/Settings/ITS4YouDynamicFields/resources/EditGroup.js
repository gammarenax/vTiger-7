/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

Settings_Vtiger_Edit_Js("Settings_ITS4YouDynamicFields_EditGroup_Js", {
    instance: {}

}, {
    currentInstance: false,
    dfContainer: false,
    init: function () {
        this.initiate();
    },
    /**
     * Function to get the container which holds all the listviewcolor elements
     * @return jQuery object
     */
    getContainer: function () {
        return this.dfContainer;
    },
    /**
     * Function to set the reports container
     * @params : element - which represents the listviewcolor container
     * @return : current instance
     */
    setContainer: function (element) {
        this.dfContainer = element;
        return this;
    },
    /*
     * Function to return the instance based on the step of the Workflow
     */
    getInstance: function (step) {

        if (step in Settings_ITS4YouDynamicFields_EditGroup_Js.instance) {
            return Settings_ITS4YouDynamicFields_EditGroup_Js.instance[step];
        } else {
            var moduleClassName = 'Settings_ITS4YouDynamicFields_EditGroup' + step + '_Js';
            Settings_ITS4YouDynamicFields_EditGroup_Js.instance[step] = new window[moduleClassName]();
            return Settings_ITS4YouDynamicFields_EditGroup_Js.instance[step];
        }
    },
    /*
     * Function to get the value of the step 
     * returns 1 or 2 or 3
     */
    getStepValue: function () {
        var container = this.currentInstance.getContainer();
        return jQuery('.actual_step', container).val();
    },
    /*
     * Function to initiate the step 1 instance
     */
    initiate: function (container) {
        if (typeof container == 'undefined') {
            container = jQuery('.dynamicfieldsContents');
        }
        if (container.is('.dynamicfieldsContents')) {
            this.setContainer(container);
        } else {
            this.setContainer(jQuery('.dynamicfieldsContents', container));
        }

        var actual_step = jQuery('.load_step', container).val();
        this.initiateStep(actual_step);
        this.currentInstance.registerEvents();
    },
    /*
     * Function to initiate all the operations for a step
     * @params step value
     */
    initiateStep: function (stepVal) {
        var step = 'step' + stepVal;
        //this.activateHeader(step);
        var currentInstance = this.getInstance(stepVal);
        this.currentInstance = currentInstance;
    },
    /*
     * Function to activate the header based on the class
     * @params class name
     */
    activateHeader: function (step) {
        var headersContainer = jQuery('.crumbs ');
        headersContainer.find('.active').removeClass('active');
        jQuery('#' + step, headersContainer).addClass('active');
    },
    /*
     * Function to register the click event for next button
     */
    registerFormSubmitEvent: function (form) {
        var thisInstance = this;
        if (jQuery.isFunction(thisInstance.currentInstance.submit)) {
            form.on('submit', function (e) {
                var form = jQuery(e.currentTarget);
                var specialValidation = true;
                if (jQuery.isFunction(thisInstance.currentInstance.isFormValidate)) {
                    var specialValidation = thisInstance.currentInstance.isFormValidate();
                }
                if (form.validationEngine('validate') && specialValidation) {
                    thisInstance.currentInstance.submit().then(function (data) {
                        thisInstance.getContainer().append(data);
                        var stepVal = thisInstance.getStepValue();
                        var nextStepVal = parseInt(stepVal) + 1;
                        thisInstance.initiateStep(nextStepVal);
                        thisInstance.currentInstance.initialize();
                        var container = thisInstance.currentInstance.getContainer();
                        thisInstance.registerFormSubmitEvent(container);
                        thisInstance.currentInstance.registerEvents();
                    });

                }
                e.preventDefault();
            });
        }
    },
    back: function () {
        var step = this.getStepValue();
        var prevStep = parseInt(step) - 1;
        this.currentInstance.initialize();
        var container = this.currentInstance.getContainer();
        var listviewcolorRecordElement = jQuery(/*'[name="record"]',*/container);
        var workFlowId = listviewcolorRecordElement.val();
        container.remove();
        this.initiateStep(prevStep);
        var currentContainer = this.currentInstance.getContainer();
        currentContainer.show();
        jQuery(/*'[name="record"]',*/currentContainer).val(workFlowId);
        var modulesList = jQuery('#moduleName', currentContainer);
        if (modulesList.length > 0 && workFlowId != '') {
            modulesList.attr('disabled', 'disabled').trigger('liszt:updated');
        }
    },
    registerBackStepClickEvent: function () {
        var thisInstance = this;
        var container = this.getContainer();
        container.on('click', '.backStep', function (e) {
            thisInstance.back();
        });
    },
    registerEvents: function () {
        var form = this.currentInstance.getContainer();
        this.registerFormSubmitEvent(form);
        this.registerBackStepClickEvent();
    }
});

