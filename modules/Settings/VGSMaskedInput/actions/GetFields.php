<?php

class Settings_VGSMaskedInput_GetFields_Action extends Settings_Vtiger_Index_Action {
    public function process(Vtiger_Request $request) {
        $tabId = $request->get('tabid');
        $arr = $this->getModuleFields($tabId);
        
        $response = new Vtiger_Response();
        $response->setResult($arr);
        $response->emit();
    }
    
    private function getModuleFields($tabId) {
        $adb = PearDatabase::getInstance();
        $result = $adb->pquery("select fieldid, fieldlabel from vtiger_field where uitype in (1,2,11,19) "
                . " and typeofdata like 'V~%' and tabid=? "
                . " and fieldid not in (select fieldid from vtiger_vgsmaskedinput)", array($tabId));
        $moduleName = getTabname($tabId);
        
        $count = $adb->num_rows($result);
        
        $arr = array();
        for($i=0; $i<$count; $i++) {
            $fieldLabel = $adb->query_result($result, $i, 'fieldlabel');
            $arr[$adb->query_result($result, $i, 'fieldid')] = vtranslate($fieldLabel, $moduleName);
        }
        return $arr;
    }

    public function validateRequest(Vtiger_Request $request) {
        $request->validateWriteAccess();
    }
}
