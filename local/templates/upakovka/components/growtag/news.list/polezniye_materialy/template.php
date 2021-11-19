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
<div class="uk-card uk-card-default uk-grid-collapse uk-margin gray_bg uk-box-shadow-small border_overflow_hide uk-margin-medium-bottom shadow_none" uk-grid id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="uk-card-media-left uk-cover-container uk-width-1-3@s">
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div class="uk-width-2-3@s">
        <div class="uk-card-body padding_small_mobile">
            <h3 class="uk-card-title fs-22"><?echo $arItem["NAME"]?></h3>
            <div class="roboto_font uk-margin color_dark">
                <?echo $arItem["PREVIEW_TEXT"];?>
            </div>
            <div class="uk-width-1-3@l">
                <a href="#material-modal" class="red-button" uk-toggle aria-expanded="false" data-id="<?= $arItem['ID'] ?>">
                    получить на e-mail
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.99967 2H13.9997C14.1765 2 14.3461 2.07024 14.4711 2.19526C14.5961 2.32029 14.6663 2.48986 14.6663 2.66667V13.3333C14.6663 13.5101 14.5961 13.6797 14.4711 13.8047C14.3461 13.9298 14.1765 14 13.9997 14H1.99967C1.82286 14 1.65329 13.9298 1.52827 13.8047C1.40325 13.6797 1.33301 13.5101 1.33301 13.3333V2.66667C1.33301 2.48986 1.40325 2.32029 1.52827 2.19526C1.65329 2.07024 1.82286 2 1.99967 2ZM8.03967 7.78867L3.76501 4.15867L2.90167 5.17467L8.04834 9.54467L13.1023 5.17133L12.2303 4.16267L8.04034 7.78867H8.03967Z"
                              fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<?endforeach;?>
