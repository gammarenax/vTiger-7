<?php
/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * *******************************************************************************/

class Settings_ITS4YouDynamicFields_ListView_Model extends Settings_Vtiger_ListView_Model {

    
    public function getListViewEntries($pagingModel) {
        $adb = PearDatabase::getInstance();
        $module = $this->getModule();
        $moduleName = $module->getName();
        $parentModuleName = $module->getParentName();
        $sourceModule = $this->get('sourceModule');
        $isgroup = $this->get('isgroup');

        $listViewRecordModels = array();
        
        $qualifiedModuleName = $moduleName;
        if(!empty($parentModuleName)) {
            $qualifiedModuleName = $parentModuleName.':'.$qualifiedModuleName;
        }
        $recordModelClass = Vtiger_Loader::getComponentClassName('Model', 'Record', $qualifiedModuleName);

        $listFields = $module->listFields;
        $listQuery = "SELECT road, follows_up_id, isgroup,  ";
        foreach ($listFields as $fieldName => $fieldLabel) {
            $listQuery .= "$fieldName, ";
        }

        $listQuery .= $module->baseIndex . " FROM ". $module->baseTable." ";

        $listQuery .= 'WHERE ';
        $params = array();

        if(!empty($sourceModule)) {
            $listQuery .= ' module = ? AND ';
            $params[] = $sourceModule;
        }

        if ($isgroup != "") {
            $listQuery .= ' isgroup = ? AND ';
            $params[] = $isgroup;
        }

        $listQuery .= " deleted = '0' AND (follows_up_id IS NULL OR follows_up_id = '')";

        $orderBy = $this->getForSql('orderby');
        if (!empty($orderBy) && $orderBy === 'smownerid') {
            $fieldModel = Vtiger_Field_Model::getInstance('assigned_user_id', $moduleModel);
            if ($fieldModel->getFieldDataType() == 'owner') {
                    $orderBy = 'COALESCE(CONCAT(vtiger_users.first_name,vtiger_users.last_name),vtiger_groups.groupname)';
            }
        }

        if(!empty($orderBy)) {
            $listQuery .= ' ORDER BY '. $orderBy . ' ' .$this->getForSql('sortorder');
        }  else {
            $listQuery .= ' ORDER BY its4you_dynamicfields.seq ASC, its4you_dynamicfields.road ASC';
        }

        $listResult = $adb->pquery($listQuery, $params);
        $noOfRecords = $adb->num_rows($listResult);
        $nbsps = str_repeat("&nbsp;",6);

        for($i=0; $i<$noOfRecords; ++$i) {
            $row = $adb->query_result_rowdata($listResult, $i);
            $record = new $recordModelClass();
            $module_name = $row["module"];

            $follows_up_id = "0";

            if($module_name == 'Calendar'){
                $module_name = vtranslate('LBL_TASK', $module_name);
            }else{
                $module_name = vtranslate($module_name, $module_name);
            }

            $row['module'] = $module_name;
            $row['description'] = $row['description'];

            $record->setData($row);
            if ($isgroup != "") {
                $listViewRecordModels[$record->getId()] = $record;
            } else {
                $listViewRecordModels[$follows_up_id][$record->getId()] = $record;
            }

        }

        return $listViewRecordModels;
    }
    
    public function getListViewCount() {
        $adb = PearDatabase::getInstance();

        $module = $this->getModule();

        $params = array();
        $listQuery = 'SELECT count(*) AS count FROM ' . $module->baseTable;

        $listQuery .= 'WHERE isgroup = ? AND ';
        $params[] = $this->get('isgroup');

        $sourceModule = $this->get('sourceModule');
        if($sourceModule) {
            $listQuery .= " module = ? AND ";
            $params[] = $sourceModule;
        }

        $listQuery .= " deleted = ?";
        $params[] = "0";

        $listResult = $adb->pquery($listQuery,$params);
        return $adb->query_result($listResult, 0, 'count');
    }
    
    public function GetAvailableSettings() {
        $menu_array = array();

        $menu_array["ITS4YouDynamicFieldsLicense"]["location"] = "index.php?module=ITS4YouDynamicFields&parent=Settings&view=License";
        $menu_array["ITS4YouDynamicFieldsLicense"]["image_src"] = Vtiger_Theme::getImagePath('proxy.gif');
        $menu_array["ITS4YouDynamicFieldsLicense"]["desc"] = "LBL_LICENSE_DESC";
        $menu_array["ITS4YouDynamicFieldsLicense"]["label"] = "LBL_LICENSE";
        
        $menu_array["ITS4YouDynamicFieldsUpgrade"]["location"] = "index.php?module=ModuleManager&parent=Settings&view=ModuleImport&mode=importUserModuleStep1";
        $menu_array["ITS4YouDynamicFieldsUpgrade"]["desc"] = "LBL_UPGRADE";
        $menu_array["ITS4YouDynamicFieldsUpgrade"]["label"] = "LBL_UPGRADE";

        $menu_array["ITS4YouDynamicFieldsUninstall"]["location"] = "index.php?module=ITS4YouDynamicFields&parent=Settings&view=Uninstall";
        $menu_array["ITS4YouDynamicFieldsUninstall"]["desc"] = "LBL_UNINSTALL_DESC";
        $menu_array["ITS4YouDynamicFieldsUninstall"]["label"] = "LBL_UNINSTALL";

        return $menu_array;
    }
    
    function getListViewLinks() {        
        $currentUserModel = Users_Record_Model::getCurrentUserModel();        
        $links = parent::getListViewLinks();
  
        if($currentUserModel->isAdminUser()) {

            $SettingsLinks = $this->GetAvailableSettings();

            foreach($SettingsLinks as $stype => $sdata) {

                $s_parr = array(
                'linktype' => 'LISTVIEWSETTING',
                'linklabel' => $sdata["label"],
                'linkurl' => $sdata["location"],
                'linkicon' => ''); 

                $links['LISTVIEWSETTING'][] = Vtiger_Link_Model::getInstanceFromValues($s_parr);
            }            
        }        
        return $links;
    }

    /**
     * Function to get Module Header Links (for Vtiger7)
     * @return array
     */

    public function getBasicLinks(){

        $module = $this->getModule();
        $moduleName = $module->getName();
        $createPermission = Users_Privileges_Model::isPermitted($moduleName, 'CreateView');
        $basicLinks = array();
        if($createPermission) {
            $basicLinks[] = array(
                'linktype' => 'BASIC',
                'linklabel' => 'LBL_NEW_FIELDS_LAYOUT',
                'linkurl' => $this->getCreateFieldsLayoutUrl(),
                'linkicon' => 'fa fa-plus'
            );
            $basicLinks[] = array(
                'linktype' => 'BASIC',
                'linklabel' => 'LBL_NEW_FIELDS_GROUP',
                'linkurl' => $this->getCreateFieldsGroupUrl(),
                'linkicon' => 'fa fa-plus'
            );


        }
        return $basicLinks;
    }

    /**
     * Function returns the URL for Fields Layout
     * @return <String>
     */
    public function getCreateFieldsLayoutUrl() {
        $module = $this->getModule();
        $moduleName = $module->getName();
        return 'index.php?module='.$moduleName.'&view=Edit&mode=FieldsLayout&parent=Settings';
    }

    /**
     * Function returns the URL for Fields Group
     * @return <String>
     */
    public function getCreateFieldsGroupUrl() {
        $module = $this->getModule();
        $moduleName = $module->getName();
        return 'index.php?module='.$moduleName.'&view=Edit&mode=FieldsGroup&parent=Settings';
    }
}