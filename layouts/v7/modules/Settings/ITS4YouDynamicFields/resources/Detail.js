/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

Settings_Vtiger_Detail_Js("Settings_ITS4YouDynamicFields_Detail_Js", {},{
    listContainer: false,
    registerEditClickEvent : function() {
        jQuery('.editDF').on('click',function(e){
            var element = jQuery(e.currentTarget);
            window.location.href=element.data('url');
        });
    },
    getListContainer: function () {
        if (this.listContainer === false) {
            this.listContainer = jQuery('#listContainer');
        }
        return this.listContainer;
    },
    registerRowClickEvent : function(){

        var thisInstance = this;
        var listContentDiv = thisInstance.getListContainer();

        listContentDiv.on('click','.listViewEntries',function(e){
            var elem = jQuery(e.currentTarget);
            var targetElem = jQuery(e.target);
            if(targetElem.closest('.actionsRecordButton').length != 0){
                return;
            }
            var recordUrl = elem.data('recordurl');
            if(typeof recordUrl == 'undefined') {
                return;
            }
            window.location.href = recordUrl;
        });
        listContentDiv.on('click', 'a[name="editlink"]', function (e) {
            var element = jQuery(e.currentTarget);
            var url = element.data('url');
            window.location.href = url;
        });

    },
    registerDeleteRecordClickEvent: function () {
        var thisInstance = this;
        var listContentDiv = thisInstance.getListContainer();
        listContentDiv.on('click', '.deleteRecordButton', function (e) {
            var elem = jQuery(e.currentTarget);
            var parent = elem;
            var recordId = parent.closest('tr').data('id');
            var message = app.vtranslate('LBL_DELETE_CONFIRMATION');
            app.helper.showConfirmationBox({'message': message}).then(function () {
                var module = app.getModuleName();
                var postData = {
                    "data": {
                        "module": module,
                        "action": "DeleteAjax",
                        "record": recordId,
                        "parent": app.getParentModuleName()
                    }
                };
                app.helper.showProgress();
                app.request.post(postData).then(
                    function (err, data) {
                        if (err == null) {
                            app.helper.hideProgress();
                            parent.closest('tr').remove();
                            app.helper.showSuccessNotification({message: app.vtranslate('JS_DF_DELETED_SUCCESSFULLY')});
                        } else {
                            app.helper.hideProgress();
                            app.helper.showErrorNotification({message: app.vtranslate(err.message)})
                        }
                    });
            });
        });
    },
    registerShowDeleteActionOnHover: function(){
        var listContentDiv = this.getListContainer();
        listContentDiv.on('mouseover','tr.listViewEntries',function(e){
            jQuery(e.currentTarget).find('.actionsRecordButton').css('opacity',0.6);
        }).on('mouseleave','tr.listViewEntries',function(e){
            jQuery(e.currentTarget).find('.actionsRecordButton').css('opacity',0);
        });
    },
    registerEvents : function(){
        var thisInstance = this;

        thisInstance.registerEditClickEvent();
        thisInstance.registerRowClickEvent();
        thisInstance.registerDeleteRecordClickEvent();
        thisInstance.registerShowDeleteActionOnHover();
    }
});  