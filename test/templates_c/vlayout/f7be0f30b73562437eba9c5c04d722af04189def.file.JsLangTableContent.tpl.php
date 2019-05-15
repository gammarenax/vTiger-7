<?php /* Smarty version Smarty-3.1.7, created on 2017-11-16 11:35:04
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4835945145a0d77e8d7e699-40755204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7be0f30b73562437eba9c5c04d722af04189def' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl',
      1 => 1510671597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4835945145a0d77e8d7e699-40755204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'JSLANGKEY' => 0,
    'EN_JSLANG_KEYS' => 0,
    'NONE' => 0,
    'PREVIEW_LANG_KEYS' => 0,
    'JS_LANG_KEYS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d77e8d9d16',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d77e8d9d16')) {function content_5a0d77e8d9d16($_smarty_tpl) {?>
<tr class="listViewEntries" data-jslangkey="<?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
">
    <td class="listViewEntryValue medium span7" style="border-right: none"><?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
</td>
    <td class="listViewEntryValue medium span7" style="border-right: none; border-left: none"><?php echo $_smarty_tpl->tpl_vars['EN_JSLANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['NONE']->value!='none'){?>
        <td class="listViewEntryValue medium span7" style="border-right: none; border-left: none"><?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['jsLanguageStrings'][$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
</td>
    <?php }?>
    <td class="listViewEntryValue medium span7" style="border-right: none; border-left: none"><?php echo $_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
</td>
    <td class="listViewEntryValue medium span7" style="border-right: none; border-left: none">
        <input type="text" name="jslang_<?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
" id="jslang_<?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value]);?>
">
    </td>
    <td class="medium span3" style="border-left: none">
        <?php if (!empty($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value])){?>
            <div class="actions pull-right">
                <a class="deleteRecordButton">
                    <i class="icon-trash alignMiddle" id="deleteCalcField" title="Delete"></i>
                </a>
            </div>
        <?php }?>
    </td>
</tr><?php }} ?>