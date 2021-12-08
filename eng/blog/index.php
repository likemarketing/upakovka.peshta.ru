<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Useful articles about printing, marketing, business and design. Life hacks, tips and expert information that will definitely be useful to you.");
$APPLICATION->SetPageProperty("title", "Blog | Peshta Typography");
$APPLICATION->SetTitle("Peshta - Blog");

if(!isset($_REQUEST["PAGEN_1"])){
    $newsCount = 7;
} else {
    $newsCount = 6;
}

?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick-theme.css">
    <link href="<?=SITE_TEMPLATE_PATH?>/style/style-new.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/main.css">
<main class="site-main">
        <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "blog_sections_list", Array(
            "ADD_SECTIONS_CHAIN" => "N",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "COUNT_ELEMENTS" => "N",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "FILTER_NAME" => "sectionsFilter",
            "IBLOCK_ID" => "87",
            "IBLOCK_TYPE" => "blog",
            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
            "SECTION_FIELDS" => array(
                0 => "ID",
                1 => "CODE",
                2 => "NAME",
                3 => "SORT",
                4 => "",
            ),
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_URL" => "#SITE_DIR#/blog/#CODE#/",
            "SECTION_USER_FIELDS" => array(
                0 => "",
                1 => "",
            ),
            "SHOW_PARENT_NAME" => "Y",
            "TOP_DEPTH" => "1",
            "VIEW_MODE" => "LINE",
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
		"IBLOCK_ID" => "87",
		"IBLOCK_TYPE" => "blog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => $newsCount,
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "show_more",
		"PAGER_TITLE" => "Блог",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
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
    </section>
    <section class="section section--red new-videos-section">
        <div class="container container--mobile-fluid">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 mb-5">
                    <h2 class="h2">New video on&nbsp;YouTube</h2>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"new_videos",
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "DATE_ACTIVE_FROM",
			4 => "ACTIVE_FROM",
			5 => "DATE_ACTIVE_TO",
			6 => "ACTIVE_TO",
			7 => "DATE_CREATE",
			8 => "TIMESTAMP_X",
			9 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "140",
		"IBLOCK_TYPE" => "blog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "show_more_white",
		"PAGER_TITLE" => "Video",
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
		"COMPONENT_TEMPLATE" => "new_videos"
	),
	false
);?>
        </div>
    </section>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>