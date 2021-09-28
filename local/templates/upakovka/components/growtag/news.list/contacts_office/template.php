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
<div class="container p-0">
    <div class="row justify-content-center align-items-center contacts-section__content" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="contacts col-md-4 p-0">
            <div class="contacts__title">
                <?=$arItem["NAME"]?>
            </div>
            <div class="contacts__address">
                <?=$arItem["PROPERTIES"]["MAP"]["VALUE"]?>
            </div>
            <div class="contacts__phones">
                <?foreach(explode(",", $arItem["PROPERTIES"]["PHONES"]["VALUE"]) as $phone):?>
                    <?=$phone;?><br/>
                <?endforeach;?>
            </div>
            <div class="contacts__email">
                <a href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"];?></a>
            </div>
            <div class="contacts__time">
                Часы работы
                <div><?=$arItem["PROPERTIES"]["TIME"]["VALUE"];?></div>
            </div>
        </div>
        <div class="map col-md-7 p-0">
            <?=$arItem["PREVIEW_TEXT"];?>
        </div>
    </div>
</div>
<?endforeach;?>
