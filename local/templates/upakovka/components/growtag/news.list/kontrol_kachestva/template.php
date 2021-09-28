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
$count = 40;
?>
<div class="quality-control__list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="quality-control__item quality-control_width<?=$count;?>" uk-scrollspy="cls: uk-animation-slide-left; " id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="quality-control__item-number">
            <?=$arItem["PROPERTIES"]["NUMBER"]["VALUE"]?>
        </div>
        <div class="quality-control__head"><?=$arItem["NAME"]?></div>
        <p class="width_500 roboto_font">
            <?=$arItem["PREVIEW_TEXT"];?>
        </p>
    </div>
    <?$count = $count + 5;?>
    <?endforeach;?>
</div>