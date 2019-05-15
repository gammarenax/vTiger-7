<?php /* Smarty version Smarty-3.1.7, created on 2017-09-29 21:13:38
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/exchangeSyncITEM/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142574197059ceb782b309a4-70495166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca5bcaaa5d090ffc0b7784977695b8fa11fb2f7' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/exchangeSyncITEM/EditView.tpl',
      1 => 1506683663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142574197059ceb782b309a4-70495166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ID' => 0,
    'OPERATION' => 0,
    'USER_NOMINATIVO' => 0,
    'USER_NAME' => 0,
    'E_USERNAME' => 0,
    'E_PASSWORD' => 0,
    'E_CALENDAR' => 0,
    'E_DAYSTOSYNC' => 0,
    'USER_STATUS' => 0,
    'ACTSELECT' => 0,
    'INACTSELECT' => 0,
    'ERRORSELECT' => 0,
    'DIRECTION' => 0,
    'PRIORITY' => 0,
    'START_END_TIME_1' => 0,
    'START_TIME_1_SEL' => 0,
    'START_END_TIME_2' => 0,
    'START_TIME_2_SEL' => 0,
    'END_TIME_1_SEL' => 0,
    'END_TIME_2_SEL' => 0,
    'EVENTSTATUS' => 0,
    'EVENTSTATUS_SEL' => 0,
    'EVENTPRIORITY' => 0,
    'EVENTPRIORITY_SEL' => 0,
    'HANDLERECURRINGS_SEL' => 0,
    'ALLPRIVSELECTED' => 0,
    'EXCHANGEPRIVSELECTED' => 0,
    'VTIGERPRIVSELECTED' => 0,
    'NONEPRIVSELECTED' => 0,
    'VISIBILITY' => 0,
    'VISIBILITY_SEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ceb782c892e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ceb782c892e')) {function content_59ceb782c892e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/gammaren/www/crm6.gammarenax.ch/libraries/Smarty/libs/plugins/function.html_options.php';
?>
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
						<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"/>
						<?php if ($_smarty_tpl->tpl_vars['OPERATION']->value!=''){?>
						<input type="hidden" name="operation" value="<?php echo $_smarty_tpl->tpl_vars['OPERATION']->value;?>
"/>
						<?php }?>
						<div class="contentHeader row-fluid">
							<table width="100%">
								<tbody>
									<tr>
										<td align="left" width="48"><img src="modules/exchangeSyncITEM/images/exchangeITEM.jpg" width="48" height="48" border=0/></td>
										<td align="left"><h3>&nbsp;&nbsp;<?php echo vtranslate('LBL_EDIT',"exchangeSyncITEM");?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['USER_NOMINATIVO']->value;?>
&quot;</h3></td>
										<td align="right">

											<input title="<?php echo vtranslate('LBL_SAVE',"exchangeSyncITEM");?>
" class="btn btn-success" onclick="controllaDati()" type="submit" name="button" value="<?php echo vtranslate('LBL_SAVE',"exchangeSyncITEM");?>
" />&nbsp;&nbsp;
											<input title="<?php echo vtranslate('LBL_VALIDATE_EXCHANGE',"exchangeSyncITEM");?>
"  class="btn" onclick="validaDatiExchange()" type="button" name="button" value="<?php echo vtranslate('LBL_VALIDATE_EXCHANGE',"exchangeSyncITEM");?>
" />&nbsp;&nbsp;
											<a id="deactivate_license_btn" type="button" class="btn btn-danger btn-small" href="index.php?module=exchangeSyncITEM&view=License"><?php echo vtranslate('LBL_DEACTIVATE','exchangeSyncITEM');?>
</a> &nbsp;&nbsp;
											<img id="loadingicon" height="10" width="10" name="loadingicon" src="modules/exchangeSyncITEM/images/load.gif" style="display:none" alt="<?php echo vtranslate('LBL_VALIDATE_EXCHANGE',"exchangeSyncITEM");?>
" title="<?php echo vtranslate('LBL_VALIDATE_EXCHANGE',"exchangeSyncITEM");?>
" />&nbsp;&nbsp;
											<a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',"exchangeSyncITEM");?>
</a>
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
														<td width="25%" nowrap class="small cellLabel"><strong><?php echo vtranslate('LBL_NOMINATIVO','exchangeSyncITEM');?>
</strong></td>
														<td width="25%" class="small cellText"><?php echo $_smarty_tpl->tpl_vars['USER_NOMINATIVO']->value;?>
</td>
														<td width="25%" nowrap class="small cellLabel"><strong><?php echo vtranslate('LBL_USERNAME',"exchangeSyncITEM");?>
</strong></td>
														<td width="25%" class="small cellText"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</td>
													</tr>
													<tr valign="top">
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_E_USERNAME',"exchangeSyncITEM");?>

																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_username" type="text" class="input-large" name="e_username" value="<?php echo $_smarty_tpl->tpl_vars['E_USERNAME']->value;?>
" data-validation-engine="validate[required]">
																</div>
															</td>
														</div>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_E_USERPASS',"exchangeSyncITEM");?>

																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_password" type="password" class="input-large" name="e_password" value="<?php echo $_smarty_tpl->tpl_vars['E_PASSWORD']->value;?>
" data-validation-engine="validate[required]">
																</div>
															</td>
														</div>
													</tr>
													<tr>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_E_CALENDAR',"exchangeSyncITEM");?>

																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_calendar" type="text" class="input-large" name="e_calendar" value="<?php echo $_smarty_tpl->tpl_vars['E_CALENDAR']->value;?>
" data-validation-engine="validate[required]">
																</div>
															</td>
														</div>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_E_SYNC_LAST_DAYS',"exchangeSyncITEM");?>

																</span>
															</td>
															<td>
																<div class="controls">
																	<input id="e_daystosync" type="text" class="input-large" name="e_daystosync" value="<?php echo $_smarty_tpl->tpl_vars['E_DAYSTOSYNC']->value;?>
">&nbsp;&nbsp;<?php echo vtranslate('LBL_DAYS',"exchangeSyncITEM");?>

																</div>
															</td>
														</div>
													</tr>

													<tr>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_STATUS',"exchangeSyncITEM");?>

																</span>
															</td>
															<td>
																<div class="controls">
																	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['USER_STATUS']->value;?>
" id="old_user_status" />
																	<select id="user_status" name="user_status" class="importBox">
																		<option value="Active" <?php echo $_smarty_tpl->tpl_vars['ACTSELECT']->value;?>
><?php echo vtranslate('LBL_ACTIVE_E',"exchangeSyncITEM");?>
</option>
																		<option value="Inactive" <?php echo $_smarty_tpl->tpl_vars['INACTSELECT']->value;?>
><?php echo vtranslate('LBL_INACTIVE_E',"exchangeSyncITEM");?>
</option>
																		<option value="Error" <?php echo $_smarty_tpl->tpl_vars['ERRORSELECT']->value;?>
><?php echo vtranslate('LBL_ERROR',"exchangeSyncITEM");?>
</option>
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
																	<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_DIRECTION',"exchangeSyncITEM");?>

																</span>
															</td>
															<td>
																<div class="controls">
																	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DIRECTION']->value;?>
" id="old_direction" />
																	<select name="direction" class="importBox" id="new_direction" onchange="checkPriority()">
																		<?php if ($_smarty_tpl->tpl_vars['DIRECTION']->value=="ALL"){?>
																		<option value="ALL" selected><?php echo vtranslate('LBL_DIR_ALL',"exchangeSyncITEM");?>
</option>
																		<option value="VTIGER"><?php echo vtranslate('LBL_DIR_VTIGER',"exchangeSyncITEM");?>
</option>
																		<option value="EXCHAN"><?php echo vtranslate('LBL_DIR_EXCHANGE',"exchangeSyncITEM");?>
</option>
																		<?php }elseif($_smarty_tpl->tpl_vars['DIRECTION']->value=="VTIGER"){?>
																		<option value="ALL"><?php echo vtranslate('LBL_DIR_ALL',"exchangeSyncITEM");?>
</option>
																		<option value="VTIGER" selected><?php echo vtranslate('LBL_DIR_VTIGER',"exchangeSyncITEM");?>
</option>
																		<option value="EXCHAN"><?php echo vtranslate('LBL_DIR_EXCHANGE',"exchangeSyncITEM");?>
</option>
																		<?php }elseif($_smarty_tpl->tpl_vars['DIRECTION']->value=="EXCHAN"){?>
																		<option value="ALL"><?php echo vtranslate('LBL_DIR_ALL',"exchangeSyncITEM");?>
</option>
																		<option value="VTIGER"><?php echo vtranslate('LBL_DIR_VTIGER',"exchangeSyncITEM");?>
</option>
																		<option value="EXCHAN" selected><?php echo vtranslate('LBL_DIR_EXCHANGE',"exchangeSyncITEM");?>
</option>
																		<?php }?>
																	</select>
																</div>
															</td>
														</div>
														<div class="control-group">
															<td>
																<span class="control-label">
																	<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_PRIORITY',"exchangeSyncITEM");?>

																</span>
															</td>
															<td>
																<div class="controls">
																	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['PRIORITY']->value;?>
" id="old_priority" />
																	<?php if ($_smarty_tpl->tpl_vars['DIRECTION']->value=="ALL"){?>
																	<select name="priority" id="new_priority" class="importBox">
																		<?php }else{ ?>
																		<select name="priority" id="new_priority" class="importBox" disabled="true">
																			<?php }?>
																			<?php if ($_smarty_tpl->tpl_vars['PRIORITY']->value=="VTIGER"){?>
																			<option value="VTIGER" selected><?php echo vtranslate('LBL_PRY_VTIGER',"exchangeSyncITEM");?>
</option>
																			<option value="EXCHAN"><?php echo vtranslate('LBL_PRY_EXCHANGE',"exchangeSyncITEM");?>
</option>
																			<?php }elseif($_smarty_tpl->tpl_vars['PRIORITY']->value=="EXCHAN"){?>
																			<option value="VTIGER"><?php echo vtranslate('LBL_PRY_VTIGER',"exchangeSyncITEM");?>
</option>
																			<option value="EXCHAN" selected><?php echo vtranslate('LBL_PRY_EXCHANGE',"exchangeSyncITEM");?>
</option>
																			<?php }?>
																		</select>
																	</div>
																</td>
															</div>
														</tr>

														<tr><td>&nbsp;</td></tr>

														<tr>
															<td align="left" colspan="4" nowrap class="small cellLabel"><strong><?php echo vtranslate('LBL_DEFAULT_PARS',"exchangeSyncITEM");?>
</strong></td>
														</tr>

														<tr valign="top">
															<div class="control-group">
																<td>
																	<span class="control-label">
																		<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_START_TIME',"exchangeSyncITEM");?>

																	</span>
																</td>
																<td>
																	<div class="controls">
																		<strong>&nbsp;H: </strong>
																		<select name=start_time1 id="start_time1" class="importBox" style="width:55px;">
																			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['START_END_TIME_1']->value,'selected'=>$_smarty_tpl->tpl_vars['START_TIME_1_SEL']->value),$_smarty_tpl);?>

																		</select>
																		<strong>&nbsp;m : </strong>
																		<select name=start_time2 id="start_time2" class="importBox" style="width:55px;">
																			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['START_END_TIME_2']->value,'selected'=>$_smarty_tpl->tpl_vars['START_TIME_2_SEL']->value),$_smarty_tpl);?>

																		</select>					
																		<input type="hidden" readonly class="detailedViewTextBox small" style="width:25px;" value="00" id="start_time3" name="start_time3" />
																	</div>
																</td>
															</div>
															<div class="control-group">
																<td>
																	<span class="control-label">
																		<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_END_TIME',"exchangeSyncITEM");?>

																	</span>
																</td>
																<td>
																	<div class="controls">
																		<strong>&nbsp;H: </strong>
																		<select name=end_time1 id="end_time1" class="importBox" style="width:55px;">
																			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['START_END_TIME_1']->value,'selected'=>$_smarty_tpl->tpl_vars['END_TIME_1_SEL']->value),$_smarty_tpl);?>

																		</select>
																		<strong>&nbsp;m : </strong>
																		<select name=end_time2 id="end_time2" class="importBox" style="width:55px;">
																			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['START_END_TIME_2']->value,'selected'=>$_smarty_tpl->tpl_vars['END_TIME_2_SEL']->value),$_smarty_tpl);?>
							
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
																		<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_EVENTSTATUS',"exchangeSyncITEM");?>

																	</span>
																</td>
																<td>
																	<div class="controls">
																		<select name="eventstatus" id="eventstatus" class="importBox" >
																			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['EVENTSTATUS']->value,'selected'=>$_smarty_tpl->tpl_vars['EVENTSTATUS_SEL']->value),$_smarty_tpl);?>

																		</select>
																	</div>
																</td>
															</div>
															<div class="control-group">
																<td>
																	<span class="control-label">
																		<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_EVENTPRIORITY',"exchangeSyncITEM");?>

																	</span>
																</td>
																<td>
																	<div class="controls">
																		<select name="eventpriority" id="eventpriority" class="importBox">
																			<option value="DEFAULT"><?php echo vtranslate('LBL_ASINEXCHANGE',"exchangeSyncITEM");?>
</option>
																			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['EVENTPRIORITY']->value,'selected'=>$_smarty_tpl->tpl_vars['EVENTPRIORITY_SEL']->value),$_smarty_tpl);?>
							
																		</select>
																	</div>
																</td>
															</div>
														</tr>

														<tr><td>&nbsp;</td></tr>

														<tr>
															<!-- <td align="left" colspan="2" nowrap class="small cellLabel"><strong>RICORRENZE</strong></td> -->
															<td align="left" colspan="2" nowrap class="small cellLabel"><strong><?php echo vtranslate('LBL_PRIVACY',"exchangeSyncITEM");?>
</strong></td>
														</tr>

														<tr>
													<!--
													<td nowrap class="small cellLabel"><strong>Sincronizza eventi ricorrenti</strong></td>
													<td class="small cellText">
													<input type="checkbox" name="handlerecurrings" value="true" <?php echo $_smarty_tpl->tpl_vars['HANDLERECURRINGS_SEL']->value;?>
/>
													</td>
												-->
												<div class="control-group">
													<td>
														<span class="control-label">
															<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_HANDLE_PRIVATES_TITLE',"exchangeSyncITEM");?>

														</span>
													</td>
													<td>
														<div class="controls">
															<select name="handleprivates" id="handleprivates" class="importBox">
																<option value="ALL" <?php echo $_smarty_tpl->tpl_vars['ALLPRIVSELECTED']->value;?>
><?php echo vtranslate('LBL_SYNC_ALL',"exchangeSyncITEM");?>
</option>
																<option value="EXCHAN" <?php echo $_smarty_tpl->tpl_vars['EXCHANGEPRIVSELECTED']->value;?>
><?php echo vtranslate('LBL_TO_EXCHANGE_ONLY',"exchangeSyncITEM");?>
</option>
																<option value="VTIGER" <?php echo $_smarty_tpl->tpl_vars['VTIGERPRIVSELECTED']->value;?>
><?php echo vtranslate('LBL_TO_VTIGER_ONLY',"exchangeSyncITEM");?>
</option>
																<option value="NONE" <?php echo $_smarty_tpl->tpl_vars['NONEPRIVSELECTED']->value;?>
><?php echo vtranslate('LBL_DO_NOT_SYNC',"exchangeSyncITEM");?>
</option>
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
															<span class="redColor">&nbsp;</span>&nbsp;<?php echo vtranslate('LBL_VISIBILITY',"exchangeSyncITEM");?>

														</span>
													</td>
													<td>
														<div class="controls">
															<select name="visibility" id="visibility" class="importBox">
																<option value="DEFAULT"><?php echo vtranslate('LBL_ASINEXCHANGE',"exchangeSyncITEM");?>
</option>
																<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['VISIBILITY']->value,'selected'=>$_smarty_tpl->tpl_vars['VISIBILITY_SEL']->value),$_smarty_tpl);?>

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
			alert("<?php echo vtranslate('ERR_LBL_TIME',"exchangeSyncITEM");?>
");
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
		alert("<?php echo vtranslate('LBL_INCORRECT_USER',"exchangeSyncITEM");?>
");
		return false;
	}

	if (pwd.isEmpty()){
		alert("<?php echo vtranslate('LBL_INCORRECT_PASS',"exchangeSyncITEM");?>
");
		return false;
	}

	if (cal.isEmpty()) {
		alert("<?php echo vtranslate('LBL_INCORRECT_CAL',"exchangeSyncITEM");?>
");
		return false;
	}

	if (start_time1 > end_time1 || (start_time1 == end_time1 && start_time2 >= end_time2)) {
		alert("<?php echo vtranslate('LBL_INCORRECT_TIME',"exchangeSyncITEM");?>
");
		return false;
	}

	
	if($('user_status').value == "Error"){
		alert("<?php echo vtranslate('LBL_INCORRECT_STATUS',"exchangeSyncITEM");?>
");
		return false;
	}
	
	var r = confirm("<?php echo vtranslate('LBL_DATA_CORRECT',"exchangeSyncITEM");?>
");
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

	//var alertmsg = "<?php echo vtranslate('"+xmlhttp.responseText+"',"exchangeSyncITEM");?>
";
	if(xmlhttp.responseText.indexOf("LBL_NOT_REACHABLE")>=0){
		var host = xmlhttp.responseText.split(':')[1];
		params.type = 'error';
		params.title = "<?php echo vtranslate('LBL_NOT_REACHABLE',"exchangeSyncITEM");?>
 "+'"'+host+'"';
	}else if(xmlhttp.responseText=='401'){
		params.type = 'error';
		params.title = "<?php echo vtranslate('LBL_401',"exchangeSyncITEM");?>
";
	}else if(xmlhttp.responseText=='CALENDAR_NOT_FOUND'){
		params.type = 'error';
		params.title = "<?php echo vtranslate('LBL_CALENDAR_NOT_FOUND',"exchangeSyncITEM");?>
";
	}else if(xmlhttp.responseText=='SUCCESS'){
		params.type = 'info';
		params.title = "<?php echo vtranslate('LBL_SUCCESS',"exchangeSyncITEM");?>
";
	}else{
		var message = xmlhttp.responseText.split(':')[1];
		params.type = 'error';
		params.title = "<?php echo vtranslate('LBL_FAILED',"exchangeSyncITEM");?>
"+" : "+message;
	}
	Vtiger_Helper_Js.showPnotify(params);
	//alert(alertmsg);
}
</script>
<?php }} ?>