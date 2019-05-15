{*<!--
/*********************************************************************************
* The content of this file is subject to the Dynamic Fields 4 You.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
-->*}
{foreach key=BLOCK_LABEL item=BLOCK_FIELDS name="foreachblocks" from=$RECORD_STRUCTURE}
    {assign var=BLOCK_SEQ value=$smarty.foreach.foreachblocks.iteration}
    {assign var=BLOCK_VISIBLE_TYPE value=$ALL_BLOCKS[$BLOCK_LABEL]}
    <table class="table table-bordered blockContainer showInlineTable equalSplit">
        <thead>
            <tr>
                <th class="listViewHeaders bgColor" colspan="{if $MODE eq "DefaultForm"}4{else}6{/if}">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            {vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}&nbsp;&nbsp;
                            <input class="selectVisibleBlock" type="hidden" name="block_visibility_{$BLOCK_SEQ}" value="{$BLOCK_LABEL}">
                            <select class="select2 hideBlockSelect" data-blockseq="{$BLOCK_SEQ}" name="block_select_visibility_{$BLOCK_SEQ}" id="visibility_{$BLOCK_SEQ}">
                            {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                {if $VISIBLE_KEY neq "3"}
                                <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $BLOCK_VISIBLE_TYPE}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)}</option>
                                {/if}
                            {/foreach}
                            </select>
                        </div>
                        {if $MODE neq "DefaultForm"}
                            <div class="col-md-6 col-sm-6 {if $BLOCK_VISIBLE_TYPE eq "2"}hide{/if}" id="table_set_{$BLOCK_SEQ}">
                                {vtranslate("LBL_SET", $QUALIFIED_MODULE)} :&nbsp;
                                <select class="select2 set-all-select col-md-6 col-sm-6" >
                                    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
                                    {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                        <option value="{$VISIBLE_KEY}">{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                    {/foreach}
                                </select>
                                &nbsp;
                                <input type="button" class="btn btn-success btn-set-all" value="{vtranslate("LBL_SET", $QUALIFIED_MODULE)}">
                            </div>
                        {/if}
                    </div>
                </th>
            </tr>
        </thead>
        <tbody id="table_tbody_{$BLOCK_SEQ}" {if $BLOCK_VISIBLE_TYPE eq "2"}class="hide"{/if}>
        {if $BLOCK_LABEL != 'LBL_ITEM_DETAILS' || $IS_INVENTORY_MODULE neq "yes"}
            {if $MODE neq "DefaultForm"}
                <tr>
                    {assign var=LABEL_VISIBLE value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_VISIBLE', $QUALIFIED_MODULE)}</label>"}
                    {assign var=LABEL_MANDATORY value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_MANDATORY', $QUALIFIED_MODULE)}</label>"}
                    <td class="fieldLabel medium" style="width: 20%"></td>
                    <td class="fieldLabel medium" style="width: 20%">{$LABEL_VISIBLE}</td>
                    {if $MODE neq "DefaultForm"}<td class="fieldLabel medium" style="width: 10%">{$LABEL_MANDATORY}</td>{/if}

                    <td class="fieldLabel medium" style="width: 20%"></td>
                    <td class="fieldLabel medium" style="width: 20%">{if $BLOCK_FIELDS|@count gt 1}{$LABEL_VISIBLE}{else}&nbsp;{/if}</td>
                    {if $MODE neq "DefaultForm"}<td class="fieldLabel medium" style="width: 10%">{if $BLOCK_FIELDS|@count gt 1}{$LABEL_MANDATORY}{else}&nbsp;{/if}</td>{/if}
                </tr>
            {/if}
            {assign var=COUNTER value=0}
            {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}

                {if $COUNTER eq 0}
                <tr>
                {/if}
                    {assign var=VISIBLE_TYPE value=$DYNAMICFIELDS_RECORD_MODEL->getVisibility($FIELD_NAME)}
                    <td class="fieldLabel medium" {if $MODE neq "DefaultForm"}style="width: 20%;"{/if}>
                        <label class="muted pull-right marginRight10px" style="{if $VISIBLE_TYPE eq "1"}font-weight:bold;{/if}{if $VISIBLE_TYPE eq "2"}text-decoration:line-through;{/if}{if $VISIBLE_TYPE eq "3"}text-decoration:underline;{/if}">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</label>
                    </td>
                    <td {if $MODE neq "DefaultForm"}style="width: 20%"{/if} data-fieldname="{$FIELD_NAME}">
                        <select class="select2 col-md-6 col-sm-6" name="visibility_{$FIELD_NAME}" id="visibility_{$FIELD_NAME}">
                            <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                            {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                {if $VISIBLE_KEY neq "1" OR $MODE neq "DefaultForm"}
                                    <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $VISIBLE_TYPE}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                {/if}
                            {/foreach}
                        </select>
                    </td>
                    {if $MODE neq "DefaultForm"}
                        <td style="width: 10%; text-align: center" data-fieldname="{$FIELD_NAME}">
                            {assign var=IS_MANDATORY value=$DYNAMICFIELDS_RECORD_MODEL->isMandatory($FIELD_NAME)}
                            <input type="checkbox" name="mandatory_{$FIELD_NAME}" id="{$FIELD_NAME}_mandatory" {if $IS_MANDATORY eq "yes"}checked{/if} value="1">
                        </td>
                    {/if}
                    {assign var=COUNTER value=$COUNTER+1}
                {if $COUNTER eq 2}
                </tr>
                    {assign var=COUNTER value=0}
                {/if}

            {/foreach}
            {if $COUNTER eq "1"}
            <td class="fieldLabel medium">&nbsp;</td>
            <td>&nbsp;</td>
            {if $MODE neq "DefaultForm"}<td>&nbsp;</td>{/if}
            </tr>
            {/if}
        {/if}
        </tbody>
    </table>
    <br>
{/foreach}
<input type='hidden' value='{$BLOCK_SEQ}' id='new_blocks' name='new_blocks'>