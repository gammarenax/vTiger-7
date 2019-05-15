<?php

/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_Save_Action extends Settings_Vtiger_Basic_Action {

    public function process(Vtiger_Request $request) {
        $mode = $request->getMode();

        $recordId = $request->get('record');
        $description = $request->get('description');
        $sourceModule = $request->get('source_module');

        if ($recordId) {
            $DynamicFieldsModel = Settings_ITS4YouDynamicFields_Record_Model::getInstance($recordId);
            $isgroup = $DynamicFieldsModel->get('isgroup');
        } elseif ($mode=="DefaultForm") {
            $DynamicFieldsModel = Settings_ITS4YouDynamicFields_Record_Model::getDefaulFieldsInstance($sourceModule);
            $isgroup = '2';
            $DynamicFieldsModel->set('isgroup', $isgroup);
            $description="";
        } else {
            $DynamicFieldsModel = Settings_ITS4YouDynamicFields_Record_Model::getCleanInstance($sourceModule);
            $DynamicFieldsModel->set('module_name', $sourceModule);

            $isgroup = ($mode=='FieldsGroup'?'1':'0');
            $DynamicFieldsModel->set('isgroup', $isgroup);
        }

        $DynamicFieldsModel->set('description', $description);

        $columns = array("name","show_popup","parentid","parentmodule","parenttype");
        foreach ($columns AS $column) {
            $DynamicFieldsModel->set($column, $request->get($column));
        }

        $DynamicFieldsModel->save();
        $recordId = $DynamicFieldsModel->getId();

        $save_type = "";
        $AllValues = $request->getAll();
        
        $dynamicFieldsModuleModel = new Settings_ITS4YouDynamicFields_Module_Model();

        if ($request->has('save_type') && !$request->isEmpty('save_type')) {
            
            $save_type = $request->get('save_type');
            
            if ($save_type == "individual") {
            
                $new_fields = $request->get('new_fields');
                
                if ($new_fields > 0) {
                    for($i=1; $i<=$new_fields; $i++) {
                            
                        $field_visibility = $request->get("field_visibility_".$i);
                        if ($isgroup == "1") {
                            $field_select_visibility = "1";
                        } else {
                            $field_select_visibility = $request->get("field_select_visibility_".$i);
                        }

                        if (!empty($field_visibility) && !empty($field_select_visibility)) {
                            if ($field_select_visibility == "mandatory") {                        
                                $field_select_visibility = "1";
                                $AllValues["mandatory_".$field_visibility] = "1";
                            }
                            $AllValues["visibility_".$field_visibility] = $field_select_visibility;
                        }
                    }
                }
            }
        }
        
        $new_blocks = $request->get('new_blocks');
                
        if ($new_blocks > 0) {
            for($i=1; $i<=$new_blocks; $i++) {
                $block_visibility = $request->get("block_visibility_".$i);
                $block_select_visibility = $request->get("block_select_visibility_".$i);
                if ((($block_select_visibility == "3" || $block_select_visibility == "2" || ($block_select_visibility == "1" && $save_type == "individual") || $isgroup == "1")) && !empty($block_visibility)) {
                    $AllValues["set_block_visibility_".$block_visibility] = $block_select_visibility;
                }                    
            }
        }

        $new_fields_groups = $request->get('new_fields_groups');
                
        if ($new_fields_groups > 0) {
            for($i=1; $i<=$new_fields_groups; $i++) {
                $fields_group_visibility = $request->get("fields_group_visibility_".$i);
                $field_select_visibility = $request->get("fields_group_select_visibility_".$i);
                if (!empty($fields_group_visibility) && !empty($field_select_visibility)) {
                    if ($field_select_visibility == "mandatory") {
                        $field_select_visibility = "1";
                        $AllValues["set_fields_group_mandatory_".$fields_group_visibility] = "1";
                    }
                    $AllValues["set_fields_group_visibility_".$fields_group_visibility] = $field_select_visibility;
                }
            }
        }

        $dynamicFieldsModuleModel->saveFields($recordId, $AllValues, $isgroup);

        if ($request->has('parentid') && !$request->isEmpty('parentid')) {
            $redirectUrl = "index.php?module=ITS4YouProcessFlow&parent=Settings&view=Detail&record=".$request->get('parentid');
        } elseif ($request->has('parentmodule') && !$request->isEmpty('parentmodule')) {
            $redirectUrl = "index.php?module=ITS4YouProcessFlow&parent=Settings&view=Detail&sourceModule=".$request->get('parentmodule');
        } else {
            $redirectUrl = "index.php?module=ITS4YouDynamicFields&parent=Settings&view=List";
            if ($isgroup=="1") {
                $redirectUrl .= "&tab=group";
            } elseif ($isgroup=="2") {
                $redirectUrl .= "&tab=default";
            }
        }

        header("Location:".$redirectUrl);
    }
}
