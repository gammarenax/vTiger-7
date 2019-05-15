{*
/*********************************************************************************
* The content of this file is subject to the Language Editor 4 You license.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
*}

{strip}
    <div class="modal-dialog createTransModal">
        <div class="modal-content">
            <form class="form-horizontal addNewTranslationForm" method="POST">
                {assign var=HEADER_TITLE value={vtranslate('LBL_CREATE_NEW_TRANSLATION', $QUALIFIED_MODULE)}|cat:" "|cat:$LANG_PREF}
                {include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
                <div class="modal-body {*model-body-scrollenabled*}">
                    <div class="form-group">
                        <label class="control-label fieldLabel col-sm-5">
                            {vtranslate('LBL_TYPE', $QUALIFIED_MODULE)}
                        </label>
                        <div class="controls col-sm-7">
                            <select class="select2 col-sm-9 typeSelect" id="typeSelect" name="typeSelect" style='width: 75%'>
                                {foreach item=TYPE key=KEY from=$LANG_VARIABLE_TYPE}
                                    <option value="{$KEY}">{$TYPE}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label fieldLabel col-sm-5">
                            {vtranslate('LBL_VARIABLE', $QUALIFIED_MODULE)}
                            <span class="redColor">*</span>
                        </label>
                        <div class="controls col-sm-7">
                            <input type="text" name="langVariable" id="langVariable" class="inputElement col-sm-9" value="" data-rule-required='true' style='width: 75%'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label fieldLabel col-sm-5">
                            {vtranslate('LBL_TRANSLATION', $QUALIFIED_MODULE)}
                            <span class="redColor">*</span>
                        </label>
                        <div class="controls col-sm-7">
                            <input type="text" name="langTranslation" id="langTranslation" class="inputElement col-sm-9" value="" data-rule-required='true' style='width: 75%'>
                        </div>
                    </div>
                </div>
                {include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
            </form>
        </div>
    </div>
{/strip}