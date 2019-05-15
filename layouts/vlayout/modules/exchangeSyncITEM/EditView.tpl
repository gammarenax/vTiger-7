{*<!--
/*********************************************************************************
* Il contenuto di questo file Ã¨ soggetto alla licenza exchangeSyncITEM.
* ("License"); E' vietato utilizzare questo file se non in conformitÃ  con la Licenza
* Lo sviluppatore iniziale del codice originale Ã¨ IT&M Srl
* Parti create da IT&M Srl sono Copyright (C)  IT&M Srl
* Tutti i diritti riservati.
********************************************************************************/
-->*}
<!-- CONTENITORE DELLA VISUALIZZAZIONE EDIT -->
<div class="editViewContainer">
	<!-- TABELLA CHE CONTIENE TUTTA LA SINTASSI -->
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
		<!-- FORM CHE CONTROLLA TUTTI GLI INPUT -->
		<form class="form-horizontal" action="index.php" method="post" name="exchangeSyncITEM" id="EditView">
			<tbody>
				<tr>
					<td valign="top"></td>
					<td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
						<input type="hidden" name="module" value="exchangeSyncITEM"/>
						<!-- <input type="hidden" name="parent" value="Settings"/> -->
						<input type="hidden" name="action" value="Save"/>
						<input type="hidden" name="record" value="{$ID}"/>
						{if $OPERATION neq ""}
						<input type="hidden" name="operation" value="{$OPERATION}"/>
						{/if}
						<div class="contentHeader row-fluid">
							<table width="100%">
								<tbody>
									<tr>
										<td align="left" width="48"><img src="modules/exchangeSyncITEM/images/exchangeITEM.jpg" width="48" height="48" border=0/></td>
										<td align="left"><h3>&nbsp;&nbsp;{vtranslate('LBL_EDIT', "exchangeSyncITEM")} &quot;{$USER_NOMINATIVO}&quot;</h3></td>
										<td align="right">

											<input title="{vtranslate('LBL_SAVE', "exchangeSyncITEM")}" class="btn btn-success" onclick="controllaDati()" type="submit" name="button" value="{vtranslate('LBL_SAVE', "exchangeSyncITEM")}" />&nbsp;&nbsp;
											<input title="{vtranslate('LBL_VALIDATE_EXCHANGE', "exchangeSyncITEM")}"  class="btn" onclick="validaDatiExchange()" type="button" name="button" value="{vtranslate('LBL_VALIDATE_EXCHANGE', "exchangeSyncITEM")}" />&nbsp;&nbsp;
											<a id="deactivate_license_btn" type="button" class="btn btn-danger btn-small" href="index.php?module=exchangeSyncITEM&view=License">{vtranslate('LBL_DEACTIVATE', 'exchangeSyncITEM')}</a> &nbsp;&nbsp;
											<img id="loadingicon" height="10" width="10" name="loadingicon" src="modules/exchangeSyncITEM/images/load.gif" style="display:none" alt="{vtranslate('LBL_VALIDATE_EXCHANGE', "exchangeSyncITEM")}" title="{vtranslate('LBL_VALIDATE_EXCHANGE', "exchangeSyncITEM")}" />&nbsp;&nbsp;
											<a class="cancelLink" type="reset" onclick="javascript:window.history.back();">{vtranslate('LBL_CANCEL', "exchangeSyncITEM")}</a>
										</td>
									</tr>
								</tbody>
							</table>
							<hr></hr>
						</div>
						<table border=0 cellspacing=0 cellpadding=10 width=100% >
							<tr>
								<td>
									<table border=0 cellspacing=0 cellpadding=0 width=100% class="listRow">
										<tr>
											<td class="small" valign=top >
												<table width="100%"  border="0" cellspacing="0" cellpadding="5">
													<tr>
														<td width="25%" nowrap class="small cellLabel"><strong>{vtranslate('LBL_NOMINATIVO', 'exchangeSyncITEM')}</strong></td>
														<td width="25%" class="small cellText">{$USER_NOMINATIVO}</td>
														<td width="25%" nowrap class="small cellLabel"><strong>{vtranslate('LBL_USERNAME', "exchangeSyncITEM")}</strong></td>
														<td width="25%" class="small cellText">{$USER_NAME}</td>
													</tr>
													<tr valign="top">
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">*</span>&nbsp;{vtranslate('LBL_E_USERNAME', "exchangeSyncITEM")}
																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_username" type="text" class="input-large" name="e_username" value="{$E_USERNAME}" data-validation-engine="validate[required]">
																</div>
															</td>
														</div>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">*</span>&nbsp;{vtranslate('LBL_E_USERPASS', "exchangeSyncITEM")}
																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_password" type="password" class="input-large" name="e_password" value="{$E_PASSWORD}" data-validation-engine="validate[required]">
																</div>
															</td>
														</div>
													</tr>
													<tr>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">*</span>&nbsp;{vtranslate('LBL_E_CALENDAR', "exchangeSyncITEM")}
																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_calendar" type="text" class="input-large" name="e_calendar" value="{$E_CALENDAR}" data-validation-engine="validate[required]">
																</div>
															</td>
														</div>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_E_SYNC_LAST_DAYS', "exchangeSyncITEM")}
																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_daystosync" type="text" class="input-large" name="e_daystosync" value="{$E_DAYSTOSYNC}">&nbsp;&nbsp;{vtranslate('LBL_DAYS', "exchangeSyncITEM")}
																</div>
															</td>
														</div>
													</tr>

													<tr>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_STATUS', "exchangeSyncITEM")}
																</span>
															</td>
															<td>
																<div class="controls">
																	<input type="hidden" value="{$USER_STATUS}" id="old_user_status" />
																	<select id="user_status" name="user_status" class="importBox">
																		<option value="Active" {$ACTSELECT}>{vtranslate('LBL_ACTIVE_E', "exchangeSyncITEM")}</option>
																		<option value="Inactive" {$INACTSELECT}>{vtranslate('LBL_INACTIVE_E', "exchangeSyncITEM")}</option>
																		<option value="Error" {$ERRORSELECT}>{vtranslate('LBL_ERROR', "exchangeSyncITEM")}</option>
																	</select>
																</div>
															</td>
														</div>
														<td nowrap class="small cellLabel"></td>
														<td class="small cellText"></td>
													</tr>

													<tr>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_DIRECTION', "exchangeSyncITEM")}
																</span>
															</td>
															<td>
																<div class="controls">
																	<input type="hidden" value="{$DIRECTION}" id="old_direction" />
																	<select name="direction" class="importBox" id="new_direction" onchange="checkPriority()">
																		{if $DIRECTION eq "ALL"}
																		<option value="ALL" selected>{vtranslate('LBL_DIR_ALL', "exchangeSyncITEM")}</option>
																		<option value="VTIGER">{vtranslate('LBL_DIR_VTIGER', "exchangeSyncITEM")}</option>
																		<option value="EXCHAN">{vtranslate('LBL_DIR_EXCHANGE', "exchangeSyncITEM")}</option>
																		{elseif $DIRECTION eq "VTIGER"}
																		<option value="ALL">{vtranslate('LBL_DIR_ALL', "exchangeSyncITEM")}</option>
																		<option value="VTIGER" selected>{vtranslate('LBL_DIR_VTIGER', "exchangeSyncITEM")}</option>
																		<option value="EXCHAN">{vtranslate('LBL_DIR_EXCHANGE', "exchangeSyncITEM")}</option>
																		{elseif $DIRECTION eq "EXCHAN"}
																		<option value="ALL">{vtranslate('LBL_DIR_ALL', "exchangeSyncITEM")}</option>
																		<option value="VTIGER">{vtranslate('LBL_DIR_VTIGER', "exchangeSyncITEM")}</option>
																		<option value="EXCHAN" selected>{vtranslate('LBL_DIR_EXCHANGE', "exchangeSyncITEM")}</option>
																		{/if}
																	</select>
																</div>
															</td>
														</div>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_PRIORITY', "exchangeSyncITEM")}
																</span>
															</td>
															<td>
																<div class="controls">
																	<input type="hidden" value="{$PRIORITY}" id="old_priority" />
																	{if $DIRECTION eq "ALL"}
																	<select name="priority" id="new_priority" class="importBox">
																		{else}
																		<select name="priority" id="new_priority" class="importBox" disabled="true">
																			{/if}
																			{if $PRIORITY eq "VTIGER"}
																			<option value="VTIGER" selected>{vtranslate('LBL_PRY_VTIGER', "exchangeSyncITEM")}</option>
																			<option value="EXCHAN">{vtranslate('LBL_PRY_EXCHANGE', "exchangeSyncITEM")}</option>
																			{elseif $PRIORITY eq "EXCHAN"}
																			<option value="VTIGER">{vtranslate('LBL_PRY_VTIGER', "exchangeSyncITEM")}</option>
																			<option value="EXCHAN" selected>{vtranslate('LBL_PRY_EXCHANGE', "exchangeSyncITEM")}</option>
																			{/if}
																		</select>
																	</div>
																</td>
															</div>
														</tr>

														<tr><td>&nbsp;</td></tr>

														<tr>
															<td align="left" colspan="4" nowrap class="small cellLabel"><strong>{vtranslate('LBL_DEFAULT_PARS', "exchangeSyncITEM")}</strong></td>
														</tr>

														<tr valign="top">
															<div class="control-group">
																<td>
																	<span class="control-label">
																		<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_START_TIME', "exchangeSyncITEM")}
																	</span>
																</td>
																<td>
																	<div class="controls">
																		<strong>&nbsp;H: </strong>
																		<select name=start_time1 id="start_time1" class="importBox" style="width:55px;">
																			{html_options options=$START_END_TIME_1 selected=$START_TIME_1_SEL }
																		</select>
																		<strong>&nbsp;m : </strong>
																		<select name=start_time2 id="start_time2" class="importBox" style="width:55px;">
																			{html_options options=$START_END_TIME_2 selected=$START_TIME_2_SEL }
																		</select>					
																		<input type="hidden" readonly class="detailedViewTextBox small" style="width:25px;" value="00" id="start_time3" name="start_time3" />
																	</div>
																</td>
															</div>
															<div class="control-group">
																<td>
																	<span class="control-label">
																		<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_END_TIME', "exchangeSyncITEM")}
																	</span>
																</td>
																<td>
																	<div class="controls">
																		<strong>&nbsp;H: </strong>
																		<select name=end_time1 id="end_time1" class="importBox" style="width:55px;">
																			{html_options options=$START_END_TIME_1 selected=$END_TIME_1_SEL}
																		</select>
																		<strong>&nbsp;m : </strong>
																		<select name=end_time2 id="end_time2" class="importBox" style="width:55px;">
																			{html_options options=$START_END_TIME_2 selected=$END_TIME_2_SEL}							
																		</select>					
																		<input type="hidden" readonly class="detailedViewTextBox small" style="width:25px;" value="00" id="end_time3" name="end_time3" />
																	</div>
																</td>
															</div>
														</tr>
														<tr valign="top">
															<div class="control-group">
																<td>
																	<span class="control-label">
																		<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_EVENTSTATUS', "exchangeSyncITEM")}
																	</span>
																</td>
																<td>
																	<div class="controls">
																		<select name="eventstatus" id="eventstatus" class="importBox" >
																			{html_options options=$EVENTSTATUS selected=$EVENTSTATUS_SEL }
																		</select>
																	</div>
																</td>
															</div>
															<div class="control-group">
																<td>
																	<span class="control-label">
																		<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_EVENTPRIORITY', "exchangeSyncITEM")}
																	</span>
																</td>
																<td>
																	<div class="controls">
																		<select name="eventpriority" id="eventpriority" class="importBox">
																			<option value="DEFAULT">{vtranslate('LBL_ASINEXCHANGE', "exchangeSyncITEM")}</option>
																			{html_options options=$EVENTPRIORITY selected=$EVENTPRIORITY_SEL }							
																		</select>
																	</div>
																</td>
															</div>
														</tr>

														<tr><td>&nbsp;</td></tr>

														<tr>
															<!-- <td align="left" colspan="2" nowrap class="small cellLabel"><strong>RICORRENZE</strong></td> -->
															<td align="left" colspan="2" nowrap class="small cellLabel"><strong>{vtranslate('LBL_PRIVACY', "exchangeSyncITEM")}</strong></td>
														</tr>

														<tr>
													<!--
													<td nowrap class="small cellLabel"><strong>Sincronizza eventi ricorrenti</strong></td>
													<td class="small cellText">
													<input type="checkbox" name="handlerecurrings" value="true" {$HANDLERECURRINGS_SEL}/>
													</td>
												-->
												<div class="control-group">
													<td>
														<span class="control-label">
															<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_HANDLE_PRIVATES_TITLE', "exchangeSyncITEM")}
														</span>
													</td>
													<td>
														<div class="controls">
															<select name="handleprivates" id="handleprivates" class="importBox">
																<option value="ALL" {$ALLPRIVSELECTED}>{vtranslate('LBL_SYNC_ALL', "exchangeSyncITEM")}</option>
																<option value="EXCHAN" {$EXCHANGEPRIVSELECTED}>{vtranslate('LBL_TO_EXCHANGE_ONLY', "exchangeSyncITEM")}</option>
																<option value="VTIGER" {$VTIGERPRIVSELECTED}>{vtranslate('LBL_TO_VTIGER_ONLY', "exchangeSyncITEM")}</option>
																<option value="NONE" {$NONEPRIVSELECTED}>{vtranslate('LBL_DO_NOT_SYNC', "exchangeSyncITEM")}</option>
															</select>
														</div>
													</td>
												</div>
												<td nowrap class="small cellLabel"></td>
												<td class="small cellText"></td>
											</tr>
											<tr>
													<!--
													<td nowrap class="small cellLabel"><strong></strong></td>
													<td class="small cellText"></td>
												-->
												<div class="control-group">
													<td>
														<span class="control-label">
															<span class="redColor">&nbsp;</span>&nbsp;{vtranslate('LBL_VISIBILITY', "exchangeSyncITEM")}
														</span>
													</td>
													<td>
														<div class="controls">
															<select name="visibility" id="visibility" class="importBox">
																<option value="DEFAULT">{vtranslate('LBL_ASINEXCHANGE', "exchangeSyncITEM")}</option>
																{html_options options=$VISIBILITY selected=$VISIBILITY_SEL }
															</select>
														</div>
													</td>
												</div>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</form>
