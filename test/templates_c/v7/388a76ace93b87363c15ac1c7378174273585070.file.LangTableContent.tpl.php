<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:32:34
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17318536395cb44fb2c5a3b1-95964655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '388a76ace93b87363c15ac1c7378174273585070' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/LangTableContent.tpl',
      1 => 1555320055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17318536395cb44fb2c5a3b1-95964655',
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
  'unifunc' => 'content_5cb44fb2c91c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb44fb2c91c1')) {function content_5cb44fb2c91c1($_smarty_tpl) {?>

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