/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

Settings_Vtiger_List_Js("Settings_ITS4YouDynamicFields_List_Js",{
    
    triggerCreate : function(url) {
        var selectedModule = jQuery('#moduleFilter').val();
        if(selectedModule.length > 0) {
            url += '&source_module='+selectedModule
        }
        window.location.href = url;
    }
},{

    registerFilterChangeEvent : function() {
        var thisInstance = this;
        jQuery('#moduleFilter').on('change',function(e){
            jQuery('#pageNumber').val("1");
            jQuery('#pageToJump').val('1');
            jQuery('#orderBy').val('');
            jQuery("#sortOrder").val('');
            var params = {
                module : app.getModuleName(),
                parent : app.getParentModuleName(),
                sourceModule : jQuery(e.currentTarget).val()
            };
            //Make the select all count as empty
            jQuery('#recordsCount').val('');
            //Make total number of pages as empty
            jQuery('#totalPageCount').text("");
            thisInstance.getListViewRecords(params).then(
                function(data){
                        thisInstance.updatePagination();
                }
            );
        });
    },
	
    /*
     * Function to register the list view row click event
     */
    registerRowClickEvent: function(){
        var listViewContentDiv = this.getListViewContentContainer();
        /*
        listViewContentDiv.on('click','.listViewEntries',function(e){
            var editUrl = jQuery(e.currentTarget).find('.icon-pencil').closest('a').attr('href');
            window.location.href = editUrl;
        });
        */
        listViewContentDiv.on('click','.listViewEntries',function(e){
                //if(jQuery(e.target, jQuery(e.currentTarget)).is('td:first-child')) return;
                //if(jQuery(e.target).is('input[type="checkbox"]')) return;
                var elem = jQuery(e.currentTarget);
                var recordUrl = elem.data('recordurl');
                if(typeof recordUrl == 'undefined') {
                    return;
                }
                window.location.href = recordUrl;
        });
        
        
    },

    getDefaultParams : function() {
        var pageNumber = jQuery('#pageNumber').val();
        var module = app.getModuleName();
        var parent = app.getParentModuleName();
        var params = {
            'module': module,
            'parent' : parent,
            'page' : pageNumber,
            'view' : "List",
            sourceModule : jQuery('#moduleFilter').val()
        };

        return params;
    },
	
    registerControl : function() {
        
        var module = app.getModuleName();
        
//        var lvc_version_var = jQuery('#lvc_version').val();
//        
//        if (lvc_version_var == "basic") {
//            var params = {
//                'module': module,
//                'action' : "IndexAjax",
//                'mode' : 'getColors',
//                'formodule' : 'ListViewColors'
//            }        
//
//            AppConnector.request(params).then(
//                function(data){
//                    var response = data['result'];
//                    var result = response['success'];
//
//                    if(result == false) {
//
//                        var mparams = {
//                        text: response['message'],
//                        type: 'error'};
//
//                         Vtiger_Helper_Js.showMessage(mparams);  
//                    }
//                }
//            )
//        }
    },
        
    registerEvents : function() {
        this._super();
        this.registerFilterChangeEvent();
        this.registerControl();
    }
});