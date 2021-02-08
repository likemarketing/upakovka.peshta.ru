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
<div class="container p-0">
    <div class="row contacts-dept justify-content-center align-items-center" >
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="<?if(empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>col-md-4<?else:?>col-md-4<?endif;?> p-2">
        <div class="contacts-dept__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" <?if(empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>style="border-top: 8px solid #FA3F3F"<?endif;?>>
            <div class="contacts-dept__item-img">
                <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["NAME"]?>">
                <?endif;?>
            </div>
            <div class="contacts-dept__item-content" <?if(empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>style="min-height: 135px;"<?endif;?>>
                <div class="item-content__name"><?=$arItem["NAME"]?></div>
                <div class="item-content__position"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></div>
                <div class="item-content__phone"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></div>
                <div class="item-content__email">
                    <a href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>
    </div>
</div>
