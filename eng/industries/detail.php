<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", GetMessage('Production of packaging for dairy products. Individual packaging solutions, an integrated approach to solving the problems of your business.'));
$APPLICATION->SetPageProperty("keywords", GetMessage('buy packaging dairy products, production of packaging for milk, packaging for dairy products, packaging for dairy products, labels of dairy products, packaging for dairy products manufacturers'));
//$APPLICATION->SetPageProperty("title", GetMessage('Заказать упаковку для косметических средств в Пеште'));
$APPLICATION->SetTitle(GetMessage('Packaging for dairy products'));
$APPLICATION->SetPageProperty('canonical', "https://".$_SERVER['HTTP_HOST'].$APPLICATION->GetCurPage());
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"industries_detail",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "NAME",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "#SITE_DIR#/industries/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_REQUEST["CODE"],
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "89",
		"IBLOCK_TYPE" => "industries",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => GetMessage('Страница'),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "industries_detail"
	),
	false
);?>
<?$APPLICATION->IncludeComponent("growtag:main.feedback", "peshta_feedback_footer_NEW1", Array(
    "FROM" => "upakovka.peshta.ru",
    "FROM_FIELD_ID" => "UF_CRM_1614519609",
    "USERTYPE_FIELD_ID" => "UF_CRM_1614519142",
    "DEAL_TITLE" => GetMessage('Заявка на тест или пробный заказ'),
    "CATEGORY_ID" => "26",
    "ASSIGNED_BY_ID" => "18",
    "STAGE_ID" => "C26:NEW",
    "USERTYPE_FIELD_LIST_ID" => "540",
    "TITLE_TEXT" => GetMessage('Хотите увидеть примеры работ в вашем бизнес-сегменте?'),
    "USE_CAPTCHA" => "N",
    "OK_TEXT" => GetMessage('Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.'),
    "EMAIL_TO" => "",
    "REQUIRED_FIELDS" => array(
        0 => "NAME",
    ),
    "EVENT_MESSAGE_ID" => array(
        0 => "7",
    ),
    "COMPONENT_TEMPLATE" => "peshta_feedback_index",
    "USER_CONSENT" => "N",
    "USER_CONSENT_ID" => "0",
    "USER_CONSENT_IS_CHECKED" => "Y",
    "USER_CONSENT_IS_LOADED" => "N",
),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
