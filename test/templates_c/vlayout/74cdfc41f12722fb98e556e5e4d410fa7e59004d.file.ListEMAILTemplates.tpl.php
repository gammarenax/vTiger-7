<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 08:01:55
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/ListEMAILTemplates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980231465bcd83f3b83d01-86328083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74cdfc41f12722fb98e556e5e4d410fa7e59004d' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/ListEMAILTemplates.tpl',
      1 => 1510670491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980231465bcd83f3b83d01-86328083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ORDERBY' => 0,
    'DIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcd83f3bafb9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcd83f3bafb9')) {function content_5bcd83f3bafb9($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/EMAILMaker/resources/EMAILMakerActions.js"></script>
<script type="text/javascript" src="layouts/vlayout/modules/EMAILMaker/resources/EMAILMaker.js"></script>
<script>
    function ExportTemplates()
    {
    if (typeof(document.massdelete.selected_id) == 'undefined')
        return false;
    x = document.massdelete.selected_id.length;
    idstring = "";
    if (x == undefined) {
            if (document.massdelete.selected_id.checked) {
                        idstring = document.massdelete.selected_id.value;
                        window.location.href = "index.php?module=EMAILMaker&action=ExportEMAILTemplate&templates=" + idstring;
                        xx = 1;
            } else {
                        alert(app.vtranslate("JS_PLEASE_SELECT_ONE_RECORD"));
                        return false;
            }
    } else {
        xx = 0;
        for (i = 0; i < x; i++) {
            if (document.massdelete.selected_id[i].checked) {
                idstring = document.massdelete.selected_id[i].value + ";" + idstring
                xx++
        }
    }
        if (xx != 0) {
            document.massdelete.idlist.value = idstring;
            window.location.href = "index.php?module=EMAILMaker&action=ExportEMAILTemplate&templates=" + idstring;
        } else {
                    alert(app.vtranslate("JS_PLEASE_SELECT_ONE_RECORD"));
                    return false;
        }
    }
    }
    function SaveTemplatesOrder() {
        $("vtbusy_info").style.display = "inline";
        var tmpl_order = '';
        for (i = 0; i < document.massdelete.elements.length; i++) {
            var elm = document.massdelete.elements[i];
            if (elm.type == 'text' && elm.name.indexOf('tmpl_order_', 0) == 0) {
                if ((isNaN(elm.value) == false && elm.Value != '')) {
                    var templateid = elm.name.split('_', 3)[2];
                    var order = elm.value;
                    tmpl_order += templateid + '_' + order + '#';
    } else {
                    alert('<?php echo vtranslate("LBL_ORDER_ERROR","EMAILMaker");?>
');
                    elm.focus();
                    $("vtbusy_info").style.display = "none";
                    return false;
    }
    }
    }
    
            new Ajax.Request(
                    'index.php',
                    {queue: {position: 'end', scope: 'command'},
                        method: 'post',
                        postBody: 'module=EMAILMaker&action=AjaxRequestHandle&handler=templates_order&tmpl_order=' + tmpl_order,
                        onComplete: function(response) {
                            if (response.responseText == "ok") {
    
       alert('<?php echo vtranslate("LBL_ORDER_SAVE_OK","EMAILMaker");?>
');
    
       } else {
    
       alert('<?php echo vtranslate("LBL_ORDER_SAVE_ERROR","EMAILMaker");?>
');
    
                                                     }
                                                     $("vtbusy_info").style.display = "none";
                                                 }
                                             }
                                     );
    
              return true;
    }
</script>
<div class="contentsDiv marginLeftZero">
    <div class="listViewPageDiv">
        <form  name="massdelete" method="POST" onsubmit="VtigerJS_DialogBox.block();"> 
        <input name="idlist" type="hidden">
        <input name="module" type="hidden" value="EMAILMaker">
        <input name="parenttab" type="hidden" value="Tools">
        <input name="view" type="hidden" value="List">
        <input name="action" type="hidden" value="">    
        <input name="orderby" id="orderBy" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDERBY']->value;?>
">
        <input name="sortorder" id="sortOrder" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DIR']->value;?>
">  
        <input name="return_module" type="hidden" value="EMAILMaker">
        <input name="return_view" type="hidden" value="List">
        <input name="theme" type="hidden" value="">
        <input name="mode" type="hidden" value="">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListEMAILHeader.tpl','EMAILMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="listViewContentDiv" id="listViewContents">
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListEMAILTemplatesContents.tpl','EMAILMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

         </div>
        </form>    
    </div>
</div><?php }} ?>