jQuery.Class("VGSLicense_Js",{},{validateLicense:function(){thisInstance=this,jQuery(".activateButton").on("click",function(){var e=jQuery("#licenseid").val();if(""==e)alert("License Id can not be null");else{var t=jQuery(".listViewLoadingMsg").text();if("deactivate"==jQuery(this).attr("id"))var i="deactivateLicense";else var i="validateLicense";var a=jQuery("#activationid").val(),n=jQuery.progressIndicator({message:t,position:"html",blockInfo:{enabled:!0}}),s="index.php?module=VGSRelModUpdates&view=VGSLicense&mode="+i+"&licenseid="+e+"&activationid="+a;AppConnector.request(s).then(function(e){if(n.progressIndicator({mode:"hide"}),e=jQuery.parseJSON(e),e.success){var t=e.result;if("ok"==t.result){"validateLicense"==i?(thisInstance.updateInput("readonly"),thisInstance.updateButton("deactivate")):(thisInstance.updateInput("noreadonly"),thisInstance.updateButton("activate"));var a={title:"License validated",text:"Thanks! Your license was succesfully validated",width:"35%"};Vtiger_Helper_Js.showPnotify(a)}else{var a={title:"License Validation Error",text:"Sorry. There was an error processing your request. ERROR Message: "+t.message,width:"35%"};Vtiger_Helper_Js.showPnotify(a),console.log(t.message)}}},function(){var e={title:"License Validation Error",text:"Sorry. There was an error processing your request",width:"35%"};Vtiger_Helper_Js.showPnotify(e)})}})},updateInput:function(e){"readonly"==e?jQuery("#licenseid").attr("readonly",!0):jQuery("#licenseid").attr("readonly",!1)},updateButton:function(e){thisInstance=this,"deactivate"===e?(jQuery("#activate").hide(),jQuery("#deactivate").show(),thisInstance.showHideManualValidation()):(jQuery("#deactivate").hide(),jQuery("#activate").show(),jQuery("#licenseid").val(""))},showHideManualValidation:function(){jQuery("#enable-manual").on("click",function(){jQuery("#manual-activation").is(":visible")?jQuery("#manual-activation").hide():jQuery("#manual-activation").show()})},registerEvents:function(){this.validateLicense(),this.showHideManualValidation(),jQuery("#isvalid").val()?(this.updateButton("deactivate"),this.updateInput("readonly")):this.updateButton("activate")}}),jQuery(document).ready(function(){var e=new VGSLicense_Js;e.registerEvents()});