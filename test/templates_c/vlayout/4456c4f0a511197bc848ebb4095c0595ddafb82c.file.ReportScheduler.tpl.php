<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 08:50:57
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportScheduler.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10588025835a0d636f7cae40-90683752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4456c4f0a511197bc848ebb4095c0595ddafb82c' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportScheduler.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10588025835a0d636f7cae40-90683752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d636f7f590',
  'variables' => 
  array (
    'MODULE' => 0,
    'AVAILABLE_USERS' => 0,
    'AVAILABLE_ROLES' => 0,
    'AVAILABLE_ROLESANDSUB' => 0,
    'AVAILABLE_GROUPS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d636f7f590')) {function content_5a0d636f7f590($_smarty_tpl) {?>

<div class="row-fluid">       
    <div class="span9">
        <div class="row-fluid">  
            <?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/ReportSchedulerContent.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div>
    <div class="span4" style="width: 20%;">
        <div class="row-fluid">           
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="2">
                        <i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_LIMIT_SCHEDULER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br>
                       </th>
                   </tr>
                </thead>
                <tbody>    
                    <tr style="height:25px">
                        <td>
                            <div class="padding1per">
                              <span>
                                <?php echo vtranslate('LBL_STEP10_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                              </span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<script>
// SCHEDULE REPORTS START
function showRecipientsOptions(){
	var option;
	var selectedOption=document.getElementById("recipient_type");
	for(var i=0; i<selectedOption.options.length; i++) {
		if (selectedOption.options[i].selected==true) {
			option=selectedOption.value;
			break;
		}
	}

	var availableRecipientsWrapper = document.getElementById('availableRecipientsWrapper');

	if(option == 'users') {
		availableRecipientsWrapper.innerHTML = '<?php echo $_smarty_tpl->tpl_vars['AVAILABLE_USERS']->value;?>
';
	} else if(option == 'roles') {
		availableRecipientsWrapper.innerHTML = '<?php echo $_smarty_tpl->tpl_vars['AVAILABLE_ROLES']->value;?>
';
	} else if(option == 'rs') {
		availableRecipientsWrapper.innerHTML = '<?php echo $_smarty_tpl->tpl_vars['AVAILABLE_ROLESANDSUB']->value;?>
';
	} else if(option == 'groups') {
		availableRecipientsWrapper.innerHTML = '<?php echo $_smarty_tpl->tpl_vars['AVAILABLE_GROUPS']->value;?>
';
	}
}

function addOption(){

	var availableRecipientsObj=getObj("availableRecipients");
	var selectedRecipientsObj=getObj("selectedRecipients");
	
	for (i=0;i<selectedRecipientsObj.length;i++) {
		selectedRecipientsObj.options[i].selected=false
	}

	for (i=0;i<availableRecipientsObj.length;i++) {

		if (availableRecipientsObj.options[i].selected==true) {
			var rowFound=false;
			var existingObj=null;
			for (j=0;j<selectedRecipientsObj.length;j++) {
				if (selectedRecipientsObj.options[j].value==availableRecipientsObj.options[i].value)
				{
					rowFound=true
					existingObj=selectedRecipientsObj.options[j]
					break
				}
			}

			if (rowFound!=true) {
				var newColObj=document.createElement("OPTION")
				newColObj.value=availableRecipientsObj.options[i].value
				if (document.all) 
                                    newColObj.innerText=availableRecipientsObj.options[i].innerText
				else 
                                    newColObj.text=availableRecipientsObj.options[i].text
				selectedRecipientsObj.appendChild(newColObj)
				availableRecipientsObj.options[i].selected=false
				newColObj.selected=true
				rowFound=false
			}
			else {
				if(existingObj != null) existingObj.selected=true
			}
		}
	}
}

function delOption(){
	var selectedRecipientsObj=getObj("selectedRecipients");
	for (var i=selectedRecipientsObj.options.length; i>0; i--) {
			if (selectedRecipientsObj.options.selectedIndex>=0)
				selectedRecipientsObj.remove(selectedRecipientsObj.options.selectedIndex)
	}
}

jQuery( document ).ready(function(){
    showRecipientsOptions();
    setScheduleOptions();
});
// SCHEDULE REPORTS ENDS
</script><?php }} ?>