<?php

class Settings_VGSMaskedInput_Record_Model extends Settings_Vtiger_Record_Model {
	public function getId() {
		return $this->get('fieldid');
	}

	public function getName() {
		return '';
	}

	public function getModule() {
		return $this->module;
	}

	public function setModule($moduleModel) {
		$this->module = $moduleModel;
		return $this;
	}

	public function getEditViewUrl() {
		$moduleModel = $this->getModule();
		return 'index.php?module='.$moduleModel->getName().'&parent='.$moduleModel->getParentName().'&view=Edit&record='.$this->getId();
	}

	public function getDeleteUrl() {
		$moduleModel = $this->getModule();
		return 'index.php?module='.$moduleModel->getName().'&parent='.$moduleModel->getParentName().'&action=Delete&record='.$this->getId();
	}

	public function getRecordLinks() {
		$links = array();
		$recordLinks = array(
				array(
						'linktype' => 'LISTVIEWRECORD',
						'linklabel' => 'LBL_EDIT',
						'linkurl' => "javascript:Settings_VGSMaskedInput_List_Js.triggerEdit(event, '".$this->getEditViewUrl()."');",
						'linkicon' => 'icon-pencil'
				),
				array(
						'linktype' => 'LISTVIEWRECORD',
						'linklabel' => 'LBL_DELETE',
						'linkurl' => "javascript:Settings_VGSMaskedInput_List_Js.triggerDelete(event, '".$this->getDeleteUrl()."');",
						'linkicon' => 'icon-trash'
				)
		);
		foreach($recordLinks as $recordLink) {
			$links[] = Vtiger_Link_Model::getInstanceFromValues($recordLink);
		}
		return $links;
	}

	public function getDisplayValue($key) {
		$value = $this->get($key);
		if ($key === 'isactive') {
			if ($value) {
				$value = 'Yes';
			} else {
				$value = 'No';
			}
		}
		return $value;
	}
    
	public function save(Vtiger_Request $request) {
		$db = PearDatabase::getInstance();
        
		$fieldId = $request->get('fieldName');
        $tabId = $request->get('moduleName');
        $enabled = (strtolower($request->get('enabled')) === 'on') ? 1 : 0;
        
        $db->pquery("delete from vtiger_vgsmaskedinput where fieldid=?", array($fieldId));
        
        $query = 'INSERT INTO vtiger_vgsmaskedinput (fieldid, tabid, maskinfo, enabled) VALUES(?, ?, ?, ?)';
        $params = array($fieldId, $tabId, $request->get('maskinfo'), $enabled);
        
        $db->pquery($query, $params);
	}

	static public function getCleanInstance($qualifiedModuleName) {
		$recordModel = new self();
		$moduleModel = Settings_Vtiger_Module_Model::getInstance($qualifiedModuleName);
		return $recordModel->setModule($moduleModel);
	}
    
    static public function getInstanceById($recordId, $qualifiedModuleName) {
		$db = PearDatabase::getInstance();
		$result = $db->pquery("select vtiger_field.fieldid, tablabel, vtiger_tab.tabid, fieldlabel, maskinfo, enabled "
                    . " from vtiger_vgsmaskedinput "
                    . " inner join vtiger_field on vtiger_vgsmaskedinput.fieldid=vtiger_field.fieldid "
                    . " inner join vtiger_tab on vtiger_vgsmaskedinput.tabid=vtiger_tab.tabid where vtiger_field.fieldid=?", array($recordId));

		if ($db->num_rows($result)) {
			$moduleModel = Settings_Vtiger_Module_Model::getInstance($qualifiedModuleName);
			$rowData = $db->query_result_rowdata($result, 0);
            
            $rowData['fieldlabel'] = vtranslate($rowData['fieldlabel'], $rowData['tablabel']);
            $rowData['tablabel'] = vtranslate($rowData['tablabel']);

			$recordModel = new self();
			$recordModel->setData($rowData)->setModule($moduleModel);
			return $recordModel;
		}
		return false;
	}
}