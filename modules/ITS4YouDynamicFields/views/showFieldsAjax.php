<?php
/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * *******************************************************************************/

class ITS4YouDynamicFields_showFieldsAjax_View extends Vtiger_IndexAjax_View {

    function checkPermission(Vtiger_Request $request) {

        $moduleName = $request->get("its4you_for_module");
        $recordId = $request->get("its4you_for_record");

        $recordPermission = Users_Privileges_Model::isPermitted($moduleName, 'EditView', $recordId);
        if(!$recordPermission) {
            throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
        }

        if ($recordId) {
            $recordEntityName = getSalesEntityType($recordId);
            if ($recordEntityName !== $moduleName) {
                throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
            }
        }
        return true;
    }


	public function process(Vtiger_Request $request) {
            
        $moduleName = $request->getModule();

        $showFields = $request->get('show_fields');
        $showManFields = $request->get('showmanfields');
        $hideManFields = $request->get('hidemanfields');

		$forModuleName = $request->get("its4you_for_module");
        $forViewType = $request->get("its4you_for_view");
        $forRecord = $request->get("its4you_for_record");
        $recordExists = false;

        if ($forViewType != "Edit" && !empty($forRecord)) {
            if ($forModuleName == "Users") {
                $recordModel = Users_Record_Model::getInstanceById($forRecord, 'Users');
            } else {
                $recordModel = Vtiger_Record_Model::getInstanceById($forRecord, $forModuleName);
            }
            $recordExists = true;

        } else {
            $recordModel = Vtiger_Record_Model::getCleanInstance($forModuleName);
        }

		$moduleModel = $recordModel->getModule();
		
		$fieldList = $moduleModel->getFields();
		$requestFieldList = array_intersect_key($request->getAll(), $fieldList);

		foreach($requestFieldList as $fieldName => $fieldValue){
			$fieldModel = $fieldList[$fieldName];
			if($fieldModel->isEditable()) {
				$recordModel->set($fieldName, $fieldModel->getDBInsertValue($fieldValue));
			}
		}
		$recordStructureInstance = new ITS4YouDynamicFields_showFieldsRecordStructure_Model();

        if ($recordExists) {
            $recordStructureInstance->setRecord($recordModel);
        }

        $recordStructureInstance->setFields($showFields,$showManFields,$hideManFields);
        $RecordStructure = $recordStructureInstance->getStructure($moduleModel);

        if (count($RecordStructure) > 0) {
            $picklistDependencyDatasource = Vtiger_DependencyPicklist::getPicklistDependencyDatasource($forModuleName);

            $viewer = $this->getViewer($request);
            $viewer->assign('PICKIST_DEPENDENCY_DATASOURCE',Zend_Json::encode($picklistDependencyDatasource));
            $viewer->assign('CURRENTDATE', date('Y-n-j'));
            $viewer->assign('MODULE', $forModuleName);
            $viewer->assign('SOURCE_MODULE', $moduleName);
            $viewer->assign('SINGLE_MODULE', 'SINGLE_'.$forModuleName);
            $viewer->assign('MODULE_MODEL', $moduleModel);
            $viewer->assign('RECORD_STRUCTURE_MODEL', $recordStructureInstance);
            $viewer->assign('RECORD_STRUCTURE', $RecordStructure);
            $viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());

            $viewer->assign('SCRIPTS', $this->getHeaderScripts($request));

            $viewer->assign('MAX_UPLOAD_LIMIT_MB', Vtiger_Util_Helper::getMaxUploadSize());
            $viewer->assign('MAX_UPLOAD_LIMIT', vglobal('upload_maxsize'));
            echo $viewer->view('QuickEditable.tpl',$moduleName,true);
        }
	}
	
	public function getHeaderScripts(Vtiger_Request $request) {
		
		$moduleName = $request->getModule();
		
		$jsFileNames = array(
		);

		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		return $jsScriptInstances;
	}
}