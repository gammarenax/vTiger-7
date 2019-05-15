<?php

require_once 'vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\UpdateItemType;
use \jamesiarmes\PhpEws\Request\CreateItemType;
use \jamesiarmes\PhpEws\Request\GetItemType;
use \jamesiarmes\PhpEws\Request\DeleteItemType;
use \jamesiarmes\PhpEws\Request\FindItemType;
use \jamesiarmes\PhpEws\Request\FindFolderType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemChangeDescriptionsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;

use \jamesiarmes\PhpEws\Enumeration\CalendarItemUpdateOperationType;
use \jamesiarmes\PhpEws\Enumeration\CalendarItemCreateOrDeleteOperationType;
use \jamesiarmes\PhpEws\Enumeration\ConflictResolutionType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use \jamesiarmes\PhpEws\Enumeration\UnindexedFieldURIType;
use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedPropertySetType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\MapiPropertyTypeType;
use \jamesiarmes\PhpEws\Enumeration\DisposalType;
use \jamesiarmes\PhpEws\Enumeration\ImportanceChoicesType;
use \jamesiarmes\PhpEws\Enumeration\BodyTypeType;
use \jamesiarmes\PhpEws\Enumeration\BodyTypeResponseType;
use \jamesiarmes\PhpEws\Enumeration\SensitivityChoicesType;
use \jamesiarmes\PhpEws\Enumeration\ItemQueryTraversalType;
use \jamesiarmes\PhpEws\Enumeration\FolderQueryTraversalType;




use \jamesiarmes\PhpEws\Type\CalendarItemType;
use \jamesiarmes\PhpEws\Type\CalendarViewType;
use \jamesiarmes\PhpEws\Type\ItemChangeType;
use \jamesiarmes\PhpEws\Type\PathToUnindexedFieldType;
use \jamesiarmes\PhpEws\Type\SetItemFieldType;
use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;
use \jamesiarmes\PhpEws\Type\PathToExtendedFieldType;
use \jamesiarmes\PhpEws\Type\FolderResponseShapeType;
use \jamesiarmes\PhpEws\Type\IndexedPageViewType;
use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;


