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
    <div class="modal-dialog createLanguageModal">
        <div class="modal-content">
            <form class="form-horizontal newLanguageForm" id="newLanguageForm" name="newLanguageForm" method="post">
                {assign var=HEADER_TITLE value={vtranslate('LBL_CREATE_NEW_LANGUAGE', $QUALIFIED_MODULE)}|cat:" "|cat:$LANG_PREF}
                {include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
                <div class="modal-body {*model-body-scrollenabled*}">
                    <div class="form-group">
                        <label class="control-label fieldLabel col-sm-5">
                            {vtranslate('LBL_LANGUAGE', $QUALIFIED_MODULE)}
                            <span class="redColor">*</span>
                        </label>
                        <div class="controls col-sm-7">
                            <input type="text" class='inputElement col-sm-9' maxlength="50" name="newLanguage" id="newLanguage" value="" data-rule-required='true' style='width: 75%' />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label fieldLabel col-sm-5">
                            {vtranslate('LBL_NAME', $QUALIFIED_MODULE)}
                            <span class="redColor">*</span>
                        </label>
                        <div class="controls col-sm-7">
                            <input type="text" class='inputElement col-sm-9' maxlength="30" name="langName" id="langName" value="" data-rule-required='true' style='width: 75%' />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label fieldLabel col-sm-5">
                            {vtranslate('LBL_CODE', $QUALIFIED_MODULE)}
                            <span class="redColor">*</span>
                        </label>
                        <div class="controls col-sm-7">
                            <input type="text" class='inputElement col-sm-9' maxlength="10" name="langCode" id="langCode" value="" data-rule-required='true' style='width: 75%' />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label fieldLabel col-sm-5">
                            {vtranslate('LBL_SOURCE_LANG', $QUALIFIED_MODULE)}
                            <span class="redColor">*</span>
                        </label>
                        <div class="controls col-sm-7">
                            <select class="select2 col-sm-9" id="selectCopyLang" name="selectCopyLang">
                                {foreach item=LANG_INFO key=KEY from=$LANGUAGES}
                                    <option value="{$LANG_INFO['prefix']}">{$LANG_INFO['label']}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
                {include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
            </form>
        </div>
    </div>
{/strip}