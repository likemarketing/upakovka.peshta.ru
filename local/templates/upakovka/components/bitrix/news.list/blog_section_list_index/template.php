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
$this->setFrameMode(false);
?>
<div class="small-slider" uk-slider>
    <div class="uk-position-relative small-slider__body">
        <div class="uk-slider-container ">
            <ul class="uk-slider-items">
                <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="uk-width-1-1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="uk-panel">
                        <div class="slider-gradient" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')"></div>
                        <div class="uk-position-center-left uk-text-left uk-padding">
                            <h3 class="color_fff fs-22" uk-slider-parallax="x: 100,-100"><?echo $arItem["NAME"]?></h3>
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="color_red roboto_font fs-14 uk-text-bolder" uk-slider-parallax="x: 200,-200">
                                ПОДРОБНЕЕ
                                <svg width="41" height="8" viewBox="0 0 41 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40.3536 4.35355C40.5488 4.15829 40.5488 3.84171 40.3536 3.64645L37.1716 0.464466C36.9763 0.269204 36.6597 0.269204 36.4645 0.464466C36.2692 0.659728 36.2692 0.976311 36.4645 1.17157L39.2929 4L36.4645 6.82843C36.2692 7.02369 36.2692 7.34027 36.4645 7.53553C36.6597 7.7308 36.9763 7.7308 37.1716 7.53553L40.3536 4.35355ZM0 4.5H40V3.5H0V4.5Z" fill="#FA3F3F"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
                <?endforeach;?>
            </ul>
        </div>
    </div>
    <div class="uk-visible@l">
        <a class="uk-position-center-left uk-position-small small-slider__button" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small small-slider__button" href="#" uk-slidenav-next uk-slider-item="next"></a>
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>