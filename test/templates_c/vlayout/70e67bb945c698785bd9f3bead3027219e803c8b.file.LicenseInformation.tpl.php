<?php /* Smarty version Smarty-3.1.7, created on 2019-03-12 14:40:36
         compiled from "/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/LicenseInformation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11555515815c87c4e4b03357-14327688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e67bb945c698785bd9f3bead3027219e803c8b' => 
    array (
      0 => '/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/LicenseInformation.tpl',
      1 => 1552392678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11555515815c87c4e4b03357-14327688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ORGANIZATION' => 0,
    'URL' => 0,
    'STEP' => 0,
    'LICENSE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c87c4e4b4847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87c4e4b4847')) {function content_5c87c4e4b4847($_smarty_tpl) {?>

<table class="table table-bordered table-condensed themeTableColor">
    <thead>
        <tr class="blockHeader">
            <th class="mediumWidthType">
                <span class="alignMiddle"><?php echo vtranslate('LBL_COMPANY_LICENSE_INFO','ITS4YouReports');?>
</span>
            </th>
            <th class="mediumWidthType" style="border-left: none; text-align: right;">
                <button type="button" id="order_button" class="btn btn-info" onclick="window.location.href='index.php?module=Vtiger&parent=Settings&view=CompanyDetails&block=3&fieldid=14'"/><?php echo vtranslate('LBL_CHANGE_COMPANY_INFORMATION','ITS4YouReports');?>
</button>
            </th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('organizationname','Settings:Vtiger');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="organizationname_label"><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value->get("organizationname");?>
</div>
                </td>
            </tr>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('address','Settings:Vtiger');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="address_label"><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value->get("address");?>
</div>
                </td>
            </tr>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('city','Settings:Vtiger');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="city_label"><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value->get("city");?>
</div>
                </td>
            </tr>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('state','Settings:Vtiger');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="state_label"><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value->get("state");?>
</div>
                </td>
            </tr>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('country','Settings:Vtiger');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="country_label"><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value->get("country");?>
</div>
                </td>
            </tr>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('code','Settings:Vtiger');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="code_label"><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value->get("code");?>
</div>
                </td>
            </tr>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('vatid','Settings:Vtiger');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="vatid_label"><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value->get("vatid");?>
</div>
                </td>
            </tr>
     </tbody>
</table>
<br />
<table class="table table-bordered table-condensed themeTableColor">
    <thead>
            <tr class="blockHeader">
                    <th colspan="2" class="mediumWidthType">
                            <span class="alignMiddle"><?php echo vtranslate('LBL_LICENSE','ITS4YouReports');?>
</span>
                    </th>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_URL','ITS4YouReports');?>
:</label></td>
                <td style="border-left: none;">
                    <div class="pull-left" id="vatid_label"><?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
</div>
                </td>
            </tr>
            <tr>
                <td width="25%"><label  class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_LICENSE_KEY','ITS4YouReports');?>
:</label></td>
                <td style="border-left: none;">
                  <?php if ($_smarty_tpl->tpl_vars['STEP']->value){?>
                    <input type="text" class="input-xlarge" id="licensekey" name="licensekey" data-validation-engine="validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
"/>
                  <?php }else{ ?>
                    <div class="pull-left" name="licensekey" id="license_key_label"><?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
</div>
                  <?php }?>
                </td>
            </tr>
     </tbody>
</table><?php }} ?>