</table>
</table>
</div>
</td>
</tr>
</tbody>
</table>
{literal}
<script>
	String.prototype.isEmpty = function() {
		return (this.length === 0 || !this.trim());
	};

	function validate() {
		var risp;
		var usr = document.getElementById("e_username").value;
		var pwd = document.getElementById("e_password").value;
		var cal = document.getElementById("e_calendar").value;
		var start_time1 = document.getElementById("start_time1").value;
		var start_time2 = document.getElementById("start_time2").value;
		var end_time1 = document.getElementById("end_time1").value;
		var end_time2 = document.getElementById("end_time2").value;

		if (usr.isEmpty()) return false;
		if (pwd.isEmpty()) return false;
		if (cal.isEmpty()) return false;

		if (start_time1 > end_time1 || (start_time1 == end_time1 && start_time2 >= end_time2)) {
			alert("{/literal}{vtranslate('ERR_LBL_TIME', "exchangeSyncITEM")}{literal}");
			return false;
	}//if

	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}//else
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if (xmlhttp.responseText=='SUCCESS'){
				risp = true;
			}else{
				risp = xmlhttp.responseText;
			}//else
		}//if ready state==4
	}//function
	
	var url = "modules/exchangeSyncITEM/exchangeSyncVerifyAccount.php";
	var params = "usr="+usr+"&pwd="+pwd+"&cal="+cal;

	xmlhttp.open("POST", url, false);

	//Send the proper header information along with the request
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);

	//this.form.action.value='SaveExchangeSyncInfo';

	if (risp == true ){ 
		return true;
	}else{
		alert (risp);
		return false;
	}//if-else
}//validate

