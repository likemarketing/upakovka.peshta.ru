<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы печатаем полиграфию в Ижевске. Оперативная поддержка яркими промо-материалами для роста бизнеса.");
$APPLICATION->SetPageProperty("keywords", "типография, ижевск, визитки, фирменный стиль, заказать визитки, упаковка, печать, штампы, буклеты, полиграфия, нумераторы, полиграфия для бизнеса");
$APPLICATION->SetPageProperty("title", "ПЕШТА - Личный кабинет");
$APPLICATION->SetTitle("Личный кабинет");
global $USER;

?>
<style>
    footer {
        margin-left: 0 !important;
        margin-right: 0 !important;
        margin-bottom: 0 !important;
    }

</style>
<div class="catalog-detail-title row justify-content-center">
    <h1>Личный кабинет</h1>
</div>
<div class="personal-section mb-4" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="personal-section__content col-md-8">
                <?
                $rsUser = CUser::GetByID($USER->GetID());
                $arUser = $rsUser->Fetch();
                ?>
                <?if(empty($arUser["PERSONAL_PHONE"])):?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Заполните свой профиль!</strong><br/>У вашего профиля отсутствует телефон. Нажмите "Редактировать профиль", выберете вкладку "Личные данные" и заполните поле "Телефон", это ускорит обработку ваших заказов.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?endif;?>
                <h2>Ваши заказы</h2><br/>
                <div class="personal-section__filter mb-4">
                    <?$APPLICATION->IncludeComponent("growtag:iblock.filter", "personal_filter");?>
                </div>
                <div class="personal-section__content-orders">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"personal_orders",
	array(
		"USER_ID" => $USER->GetID(),
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
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "DATE_CREATE",
			4 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "200",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Заказы",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CONTENT",
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
		"COMPONENT_TEMPLATE" => "personal_orders"
	),
	false
);?>
                </div>
            </div>
            <div class="personal-section__sidebar col-md-4">
                <div class="personal-section__sidebar-title col-12">
                    <?=$USER->GetFullName();?><br/>
                    <span>@<?=$USER->GetLogin();?></span>
                </div>
                <div class="personal-section__sidebar-order-content col-12">
                    <a href="/catalog/" class="personal-section__sidebar-order-content_button-gray">В каталог</a>
                    <br/><br/>
                    <a href="/personal/profile/" class="personal-section__sidebar-order-content_button">Редактировать профиль</a>
                    <a href="/personal/?logout=yes" class="personal-section__sidebar-order-content_button-gray">Выход</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/include/footer.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
