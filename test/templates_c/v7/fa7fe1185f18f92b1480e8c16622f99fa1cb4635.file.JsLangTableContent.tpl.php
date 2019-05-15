<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:32:34
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11018492275cb44fb2d70116-46269605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7fe1185f18f92b1480e8c16622f99fa1cb4635' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl',
      1 => 1555320055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11018492275cb44fb2d70116-46269605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'JSLANGKEY' => 0,
    'EN_JSLANG_KEYS' => 0,
    'JS_LANG_KEYS' => 0,
    'PREVIEW_LANG' => 0,
    'PREVIEW_LANG_KEYS' => 0,
    'GLOBAL_JSLANG_KEYS' => 0,
    'FOR_MODULE' => 0,
    'FINALLY_PREFIX' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb44fb2da258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb44fb2da258')) {function content_5cb44fb2da258($_smarty_tpl) {?>

<tr class="listViewEntries" data-jslangkey="<?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
" data-langtransl="<?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
"><td class="listViewEntryValue"><?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
</td><td class="listViewEntryValue" data-jslangtranslate="<?php echo $_smarty_tpl->tpl_vars['EN_JSLANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['EN_JSLANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
<?php if ($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value]==''&&$_smarty_tpl->tpl_vars['EN_JSLANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value]!=''){?><span class="pull-right copyToTranslationInputAndSave jsLang"><i class="fa fa-arrow-right"></i></span><?php }?></td><?php if ($_smarty_tpl->tpl_vars['PREVIEW_LANG']->value!='none'){?><td class="listViewEntryValue" data-jslangtranslate="<?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['jsLanguageStrings'][$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['jsLanguageStrings'][$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
<?php if ($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value]==''&&$_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['jsLanguageStrings'][$_smarty_tpl->tpl_vars['JSLANGKEY']->value]!=''){?><span class="pull-right copyToTranslationInputAndSave jsLang"><i class="fa fa-arrow-right"></i></span><?php }?></td><?php }?><td class="listViewEntryValue" data-jslangtranslate="<?php echo $_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value];?>
<?php if (array_key_exists($_smarty_tpl->tpl_vars['JSLANGKEY']->value,$_smarty_tpl->tpl_vars['GLOBAL_JSLANG_KEYS']->value)&&$_smarty_tpl->tpl_vars['FOR_MODULE']->value!="Vtiger"){?>&nbsp;&nbsp;<b>[<?php echo Vtiger_Language_Handler::getJSTranslatedString($_smarty_tpl->tpl_vars['FINALLY_PREFIX']->value,$_smarty_tpl->tpl_vars['JSLANGKEY']->value,"Vtiger");?>
]</b>&nbsp;<a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo vtranslate("LBL_FOUND_IN_GLOBAL",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fa fa-info-circle" aria-hidden="true"></i></a><?php }?></td><td class="listViewEntryValue closestTdWithInput"><input type="text" class="inputElement jsLangInput" name="jslang_<?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
" id="jslang_<?php echo $_smarty_tpl->tpl_vars['JSLANGKEY']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value]);?>
"></td><td><?php if (isset($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['JSLANGKEY']->value])){?><div class="actions textAlignCenter">&nbsp;<a class="deleteRecordButton"><i class="fa fa-trash alignMiddle" id="deleteLangVar" title="Delete"></i></a></div><?php }?></td></tr><?php }} ?>