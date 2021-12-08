<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы печатаем полиграфию в Ижевске. Оперативная поддержка яркими промо-материалами для роста бизнеса.");
$APPLICATION->SetPageProperty("keywords", "типография, ижевск, визитки, фирменный стиль, заказать визитки, упаковка, печать, штампы, буклеты, полиграфия, нумераторы, полиграфия для бизнеса");
$APPLICATION->SetPageProperty("title", "ПЕШТА - Типография Ижевск");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Пешта");
?>
    <div class="uk-container uk-container-large">
        <div class="uk-section">
            <div><h1 class="uk-text-center uk-margin-medium-bottom">Карта сайта</h1></div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.map", 
	".default", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"COL_NUM" => "1",
		"LEVEL" => "3",
		"SET_TITLE" => "Y",
		"SHOW_DESCRIPTION" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>