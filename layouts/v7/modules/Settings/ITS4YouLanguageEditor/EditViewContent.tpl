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
    <input type="hidden" name="for_module_name" id="for_module_name" value="{$FOR_MODULE}">
    <input type="hidden" name="finally_prefix" id="finally_prefix" value="{$FINALLY_PREFIX}">
    {if $NONE_MODULE neq 'none'}
        {if $FILE_WRITEABLE eq 'false' || $FILE_EXIST eq "dontExist"}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textAlignCenter">
                        <span class="lead">
                            {if $FILEDIR_WRITEABLE eq "false"}
                                {vtranslate('LBL_DIR_NOT_WRITABLE', $QUALIFIED_MODULE)}
                            {else}
                                {vtranslate('LBL_NO_FILE', $QUALIFIED_MODULE)}
                            {/if}
                        </span>&nbsp;
                </div>
            </div>
        {else}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textAlignLeft">
                    <button class="btn addButton addNewTranslation">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;
                        <strong>{vtranslate('LBL_ADD_NEW_TRANSLATION', $QUALIFIED_MODULE)}</strong>
                    </button>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-nobordered table-condensed">
                        <thead>
                        <tr>
                            {if $PREVIEW_LANG neq 'none'}
                                {assign var=WIDTH value="col-sm-3"}
                            {else}
                                {assign var=WIDTH value="col-sm-4"}
                            {/if}
                            <th class="col-sm-2">
                                <label><b>{vtranslate('LBL_LANG_VAR', $QUALIFIED_MODULE)}</b></label></th>
                            <th class="col-sm-2">
                                <label><b>{vtranslate('LBL_EN_LANG', $QUALIFIED_MODULE)}</b></label></th>
                            {if $PREVIEW_LANG neq 'none'}
                                <th class="col-sm-2"><label><b>{vtranslate('LBL_PREVIEW_LANG', $QUALIFIED_MODULE)}
                                            ({$PREVIEW_LANG_PREF}
                                            )</b></label></th>
                            {/if}
                            <th class="col-sm-2"><label><b>{vtranslate('LBL_CURRENT_TRANSL', $QUALIFIED_MODULE)} ({$LANG_PREF})</b></label></th>
                            <th class="{$WIDTH}"><label><b>{vtranslate('LBL_NEW_TRANSL', $QUALIFIED_MODULE)}
                                        ({$LANG_PREF})</b></label></th>
                            <th class="col-sm-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {if empty($SEARCH_ARRAYS)}
                            {if $SEARCH_VALUE eq ""}
                                {if $MODE eq "missingTranslation" && empty($LANG_KEYS) and empty($JS_LANG_KEYS)}
                                    <tr></tr>
                                    <tr class="listViewEntries">
                                        <td class="listViewEntryValue textAlignCenter" colspan="6">
                                            <span class="lead">{vtranslate('LBL_NO_TRANSLATIONS', $QUALIFIED_MODULE)}</span>
                                        </td>
                                    </tr>
                                {else}
                                    {if $MODE eq "missingTranslation"}
                                        {assign var="ALL_LANG_KEYS" value=$LANG_KEYS}
                                        {assign var="ALL_JSLANG_KEYS" value=$JS_LANG_KEYS}
                                    {/if}
                                    {foreach item=TRANSLATE key=LANGKEY from=$ALL_LANG_KEYS}
                                        {include file="LangTableContent.tpl"|vtemplate_path:$QUALIFIED_MODULE}
                                    {/foreach}
                                    {foreach item=JSTRANSLATE key=JSLANGKEY from=$ALL_JSLANG_KEYS}
                                        {include file="JsLangTableContent.tpl"|vtemplate_path:$QUALIFIED_MODULE}
                                    {/foreach}
                                {/if}
                            {else}
                                <tr></tr>
                                <tr class="listViewEntries">
                                    <td class="listViewEntryValue textAlignCenter" colspan="6">
                                        <span class="lead">{vtranslate('LBL_NO_SEARCH_TRANSLATIONS', $QUALIFIED_MODULE)}</span>
                                    </td>
                                </tr>
                            {/if}
                        {else}
                            {foreach item=TRANSLATE key=LANGKEY from=$SEARCH_ARRAYS['languageStrings']}
                                {include file="LangTableContent.tpl"|vtemplate_path:$QUALIFIED_MODULE}
                            {/foreach}
                            {foreach item=JSTRANSLATE key=JSLANGKEY from=$SEARCH_ARRAYS['jsLanguageStrings']}
                                {include file="JsLangTableContent.tpl"|vtemplate_path:$QUALIFIED_MODULE}
                            {/foreach}
                        {/if}
                        </tbody>
                    </table>
                </div>
            </div>
        {/if}
    {else}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textAlignCenter">
                <span class="lead">{vtranslate('LBL_NO_MODULE_SELECTED', $QUALIFIED_MODULE)}</span>&nbsp;
            </div>
        </div>
    {/if}
    {* for div with id=listViewContents *}
    </div>
    {* for div with class=container-fluid *}
    </div>
{/strip}