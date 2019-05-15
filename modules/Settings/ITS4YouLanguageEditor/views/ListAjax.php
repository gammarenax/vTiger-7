<?php

/* * *******************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouLanguageEditor_ListAjax_View extends Settings_Vtiger_Index_View {

    function __construct() {
        parent::__construct();
        $this->exposeMethod('getPickListDetailsForModule');
        $this->exposeMethod('getPickListValueForField');
        $this->exposeMethod('createLanguageModalContent');
        $this->exposeMethod('createNewTranslationModalContent');
        $this->exposeMethod('updateAllLanguagesTableContent');
    }

    public function process(Vtiger_Request $request) {
        $mode = $request->get('mode');
        if ($this->isMethodExposed($mode)) {
            $this->invokeExposedMethod($mode, $request);
        }
    }

    public function getPickListDetailsForModule(Vtiger_Request $request) {
        $sourceModule = $request->get('source_module');
        $moduleModel = Settings_Picklist_Module_Model::getInstance($sourceModule);
        //TODO: see if you needs to optimize this , since its will gets all the fields and filter picklist fields
        $pickListFields = $moduleModel->getFieldsByType(array('picklist', 'multipicklist'));

        $qualifiedName = $request->getModule(false);

        $viewer = $this->getViewer($request);
        $viewer->assign('PICKLIST_FIELDS', $pickListFields);
        $viewer->assign('SELECTED_MODULE_NAME', $sourceModule);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedName);
        $viewer->view('ModulePicklistDetail.tpl', $qualifiedName);
    }

    public function getPickListValueForField(Vtiger_Request $request) {
        $sourceModule = $request->get('source_module');
        $pickFieldId = $request->get('pickListFieldId');
        $fieldModel = Settings_Picklist_Field_Model::getInstance($pickFieldId);

        $moduleName = $request->getModule();
        $qualifiedName = $request->getModule(false);
        
        $languageModel = new Settings_ITS4YouLanguageEditor_Module_Model;
        
        $Languages = $languageModel->getInfoAboutLanguages();

        $selectedFieldAllPickListValues = Vtiger_Util_Helper::getPickListValues($fieldModel->getName());
        $viewer = $this->getViewer($request);
        $viewer->assign('LANGUAGES', $Languages);
        $viewer->assign('SELECTED_PICKLIST_FIELDMODEL', $fieldModel);
        $viewer->assign('SELECTED_MODULE_NAME', $sourceModule);
        $viewer->assign('MODULE', $moduleName);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedName);
        $viewer->assign('SELECTED_PICKLISTFIELD_ALL_VALUES', $selectedFieldAllPickListValues);
        $viewer->view('PickListValueDetail.tpl', $qualifiedName);
    }

    function createLanguageModalContent(Vtiger_Request $request){
        $qualifiedName = $request->getModule(false);

        $languageModel = new Settings_ITS4YouLanguageEditor_Module_Model;
        $Languages = Settings_ITS4YouLanguageEditor_Module_Model::getSortedLanguages();

        $viewer = $this->getViewer($request);
        $viewer->assign('LANGUAGES', $Languages);
        $viewer->assign('LANGUAGEMODEL', $languageModel);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedName);
        $viewer->view('CreateLanguageModalContent.tpl', $qualifiedName);
    }

    function createNewTranslationModalContent(Vtiger_Request $request) {
        $qualifiedName = $request->getModule(false);

        $moduleModel = new Settings_ITS4YouLanguageEditor_Module_Model;

        $viewer = $this->getViewer($request);
        $viewer->assign('LANG_VARIABLE_TYPE', $moduleModel->getLangVariableType());
        $viewer->assign('LANG_PREF', $request->get("langPrefix"));
        $viewer->assign('QUALIFIED_MODULE', $qualifiedName);
        $viewer->view('CreateTranslationModal.tpl', $qualifiedName);
    }

    function updateAllLanguagesTableContent(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);

        $languageModel = new Settings_ITS4YouLanguageEditor_Module_Model;


        // TODO nasledujuce riadky kodu po riadok 120 vyzeraju ako funkcia getSortedLanguages z languageModel, pouzit funkciu z modelu
        $Languages = $languageModel->getInfoAboutLanguages();
        //function is a parameter in uasort, sort the array by active column -> in array will be active languages on the beginning
        function cmp($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($b['active'] < $a['active']) ? -1 : 1;
        }

        uasort($Languages, 'cmp');

        // the default language English en_us will be on the beginning of array, then will be sorted active languages and nonactive languages will be on the end
        $newLanguages = array();
        foreach ($Languages as $key => $value) {
            if ($key == "en_us") {
                $ha = array($key=>$value);
            } else {
                $newLanguages[$key] = $value;
            }
        }

        $newLanguages = $ha + $newLanguages;

        $DefaultLanguages = $languageModel->getDefaultLanguages();

        $viewer->assign("LANGUAGES_USED_BY_USERS", $languageModel->getLanguagesUsedByUsers());

        $viewer->assign('LANGUAGES', $newLanguages);
        $viewer->assign('LANGUAGEMODEL', $languageModel);
        $viewer->assign('DEFAULTLANGUAGES', $DefaultLanguages);

        $viewer->assign('QUALIFIED_MODULE', $request->getModule(false));
        $viewer->view('AllLanguagesContent.tpl', $request->getModule(false));
    }

}
