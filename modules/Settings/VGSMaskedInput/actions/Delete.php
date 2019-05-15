<?php

class Settings_VGSMaskedInput_Delete_Action extends Settings_Vtiger_Index_Action {
    public function process(Vtiger_Request $request) {
        $recordId = $request->get('record');
        $qualifiedModuleName = $request->getModule(false);

        $response = new Vtiger_Response();
        if ($recordId) {
            $status = Settings_VGSMaskedInput_Module_Model::deleteRecord(array($recordId));
            if ($status) {
                $response->setResult(array(vtranslate('LBL_DELETED_SUCCESSFULLY'), $qualifiedModuleName));
            } else {
                $response->setError(vtranslate('LBL_DELETE_FAILED', $qualifiedModuleName));
            }
        } else {
            $response->setError(vtranslate('LBL_INVALID_RECORD', $qualifiedModuleName));
        }
        $response->emit();
    }

    public function validateRequest(Vtiger_Request $request) {
        $request->validateWriteAccess();
    }
}