function checkPriority(){
	var direction = document.getElementById("new_direction").value;

	if(direction != 'ALL'){
		document.getElementById("new_priority").value = direction;
		document.getElementById("new_priority").disabled = true;
	}else{
		document.getElementById("new_priority").disabled = false;
	}
}//chechPriority

function controllaDati(){
	var usr = document.getElementById("e_username").value;
	var pwd = document.getElementById("e_password").value;
	var cal = document.getElementById("e_calendar").value;
	var start_time1 = document.getElementById("start_time1").value;
	var start_time2 = document.getElementById("start_time2").value;
	var end_time1 = document.getElementById("end_time1").value;
	var end_time2 = document.getElementById("end_time2").value;
	
	if (usr.isEmpty()){
		alert("{/literal}{vtranslate('LBL_INCORRECT_USER', "exchangeSyncITEM")}{literal}");
		return false;
	}

	if (pwd.isEmpty()){
		alert("{/literal}{vtranslate('LBL_INCORRECT_PASS', "exchangeSyncITEM")}{literal}");
		return false;
	}

	if (cal.isEmpty()) {
		alert("{/literal}{vtranslate('LBL_INCORRECT_CAL', "exchangeSyncITEM")}{literal}");
		return false;
	}

	if (start_time1 > end_time1 || (start_time1 == end_time1 && start_time2 >= end_time2)) {
		alert("{/literal}{vtranslate('LBL_INCORRECT_TIME', "exchangeSyncITEM")}{literal}");
		return false;
	}

	
	if($('user_status').value == "Error"){
		alert("{/literal}{vtranslate('LBL_INCORRECT_STATUS', "exchangeSyncITEM")}{literal}");
		return false;
	}
	
	var r = confirm("{/literal}{vtranslate('LBL_DATA_CORRECT', "exchangeSyncITEM")}{literal}");
	if (r == true){
		//document.forms["EditView"].action.value = 'Save'; 
		document.forms["EditView"].submit();
	}
	return true;
}

