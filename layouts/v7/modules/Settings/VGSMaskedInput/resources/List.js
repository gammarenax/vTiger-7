Settings_Vtiger_List_Js("Settings_VGSMaskedInput_List_Js",{
	triggerEdit : function(event, url) {
		event.stopPropagation();
		var instance = Vtiger_List_Js.getInstance();
		instance.EditRecord(url);
	},
	
	triggerDelete : function(event,url){
		event.stopPropagation();
		var instance = Vtiger_List_Js.getInstance();
		instance.DeleteRecord(url);
	},
    
    loadFields: function() {
        var aDeferred = jQuery.Deferred();
        var progressIndicatorElement = jQuery.progressIndicator({
			'position' : 'html'
		});
        var params = {};
		params['module'] = app.getModuleName();
		params['parent'] = app.getParentModuleName();
		params['action'] = 'GetFields';
        params['tabid'] = $("#moduleName").val();
        
		AppConnector.request(params).then(
			function(data) {
                if(data.success === true) {
                    var fieldSelector = $('#fieldName');
                    
                    fieldSelector
                        .find('option')
                        .remove()
                        .end()
                        .append('<option value="">Select field</option>')
                        .val('');
                    for (var key in data.result) {
                        fieldSelector
                            .append($("<option></option>")
                            .attr("value", key)
                            .text(data.result[key])); 
                    }
                }
				progressIndicatorElement.progressIndicator({'mode' : 'hide'});
				aDeferred.resolve(data);
			},
			function(error) {
				progressIndicatorElement.progressIndicator({'mode' : 'hide'});
				aDeferred.reject(error);
			}
		);
		return aDeferred.promise();
    }
},{
	EditRecord : function(url) {
		var thisInstance = this;

		AppConnector.request(url.replace("index.php?",'')).then(
			function(data) {
				var callBackFunction = function(data) {
					consoloe.log("enter callback function");
					var form = jQuery('#maskeditor');
					
					//var params = app.getvalidationEngineOptions(true);
					params.onValidationComplete = function(form, valid){
						if(valid) {
							thisInstance.saveConfiguration(form).then(
								function(data) {
									if(data['success']) {
										var params = {};
										params['text'] = app.vtranslate('Saved');
										Settings_Vtiger_Index_Js.showMessage(params);
										thisInstance.getListViewRecords();
									}
								},
								function(error, err) {

								}
							);
						}
						//To prevent form submit
						return false;
					}
						return false;
					//form.validationEngine(params);
				}
				
				app.helper.showModal(data.result,function(data) {
					if(typeof callBackFunction == 'function') {
						callBackFunction(data);
					}
					return false;
				});
			},
			function(error,err){
			}
		);
	},
    
    saveConfiguration : function(form) {
		var thisInstance = this;
		var aDeferred = jQuery.Deferred();
		var progressIndicatorElement = jQuery.progressIndicator({
			'position' : 'html',
			'blockInfo' : {
				'enabled' : true
			}
		});
		
		var params = form.serializeFormData();
		params['module'] = app.getModuleName();
		params['parent'] = app.getParentModuleName();
		params['action'] = 'SaveAjax';
		console.log(params);
		AppConnector.request(params).then(
			function(data) {
				progressIndicatorElement.progressIndicator({'mode' : 'hide'});
				aDeferred.resolve(data);
			},
			function(error) {
				progressIndicatorElement.progressIndicator({'mode' : 'hide'});
				aDeferred.reject(error);
			}
		);
		return aDeferred.promise();
	},
    
    DeleteRecord : function(deleteRecordActionUrl) {
		var thisInstance = this;
		var message = app.vtranslate('Delete entry?');

		app.helper.showConfirmationBox({'message' : message}).then(function(data) {
				AppConnector.request(deleteRecordActionUrl.replace("index.php?",'')+'&ajaxDelete=true').then(
				function(data){
					if(data.success == true){
						var params = {
						text: app.vtranslate('Deleted Succesfully')
					};
					Settings_Vtiger_Index_Js.showMessage(params);
					location.reload();
					}else{
						app.helper.showPnotify(data.error.message);
					}
				});
			},
			function(error, err){
			}
		);
	},
	
	loadContents : function(url) {
		var aDeferred = jQuery.Deferred();
		AppConnector.requestPjax(url).then(
			function(data){
				jQuery('.contentsDiv').html(data);
				aDeferred.resolve(data);
			},
			function(error, err){
				aDeferred.reject();
			}
		);
		return aDeferred.promise();
	},
	
	registerEvents : function(){
		this._super();
	}
});
