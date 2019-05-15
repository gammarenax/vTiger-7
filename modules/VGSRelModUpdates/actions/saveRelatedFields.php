<?php

/**
 * VGS Related Module Updates
 *
 *
 * @package        VGSRelModUpdates Module
 * @author         Conrado Maggi
 * @license        Comercial / VPL
 * @copyright      2014 VGS Global
 * @version        Release: 1.0
 */

class VGSRelModUpdates_saveRelatedFields_Action extends Vtiger_Action_Controller {

    public function checkPermission(Vtiger_Request $request) {
        global $current_user;

        //@TODO: Validate license

        if (!is_admin($current_user)) {
            throw new AppException('LBL_PERMISSION_DENIED');
        }
    }

    public function process(Vtiger_Request $request) {
        $db = PearDatabase::getInstance();


        switch ($request->get('mode')) {
            case 'deleteRecord':
                $db->pquery("DELETE FROM vtiger_vgsrelmodupdates WHERE vgsrelmodupdatesid=?", array($request->get('record_id')));
                $fieldsResponse['result'] = 'ok';
                $response = new Vtiger_Response();
                $response->setResult($fieldsResponse);
                $response->emit();
                break;

            default:

                $params = Array(
                    $request->get('module1'),
                    $request->get('fieldName1'),
                    $request->get('fieldVal1'),
                    $request->get('module2'),
                    $request->get('fieldName2'),
                    $request->get('targetFieldVal'),
                    $request->get('firstcond')
                );

                $result = $db->pquery("SELECT * FROM vtiger_vgsrelmodupdates WHERE 
                sourcemodule=? 
                AND sourcefieldname=? 
                AND sourcefieldvalue=?
                AND targetmodule=? 
                AND targetfieldname=? 
                AND targetfieldvalue=?
                AND firstcond=? ", $params);

                if ($db->num_rows($result) > 0) {
                    $fieldsResponse['result'] = 'fail';
                    $fieldsResponse['message'] = vtranslate('ALREADY_EXISTS', 'VGSRelModUpdates');
                } else {
                    try {

                        $result = $db->pquery("INSERT INTO vtiger_vgsrelmodupdates (sourcemodule,sourcefieldname,sourcefieldvalue, targetmodule, targetfieldname,targetfieldvalue, firstcond) 
                     VALUES (?,?,?,?,?,?,?)", $params);
                        if ($db->getAffectedRowCount($result) == 1) {
                            $fieldsResponse['result'] = 'ok';
                        } else {
                            $fieldsResponse['result'] = 'fail';
                            $fieldsResponse['message'] = vtranslate('LBL_DB_INSERT_FAIL','VGSRelModUpdates');
                        }
                    } catch (Exception $exc) {
                        $fieldsResponse['result'] = 'fail';
                        $fieldsResponse['message'] = $exc->message;
                    }
                }

                $response = new Vtiger_Response();
                $response->setResult($fieldsResponse);
                $response->emit();
                break;
        }
    }

    function  getTargetFieldValue($module, $fieldname){
        return '_editView_fieldName_' . $fieldname;
    }

}
