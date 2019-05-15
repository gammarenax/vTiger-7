<?php
/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * *******************************************************************************/

/**
 * Vtiger QuickCreate Record Structure Model
 */
class ITS4YouDynamicFields_showFieldsRecordStructure_Model extends Vtiger_RecordStructure_Model {

    var $showFields = array();
    var $showManFields = array();
    var $hideManFields = array();
    var $skipFieldDataType = array("image");
    /**
     * Function to get the values in stuctured format
     * @return <array> - values in structure array('block'=>array(fieldinfo));
     */

    public function setFields($showFields,$showManFields,$hideManFields) {

        $this->showFields = $showFields;
        $this->showManFields = $showManFields;
        $this->hideManFields = $hideManFields;
    }


    public function getShowFields($blockModel) {
        $fieldList = $blockModel->getFields();
        $quickCreateFieldList = array();
        foreach($fieldList as $fieldName => $fieldModel) {
            
            $field_data_type = $fieldModel->getFieldDataType();
            if(in_array($fieldName,$this->showFields) && !in_array($field_data_type,$this->skipFieldDataType)) {
                $showFieldList[$fieldName] = $fieldModel;
            }
        }
        return $showFieldList;
    }    

    public function getStructure($moduleModel) {
        if(!empty($this->structuredValues)) {
                return $this->structuredValues;
        }

        $values = array();
        $recordModel = $this->getRecord();
        $recordExists = !empty($recordModel);

        $blockModelList = $moduleModel->getBlocks();
        foreach($blockModelList as $blockLabel=>$blockModel) {        
        
            $fieldModelList = $this->getShowFields($blockModel);
            foreach($fieldModelList as $fieldName=>$fieldModel) {

                if($fieldModel->isViewable()) {
                    $edit_mandatory = "";
                    $is_mndatory = $fieldModel->isMandatory();

                    if($recordExists) {
                        $fieldModel->set('fieldvalue', $recordModel->get($fieldName));
                    }

                    if (in_array($fieldName, $this->showManFields) && !$is_mndatory) {
                        $edit_mandatory = "M";
                    } elseif (in_array($fieldName, $this->hideManFields) && $is_mndatory) {
                        $edit_mandatory = "O";
                    }

                    if ($edit_mandatory != "") $fieldModel->updateTypeofDataFromMandatory($edit_mandatory);

                    $values[$blockLabel][$fieldName] = $fieldModel;
                }
            }
        }
        $this->structuredValues = $values;
        return $values;
    }
}