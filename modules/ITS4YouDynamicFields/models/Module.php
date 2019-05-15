<?php
/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * *******************************************************************************/

class ITS4YouDynamicFields_Module_Model extends Vtiger_Module_Model {

    /**
     * Funxtion to identify if the module supports quick search or not
     */
    public function isQuickSearchEnabled() {
        return false;
    }

    static function checkIfIsInstalled () {
        $adb = PearDatabase::getInstance();
        $result1 = $adb->pquery("SELECT version FROM its4you_dynamicfields_version WHERE version LIKE ?", array('7%'));
        if ($result1 && $adb->num_rows($result1) > 0) {
            return true;
        }
        return false;
    }

    public function getProcessFlowActions(Vtiger_Request $request, $recordModel){

        $Actions = array();
        $isInstalled = self::checkIfIsInstalled();

        if ($isInstalled) {

            if (method_exists($recordModel,'getCreateParentRecordUrl')) {
                $createUrl = $recordModel->getCreateParentRecordUrl($this);
            } else {
                $createUrl = $this->getCreateRecordUrl();
                $createUrl .= "&parent=Settings&parentid=".$recordModel->getId();
            }

            $Actions = array(
                array(
                    'linklabel' => vtranslate('LBL_NEW_DYNAMIC_FIELDS_LAYOUT','Settings:ITS4YouDynamicFields'),
                    'linkurl' => $createUrl."&mode=FieldsLayout",
                    'linkicon' => 'icon-plus'
                ),
                array(
                    'linklabel' => vtranslate('LBL_SELECT_DYNAMIC_FIELDS_LAYOUT','Settings:ITS4YouDynamicFields'),
                    'linkurl' => 'javascript:Settings_ITS4YouProcessFlow_Detail_Js.selectRelation("ITS4YouDynamicFields");',
                    'linkicon' => 'icon-pencil'
                )
            );
        }
        return $Actions;
    }

    private function setLicenseInfo() {
        $this->version_no = ITS4YouDynamicFields_Version_Helper::getVersion();
        $adb = PearDatabase::getInstance();
        $result = $adb->pquery("SELECT version_type, license_key, license_due_date  FROM its4you_dynamicfields_license",array());
        if ($adb->num_rows($result) > 0) {
            $this->version_type = $adb->query_result($result, 0, "version_type");
            $this->license_key = $adb->query_result($result, 0, "license_key");
            $this->license_due_date = $adb->query_result($result, 0, "license_due_date");
        } else {
            $this->version_type = "";
            $this->license_key = "";
            $this->license_due_date = "";
        }
    }
    public function GetVersionType() {
        if (empty($this->version_type)){
            $this->setLicenseInfo();
        }
        return $this->version_type;
    }
    public function GetLicenseKey() {
        if (empty($this->license_key)){
            $this->setLicenseInfo();
        }
        return $this->license_key;
    }
    public function DeleteAllRefLinks() {
    }
    public function actualizeLinks() {
    }
    public function GetLicenseDueDate($formated = false) {
        if (empty($this->license_due_date)){
            $this->setLicenseInfo();
        }

        if ($formated) {
            return Vtiger_Date_UIType::getDisplayDateValue($this->license_due_date);
        } else {
            return $this->license_due_date;
        }
    }
    /**
     * Function to get Settings links
     * @return <Array>
     */
    public function getSettingLinks(){

        $settingsLinks = array();
        $currentUserModel = Users_Record_Model::getCurrentUserModel();
        if($currentUserModel->isAdminUser()) {

            $settingsLinks[] =  array(
                'linktype' => 'LISTVIEWSETTING',
                'linklabel' => vtranslate('LBL_LICENSE', 'Settings:ITS4YouDynamicFields'),
                'linkurl' => 'index.php?module=ITS4YouDynamicFields&view=License&parent=Settings',
                'linkicon' => Vtiger_Theme::getImagePath('proxy.gif')
            );

            $settingsLinks[] =  array(
                'linktype' => 'LISTVIEWSETTING',
                'linklabel' => vtranslate('LBL_UPGRADE', 'Settings:ITS4YouDynamicFields'),
                'linkurl' => 'index.php?module=ModuleManager&parent=Settings&view=ModuleImport&mode=importUserModuleStep1',
                'linkicon' => ''
            );

            $settingsLinks[] =  array(
                'linktype' => 'LISTVIEWSETTING',
                'linklabel' => vtranslate('LBL_UNINSTALL', 'Settings:ITS4YouDynamicFields'),
                'linkurl' => 'index.php?module=ITS4YouDynamicFields&view=Uninstall&parent=Settings',
                'linkicon' => ''
            );
        }
        return $settingsLinks;
    }

    public function getDefaultModulesList(){
        $adb = PearDatabase::getInstance();
        $Modules = array();
        $result = $adb->pquery("SELECT dfid, module FROM its4you_dynamicfields WHERE deleted = ? AND isgroup = ?",array('0','2'));
        while($row = $adb->fetchByAssoc($result)) {
            $Modules[$row['module']] = Settings_ITS4YouDynamicFields_Record_Model::getInstance($row['dfid']);
        }
        return $Modules;
    }

    public function SetLicenseDueDate($license_due_date) {
        $this->license_due_date = $license_due_date;

        $adb = PearDatabase::getInstance();
        $adb->pquery("UPDATE its4you_dynamicfields_license SET license_due_date = ?",array($license_due_date));
    }
}
