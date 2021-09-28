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
<div class="top-banner uk-position-relative">
    <div class="main-slider">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div uk-grid>
                <div class="uk-width-1-2@m top-banner__img">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
                </div>
                <div class="uk-width-1-2@m uk-margin-remove top-banner__text">
                    <h1><?=$arItem["NAME"]?></h1>
                    <p class="uk-text-small">
                        <?=$arItem["PREVIEW_TEXT"];?>
                    </p>
                    <?if(!empty($arItem["PROPERTIES"]["LINK"]["VALUE"])):?>
                    <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="top-banner__detail" target="_blank">
                        Подробнее
                        <svg width="41" height="8" viewBox="0 0 41 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.3536 4.35355C40.5488 4.15829 40.5488 3.84171 40.3536 3.64645L37.1716 0.464466C36.9763 0.269204 36.6597 0.269204 36.4645 0.464466C36.2692 0.659728 36.2692 0.976311 36.4645 1.17157L39.2929 4L36.4645 6.82843C36.2692 7.02369 36.2692 7.34027 36.4645 7.53553C36.6597 7.7308 36.9763 7.7308 37.1716 7.53553L40.3536 4.35355ZM0 4.5H40V3.5H0V4.5Z" fill="#FA3F3F"/>
                        </svg>
                    </a>
                    <?endif;?>
                </div>
            </div>
        </div>
        <?endforeach;?>
    </div>
    <div class="thumb-slider top-banner__masonry">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <div><div class="base-block slick-item blur"><?=$arItem["NAME"]?></div></div>
        <?endforeach;?>
    </div>
</div>
