/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Vtiger_Edit_Js('exchangeSyncITEM_Edit_Js', {}, {
	/**
	 * Function to register form for validation
	 */
	registerFormForValidation : function(){
		var editViewForm = this.getForm();
		editViewForm.vtValidate(true);
	},
	
	/**
	 * Function to register the submit event of form
	 */
	registerSubmitEvent : function() {
		var thisInstance = this;
		var form = jQuery('#EditView');
		form.on('submit',function(e) {
			if(form.data('submit') == 'true' && form.data('performCheck') == 'true') {
				return true;
			} else {
				window.onbeforeunload = null;
				e.preventDefault();
			}
		});
	},
	
	/*
	 * Function to check Duplication of Group Names
	 * returns boolean true or false
	 */
	checkDuplicateName : function(details) {
		var aDeferred = jQuery.Deferred();
		
		var params = {
		'module' : app.getModuleName(),
		'parent' : app.getParentModuleName(),
		'action' : 'EditAjax',
		'mode'   : 'checkDuplicate',
		'groupname' : details.groupname,
		'record' : details.record
		}
		
		AppConnector.request(params).then(
			function(data) {
				var response = data['result'];
				var result = response['success'];
				if(result == true) {
					aDeferred.reject(response);
				} else {
					aDeferred.resolve(response);
				}
			},
			function(error,err){
				aDeferred.reject();
			}
		);
		return aDeferred.promise();
	},
		
	/**
	 * Function which will handle the registrations for the elements 
	 */
	registerEvents : function() {
		this._super();
		this.registerFormForValidation();
		this.registerSubmitEvent();

	
	}
});

		$(document).ready(function(){
			$("select:not('.time')").select2({ width: '100%' });
			$("td").css({ "padding": '2px' });		
		});