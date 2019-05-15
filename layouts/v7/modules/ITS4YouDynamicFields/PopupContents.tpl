{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
{strip}
<div class="row">
    {include file='PopupNavigation.tpl'|vtemplate_path:$MODULE}
</div>
<div class="row">
    <div class="col-md-12">
        <input type='hidden' id='pageNumber' value="{$PAGE_NUMBER}">
        <input type='hidden' id='pageLimit' value="{$PAGING_MODEL->getPageLimit()}">
        <input type="hidden" id="noOfEntries" value="{$LISTVIEW_ENTRIES_COUNT}">
        <input type="hidden" id="pageStartRange" value="{$PAGING_MODEL->getRecordStartRange()}" />
        <input type="hidden" id="pageEndRange" value="{$PAGING_MODEL->getRecordEndRange()}" />
        <input type="hidden" id="previousPageExist" value="{$PAGING_MODEL->isPrevPageExists()}" />
        <input type="hidden" id="nextPageExist" value="{$PAGING_MODEL->isNextPageExists()}" />
        <input type="hidden" id="totalCount" value="{$LISTVIEW_COUNT}" />
        <input type="hidden" value="{Vtiger_Util_Helper::toSafeHTML(Zend_JSON::encode($SEARCH_DETAILS))}" id="currentSearchParams" />
        <div class="contents-topscroll">
            <div class="topscroll-div">
                &nbsp;
            </div>
        </div>
        <div class="popupEntriesDiv relatedContents">
            <input type="hidden" value="{$ORDER_BY}" id="orderBy">
            <input type="hidden" value="{$SORT_ORDER}" id="sortOrder">
            {if $SOURCE_MODULE eq "Emails"}
                {if $MODULE neq 'Documents'}
                    <input type="hidden" value="Vtiger_EmailsRelatedModule_Popup_Js" id="popUpClassName"/>
                {/if}
            {/if}
            {assign var=WIDTHTYPE value=$CURRENT_USER_MODEL->get('rowheight')}
            <div class="popupEntriesTableContainer {if $MODULE eq 'EmailTemplates'} emailTemplatesPopupTableContainer{/if}">
                <table class="listview-table table-bordered listViewEntriesTable">
                <thead>
                    <tr class="listViewHeaders">
                        {foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}
                            {if $LISTVIEW_HEADER->get('name') neq "module"}
                                <th class="{$WIDTHTYPE}">{vtranslate($LISTVIEW_HEADER->get('label'), $MODULE)}</th>
                            {/if}
                        {/foreach}
                    </tr>
                </thead>
                {foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES name=popupListView}

                        {assign var="PROCESS_FLOW_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($LISTVIEW_ENTRY->getProcessFlowData($smarty.request.parenttype)))}
                        <tr class="listViewEntries" data-id='{$LISTVIEW_ENTRY->getId()}' data-info="{$PROCESS_FLOW_INFO}" id="{$MODULE}_popUpListView_row_{$smarty.foreach.popupListView.index+1}">
                            {foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}
                                {if $LISTVIEW_HEADER->get('name') neq "module"}
                                    {assign var=LISTVIEW_HEADERNAME value=$LISTVIEW_HEADER->get('name')}
                                    {assign var=LISTVIEW_ENTRY_VALUE value=$LISTVIEW_ENTRY->get($LISTVIEW_HEADERNAME)}
                                    <td class="listViewEntryValue value textOverflowEllipsis {$WIDTHTYPE}" title="{$RECORD_DATA[$LISTVIEW_HEADERNAME]}">
                                            {$LISTVIEW_ENTRY->getDisplayValue($LISTVIEW_HEADERNAME)}
                                    </td>
                                {/if}
                            {/foreach}
                        </tr>

                {/foreach}
            </table>
        </div>

            <!--added this div for Temporarily -->
        {if $LISTVIEW_ENTRIES_COUNT eq '0'}
            <div class="row">
                <div class="emptyRecordsDiv">
                    {if $IS_MODULE_DISABLED eq 'true'}    
                        {vtranslate($RELATED_MODULE, $RELATED_MODULE)}
                        {vtranslate('LBL_MODULE_DISABLED', $RELATED_MODULE)}
                    {else}
                        {vtranslate('LBL_NO', $MODULE)} {vtranslate($RELATED_MODULE, $RELATED_MODULE)} {vtranslate('LBL_FOUND', $MODULE)}.
                    {/if}
                </div>
            </div>
        {/if}
        {if $FIELDS_INFO neq null}
            <script type="text/javascript">
                var popup_uimeta = (function() {
                    var fieldInfo  = {$FIELDS_INFO};
                    return {
                        field: {
                            get: function(name, property) {
                                if(name && property === undefined) {
                                    return fieldInfo[name];
                                }
                                if(name && property) {
                                    return fieldInfo[name][property]
                                }
                            },
                            isMandatory : function(name){
                                if(fieldInfo[name]) {
                                    return fieldInfo[name].mandatory;
                                }
                                return false;
                            },
                            getType : function(name){
                                if(fieldInfo[name]) {
                                    return fieldInfo[name].type
                                }
                                return false;
                            }
                        },
                    };
                })();
            </script>
        {/if}
        </div>
    </div>
</div>
{/strip}
