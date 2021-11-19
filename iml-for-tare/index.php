<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Печать вплавляемой этикетки в Пеште. Соответствие стандартам, жесткие параметры по срокам и качеству, удобная доставка по России и странам СНГ");
$APPLICATION->SetPageProperty("keywords", "iml печать, iml этикетка, вплавляемая этикетка, вплавляемая этикетка iml, инмолд этикетка");
$APPLICATION->SetPageProperty("title", "Печать IML этикеток для производителей тары и упаковки");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Пешта");
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
		"ELEMENT_ID" => "541",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "24",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
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
            <h2>Вплавляемая этикетка как драйвер вашего бизнеса</h2>
        </div>
        <div class="index-section__description">
            Как IML-технология сокращает расходы и увеличивает прибыль производителей тары и упаковки
        </div>
        <div class="row">
            <div class="set-size charts-container d-flex">
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-15 style-2 d-flex">
                        <span class="label">на<br/>10-15%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        сокращается расход
                        полимерного сырья
                    </div>
                </div>
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-50 style-2 d-flex">
                        <span class="label">на 50%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        уменьшаются площади
                        складирования
                    </div>
                </div>
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-20 style-2 d-flex">
                        <span class="label">на 20%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        снижаются технологические потери
                    </div>
                </div>
                <div class="d-flex charts-container__item">
                    <div class="pie-wrapper progress-60 style-2 d-flex">
                        <span class="label">на 60%</span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="style-2__text d-flex">
                        сокращается производственный цикл
                    </div>
                </div>
            </div>
            <div class="row justify-content-center index-section-2__bottom">
                *По данным аналитических исследований компаний WestRock и Packing Matters Pulse
            </div>
        </div>
</section>
<section class="index-section-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section-3__title">
                <h2>
                    Что такое <span>IML-этикетка<span>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="index-section-3__content">
                <div class="row justify-content-center align-items-center">
                    <div class="content-img col-md-5">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/images/fiesta.png" alt="Фиеста">
                    </div>
                    <div class="content-text col-md-7">
                        Это вплавляемая этикетка, изготовленная с помощью
                        технологии injection-moulding. В результате литья под
                        давлением она образует единое целое с материалом
                        упаковки. IML-этикетка не деформируется, не стирается, устойчива к влаге и механическим повреждениям при транспортировке, складировании
                        и выкладке на полки.<br/><br/>
                        На сегодняшний день это одна из самых
                        современных, практичных и многофункциональных
                        видов вплавляемой этикетки.
                    </div>
                </div>
                <div class="row justify-content-center align-items-center justify-content-between mt-5">
                    <div class="d-flex content-item">
                        <div class="content-item__img">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/Ellipse1.png" alt="" width="160">
                        </div>
                        <div class="content-item__title">
                            Любой формы и<br/>
                            цвета
                        </div>
                    </div>
                    <div class="d-flex content-item">
                        <div class="content-item__img">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/Ellipse2.png" alt="" width="160">
                        </div>
                        <div class="content-item__title">
                            С надписями<br/>
                            и изображениями
                        </div>
                    </div><div class="d-flex content-item">
                        <div class="content-item__img">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/Ellipse3.png" alt="" width="160">
                        </div>
                        <div class="content-item__title">
                            Для квадратной,<br/>прямоугольной<br/>и овальной тары
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
        "IBLOCK_ID" => "25",
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
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "85",
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
        "TITLE_TEXT" => "Почему IML-технология повысит лояльность постоянных и привлечет новых клиентов",
        "DESC_TEXT" => "Вплавляемая этикетка используется в пищевой промышленности, фармацевтике, при
                производстве строительных материалов, удобрений, товаров для дома и сада. Это мощный
                маркетинговый и рекламный инструмент, позволяющий упрочить позицию бренда, охватить
                более широкий спектр рынка и обеспечить успешную реализацию продукции."
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
        "IBLOCK_ID" => "28",
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
        "PAGER_TITLE" => "Новости",
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
        "TITLE_TEXT" => "Какие преимущества дает вам использование IML-этикеток",
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
        "IBLOCK_ID" => "27",
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
        "PAGER_TITLE" => "Новости",
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
        "TITLE_TEXT" => "Типография «ПЕШТА» в цифрах и фактах",
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
        "IBLOCK_ID" => "30",
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
        "PAGER_TITLE" => "Новости",
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
        "TITLE_TEXT" => "Этикетки, подчеркивающие исключительность вашего продукта",
        "DESC_TEXT" => "С помощью тестов оптимизируем печать IML-этикетки под ваше производство и продукт",
    )
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "peshta_feedback_index",
    array(
		"FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => "Заявка на тест или пробный заказ", // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => 542, // ID типа покупателя
        "TITLE_TEXT" => "Оставьте заявку на тест или пробный заказ, и наш менеджер свяжется с вами в ближайшие 30
                    минут, чтобы уточнить детали",
        "DESC_TEXT" => "",
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
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
        "IBLOCK_ID" => "16",
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
        "PAGER_TITLE" => "Каталог",
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
        "TITLE_TEXT" => "Наши работы",
        "DESC_TEXT" => "Вплавляемая этикетка используется в пищевой промышленности, фармацевтике, при производстве строительных материалов, удобрений, товаров для дома и сада."
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
        "IBLOCK_ID" => "31",
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
        "PAGER_TITLE" => "Каталог",
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
        "TITLE_TEXT" => "Европейское качество и стандарты производства",
        "DESC_TEXT" => "Почему крупные  производители продукции заказывают вплавляемые этикетки в типографии «ПЕШТА»"
    )
);?>
<section class="index-section-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2>Как мы работаем</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-3 p-0">
                <ul class="timeline">
                    <li>
                        <h3>Получение заявки</h3>
                        <p>Полученную заявку мы сразу передаём менеджеру отдела продаж для дальнейшего взаимодействия.</p>
                    </li>
                    <li>
                        <h3>Уточнение деталей</h3>
                        <p>Наш менеджер связывается с вами в течение 30 минут и уточняет все детали производства, продукта и конкретного заказа. Оказываем полную технологическую поддержку и консультирование.</p>
                    </li>
                    <li>
                        <h3>Проводим тесты</h3>
                        <p>Проводим тестирование на небольших объёмах, чтобы вы могли убедиться в качестве материалов и печати, и посмотрели, как ведет себя этикетка при вплавлении в тару и расфасовке.</p>
                    </li>
                    <li>
                        <h3>Готовим Коммерческое предложение</h3>
                        <p>Отправляем вам оптимальное предложение о сотрудничестве выгодное вам и вашим клиентам</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <a href="#" data-toggle="modal" data-target="#modalUpakovka" class="red-button" style="width: auto">Оставить заявку</a>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "index_clients",
    Array(
        "TITLE_TEXT" => "С нами уже сотрудничают",
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
        "IBLOCK_ID" => "17",
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
        "PAGER_TITLE" => "Каталог",
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
        "DEAL_TITLE" => "Заявка на подборку примеров работ", // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => 542, // ID типа покупателя
        "TITLE_TEXT" => "Хотите увидеть примеры работ в вашем бизнес-сегменте?",
        "DESC_TEXT" => "Подберем и вышлем на адрес вашей электронной почты!",
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
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
