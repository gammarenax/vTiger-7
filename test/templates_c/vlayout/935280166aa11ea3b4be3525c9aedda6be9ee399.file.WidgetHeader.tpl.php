<?php /* Smarty version Smarty-3.1.7, created on 2017-12-11 15:25:29
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/WidgetHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10451725215a0b5ae18c1e14-57756249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '935280166aa11ea3b4be3525c9aedda6be9ee399' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/WidgetHeader.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10451725215a0b5ae18c1e14-57756249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b5ae1948f1',
  'variables' => 
  array (
    'STYLES' => 0,
    'cssModel' => 0,
    'SCRIPTS' => 0,
    'jsModel' => 0,
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'primary_values' => 0,
    'primary_label' => 0,
    'recordid' => 0,
    'primary_value' => 0,
    'optGroupDone' => 0,
    'primary_value_key' => 0,
    'primary_value_opt' => 0,
    'LModule' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b5ae1948f1')) {function content_5a0b5ae1948f1($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['cssModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STYLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssModel']->key => $_smarty_tpl->tpl_vars['cssModel']->value){
$_smarty_tpl->tpl_vars['cssModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cssModel']->key;
?>
	<link rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getHref();?>
" type="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getType();?>
" media="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getMedia();?>
" />
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['jsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsModel']->key => $_smarty_tpl->tpl_vars['jsModel']->value){
$_smarty_tpl->tpl_vars['jsModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['jsModel']->key;
?>
	<script type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"></script>
<?php } ?>

<table width="100%" cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td class="span5">
				<div class="dashboardTitle textOverflowEllipsis" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" style="width: auto;">
                                    <b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>&nbsp;&nbsp;
        </div>
			</td>
			<td class="refresh span2" align="right">
				<span style="position:relative;">&nbsp;</span>
			</td>
			<td class="widgeticons span5" align="right">
				<div class="box pull-right">
					<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardHeaderIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</td>
		</tr>
    <tr>
      <td colspan="3">
        <?php if (count($_smarty_tpl->tpl_vars['primary_values']->value)>0){?>
        <div class='row-fluid span6'>
            <div class="span3 textAlignRight">
                <?php echo $_smarty_tpl->tpl_vars['primary_label']->value;?>
:&nbsp;
            </div>    
            <div class="span7">
                <select class="select2 row-fluid" multiple id="SelectPrimarySearchWidget<?php echo $_smarty_tpl->tpl_vars['recordid']->value;?>
">
                    <?php  $_smarty_tpl->tpl_vars["primary_value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["primary_value"]->_loop = false;
 $_smarty_tpl->tpl_vars['primary_value_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['primary_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["primary_value"]->key => $_smarty_tpl->tpl_vars["primary_value"]->value){
$_smarty_tpl->tpl_vars["primary_value"]->_loop = true;
 $_smarty_tpl->tpl_vars['primary_value_key']->value = $_smarty_tpl->tpl_vars["primary_value"]->key;
?>
                        <?php $_smarty_tpl->tpl_vars['optGroupDone'] = new Smarty_variable("0", null, 0);?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['primary_value']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars["primary_value_opt"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["primary_value_opt"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['primary_value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["primary_value_opt"]->key => $_smarty_tpl->tpl_vars["primary_value_opt"]->value){
$_smarty_tpl->tpl_vars["primary_value_opt"]->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['optGroupDone']->value!="1"){?>
                                    <?php $_smarty_tpl->tpl_vars['optGroupDone'] = new Smarty_variable("1", null, 0);?>
                                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['primary_value_key']->value;?>
">
                                <?php }?>                                
                                <option value="<?php echo $_smarty_tpl->tpl_vars['primary_value_opt']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['primary_value_opt']->value,$_smarty_tpl->tpl_vars['LModule']->value);?>
</option>
                            <?php } ?>
                        <?php }else{ ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['primary_value']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['primary_value']->value,$_smarty_tpl->tpl_vars['LModule']->value);?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            </div>  
        </div>  
        <?php }?>
      </td>
    </tr>
	</tbody>
</table>
<?php }} ?>