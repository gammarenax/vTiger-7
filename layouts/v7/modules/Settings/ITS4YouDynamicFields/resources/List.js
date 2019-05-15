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

        listViewContentDiv.on('click','.listViewEntries',function(e){
                var elem = jQuery(e.currentTarget);
                var targetElem = jQuery(e.target);
                if(targetElem.closest('.bootstrap-switch').length != 0){
                    return false;
                }
                if(targetElem.closest('.actionsRecordButton').length != 0){
                    return;
                }
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
    },
    registerShowDeleteActionOnHover: function(){
        var listViewContentDiv = this.getListViewContainer();
        listViewContentDiv.on('mouseover','tr.listViewEntries',function(e){
            jQuery(e.currentTarget).find('.actionsRecordButton').css('opacity',0.6);
        }).on('mouseleave','tr.listViewEntries',function(e){
            jQuery(e.currentTarget).find('.actionsRecordButton').css('opacity',0);
        });
    },
    getListViewContainer: function () {
        if (this.listViewContainer === false) {
            this.listViewContainer = jQuery('#list-content');
        }
        return this.listViewContainer;
    },
    registerEvents : function() {
        this._super();
        this.registerEditLink();
        this.registerFilterChangeEvent();
        this.registerControl();
        this.registerDeleteRecordClickEvent();
        this.registerShowDeleteActionOnHover();

    }
});