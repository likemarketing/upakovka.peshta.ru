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
<div class="uk-visible@s uk-grid-medium" uk-grid>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="uk-width-1-3@m uk-width-1-2@s" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="tile-hover">
            <a href="" class="tile-hover__body">
                <h4 class="fs-22"><?echo $arItem["NAME"]?></h4>
                <div class="fs-18 roboto_font">
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </div>
            </a>
        </div>
    </div>
    <?endforeach;?>
</div>
<div class="uk-position-relative uk-visible-toggle uk-hidden@s" tabindex="-1" uk-slider="center: true">
    <ul class="uk-slider-items uk-grid">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <li class="uk-width-3-4">
            <div class="tile-hover">
                <a href="" class="tile-hover__body">
                    <h4><?echo $arItem["NAME"]?></h4>
                    <div>
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    </div>
                </a>
            </div>
        </li>
        <?endforeach;?>
    </ul>
    <ul class="uk-slider-nav uk-dotnav uk-margin uk-flex uk-flex-center"></ul>
</div>