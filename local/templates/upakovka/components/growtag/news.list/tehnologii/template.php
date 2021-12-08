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
<div class="uk-section padding_mobile_left">
    <div class="uk-container uk-container-large">
        <div class="uk-position-relative" uk-grid>
            <div class="uk-width-1-2@s ">
                <h2><?= GetMessage('Технологии') ?></h2>
                <div class="vertical-line__point-red"></div>
            </div>
            <div class="uk-width-1-2@s fs-18 roboto_font">
                <?= GetMessage('Осваиваем новые технологии, внедряем инновации, расширяем парк оборудования для обеспечения лучшего качества. Постоянное технологическое развитие помогает нам выпускать продукцию разного типа сложности в короткие сроки') ?>
            </div>
        </div>

        <div class="uk-visible@s uk-grid-medium" uk-grid>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="uk-width-1-3@m uk-width-1-2@s" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="tile-hover">
                    <div class="tile-hover__body">
                        <h4 class="fs-22"><?=$arItem["NAME"]?></h4>
                        <div class="fs-18 roboto_font">
                            <?=$arItem["PREVIEW_TEXT"];?>
                        </div>
                    </div>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</div>
<div class="uk-position-relative uk-visible-toggle uk-hidden@s" tabindex="-1" uk-slider="center: true">
    <ul class="uk-slider-items uk-grid">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <li class="uk-width-3-4">
            <div class="tile-hover">
                <div class="tile-hover__body">
                    <h4><?=$arItem["NAME"]?></h4>
                    <div>
                        <?=$arItem["PREVIEW_TEXT"];?>
                    </div>
                </div>
            </div>
        </li>
        <?endforeach;?>
    </ul>
    <ul class="uk-slider-nav uk-dotnav uk-margin uk-flex uk-flex-center"></ul>
</div>