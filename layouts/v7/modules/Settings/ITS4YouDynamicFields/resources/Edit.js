/*********************************************************************************
 * The content of this file is subject to the ListView Colors 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/
Settings_Vtiger_Edit_Js("Settings_ITS4YouDynamicFields_Edit_Js", {
    instance : {}
}, {
    currentInstance: false,
    dfContainer: false,
    dfActionContainer : false,

    init: function () {
        this.initiate();
    },

    initiate: function (container) {

        if (typeof container == 'undefined') {
            container = jQuery('.dynamicfieldsContents');
        }
        if (container.is('.dynamicfieldsContents')) {
            this.setContainer(container);
        } else {
            this.setContainer(jQuery('.dynamicfieldsContents', container));
        }

        var actual_step = jQuery('.actual_step', container).val();

        this.initiateStep(actual_step);
        this.currentInstance.registerEvents();
    },

    initiateStep: function (stepVal) {
        var step = 'step' + stepVal;
        var currentInstance = this.getInstance(stepVal);
        this.currentInstance = currentInstance;
    },

    /**
     * Function to get the container which holds all the workflow elements
     * @return jQuery object
     */
    getContainer: function () {
       return this.dfContainer;
    },
   
    /**
     * Function to get the container which holds all the workflow elements
     * @return jQuery object
     */
    getActionContainer: function () {
       return this.dfActionContainer;
    },
   
    /**
     * Function to set the reports container
     * @params : element - which represents the workflow container
     * @return : current instance
     */
    setContainer: function (element) {
       this.dfContainer = element;
       return this;
    },
   
    /**
    * Function to set the reports step1 container
    * @params : element - which represents the reports step1 container
    * @return : current instance
    */
    setActionContainer : function(element) {
            this.dfActionContainer = element;
            return this;
    },

    getInstance: function (step) {

        if (step in Settings_ITS4YouDynamicFields_Edit_Js.instance) {
            return Settings_ITS4YouDynamicFields_Edit_Js.instance[step];
        } else {
            var moduleClassName = 'Settings_ITS4YouDynamicFields_Edit' + step + '_Js';
            Settings_ITS4YouDynamicFields_Edit_Js.instance[step] = new window[moduleClassName]();
            return Settings_ITS4YouDynamicFields_Edit_Js.instance[step];
        }
    },

    getModuleName: function () {
        return app.getModuleName();
    },
});