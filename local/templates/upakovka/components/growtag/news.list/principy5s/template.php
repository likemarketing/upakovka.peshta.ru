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
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="uk-width-1-3@s" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="uk-flex uk-grid-medium uk-flex-between flex_baseline">
        <div class="red_arrow">
            <strong class="uk-h3 uk-text-large color_fff"><?=$arItem["PROPERTIES"]["COUNT"]["VALUE"]?></strong>
        </div>
        <div class="uk-width-5-6@s">
            <h3><?echo $arItem["NAME"]?></h3>
            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
        </div>
    </div>
</div>
<?endforeach;?>
