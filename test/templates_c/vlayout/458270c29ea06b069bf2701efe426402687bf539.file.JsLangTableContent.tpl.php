<?php /* Smarty version Smarty-3.1.7, created on 2017-10-13 07:51:21
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179547726359e070795c8e93-27812439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '458270c29ea06b069bf2701efe426402687bf539' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl',
      1 => 1507880964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179547726359e070795c8e93-27812439',
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
  'unifunc' => 'content_59e0707961a85',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e0707961a85')) {function content_59e0707961a85($_smarty_tpl) {?>
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