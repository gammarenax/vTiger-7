<?php /* Smarty version Smarty-3.1.7, created on 2019-05-07 10:08:54
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/License.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6338607855cd15936dbc480-75069024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1945c687b8eab2e8eb9e6ccda37f182584cfa8f2' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/License.tpl',
      1 => 1555322855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6338607855cd15936dbc480-75069024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LICENSE' => 0,
    'MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd15936e63f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd15936e63f6')) {function content_5cd15936e63f6($_smarty_tpl) {?>
<div class="container-fluid" id="licenseContainer">    
    <form name="profiles_privilegies" action="index.php" method="post" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LBL_LICENSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
    <br clear="all">
    <hr>                 
    <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
    <input type="hidden" name="view" value="" />
    <input type="hidden" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" />
    <br />
    <div class="row-fluid">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LicenseDetails.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?>        
        <div class="pull-right">
            <button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
            <a class="cancelLink" onclick="javascript:window.history.back();" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
        </div> 
    <?php }?>
    </form>
</div><?php }} ?>