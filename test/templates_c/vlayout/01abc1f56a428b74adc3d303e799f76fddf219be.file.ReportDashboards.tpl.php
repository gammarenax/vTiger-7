<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:37
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportDashboards.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183998537059ba9ebdc3d1c3-49121553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01abc1f56a428b74adc3d303e799f76fddf219be' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportDashboards.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183998537059ba9ebdc3d1c3-49121553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'primary_search_options' => 0,
    'primary_search_arr' => 0,
    'primary_search' => 0,
    'allmodules' => 0,
    'moduleName' => 0,
    'allowedmodules' => 0,
    'moduleLabel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebdc6018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebdc6018')) {function content_59ba9ebdc6018($_smarty_tpl) {?>

<div class="row-fluid">       
    <div class="span9">
        <div class="row-fluid">  
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="2">
                            <?php echo vtranslate('LBL_REPORT_DASHBOARDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                       </th>
                   </tr>
                </thead>
                <tbody>
                    <tr style="height:25px">
                        <td class="medium span3"><label class="pull-right marginRight10px"><?php echo vtranslate('PrimarySearchBy',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <select id="primary_search" name="primary_search" class="span4 chzn-select" style="margin:auto;">
                                <option value="none"><?php echo getTranslatedString('LBL_NONE','ITS4YouReports');?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['primary_search_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['primary_search_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['primary_search_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['primary_search_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['primary_search_arr']->key => $_smarty_tpl->tpl_vars['primary_search_arr']->value){
$_smarty_tpl->tpl_vars['primary_search_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['primary_search_key']->value = $_smarty_tpl->tpl_vars['primary_search_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['primary_search_arr']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['primary_search_arr']->value['value']==$_smarty_tpl->tpl_vars['primary_search']->value){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['primary_search_arr']->value['text'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr style="height:25px">
                        <td class="medium span3"><label class="pull-right marginRight10px"><?php echo vtranslate('AllowInModules',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <input type="hidden" name="allow_in_modules_hidden" id="allow_in_modules_hidden" value="">
                            <select id="allow_in_modules" multiple name="allow_in_modules" class="span4 chzn-select" style="margin:auto;">
                                <?php  $_smarty_tpl->tpl_vars['moduleLabel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleLabel']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allmodules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleLabel']->key => $_smarty_tpl->tpl_vars['moduleLabel']->value){
$_smarty_tpl->tpl_vars['moduleLabel']->_loop = true;
 $_smarty_tpl->tpl_vars['moduleName']->value = $_smarty_tpl->tpl_vars['moduleLabel']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['moduleName']->value;?>
" 
                                    <?php if (in_array($_smarty_tpl->tpl_vars['moduleName']->value,$_smarty_tpl->tpl_vars['allowedmodules']->value)){?>
                                        selected
                                    <?php }?> 
                                    >
                                      <?php echo $_smarty_tpl->tpl_vars['moduleLabel']->value;?>

                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="span4" style="width: 20%;">
        <div class="row-fluid">           
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="2">
                        <i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_REPORT_DASHBOARDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br>
                       </th>
                   </tr>
                </thead>
                <tbody>    
                    <tr style="height:25px">
                        <td>
                            <div class="padding1per">
                              <span>
                                <?php echo vtranslate('LBL_STEP13_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                              </span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }} ?>