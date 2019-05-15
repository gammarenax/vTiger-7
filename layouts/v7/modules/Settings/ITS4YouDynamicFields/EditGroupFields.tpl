{*<!--
/*********************************************************************************
* The content of this file is subject to the Dynamic Fields 4 You.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
-->*}
<div class='hide'>
<input type='hidden' value='1' name='isgroup'>
<input type='text' value='{$ALL_FIELDS|count}' id='new_fields' name='new_fields'>
<input type='text' value='{$ALL_BLOCKS|count}' id='new_blocks' name='new_blocks'>
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
<select class="chzn-select span5" id='block_options'>
    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
    {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE}
        
        <option value="{$BLOCK_LABEL}">{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}</option>
    {/foreach}
</select>
</div>

<div class="row-fluid">
<div class="span12">
    <div class="span8">
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
                            <td class="fieldLabel medium" style="width: 90%"></td>
                            <td class="fieldLabel medium" style="width: 10%">{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>


                        </tr>
                        {foreach item=FIELD_MODEL key=FIELD_NAME name="foreachfields" from=$ALL_FIELDS}

                            {assign var=IS_MANDATORY value=$DYNAMICFIELDS_RECORD_MODEL->isMandatory($FIELD_NAME)}
                            <tr id='field_tr_seq_{$smarty.foreach.foreachfields.iteration}'>
                                {assign var=VISIBLE_TYPE value=$DYNAMICFIELDS_RECORD_MODEL->getVisibility($FIELD_NAME)}
                                <td class="fieldLabel medium" style="width: 20%;"> 
                                    <label class="muted pull-right marginRight10px">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</label>
                                    <input type="hidden" name="field_visibility_{$smarty.foreach.foreachfields.iteration}" value="{$FIELD_NAME}">
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
    </div>
    <div class="span8">
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
                            <td class="fieldLabel medium" style="width: 90%"></td>
                            <td class="fieldLabel medium" style="width: 10%">{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>
                        </tr>
                        {foreach item=BLOCK_VISIBLE_TYPE key=BLOCK_LABEL name='foreachblocks' from=$ALL_BLOCKS}

                            <tr id="block_tr_seq_{$smarty.foreach.foreachblocks.iteration}">
                                {assign var=BLOCK_SEQ value=$smarty.foreach.foreachblocks.iteration}
                                <td class="fieldLabel medium" style="width: 20%;"> 
                                    <label class="muted pull-right marginRight10px">{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}</label>
                                    <input type="hidden" name="block_visibility_{$BLOCK_SEQ}" value="{$BLOCK_LABEL}">
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
</div>
<br>