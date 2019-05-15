<?php

/* * *******************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */


/*
 * Settings List View Model Class
 */

class Settings_ITS4YouLanguageEditor_ListView_Model extends Vtiger_Base_Model {

    public function getModule() {
        return $this->module;
    }

    public function setModule($name) {
        $modelClassName = Vtiger_Loader::getComponentClassName('Model', 'Module', $name);
        $this->module = new $modelClassName();
        return $this;
    }

    public function GetAvailableSettings() {
        $menu_array = array();

        $menu_array["ITS4YouLanguageEditorUpgrade"]["location"] = "index.php?module=ModuleManager&parent=Settings&view=ModuleImport&mode=importUserModuleStep1";
        $menu_array["ITS4YouLanguageEditorUpgrade"]["desc"] = "LBL_UPGRADE";
        $menu_array["ITS4YouLanguageEditorUpgrade"]["label"] = "LBL_UPGRADE";

        $menu_array["ITS4YouLanguageEditorUninstall"]["location"] = "index.php?module=ITS4YouLanguageEditor&parent=Settings&view=Uninstall";
        $menu_array["ITS4YouLanguageEditorUninstall"]["desc"] = "LBL_UNINSTALL_DESC";
        $menu_array["ITS4YouLanguageEditorUninstall"]["label"] = "LBL_UNINSTALL";

        return $menu_array;
    }

    public function getListViewLinks() {

        $currentUserModel = Users_Record_Model::getCurrentUserModel();
        $links = array();

        if ($currentUserModel->isAdminUser()) {

            $SettingsLinks = $this->GetAvailableSettings();

            foreach ($SettingsLinks as $stype => $sdata) {

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

}
