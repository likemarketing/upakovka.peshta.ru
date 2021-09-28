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
<div class="uk-flex-between uk-flex-middle uk-grid-small uk-grid-match uk-margin-medium-top" uk-grid id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="uk-width-1-6@m">
        <div class="uk-card uk-card-default uk-card-body uk-text-center border_gray border-radius">
            <img src="<?=CFile::GetPath($arItem["PROPERTIES"]["STEP_1_IMG"]["VALUE"])?>" alt="<?=$arItem["NAME"]?>">
            <p>
                <?=$arItem["PROPERTIES"]["STEP_1_DESC"]["VALUE"]?>
            </p>
        </div>
    </div>
    <div class="circle">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#FA3F3F"/>
        </svg>
    </div>
    <div class="uk-width-1-6@m">
        <div class="uk-card uk-card-default uk-card-body uk-text-center border_gray border-radius">
            <img src="<?=CFile::GetPath($arItem["PROPERTIES"]["STEP_2_IMG"]["VALUE"])?>" alt="<?=$arItem["NAME"]?>">
            <p>
                <?=$arItem["PROPERTIES"]["STEP_2_DESC"]["VALUE"]?>
            </p>
        </div>
    </div>
    <div class="circle">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#FA3F3F"/>
        </svg>
    </div>
    <div class="uk-width-1-6@m">
        <div class="uk-card uk-card-default uk-card-body uk-text-center border_gray border-radius">
            <img src="<?=CFile::GetPath($arItem["PROPERTIES"]["STEP_3_IMG"]["VALUE"])?>" alt="<?=$arItem["NAME"]?>">
            <p>
                <?=$arItem["PROPERTIES"]["STEP_3_DESC"]["VALUE"]?>
            </p>
        </div>
    </div>
    <div class="circle">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 8H5V10H19V8Z" fill="#FA3F3F"/>
            <path d="M19 14H5V16H19V14Z" fill="#FA3F3F"/>
        </svg>
    </div>
    <div class="uk-width-1-6@m">
        <div class="uk-card uk-card-default uk-card-body uk-text-center border_red border-radius">
            <img src="<?=CFile::GetPath($arItem["PROPERTIES"]["STEP_4_IMG"]["VALUE"])?>" alt="<?=$arItem["NAME"]?>">
            <p>
                <?=$arItem["PROPERTIES"]["STEP_4_DESC"]["VALUE"]?>
            </p>
        </div>
    </div>
</div>
<?endforeach;?>