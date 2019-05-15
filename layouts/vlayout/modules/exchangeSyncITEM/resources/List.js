/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/  
jQuery.Class("Settings",{
    _init:function(){
        if(jQuery('#settings_button')){
            jQuery('#settings_button').on('click',function(){
			window.alert("CIAO MONDO");
                jQuery('#settings_button').attr("disabled", "disabled");
                jQuery('#synctime').remove();
                var imagePath = app.vimage_path('Sync.gif');
                //jQuery('#sync_details').html('<img src='+imagePath+' style="margin-left:40px"/>');
                var url = jQuery('#settings_button').data('url');
                
				var win=window.open(url,'','height=600,width=600,channelmode=1');
				//http://stackoverflow.com/questions/1777864/how-to-run-function-of-parent-window-when-child-window-closes 
				window.sync = (function() {
					AppConnector.request(url).then(
						function(data) {
							jQuery('#settings_button').removeAttr("disabled");
							jQuery('#sync_details').html(data);
						}
					);
				});

				win.onunload = (function(){
					jQuery('#settings_button b').text(app.vtranslate('LBL_SYNC_BUTTON'));
					jQuery('#settings_button').removeAttr("disabled");
					jQuery('#sync_details').html(app.vtranslate('LBL_NOT_SYNCRONIZED'));
				});
            });
        }
    },
    
    _showMessage : function(){
		
    },
	
    _exit:function(){
		
    }
},{});