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
<section class="index-section-9 euro-standart" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 p-0">
                <div class="index-section__image d-flex">
                    <div class="image-title d-flex">
                        <?=$arParams["DESC_TEXT"]?>
                    </div>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arParams["TITLE_TEXT"]?>" style="width: 100%">
                </div>
            </div>
            <div class="index-section__list col-md-6">
                <div class="index-section__list-title">
                    <?=$arParams["TITLE_TEXT"]?>
                </div>
                <?=$arItem["PREVIEW_TEXT"]?>
            </div>
            <img class="index-section__image-mobile" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arParams["TITLE_TEXT"]?>" style="width: 100%">
        </div>
    </div>
</section>
<?endforeach;?>
