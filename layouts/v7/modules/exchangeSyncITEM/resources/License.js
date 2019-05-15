/*********************************************************************************
 * The content of this file is subject to the crmReady license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT&M Srl
 * Portions created by IT&M Srl are Copyright(C) IT&M Srl
 * All Rights Reserved.
 ********************************************************************************/
if (typeof(crmReady_License_Js) == 'undefined') {

    var crmReady_License_Js = {

        initialize: function() {},

        editLicense: function($type) {
            var aDeferred = jQuery.Deferred();
            var thisInstance = this;
            var module=app.getModuleName();
            /*
            var form = jQuery('#formlicense');

                            var params = app.validationEngineOptions;
                            params.onValidationComplete = function(form, valid){
                                    if(valid) {
                                            
                                            //thisInstance.saveLicenseKey(form,false);
                                            return valid;
                                    }
                            }
                            form.validationEngine(params);

                            form.submit(function(e) {
                                    e.preventDefault();
                            })
            */
            var progressIndicatorElement = jQuery.progressIndicator({
                'position': 'html',
                'blockInfo': {
                    'enabled': true
                }
            });
            var license_key = jQuery('#license_key_val').val();
            var params = {
                module: app.getModuleName(),
                action: 'License',
                mode: 'activateLicense',
                type: $type,
                key: license_key
            }

            //url = "index.php?module="+module+"&action=License&mode=activateLicense&type="+$type+"&key="+license_key;

            app.request.post({
                "data": params
            }).then(
                function(err, data) {
                    if (data.success == true) {
                        var params = {
                            title: 'License Activated',
                            type: 'info'
                        };
                        jQuery('#license_key_val').attr('disabled', true);
                        thisInstance.showMessage(params);
                        progressIndicatorElement.progressIndicator({
                            'mode': 'hide'
                        });
                       window.location.href = 'index.php?module=' + module + '&view=List';
                        return;
                    } else {
                        var params = {
                            title: 'Error',
                            text: 'Error',
                            type: 'error'
                        };
                        thisInstance.showMessage(params);
                        progressIndicatorElement.progressIndicator({
                            'mode': 'hide'
                        });
                        if (data.code == "EMPTY_LICENSE") {
                            jQuery('#license_key_val').focus();
                        }
                    }
                });
            return aDeferred.promise();
        },
        /*
         * Function to Save the CustomLabel Details
         */

        saveLicenseKey: function(form, is_install) {
            var thisInstance = this;

            if (is_install) {
                var licensekey_val = jQuery('#licensekey').val()
                params = {};
                params.module = app.getModuleName();
                params.licensekey = licensekey_val;
                params.action = "License";
                params.mode = "activateLicense";

            } else {
                if (typeof params == 'undefined') {
                    params = {};
                }

                var params = form.serializeFormData();
            }

            thisInstance.validateLicenseKey(params).then(
                function(data) {

                    if (!is_install) {
                        app.hideModalWindow();

                        var params = {
                            text: app.vtranslate(data['message'])
                        };
                        thisInstance.showMessage(params);

                        jQuery('#license_key_val').val(data.licensekey);
                        jQuery('#license_key_label').html(data.licensekey);

                        jQuery('#divgroup1').hide();
                        jQuery('#divgroup2').show();
                    } else {
                        jQuery('#step1').hide();
                        jQuery('#step2').show();

                        jQuery('#steplabel1').removeClass("active");
                        jQuery('#steplabel2').addClass("active");
                    }
                },
                function(data, err) {}
            );
        },

        validateLicenseKey: function(data) {

            var thisInstance = this;
            var aDeferred = jQuery.Deferred();

            var form = jQuery('#editLicense');
            var CustomLabelElement = form.find('[name="licensekey"]');

            thisInstance.checkLicenseKey(data).then(
                function(data) {
                    aDeferred.resolve(data);
                },
                function(data, err) {
                    CustomLabelElement.validationEngine('showPrompt', data['message'], 'error', 'bottomLeft', true);
                    aDeferred.reject(data);
                }
            );

            return aDeferred.promise();

        },

        /*
         * Function to check Duplication of Tax Name
         */

        checkLicenseKey: function(params) {
            var aDeferred = jQuery.Deferred();
            /*
             var progressIndicatorElement = jQuery.progressIndicator({
                'position' : 'html',
                'blockInfo' : {
                        'enabled' : true
                }
            });
            */

            AppConnector.request(params).then(
                function(err, data) {
                    var response = data['result'];
                    var result = response['success'];

                    if (result == true) {
                        aDeferred.resolve(response);
                    } else {

                        aDeferred.reject(response);
                    }
                });

            //progressIndicatorElement.progressIndicator({'mode':'hide'});
            return aDeferred.promise();
        },

        registerActions: function() {

            var thisInstance = this;
            var container = jQuery('#LicenseContainer');

            jQuery('#activate_license_btn').click(function(e) {
                thisInstance.editLicense('activate');
            });

            jQuery('#reactivate_license_btn').click(function(e) {
                thisInstance.editLicense('reactivate');
            });

            jQuery('#deactivate_license_btn').click(function(e) {
                thisInstance.deactivateLicense();
            });


        },

        deactivateLicense: function() {

            var module = app.getModuleName();
            var license_key = jQuery('#license_key_val').val();
            //var deactivateActionUrl = 'index.php?module='+module+'&action=License&mode=deactivateLicense&key='+license_key;

            var message = app.vtranslate('LBL_DELETE_CONFIRMATION');
            app.helper.showConfirmationBox({
                'message': message
            }).then(function(data) {

                var progressIndicatorElement = jQuery.progressIndicator({
                    'position': 'html',
                    'blockInfo': {
                        'enabled': true
                    }
                });
                var params = {
                    module: app.getModuleName(),
                    action: 'License',
                    mode: 'deactivateLicense',
                    key: license_key
                }

                app.request.post({
                    "data": params
                }).then(
                    function(err, data2) {

                        if (data2.success == true) {
                            var params2 = {
                                title: 'License Deactivated',
                                type: 'info'
                            };
                        } else {
                            var params2 = {
                                title: 'Error',
                                text: 'Error',
                                type: 'error'
                            };
                        }

                       window.location.href = 'index.php?module=' + module + '&view=List';
                        Vtiger_Helper_Js.showMessage(params2);
                        progressIndicatorElement.progressIndicator({
                            'mode': 'hide'
                        });
                        return;
                    });
            });
        },

        registerEvents: function() {
            this.registerActions();
        },

        registerInstallEvents: function() {
            var thisInstance = this;

            this.registerInstallActions();

            var form = jQuery('#editLicense');
            var params = app.validationEngineOptions;

            params.onValidationComplete = function(form, valid) {

                if (valid) {
                    thisInstance.saveLicenseKey(form, true);
                    return valid;
                }
            }
            form.validationEngine(params);
            form.submit(function(e) {
                e.preventDefault();
            })
        },

        registerInstallActions: function() {

            var thisInstance = this;
            var module = app.getModuleName();
            jQuery('#next_button').click(function(e) {
                window.location.href = 'index.php?module=' + module + '&view=Settings';
            });


        },


        showMessage: function(customParams) {
            var params = {};
            params.animation = "show";
            params.type = 'info';
            params.title = app.vtranslate('JS_MESSAGE');

            if (typeof customParams != 'undefined') {
                var params = jQuery.extend(params, customParams);
            }
            Vtiger_Helper_Js.showPnotify(params);
        }
    }

}