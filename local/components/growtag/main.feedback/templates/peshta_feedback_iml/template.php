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
    <div class="modal fade" id="modalSettlementIndexOk" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Спасибо за вашу заявку!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--<div class="modal-content-body d-flex justify-content-center align-items-center mt-4 mb-4">
                    Мы свяжемся с вами в течение 30 минут
                </div>-->
                <div class="d-flex ml-3 mr-3 mb-3">
                    <a download href="/upload/СМ_IML.pdf" class="red-button form-button">Скачать</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#modalSettlementIndexOk').modal('show');
        });
    </script>
    <?
}
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="index-section-7__form-input mt-5">
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
        Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="/privacy/">Политикой конфиденциальности</a>
    </div>
    <div class="index-section-7__form-button mt-4">
        <input type="hidden" name="recaptcha_response">
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        <input type="hidden" name="referer_query" value="<?= htmlentities(print_r($_SERVER['HTTP_REFERER'] ?? '', true)) ?>">
        <input title="Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности." <?if(strlen($arResult["OK_MESSAGE"]) > 0 || isset($_GET['success'])):?>disabled<?endif;?> type="submit" name="submit" value="Скачать" class="red-button form-button"/>
    </div>
</form>
