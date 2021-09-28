<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/crest/crest.php");

class B24Requester {
    protected $userName, $userPhone, $userEmail, $userId, $props = array();

    /**
     * @param string $userName
     * @param string $userPhone
     * @param string $userEmail
     * @param array $props
     *
     * @return void
     */
    public function __construct(string $userName, string $userPhone, string $userEmail, array $props){
        $this->userName = htmlspecialchars($userName);
        $this->userPhone = htmlspecialchars($userPhone);
        $this->userEmail = htmlspecialchars(trim($userEmail));

        if(!empty($props) && is_array($props)){
            $this->props = $props;
        }

        print "<pre>";

        print_r($this->getContactId());

        print "</pre>";
    }

    /**
     * @return mixed boolean or integer
     */
    public function pushDeal(){
        if($this->getContactId() != false && !empty($this->getContactId())){
            $contactId = $this->getContactId();
        } else {
            $contactId = $this->addContact();
        }

        $contactFields = $this->getContactFields($contactId);

        return CRest::call(
            'crm.deal.add',
            [
                'fields' =>[
                    "TITLE" => $this->props['TITLE'],
                    "TYPE_ID" => "SALE",
                    "STAGE_ID" => $this->props['STAGE_ID'],
                    "COMPANY_ID" => $contactFields['result']['COMPANY_ID'],
                    "CONTACT_ID" => $contactFields['result']['ID'],
                    "OPENED" => "Y",
                    "ASSIGNED_BY_ID" => $this->props['ASSIGNED_BY_ID'],
                    "CURRENCY_ID" => "RUB",
                    "OPPORTUNITY" => 0.00,
                    "CATEGORY_ID" => $this->props['CATEGORY_ID'],
                    "IS_NEW" => "Y",
                    $this->props['USERTYPE_FIELD_ID'] => $this->props['USERTYPE_FIELD_LIST_ID'],
                    $this->props['FROM_FIELD_ID'] => $this->props['FROM'],
                    "BEGINDATE" => date('Y-m-d'),
                    "CLOSEDATE" => date("Y-m-d", mktime(0, 0, 0, date("m")+1, date("d"),   date("Y"))),
                ],
                'params' => [ "REGISTER_SONET_EVENT" => "Y" ],
            ]);
    }

    /**
     * @return mixed false or contact id
     */
    protected function addContact(){
        $request = CRest::call(
            "crm.contact.add", array(
                "fields" => array(
                    "NAME" => explode(" ", $this->userName)[0],
                    "SECOND_NAME" => explode(" ", $this->userName)[2],
                    "LAST_NAME" => explode(" ", $this->userName)[1],
                    "OPENED" => "Y",
                    "ASSIGNED_BY_ID" => $this->props['ASSIGNED_BY_ID'],
                    "SOURCE_ID" => "NEW",
                    "UF_CRM_1614526633545" => 1,
                    "EMAIL" => array(
                        array(
                            "VALUE" => $this->userEmail,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    "PHONE" => array(
                        array(
                            "VALUE" => $this->userPhone,
                            "VALUE_TYPE" => "WORK"
                        )
                    )
                ),
                "params" => array(
                    "REGISTER_SONET_EVENT" => "Y"
                )
            )
        );

        $this->userId = $request['result'];
        return $this->userId;
    }

    /**
     * @param int $id
     * @return mixed false or array
     */
    protected function getContactFields(int $id){
        return CRest::call(
            "crm.contact.get", array(
                "id" => $id
            )
        );
    }

    /**
     * @return mixed false or contact id
     */
    protected function getContactId()
    {
        if(empty($this->userId)){
            if(($this->checkContactPhone() != false && !empty($this->checkContactPhone())) || ($this->checkContactEmail() != false && !empty($this->checkContactEmail()))){
                return $this->userId;
            } else {
                return false;
            }
        } else {
            return $this->userId;
        }
    }

    /**
     * @return mixed false or contact id
     */
    protected function checkContactPhone(){
        if(empty($this->userId)){
            $userWithPhone = CRest::call(
                "crm.duplicate.findbycomm", array(
                    "entity_type" => "CONTACT",
                    "type" => "PHONE",
                    "values" => array(
                        trim(preg_replace("/[^0-9]+/", "", $this->userPhone))
                    )
                )
            );
            if(!empty($userWithPhone['result']['CONTACT'][0])){
                $this->userId = $userWithPhone['result']['CONTACT'][0];
                return $this->userId;
            } else {
                return false;
            }
        } else {
            return $this->userId;
        }
    }

    /**
     * @return mixed false or contact id
     */
    protected function checkContactEmail() {
        if(empty($this->userId)){
            $userWithEmail = CRest::call(
                "crm.duplicate.findbycomm", array(
                    "entity_type" => "CONTACT",
                    "type" => "EMAIL",
                    "values" => array($this->userEmail)
                )
            );

            if(!empty($userWithEmail['result']['CONTACT'][0])){
                $this->userId = $userWithEmail['result']['CONTACT'][0];
                return $this->userId;
            } else {
                return false;
            }
        } else {
            return $this->userId;
        }
    }
}