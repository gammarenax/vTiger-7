<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:24:47
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/LicenseDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14193416145cb44d84ce65b1-70360791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a61d41df8775090b2f447563a661c6f2fe02ec' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/LicenseDetails.tpl',
      1 => 1555320277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14193416145cb44d84ce65b1-70360791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb44d84d2769',
  'variables' => 
  array (
    'COMPANY_DETAILS' => 0,
    'STEP' => 0,
    'URL' => 0,
    'LICENSE_DUE_DATE' => 0,
    'LICENSE' => 0,
    'QUALIFIED_MODULE' => 0,
    'VERSION_TYPE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb44d84d2769')) {function content_5cb44d84d2769($_smarty_tpl) {?>
<table class="table table-bordered table-condensed themeTableColor"><thead><tr class="blockHeader"><th class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('LBL_COMPANY_LICENSE_INFO','Settings:ITS4YouDynamicFields');?>
</span></th><th class="mediumWidthType" style="border-left: none; text-align: right;"><button type="button" id="company_button" class="btn btn-info" onclick="window.location.href='index.php?module=Vtiger&parent=Settings&view=CompanyDetails&block=3&fieldid=14'"/><?php echo vtranslate('LBL_CHANGE_COMPANY_INFORMATION','Settings:ITS4YouDynamicFields');?>
</button></th></tr></thead><tbody><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('organizationname','Settings:Vtiger');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="organizationname_label"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get("organizationname");?>
</div></td></tr><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('address','Settings:Vtiger');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="address_label"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get("address");?>
</div></td></tr><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('city','Settings:Vtiger');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="city_label"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get("city");?>
</div></td></tr><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('state','Settings:Vtiger');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="state_label"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get("state");?>
</div></td></tr><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('country','Settings:Vtiger');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="country_label"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get("country");?>
</div></td></tr><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('code','Settings:Vtiger');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="code_label"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get("code");?>
</div></td></tr><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('vatid','Settings:Vtiger');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="vatid_label"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get("vatid");?>
</div></td></tr></tbody></table><br><?php if ($_smarty_tpl->tpl_vars['STEP']->value==''){?><label class="fieldLabel"><strong><?php echo vtranslate('LBL_LICENSE_SETTINGS_INFO','Settings:ITS4YouDynamicFields');?>
:</strong></label><br><?php }?><table class="table table-bordered table-condensed themeTableColor"><thead><tr class="blockHeader"><th colspan="2" class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('LBL_LICENSE','Settings:ITS4YouDynamicFields');?>
</span></th></tr></thead><tbody><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_URL','Settings:ITS4YouDynamicFields');?>
:</label></td><td style="border-left: none;"><div class="pull-left" id="vatid_label"><?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
</div></td></tr><tr class="license_due_date_tr <?php if ($_smarty_tpl->tpl_vars['LICENSE_DUE_DATE']->value==''||$_smarty_tpl->tpl_vars['LICENSE']->value==''){?>hide<?php }?>"><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_LICENSE_DUE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td style="border-left: none;"><div class="pull-left license_due_date_val" id="vatid_label"><?php echo $_smarty_tpl->tpl_vars['LICENSE_DUE_DATE']->value;?>
</div></td></tr><tr><td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_LICENSE_KEY','Settings:ITS4YouDynamicFields');?>
:</label></td><td style="border-left: none;"><?php if ($_smarty_tpl->tpl_vars['STEP']->value!=''){?><input type="text" class="input-large" id="licensekey" name="licensekey" data-validation-engine="validate[required]"/><button type="subbmit" id="validate_button" class="btn btn-success"/><strong><?php echo vtranslate('LBL_VALIDATE','Settings:ITS4YouDynamicFields');?>
</strong></button>&nbsp;&nbsp;<button type="button" id="order_button" class="btn btn-info" onclick="window.location.href='http://www.its4you.sk/en/vtiger-shop.html'"/><?php echo vtranslate('LBL_ORDER_NOW','Settings:ITS4YouDynamicFields');?>
</button><?php }else{ ?><div class="pull-left" id="license_key_label"><?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
&nbsp;&nbsp;</div><div id="divgroup1" class="btn-group pull-left paddingLeft10px" <?php if ($_smarty_tpl->tpl_vars['VERSION_TYPE']->value=="basic"||$_smarty_tpl->tpl_vars['VERSION_TYPE']->value=="professional"){?>style="display:none"<?php }?>><button id="activate_license_btn"  class="btn addButton" title="<?php echo vtranslate('LBL_ACTIVATE_KEY_TITLE','Settings:ITS4YouDynamicFields');?>
" type="button"><strong><?php echo vtranslate('LBL_ACTIVATE_KEY','Settings:ITS4YouDynamicFields');?>
</strong></button></div><div id="divgroup2" class="pull-left paddingLeft10px" <?php if ($_smarty_tpl->tpl_vars['VERSION_TYPE']->value!="basic"&&$_smarty_tpl->tpl_vars['VERSION_TYPE']->value!="professional"){?>style="display:none"<?php }?>><button id="reactivate_license_btn"  class="btn btn-success" title="<?php echo vtranslate('LBL_REACTIVATE_DESC','Settings:ITS4YouDynamicFields');?>
" type="button"><?php echo vtranslate('LBL_REACTIVATE','Settings:ITS4YouDynamicFields');?>
</button><button id="deactivate_license_btn" type="button" class="btn btn-danger marginLeftZero"><?php echo vtranslate('LBL_DEACTIVATE','Settings:ITS4YouDynamicFields');?>
</button></div><?php }?></td></tr></tbody></table><?php }} ?>