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
<input type="hidden" id="pageStartRange" value="{$PAGING_MODEL->getRecordStartRange()}" />
<input type="hidden" id="pageEndRange" value="{$PAGING_MODEL->getRecordEndRange()}" />
<input type="hidden" id="previousPageExist" value="{$PAGING_MODEL->isPrevPageExists()}" />
<input type="hidden" id="nextPageExist" value="{$PAGING_MODEL->isNextPageExists()}" />
<input type="hidden" id="totalCount" value="{$LISTVIEW_COUNT}" />
<input type="hidden" value="{$ORDER_BY}" id="orderBy">
<input type="hidden" value="{$SORT_ORDER}" id="sortOrder">
<input type="hidden" id="totalCount" value="{$LISTVIEW_COUNT}" />
<input type='hidden' value="{$PAGE_NUMBER}" id='pageNumber'>
<input type='hidden' value="{$PAGING_MODEL->getPageLimit()}" id='pageLimit'>
<input type="hidden" value="{$LISTVIEW_ENTRIES_COUNT}" id="noOfEntries">

<div class="listViewEntriesDiv" style='overflow-x:auto;'>
    
        <span class="listViewLoadingImageBlock hide modal" id="loadingListViewModal">
            <img class="listViewLoadingImage" src="{vimage_path('loading.gif')}" alt="no-image" title="{vtranslate('LBL_LOADING', $MODULE)}"/>
            <p class="listViewLoadingMsg">{vtranslate('LBL_LOADING_LISTVIEW_CONTENTS', $MODULE)}........</p>
        </span>
                
        <ul class="nav nav-tabs massEditTabs" style="margin-bottom: 0;border-bottom: 0">
            <li class="active"><a href="#dynamicActions" data-toggle="tab"><strong>{vtranslate('LBL_DYNAMIC_ACTIONS',$QUALIFIED_MODULE)}</strong></a></li>
            <li><a href="#fieldsGroups" data-toggle="tab"><strong>{vtranslate('LBL_FIELDS_GROUPS',$QUALIFIED_MODULE)}</strong></a></li>
        </ul>
        <div class="tab-content layoutContent padding20 themeTableColor overflowVisible">
            <div class="tab-pane active" id="dynamicActions">
    
                {if $VERSION_TYPE neq "deactivate" && $VERSION_TYPE neq ""} 
                     <button class="btn addButton" {if stripos($MODULE_MODEL->getCreateViewUrl(), 'javascript:')===0} onclick="{$MODULE_MODEL->getCreateViewUrl()|substr:strlen('javascript:')};"
                    {*{else}*} onclick='window.location.href="{$MODULE_MODEL->getCreateViewUrl()}"' {/if}>
                            <i class="icon-plus icon-white"></i>&nbsp;
                            <strong>{vtranslate('LBL_NEW_DYNAMIC_FIELDS',$QUALIFIED_MODULE)}</strong>
                    </button>
                    <br><br>
                {/if} 
                    
                {assign var="NAME_FIELDS" value=$MODULE_MODEL->getNameFields()}
                {assign var=WIDTHTYPE value=$CURRENT_USER_MODEL->get('rowheight')}
                <table class="table table-bordered table-condensed listViewEntriesTable">
                        <thead>
                                <tr class="listViewHeaders">
                                        {foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}

                                        {if $LISTVIEW_HEADERNAME eq "description"}
                                            {assign var=WIDTH value=50}
                                        {else}
                                            {assign var=WIDTH value=30}
                                        {/if}    

                                        <th width="{$WIDTH}%" nowrap {if $LISTVIEW_HEADER@last}colspan="2" {/if} class="{$WIDTHTYPE}">
                                               <a  {if !($LISTVIEW_HEADER->has('sort'))} class="listViewHeaderValues cursorPointer" data-nextsortorderval="{if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}{$NEXT_SORT_ORDER}{else}ASC{/if}" data-columnname="{$LISTVIEW_HEADER->get('name')}" {/if}>{vtranslate($LISTVIEW_HEADER->get('label'), $QUALIFIED_MODULE)}
                                                        {if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}<img class="{$SORT_IMAGE} icon-white">{/if}</a>
                                        </th>
                                        {/foreach}
                                </tr>
                        </thead>
                        <tbody>
                        {foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES[0]}
                            {if $LISTVIEW_ENTRY->get('isgroup') eq "0"}
                                {include file='ListViewContent.tpl'|@vtemplate_path:$QUALIFIED_MODULE FOLLOWS_UP_ID=$LISTVIEW_ENTRY->getId() LEVEL ='0' LISTVIEW_TYPE = '' }
                            {/if}
                        {/foreach}
                        </tbody>
                </table>
                {if $LISTVIEW_ENTRIES_COUNT eq '0'}
                <table class="emptyRecordsDiv">
                        <tbody>
                                <tr>
                                        <td>
                                            {if $SOURCE_MODULE neq ""}
                                                {vtranslate('LBL_NO')} {vtranslate($MODULE, $QUALIFIED_MODULE)} {if $SOURCE_MODULE neq "all"}{vtranslate('LBL_FOR', $QUALIFIED_MODULE)} "{vtranslate($SOURCE_MODULE, $SOURCE_MODULE)}"{/if} {vtranslate('LBL_FOUND')}
                                            {/if}
                                        </td>
                                </tr>
                        </tbody>
                </table>
                {/if}
            </div>
            <div class="tab-pane" id="fieldsGroups">
                {if $VERSION_TYPE neq "deactivate" && $VERSION_TYPE neq ""} 
                     <button class="btn addButton" {if stripos($MODULE_MODEL->getCreateViewUrl('Group'), 'javascript:')===0} onclick="{$MODULE_MODEL->getCreateViewUrl('Group')|substr:strlen('javascript:')};"
                    {*{else}*} onclick='window.location.href="{$MODULE_MODEL->getCreateViewUrl('Group')}"' {/if}>
                            <i class="icon-plus icon-white"></i>&nbsp;
                            <strong>{vtranslate('LBL_NEW_FIELDS_GROUP',$QUALIFIED_MODULE)}</strong>
                    </button>
                    <br><br>
                {/if} 
                <table class="table table-bordered table-condensed listViewEntriesTable">
                        <thead>
                                <tr class="listViewHeaders">
                                        {foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}

                                        {if $LISTVIEW_HEADERNAME eq "description"}
                                            {assign var=WIDTH value=50}
                                        {else}
                                            {assign var=WIDTH value=30}
                                        {/if}    

                                        <th width="{$WIDTH}%" nowrap {if $LISTVIEW_HEADER@last}colspan="2" {/if} class="{$WIDTHTYPE}">
                                               <a  {if !($LISTVIEW_HEADER->has('sort'))} class="listViewHeaderValues cursorPointer" data-nextsortorderval="{if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}{$NEXT_SORT_ORDER}{else}ASC{/if}" data-columnname="{$LISTVIEW_HEADER->get('name')}" {/if}>{vtranslate($LISTVIEW_HEADER->get('label'), $QUALIFIED_MODULE)}
                                                        {if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}<img class="{$SORT_IMAGE} icon-white">{/if}</a>
                                        </th>
                                        {/foreach}
                                </tr>
                        </thead>
                        <tbody>
                        {foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES[0]}
                            {if $LISTVIEW_ENTRY->get('isgroup') eq "1"}
                                {include file='ListViewContent.tpl'|@vtemplate_path:$QUALIFIED_MODULE FOLLOWS_UP_ID=$LISTVIEW_ENTRY->getId() LEVEL ='0' LISTVIEW_TYPE = 'Group'}
                            {/if}
                        {/foreach}
                        </tbody>
                </table>
            </div>
        </div>
</div>
{/strip}