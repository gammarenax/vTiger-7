<?php /* Smarty version Smarty-3.1.7, created on 2018-10-02 08:28:35
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/SendEmailResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19424015415bb32c335f7167-80770819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f452913602970848dfe2f5aa3eaec6b5b0a983' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/SendEmailResult.tpl',
      1 => 1510670496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19424015415bb32c335f7167-80770819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUCCESS' => 0,
    'MODULE' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bb32c336021b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb32c336021b')) {function content_5bb32c336021b($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['SUCCESS']->value){?>
<div class="contentsBackground" style='height:800px'>
    <span class="modal noprint" id="loadingListViewModal">
        <div id="popupinfo1" class="modal-header textAlignCenter">
                <h3><?php echo vtranslate('LBL_PLEASE_DONT_CLOSE_WINDOW','EMAILMaker');?>
</h3>
        </div>
        <div class="modal-body">
            <div id="popupinfo2" class="fieldInfo textAlignCenter"><i class="icon-info-sign alignMiddle"></i> <?php echo vtranslate('LBL_POPUP_WILL_BE_CLOSED_AUT','EMAILMaker');?>
</div>
            <img id="popupinfo3" class="listViewLoadingImage paddingTop20" src="<?php echo vimage_path('loading.gif');?>
" alt="no-image" title="<?php echo vtranslate('LBL_LOADING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/>
            <div class="padding5per">
                <div class="summaryWidgetContainer paddingTop20 ">
                    <div class="widgetContainer_1">
                        <div class="widget_header row-fluid">
                            <div class="marginBottom10px"><h4 id="popup_notifi_title"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['title'];?>
</h4>
                            </div>
                         </div>
                         <div class="widget_contents" id="popup_notifi_content"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['content'];?>
</div>
                    </div> 
                </div> 
            </div>
        </div>
    </span>
</div>     
<script language="Javascript" type="text/javascript">                    
jQuery(document).ready(function() {	
    var EMAILMakerSendEmailJsInstance = new EMAILMaker_SendEmail_Js();
    EMAILMakerSendEmailJsInstance.runProcess('<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['id'];?>
');
});                    
</script>                    
<?php }else{ ?>
<table border='0' cellpadding='5' cellspacing='0' width='100%' height='600px'>
	<tr>
		<td align='center'>
			<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 75%; position: relative; z-index: 100000020;'>
				<table border='0' cellpadding='5' cellspacing='0' width='98%'>
					<tr>
						<td rowspan='2' width='11%'><img src="<?php echo vimage_path('denied.gif');?>
" ></td>
						<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
							<span class='genHeaderSmall'><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</span></td>
					</tr>
					<tr>
						<td class='small' align='right' nowrap='nowrap'>
							<a href='javascript:window.history.back();'><?php echo vtranslate('LBL_GO_BACK');?>
</a><br>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>