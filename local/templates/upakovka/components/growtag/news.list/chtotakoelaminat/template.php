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
<div class="uk-section">
    <h2 class="uk-text-center uk-margin-medium-bottom"><?=$arParams["TITLE_TEXT"]?></h2>
    <p class="roboto_font uk-margin-large-bottom">
        <?=$arParams["DESC_TEXT"]?>
    </p>

    <div class="uk-visible@s" uk-grid>
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="uk-width-1-2@m">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin border-radius uk-height-1-1 shadow_none"
                 uk-grid>
                <div class="uk-card-media-left uk-cover-container border-radius">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>" uk-cover>
                </div>
                <div>
                    <div class="uk-card-body uk-padding-remove-top">
                        <h3 class="uk-card-title"><?echo $arItem["NAME"]?></h3>
                        <p class="roboto_font">
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?endforeach;?>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-hidden@s" tabindex="-1" uk-slider="center: true">
        <ul class="uk-slider-items uk-grid">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <li class="">
                <div class="uk-padding-small">
                    <div class="border-radius uk-text-center">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>" class="border-radius">
                    </div>
                    <div class="uk-margin-small-top">
                        <h3 class="uk-card-title"><?echo $arItem["NAME"]?></h3>
                        <p>
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        </p>
                    </div>
                </div>
            </li>
            <?endforeach;?>
        </ul>
        <ul class="uk-slider-nav uk-dotnav uk-margin uk-flex uk-flex-center"></ul>
    </div>
</div>