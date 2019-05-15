<?php

/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_EditGroup_View extends Settings_Vtiger_Index_View {

    public $ModuleRecords = array();
    public $recordId = '';
    
    public function process(Vtiger_Request $request) {
        $mode = $request->getMode();
        if ($mode) {            
            if ($mode == "editfields") {    
                $this->step2($request);                
            } else {
                $this->$mode($request);
            }
        } else {
            $this->step1($request);
        }
    }

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
    
    
    public function postProcess (Vtiger_Request $request) {
            echo "</div>";
            parent::postProcess($request);
    }
    
    public function step1(Vtiger_Request $request, $hide = false) {
        $viewer = $this->getViewer($request);
        $moduleName = $request->getModule();
        $qualifiedModuleName = $request->getModule(false);
        
        $recordId = $request->get('record');
        $viewer->assign("RECORDID", $recordId); 
        
        if ($recordId) {
            $this->recordId = $recordId;
            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId);
            $sourceModule = $ITS4YouDynamicFieldsRecordModel->get('module');

            $viewer->assign('SELECTED_MODULE',$sourceModule);
            if (!$follows_up) $viewer->assign('DESCRIPTION', $ITS4YouDynamicFieldsRecordModel->get('description'));

            $viewer->assign('MODULE_MODEL', $ITS4YouDynamicFieldsRecordModel->getModule());
            $viewer->assign('MODE', 'edit');
            
            $listViewModel = Settings_Vtiger_ListView_Model::getInstance($qualifiedModuleName);
            $pagingModel = new Vtiger_Paging_Model();
            $pagingModel->set('page', '1');
            $listViewModel->set('sourceModule', $sourceModule);
            $this->ModuleRecords = $listViewModel->getListViewEntries($pagingModel);

            $this->setFollowsUpOptions($ent_name);
            $FollowsUpOptions = $this->getFollowsUpOptions();

            $viewer->assign('FALLOWS_UP_OPTIONS', $FollowsUpOptions);
                
        } else {
            $ITS4YouDynamicFieldsRecordModel = Settings_ITS4YouDynamicFields_Record_Model::getCleanInstance($moduleName);
            $selectedModule = $request->get('source_module');
            if(!empty($selectedModule)) {
                $viewer->assign('SELECTED_MODULE', $selectedModule);
            }
        }
        
        $viewer->assign('DYNAMICFIELDS_RECORD_MODEL', $ITS4YouDynamicFieldsRecordModel);
        $viewer->assign('ALL_MODULES', Vtiger_Module_Model::getEntityModules());
        $viewer->assign('QUALIFIED_MODULE', $qualifiedModuleName);
        $viewer->assign('ACTUAL_STEP', "1");
        $viewer->assign('MODULE', $moduleName);
                
        $show_popup = $ITS4YouDynamicFieldsRecordModel->get('show_popup');
        $viewer->assign('SHOW_POPUP', $show_popup);
        
        if ($hide) $viewer->assign('HIDE', "yes"); 
        
        $viewer->view('GroupStep1.tpl', $qualifiedModuleName);
    }

    function Step2(Vtiger_Request $request) {
        $edit_type = "individual";
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
        
        $mode = $request->getMode();
        $viewer->assign('MODE', $mode);
        
        $viewer->view('GroupStep2.tpl', $qualifiedModuleName);
    }

    public function setFollowsUpOptions($ent_name, $sorceid = '0', $level = '0'){

        if (isset($this->ModuleRecords[$sorceid]) && count($this->ModuleRecords[$sorceid]) > 0) {
            $nbsps = str_repeat("&nbsp;",6);
            
            foreach ($this->ModuleRecords[$sorceid] AS $dfid => $DFDataModel) {
                
                if ($ent_name == "FOLLOWS_UP" || ($ent_name != "FOLLOWS_UP" && $dfid != $this->recordId)) {
                
                    $this->FollowsUpOptions[] = array("id"=> $dfid, "description"=>$DFDataModel->get('description'), "leftpadding" => str_repeat($nbsps, $level)); 
                    
                    $next_level = $level + 1;
                    
                    $this->setFollowsUpOptions($ent_name,$dfid, $next_level);
                }
            }
        }
    }
    
    public function getFollowsUpOptions() {
        return $this->FollowsUpOptions; 
    }
    
    
    public function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $jsFileNames = array(
            "modules.Settings.$moduleName.resources.EditGroup",
            "modules.Settings.$moduleName.resources.EditGroup1",
            "modules.Settings.$moduleName.resources.EditGroup2",
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }
}
