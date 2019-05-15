<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:25:00
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/AllLanguagesContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14410234305cb44dec75fdc3-51838106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89bcd49420708aa8e65f9b326b0dafaede0bc8be' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/AllLanguagesContent.tpl',
      1 => 1555320055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14410234305cb44dec75fdc3-51838106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LANGUAGES' => 0,
    'LANG_INFO' => 0,
    'LANGUAGES_USED_BY_USERS' => 0,
    'DEFAULTLANGUAGES' => 0,
    'LANGUAGEMODEL' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb44dec7b6cf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb44dec7b6cf')) {function content_5cb44dec7b6cf($_smarty_tpl) {?>

<div class="col-sm-12 col-xs-12"><div id="table-content" class="table-container" style="padding-top:0px !important;"><table class="table listview-table"><thead><tr class="listViewContentHeader"><th nowrap=""><a class="listViewHeaderValues"><?php echo vtranslate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th><th nowrap=""><a class="listViewHeaderValues"><?php echo vtranslate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th><th nowrap=""><a class="listViewHeaderValues"><?php echo vtranslate('LBL_CODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th><th nowrap=""><a class="listViewHeaderValues"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th><th nowrap=""><a class="listViewHeaderValues"><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th></tr></thead><tbody class="overflow-y"><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
?><tr class="listViewEntries" data-prefix='<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
'data-label='<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['label'];?>
' data-name='<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['name'];?>
'data-recordurl="index.php?module=ITS4YouLanguageEditor&parent=Settings&view=Edit&langPrefix=<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><td class="listViewEntryValue col-xs-3 tdListViewEntry" style="cursor:pointer<?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==0){?>;color: rgb(153, 153, 153)<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['name'];?>
</td><td class="listViewEntryValue col-xs-3 tdListViewEntry" style="cursor:pointer<?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==0){?>;color: rgb(153, 153, 153)<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['label'];?>
</td><td class="listViewEntryValue col-xs-3 tdListViewEntry" style="cursor:pointer<?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==0){?>;color: rgb(153, 153, 153)<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
</td><td class="listViewEntryValue col-xs-2 tdListViewEntry" style="cursor:pointer<?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==0){?>;color: rgb(153, 153, 153)<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==0){?><?php echo vtranslate('LBL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></td><td class="listViewEntryValue col-xs-1" style="cursor:default"><div class="table-actions"><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><li><a href="#" class="langButton"><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix']!="en_us"){?><?php if (!in_array($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'],$_smarty_tpl->tpl_vars['LANGUAGES_USED_BY_USERS']->value)){?><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==0){?><i class="fa fa-toggle-on"></i> <?php echo vtranslate('LBL_TOOGLEON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><i class="fa fa-toggle-off"></i>  <?php echo vtranslate('LBL_TOOGLEOFF',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?><?php }?><?php }?></a></li><li><?php if (in_array($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'],$_smarty_tpl->tpl_vars['DEFAULTLANGUAGES']->value)){?><a href="#" class="copyLanguage"><i class="fa fa-copy"></i> <?php echo vtranslate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }else{ ?><?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable($_smarty_tpl->tpl_vars['LANGUAGEMODEL']->value->getEditViewUrl(), null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&langPrefix=<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><i class="fa fa-edit"></i> <?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }?></li><li><?php if (!in_array($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'],$_smarty_tpl->tpl_vars['DEFAULTLANGUAGES']->value)){?><?php if (!in_array($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'],$_smarty_tpl->tpl_vars['LANGUAGES_USED_BY_USERS']->value)){?><a href="#" class="deleteLang"><i class="fa fa-trash-o"></i> <?php echo vtranslate('LBL_REMOVE_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }?><?php }?></li></ul></span></div></td></tr><?php } ?></tbody></table></div></div><?php }} ?>