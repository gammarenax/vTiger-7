<?php /* Smarty version Smarty-3.1.7, created on 2017-09-19 18:18:52
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/License.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37916220559c15f8c8baf68-24872002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e70e1f5af22121c841f6e4df8bd8c395964a917' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/License.tpl',
      1 => 1505487946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37916220559c15f8c8baf68-24872002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LICENSE' => 0,
    'MODE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c15f8c8d225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c15f8c8d225')) {function content_59c15f8c8d225($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Settings/ITS4YouCalculateFields/resources/License.js"></script>
<div class="container-fluid" id="licenseContainer">
    <form name="profiles_privilegies" action="index.php" method="post" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LICENSE_SETTINGS','Settings:ITS4YouCalculateFields');?>
</label>
    <br clear="all">
    <hr>
    <input type="hidden" name="module" value="ITS4YouCalculateFields" />
    <input type="hidden" name="parent" value="Settings" />
    <input type="hidden" name="view" value="" />
    <input type="hidden" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" />
     <br />
    <div class="row-fluid">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LicenseDetails.tpl','Settings:ITS4YouCalculateFields'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <br /> 
    </div>
    <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?>        
        <div class="pull-right">
            <button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
            <a class="cancelLink" onclick="javascript:window.history.back();" type="reset">Cancel</a>
        </div> 
    <?php }?>
    </form>
</div>      

<script language="javascript" type="text/javascript">
Settings_ITS4YouCalculateFields_License_Js.registerEvents();
</script>
    <?php }} ?>