<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы печатаем полиграфию в Ижевске. Оперативная поддержка яркими промо-материалами для роста бизнеса.");
$APPLICATION->SetPageProperty("keywords", "типография, ижевск, визитки, фирменный стиль, заказать визитки, упаковка, печать, штампы, буклеты, полиграфия, нумераторы, полиграфия для бизнеса");
$APPLICATION->SetPageProperty("title", "ПЕШТА - О компании");
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty('canonical', "https://".$_SERVER['HTTP_HOST'].$APPLICATION->GetCurPage());
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick-theme.css">
<link href="<?=SITE_TEMPLATE_PATH?>/style/style-new.css" rel="stylesheet">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/circle.css">
<section class="index-section-1 about-section-1">
    <div class="index-slider">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-7">
                    <div class="slide-title">
                        <h1>О компании</h1>
                    </div>
                    <div class="slide-desc mt-4">
                        ПЕШТА – российский поставщик специальных видов упаковки и упаковочных решений для рынка продуктов питания, косметики и средств по уходу, рынка парфюмерии, а также фармацевтического и парафармацевтического рынков.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index-section-5 about-section-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2>Мы в цифрах</h2>
            </div>
        </div>
        <div class="row index-section__content mt-4">
            <div class="flex-fill content-item">
                <div class="content-item__title">
                    топ-100
                </div>
                <div class="content-item__desc">
                    крупнейших полиграфий России
                </div>
            </div>
            <div class="flex-fill content-item">
                <div class="content-item__title">
                    28
                </div>
                <div class="content-item__desc">
                    лет на рынке
                </div>
            </div>
            <div class="flex-fill content-item">
                <div class="content-item__title">
                    2 500 м2
                </div>
                <div class="content-item__desc">
                    производственных площадей
                </div>
            </div>
        </div>
        <div class="row index-section__content mt-4">
            <div class="flex-fill content-item">
                <div class="content-item__title">
                    70
                </div>
                <div class="content-item__desc">
                    сотрудников
                </div>
            </div>
            <div class="flex-fill content-item">
                <div class="content-item__title">
                    110 млн.
                </div>
                <div class="content-item__desc">
                    декорированных ﻿туб
                </div>
            </div>
            <div class="flex-fill content-item">
                <div class="content-item__title">
                    150 млн.
                </div>
                <div class="content-item__desc">
                    вплавляемых этикеток ежегодно
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index-section-4 about-section-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2>Мы сделали специальную упаковку и упаковочные решения для следующих отраслей</h2>
            </div>
        </div>
        <div class="row">
            <div class="catalog-list row" style="background-color: ">
                <div class="container-sm">
                    <h2 class="catalog-list__title"></h2>
                    <div class="row m-0 justify-content-center">
                        <div class="catalog-list__item col-md-3 col-sm-6 col-xs-12" >
                            <a href="#">
                                <div class="catalog-list__item-card">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/products.png" class="catalog-list__item-card-img" alt="Строительство и недвижимость">
                                    <div class="catalog-list__item-card-title">
                                        Продукты питания
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="catalog-list__item col-md-3 col-sm-6 col-xs-12" >
                            <a href="#">
                                <div class="catalog-list__item-card">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/sredstvauhoda.png" class="catalog-list__item-card-img" alt="Рестораны, кафе, доставка">
                                    <div class="catalog-list__item-card-title">
                                        Косметика и средства ухода
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="catalog-list__item col-md-3 col-sm-6 col-xs-12" >
                            <a href="#">
                                <div class="catalog-list__item-card">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/parfumeriya.png" class="catalog-list__item-card-img" alt="Полиграфия для банков">
                                    <div class="catalog-list__item-card-title">
                                        Парфюмерия
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="catalog-list__item col-md-3 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="catalog-list__item-card">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/bytovayahimiya.png" class="catalog-list__item-card-img" alt="Мебельная промышленность">
                                    <div class="catalog-list__item-card-title">
                                        Бытовая химия
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="catalog-list__item col-md-3 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="catalog-list__item-card">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/farmaceftica.png" class="catalog-list__item-card-img" alt="Красота и здоровье">
                                    <div class="catalog-list__item-card-title">
                                        Фармацевтика и Парафармацевтика
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="catalog-list__item col-md-3 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="catalog-list__item-card">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/stroitelstvo.png" class="catalog-list__item-card-img" alt="Крупные холдинги">
                                    <div class="catalog-list__item-card-title">
                                        Строительство
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="catalog-list__item col-md-3 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="catalog-list__item-card">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/proizvodstvo-masel.png" class="catalog-list__item-card-img" alt="Решения для бизнеса">
                                    <div class="catalog-list__item-card-title">
                                        Производство горюче-смазочных материалов
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index-section-9 about-section-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title mb-4">
                <h2>Какие упаковочные решения мы предлагаем</h2>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent("growtag:news.list","about_services",Array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "Y",
                "IBLOCK_TYPE" => "news",
                "IBLOCK_ID" => "18",
                "NEWS_COUNT" => "200",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array("DESCRIPTION"),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "Y",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => ""
            )
        );?>
    </div>
</section>
<section class="index-section-8 about-section-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2>История компании</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="index-section-8__chess">
                <?$APPLICATION->IncludeComponent("growtag:news.list","about_history",Array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "news",
                        "IBLOCK_ID" => "21",
                        "NEWS_COUNT" => "200",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => Array("ID"),
                        "PROPERTY_CODE" => Array("DESCRIPTION", "POSITION"),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => ""
                    )
                );?>
            </div>
        </div>
    </div>
</section>
<section class="index-section-8 about-section-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2>Наши сертификаты</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="about-section-6__content">
                certificate of conformity Disney
            </div>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent(
    "growtag:news.list",
    "index_clients",
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
        "USE_SHARE" => "N",
        "TITLE_TEXT" => "С нами уже сотрудничают"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "peshta_about_index",
    Array(
		"FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => "Заявка на расчет (Страница - О компании)", // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => "", // ID типа покупателя
        "TITLE_TEXT" => "Закажите расчет и мы свяжемся с вами в течение 30 минут",
        "COMPONENT_TEMPLATE" => "peshta_about_index",
        "EMAIL_TO" => "",
        "EVENT_MESSAGE_ID" => array(0=>"26",),
        "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
        "REQUIRED_FIELDS" => array(0=>"NAME",),
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N",
        "USE_CAPTCHA" => "N"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
