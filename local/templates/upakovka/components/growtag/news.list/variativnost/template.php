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
    <div class="uk-position-relative small-slider__body">
        <div class="uk-slider-container uk-light">
            <ul class="uk-slider-items">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="small-slider__item uk-flex-middle" uk-grid>
                        <div class="small-slider__text-container uk-width-1-2@s">
                            <div>
                                <strong class="small-slider__head"><?=$arItem["NAME"]?></strong>
                                <p class="roboto_font">
                                    <?=$arItem["PREVIEW_TEXT"];?>
                                </p>
                            </div>
                        </div>
                        <div class="small-slider__img-container uk-width-1-2@s">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="" alt="<?=$arItem["NAME"]?>" uk-slider-parallax="x: 100,-100">
                        </div>
                    </div>
                </li>
                <?endforeach;?>
            </ul>
        </div>
    </div>
    <div>
        <a class="uk-position-center-left uk-position-small small-slider__button" href="#" uk-slidenav-previous uk-slider-item="previous">
        </a>
        <a class="uk-position-center-right uk-position-small small-slider__button" href="#" uk-slidenav-next uk-slider-item="next">
        </a>
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>