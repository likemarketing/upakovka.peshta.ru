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
<section class="index-section-1">
    <div class="index-slider">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-7">
                    <div class="slide-title">
                        <h1><?=$arResult["NAME"]?></h1>
                    </div>
                    <div class="slide-desc mt-4">
                        <?echo $arResult["DETAIL_TEXT"];?>
                    </div>
                    <div class="slide-button mt-5">
                        <a href="#feedbacksection" uk-scroll>
                            Оставить заявку
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="slide-img">
                        <div class="slide-img__text d-flex justify-content-center align-items-center">
                            Первыми<br/>освоили<br/>технологию IML в россии.<br/><br/>
                            имеем самый большой опыт.
                        </div>
                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
