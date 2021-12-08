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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<header class="page-header">
        <h1 class="page-header__h1 h1">
            <?if($APPLICATION->GetCurPage() == SITE_DIR . "blog/"):?><?= GetMessage('Блог о полиграфии и бизнесе') ?><?endif;?>
            <?foreach ($arResult['SECTIONS'] as &$arSection){
                if($APPLICATION->GetCurPage()==$arSection['SECTION_PAGE_URL']){
                    print $arSection["DESCRIPTION"];
                }
            }?>
        </h1>
<?
if (0 < $arResult["SECTIONS_COUNT"])
{
?>
<ul class="page-header__categories categories">
    <li class="categories__item <?if($APPLICATION->GetCurPage()=="/blog/"):?>categories__item--active<?endif;?>">
        <a href="<?= SITE_DIR ?>blog/" class="categories__link"><?= GetMessage('Все рубрики') ?></a>
    </li>
    <?foreach ($arResult['SECTIONS'] as &$arSection)
    {
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        
        ?>
        <li class="categories__item <?if($APPLICATION->GetCurPage()==$arSection['SECTION_PAGE_URL']):?>categories__item--active<?endif;?>" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
            <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="categories__link"><? echo $arSection['NAME']; ?></a>
        </li>
        <?
    }
    unset($arSection);
    ?>
</ul>
<?}?>
</header>
