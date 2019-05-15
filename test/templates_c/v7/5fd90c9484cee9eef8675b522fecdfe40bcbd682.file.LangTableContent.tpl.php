<?php /* Smarty version Smarty-3.1.7, created on 2019-05-09 10:36:38
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14160617805cd402b6a86ef4-63760217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd90c9484cee9eef8675b522fecdfe40bcbd682' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl',
      1 => 1557319872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14160617805cd402b6a86ef4-63760217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGKEY' => 0,
    'LANG_KEYS' => 0,
    'EN_LANG_KEYS' => 0,
    'PREVIEW_LANG' => 0,
    'PREVIEW_LANG_KEYS' => 0,
    'GLOBAL_LANG_KEYS' => 0,
    'FOR_MODULE' => 0,
    'FINALLY_PREFIX' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd402b6af7b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd402b6af7b6')) {function content_5cd402b6af7b6($_smarty_tpl) {?>

<tr class="listViewEntries" data-langkey="<?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
" data-langtransl="<?php echo $_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
"><td class="listViewEntryValue"><?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
</td><td class="listViewEntryValue" data-langtranslate="<?php echo $_smarty_tpl->tpl_vars['EN_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['EN_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
<?php if ($_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value]==''&&$_smarty_tpl->tpl_vars['EN_LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value]!=''){?><span class="pull-right copyToTranslationInputAndSave"><i class="fa fa-arrow-right"></i></span><?php }?></td><?php if ($_smarty_tpl->tpl_vars['PREVIEW_LANG']->value!='none'){?><td class="listViewEntryValue" data-langtranslate="<?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['languageStrings'][$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['languageStrings'][$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
<?php if ($_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value]==''&&$_smarty_tpl->tpl_vars['PREVIEW_LANG_KEYS']->value['languageStrings'][$_smarty_tpl->tpl_vars['LANGKEY']->value]!=''){?><span class="pull-right copyToTranslationInputAndSave"><i class="fa fa-arrow-right"></i></span><?php }?></td><?php }?><td class="listViewEntryValue" data-langtranslate="<?php echo $_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
<?php if (array_key_exists($_smarty_tpl->tpl_vars['LANGKEY']->value,$_smarty_tpl->tpl_vars['GLOBAL_LANG_KEYS']->value)&&$_smarty_tpl->tpl_vars['FOR_MODULE']->value!="Vtiger"){?>&nbsp;&nbsp;<b>[<?php echo Vtiger_Language_Handler::getLanguageTranslatedString($_smarty_tpl->tpl_vars['FINALLY_PREFIX']->value,$_smarty_tpl->tpl_vars['LANGKEY']->value,"Vtiger");?>
]</b>&nbsp;<a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo vtranslate("LBL_FOUND_IN_GLOBAL",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fa fa-info-circle" aria-hidden="true"></i></a><?php }?></td><td class="listViewEntryValue closestTdWithInput" data-langtranslate="<?php echo $_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value];?>
"><input type="text" class="inputElement langInput" name="lang_<?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
" id="lang_<?php echo $_smarty_tpl->tpl_vars['LANGKEY']->value;?>
"value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value]);?>
"></td><td><?php if (isset($_smarty_tpl->tpl_vars['LANG_KEYS']->value[$_smarty_tpl->tpl_vars['LANGKEY']->value])){?><div class="actions textAlignCenter">&nbsp;<a class="deleteRecordButton"><i class="fa fa-trash alignMiddle" id="deleteLangVar" title="Delete"></i></a></div><?php }?></td></tr><?php }} ?>