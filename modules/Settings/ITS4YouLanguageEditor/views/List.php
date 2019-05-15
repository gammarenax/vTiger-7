<?php

/* * *******************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */
require_once('vtlib/Vtiger/Module.php');
require_once('vtlib/Vtiger/Language.php');
class Settings_ITS4YouLanguageEditor_List_View extends Settings_Vtiger_Index_View {

    public function process(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);

        //for languages
        $languageModel = new Settings_ITS4YouLanguageEditor_Module_Model;

        $Languages = $languageModel->getInfoAboutLanguages();

        $viewer->assign('LANGUAGES', $Languages);

        //for picklist editor
        $sourceModule = $request->get('source_module');
        $pickListSupportedModules = Settings_Picklist_Module_Model::getPicklistSupportedModules();
        if (empty($sourceModule)) {
            //take the first module as the source module
            $sourceModule = $pickListSupportedModules[0]->name;
        }
        $viewer->assign('PICKLIST_MODULES', $pickListSupportedModules);
        $picklistModuleModel = Settings_Picklist_Module_Model::getInstance($sourceModule);

        $pickListFields = $picklistModuleModel->getFieldsByType(array('picklist', 'multipicklist'));
        if (count($pickListFields) > 0) {
            $selectedPickListFieldModel = reset($pickListFields);

            $selectedFieldAllPickListValues = Vtiger_Util_Helper::getPickListValues($selectedPickListFieldModel->getName());


            $viewer->assign('PICKLIST_FIELDS', $pickListFields);
            $viewer->assign('SELECTED_PICKLIST_FIELDMODEL', $selectedPickListFieldModel);
            $viewer->assign('SELECTED_PICKLISTFIELD_ALL_VALUES', $selectedFieldAllPickListValues);
            $viewer->assign('ROLES_LIST', Settings_Roles_Record_Model::getAll());
        } else {
            $viewer->assign('NO_PICKLIST_FIELDS', true);
        }


        $listViewModel = new Settings_ITS4YouLanguageEditor_ListView_Model();
        $viewer->assign('LISTVIEW_LINKS', $listViewModel->getListViewLinks());

        $viewer->assign('SELECTED_MODULE_NAME', $sourceModule);
        $viewer->assign('QUALIFIED_MODULE', $request->getModule(false));

        $version = ITS4YouLanguageEditor_Version_Helper::getVersion();
        $viewer->assign('VERSION', $version);
        $viewer->view('List.tpl', $request->getModule(false));
    }

    function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $jsFileNames = array(
            'modules.Settings.Vtiger.resources.List',
            "modules.Settings.$moduleName.resources.List",
            "~layouts/".Vtiger_Viewer::getDefaultLayoutName()."/lib/jquery/floatThead/jquery.floatThead.js",
            "~layouts/".Vtiger_Viewer::getDefaultLayoutName()."/lib/jquery/perfect-scrollbar/js/perfect-scrollbar.jquery.js"
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }

    function getHeaderCss(Vtiger_Request $request)
    {
        $headerCssInstances = parent::getHeaderCss($request);
        $moduleName = $request->getModule();
        $cssFileNames = array(
            "~layouts/v7/modules/Settings/$moduleName/css/List.css",
        );
        $cssInstances = $this->checkAndConvertCssStyles($cssFileNames);
        $headerCssInstances = array_merge($headerCssInstances, $cssInstances);
        return $headerCssInstances;
    }

}
