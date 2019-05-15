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
    <tr class="listViewEntries" data-jslangkey="{$JSLANGKEY}" data-langtransl="{$JSLANGKEY[$JSLANGKEY]}">
        <td class="listViewEntryValue">
            {$JSLANGKEY}

        </td>
        <td class="listViewEntryValue" data-jslangtranslate="{$EN_JSLANG_KEYS[$JSLANGKEY]}">
            {$EN_JSLANG_KEYS[$JSLANGKEY]}
            {if $JS_LANG_KEYS[$JSLANGKEY] eq "" && $EN_JSLANG_KEYS[$JSLANGKEY] neq ""}
                <span class="pull-right copyToTranslationInputAndSave jsLang"><i class="fa fa-arrow-right"></i></span>
            {/if}
        </td>
        {if $PREVIEW_LANG neq 'none'}
            <td class="listViewEntryValue" data-jslangtranslate="{$PREVIEW_LANG_KEYS['jsLanguageStrings'][$JSLANGKEY]}">
                {$PREVIEW_LANG_KEYS['jsLanguageStrings'][$JSLANGKEY]}
                {if $JS_LANG_KEYS[$JSLANGKEY] eq "" && $PREVIEW_LANG_KEYS['jsLanguageStrings'][$JSLANGKEY] neq ""}
                    <span class="pull-right copyToTranslationInputAndSave jsLang"><i class="fa fa-arrow-right"></i></span>
                {/if}
            </td>
        {/if}
        <td class="listViewEntryValue" data-jslangtranslate="{$JS_LANG_KEYS[$JSLANGKEY]}">
            {$JS_LANG_KEYS[$JSLANGKEY]}
            {if array_key_exists($JSLANGKEY, $GLOBAL_JSLANG_KEYS) && $FOR_MODULE neq "Vtiger"}
                &nbsp;&nbsp;
                <b>
                    [{Vtiger_Language_Handler::getJSTranslatedString($FINALLY_PREFIX, $JSLANGKEY, "Vtiger")}]
                </b>&nbsp;
                <a href="#" data-toggle="tooltip" data-placement="right" title="{vtranslate("LBL_FOUND_IN_GLOBAL", $QUALIFIED_MODULE)}">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </a>
            {/if}
        </td>
        <td class="listViewEntryValue closestTdWithInput">
            <input type="text" class="inputElement jsLangInput" name="jslang_{$JSLANGKEY}" id="jslang_{$JSLANGKEY}" value="{htmlspecialchars($JS_LANG_KEYS[$JSLANGKEY])}">
        </td>
        <td>
            {if isset($JS_LANG_KEYS[$JSLANGKEY])}
                <div class="actions textAlignCenter">&nbsp;
                    <a class="deleteRecordButton">
                        <i class="fa fa-trash alignMiddle" id="deleteLangVar" title="Delete"></i>
                    </a>
                </div>
            {/if}
        </td>
    </tr>
{/strip}