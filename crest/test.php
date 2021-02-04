<?php
include_once(__DIR__."/crest.php");

// put an example below
echo '<PRE>';
print_r(CRest::call(
    'crm.deal.add',
    [
        'fields' =>[
             "TITLE" => "Плановая продажа",
            "TYPE_ID" => "GOODS",
            "STAGE_ID" => "NEW",
            "COMPANY_ID" => 3,
            "CONTACT_ID" => 3,
            "OPENED" => "Y",
            "ASSIGNED_BY_ID" => 1,
            "PROBABILITY" => 30,
            "CURRENCY_ID" => "RUB",
            "OPPORTUNITY" => 5000,
            "CATEGORY_ID" => 5,
            "BEGINDATE" => date('Y-m-d'),
            "CLOSEDATE" => date("Y-m-d", mktime(0, 0, 0, date("m")+1, date("d"),   date("Y"))),
        ],
        'params' => [ "REGISTER_SONET_EVENT" => "Y" ],
    ])
);

echo '</PRE>';
?>
