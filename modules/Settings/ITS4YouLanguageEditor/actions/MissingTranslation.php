<?php

/* * *******************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 *  ******************************************************************************* */

class Settings_ITS4YouLanguageEditor_MissingTranslation_Action extends Settings_Vtiger_Index_Action {

    public function process(Vtiger_Request $request) {
        parent::process($request);

        $langPrefix = $request->get('langPrefix');
        
        $params = array();
        $params['langPrefix'] = $langPrefix;
        $params['previewLangPrefix'] = $previewLang;
        $params['enPrefix'] = $enPrefix;
        $params['forModule'] = $module;
        
        $Differences = $moduleModel->getMissingTranslations($params);

        $viewer->assign('LANG_DIFF', $Differences['languageStrings']);
        $viewer->assign('JS_LANG_DIFF', $Differences['jsLanguageStrings']);

        if ($searchvalue != "") {
            $SearchArrays = $moduleModel->getLangVariablesBySearchValue($langPrefix, $previewLang, $enPrefix, $module, $searchvalue, "yes");

            $viewer->assign('SEARCH_VALUE', $searchvalue);
            $viewer->assign('SEARCH_ARRAYS', $SearchArrays);
        }
}

}
