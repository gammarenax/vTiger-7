<?php /* Smarty version Smarty-3.1.7, created on 2018-01-16 10:50:42
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20616144265a55e4a2eaaf42-17898238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d88535503b83500e87fc64c87e142fdc5dabb33' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/IndexViewPreProcess.tpl',
      1 => 1516099829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20616144265a55e4a2eaaf42-17898238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a55e4a2efc1b',
  'variables' => 
  array (
    'MODULE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LEFTPANELHIDE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a55e4a2efc1b')) {function content_5a55e4a2efc1b($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="bodyContents">
    <div class="mainContainer row-fluid">
        <?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?>
        <div class="span2 row-fluid <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?> hide <?php }?>" id="leftPanel" style="min-height:550px;">
            <?php if ($_GET['view']=='ItmScheduler'){?>
                <div style='padding-bottom:0;padding-top:5px;vertical-align: middle;text-align: center;'> 
                    <a href='index.php?module=GreenTimeControl&view=SharedCalendar'>
                        Default View</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href='index.php?module=GreenTimeControl&view=ItmScheduler&defaultView=<?php if ($_GET['defaultView']=='agendaDay'){?>timelineDay<?php }else{ ?>agendaDay<?php }?><?php if (isset($_GET['selectedusers'])){?>&selectedusers=<?php echo $_GET['selectedusers'];?>
<?php }?><?php if (isset($_GET['maxlimit'])){?>&maxlimit=<?php echo $_GET['maxlimit'];?>
<?php }?><?php if (isset($_GET['start'])){?>&start=<?php echo $_GET['start'];?>
<?php }?><?php if (isset($_GET['end'])){?>&end=<?php echo $_GET['end'];?>
<?php }?>'> 
                        <?php if ($_GET['defaultView']=='agendaDay'){?>Timeline<?php }else{ ?>Vertical<?php }?> View
                       
                    </a> &nbsp;
                </div><br/>
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("MiniCalendar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <br/>
                <div class="advUserList" id="advUserList" style="overflow: auto; max-width:220px;">

                </div>
            <?php }else{ ?>
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewSidebar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }?>

        </div>
        <div class="contentsDiv <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?> span10 <?php }?>marginLeftZero" id="rightPanel" style="min-height:550px;">
            <div id="toggleButton" class="toggleButton" title="<?php echo vtranslate('LBL_LEFT_PANEL_SHOW_HIDE','Vtiger');?>
">
                <i id="tButtonImage" class="<?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?>icon-chevron-left<?php }else{ ?>icon-chevron-right<?php }?>"></i>
            </div>
<?php }} ?>