Class ExchangeConnector{


    protected $host;
    protected $username;
    protected $password;
    protected $version = Client::VERSION_2016;
    protected $ews;

    public function __construct($host, $username, $password){
        //set deafult timezone
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->ews = new Client($host, $username, $password, $this->version);
        $this->ews->setCurlOptions(array(CURLOPT_SSL_VERIFYPEER => false,CURLOPT_SSL_VERIFYHOST=> false));
        $timezone =ExchangeConnector::getTimezoneForUser();
        $this->ews->setTimezone($timezone);
    }

    public function editCalendarEvent($updates, $bodytype="HTML"){

        if($updates['id'] == "" || $updates['changeKey'] == "")
            return false;

        $request = new UpdateItemType();
        $request->ConflictResolution = ConflictResolutionType::ALWAYS_OVERWRITE;
        $request->SendMeetingInvitationsOrCancellations = CalendarItemUpdateOperationType::SEND_TO_ALL_AND_SAVE_COPY;

        $change = new ItemChangeType();
        $change->ItemId = new ItemIdType();
        $change->ItemId->Id = $updates['id'];
        $change->ItemId->ChangeKey = $updates['changeKey'];
        $change->Updates = new NonEmptyArrayOfItemChangeDescriptionsType();

            // Iterate over the updated to be applied, adding each to the request.
        foreach ($updates as $key => $value) {
            if($value == "" && $key!="body")
                continue;
            

            $field = new SetItemFieldType();

            switch($key){
                case "subject":
                $field->FieldURI->FieldURI = 'item:Subject';
                $field->CalendarItem->Subject = html_entity_decode($value, ENT_QUOTES, 'UTF-8');
                break;
                case "start":
                $field->FieldURI->FieldURI = 'calendar:Start';
                $field->CalendarItem->Start = $value;
                break;
                case "end":
                $field->FieldURI->FieldURI = 'calendar:End';
                $field->CalendarItem->End = $value;
                break;
                case "location":
                $field->FieldURI->FieldURI = 'calendar:Location';
                $field->CalendarItem->Location = $value;
                break;
                case "importance":
                $field->FieldURI->FieldURI = 'item:Importance';
                $field->CalendarItem->Importance = $value;
                break;
                case "sensitivity":
                $field->FieldURI->FieldURI = 'item:Sensitivity';
                $field->CalendarItem->Sensitivity = $value;
                break;
                case "category":
                $field->FieldURI->FieldURI = 'item:Categories';
                $field->CalendarItem->Categories->String = "[vTiger] ".$value;
                break;
                case "body":
                $field->FieldURI->FieldURI = 'item:Body';
                $field->CalendarItem->Body->_ = html_entity_decode($value, ENT_QUOTES, 'UTF-8');
                $field->CalendarItem->Body->BodyType = $bodytype;
                break;
                default:
                $isDefault = true;
                break;
            }//switch

            if($isDefault){
               $isDefault = false;
               continue;
            }//if

            $change->Updates->SetItemField[] = $field;

        }
        $request->ItemChanges[] = $change;   
        $response = $this->ews->UpdateItem($request);
        $response_messages = $response->ResponseMessages->UpdateItemResponseMessage;
        foreach ($response_messages as $response_message) {
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $message = $response_message->MessageText;
                return array("result"=>"error","message"=>$message);
            }

            foreach ($response_message->Items->CalendarItem as $item) {
             return array("id" => $item->ItemId->Id,
                "changeKey" =>  $item->ItemId->ChangeKey
                );
         }
     }
    }//editCalendarEvent


    public function getEvents($ids){
        if(!$ids)return false;
        $request = new GetItemType();
        $request->ItemShape = new ItemResponseShapeType();
        $request->ItemShape->BodyType=BodyTypeResponseType::TEXT;
        $request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
        $request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// Iterate over the event ids, setting each one on the request.
        foreach ($ids as $event_id) {
            $item = new ItemIdType();
            $item->Id = $event_id;
            $request->ItemIds->ItemId[] = $item;
        }

        $response = $this->ews->GetItem($request);
// Iterate over the results, printing any error messages or event names.
        $response_messages = $response->ResponseMessages->GetItemResponseMessage;
        foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $message = $response_message->ResponseCode;
                return false;
            }
            $processedResponse =  $this->processResponse($response,false);
            if($processedResponse !== false){
                $events = $processedResponse;
            }else{
                $events = array('dontsync' => true);
            }
            return $events;
        }
    }

    public function deleteCalendarEvent(array $ids){
        $request = new DeleteItemType();
        for($i = 0; $i < count($ids); $i++){
            $request->ItemIds->ItemId[$i]->Id = $ids[$i];
        }
        $request->DeleteType = DisposalType::MOVE_TO_DELETED_ITEMS;
        $request->SendMeetingCancellations = CalendarItemCreateOrDeleteOperationType::SEND_ONLY_TO_ALL;
        $response = $this->ews->DeleteItem($request);
        $response_messages = $response->ResponseMessages->DeleteItemResponseMessage;
        foreach ($response_messages as $response_message) {
            $message = $response_message->MessageText;
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $code = $response_message->ResponseCode;
                return array("result"=>"error","message"=>$message);
            }
            return array("result"=>"success");
        }

    }


    public function findEvents($start=null,$end=null){

        if($start == null && $end == null){
            $start = date('c', strtotime('-1 year'));
            $end = date('c', strtotime('+1 year'));
        }else if($start != null && $end == null){
            $end = date('c', strtotime('+2 year', $start));
            $start = date('c', $start);
        }else if($start == null && $end != null){
            $start = date('c', strtotime('-2 year', $end));
            $end = date('c', $end);
        }else{
            $start = date('c', $start);
            $end = date('c', $end);
        }
        $request = new FindItemType();
        $request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();

            // Return all event properties.
        $request->ItemShape = new ItemResponseShapeType();
        $request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;

        $folder_id = new DistinguishedFolderIdNameType();
        $folder_id->Id = DistinguishedFolderIdNameType::CALENDAR;
        $request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;
        if($this->version <= Client::VERSION_2010) $request->Traversal = ItemQueryTraversalType::SHALLOW;
        $request->CalendarView = new CalendarViewType();
        $request->CalendarView->StartDate = $start;
        $request->CalendarView->EndDate = $end;

        $response = $this->ews->FindItem($request);

            // Iterate over the results, printing any error messages or event ids.
        $response_messages = $response->ResponseMessages->FindItemResponseMessage;
        foreach ($response_messages as $response_message) {
                // Make sure the request succeeded.
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $code = $response_message->ResponseCode;
                $message = $response_message->MessageText;
                return false;
            }
            return $this->processResponse($response, true);
        }            
    }



    private function processResponse($response, $isFind = false){

        if(!$isFind){
            $events = array();
            $i = 0;
            $response_messages = $response->ResponseMessages->GetItemResponseMessage;

            foreach ($response_messages as $response_message) {
                // Make sure the request succeeded.
                if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                    return false;
                }
                foreach ($response_message->Items->CalendarItem as $item) {

                 $events[$i] = $this->standardEventArray();

                 if($item->Categories->String){
                    if(is_array($item->Categories->String)){
                       $events[$i]['category'] =$item->Categories->String[0];
                   }else{
                       $events[$i]['category'] =$item->Categories->String;
                   }
               }else{
                $events[$i]['category'] = "Meeting";
                        }// if-else
                        if($events[$i]['category'] === false){
                            $events[$i]['category'] = "dontsync";
                        }
                        $events[$i]['id'] = $item->ItemId->Id;
                        $events[$i]['changeKey'] = $item->ItemId->ChangeKey;
                        $events[$i]['subject'] = $item->Subject;
                        $events[$i]['location'] = $item->Location;
                        $events[$i]['start'] = $item->Start;
                        $events[$i]['end'] = $item->End;
                        $events[$i]['importance'] = $item->Importance;
                        $events[$i]['sensitivity'] = $item->Sensitivity;
                        $events[$i]['allday'] = $item->IsAllDayEvent;
                        $events[$i]['recurrence'] = $item->IsRecurring;
                        $events[$i]['body'] = $item->Body->_;
                        $i++;
                    }
                }

            }else{
                $events = array();
                $i = 0;
                $response_messages = $response->ResponseMessages->FindItemResponseMessage;
                foreach ($response_messages as $response_message) {
                // Make sure the request succeeded.
                    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                        return false;
                    }
                    if(is_array($response_message->RootFolder->Items->CalendarItem)){ 
                        foreach ($response_message->RootFolder->Items->CalendarItem as $item) {                         
                            $events[$i] = $this->standardEventArray();
                            $events[$i]['id'] = $item->ItemId->Id;
                            $events[$i]['changeKey'] = $item->ItemId->ChangeKey;
                            if($event->Categories->String){
                                $events[$i]['category'] = $item->Categories->String;
                            }else{
                                $events[$i]['category'] = "Meeting";
                            }// if-else
                            $i++;
                        }//foreach
                    }else{
                        $event = $response_message->RootFolder->Items->CalendarItem;
                        $events[0] = $this->standardEventArray(true);
                        $events[0]['id'] = $event->ItemId->Id;
                        $events[0]['changeKey'] = $event->ItemId->ChangeKey;
                        
                        if($event->Categories->String){
                            $events[0]['category'] = $event->Categories->String;
                        }else{
                            $events[0]['category'] = "Meeting";
                        }// if-else    
                        if($events[0]['category'] === false){
                            $events[0]['category'] = "dontsync";
                        }
                    }// if-else

            }//foreach
        }// if-else
        return $events;
    }//processResponse


    private function getTimezoneForUser(){
        return 'UTC';
    }


    public function standardEventArray($idOnly = false){
        if($idOnly) return array("id" => "", "changeKey" => "");
        return array(
            "id" => "",
            "changeKey" => "",
            "subject" => "",
            "location" => "",
            "start" => "",
            "end" => "",
            "importance" => "Normal",
            "sensitivity" => "Normal",
            "allday" => false,
            "category" => "Meeting",
            "body" => "",
            "recurrence" => false
            );
    }//standardEventArray





    public function addCalendarEvent($updates, $allday = false, $bodyType="Text", $attendees = array(), $on_behalf=null){
        //Building the request
        $request = new CreateItemType();
        $request->SendMeetingInvitations = CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;
        $request->SavedItemFolderId->DistinguishedFolderId->Id = DistinguishedFolderIdNameType::CALENDAR;
        $request->Items = new NonEmptyArrayOfAllItemsType();
        $request->Items->CalendarItem = new CalendarItemType();
        $request->Items->CalendarItem->ReminderIsSet = false;
        
        $request->Items->CalendarItem->Importance = new ImportanceChoicesType();
        $request->Items->CalendarItem->Importance->_ = $updates['importance'];
        
        $request->Items->CalendarItem->Sensitivity = new SensitivityChoicesType();
        $request->Items->CalendarItem->Sensitivity->_ = $updates['sensitivity'];

        $request->Items->CalendarItem->Body = new BodyTypeType();
        $request->Items->CalendarItem->Body->BodyType = $bodyType;
        
        if($on_behalf)
            $request->SavedItemFolderId->DistinguishedFolderId->Mailbox->EmailAddress = $on_behalf;

        $request->Items->CalendarItem->Subject = html_entity_decode($updates['subject'], ENT_QUOTES, 'UTF-8');
        /*
        $request->Items->CalendarItem->MeetingTimeZone->BaseOffset = $this->BaseOffset;
        $request->Items->CalendarItem->MeetingTimeZone->Daylight->Offset = $this->Offset;
        $request->Items->CalendarItem->MeetingTimeZone->Daylight->Time = $this->DaylightTime;
        $request->Items->CalendarItem->MeetingTimeZone->Standard->Offset = $this->StandardOffset;
        $request->Items->CalendarItem->MeetingTimeZone->Standard->Time = $this->StandardTime;
        $request->Items->CalendarItem->MeetingTimeZone->TimeZoneName = $this->TimeZoneName;*/
        if($updates['start'])
            $request->Items->CalendarItem->Start = $updates['start'];
        if($updates['end'])
            $request->Items->CalendarItem->End = $updates['end'];
        //making this an all day event
        $request->Items->CalendarItem->IsAllDayEvent = $allday;
        $request->Items->CalendarItem->LegacyFreeBusyStatus = 'Busy';
        $request->Items->CalendarItem->Location = $updates['location'];
        $request->Items->CalendarItem->Categories->String = "[vTiger] ".$updates['category'];
        $request->Items->CalendarItem->Body->_ = html_entity_decode($updates['body'], ENT_QUOTES, 'UTF-8');
        for($i = 0; $i < count($attendees); $i++){
            $request->Items->CalendarItem->RequiredAttendees->Attendee[$i]->Mailbox->EmailAddress = $attendees[$i];
        }
        //make the call
        
        try{
            $response = $this->ews->CreateItem($request);
            if($response === false){
                return false;
            }else{
             if(is_array($response->ResponseMessages->CreateItemResponseMessage)){
                return array("id" => $response->ResponseMessages->CreateItemResponseMessage[0]->Items->CalendarItem[0]->ItemId->Id,
                    "changeKey" => $response->ResponseMessages->CreateItemResponseMessage[0]->Items->CalendarItem[0]->ItemId->ChangeKey,
                    'response' =>$response
                    );
            }else{
                return array("id" => $response->ResponseMessages->CreateItemResponseMessage->Items->CalendarItem->ItemId->Id,
                    "changeKey" => $response->ResponseMessages->CreateItemResponseMessage->Items->CalendarItem->ItemId->ChangeKey,
                    'response' =>$response
                    );
            }
            }// if-else
        }catch(Exception $e){
            $response = false;
            $utils = new exchangeSyncITEMUtils();
            $utils->error_handler($e);
        }// try-catch
        
        return false;
    }



    function checkServices(){
        return $this->listFolders(DistinguishedFolderIdNameType::CALENDAR,"");
    }




    public function listFolders($type, $on_behalf, $depth = "SHALLOW"){ 
        // start building the find folder request
        $request = new FindFolderType();
        $request->Traversal = FolderQueryTraversalType::SHALLOW;
        $request->FolderShape = new FolderResponseShapeType();
        $request->FolderShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;

        // configure the view
        $request->IndexedPageFolderView = new IndexedPageViewType();
        $request->IndexedPageFolderView->BasePoint = 'Beginning';
        $request->IndexedPageFolderView->Offset = 0;

        // set the starting folder as the inbox
        $request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();
        $request->ParentFolderIds->DistinguishedFolderId = new DistinguishedFolderIdType();
        $request->ParentFolderIds->DistinguishedFolderId->Id = $type;//constant("EWSType_DistinguishedFolderIdNameType::".$type);
        if($on_behalf)
            $request->ParentFolderIds->DistinguishedFolderId->Mailbox->EmailAddress = $on_behalf;
        // make the actual call
        try{
            $response='SUCCESS';
            $out = print_r($this->ews->FindFolder($request),true);
            if (strpos($out, 'CalendarFolder') == false) {
                $response='CALENDAR_NOT_FOUND';
            }
            file_put_contents("ExchangeSync.log", $out);
        }catch(Exception $e){
            $message = $e->getMessage();
            file_put_contents("ExchangeSync.log", $message);
            if (strpos($message, '401') !== false) {
                $response='401';
            }else{
               $response="FAILED : $message";
           }
       }
       return $response;
   }


}//ExchangeConnector