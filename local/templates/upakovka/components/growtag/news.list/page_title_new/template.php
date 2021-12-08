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
<div class="wn-banner" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="uk-container uk-container-large uk-height-1-1">
        <div class="uk-height-1-1" uk-grid>
            <div class="wn-banner__text uk-width-1-2@s">
                <h1><?echo $arItem["NAME"]?></h1>
                <p class="roboto_font">
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </p>
                <div class="uk-display-inline-block">
                    <a href="" class="red-button" uk-toggle="target: #callback-modal" aria-expanded="false"><?= GetMessage('Заказать') ?></a>
                </div>
            </div>
            <div class="wn-banner__img uk-width-1-2@s"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>"></div>
        </div>
    </div>
</div>
<?endforeach;?>
