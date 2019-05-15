<?php /* Smarty version Smarty-3.1.7, created on 2017-10-13 07:51:21
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169846615559e07079447102-59558123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18756fa24f199d20be721e864b2612edd11dde86' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl',
      1 => 1507880964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169846615559e07079447102-59558123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGKEY' => 0,
    'LANG_KEYS' => 0,
    'EN_LANG_KEYS' => 0,
    'NONE' => 0,
    'PREVIEW_LANG_KEYS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59e070794b9cc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e070794b9cc')) {function content_59e070794b9cc($_smarty_tpl) {?>
<tr class="listViewEntries" data-langkey="<?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
" data-langtransl="<?php echo $_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
">
    <td class="listViewEntryValue medium span3" style="border-right: none"><?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
</td>
    <td class="listViewEntryValue medium span7" style="border-right: none; border-left: none"><?php echo $_smarty_tpl->tpl_vars['EN_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['NONE']->value!='none'){?>
        <td class="listViewEntryValue medium span7" style="border-right: none; border-left: none"><?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['languageStrings'][$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
</td>
    <?php }?>
    <td class="listViewEntryValue medium span7" style="border-right: none; border-left: none"><?php echo $_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
</td>
    <td class="listViewEntryValue medium span2" style="border-right: none; border-left: none">
        <input type="text" name="lang_<?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
" id="lang_<?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value]);?>
">
    </td>
    <td class="medium span3"  style="border-right: none; border-left: none">
        <?php if (isset($_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value])){?>
        <div class="actions pull-right">&nbsp;
            <a class="deleteRecordButton">
                <i class="icon-trash alignMiddle" id="deleteLangVar" title="Delete"></i>
            </a>
        </div>
        <?php }?>
    </td>
</tr><?php }} ?>