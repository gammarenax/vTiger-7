/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

Vtiger.Class("Settings_ITS4YouDynamicFields_Uninstall_Js", {
    uninstallITS4YouDynamicFields: function () {
        var message = app.vtranslate('LBL_UNINSTALL_CONFIRM','Settings:ITS4YouDynamicFields');
        app.helper.showConfirmationBox({'message': message}).then(function() {
            app.helper.showProgress();
            app.request.post({'url':'index.php?module=ITS4YouDynamicFields&action=Uninstall&parent=Settings'}).then(
                function (err, response) {
                    app.helper.hideProgress();
                    if(err === null) {
                        if (response.success === true) {
                            app.helper.showSuccessNotification({message: app.vtranslate('JS_ITEMS_DELETED_SUCCESSFULLY')});
                            window.location.href = "index.php";
                        } else {
                            app.helper.showErrorNotification({message: ''});
                        }
                    } else {
                        app.helper.showErrorNotification({message: err.message});
                    }
                }
            );
        });
    },
    registerActions : function() {
        var thisInstance = this;
        jQuery('#uninstall_its4youdynamicfields_btn').click(function(e) {
            thisInstance.uninstallITS4YouDynamicFields();
        });
    },
    init: function () {
        this.registerActions();
    }
});