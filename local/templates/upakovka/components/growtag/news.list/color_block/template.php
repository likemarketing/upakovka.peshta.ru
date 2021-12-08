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
<section class="index-section-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="index-section__title">
                <h2><?=$arParams["TITLE_TEXT"]?></h2>
            </div>
        </div>
        <div class="row index-section-5__content">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                $iconPath = CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"]);
                ?>
                <div class="col-md-3 col-sm-12 p-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background: <?=$arItem["PROPERTIES"]["COLOR"]["VALUE"]?>">
                    <div class="index-section-5__content-icon">
                        <img src="<?=$iconPath?>" alt="<?=$arItem["NAME"]?>">
                    </div>
                    <div class="index-section-5__content-title mt-3">
                        <h3><?=$arItem["NAME"]?></h3>
                    </div>
                    <div class="index-section-5__content-text mt-3">
                        <?=$arItem["PREVIEW_TEXT"]?>
                    </div>
                </div>
            <?endforeach;?>
            <div class="row justify-content-center align-items-center mt-5">
                <a href="/material/" class="red-button"><?= GetMessage('Узнать больше об IML-этикетках') ?></a>
            </div>
        </div>
    </div>
</section>
