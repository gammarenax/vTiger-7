<?php
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_Edit_View extends Settings_Vtiger_Index_View {

    public $ModuleRecords = array();
    public $recordId = '';
    public $FollowsUpOptions = array();

    public $selectedModuleName = '';


    public function preProcess(Vtiger_Request $request) {
        parent::preProcess($request);
        $viewer = $this->getViewer($request);


        $recordId = $request->get('record');
        $viewer->assign('RECORDID', $recordId);

        if (in_array($request->getMode(),array("FieldsLayout","FieldsGroup","DefaultForm"))) {
            $mode = $request->getMode();
        }

        if($recordId) {
            $recordModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId);
            $isgroup = $recordModel->get('isgroup');

            if ($isgroup == "1") {
                $mode = "FieldsGroup";
            } elseif ($isgroup == "2") {
                $mode = "DefaultForm";
            } else {
                $mode = "FieldsLayout";
            }

        } else {

            if ($mode == "DefaultForm" && $request->has('sourceModule') && !$request->isEmpty('sourceModule')) {

                $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getDefaulFieldsInstance($request->get('sourceModule'));
                $selectedModule = $ITS4YouDynamicFieldsRecordModel->getModule();
                $selectedModuleName = $selectedModule->getName();
                $viewer->assign('SOURCE_MODULE', $selectedModuleName);

            } else {
                $recordModel = Settings_ITS4YouDynamicFields_Record_Model::getCleanInstance();
            }

            if ($request->has('parentId') && !$request->isEmpty('parentId')) {
                $mode = "FieldsLayout";
            }
        }
        $viewer->assign('RECORD_MODEL', $recordModel);
        $viewer->assign('RECORD_MODE', $request->getMode());

        $viewer->assign('MODE', $mode);

        $viewer->view('EditHeader.tpl', $request->getModule(false));
    }


