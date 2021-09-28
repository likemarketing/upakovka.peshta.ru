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
?>
<div class="uk-visible@s" uk-grid>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="uk-width-1-3@s" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="uk-flex uk-grid-small flex_baseline">
            <div class="">
                <strong class="uk-h3 color_red uk-text-large text_bold_800 "><?=$arItem["PROPERTIES"]["COUNT"]["VALUE"]?></strong>
            </div>
            <div class="">
                <h3 class="fs-22"><?echo $arItem["NAME"]?></h3>
                <p class="roboto_font fs-18">
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </p>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>
<div class="uk-position-relative uk-visible-toggle uk-hidden@s" tabindex="-1" uk-slider="center: true">
    <ul class="uk-slider-items uk-grid">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <li>
            <div class="uk-flex uk-grid-small">
                <div class="">
                    <strong class="uk-h3 color_red uk-text-large text_bold_800"><?=$arItem["PROPERTIES"]["COUNT"]["VALUE"]?></strong>
                </div>
                <div class="">
                    <h3><?echo $arItem["NAME"]?></h3>
                    <p>
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    </p>
                </div>
            </div>
        </li>
        <?endforeach;?>
    </ul>
    <ul class="uk-slider-nav uk-dotnav uk-margin uk-flex uk-flex-center"></ul>
</div>