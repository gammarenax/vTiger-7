{*<!--
/*********************************************************************************
* The content of this file is subject to the Dynamic Fields 4 You.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
-->*}
{strip}
    <div class="detailview-content container-fluid">
        <div class="details row tabbable">

            <form id="detailView" method="post" action="index.php" name="etemplatedetailview" onsubmit="VtigerJS_DialogBox.block();">
                <input type="hidden" name="action" value="">
                <input type="hidden" name="view" value="">
                <input type="hidden" name="module" value="ITS4YouDynamicFields">
                <input type="hidden" name="retur_module" value="ITS4YouDynamicFields">
                <input type="hidden" name="return_action" value="ITS4YouDynamicFields">
                <input type="hidden" name="return_view" value="Detail">
                <input type="hidden" name="templateid" value="{$TEMPLATEID}">
                <input type="hidden" name="parenttab" value="{$PARENTTAB}">
                <input type="hidden" name="isDuplicate" value="false">
                <input type="hidden" name="subjectChanged" value="">
                <input id="recordId" value="{$TEMPLATEID}" type="hidden">
                {if $IS_OVERLAY neq "yes" && $MODE neq "FieldsGroup"}
                <div class="col-lg-12">
                    <ul class="nav nav-tabs layoutTabs massEditTabs">
                        <li class="active"><a data-toggle="tab" href="#detailViewLayout"><strong>{vtranslate('LBL_DETAILVIEW_BASIC_TAB', $QUALIFIED_MODULE)}</strong></a></li>
                        <li class="relatedListTab"><a data-toggle="tab" href="#relatedTabPf"><strong>{vtranslate('LBL_RELATED_PF_TAB', $QUALIFIED_MODULE)}</strong></a></li>
                    </ul>
                </div>
                <br><br>
                {/if}
                <div class="tab-content layoutContent padding20 themeTableColor overflowVisible">
                    <div class="col-lg-12 tab-pane active" id="detailViewLayout">
                        <div class="left-block col-lg-4">
                            <div class="summaryView">
                                <div class="summaryViewHeader">
                                    <h4 class="display-inline-block">{vtranslate('LBL_BASIC_INFORMATION', $QUALIFIED_MODULE)}</h4>
                                    {if $IS_OVERLAY neq "yes"}
                                        <div class="pull-right">
                                            <button type="button" class="btn btn-default editDF" data-url="index.php?module=ITS4YouDynamicFields&parent=Settings&view=Edit&record={$RECORD_MODEL->getId()}&mode={$MODE}">
                                                &nbsp;{vtranslate('LBL_EDIT',$MODULE)}
                                            </button>
                                        </div>
                                    {/if}
                                </div>
                                <div class="summaryViewFields">
                                    <div class="recordDetails">
                                        <table class="summary-table no-border">
                                            <tbody>
                                            <tr class="summaryViewEntries">
                                                <td class="fieldLabel"><label class="muted textOverflowEllipsis">{vtranslate('LBL_DESCRIPTION', $QUALIFIED_MODULE)}</label></td>
                                                <td class="fieldValue">{$RECORD_MODEL->get('description')}</td>
                                            </tr>
                                            <tr class="summaryViewEntries">
                                                <td class="fieldLabel"><label class="muted textOverflowEllipsis">{vtranslate('LBL_MODULE', $QUALIFIED_MODULE)}</label></td>
                                                <td class="fieldValue">{vtranslate($SELECTED_MODULE_NAME, $SELECTED_MODULE_NAME)}</td>
                                            </tr>
                                            {if $MODE neq "FieldsGroup"}
                                                <tr class="summaryViewEntries">
                                                    <td class="fieldLabel"><label class="muted textOverflowEllipsis">{vtranslate('LBL_SHOW_POPUP', $QUALIFIED_MODULE)}</label></td>
                                                    <td class="fieldValue" valign=top>{if $SHOW_POPUP eq "1"}{vtranslate('LBL_YES',$QUALIFIED_MODULE)}{else}{vtranslate('LBL_NO',$QUALIFIED_MODULE)}{/if}</td>
                                                </tr>
                                            {/if}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>

                            {if $ALL_FIELDS|count > 0}
                                <div class="summaryView">
                                    <div class="summaryViewHeader">
                                        <h4 class="display-inline-block">{vtranslate('LBL_FIELDS', $QUALIFIED_MODULE)}</h4>
                                    </div>
                                    <div class="summaryViewFields">
                                        <div class="recordDetails">
                                            <table class="summary-table no-border">
                                                <tbody>
                                                {foreach item=FIELD_MODEL key=FIELD_NAME name="foreachfields" from=$ALL_FIELDS}
                                                    {assign var=IS_MANDATORY value=$RECORD_MODEL->isMandatory($FIELD_NAME)}
                                                    <tr class="summaryViewEntries">
                                                        {assign var=VISIBLE_TYPE value=$RECORD_MODEL->getVisibility($FIELD_NAME)}
                                                        <td class="fieldLabel">
                                                            <label class="muted textOverflowEllipsis">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</label>
                                                        </td>
                                                        {if $MODE neq "FieldsGroup"}
                                                            <td class="fieldValue">
                                                                {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                                                    {if $VISIBLE_KEY eq $VISIBLE_TYPE && $IS_MANDATORY neq "yes"}{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)}{/if}
                                                                {/foreach}
                                                                {if $IS_MANDATORY eq "yes"}{vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}{/if}
                                                            </td>
                                                        {/if}
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            {/if}
                            {if $ALL_BLOCKS|count > 0}
                                <div class="summaryView">
                                    <div class="summaryViewHeader">
                                        <h4 class="display-inline-block">{vtranslate('LBL_BLOCKS', $QUALIFIED_MODULE)}</h4>
                                    </div>
                                    <div class="summaryViewFields">
                                        <div class="recordDetails">

                                            <table class="summary-table no-border">
                                                <tbody>
                                                {foreach item=BLOCK_VISIBLE_TYPE key=BLOCK_LABEL name='foreachblocks' from=$ALL_BLOCKS}
                                                    <tr class="summaryViewEntries">
                                                        {assign var=BLOCK_SEQ value=$smarty.foreach.foreachblocks.iteration}
                                                        <td class="fieldLabel">
                                                            <label class="muted textOverflowEllipsis">{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}</label>
                                                        </td>
                                                        {if $MODE neq "FieldsGroup"}
                                                            <td class="fieldValue">
                                                                {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                                                    {if $VISIBLE_KEY eq $BLOCK_VISIBLE_TYPE}{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)}{/if}
                                                                {/foreach}
                                                            </td>
                                                        {/if}
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            {/if}
                            {if $FIELDS_GROUPS_STRUCTURE|count > 0}
                                <div class="summaryView">
                                    <div class="summaryViewHeader">
                                        <h4 class="display-inline-block">{vtranslate('LBL_FIELDS_GROUPS', $QUALIFIED_MODULE)}</h4>
                                    </div>
                                    <div class="summaryViewFields">
                                        <div class="recordDetails">

                                            <table class="summary-table no-border">
                                                <tbody>
                                                {foreach item=FG_DATA key=FG_ID name="foreachfieldsgroups" from=$ALL_FIELDS_GROUPS}
                                                    {assign var=FG_VISIBLE_TYPE value=$FG_DATA.visible}
                                                    {assign var=IS_MANDATORY value=$FG_DATA.mandatory}
                                                    <tr class="summaryViewEntries">
                                                        <td class="fieldLabel">
                                                            <label class="muted textOverflowEllipsis">{$FIELDS_GROUPS_STRUCTURE[$FG_ID]}</label>
                                                        </td>
                                                        <td class="fieldValue">
                                                            {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                                                {if $VISIBLE_KEY eq $FG_VISIBLE_TYPE && $IS_MANDATORY neq "1"}{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)}{/if}
                                                            {/foreach}
                                                            {if $IS_MANDATORY eq "1"}{vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}{/if}
                                                        </td>
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                        </div>
                        <div class="middle-block col-lg-8">
                        </div>
                    </div>
                    {if $IS_OVERLAY neq "yes"  && $MODE neq "FieldsGroup"}
                        <div  class="tab-pane" id="relatedTabPf">
                            <div id="listContainer" class="summaryWidgetContainer noContent">
                                {if $PROCESSFLOW_LIST}
                                    <div id="table-content" class="table-container">
                                        <table id="relatedActionsList" class="table listview-table">
                                            <thead>
                                            <tr class="listViewContentHeader">
                                                <th nowrap>{vtranslate('Name',$QUALIFIED_MODULE)}</th>
                                            </tr>
                                            </thead>
                                            <tbody class="overflow-y">
                                            {foreach item=action_data  from=$PROCESSFLOW_LIST}
                                                <tr class="listViewEntries" data-id="{$action_data.id}" data-recordUrl="{$action_data.detail_link}">
                                                    <td class="listViewEntryValue textOverflowEllipsis " width="%" nowrap><a>{$action_data.name}</a></td>
                                                </tr>
                                            {/foreach}
                                            </tbody>
                                        </table>
                                    </div>
                                {else}
                                    <p class="textAlignCenter">{vtranslate('LBL_NO_RELATED_PF',$QUALIFIED_MODULE)}</p>
                                {/if}
                            </div>
                        </div>
                    {/if}
                </div>
                <div class="textAlignCenter" style="color: rgb(153, 153, 153);">{vtranslate('ITS4YouDynamicFields',$QUALIFIED_MODULE)} {$VERSION} {vtranslate('COPYRIGHT',$QUALIFIED_MODULE)}</div>
            </form>
        </div>
    </div>
{/strip}