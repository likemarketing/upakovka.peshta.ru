<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

include_once($_SERVER["DOCUMENT_ROOT"]."/crest/requester.php");

CModule::IncludeModule("iblock");

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

if (!function_exists('parseQueryUTMParams')) {
    function parseQueryUTMParams($query)
    {
        $utmparams = [
            'utm_source', 'utm_campaign', 'utm_content', 'utm_term',
            'keyword', 'q', 'query', 'text', 'words',
        ];

        $crawlers = [
            'yandex.ru', 'rambler.ru', 'google.ru', 'google.com',
            'mail.ru', 'bing.com', 'qip.ru',
        ];

        $out = $params = [];

        if (preg_match('/\?(.+)$/', urldecode($query), $parts)) {
            foreach ($crawlers as $crawler) {
                if (stristr($parts[1], $crawler)) {
                    $out['source'] = $crawler;
                }
            }

            parse_str($parts[1], $params);

            foreach ($utmparams as $name) {
                if (!empty($params[$name])) {
                    $isCp1251 = md5($params[$name]) == md5(iconv('UTF-8', 'UTF-8', $params[$name]));

                    $out[$name] = $params[$name];

                    if ($isCp1251) {
                        $out[$name] = iconv('cp1251', 'utf-8', $out[$name]);
                    }
                }
            }

            if (!empty($out)) {
                return $out;
            }
        }

        return null;
    }
}

if (!function_exists('getUTMParamsFromRequest')) {
    function getUTMParamsFromRequest()
    {
        $sections = [
            'Параметры перехода' => $_POST['referer_query'] ?? '',
            'Параметры визита'   => $_SERVER['HTTP_REFERER'] ?? '',
        ];

        $out = '';

        foreach ($sections as $sectionname => $query) {
            if (empty($query) || !is_string($query)) {
                continue;
            }

            $params = parseQueryUTMParams($query);

            if (empty($params)) {
                continue;
            }

            $rows = '';
            foreach ($params as $key => $value) {
                $rows .= $key . ': ' . htmlspecialchars($value) . "\n";
            }

            $out .= $sectionname . ':' . "\n" . $rows . "\n\n";
        }

        return $out;
    }
}

if (!function_exists('getRefererPage')) {
    function getRefererPage()
    {
        if (empty($_SERVER['HTTP_REFERER'])) {
            return '';
        }

        $referer = $_SERVER['HTTP_REFERER'];

        if (is_string($referer)) {
            return htmlspecialcharsbx(preg_replace('/[\?#].+$/', '', $referer));
        }

        return '';
    }
}

$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());

