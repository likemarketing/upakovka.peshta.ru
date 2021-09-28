<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
    <?if(!empty($arItem['PROPERTIES']['MODAL_TIME']['VALUE'])):?>
    <?$APPLICATION->IncludeComponent("growtag:main.feedback", "peshta_callback_modal_NEW_timer", Array(
        "FROM" => "upakovka.peshta.ru",
        "FROM_FIELD_ID" => "UF_CRM_1614519609",
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142",
        "DEAL_TITLE" => "Заявка на тест или пробный заказ (Модальное окно)",
        "CATEGORY_ID" => "26",
        "ASSIGNED_BY_ID" => "18",
        "STAGE_ID" => "C26:NEW",
        "USERTYPE_FIELD_LIST_ID" => "",
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => $arItem['PROPERTIES']['MODAL_SUCCESS_MESSAGE']['VALUE'],	// Сообщение, выводимое пользователю после отправки
        "MODAL_TITLE" => $arItem['PROPERTIES']['MODAL_TITLE']['VALUE'],
        "MODAL_TIME" => $arItem['PROPERTIES']['MODAL_TIME']['VALUE'],
        "MODAL_IMAGE" => $arItem['PROPERTIES']['IMAGE']['VALUE'],
        "MODAL_PAGE" => $arItem['PROPERTIES']['PAGE']['VALUE'],
        "EMAIL_TO" => "",	// E-mail, на который будет отправлено письмо
        "REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
            0 => "NAME",
        ),
        "EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
            0 => "7",
        ),
        "EVENT_MESSAGE_ID_OUT" => "17",
        "COMPONENT_TEMPLATE" => "peshta_callback_modal",
        "USER_CONSENT" => "N",	// Запрашивать согласие
        "USER_CONSENT_ID" => "0",	// Соглашение
        "USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
        "USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
    ),
        false
    );?>
        <?endif;?>
<?endforeach;?>