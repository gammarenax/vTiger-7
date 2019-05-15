{*<!--
/*********************************************************************************
* The content of this file is subject to the Dynamic Fields 4 You.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
-->*}
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

    <div class="col-sm-12 col-xs-12 ">
        <span class="listViewLoadingImageBlock hide modal" id="loadingListViewModal">
            <img class="listViewLoadingImage" src="{vimage_path('loading.gif')}" alt="no-image" title="{vtranslate('LBL_LOADING', $MODULE)}"/>
            <p class="listViewLoadingMsg">{vtranslate('LBL_LOADING_LISTVIEW_CONTENTS', $MODULE)}........</p>
        </span>

        <ul class="nav nav-tabs massEditTabs">
            <li {if $TAB eq "layout"}class="active"{/if}><a href="#dynamicActions" data-toggle="tab"><strong>{vtranslate('LBL_DYNAMIC_ACTIONS',$QUALIFIED_MODULE)}</strong></a></li>
            <li {if $TAB eq "group"}class="active"{/if}><a href="#fieldsGroups" data-toggle="tab"><strong>{vtranslate('LBL_FIELDS_GROUPS',$QUALIFIED_MODULE)}</strong></a></li>
            <li {if $TAB eq "default"}class="active"{/if}><a href="#defaultForms" data-toggle="tab"><strong>{vtranslate('LBL_DEFAULT_FORMS_TAB',$QUALIFIED_MODULE)}</strong></a></li>
        </ul>
        <div class="tab-content layoutContent  themeTableColor overflowVisible">
            <div class="tab-pane {if $TAB eq "layout"}active{/if}" id="dynamicActions">
                <div class="table-container">
                    <table class="table listview-table" style="table-layout: fixed">
                        <thead>
                        <tr class="listViewContentHeader">
                            <th></th>
                            {foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}

                                {if $LISTVIEW_HEADER->get('name') eq "description"}
                                    {assign var=WIDTH value="col-lg-8 col-xs-8 col-sm-8"}
                                {else}
                                    {assign var=WIDTH value="col-lg-2 col-xs-2 col-sm-2"}
                                {/if}

                                <th class="{$WIDTH}" nowrap>
                                    <a  {if !($LISTVIEW_HEADER->has('sort'))} class="listViewHeaderValues cursorPointer" data-nextsortorderval="{if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}{$NEXT_SORT_ORDER}{else}ASC{/if}" data-columnname="{$LISTVIEW_HEADER->get('name')}" {/if}>{vtranslate($LISTVIEW_HEADER->get('label'), $QUALIFIED_MODULE)}
                                        {if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}<img class="{$SORT_IMAGE} icon-white">{/if}</a>
                                </th>
                            {/foreach}
                        </tr>
                        </thead>
                        <tbody>
                        {foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES[0]}
                            {if $LISTVIEW_ENTRY->get('isgroup') eq "0"}
                                {include file='ListViewContent.tpl'|@vtemplate_path:$QUALIFIED_MODULE FOLLOWS_UP_ID=$LISTVIEW_ENTRY->getId() LEVEL ='0' LISTVIEW_TYPE = 'FieldsLayout' }
                            {/if}
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>

            {*
    <div id="table-content" class="table-container">
        {assign var="NAME_FIELDS" value=$MODULE_MODEL->getNameFields()}
        {assign var=WIDTHTYPE value=$CURRENT_USER_MODEL->get('rowheight')}
        <table id="listview-table" class="table listview-table">
                <thead>
                        <tr class="listViewContentHeader">
                            <th></th>
                            {foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}

                                {if $LISTVIEW_HEADERNAME eq "description"}
                                    {assign var=WIDTH value="col-xs-8 col-sm-8"}
                                {else}
                                    {assign var=WIDTH value="col-xs-2 col-sm-2"}
                                {/if}

                                <th nowrap {if $LISTVIEW_HEADER@last}colspan="2" {/if} class="{$WIDTH}">
                                       <a  {if !($LISTVIEW_HEADER->has('sort'))} class="listViewHeaderValues cursorPointer" data-nextsortorderval="{if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}{$NEXT_SORT_ORDER}{else}ASC{/if}" data-columnname="{$LISTVIEW_HEADER->get('name')}" {/if}>{vtranslate($LISTVIEW_HEADER->get('label'), $QUALIFIED_MODULE)}
                                                {if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}<img class="{$SORT_IMAGE} icon-white">{/if}</a>
                                </th>
                            {/foreach}
                        </tr>
                </thead>
                <tbody>
                {foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES[0]}
                    {if $LISTVIEW_ENTRY->get('isgroup') eq "0"}
                        {include file='ListViewContent.tpl'|@vtemplate_path:$QUALIFIED_MODULE FOLLOWS_UP_ID=$LISTVIEW_ENTRY->getId() LEVEL ='0' LISTVIEW_TYPE = 'FieldsLayout' }
                    {/if}
                {/foreach}
                </tbody>
        </table>
    </div>*}

            <div class="tab-pane {if $TAB eq "group"}active{/if}" id="fieldsGroups">

                <div class="table-container">
                    <table class="table listview-table" style="table-layout: fixed">
                        <thead>
                        <tr class="listViewContentHeader">
                            <th></th>
                            {foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}

                                {if $LISTVIEW_HEADER->get('name') eq "description"}
                                    {assign var=WIDTH value="col-lg-8 col-xs-8 col-sm-8"}
                                {else}
                                    {assign var=WIDTH value="col-lg-2 col-xs-2 col-sm-2"}
                                {/if}

                                <th class="{$WIDTH}">
                                    <a  {if !($LISTVIEW_HEADER->has('sort'))} class="listViewHeaderValues cursorPointer" data-nextsortorderval="{if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}{$NEXT_SORT_ORDER}{else}ASC{/if}" data-columnname="{$LISTVIEW_HEADER->get('name')}" {/if}>{vtranslate($LISTVIEW_HEADER->get('label'), $QUALIFIED_MODULE)}
                                        {if $COLUMN_NAME eq $LISTVIEW_HEADER->get('name')}<img class="{$SORT_IMAGE} icon-white">{/if}</a>
                                </th>
                            {/foreach}
                        </tr>
                        </thead>
                        <tbody>
                        {foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES[0]}
                            {if $LISTVIEW_ENTRY->get('isgroup') eq "1"}
                                {include file='ListViewContent.tpl'|@vtemplate_path:$QUALIFIED_MODULE FOLLOWS_UP_ID=$LISTVIEW_ENTRY->getId() LEVEL ='0' LISTVIEW_TYPE = 'FieldsGroup'}
                            {/if}
                        {/foreach}
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane {if $TAB eq "default"}active{/if}" id="defaultForms">
                <div class="col-lg-4 col-sm-6 col-xs-8">
                    <div class="table-container">
                        <table class="table listview-table">
                            <thead>
                            <tr class="listViewContentHeader">
                                <th width="50px">&nbsp;</th>
                                <th>
                                    {vtranslate("LBL_MODULE", $QUALIFIED_MODULE)}
                                </th>
                            </tr>
                            </thead>
                            {foreach item=S_MODULE_MODEL key=TAB_ID from=$ALL_MODULES}

                                {if $DEFAULT_MODULES_LIST[$S_MODULE_MODEL->getName()] neq ""}
                                    {assign var=IS_SAVED value="yes"}
                                {else}
                                    {assign var=IS_SAVED value="no"}
                                {/if}


                                <tr class="listViewEntries" {if $IS_SAVED eq "no"}style="font-style:italic;"{/if} data-id="{if $IS_SAVED eq "yes"}{$DEFAULT_MODULES_LIST[$S_MODULE_MODEL->getName()]->getId()}{/if}" data-recordurl="index.php?module=ITS4YouDynamicFields&view=Edit&mode=DefaultForm&parent=Settings&sourceModule={$S_MODULE_MODEL->getName()}">
                                    <td width="50px">
                                        <div >
                                            <span class="actionsRecordButton" style="opacity: 0; padding: 0 5px; padding: 0 5px;">
                                                {if $IS_SAVED eq "yes"}
                                                    <a class="deleteRecordButton" style="padding: 0 5px;">
                                                        <i title="{vtranslate('LBL_DELETE', $MODULE)}" class="fa fa-trash alignMiddle"></i>
                                                    </a>
                                                {/if}
                                                {*<a class="editRecordButton" data-id="" href="javascript:void(0);" data-url="" name="editlink">
                                                    <i title="{vtranslate('LBL_EDIT', $MODULE)}" class="fa fa-pencil alignMiddle"></i>
                                                </a>*}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="listViewEntryValue " {if $IS_SAVED eq "no"}style="color:#888;"{/if} nowrap>
                                        {vtranslate($S_MODULE_MODEL->getName(),$S_MODULE_MODEL->getName())}
                                    </td>
                                </tr>
                            {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>