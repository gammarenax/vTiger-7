<?php /* Smarty version Smarty-3.1.7, created on 2017-11-16 11:35:04
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2524883075a0d77e8c4b5c3-32257636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50859ef380f1bfbcf413cf13c1611091fd3ecec2' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl',
      1 => 1510671597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2524883075a0d77e8c4b5c3-32257636',
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
  'unifunc' => 'content_5a0d77e8c6b2d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d77e8c6b2d')) {function content_5a0d77e8c6b2d($_smarty_tpl) {?>
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