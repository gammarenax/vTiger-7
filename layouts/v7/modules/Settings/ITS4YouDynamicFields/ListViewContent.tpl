{*<!--
/*********************************************************************************
* The content of this file is subject to the Dynamic Fields 4 You.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
-->*}
<tr class="listViewEntries" data-id="{$LISTVIEW_ENTRY->getId()}" {if method_exists($LISTVIEW_ENTRY,'getDetailViewUrl')}data-recordurl="{$LISTVIEW_ENTRY->getDetailViewUrl($LISTVIEW_TYPE)}"{/if}>

    <td>
        <div style="width:120px ;">
            <span class="actionsRecordButton" style="opacity: 0; padding: 0 5px; padding: 0 5px;">
                <a class="deleteRecordButton" style="padding: 0 5px;">
                    <i title="{vtranslate('LBL_DELETE', $MODULE)}" class="fa fa-trash alignMiddle"></i>
                </a>
                <a class="editRecordButton" data-id="{$LISTVIEW_ENTRY->getId()}" href="javascript:void(0);" data-url="{$LISTVIEW_ENTRY->getEditViewUrl($LISTVIEW_TYPE)}" name="editlink">
                    <i title="{vtranslate('LBL_EDIT', $MODULE)}" class="fa fa-pencil alignMiddle"></i>
                </a>
            </span>
        </div>
    </td>

    {foreach item=LISTVIEW_HEADER name="tdentries" from=$LISTVIEW_HEADERS}
        {assign var=LISTVIEW_HEADERNAME value=$LISTVIEW_HEADER->get('name')}
        {assign var=LISTVIEW_VALUE value={$LISTVIEW_ENTRY->getDisplayValue($LISTVIEW_HEADERNAME)}}
        {assign var=LAST_COLUMN value=$LISTVIEW_HEADER@last}

        {if $LISTVIEW_HEADERNAME eq "description"}
            {assign var=WIDTH value="col-xs-8 col-sm-8"}
        {else}
            {assign var=WIDTH value="col-xs-2 col-sm-2"}
        {/if}

        {if $LISTVIEW_HEADERNAME eq "description" && $LISTVIEW_TYPE eq "DefaulFields"}
        {else}
            <td class="listViewEntryValue {$WIDTH}" nowrap>
                {if $smarty.foreach.tdentries.index eq 0}
                {'&nbsp;'|str_repeat:(6*$LEVEL)}
                {/if}
               &nbsp;{$LISTVIEW_VALUE}
            </td>
        {/if}
    {/foreach}
</tr>