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
<style>
    #myMosaic2 {
        overflow: unset !important;
    }
    #myMosaic2 a {
        overflow: hidden;
        text-decoration: none;
        transition: .5s all;
        height: fit-content !important;
    }
    #myMosaic2 a:hover {
        box-shadow: 0px 0px 5px #7f7f7f;
    }
    #myMosaic2 .myMosaic2__image {
        filter: grayscale(1);
        transition: .5s all;
    }
    #myMosaic2 a:hover > .myMosaic2__image {
        filter: grayscale(0);
        transition: .5s all;
    }
    #myMosaic2 .myMosaic2__title {
        background: #e40e16;
        color: #ffffff;
        font-size: 16px;
        padding: 10px;
        display: flex;
        text-align: left;
        align-self: flex-end;
        width: 100%;
    }
</style>
<div id="myMosaic2">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="myMosaic2__image" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center;background-size: cover;height: 235px;display: flex;"></div>
            <div class="myMosaic2__title">
                <?=$arItem["NAME"];?>
            </div>
        </a>
    <?endforeach;?>
</div>
