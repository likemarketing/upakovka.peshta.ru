<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", GetMessage('Печать вплавляемой этикетки в Пеште. Соответствие стандартам, жесткие параметры по срокам и качеству, удобная доставка по России и странам СНГ'));
$APPLICATION->SetPageProperty("keywords", GetMessage('iml печать, iml этикетка, вплавляемая этикетка, вплавляемая этикетка iml, инмолд этикетка'));
$APPLICATION->SetPageProperty("title", GetMessage('Печать IML этикеток для производителей тары и упаковки'));
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle(GetMessage('Пешта'));
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick-theme.css">
<link href="<?=SITE_TEMPLATE_PATH?>/style/style-new.css" rel="stylesheet">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/circle.css">
<?$APPLICATION->IncludeComponent(
	"growtag:news.detail",
	".default",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "864",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "115",
		"IBLOCK_TYPE" => "services",
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
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE_TEXT" => "",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<section class="index-section-2 iml-section-2">
    <div class="container">
        <div class="row justify-content-center">
            <h2>IML as a driver of your business</h2>
        </div>
        <div class="index-section__description">
            How IML technology reduces costs and boosts revenues of container & packaging manufacturers:
        </div>
        <div class="row">
            <div class="set-size charts-container d-flex">
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-15 style-2 d-flex">
                        <span class="label">for<br/>10-15%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        fewer polymer raw materials
                    </div>
                </div>
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-50 style-2 d-flex">
                        <span class="label">for 50%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        less warehousing area
                    </div>
                </div>
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-20 style-2 d-flex">
                        <span class="label">for 20%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        fewer process losses
                    </div>
                </div>
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-60 style-2 d-flex">
                        <span class="label">for 60%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        shorter production cycle
                    </div>
                </div>
            </div>
            <div class="row justify-content-center index-section-2__bottom">
                *According to analytical research by WestRock and Packing Matters Pulse
            </div>
        </div>
</section>
<section class="index-section-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section-3__title">
                <h2>
                    What is <span>IML?<span>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="index-section-3__content">
                <div class="row justify-content-center align-items-center">
                    <div class="content-img col-md-5">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/images/fiesta.png">
                    </div>
                    <div class="content-text col-md-7">
                        This means an in-mold label made using injection-molding technology. As a result of injection molding, it forms one whole unit with the packaging material. IML labels do not deform or fade, they are resistant to moisture and mechanical impacts during transportation, storage and shelf display.<br>
                        Today it is one of top-of-the-line, usable and versatile types of in-mold labels.
                    </div>
                </div>
                <div class="row justify-content-center align-items-center justify-content-between mt-5">
                    <div class="d-flex content-item">
                        <div class="content-item__img">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/Ellipse1.png" alt="" width="160">
                        </div>
                        <div class="content-item__title">
                            Any shapes<br> & colors
                        </div>
                    </div>
                    <div class="d-flex content-item">
                        <div class="content-item__img">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/Ellipse2.png" alt="" width="160">
                        </div>
                        <div class="content-item__title">
                            With inscriptions <br/>
                            & images
                        </div>
                    </div><div class="d-flex content-item">
                        <div class="content-item__img">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/Ellipse3.png" alt="" width="160">
                        </div>
                        <div class="content-item__title">
                            For square, <br/>rectangular,<br/> & oval shapes
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "color_block_3col",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "116",
        "IBLOCK_TYPE" => "services",
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
        "PAGER_TITLE" => GetMessage('Новости'),
        "PARENT_SECTION" => "95",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("COLOR","ICON",""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "TITLE_TEXT" => 'Why IML technology is destined to improve your customer loyalty and lure new customers:',
        "DESC_TEXT" => 'In-mold labels are used in the food industry, for pharmaceuticals, construction materials, fertilizers, household and garden goods. This is a powerful marketing and advertising tool helping to strengthen brand positions, grab a wider market share and boost sales.'
    )
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "chess",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "117",
        "IBLOCK_TYPE" => "services",
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
        "PAGER_TITLE" => GetMessage('Новости'),
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("COLOR","POSITION",""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "TITLE_TEXT" => GetMessage('Pros of IML labels for you'),
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "in_facts",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "118",
        "IBLOCK_TYPE" => "services",
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
        "PAGER_TITLE" => GetMessage('Новости'),
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("COLOR","ICON",""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "TITLE_TEXT" => 'Learn more about IML',
    )
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "img_and_list_block",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "119",
        "IBLOCK_TYPE" => "services",
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
        "PAGER_TITLE" => GetMessage('Новости'),
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "TITLE_TEXT" => 'Labels that highlight the exclusivity of your product',
        "DESC_TEXT" => 'Through testing, we adapt IML printing to your business and product',
    )
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "peshta_feedback_index",
    array(
		"FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => GetMessage('Заявка на тест или пробный заказ'), // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => 542, // ID типа покупателя
        "TITLE_TEXT" => GetMessage('Оставьте заявку на тест или пробный заказ, и наш менеджер свяжется с вами в ближайшие 30 минут, чтобы уточнить детали'),
        "DESC_TEXT" => "",
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
        "USER_CONSENT_IS_LOADED" => "N"
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "index_works_slider",
    array(
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
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
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
        "IBLOCK_ID" => "120",
        "IBLOCK_TYPE" => "-",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MEDIA_PROPERTY" => "",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "200",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => GetMessage('Каталог'),
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "IMAGES",
            2 => "",
        ),
        "SEARCH_PAGE" => "/search/",
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SLIDER_PROPERTY" => "",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "Y",
        "TEMPLATE_THEME" => "blue",
        "USE_RATING" => "N",
        "USE_SHARE" => "N",
        "COMPONENT_TEMPLATE" => "index_works_slider",
        "TITLE_TEXT" => GetMessage('Наши работы'),
        "DESC_TEXT" => 'In-mold labels are used in the food industry, for pharmaceuticals, construction materials, fertilizers, household and garden goods',
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "index_stand",
    Array(
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
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "121",
        "IBLOCK_TYPE" => "catalog",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MEDIA_PROPERTY" => "",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => GetMessage('Каталог'),
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "PICTURES",
        ),
        "SEARCH_PAGE" => "/search/",
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SLIDER_PROPERTY" => "",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "Y",
        "TEMPLATE_THEME" => "blue",
        "USE_RATING" => "N",
        "USE_SHARE" => "N",
        "TITLE_TEXT" => 'European quality & production standards',
        "DESC_TEXT" => 'Why big manufacturers apply to us for in-mold labels'
    )
);?>
<section class="index-section-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2>How we work</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-3 p-0">
                <ul class="timeline">
                    <li>
                        <h3>Get your application</h3>
                        <p>We immediately transfer your request to the sales department manager.</p>
                    </li>
                    <li>
                        <h3>Clarification of details</h3>
                        <p>Our manager contacts you within 30 minutes and clarifies all the details of production, product and your order. End-to-end process support & consulting.</p>
                    </li>
                    <li>
                        <h3>Testing</h3>
                        <p>We run small-batch tests to demonstrate the quality of materials and printing, how labels behave when mold in packaging and during product filling.</p>
                    </li>
                    <li>
                        <h3>Our commercial offer</h3>
                        <p>You get the offer of cooperation that suits you and your customers best</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <a href="#" uk-toggle="target: #callback-modal" class="red-button" style="width: auto">Place an order</a>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent("growtag:main.feedback", "peshta_iml_modal", Array(
    "FROM" => "upakovka.peshta.ru",
        "FROM_FIELD_ID" => "UF_CRM_1614519609",
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142",
        "DEAL_TITLE" => 'Заявка IML (Модальное окно)',
        "FORM" => 'Заявка IML',
        "CATEGORY_ID" => "26",
        "ASSIGNED_BY_ID" => "18",
        "STAGE_ID" => "C26:NEW",
        "USERTYPE_FIELD_LIST_ID" => "",
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => GetMessage('Заявка успешно отправлена. Ожидайте звонка наших менеджеров.'), // Сообщение, выводимое пользователю после отправки
        "EMAIL_TO" => "",   // E-mail, на который будет отправлено письмо
        "REQUIRED_FIELDS" => array( // Обязательные поля для заполнения
            0 => "NAME",
        ),
        "EVENT_MESSAGE_ID" => array(    // Почтовые шаблоны для отправки письма
            0 => "7",
        ),
        "COMPONENT_TEMPLATE" => "peshta_iml_modal",
        "USER_CONSENT" => "N",  // Запрашивать согласие
        "USER_CONSENT_ID" => "0",   // Соглашение
        "USER_CONSENT_IS_CHECKED" => "Y",   // Галка по умолчанию проставлена
        "USER_CONSENT_IS_LOADED" => "N",    // Загружать текст сразу
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "index_clients",
    Array(
        "TITLE_TEXT" => GetMessage('С нами уже сотрудничают'),
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
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "88",
        "IBLOCK_TYPE" => "catalog",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MEDIA_PROPERTY" => "",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => GetMessage('Каталог'),
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "PICTURES",
        ),
        "SEARCH_PAGE" => "/search/",
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SLIDER_PROPERTY" => "",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "Y",
        "TEMPLATE_THEME" => "blue",
        "USE_RATING" => "N",
        "USE_SHARE" => "N"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "peshta_feedback_footer",
    array(
		"FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => GetMessage('Заявка на подборку примеров работ'), // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => 542, // ID типа покупателя
        "TITLE_TEXT" => GetMessage('Хотите увидеть примеры работ в вашем бизнес-сегменте?'),
        "DESC_TEXT" => GetMessage('Подберем и вышлем на адрес вашей электронной почты!'),
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => GetMessage('Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.'),
        "EMAIL_TO" => "",
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "7",
        ),
        "COMPONENT_TEMPLATE" => "peshta_feedback_footer",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N"
    ),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
