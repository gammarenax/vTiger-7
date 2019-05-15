<tr class="listViewEntries" data-id="{$LISTVIEW_ENTRY->getId()}" {if method_exists($LISTVIEW_ENTRY,'getDetailViewUrl')}data-recordurl="{$LISTVIEW_ENTRY->getDetailViewUrl($LISTVIEW_TYPE)}"{/if}>
    {foreach item=LISTVIEW_HEADER name="tdentries" from=$LISTVIEW_HEADERS}
            {assign var=LISTVIEW_HEADERNAME value=$LISTVIEW_HEADER->get('name')}
            {assign var=LISTVIEW_VALUE value={$LISTVIEW_ENTRY->getDisplayValue($LISTVIEW_HEADERNAME)}}
            {assign var=LAST_COLUMN value=$LISTVIEW_HEADER@last}

            {if $LISTVIEW_HEADERNAME eq "description"}
                {assign var=WIDTH value=50}
            {else}
                {assign var=WIDTH value=30}
            {/if}  

            <td class="listViewEntryValue {$WIDTHTYPE}" width="{$WIDTH}%" nowrap>
                {if $smarty.foreach.tdentries.index eq 0}
                {'&nbsp;'|str_repeat:(6*$LEVEL)}
                {/if}
                &nbsp;{$LISTVIEW_VALUE}
                    {if $LAST_COLUMN && $LISTVIEW_ENTRY->getRecordLinks($LISTVIEW_TYPE)}
                            </td><td nowrap class="{$WIDTHTYPE}">
                                    <div class="pull-right actions">
                                            <span class="actionImages">
                                                    {foreach item=RECORD_LINK from=$LISTVIEW_ENTRY->getRecordLinks($LISTVIEW_TYPE)}
                                                            {assign var="RECORD_LINK_URL" value=$RECORD_LINK->getUrl()}

                                                            <a {if stripos($RECORD_LINK_URL, 'javascript:')===0} onclick="{$RECORD_LINK_URL|substr:strlen("javascript:")};if(event.stopPropagation){ldelim}event.stopPropagation();{rdelim}else{ldelim}event.cancelBubble=true;{rdelim}" {else} href='{$RECORD_LINK_URL}' {/if}>
                                                                    <i class="{$RECORD_LINK->getIcon()} alignMiddle" title="{vtranslate($RECORD_LINK->getLabel(), $QUALIFIED_MODULE)}"></i>
                                                            </a>
                                                            {if !$RECORD_LINK@last}
                                                                    &nbsp;&nbsp;
                                                            {/if}
                                                    {/foreach}
                                            </span>
                                    </div>
                            </td>
                    {/if}
            </td>
    {/foreach}
</tr>

{foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES[$FOLLOWS_UP_ID]}
    {include file='ListViewContent.tpl'|@vtemplate_path:$QUALIFIED_MODULE FOLLOWS_UP_ID=$LISTVIEW_ENTRY->getId() LEVEL = ($LEVEL + 1) LISTVIEW_TYPE = $LISTVIEW_TYPE}
{/foreach}