<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 11:52:14
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/GetEMAILActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169291155459cd3ac5472489-32886404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '352be4cd306d43617a8f80446feabe4f9108b011' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/GetEMAILActions.tpl',
      1 => 1510386403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169291155459cd3ac5472489-32886404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59cd3ac561ae9',
  'variables' => 
  array (
    'ENABLE_EMAILMAKER' => 0,
    'CRM_TEMPLATES_EXIST' => 0,
    'MODE' => 0,
    'CRM_TEMPLATES' => 0,
    'category_name' => 0,
    'options' => 0,
    'option' => 0,
    'DEFAULT_TEMPLATE' => 0,
    'TEMPLATE_LANGUAGES' => 0,
    'CURRENT_LANGUAGE' => 0,
    'lang_key' => 0,
    'MODULE' => 0,
    'ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd3ac561ae9')) {function content_59cd3ac561ae9($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/gammaren/www/crm6.gammarenax.ch/libraries/Smarty/libs/plugins/function.html_options.php';
?>
<?php if ($_smarty_tpl->tpl_vars['ENABLE_EMAILMAKER']->value=='true'){?>
    <div class="row-fluid">
        <div class="span10">
            <ul class="nav nav-list">
                <?php if ($_smarty_tpl->tpl_vars['CRM_TEMPLATES_EXIST']->value=='0'){?>
                <li>
                    <select name="emailtemplateid" id="use_common_email_template" class="detailedViewTextBox" style="width:1<?php if ($_smarty_tpl->tpl_vars['MODE']->value!='listview'){?>3<?php }else{ ?>0<?php }?>0%;" size="5">
                        <?php  $_smarty_tpl->tpl_vars["options"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["options"]->_loop = false;
 $_smarty_tpl->tpl_vars["category_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CRM_TEMPLATES']->value["1"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["options"]->key => $_smarty_tpl->tpl_vars["options"]->value){
$_smarty_tpl->tpl_vars["options"]->_loop = true;
 $_smarty_tpl->tpl_vars["category_name"]->value = $_smarty_tpl->tpl_vars["options"]->key;
?>
                            <optgroup label="<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
">
                                <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['title']!=''){?>title="<?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['value']==$_smarty_tpl->tpl_vars['DEFAULT_TEMPLATE']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</option>   
                                <?php } ?>
                            </optgroup>
                        <?php } ?>
                        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CRM_TEMPLATES']->value["0"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['title']!=''){?>title="<?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['value']==$_smarty_tpl->tpl_vars['DEFAULT_TEMPLATE']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</option>    
                        <?php } ?>
                    </select>        
                </li>
                <?php }?>
                <?php if (sizeof($_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value)>1){?>
                    <li>
                        <select name="email_template_language" id="email_template_language" class="detailedViewTextBox" style="width:1<?php if ($_smarty_tpl->tpl_vars['MODE']->value!='listview'){?>3<?php }else{ ?>0<?php }?>0%;" size="1">
                                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value,'selected'=>$_smarty_tpl->tpl_vars['CURRENT_LANGUAGE']->value),$_smarty_tpl);?>

                        </select>
                    </li>
                <?php }else{ ?>
                    <?php  $_smarty_tpl->tpl_vars["lang"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lang"]->_loop = false;
 $_smarty_tpl->tpl_vars["lang_key"] = new Smarty_Variable;
 $_from = ($_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["lang"]->key => $_smarty_tpl->tpl_vars["lang"]->value){
$_smarty_tpl->tpl_vars["lang"]->_loop = true;
 $_smarty_tpl->tpl_vars["lang_key"]->value = $_smarty_tpl->tpl_vars["lang"]->key;
?>
                        <input type="hidden" name="email_template_language" id="email_template_language" value="<?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
"/>
                    <?php } ?>
                <?php }?>
                
                <li>
                    <a href="javascript:;" onclick="EMAILMaker_Actions_Js.emailmaker_sendMail('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
','','','<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
');" class="webMnu" style="padding-left:10px;"><img src="layouts/vlayout/skins/images/Emails.png" hspace="5" align="absmiddle" border="0" style="border-radius:3px;" />&nbsp;<?php echo vtranslate('LBL_SEND_EMAIL');?>
</a>
                </li>
            </ul>
        </div>
        <br clear="all"/>
    </div>
<?php }else{ ?>
    <div class="row-fluid">
        <div class="span10">
            <ul class="nav nav-list">
                <li><a href="index.php?module=EMAILMaker&view=List"><?php echo vtranslate('LBL_PLEASE_FINISH_INSTALLATION','EMAILMaker');?>
</a></li>
            </ul>
        </div>
    </div>
<?php }?>
<?php }} ?>