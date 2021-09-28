<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Блог");
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick-theme.css">
    <link href="<?=SITE_TEMPLATE_PATH?>/style/style-new.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/main.css">
<main class="site-main">
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"blog_sections_list", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "52",
		"IBLOCK_TYPE" => "blog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "SORT",
			4 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "/blog/#CODE#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "blog_sections_list"
	),
	false
);?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:search.form",
        "search_blog",
        array(
            "USE_SUGGEST" => "N",
            "PAGE" => "#SITE_DIR#search/index.php",
            "COMPONENT_TEMPLATE" => "search_blog"
        ),
        false
    );?>
    <section class="blog-list-section">
        <div class="container container--mobile-fluid">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "blog_section_list_more",
                array(
                    "FIRST_ELEMENT" => "Y",
                    "ACTIVE_DATE_FORMAT" => "j F Y",
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
                    "DETAIL_URL" => "#SITE_DIR#/blog/#SECTION_CODE#/#CODE#/",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "CODE",
                        2 => "NAME",
                        3 => "SORT",
                        4 => "PREVIEW_TEXT",
                        5 => "PREVIEW_PICTURE",
                        6 => "DETAIL_TEXT",
                        7 => "DETAIL_PICTURE",
                        8 => "DATE_ACTIVE_FROM",
                        9 => "ACTIVE_FROM",
                        10 => "DATE_CREATE",
                        11 => "TIMESTAMP_X",
                        12 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "52",
                    "IBLOCK_TYPE" => "blog",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "7",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "show_more",
                    "PAGER_TITLE" => "Блог",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => $_REQUEST["ID"],
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "READ_TIME",
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
                    "COMPONENT_TEMPLATE" => "blog_section_list_more"
                ),
                false
            );?>
        </div>
    </section><br/>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>