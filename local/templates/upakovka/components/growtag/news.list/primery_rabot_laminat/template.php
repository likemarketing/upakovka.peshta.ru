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
<div class="small-slider" uk-slider>
    <div class="uk-position-relative">
        <div class="uk-slider-container">
            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="uk-width-1-2@m uk-width-4-5">
                        <div class="uk-card-media-left uk-cover-container border-radius">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" uk-cover alt="<?echo $arItem["NAME"]?>">
                            <canvas width="470" height="400"></canvas>
                        </div>
                    </li>
                <?endforeach;?>
            </ul>
            <div class="uk-visible@l">
                <a class="uk-position-center-left uk-position-small small-slider__button" href="#"
                   uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small small-slider__button" href="#"
                   uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
        </div>
    </div>
</div>