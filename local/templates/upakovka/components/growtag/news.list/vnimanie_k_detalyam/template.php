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
<div class="execution-stages" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="execution-stages__left">
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>">
    </div>
    <div class="execution-stages__center">
        <div class="uk-margin-small-bottom"><strong class="execution-stages__head"><?=$arItem["PROPERTIES"]["STEP_NAME"]["VALUE"]?></strong></div>
        <div><strong class="execution-stages__event"><?echo $arItem["NAME"]?></strong></div>
        <p class="roboto_font">
            <?echo $arItem["PREVIEW_TEXT"];?>
        </p>
    </div>
    <div class="execution-stages__right">
        <div class="fs-18">РЕЗУЛЬТАТ</div>
        <p class="roboto_font">
            <?=$arItem["PROPERTIES"]["RESULT"]["VALUE"]["TEXT"]?>
        </p>
    </div>
</div>
<?endforeach;?>