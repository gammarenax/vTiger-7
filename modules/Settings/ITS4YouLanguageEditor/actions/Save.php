<?php

/*********************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 *  ********************************************************************************/

class Settings_ITS4YouLanguageEditor_Save_Action extends Settings_Vtiger_Index_Action{
    public function process(Vtiger_Request $request) {
        parent::process($request);
        
        $key = $request->get('langKey');
        $langPrefix = $request->get('langPrefix');
        $forModuleName = $request->get('forModuleName');
        $new_string = $request->get('newString');
        $variableType = $request->get('variableType');
        
        $params = array();
        $params['keyword'] = $key;
        $params['langPrefix'] = $langPrefix;
        $params['forModule'] = $forModuleName;
        $params['newString'] = $new_string;
        $params['variableType'] = $variableType;

        $moduleModel = new Settings_ITS4YouLanguageEditor_Module_Model();
        
        $moduleModel->updateTranslation($params);
        
        $result = array('success' => true);
        $response = new Vtiger_Response();
        $response->setEmitType(Vtiger_Response::$EMIT_JSON);
        $response->setResult($result);
        $response->emit();
    }
}