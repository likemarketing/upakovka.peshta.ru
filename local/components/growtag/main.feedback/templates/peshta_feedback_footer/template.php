<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{?>
    <script type="text/javascript">
        $(document).ready(function() {
            toastr.error('Что-то пошло не так... Попробуйте еще раз!', 'УПС!...');
        });
    </script>
<?}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
    ?>
    <div id="modalSettlementOk" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-padding-remove popup border_overflow_hide">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
                <div class="uk-card-media-left uk-cover-container uk-visible@s">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/material1.png" alt="" uk-cover>
                    <canvas width="600" height="650"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Заявка на расчет стоимости</h3>
                        <div class="roboto_font uk-margin">
                            <?=$arParams["OK_TEXT"];?>
                        </div>
                    </div>
                </div>
            </div>
            <button class="uk-modal-close" type="button"></button>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            UIkit.modal(document.getElementById('modalSettlementOk')).show();
        });
    </script>
    <?
}
?>
<section class="index-section-7">
    <div class="container">
        <div class="row align-items-center">
            <div class="index-section-7__text col-md-6">
                <div class="index-section-7__title">
                    <?=$arParams["TITLE_TEXT"];?>
                </div>
                <div class="index-section-7__description">
                    <?=$arParams["DESC_TEXT"];?>
                </div>
            </div>
            <div class="index-section-7__form col-md-6 p-5">
                <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
                    <?=bitrix_sessid_post()?>
                    <div class="index-section-7__form-input">
                        <label for="user_name">
                            <span><?=GetMessage("MFT_NAME")?></span>
                            <input required type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"/>
                        </label>
                        <label for="user_phone">
                            <span><?=GetMessage("MFT_PHONE")?></span>
                            <input required type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>"/>
                        </label>
                        <label for="user_msg">
                            <span><?=GetMessage("MFT_EMAIL")?></span>
                            <input required type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>"/>
                        </label>
                    </div>
                    <div class="index-section-7__form-privacy">
                        <input required type="checkbox" checked> Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="/privacy/">политикой конфиденциальности</a>
                    </div>
                    <div class="index-section-7__form-button mt-4">
                        <input type="hidden" name="recaptcha_response">
                        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                        <input type="hidden" name="referer_query" value="<?= htmlentities(print_r($_SERVER['HTTP_REFERER'] ?? '', true)) ?>">
                        <input title="Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности." <?if(strlen($arResult["OK_MESSAGE"]) > 0 || isset($_GET['success'])):?>disabled<?endif;?> type="submit" name="submit" value="Получить подборку" class="red-button form-button"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
