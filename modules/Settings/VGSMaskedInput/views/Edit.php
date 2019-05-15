<?php

class Settings_VGSMaskedInput_Edit_View extends Settings_Vtiger_IndexAjax_View {
	public function process(Vtiger_Request $request) {
		$recordId = $request->get('record');
		$qualifiedModuleName = $request->getModule(false);

		if ($recordId) {
            $recordModel = Settings_VGSMaskedInput_Record_Model::getInstanceById($recordId, $qualifiedModuleName);
		} else {
            $recordModel = Settings_VGSMaskedInput_Record_Model::getCleanInstance($qualifiedModuleName);
        }

		$viewer = $this->getViewer($request);
        
        $viewer->assign('MODULES', $this->getModules());
		$viewer->assign('RECORD_MODEL', $recordModel);
		$viewer->assign('QUALIFIED_MODULE_NAME', $qualifiedModuleName);

		$viewer->view('EditView.tpl', $qualifiedModuleName);
	}
    public function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $jsFileNames = array(
            "layouts.v7.modules.$moduleName.resources.Edit",
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }
    
    function getModules() {
        $adb = PearDatabase::getInstance();
        $result = $adb->query("select tabid, tablabel from vtiger_tab where isentitytype=1");
        $count = $adb->num_rows($result);
        
        $arr = array();
        for($i=0; $i<$count; $i++) {
            $arr[$adb->query_result($result, $i, 'tabid')] = $adb->query_result($result, $i, 'tablabel');
        }
        return $arr;
    }
}