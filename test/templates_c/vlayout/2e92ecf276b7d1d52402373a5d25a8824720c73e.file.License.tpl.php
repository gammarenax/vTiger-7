<?php /* Smarty version Smarty-3.1.7, created on 2017-12-11 15:35:02
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/License.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7302512085a2ea5a6ecdfc0-85053902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e92ecf276b7d1d52402373a5d25a8824720c73e' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/License.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7302512085a2ea5a6ecdfc0-85053902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LICENSE' => 0,
    'TYPE' => 0,
    'MODULE' => 0,
    'VERSION_TYPE' => 0,
    'SHOW_ACTIVATE_LICENSE' => 0,
    'MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a2ea5a7058e9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2ea5a7058e9')) {function content_5a2ea5a7058e9($_smarty_tpl) {?>

<div class="container-fluid" id="licenseContainer">
    
        <form name="profiles_privilegies"   action="index.php" method="post" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LBL_LICENSE','ITS4YouReports');?>
</label>
    <br clear="all">
    <hr>

        <input type="hidden" id="currentView" name='currentView' value="License"/>

    <input type="hidden" name="module" value="ITS4YouReports" />
    <input type="hidden" name="view" value="" />
    <input type="hidden" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" />
    <input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
"/>
     <br />
    <div class="row-fluid">
        <label class="fieldLabel"><strong><?php echo vtranslate('LBL_LICENSE_DESC','ITS4YouReports');?>
:</strong></label><br>
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LicenseInformation.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <br />
        <table class="table table-bordered table-condensed themeTableColor">
            <tr>
                <td width="25%"></td>
                <td style="border-left: none;">
                    <div id="divgroup1" class="btn-group pull-left paddingLeft10px" <?php if (($_smarty_tpl->tpl_vars['VERSION_TYPE']->value=="basic"||$_smarty_tpl->tpl_vars['VERSION_TYPE']->value=="professional")&&$_smarty_tpl->tpl_vars['SHOW_ACTIVATE_LICENSE']->value=="0"){?>style="display:none"<?php }?>>
                        <button id="activate_license_btn"  class="btn addButton" title="<?php echo vtranslate('LBL_ACTIVATE_KEY_TITLE','ITS4YouReports');?>
" type="button"><strong><?php echo vtranslate('LBL_ACTIVATE_KEY','ITS4YouReports');?>
</strong></button>
                    </div>
                    <div id="divgroup2" class="pull-left paddingLeft10px" <?php if ($_smarty_tpl->tpl_vars['VERSION_TYPE']->value!="basic"&&$_smarty_tpl->tpl_vars['VERSION_TYPE']->value!="professional"){?>style="display:none"<?php }?>>
                        <button id="reactivate_license_btn"  class="btn btn-success" title="<?php echo vtranslate('LBL_REACTIVATE_DESC','ITS4YouReports');?>
" type="button" <?php if ($_smarty_tpl->tpl_vars['SHOW_ACTIVATE_LICENSE']->value=="1"){?>style="display:none"<?php }?>><?php echo vtranslate('LBL_REACTIVATE','ITS4YouReports');?>
</button>
                        <button id="deactivate_license_btn" type="button" class="btn btn-danger marginLeftZero"><?php echo vtranslate('LBL_DEACTIVATE','ITS4YouReports');?>
</button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?>        
        <div class="pull-right">
            <button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_SAVE2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
            <a class="cancelLink" onclick="javascript:window.history.back();" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
        </div> 
    <?php }?>
    </form>        
</div>
    

<script language="javascript" type="text/javascript">
//ITS4YouReports_License_Js.registerEvents();
</script>
   <?php }} ?>