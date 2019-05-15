<?php /* Smarty version Smarty-3.1.7, created on 2019-03-19 09:50:40
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/exchangeSyncITEM/License.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10971739885c90bb70cfb130-87625791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df12f326aa5d3601eb681114f0240e3aa8904456' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/exchangeSyncITEM/License.tpl',
      1 => 1552392649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10971739885c90bb70cfb130-87625791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LICENSE' => 0,
    'WIDTHTYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c90bb70d5d92',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c90bb70d5d92')) {function content_5c90bb70d5d92($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/v7/modules/<?php echo $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value;?>
/resources/License.js"></script>
	<form id="formlicense" class="form-horizontal">
	<div class="editViewPageDiv editViewContainer" id="EditEmailCampaignsSetting" style="padding-top:0px;">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div>
				<h3 style="margin-top: 0px;"><?php echo vtranslate('LBL_LICENSE_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3>&nbsp;<?php echo vtranslate('LBL_LICENSE_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

			</div>
			
				<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value;?>
" />
				<input type="hidden" name="view" value="" />
				<div class="blockData">
					<br>
					<div class="hide alert alert-danger errorMessage">
					</div>
					<div class="block">
						<div>
							<h4><?php if ($_smarty_tpl->tpl_vars['LICENSE']->value){?> <?php echo vtranslate('LBL_DEACT_LICENSE_TABLE_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_ACT_LICENSE_TABLE_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></h4>
						</div>
						<hr>
						<table class="table editview-table no-border">
							<tbody>
								<tr>
									<td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_LICENSE_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label>&nbsp;<span class="redColor">*</span></td>	
									<td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input <?php if ($_smarty_tpl->tpl_vars['LICENSE']->value!=''){?>disabled<?php }?> type="text" class="inputElement" name="license_key_val" id="license_key_val" data-rule-required="true" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" ></div></td>
								</tr>								
							</tbody>
						</table>
					</div>
					<br>	
					<div class='modal-overlay-footer clearfix'>
						<div class="row clearfix">
							<div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
								<?php if ($_smarty_tpl->tpl_vars['LICENSE']->value==''){?>
									<button id="activate_license_btn"  class="btn btn-success" title="<?php echo vtranslate('LBL_ACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button"><strong><?php echo vtranslate('LBL_ACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
								<?php }else{ ?>
									<button id="deactivate_license_btn" type="button" class="btn btn-danger"><?php echo vtranslate('LBL_DEACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
								<?php }?>
								
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
    </form> 

<script language="javascript" type="text/javascript">
crmReady_License_Js.registerEvents();
</script>
   <?php }} ?>