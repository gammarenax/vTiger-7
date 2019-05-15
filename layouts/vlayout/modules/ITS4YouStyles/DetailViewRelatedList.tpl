{*<!--
/*********************************************************************************
* The content of this file is subject to the EMAIL Maker license.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
-->*}
{strip}
<div class="relatedContainer">
    <input type="hidden" name="currentPageNum" value="1" />
    <input type="hidden" name="relatedModuleName" id="relatedModuleName" value="ITS4YouStyles">
    <input type="hidden" id="templateid" value="{$TEMPLATEID}">
    {if $EDIT eq "permitted"}
        <div class="relatedHeader ">
            <div class="btn-toolbar row-fluid">
                <div class="span8">
                    <div class="btn-group">
                        <button type="button" class="btn addButton addRelation" data-modulename="ITS4YouStyles"><i class="icon-plus icon-white"></i>&nbsp;<strong>{vtranslate('LBL_ADD')}&nbsp;{vtranslate('SINGLE_ITS4YouStyles','ITS4YouStyles')}</strong></button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn addButton selectRelation" data-modulename="ITS4YouStyles">&nbsp;<strong>{vtranslate('LBL_SELECT')}&nbsp;{vtranslate('SINGLE_ITS4YouStyles','ITS4YouStyles')}</strong></button>
                    </div>
                </div>
            </div> 
        </div>    
        <div class="contents-topscroll">
            <div class="topscroll-div">&nbsp;</div>
        </div>
    {/if}
    <div class="relatedContents contents-bottomscroll">
        <div class="bottomscroll-div">
            {assign var=WIDTHTYPE value=$USER_MODEL->get('rowheight')}
            <table class="table table-bordered listViewEntriesTable">
                <thead>
                    <tr class="listViewHeaders">
                        {foreach item=HEADER_LABEL key=HEADER_FIELD name="docforeach"  from=$RELATED_HEADERS}
                            <th {if $smarty.foreach.docforeach.last} colspan="2" {/if} nowrap class="{$WIDTHTYPE}">{vtranslate($HEADER_LABEL, $MODULE)}</th>
                        {/foreach}
                    </tr>
                </thead>
                {foreach item=RELATED_RECORD from=$RELATED_RECORDS}
                    <tr class="listViewEntries" data-id="{$RELATED_RECORD.id}" data-recordurl="index.php?module=ITS4YouStyles&amp;view=Detail&amp;record={$RELATED_RECORD.id}">
                        {foreach item=HEADER_LABEL key=HEADER_FIELD name="docrecordsforeach" from=$RELATED_HEADERS}
                            <td class="{$WIDTHTYPE}" nowrap>
                            {$RELATED_RECORD[$HEADER_FIELD]}
                            {if $smarty.foreach.docrecordsforeach.last}
                            </td>
                            <td nowrap class="{$WIDTHTYPE}">
                                <div class="pull-right actions">
                                    <span class="actionImages">
                                        <a href="index.php?module=ITS4YouStyles&view=Detail&record={$RELATED_RECORD.id}"><i title="{vtranslate('LBL_SHOW_COMPLETE_DETAILS', $MODULE)}" class="icon-th-list alignMiddle"></i></a>&nbsp;
                                        {if $IS_EDITABLE}
                                            <a href="index.php?module=ITS4YouStyles&view=Edit&record={$RELATED_RECORD.id}" class="cursorPointer" data-related-recordid='{$RELATED_RECORD.id}'><i class="icon-pencil alignMiddle" title="{vtranslate('LBL_EDIT', $MODULE)}"></i></a>
                                        {/if}
                                        {if $IS_DELETABLE}
                                            <a class="relationDelete"><i title="{vtranslate('LBL_DELETE', $MODULE)}" class="icon-trash alignMiddle"></i></a>
                                        {/if}
                                    </span>
                                </div>
                            {/if}
                            </td>
                        {/foreach}
                    </tr>
                {/foreach}
            </table>
        </div>
    </div>
</div>    
{/strip}