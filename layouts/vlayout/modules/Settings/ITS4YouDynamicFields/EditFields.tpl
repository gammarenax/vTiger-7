

<div class='hide'>
<input type='hidden' value='0' name='isgroup'>
<input type='text' value='{$ALL_FIELDS|count}' id='new_fields' name='new_fields'>
<input type='text' value='{$ALL_BLOCKS|count}' id='new_blocks' name='new_blocks'>
<input type='text' value='{$ALL_FIELDS_GROUPS|count}' id='new_fields_groups' name='new_fields_groups'>
<select id='field_options'>
    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
    {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE}
        <optgroup label="{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}">
                {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
                    <option value="{$FIELD_NAME}">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</option>
                {/foreach}
        </optgroup>
    {/foreach}
</select>

<select id="field_action_options">
    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
    {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
        <option value="{$VISIBLE_KEY}">{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
    {/foreach}
    <option value='mandatory'> {vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}</option>
</select>

<select class="chzn-select span5" id='block_options'>
    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
    {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE}
        <option value="{$BLOCK_LABEL}">{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}</option>
    {/foreach}
</select>

<select id="block_action_options">
    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
    {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
        <option value="{$VISIBLE_KEY}">{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
    {/foreach}
</select>

{if $FIELDS_GROUPS_STRUCTURE|count > 0}
<select class="chzn-select span5" id='fields_groups_options'>
    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
    {foreach key=GROUP_ID item=GROUP_LABEL from=$FIELDS_GROUPS_STRUCTURE}
        <option value="{$GROUP_ID}">{vtranslate($GROUP_LABEL, $SELECTED_MODULE_NAME)}</option>
    {/foreach}
</select>
{/if}
</div>

<div class="row-fluid">
<div class="span7">
        <div class="row-fluid">
            <div class="span12">
                <table id='fieldsTable' class="table table-bordered blockContainer showInlineTable equalSplit">
                    <thead>
                        <tr>
                            <th class="blockHeader" colspan="3">
                                    {vtranslate('LBL_FIELDS', $QUALIFIED_MODULE)}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            {assign var=LABEL_VISIBLE value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_VISIBLE', $QUALIFIED_MODULE)}</label>"}
                            {assign var=LABEL_MANDATORY value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_MANDATORY', $QUALIFIED_MODULE)}</label>"}
                            <td class="fieldLabel medium" style="width: 60%"></td>
                            <td class="fieldLabel medium" style="width: 40%" colspan='2'>{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>


                        </tr>
                        {foreach item=FIELD_MODEL key=FIELD_NAME name="foreachfields" from=$ALL_FIELDS}

                            {assign var=IS_MANDATORY value=$DYNAMICFIELDS_RECORD_MODEL->isMandatory($FIELD_NAME)}
                            <tr id='field_tr_seq_{$smarty.foreach.foreachfields.iteration}'>
                                {assign var=VISIBLE_TYPE value=$DYNAMICFIELDS_RECORD_MODEL->getVisibility($FIELD_NAME)}
                                <td class="fieldLabel medium" style="width: 20%;"> 
                                    <label class="muted pull-right marginRight10px">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</label>
                                    <input type="hidden" name="field_visibility_{$smarty.foreach.foreachfields.iteration}" value="{$FIELD_NAME}">
                                </td>
                                <td style="width: 20%" data-fieldname="{$FIELD_NAME}">
                                            <select class="chzn-select span3" name="field_select_visibility_{$smarty.foreach.foreachfields.iteration}">
                                                <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                                                {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                                    <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $VISIBLE_TYPE && $IS_MANDATORY neq "yes"}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                                {/foreach}
                                                <option value='mandatory' {if $IS_MANDATORY eq "yes"}selected{/if}> {vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}</option>
                                            </select>
                                </td>
                                <td style='width:2%;vertical-align: middle;'>
                                    <a href='javascript:;'><i class="icon-trash trashField" data-type="field" data-seq='{$smarty.foreach.foreachfields.iteration}'></i></a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row-fluid marginBottom10px">       
            <div class="span6 btn-toolbar">
                <button class="btn addButton addField"><i class="icon-plus"></i>&nbsp;<strong>{vtranslate('LBL_ADD_FIELD', $QUALIFIED_MODULE)}</strong></button>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <table id='blocksTable' class="table table-bordered blockContainer showInlineTable equalSplit">
                    <thead>
                        <tr>
                            <th class="blockHeader" colspan="3">
                                    {vtranslate('LBL_BLOCKS', $QUALIFIED_MODULE)}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            {assign var=LABEL_VISIBLE value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_VISIBLE', $QUALIFIED_MODULE)}</label>"}
                            {assign var=LABEL_MANDATORY value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_MANDATORY', $QUALIFIED_MODULE)}</label>"}
                            <td class="fieldLabel medium" style="width: 60%"></td>
                            <td class="fieldLabel medium" style="width: 40%" colspan='2'>{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>
                        </tr>
                        {foreach item=BLOCK_VISIBLE_TYPE key=BLOCK_LABEL name='foreachblocks' from=$ALL_BLOCKS}

                            <tr id="block_tr_seq_{$smarty.foreach.foreachblocks.iteration}">
                                {assign var=BLOCK_SEQ value=$smarty.foreach.foreachblocks.iteration}
                                <td class="fieldLabel medium" style="width: 20%;"> 
                                    <label class="muted pull-right marginRight10px">{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}</label>
                                    <input type="hidden" name="block_visibility_{$BLOCK_SEQ}" value="{$BLOCK_LABEL}">
                                </td>
                                <td style="width: 20%" data-fieldname="{$BLOCK_ID}">
                                    <select class="chzn-select span3" name="block_select_visibility_{$BLOCK_SEQ}" id="visibility_{$BLOCK_SEQ}">
                                        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                                        {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                            <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $BLOCK_VISIBLE_TYPE}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                        {/foreach}
                                    </select>
                                </td>
                                <td style='width:2%;vertical-align: middle;'>
                                    <a href='javascript:;'><i class="icon-trash trashBlock" data-type="block" data-seq='{$BLOCK_SEQ}'></i></a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row-fluid">       
            <div class="span8 btn-toolbar">
                <button class="btn addButton addBlock"><i class="icon-plus"></i>&nbsp;<strong>{vtranslate('LBL_ADD_BLOCK', $QUALIFIED_MODULE)}</strong></button>
            </div>
        </div>
    </div>
</div>
<br>
{if $FIELDS_GROUPS_STRUCTURE|count > 0}
<div class="row-fluid">
    <div class="span7">
        <div class="row-fluid">
            <div class="span12">
                <table id='fieldsGroupsTable' class="table table-bordered blockContainer showInlineTable equalSplit">
                    <thead>
                        <tr>
                            <th class="blockHeader" colspan="3">
                                    {vtranslate('LBL_FIELDS_GROUPS', $QUALIFIED_MODULE)}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td class="fieldLabel medium" style="width: 60%"></td>
                            <td class="fieldLabel medium" style="width: 40%" colspan='2'>{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>
                        </tr>
                        {foreach item=FG_DATA key=FG_ID name="foreachfieldsgroups" from=$ALL_FIELDS_GROUPS}
                            {assign var=FG_VISIBLE_TYPE value=$FG_DATA.visible}
                            {assign var=IS_MANDATORY value=$FG_DATA.mandatory}
                            <tr id='fields_group_tr_seq_{$smarty.foreach.foreachfieldsgroups.iteration}'>
                                <td class="fieldLabel medium" style="width: 20%;"> 
                                    <label class="muted pull-right marginRight10px">{$FIELDS_GROUPS_STRUCTURE[$FG_ID]}</label>
                                    <input type="hidden" name="fields_group_visibility_{$smarty.foreach.foreachfieldsgroups.iteration}" value="{$FG_ID}">
                                </td>
                                <td style="width: 20%" data-fieldname="{$FG_ID}">
                                            <select class="chzn-select span3" name="fields_group_select_visibility_{$smarty.foreach.foreachfieldsgroups.iteration}">
                                                <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                                                {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                                    <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $FG_VISIBLE_TYPE && $IS_MANDATORY neq "1"}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                                {/foreach}
                                                <option value='mandatory' {if $IS_MANDATORY eq "1"}selected{/if}> {vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}</option>
                                            </select>
                                </td>
                                <td style='width:2%;vertical-align: middle;'>
                                    <a href='javascript:;'><i class="icon-trash trashFieldsGroup" data-type="fields_group" data-seq='{$smarty.foreach.foreachfieldsgroups.iteration}'></i></a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row-fluid marginBottom10px">       
            <div class="span6 btn-toolbar">
                <button class="btn addButton addFieldsGroup"><i class="icon-plus"></i>&nbsp;<strong>{vtranslate('LBL_ADD_FIELDS_GROUP', $QUALIFIED_MODULE)}</strong></button>
            </div>
        </div>
    </div>
</div>
                
{/if}