$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");
$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '')
    $arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if($arParams["EMAIL_TO"] == '')
    $arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
    $arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{
    $arResult["ERROR_MESSAGE"] = array();
    if(check_bitrix_sessid())
    {
        if(empty($arParams["REQUIRED_FIELDS"]) || !in_array("NONE", $arParams["REQUIRED_FIELDS"]))
        {
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) && strlen($_POST["user_name"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_NAME");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) && strlen($_POST["user_phone"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_PHONE");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])) && strlen($_POST["user_email"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_EMAIL");
        }
        if($arParams["USE_CAPTCHA"] == "Y")
        {
            $captcha_code = $_POST["captcha_sid"];
            $captcha_word = $_POST["captcha_word"];
            $cpt = new CCaptcha();
            $captchaPass = COption::GetOptionString("main", "captcha_password", "");
            if (strlen($captcha_word) > 0 && strlen($captcha_code) > 0)
            {
                if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
                    $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTCHA_WRONG");
            }
            else
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTHCA_EMPTY");

        }
        // reCAPTCHA
        if(!empty($_POST['recaptcha_response'])){
            $recaptcha_key = '6LeGUUQdAAAAAHb5w8QvtNjM2skD5Ajm34JxmSgb';

            $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptcha_params = [
                'secret' => $recaptcha_key,
                'response' => $_POST['recaptcha_response'],
                'remoteip' => $_SERVER['REMOTE_ADDR'],
            ];

            $ch = curl_init($recaptcha_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $recaptcha_params);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($ch);
            if (!empty($response)) {
                $decoded_response = json_decode($response);
            }

            $recaptcha_success = false;

            if ($decoded_response && $decoded_response->score > 0) {
                $recaptcha_success = $decoded_response->score;
            } else {
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTCHA_WRONG");
            }
        } else {
            $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTHCA_EMPTY");
        }

        if(empty($arResult["ERROR_MESSAGE"]))
        {
            if($_FILES["user_select"]["error"][0] == 0 && is_array($_FILES["user_select"])){
                $filePath = $_FILES["user_select"]['tmp_name'][0];
                $fileId = CFile::SaveFile(
                    array(
                        "name" => $_FILES["user_select"]["name"][0],           // имя файла, как оно будет в письме
                        "size" => $_FILES["user_select"]["size"][0],   // работает и без указания размера
                        "tmp_name" => $filePath,            // собственно файл
                        // "type" => "",                    // тип, не ясно зачем
                        "old_file" => "0",                  // ID "старого" файла
                        "del" => "N",                       // удалять прошлый?
                        "MODULE_ID" => "",                  // имя модуля, работает и так
                        "description" => "",                // описание
                        // "content" => "содержимое файла"  // если указать, то вместо файла будет указанный текст
                    ),
                    'mails',  // относительный путь от upload, где будут храниться файлы
                    false,    // ForceMD5
                    false     // SkipExt
                );
            }

            if(isset($_POST["user_vol"])){
                $authorVolStr = "Тираж: ".htmlspecialcharsbx($_POST["user_vol"]);
            }

            $arFields = Array(
                "AUTHOR" => htmlspecialcharsbx($_POST["user_name"]),
                "AUTHOR_PHONE" => htmlspecialcharsbx($_POST["user_phone"]),
                "EMAIL_TO" => $arParams["EMAIL_TO"],
                "AUTHOR_EMAIL" => htmlspecialcharsbx($_POST["user_email"]),
                "AUTHOR_VOL" => $authorVolStr,
                "MESSAGE" => htmlspecialcharsbx($_POST["user_msg"]),
                "FORM" => htmlspecialcharsbx($arParams["FORM"] ?? $arParams['DEAL_TITLE']),
                "UTM_PARAMS_TABLE" => getUTMParamsFromRequest(),
                "REFERER" => getRefererPage(),
            );

            if (CModule::IncludeModule('subscribe') && !empty($_POST['user_email']) && isset($_POST['SUBSCRIBE'])) {

                $email = htmlspecialcharsbx($_POST["user_email"]);

                $subscribeFields = array(
                    "USER_ID" => ($USER->IsAuthorized()? $USER->GetID():false),
                    "FORMAT" => "text",
                    "EMAIL" => $email,
                    "ACTIVE" => "Y",
                    "CONFIRMED" => "Y",
                    "SEND_CONFIRM" => "N",
                    "RUB_ID" => array($arParams["RUB_ID"])
                );

                $subscr = new CSubscription;
                $ID = $subscr->Add($subscribeFields);

                if($ID > 0) {
                    CSubscription::Authorize($ID);
                }
            }

            if(!empty($arParams["EVENT_MESSAGE_ID"])){
                foreach($arParams["EVENT_MESSAGE_ID"] as $v){
                    if(IntVal($v) > 0) {
                        CEvent::SendImmediate($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($v), array($fileId));
                    }
                }
            } else {
                CEvent::SendImmediate($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", "", array($fileId));
            }

            if(isset($arParams["EVENT_MESSAGE_ID_OUT"]) && !empty($arParams["EVENT_MESSAGE_ID_OUT"])) {
                $loopbackFileId = null;

                if (!empty($arParams['EVENT_OUT_ATTACHMENTS_SOURCE_IBLOCK_ID']) && !empty($_POST['RESOURCE_ID']) && is_numeric($_POST['RESOURCE_ID'])) {
                    $query = CIBlockElement::GetProperty($arParams['EVENT_OUT_ATTACHMENTS_SOURCE_IBLOCK_ID'], $_POST['RESOURCE_ID'], [], ["CODE" => $arParams["EVENT_OUT_ATTACHMENT_PROPERTY_NAME"]]);

                    $prop = $query->Fetch();

                    if ($prop && !empty($prop['VALUE'])) {
                        $loopbackFileId = [$prop['VALUE']];
                    }
                }

                CEvent::SendImmediate($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($arParams["EVENT_MESSAGE_ID_OUT"]), $loopbackFileId);
            }

            $_SESSION["MF_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
            $_SESSION["MF_PHONE"] = htmlspecialcharsbx($_POST["user_phone"]);
            $_SESSION["MF_EMAIL"] = htmlspecialcharsbx($_POST["user_email"]);

            CFile::Delete($fileId);

            try {
                /**************************
                 * Владелец бренда (id свойства) - 540
                 * Изготовитель тары (id свойства) - 542
                 *************************/
                $newLead = new B24Requester(
                    htmlspecialcharsbx($_POST["user_name"]), // Входящее имя пользователя
                    htmlspecialcharsbx($_POST["user_phone"]), // Входящий телефон пользователя
                    htmlspecialcharsbx($_POST["user_email"]), // Входящий email пользователя
                    array(
                        "FROM" => $arParams["FROM"], // Источник сделки
                        "FROM_FIELD_ID" => $arParams["FROM_FIELD_ID"], // ID пользовательского поля "Источник"
                        "USERTYPE_FIELD_ID" => $arParams["USERTYPE_FIELD_ID"], // ID пользовательского поля "Тип покупателя"
                        "TITLE" => $arParams["DEAL_TITLE"], // Название сделки
                        "CATEGORY_ID" => $arParams["CATEGORY_ID"], // ID Направления (IML - 26)
                        "ASSIGNED_BY_ID" => $arParams["ASSIGNED_BY_ID"], // ID ответственного пользователя
                        "STAGE_ID" => $arParams["STAGE_ID"], // Стадия сделки
                        "USERTYPE_FIELD_LIST_ID" => $arParams["USERTYPE_FIELD_LIST_ID"] // ID типа покупателя
                    )
                );
                $newLead->pushDeal();
            } catch (Throwable $e) {
                // log
            }

            LocalRedirect($APPLICATION->GetCurPageParam("success=".$arResult["PARAMS_HASH"]."&utm_source=upakovka_peshta_ru&utm_campaign=".$APPLICATION->GetCurPage()."&utm_medium=site", Array("success", "utm_source", "utm_campaign", "utm_medium")));
        }

        $arResult["MESSAGE"] = htmlspecialcharsbx($_POST["user_msg"]);
        $arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
        $arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_POST["user_phone"]);
    }
    else
        $arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
}
elseif($_REQUEST["success"] == $arResult["PARAMS_HASH"])
{
    $arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}

if(empty($arResult["ERROR_MESSAGE"]))
{
    if($USER->IsAuthorized())
    {
        $arResult["AUTHOR_NAME"] = $USER->GetFormattedName(false);
        $arResult["AUTHOR_PHONE"] = '';
    }
    else
    {
        if(strlen($_SESSION["MF_NAME"]) > 0)
            $arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_SESSION["MF_NAME"]);
        if(strlen($_SESSION["MF_PHONE"]) > 0)
            $arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_SESSION["MF_PHONE"]);
        if(strlen($_SESSION["MF_PHONE"]) > 0)
            $arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($_SESSION["MF_EMAIL"]);
    }
}

if($arParams["USE_CAPTCHA"] == "Y")
    $arResult["capCode"] =  htmlspecialcharsbx($APPLICATION->CaptchaGetCode());

$this->IncludeComponentTemplate();
