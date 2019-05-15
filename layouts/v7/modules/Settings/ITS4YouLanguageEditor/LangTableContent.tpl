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
    <tr class="listViewEntries" data-langkey="{$LANGKEY}" data-langtransl="{$LANG_KEYS[$LANGKEY]}">
        <td class="listViewEntryValue">
            {$LANGKEY}
        </td>
        <td class="listViewEntryValue" data-langtranslate="{$EN_LANG_KEYS[$LANGKEY]}">
            {$EN_LANG_KEYS[$LANGKEY]}
            {if $LANG_KEYS[$LANGKEY] eq "" && $EN_LANG_KEYS[$LANGKEY] neq ""}
                <span class="pull-right copyToTranslationInputAndSave"><i class="fa fa-arrow-right"></i></span>
            {/if}
        </td>
        {if $PREVIEW_LANG neq 'none'}
            <td class="listViewEntryValue" data-langtranslate="{$PREVIEW_LANG_KEYS['languageStrings'][$LANGKEY]}">
                {$PREVIEW_LANG_KEYS['languageStrings'][$LANGKEY]}
                {if $LANG_KEYS[$LANGKEY] eq "" && $PREVIEW_LANG_KEYS['languageStrings'][$LANGKEY] neq ""}
                    <span class="pull-right copyToTranslationInputAndSave"><i class="fa fa-arrow-right"></i></span>
                {/if}
            </td>
        {/if}
        <td class="listViewEntryValue" data-langtranslate="{$LANG_KEYS[$LANGKEY]}">
            {$LANG_KEYS[$LANGKEY]}
            {if array_key_exists($LANGKEY, $GLOBAL_LANG_KEYS) && $FOR_MODULE neq "Vtiger"}
                &nbsp;&nbsp;
                <b>
                    [{Vtiger_Language_Handler::getLanguageTranslatedString($FINALLY_PREFIX, $LANGKEY, "Vtiger")}]
                </b>&nbsp;
                <a href="#" data-toggle="tooltip" data-placement="right" title="{vtranslate("LBL_FOUND_IN_GLOBAL", $QUALIFIED_MODULE)}">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </a>
            {/if}
        </td>
        <td class="listViewEntryValue closestTdWithInput" data-langtranslate="{$LANG_KEYS[$LANGKEY]}">
            <input type="text" class="inputElement langInput" name="lang_{$LANGKEY}" id="lang_{$LANGKEY}"
                   value="{htmlspecialchars($LANG_KEYS[$LANGKEY])}">
        </td>
        <td>
            {if isset($LANG_KEYS[$LANGKEY])}
                <div class="actions textAlignCenter">&nbsp;
                    <a class="deleteRecordButton">
                        <i class="fa fa-trash alignMiddle" id="deleteLangVar" title="Delete"></i>
                    </a>
                </div>
            {/if}
        </td>
    </tr>
{/strip}