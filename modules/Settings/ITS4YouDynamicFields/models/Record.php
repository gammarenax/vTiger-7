<?php
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_Record_Model extends Settings_Vtiger_Record_Model {
    var $Fields = array("visibility" => array(),"is_mandarory" => array());
    var $ConvertDate = array('is', 'is not', 'between', 'before', 'after', 'in less than', 'in more than');
    
    public function getId() {
        return $this->get('dfid');
    }

    public function getName() {
        return $this->get('description');
    }

    public function get($key) {
        return parent::get($key);
    }
    
    public function getDetailViewUrl($mode="") {
        return 'index.php?module=ITS4YouDynamicFields&parent=Settings&view=Detail'.($mode!=""?"&mode=".$mode:"").'&record='.$this->getId();
    }
    
    public function getEditViewUrl($mode = '') {
        return 'index.php?module=ITS4YouDynamicFields&parent=Settings&view=Edit'.($mode!=""?"&mode=".$mode:"").'&record='.$this->getId();
    }
   
    public function getModule() {
        return $this->module;
    }

    public function setModule($moduleName) {
        $this->module = Vtiger_Module_Model::getInstance($moduleName);
        return $this;
    }

    public function isDefault() {
        return true;
    }

    public function delete() {
        $adb = PearDatabase::getInstance();

        $dfid = $this->getId();
        $sql1 = "UPDATE its4you_dynamicfields SET deleted = '1' WHERE dfid = ?";
        $adb->pquery($sql1, array($dfid));
        
        
        $sql2 = "DELETE FROM its4you_dynamicfields_fields_groups WHERE fieldsgroup = ?";
        $adb->pquery($sql2, array($dfid));
        
    }
    
    public function save() {
        $adb = PearDatabase::getInstance();

        $dfid = $this->get('dfid');
        $description = $this->get('description');
        $moduleName = $this->get('module_name');
        $show_popup = $this->get('show_popup');
        $isgroup = $this->get('isgroup');

        $follows_up_id  = $this->get('follows_up_id');



        if(isset($dfid) && $dfid != "" && $dfid != "0"){

            $sql1 = "UPDATE  its4you_dynamicfields SET description = ?, show_popup = ? WHERE dfid = ?";
            $Params1 = array($description, $show_popup, $dfid);

        } else {
            
            $sql2 = "SELECT (max( seq ) + 1) AS newseq FROM its4you_dynamicfields";
            $result2 = $adb->pquery($sql2,array());
            $newseq = $adb->query_result($result2,"0","newseq");
             
            $dfid = $adb->getUniqueID("its4you_dynamicfields");
            
            $sql1 = "INSERT INTO its4you_dynamicfields (dfid, description, module, seq, show_popup, isgroup, follows_up_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $Params1 = array($dfid, $description, $moduleName, $newseq, $show_popup, $isgroup, $follows_up_id);
        }
        $adb->pquery($sql1, $Params1);

        $this->set('dfid', $dfid);

        $parentid = $this->get('parentid');
        if ($parentid != "") {
            $parentmodule = $this->get('parentmodule');
            $iftype = $this->get('parenttype');

            if (empty($parentid) && !empty($parentmodule)) {
                $recordModel = Settings_ITS4YouProcessFlow_Record_Model::getDefaultInstance($parentmodule);
            } else {
                $recordModel = Settings_ITS4YouProcessFlow_Record_Model::getInstance($parentid);
            }

            $recordModel->addRelatedAction($this->getProcessFlowData($iftype));
        }
    }

    public function getField($type,$field_name) {        
        $value = "";
        if (isset($this->Fields[$type][$field_name])) {
            $value = $this->Fields[$type][$field_name];
        } 
        
        return $value;
    }
    
    public function getAllFields() {        
        $Fields = array();
        if (isset($this->Fields["all"])) {
            $Fields = $this->Fields["all"];
        } 
        
        return $Fields;
    }
    
    public function getAllBlocks() {      
        
        $adb = PearDatabase::getInstance();
        $dynamicfieldsid = $this->getId();
        
        $sql = "SELECT block, visible FROM its4you_dynamicfields_blocks WHERE dfid = ?";
        $result = $adb->pquery($sql, array($dynamicfieldsid));
        if($adb->num_rows($result)){

            while($row = $adb->fetchByAssoc($result)) {

                $Blocks[$row["block"]] = $row["visible"];
            }
        } 
        
        return $Blocks;
    }
    
    public function getAllFieldsGroups() {      
        
        $adb = PearDatabase::getInstance();
        $dynamicfieldsid = $this->getId();
        
        $FG = array();
        
        $sql = "SELECT fieldsgroup, visible, mandatory FROM its4you_dynamicfields_fields_groups WHERE dfid = ?";
        $result = $adb->pquery($sql, array($dynamicfieldsid));
        if($adb->num_rows($result)){

            while($row = $adb->fetchByAssoc($result)) {

                $FG[$row["fieldsgroup"]] = array("visible" => $row["visible"],"mandatory" => $row["mandatory"]);
            }
        } 
        
        return $FG;
    }
    
    public function setField($field_name,$visibility_type,$is_mandarory) {
        
        $this->Fields["all"][] = $field_name;
        
        $this->Fields["visibility"][$field_name] = $visibility_type;
        $this->Fields["is_mandarory"][$field_name] = $is_mandarory;
    }
    
    public function getVisibility($field_name) {        
        return $this->getField("visibility",$field_name);
    }
    
    public function isMandatory($field_name) {        
        $is_mandarory = $this->getField("is_mandarory",$field_name);
        
        if ($is_mandarory)
            return "yes";
        else
            return "no";
    }

    public function getRecordLinks($type) {

            $links = array();

            $recordLinks = array();
            
            
            if ($type != "Group") {
                $recordLinks[] = array(
                                    'linktype' => 'LISTVIEWRECORD',
                                    'linklabel' => 'LBL_ADD_FOLLOWS_UP',
                                    'linkurl' => $this->getEditViewUrl(true),
                                    'linkicon' => 'icon-plus'
                                );
            }
            $recordLinks[] = array(
                                'linktype' => 'LISTVIEWRECORD',
                                'linklabel' => 'LBL_EDIT_RECORD',
                                'linkurl' => $this->getEditViewUrl(false,$type),
                                'linkicon' => 'icon-pencil'
                            );
            $recordLinks[] = array(
                                'linktype' => 'LISTVIEWRECORD',
                                'linklabel' => 'LBL_DELETE_RECORD',
                                'linkurl' => 'javascript:Vtiger_List_Js.deleteRecord('.$this->getId().');',
                                'linkicon' => 'icon-trash'
                            );
            foreach($recordLinks as $recordLink) {
                    $links[] = Vtiger_Link_Model::getInstanceFromValues($recordLink);
            }

            return $links;
    }

    public static function getInstance($dynamicfieldsid, $load_fields = false) {

        $adb = PearDatabase::getInstance();

        $sql1 = "SELECT its4you_dynamicfields.*, its4you_dynamicfields.module AS module_name FROM its4you_dynamicfields WHERE dfid = ?";
        $result1 = $adb->pquery($sql1, array($dynamicfieldsid));

        if($adb->num_rows($result1)){
            $data = $adb->raw_query_result_rowdata($result1, 0);
            return self::getInstanceObject($data);
        }else{
            return null;
        }
    }

    public static function getCleanInstance($moduleName) {
        $data = array("module_name" => $moduleName,"show_popup" => 1,"description"=>"");
        return self::getInstanceObject($data);
    }

    public static function getInstanceObject($data) {
        $dynamicFieldsModel = new self();
        
        $dynamicFieldsModel->set('description', $data["description"]);
        $dynamicFieldsModel->set('module_name', $data["module_name"]);
        $dynamicFieldsModel->set('dfid', $data["dfid"]);
        $dynamicFieldsModel->set('show_popup', $data["show_popup"]);
        $dynamicFieldsModel->set('isgroup', $data["isgroup"]);
        $dynamicFieldsModel->set('follows_up_id', $data["follows_up_id"]);


        $dynamicFieldsModel->setModule($data["module_name"]);
        return $dynamicFieldsModel;
    }

    function getFieldFilterValueType($c_fieldname) {
        $conditions = $this->get('conditions');
        if(!empty($conditions) && is_array($conditions)) {
            foreach($conditions as $filter) {

                list($columntable, $columnname, $fieldname, $label, $columntype) = explode(":",$filter['fieldname']);
                if($c_fieldname == $fieldname) {
                        return $filter['valuetype'];
                }
            }
        }

        return false;
    }

    public function loadFields() {

        $adb = PearDatabase::getInstance();
        $dynamicfieldsid = $this->getId();
                    
        $sql = "SELECT fieldname, visible, mandatory FROM its4you_dynamicfields_fields WHERE dfid = ?";
        $result = $adb->pquery($sql, array($dynamicfieldsid));
        if($adb->num_rows($result)){

            while($row = $adb->fetchByAssoc($result)) {
                $this->setField($row['fieldname'],$row['visible'],$row['mandatory']);
            }
        }
    }

    public function getProcessFlowData($iftype) {

        $id = $this->getId();
        $module = "ITS4YouDynamicFields";

        return array("id" => $id, "module" => $module, "action" => "SetDFLayout", "iftype" => $iftype);
    }

    public static function getInstanceFromData($Data) {
        $recordModel = new self();

        $Columns = array("dfid","description","module_name","show_popup","isgroup","follows_up_id");

        foreach ($Columns AS $column) {
            $value = ($Data[$column]!=""?$Data[$column]:"");
            $recordModel->set($column,$value);
        }

        $recordModel->setModule($recordModel->get('module'));
        return $recordModel;
    }

    public function getProcessFlowRecords(){

        $Actions = array();

        if (vtlib_isModuleActive("ITS4YouProcessFlow")) {
            $adb = PearDatabase::getInstance();
            $parentModule = Vtiger_Module_Model::getInstance("ITS4YouProcessFlow");

            $dfid = $this->getId();
            $query = 'SELECT its4you_processflowrel.* FROM its4you_processflowrel 
                      LEFT JOIN its4you_processflow ON its4you_processflow.pfid = its4you_processflowrel.pfid
                      WHERE (its4you_processflow.deleted = ? OR its4you_processflow.deleted IS NULL ) AND its4you_processflowrel.parent_id = ? AND its4you_processflowrel.parent_module=?';

            $result = $adb->pquery($query,array('0',$dfid,'ITS4YouDynamicFields'));
            while($row = $adb->fetchByAssoc($result)) {
                $rowId = $row["pfid"];
                if (!empty($rowId)) {
                    $RecordModel = Settings_ITS4YouProcessFlow_Record_Model::getInstance($rowId);
                } else {
                    $RecordModel = Settings_ITS4YouProcessFlow_Record_Model::getDefaultInstance($row["source_module"]);
                }
                $Action_Data["name"] = $RecordModel->getName();
                $Action_Data["detail_link"] = $RecordModel->getDetailViewUrl();
                $Actions[$rowId] = $Action_Data;
            }
        }
        return $Actions;
    }

    public function getDefaulFieldsInstance($sourceModule){

        $adb = PearDatabase::getInstance();

        $sql1 = "SELECT its4you_dynamicfields.*, its4you_dynamicfields.module AS module_name FROM its4you_dynamicfields WHERE module = ? AND isgroup = ?";
        $result1 = $adb->pquery($sql1, array($sourceModule,"2"));

        if($adb->num_rows($result1)){
            $data = $adb->raw_query_result_rowdata($result1, 0);
            return self::getInstanceObject($data);
        }else{
            return self::getCleanInstance($sourceModule);
        }
    }

}