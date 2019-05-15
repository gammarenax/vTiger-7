<?php

/*+********************************************************************************
 * The content of this file is subject to the Reports 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

//ini_set("display_errors",1);error_reporting(63);

class ITS4YouReports_Module_Model extends Vtiger_Module_Model {

	/**
	 * Function deletes report
	 * @param Reports_Record_Model $reportModel
	 */
	public function deleteRecord(Vtiger_Record_Model $reportModel) {

	    $currentUser = Users_Record_Model::getCurrentUserModel();
		$subOrdinateUsers = $currentUser->getSubordinateUsers();
		$subOrdinates = array();
		foreach($subOrdinateUsers as $id=>$name) {
			$subOrdinates[] = $id;
		}

		$owner = $reportModel->get('owner');

		if($currentUser->isAdminUser() || in_array($owner, $subOrdinates) || $owner == $currentUser->getId()) {
			$reportId = $reportModel->getId();
			$db = PearDatabase::getInstance();

			$db->pquery('UPDATE its4you_reports4you SET deleted=1 WHERE reports4youid=?', array($reportId));

			return true;
		}
		return false;
	}

	/**
	 * Function returns quick links for the module
	 * @return <Array of Vtiger_Link_Model>
	 */
        public function getSideBarLinks($linkParams) {
            $request = new Vtiger_Request($_REQUEST, $_REQUEST);
            $currentUserModel = Users_Record_Model::getCurrentUserModel();
            
            $linkTypes = array('SIDEBARLINK', 'SIDEBARWIDGET');
            $links = Vtiger_Link_Model::getAllByType($this->getId(), $linkTypes, $linkParams);
            $quickLinks = array(
                    array(
                            'linktype' => 'SIDEBARLINK',
                            'linklabel' => 'LBL_REPORTS',
                            'linkurl' => $this->getListViewUrl(),
                            'linkicon' => '',
                    ),
            );
            foreach($quickLinks as $quickLink) {
                    $links['SIDEBARLINK'][] = Vtiger_Link_Model::getInstanceFromValues($quickLink);
            } 
            
            $quickS2Links = array(
            'linktype' => "SIDEBARLINK",
            'linklabel' => "LBL_KEY_METRICS_WIDGETS",
            'linkurl' => "index.php?module=ITS4YouReports&view=KeyMetricsList",
            'linkicon' => ''); 
            $links['SIDEBARLINK'][] = Vtiger_Link_Model::getInstanceFromValues($quickS2Links);
            
            if($currentUserModel->isAdminUser()) {
                if($request->get('view')=="IndexAjax"){
                    $quickS2Links = array(
                    'linktype' => "SIDEBARWIDGET",
                    'linklabel' => "LBL_SETTINGS",
                    'linkurl' => "index.php?module=ITS4YouReports&view=License",
                    'linkicon' => ''); 
                    $links['SIDEBARWIDGET'][] = Vtiger_Link_Model::getInstanceFromValues($quickS2Links);
                }else{
                    $quickS2Links = array(
                    'linktype' => "SIDEBARWIDGET",
                    'linklabel' => "LBL_SETTINGS",
                    'linkurl' => "module=ITS4YouReports&view=IndexAjax&mode=showSettingsList&pview=".$linkParams["ACTION"],
                    'linkicon' => ''); 
                    $links['SIDEBARWIDGET'][] = Vtiger_Link_Model::getInstanceFromValues($quickS2Links);
                }
            }

//echo "<pre><br><br><br><br><br><br><br><br><br><br>";
//print_r($links);echo "</pre>";
            return $links;
        }

	/**
	 * Function returns the recent created reports
	 * @param <Number> $limit
	 * @return <Array of Reports_Record_Model>
	 */
	function getRecentRecords($limit = 10) {
		$db = PearDatabase::getInstance();

		$result = $db->pquery('SELECT * FROM vtiger_report ORDER BY reportid DESC LIMIT ?', array($limit));
		$rows = $db->num_rows($result);

		$recentRecords = array();
		for($i=0; $i<$rows; ++$i) {
			$row = $db->query_result_rowdata($result, $i);
			$recentRecords[$row['reportid']] = $this->getRecordFromArray($row);
		}
		return $recentRecords;
	}

	/**
	 * Function returns the report folders
	 * @return <Array of Reports_Folder_Model>
	 */
	function getFolders() {
		return ITS4YouReports_Folder_Model::getAll();
	}

	/**
	 * Function to get the url for add folder from list view of the module
	 * @return <string> - url
	 */
	function getAddFolderUrl() {
		return 'index.php?module='.$this->get('name').'&view=EditFolder';
	}
        
	/**
	 * Function returns Leads grouped by Status
	 * @param type $data
	 * @return <Array>
	 */
	function getReports4You($reportid,$owner,$dateFilter) {
		$db = PearDatabase::getInstance();

        require_once 'modules/ITS4YouReports/ITS4YouReports.php';
        require_once 'modules/ITS4YouReports/GenerateObj.php';
        require_once 'include/Zend/Json.php';

        $report4YouRun = Report4YouRun::getInstance($reportid);

        $data = $report4YouRun->GenerateReport($reportid, 'CHARTS');

		return $data;
	}

    public function isPagingSupported(){
        return true;
    }

    /**
	 * Function returns Leads grouped by Status
	 * @param type $data
	 * @return <Array>
	 */
	function getReports4YouKeyMetrics($reportid,$column_str) {
		$db = PearDatabase::getInstance();

        require_once 'modules/ITS4YouReports/ITS4YouReports.php';
        require_once 'modules/ITS4YouReports/GenerateObj.php';
        $report4YouRun = Report4YouRun::getIntanceForKeyMetrics($reportid);
        $column_array = explode(":",$column_str);
        $lk = (count($column_array)-1);
        $report4YouRun->key_metrics_calculation_type = $column_array[$lk];
        $report4YouRun->key_metrics_alias = $column_array[1];
        unset($column_array[$lk]);
        $report4YouRun->key_metrics_columns_str = implode(":",$column_array);
//error_reporting(63);ini_set("display_errors",1);
        $data["entries"] = $report4YouRun->GenerateReport($reportid, 'KEYMETRICS');
        $data["rows"] = $report4YouRun->key_metrics_rows;
/*
echo "<pre>";print_r(3);echo "</pre>";return $reportid;
*/
//echo "<pre>";print_r();echo "</pre>";                
//error_reporting(0);ini_set("display_errors",0);

		return $data;
	}

    /**
     * Function is a callback from Vtiger_Link model to check permission for the links
     * @param type $linkData
     */
    public function checkLinkAccess($linkData) {
        $privileges = Users_Privileges_Model::getCurrentUserPrivilegesModel();
        $reportModuleModel = Vtiger_Module_Model::getInstance('ITS4YouReports');
        return $privileges->hasModulePermission($reportModuleModel->getId());
    }

    function isStarredEnabled() {
        return false;
    }

}