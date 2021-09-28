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
    <div class="row justify-content-center align-items-center about-section__content" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="index-section-9__img col-md-6 p-0">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" style="width: 100%">
        </div>
        <div class="index-section__list col-md-6">
            <div class="index-section__list-title">
                <?=$arItem["NAME"]?>
            </div>
            <div class="index-section__list-subtitle">
                <?=$arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]?>
            </div>
            <?=$arItem["PREVIEW_TEXT"];?>
        </div>
    </div>
<?endforeach;?>
