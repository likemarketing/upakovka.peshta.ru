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
        <div class="row justify-content-center">
            <div class="index-section-8__chess">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <?if($arItem["PROPERTIES"]["POSITION"]["VALUE_XML_ID"] == "LEFT"):?>
                <div class="row chess-item__left align-items-center" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="col-md-6 col-sm-12">
                        <div class="chess-item__left-img">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="chess-item__left-title"><?=$arItem["NAME"]?></div>
                        <div class="chess-item__left-text"><?=$arItem["PREVIEW_TEXT"]?></div>
                    </div>
                </div>
                <?else:?>
                <div class="row chess-item__right align-items-center" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="col-md-6 col-sm-12">
                        <div class="chess-item__right-title"><?=$arItem["NAME"]?></div>
                        <div class="chess-item__right-text"><?=$arItem["PREVIEW_TEXT"]?></div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="chess-item__right-img">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
                        </div>
                    </div>
                </div>
                <?endif;?>
                <?endforeach;?>
            </div>
            <div class="row justify-content-center align-items-center">
                <a href="/material/" class="red-button"><?= GetMessage('Узнать больше об IML-этикетках') ?></a>
            </div>
        </div>
    </div>
</section>
