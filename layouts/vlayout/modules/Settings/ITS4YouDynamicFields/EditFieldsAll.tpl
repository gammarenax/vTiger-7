{foreach key=BLOCK_LABEL item=BLOCK_FIELDS name="foreachblocks" from=$RECORD_STRUCTURE}
    {assign var=BLOCK_SEQ value=$smarty.foreach.foreachblocks.iteration}
    {assign var=BLOCK_VISIBLE_TYPE value=$ALL_BLOCKS[$BLOCK_LABEL]}
            <table class="table table-bordered blockContainer showInlineTable equalSplit">
                <thead>
                    <tr>
                        <th class="blockHeader" colspan="6">
                            <div class="row-fluid">
                                <div class="span5">
                                    {vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}&nbsp;&nbsp;
                                    <input type="hidden" name="block_visibility_{$BLOCK_SEQ}" value="{$BLOCK_LABEL}">
                                    <select class="chzn-select span2 selectVisibleBlock" data-blockseq="{$BLOCK_SEQ}" name="block_select_visibility_{$BLOCK_SEQ}" id="visibility_{$BLOCK_SEQ}">
                                    {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                        {if $VISIBLE_KEY neq "3"}
                                        <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $BLOCK_VISIBLE_TYPE}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)}</option>
                                        {/if}
                                    {/foreach}
                                    </select>
                                </div>
                                <div class="span7 {if $BLOCK_VISIBLE_TYPE eq "2"}hide{/if}" id="table_set_{$BLOCK_SEQ}"> 
                                    {vtranslate("LBL_SET", $QUALIFIED_MODULE)} :&nbsp;
                                    <select class="chzn-select set-all-select" >
                                        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
                                        {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                            <option value="{$VISIBLE_KEY}">{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                        {/foreach}
                                    </select>
                                    &nbsp;
                                    <input type="button" class="btn btn-success btn-set-all" value="{vtranslate("LBL_SET", $QUALIFIED_MODULE)}"> 
                                </div>  
                            </div> 
                        </th>
                    </tr>
                </thead>
                <tbody id="table_tbody_{$BLOCK_SEQ}" {if $BLOCK_VISIBLE_TYPE eq "2"}class="hide"{/if}>
                    <tr>
                        {assign var=LABEL_VISIBLE value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_VISIBLE', $QUALIFIED_MODULE)}</label>"}
                        {assign var=LABEL_MANDATORY value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_MANDATORY', $QUALIFIED_MODULE)}</label>"}
                        <td class="fieldLabel medium" style="width: 20%"></td>
                        <td class="fieldLabel medium" style="width: 20%">{$LABEL_VISIBLE}</td>
                        <td class="fieldLabel medium" style="width: 10%">{$LABEL_MANDATORY}</td>
                        
                        <td class="fieldLabel medium" style="width: 20%"></td>
                        <td class="fieldLabel medium" style="width: 20%">{if $BLOCK_FIELDS|@count gt 1}{$LABEL_VISIBLE}{else}&nbsp;{/if}</td>
                        <td class="fieldLabel medium" style="width: 10%">{if $BLOCK_FIELDS|@count gt 1}{$LABEL_MANDATORY}{else}&nbsp;{/if}</td>
                        
                    </tr>
                    {assign var=COUNTER value=0}
                    {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
                        {if $COUNTER eq 0}
                        <tr>
                        {/if}
                            {assign var=VISIBLE_TYPE value=$DYNAMICFIELDS_RECORD_MODEL->getVisibility($FIELD_NAME)}
                            <td class="fieldLabel medium" style="width: 20%;"> 
                                <label class="muted pull-right marginRight10px" style="{if $VISIBLE_TYPE eq "1"}font-weight:bold;{/if}{if $VISIBLE_TYPE eq "2"}text-decoration:line-through;{/if}{if $VISIBLE_TYPE eq "3"}text-decoration:underline;{/if}">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</label>
                            </td>
                            <td style="width: 20%" data-fieldname="{$FIELD_NAME}">
                                <select class="chzn-select" name="visibility_{$FIELD_NAME}" id="visibility_{$FIELD_NAME}">
                                    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                                    {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                        <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $VISIBLE_TYPE}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                    {/foreach}
                                </select>
                            </td>
                            <td style="width: 10%; text-align: center" data-fieldname="{$FIELD_NAME}">
                                {assign var=IS_MANDATORY value=$DYNAMICFIELDS_RECORD_MODEL->isMandatory($FIELD_NAME)}
                                <input type="checkbox" name="mandatory_{$FIELD_NAME}" id="{$FIELD_NAME}_mandatory" {if $IS_MANDATORY eq "yes"}checked{/if} value="1"> 
                            </td>
                            {assign var=COUNTER value=$COUNTER+1}
                        {if $COUNTER eq 2}
                        </tr>
                            {assign var=COUNTER value=0}
                        {/if}
                        
                    {/foreach}
                    {if $COUNTER eq "1"}
                    <td class="fieldLabel medium">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                    {/if}
                </tbody>
            </table>
            <br>
        {/foreach}
        <input type='hidden' value='{$BLOCK_SEQ}' id='new_blocks' name='new_blocks'>