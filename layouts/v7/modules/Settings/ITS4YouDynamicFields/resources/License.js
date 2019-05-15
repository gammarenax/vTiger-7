/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

Vtiger_List_Js("ITS4YouDynamicFields_License_Js", {
    licenseInstance: false,
    getInstance: function () {
        if (ITS4YouDynamicFields_License_Js.licenseInstance == false) {
            var instance = new window["ITS4YouDynamicFields_License_Js"]();
            ITS4YouDynamicFields_License_Js.licenseInstance = instance;
            return instance;
        }

        return ITS4YouDynamicFields_License_Js.licenseInstance;
    }
}, {
    /*
     * Function to get the value of the step
     * returns 1 or 2 or 3
     */
    getStepValue : function(){
        var container = this.currentInstance.getContainer();
        return jQuery('.step',container).val();
    },
    /*
     * Function to initiate all the operations for a step
     * @params step value
     */
    initiateStep : function(stepVal) {
        var step = 'step'+stepVal;
        this.activateHeader(step);
        jQuery('#stepContent'+(stepVal - 1)).hide();
        jQuery('#stepContent'+stepVal).show();
    },
    /*
     * Function to activate the header based on the class
     * @params class name
     */
    activateHeader : function(step) {
        var headersContainer = jQuery('.crumbs');
        headersContainer.find('.active').removeClass('active');
        jQuery('#'+step,headersContainer).addClass('active');
    },

    saveLicenseKey: function (form,is_install) {
        var thisInstance = this;
        if (is_install){
            var licensekey_val = jQuery('#licensekey').val();

            var params = {
                module : app.getModuleName(),
                licensekey : licensekey_val,
                action : 'License',
                parent : 'Settings',
                mode : 'editLicense',
                type : 'activate'
            };
        }
        else {
            var params = jQuery(form).serializeFormData();
        }

        thisInstance.validateLicenseKey(params).then(
            function(data) {
                if (!is_install){
                    app.hideModalWindow();
                    app.helper.showSuccessNotification({"message":data.message});

                    jQuery('#license_key_val').val(data.licensekey);
                    jQuery('#license_key_label').html(data.licensekey);
                    jQuery('.license_due_date_val').html(data.due_date);

                    jQuery('#divgroup1').hide();
                    jQuery('#divgroup2').show();

                    jQuery('.license_due_date_tr').show();

                } else {
                    thisInstance.initiateStep(2);
                }
            }
        );

    },
    validateLicenseKey: function (data) {
        var thisInstance = this;
        var aDeferred = jQuery.Deferred();

        thisInstance.checkLicenseKey(data).then(
            function(data) {
                aDeferred.resolve(data);
            },
            function(err){
                aDeferred.reject();
            }
        );
        return aDeferred.promise();
    },
    checkLicenseKey : function(params) {
        var aDeferred = jQuery.Deferred();
        app.helper.showProgress();
        app.request.post({'data' : params}).then(function(err,response) {
            app.helper.hideProgress();
            if(err === null){
                var result = response.success;
                if(result == true) {
                    aDeferred.resolve(response);
                } else {
                    app.helper.showErrorNotification({"message":response.message});
                    aDeferred.reject(response);
                }
            } else{
                app.helper.showErrorNotification({"message":err});
                aDeferred.reject();
            }
        });
        return aDeferred.promise();
    },
    saveFirstCompany: function () {
        var aDeferred = jQuery.Deferred();
        var par = {
            module: app.getModuleName(),
            action: 'SaveFirstCompany'
        };
        app.request.post({'data': par}).then(function(err,response) {
            if(err === null){
                aDeferred.resolve(response);
            } else {
                app.helper.showErrorNotification({"message":err});
                aDeferred.reject(response);
            }
        });
        return aDeferred.promise();
    },
    editLicense : function($type) {
        var aDeferred = jQuery.Deferred();
        var thisInstance = this;

        app.helper.showProgress();

        var license_key = jQuery('#license_key_val').val();
        var url = "index.php?module=ITS4YouDynamicFields&view=IndexAjax&parent=Settings&mode=editLicense&type="+$type+"&key="+license_key;

        app.request.post({'url':url}).then(
            function (err, response) {
                if (err === null) {
                    app.helper.hideProgress();
                    app.helper.showModal(response, {
                        'cb': function (modalContainer) {
                            modalContainer.find('#js-edit-license').on('click', function (e){
                                var form = modalContainer.find('#editLicense');
                                var params = {
                                    submitHandler: function (form) {
                                        if (!this.valid) {
                                            return false;
                                        }
                                        thisInstance.saveLicenseKey(form, false);
                                    }
                                };
                                form.vtValidate(params);
                            });
                        }
                    });
                }
            }
        );

        return aDeferred.promise();
    },
    registerActions : function() {
        var thisInstance = this;

        jQuery('#activate_license_btn').click(function() {
            thisInstance.editLicense('activate');
        });
        jQuery('#reactivate_license_btn').click(function() {
            thisInstance.editLicense('reactivate');
        });
        jQuery('#deactivate_license_btn').click(function() {
            thisInstance.deactivateLicense();
        });
    },
    registerEvents: function() {
        this.registerActions();
    },
    deactivateLicense: function () {
        var deactivateActionUrl = 'index.php?module=ITS4YouDynamicFields&action=License&mode=deactivateLicense&parent=Settings';

        app.request.post({'url':deactivateActionUrl + '&type=control'}).then(
            function(err1,response1) {
                if(err1 === null){
                    app.helper.showConfirmationBox({'message': response1.question}).then(function(data) {
                        app.helper.showProgress();
                        app.request.post({'url':deactivateActionUrl}).then(
                            function (err, response) {
                                if (err === null) {
                                    if (response.success) {
                                        app.helper.showSuccessNotification({message: response.deactivate});

                                        jQuery('#license_key_val').val("");
                                        jQuery('#license_key_label').html("");

                                        jQuery('#divgroup1').show();
                                        jQuery('#divgroup2').hide();

                                        jQuery('.license_due_date_tr').hide();


                                    } else {
                                        app.helper.showErrorNotification({message: response.deactivate});
                                    }
                                } else {
                                    app.helper.showErrorNotification({"message":err});
                                }
                                app.helper.hideProgress();
                            }
                        );
                    });
                } else {
                    app.helper.hideProgress();
                    app.helper.showErrorNotification({"message":err});
                }
            });
    },
    registerInstallActions : function() {
        jQuery('#next_button').click(function() {
            window.location.href = "index.php?module=ITS4YouDynamicFields&view=List&parent=Settings";
        });
    },
    registerInstallEvents: function() {
        var thisInstance = this;
        var form = jQuery('#editLicense');
        form.on('submit', function(e){
            e.preventDefault();
            thisInstance.saveLicenseKey(form,true);
        });
        this.registerInstallActions();
    }
});