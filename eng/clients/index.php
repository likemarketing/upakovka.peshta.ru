<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Customer reviews");
$APPLICATION->SetPageProperty("keywords", "printing house, izhevsk, business cards, corporate identity, order business cards, packaging, printing, stamps, booklets, printing, numerators, printing for business");
$APPLICATION->SetPageProperty("title", "Buzz");
$APPLICATION->SetTitle("Клиенты");
$APPLICATION->SetPageProperty('canonical', "https://".$_SERVER['HTTP_HOST'].$APPLICATION->GetCurPage());
?>
<div class="wn-banner">
    <div class="uk-container uk-container-large uk-height-1-1 justify-content-center">
        <div class="uk-height-1-1 uk-text-center uk-flex uk-flex-middle">
            <div class="wn-banner__text">
                <h1><?=$APPLICATION->GetProperty("title")?></h1>
                <p>
                    <?=$APPLICATION->GetProperty("description")?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="uk-container uk-container-large">
    <div class="uk-section">
        <h2 class="uk-text-center">Buzz</h2>
        <?$APPLICATION->IncludeComponent("growtag:news.list", "klienty_otzivy_o_nashey_rabote", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DESC_TEXT" => "Подзаголовок",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "139",
            "IBLOCK_TYPE" => "clients",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "200",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "TITLE_TEXT" => "Заголовок",
        ),
            false
        );?>
    </div>
</div>
<div class="bg_gray_dark uk-section">
    <div class="uk-container uk-container-large">
        <div><h2 class="uk-text-center uk-margin-medium-bottom">Our partners</h2></div>
        <?$APPLICATION->IncludeComponent("growtag:news.list", "spisok_klientov", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DESC_TEXT" => "Подзаголовок",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "88",
            "IBLOCK_TYPE" => "newpeshta",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "LINK",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "TITLE_TEXT" => "Заголовок",
        ),
            false
        );?>
    </div>
</div>
<?$APPLICATION->IncludeComponent("growtag:main.feedback", "peshta_feedback_footer_NEW1", Array(
    "FROM" => "upakovka.peshta.ru",
    "FROM_FIELD_ID" => "UF_CRM_1614519609",
    "USERTYPE_FIELD_ID" => "UF_CRM_1614519142",
    "DEAL_TITLE" => "Заявка на тест или пробный заказ",
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
