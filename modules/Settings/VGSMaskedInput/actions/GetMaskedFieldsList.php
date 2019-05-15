<?php

class Settings_VGSMaskedInput_GetMaskedFieldsList_Action extends Settings_Vtiger_Index_Action {
    public function process(Vtiger_Request $request) {
        $moduleName = $request->get('sourceModule');
        $tabId = getTabid($moduleName);
        
        $arr = $this->getMaskedFields($tabId);
        
        $response = new Vtiger_Response();
        $response->setResult($arr);
        $response->emit();
    }
    
    private function getMaskedFields($tabId) {
        $adb = PearDatabase::getInstance();
        $result = $adb->pquery("select fieldname, maskinfo from vtiger_field 
                     inner join vtiger_vgsmaskedinput 
                     on vtiger_field.fieldid=vtiger_vgsmaskedinput.fieldid 
                     where vtiger_vgsmaskedinput.tabid=?", array($tabId));
        $count = $adb->num_rows($result);
        
        $arr = array();
        for($i=0; $i<$count; $i++) {
            $fieldname = $adb->query_result($result, $i, 'fieldname');
            $arr[$fieldname] = $adb->query_result($result, $i, 'maskinfo');
        }
        return $arr;
    }

    public function validateRequest(Vtiger_Request $request) {
        $request->validateWriteAccess();
    }
}
