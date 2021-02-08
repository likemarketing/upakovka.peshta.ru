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
<section class="index-section-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2><?=$arParams["TITLE_TEXT"]?></h2>
            </div>
            <div class="index-section__description">
                <?=$arParams["DESC_TEXT"]?>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <div class="works-slider" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <?foreach ($arItem["PROPERTIES"]["IMAGES"]["VALUE"] as $img):?>
                        <img src="<?=CFile::GetPath($img)?>" style="max-height: 300px;">
                    <?endforeach;?>
            </div>
                <?endforeach;?>
        </div>
    </div>
</section>
