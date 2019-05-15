<?php /* Smarty version Smarty-3.1.7, created on 2019-03-12 14:07:13
         compiled from "/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/exchangeSyncITEM/License.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3811597645c87bd112402b9-82459476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406345f96171da7806dcfa39b15398e917ad073b' => 
    array (
      0 => '/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/exchangeSyncITEM/License.tpl',
      1 => 1552392709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3811597645c87bd112402b9-82459476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LICENSE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c87bd1125f86',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87bd1125f86')) {function content_5c87bd1125f86($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/<?php echo $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value;?>
/resources/License.js"></script>
<div class="container-fluid" id="licenseContainer">
    
    <form id="formlicense" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LBL_LICENSE_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label>
    <br clear="all">
    <hr>

    <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value;?>
" />
    <input type="hidden" name="view" value="" />
    <!-- <input type="hidden" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" /> -->
     <br />
    <div class="row-fluid">
        <label><strong><?php echo vtranslate('LBL_LICENSE_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br>

        <table class="table table-bordered table-condensed themeTableColor">
            <thead>
                    <tr class="blockHeader">
                            <th colspan="2" class="mediumWidthType">
                                    <span class="alignMiddle"><?php if ($_smarty_tpl->tpl_vars['LICENSE']->value){?> <?php echo vtranslate('LBL_DEACT_LICENSE_TABLE_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_ACT_LICENSE_TABLE_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></span>
                            </th>
                    </tr>
            </thead>
            <tbody>
                    <tr>
                                           
                    	<?php if ($_smarty_tpl->tpl_vars['LICENSE']->value==''){?>
                        <td width="25%"><label  class="muted marginRight10px"><?php echo vtranslate('LBL_LICENSE_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label></td>
                        <td style="border-left: none;">
							<input class="input-large nameField" type="text" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" data-validation-engine='validate[required]' />
                                	<button id="activate_license_btn"  class="btn btn-success" title="<?php echo vtranslate('LBL_ACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button"><strong><?php echo vtranslate('LBL_ACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
                                <?php }else{ ?>
                            <td width="25%"><label  class="muted marginRight10px"><?php echo vtranslate('LBL_LICENSE_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td>
                        	<td style="border-left: none;">
	                           	<input class="input-large nameField" type="text" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" disabled />
								<button id="deactivate_license_btn" type="button" class="btn btn-danger"><?php echo vtranslate('LBL_DEACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
                                <?php }?>
                        </td>
                    </tr>
             </tbody>
        </table>
    </div>
    </form>        

</div>
      

<script language="javascript" type="text/javascript">
crmReady_License_Js.registerEvents();
</script>
   <?php }} ?>