function validaDatiExchange(){
	document.getElementById("loadingicon").style.display = "inline";
	var xmlhttp;
	var e_username, e_password, e_calendar;

	e_username = document.getElementById("e_username").value;
	e_password = document.getElementById("e_password").value;
	e_calendar = document.getElementById("e_calendar").value;

	if (window.XMLHttpRequest){ // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.open("GET","modules/exchangeSyncITEM/exchangeSyncITEMCheck.php?user="+e_username+"&pass="+e_password+"&cal="+e_calendar,false);
	xmlhttp.send();
	document.getElementById("loadingicon").style.display = "none";

	var params = {};
	params.animation = "show";

	//var alertmsg = "{/literal}{vtranslate('"+xmlhttp.responseText+"', "exchangeSyncITEM")}{literal}";
	if(xmlhttp.responseText.indexOf("LBL_NOT_REACHABLE")>=0){
		var host = xmlhttp.responseText.split(':')[1];
		params.type = 'error';
		params.title = "{/literal}{vtranslate('LBL_NOT_REACHABLE', "exchangeSyncITEM")}{literal} "+'"'+host+'"';
	}else if(xmlhttp.responseText=='401'){
		params.type = 'error';
		params.title = "{/literal}{vtranslate('LBL_401', "exchangeSyncITEM")}{literal}";
	}else if(xmlhttp.responseText=='CALENDAR_NOT_FOUND'){
		params.type = 'error';
		params.title = "{/literal}{vtranslate('LBL_CALENDAR_NOT_FOUND', "exchangeSyncITEM")}{literal}";
	}else if(xmlhttp.responseText=='SUCCESS'){
		params.type = 'info';
		params.title = "{/literal}{vtranslate('LBL_SUCCESS', "exchangeSyncITEM")}{literal}";
	}else{
		var message = xmlhttp.responseText.split(':')[1];
		params.type = 'error';
		params.title = "{/literal}{vtranslate('LBL_FAILED', "exchangeSyncITEM")}{literal}"+" : "+message;
	}
	Vtiger_Helper_Js.showPnotify(params);
	//alert(alertmsg);
}
</script>
{/literal}