/*
    public function preProcess(Vtiger_Request $request) {
        parent::preProcess($request);
        $viewer = $this->getViewer($request);
        $mode = $request->getMode();
        $recordId = $request->get('record');

        $viewer->assign('RECORDID', $recordId);

        if($recordId) {
            $dynamicFieldsModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId);
            $viewer->assign('DYNAMICFIELDS_RECORD_MODEL', $dynamicFieldsModel);
        }
        $viewer->assign('RECORD_MODE', $request->getMode());
        
        if ($mode == "editfields") {
            $load_step = "2";
        } else {
            $load_step = "1";
        }
                
        $viewer->assign('LOAD_STEP', $load_step);
        $viewer->view('EditHeader.tpl', $request->getModule(false));
    }
    */
    /*
    public function postProcess (Vtiger_Request $request) {
            echo "</div>";
            parent::postProcess($request);
    }*/


    public function process(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);
        $moduleName = $request->getModule();
        $qualifiedModuleName = $request->getModule(false);

        $mode = $request->getMode();
        $selectedModuleName = $parentmodule = $parentid = $edit_type = "";

        $All_Blocks = array();

        $load = $show_steps = false;

        if ($request->has('record') && !$request->isEmpty('record')) {
            $recordId = $request->get('record');
            $this->recordId = $recordId;
            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId);

            $selectedModule = $ITS4YouDynamicFieldsRecordModel->getModule();
            $selectedModuleName = $selectedModule->getName();
            $ITS4YouDynamicFieldsRecordModel->loadFields();

            $show_popup = $ITS4YouDynamicFieldsRecordModel->get('show_popup');
            $step = "2";

            $description = $ITS4YouDynamicFieldsRecordModel->get('description');

            $isgroup = $ITS4YouDynamicFieldsRecordModel->get('isgroup');

            if ($isgroup == "1") {
                $mode = "FieldsGroup";
            } else {
                $mode = "FieldsLayout";
            }

            $load = true;

        } elseif ($mode == "DefaultForm" && $request->has('sourceModule') && !$request->isEmpty('sourceModule')) {

            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getDefaulFieldsInstance($request->get('sourceModule'));
            $selectedModule = $ITS4YouDynamicFieldsRecordModel->getModule();
            $selectedModuleName = $selectedModule->getName();

            $step = "2";

            $load = true;

        } else {

            $show_steps = true;

            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getCleanInstance($moduleName);

            if ($request->has('parentid')) {
                $parentid = $request->get('parentid');
            }


            $step = "1";
            $show_popup = "0";

            if ($request->has('parentmodule') && !$request->isEmpty('parentmodule')) {
                $selectedModuleName = $parentmodule = $request->get('parentmodule');
            } elseif ($request->has('module_name') && !$request->isEmpty('module_name')) {
                $selectedModuleName = $request->get('module_name');
            }

            if (!empty($selectedModuleName)) {
                if (getTabId($selectedModuleName) && vtlib_isModuleActive($selectedModuleName)) {

                    $selectedModule = Vtiger_Module_Model::getInstance($selectedModuleName);

                    if ($request->has('description') && !$request->isEmpty('description')) {
                        $description = $request->get('description');
                        $step = "2";
                    }

                    if ($request->has('show_popup') && !$request->isEmpty('show_popup')) {
                        $show_popup = $request->has('show_popup');
                    }
                } else {
                    if (!empty($parentmodule)) {
                        $parentmodule = $parentid = "";
                    }
                }
            }
        }
        $this->selectedModuleName = $selectedModuleName;
        if ($mode != "FieldsLayout") $edit_type = "individual";

        if ($step == "2") {
            $recordStructureInstance = Vtiger_RecordStructure_Model::getInstanceForModule($selectedModule);
            $recordStructure = $recordStructureInstance->getStructure();

            if ($load) {
                $ITS4YouDynamicFieldsRecordModel->loadFields();
                $All_Blocks = $ITS4YouDynamicFieldsRecordModel->getAllBlocks();
            }

            $dynamicFieldsModel = new Settings_ITS4YouDynamicFields_Module_Model();
            $viewer->assign('DYNAMICFIELDS_MODEL', $dynamicFieldsModel);
            $viewer->assign('RECORD_STRUCTURE', $recordStructure);
            $viewer->assign('SELECTED_MODULE_NAME', $selectedModuleName);
            $viewer->assign('SOURCE_MODULE', $selectedModuleName);
            $viewer->assign('DESCRIPTION', $description);

            $viewer->assign('QUALIFIED_MODULE', $qualifiedModuleName);

            $All_Fields = $ITS4YouDynamicFieldsRecordModel->getAllFields();
            $moduleModel = Vtiger_Module_Model::getInstance($selectedModuleName);

            $All_Model_Fields = array();

            foreach ($All_Fields AS $field_name) {
                $All_Model_Fields[$field_name] = Vtiger_Field_Model::getInstance($field_name, $moduleModel);
            }

            $viewer->assign('ALL_FIELDS', $All_Model_Fields);
            $viewer->assign('ALL_BLOCKS', $All_Blocks);

            if ($mode == "FieldsLayout") {
                $All_Fields_Groups = $ITS4YouDynamicFieldsRecordModel->getAllFieldsGroups();
                $viewer->assign('ALL_FIELDS_GROUPS', $All_Fields_Groups);
            }
            $viewer->assign('EDITTYPE', $edit_type);
            $Fields_Groups = $this->getFieldsGroupsList();
            $viewer->assign('FIELDS_GROUPS_STRUCTURE', $Fields_Groups);

        } else {
            $viewer->assign('ALL_MODULES', Vtiger_Module_Model::getEntityModules());
        }

        $viewer->assign('DYNAMICFIELDS_RECORD_MODEL', $ITS4YouDynamicFieldsRecordModel);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedModuleName);
        $viewer->assign('ACTUAL_STEP', $step);
        $viewer->assign('MODULE', $moduleName);
        $viewer->assign("RECORDID", $recordId);
        $viewer->assign('SHOW_POPUP', $show_popup);
        $viewer->assign('MODE', $mode);
        $viewer->assign('SHOW_STEPS', ($show_steps?"yes":"no"));
        $viewer->assign("PARENT_ID", $parentid);
        $viewer->assign('PARENT_MODULE', $parentmodule);
        $viewer->assign("IS_INVENTORY_MODULE", $this->isInventoryModule());

        $viewer->view('Step'.$step.'.tpl', $qualifiedModuleName);
    }

    function FieldsLayoutStep2(Vtiger_Request $request) {
        $edit_type = "all";
        $viewer = $this->getViewer($request);
        $moduleName = $request->getModule();
        $qualifiedModuleName = $request->getModule(false);

        $recordId = $request->get('record');

        if ($recordId) {
            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId,true);
            $selectedModule = $ITS4YouDynamicFieldsRecordModel->getModule();
            $selectedModuleName = $selectedModule->getName();
            $ITS4YouDynamicFieldsRecordModel->loadFields();
        } else {        
            $selectedModuleName = $request->get('module_name');
            $selectedModule = Vtiger_Module_Model::getInstance($selectedModuleName);
            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getCleanInstance($selectedModuleName);
        }

        $this->selectedModuleName = $selectedModuleName;

        $recordStructureInstance = Vtiger_RecordStructure_Model::getInstanceForModule($selectedModule);
        $recordStructure = $recordStructureInstance->getStructure();
        
        $dynamicFieldsModel = new Settings_ITS4YouDynamicFields_Module_Model();
        $viewer->assign('DYNAMICFIELDS_MODEL', $dynamicFieldsModel);
        $viewer->assign('RECORD_STRUCTURE', $recordStructure);
        $viewer->assign('SELECTED_MODULE_NAME', $selectedModuleName);
        $viewer->assign('SOURCE_MODULE',$selectedModuleName);
        $viewer->assign('RECORD',$recordId);
        $viewer->assign('MODULE', $moduleName);
        $viewer->assign('DYNAMICFIELDS_RECORD_MODEL',$ITS4YouDynamicFieldsRecordModel);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedModuleName);
        $viewer->assign('ACTUAL_STEP', "2");
        
        $All_Fields = $ITS4YouDynamicFieldsRecordModel->getAllFields();
        $moduleModel = Vtiger_Module_Model::getInstance($selectedModuleName);

        $All_Model_Fields = array();

        foreach ($All_Fields AS $field_name) {
            $All_Model_Fields[$field_name] = Vtiger_Field_Model::getInstance($field_name,$moduleModel);
        }

        $viewer->assign('ALL_FIELDS', $All_Model_Fields);

        $All_Blocks = $ITS4YouDynamicFieldsRecordModel->getAllBlocks();
        $viewer->assign('ALL_BLOCKS', $All_Blocks);

        $viewer->assign('EDITTYPE', $edit_type);

        $Fields_Groups = $this->getFieldsGroupsList();
        $viewer->assign('FIELDS_GROUPS_STRUCTURE', $Fields_Groups);


        $All_Fields_Groups = $ITS4YouDynamicFieldsRecordModel->getAllFieldsGroups();
        $viewer->assign('ALL_FIELDS_GROUPS', $All_Fields_Groups);
        
        $mode = $request->getMode();
        $viewer->assign('MODE', $mode);

        $viewer->assign("IS_INVENTORY_MODULE", $this->isInventoryModule());

        $viewer->view('Step2.tpl', $qualifiedModuleName);
    }

    public function getFieldsGroupsList() {
        $adb = PearDatabase::getInstance();
        
        $Data = array();
        $sql = "SELECT dfid, description FROM its4you_dynamicfields WHERE deleted = 0 AND module = ? AND isgroup = '1'";
        
        $result = $adb->pquery($sql,array($this->selectedModuleName));
        while($row = $adb->fetchByAssoc($result)) {
                $Data[$row['dfid']] = $row['description'];
        }
        
        return $Data;
    }
    
    public function getFollowsUpOptions() {
        return $this->FollowsUpOptions; 
    }
    
    public function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $jsFileNames = array(
            "modules.Settings.$moduleName.resources.Edit",
            "modules.Settings.$moduleName.resources.Edit1",
            "modules.Settings.$moduleName.resources.Edit2",
            "modules.Settings.$moduleName.resources.AdvanceFilter",
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }

    public function isInventoryModule(){
        $is_inventory_module = "no";
        $class_name = $this->selectedModuleName."_Module_Model";

        if (class_exists($class_name)) {
            if (is_subclass_of($class_name, 'Inventory_Module_Model')) {
                $is_inventory_module = "yes";
            }
        }

        return $is_inventory_module;
    }
}
