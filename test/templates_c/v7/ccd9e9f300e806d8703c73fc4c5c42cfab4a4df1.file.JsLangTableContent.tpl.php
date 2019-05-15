<?php /* Smarty version Smarty-3.1.7, created on 2019-05-09 10:36:38
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2512592655cd402b6b64f61-38016047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd9e9f300e806d8703c73fc4c5c42cfab4a4df1' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/JsLangTableContent.tpl',
      1 => 1557319872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2512592655cd402b6b64f61-38016047',
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
  'unifunc' => 'content_5cd402b6c2d3e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd402b6c2d3e')) {function content_5cd402b6c2d3e($_smarty_tpl) {?>

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