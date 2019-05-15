<?php
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_Detail_View extends Settings_Vtiger_Index_View {

    public $mode = "";

	public function preProcess(Vtiger_Request $request) {
		parent::preProcess($request);
		$viewer = $this->getViewer($request);

		$recordId = $request->get('record');
		$viewer->assign('RECORDID', $recordId);
		if($recordId) {
			$recordModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId);
			$viewer->assign('WORKFLOW_MODEL', $recordModel);
		}
		$viewer->assign('RECORD_MODE', $request->getMode());

        $this->getMode($request);
        $viewer->assign('MODE', $this->mode);

		$viewer->view('DetailHeader.tpl', $request->getModule(false));
	}

	public function getHeaderScripts(Vtiger_Request $request) {
		$headerScriptInstances = parent::getHeaderScripts($request);
		$moduleName = $request->getModule();

		$jsFileNames = array(
			'modules.Settings.Vtiger.resources.Detail',
			"modules.Settings.$moduleName.resources.Detail"
		);

		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		$headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
		return $headerScriptInstances;
	}

    public function getMode(Vtiger_Request $request) {
        if (in_array($request->get('mode'), array('FieldsLayout','FieldsGroup'))) {
            $this->mode = $request->get('mode');
        } else {
            $this->mode = "";
        }
    }

    public function process(Vtiger_Request $request) {

        $currentUser = Users_Record_Model::getCurrentUserModel();
        $viewer = $this->getViewer($request);
        $moduleName = $request->getModule();
        $qualifiedModuleName = $request->getModule(false);

        $recordId = $request->get('record');
        if ($recordId) {
            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId);
            $viewer->assign('RECORDID', $recordId);

            $recordModuleModel = $ITS4YouDynamicFieldsRecordModel->getModule();

            $ITS4YouDynamicFieldsourceModuleModel = Settings_ITS4YouDynamicFields_Module_Model::getInstance();
            $viewer->assign('MODULE_MODEL', $ITS4YouDynamicFieldsourceModuleModel);

            $selectedModuleName = $recordModuleModel->getName();
            $viewer->assign('SELECTED_MODULE_NAME', $selectedModuleName);


            $this->getMode($request);
            $viewer->assign('MODE', $this->mode);

            $ITS4YouDynamicFieldsRecordModel->loadFields();

            //if ($edit_type == "individual") {
                $All_Fields = $ITS4YouDynamicFieldsRecordModel->getAllFields();


                $All_Model_Fields = array();

                foreach ($All_Fields AS $field_name) {
                    $All_Model_Fields[$field_name] = Vtiger_Field_Model::getInstance($field_name, $recordModuleModel);
                }
                $viewer->assign('ALL_FIELDS', $All_Model_Fields);

                $All_Blocks = $ITS4YouDynamicFieldsRecordModel->getAllBlocks();
                $viewer->assign('ALL_BLOCKS', $All_Blocks);

                $All_Fields_Groups = $ITS4YouDynamicFieldsRecordModel->getAllFieldsGroups();
                $viewer->assign('ALL_FIELDS_GROUPS', $All_Fields_Groups);
           // }

            $viewer->assign('PROCESSFLOW_LIST', $ITS4YouDynamicFieldsRecordModel->getProcessFlowRecords());

            $show_popup = $ITS4YouDynamicFieldsRecordModel->get('show_popup');
            $viewer->assign('SHOW_POPUP', $show_popup);
        }

        $viewer->assign('RECORD_MODEL', $ITS4YouDynamicFieldsRecordModel);
        $viewer->assign('MODULE', $moduleName);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedModuleName);
        $viewer->assign('RETURN_SOURCE_MODULE', $request->get("returnsourceModule"));
        $viewer->assign('RETURN_PAGE', $request->get("returnpage"));
        $viewer->assign('RETURN_SEARCH_VALUE',$request->get("returnsearch_value"));

        $dynamicFieldsModel = new Settings_ITS4YouDynamicFields_Module_Model();
        $viewer->assign('DYNAMICFIELDS_MODEL', $dynamicFieldsModel);
/*
        $adb = PearDatabase::getInstance();

        $listViewModel = Settings_Vtiger_ListView_Model::getInstance($qualifiedModuleName);
        $listViewHeaders = $listViewModel->getListViewHeaders();

        $listQuery = $listViewModel->getBasicListQuery();

        $listQuery .=" WHERE deleted = ? AND follows_up_id = ?";
        $listResult = $adb->pquery($listQuery, array(0,$recordId));
        $noOfRecords = $adb->num_rows($listResult);
        $listViewRecordModels = array();
        for ($i = 0; $i < $noOfRecords; ++$i) {
            $data = $adb->raw_query_result_rowdata($listResult, $i);
            $record = Settings_ITS4YouDynamicFields_Record_Model::getInstanceFromData($data);
            if ($record) {
                $listViewRecordModels[$record->getId()] = $record;
            }
        }

        $viewer->assign('LISTVIEW_HEADERS', $listViewHeaders);
        $viewer->assign('LISTVIEW_ENTRIES', $listViewRecordModels);
*/


        if ($request->get('displayMode') == 'overlay') {
            $viewer->view('OverlayDetailView.tpl', $qualifiedModuleName);
        } else {
            $viewer->view('DetailView.tpl', $qualifiedModuleName);
        }
    }
   
}