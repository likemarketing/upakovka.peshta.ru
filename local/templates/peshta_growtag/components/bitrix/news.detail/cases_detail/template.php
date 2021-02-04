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

$APPLICATION->SetPageProperty('canonical', "https://".$_SERVER['HTTP_HOST'].$arResult["DETAIL_PAGE_URL"]);
?>
<div class="breadcrumbs-catalog">
    <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "1",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>
<div class="stock-section mb-2" style="padding-top: 0px;">
    <div class="row justify-content-center">
        <div class="stock-section__image" style="width:100%;height:400px;background: url(<?=$arResult["DETAIL_PICTURE"]["SRC"];?>) no-repeat bottom; background-size: cover;">
        </div>
    </div>
</div>
<div class="detail-catalog-section">
    <div class="container-sm detail-catalog-section__container">
        <div class="row mobile-catalog-detail-title mb-4">
            <h1><a href="/cases/"><i class="fas fa-chevron-left" style="color: #e40e16;" title="Назад в наши работы"></i></a>&nbsp;<?=$arResult["NAME"]?></h1>
        </div>
        <div class="catalog-detail-title row justify-content-center">
            <h1><a href="/cases/"><i class="fas fa-chevron-left" style="color: #e40e16;" title="Назад в наши работы"></i></a><?=$arResult["NAME"]?></h1>
        </div>
        <div class="row">
            <div class="detail-catalog-section__text col-md-12">
                <p>
                <?if(strlen($arResult["DETAIL_TEXT"])>0):?>
                    <?echo $arResult["DETAIL_TEXT"];?>
                <?else:?>
                    <?echo $arResult["PREVIEW_TEXT"];?>
                <?endif?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- ORDER MODAL -->
<?$APPLICATION->IncludeComponent(
    "growtag:main.order",
    "peshta_order",
    array(
        "CALC_SECTION" => $arResult["PROPERTIES"]["CALC_SECTION"]["VALUE"],
        "CALC" => $arResult["PROPERTIES"]["CALC"]["VALUE_XML_ID"],
        "ELEMENT_NAME" => $arResult["NAME"],
        "ELEMENT_ID" => $arResult["ID"],
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
        "EMAIL_TO" => "neon@list.ru",
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "7",
        ),
        "COMPONENT_TEMPLATE" => "peshta_order",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N"
    ),
    false
);?>
