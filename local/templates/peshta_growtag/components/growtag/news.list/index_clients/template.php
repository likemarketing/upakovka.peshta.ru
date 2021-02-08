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
<section class="index-section-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2><?=$arParams["TITLE_TEXT"]?></h2>
            </div>
        </div>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="row justify-content-center" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                foreach($arItem["PROPERTIES"]["PICTURES"]["VALUE"] as $itemPicID):
                    ?>
                    <div class="index-section-8__client-item col-md-3 p-0">
                        <img src="<?=CFile::GetPath($itemPicID);?>">
                    </div>
                <?endforeach;?>
            </div>
            <?endforeach;?>
    </div>
</section>
