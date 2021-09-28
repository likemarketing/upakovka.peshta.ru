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
<div class="uk-child-width-1-3@m uk-child-width-1-2@s  uk-grid-match uk-visible@s" uk-grid>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="uk-card uk-card-default uk-card-body border-radius bg_gray_dark shadow_none">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.4861 11.8857L13.9432 19.4286L10.5146 16" stroke="#FA3F3F" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="1" y="1" width="30" height="30" rx="15" stroke="#FA3F3F" stroke-width="2"/>
                </svg>
                <h3 class="uk-card-title fs-22"><?echo $arItem["NAME"]?></h3>
                <p><?echo $arItem["PREVIEW_TEXT"];?></p>
            </div>
        </div>
    <?endforeach;?>
</div>
<div class="uk-position-relative uk-visible-toggle uk-hidden@s" tabindex="-1" uk-slider="center: true">
    <ul class="uk-slider-items uk-grid">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <li>
                <div class="uk-card uk-card-default uk-card-body border-radius bg_gray_dark shadow_none">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.4861 11.8857L13.9432 19.4286L10.5146 16" stroke="#FA3F3F" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="1" y="1" width="30" height="30" rx="15" stroke="#FA3F3F" stroke-width="2"/>
                    </svg>
                    <h3 class="uk-card-title"><?echo $arItem["NAME"]?></h3>
                    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                </div>
            </li>
        <?endforeach;?>
    </ul>
    <ul class="uk-slider-nav uk-dotnav uk-margin uk-flex uk-flex-center"></ul>
</div>