{*
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */
*}
{strip}
{if $IS_INSTALATION eq "yes"}
    <div class="paddingTop20"><br>
{else}
    <div class="listViewPageDiv marginLeftZero"> 
        <div class="row-fluid">
            <div class="span8">
                <h3>{vtranslate($MODULE,$QUALIFIED_MODULE)}</h3>
            </div>
            {*<button id="NumberingSettings" class="btn pull-right" onclick="window.location.href = 'index.php?parent=Settings&module=ITS4YouDynamicFields&view=License&block={$smarty.request.block}&fieldid={$smarty.request.fieldid}';" title="{vtranslate('LICENSE_SETTINGS_INFO', $QUALIFIED_MODULE)}"><img class="alignMiddle" src="{vimage_path('tools.png')}" alt="{vtranslate('LICENSE_SETTINGS_INFO', $QUALIFIED_MODULE)}" /></button>*}
        </div>
         
        <hr>
        <div class="row-fluid">
            <span class="span4 btn-toolbar">

                {if $VERSION_TYPE eq "deactivate" || $VERSION_TYPE eq ""} 
                    <span class="btn-group">
                        <a href='index.php?module=ITS4YouDynamicFields&parent=Settings&view=License'>
                        <span class="btn btn-danger">
                            {vtranslate("LBL_ACTIVATE_BTN",$QUALIFIED_MODULE)}
                        </span>
                        </a>
                    </span>
                {/if} 
            </span>
            <span class="span4 btn-toolbar">
                <select class="chzn-select" id="moduleFilter" >
                        <option value="">{vtranslate('LBL_PLEASE_SELECT_MODULE', $QUALIFIED_MODULE)}</option>
                        <option value="all">{vtranslate('LBL_ALL', $QUALIFIED_MODULE)}</option>
                        {foreach item=S_MODULE_MODEL key=TAB_ID from=$ALL_MODULES}
                                <option {if $SOURCE_MODULE eq $S_MODULE_MODEL->getName()} selected="" {/if} value="{$S_MODULE_MODEL->getName()}">{vtranslate($S_MODULE_MODEL->getName(),$S_MODULE_MODEL->getName())}</option>
                        {/foreach}
                </select>
            </span>
            <span class="span4 btn-toolbar">
                    {include file='ListViewActions.tpl'|@vtemplate_path}
            </span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="listViewContentDiv" id="listViewContents">
{/if}
{/strip}
