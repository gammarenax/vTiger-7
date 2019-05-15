<?php

class Settings_VGSMaskedInput_SaveAjax_Action extends Settings_Vtiger_Index_Action {
	public function process(Vtiger_Request $request) {
		$recordId = $request->get('fieldName');
		$qualifiedModuleName = $request->getModule(false);

        $recordModel = Settings_VGSMaskedInput_Record_Model::getCleanInstance($qualifiedModuleName);
        
		$response = new Vtiger_Response();
		try {
			$recordModel->save($request);
			$response->setResult(array(vtranslate('LBL_SAVED_SUCCESSFULLY', $qualifiedModuleName)));
		} catch (Exception $e) {
			$response->setError($e->getMessage());
		}
		$response->emit();
	}
        
    public function validateRequest(Vtiger_Request $request) { 
        $request->validateWriteAccess(); 
    }
}