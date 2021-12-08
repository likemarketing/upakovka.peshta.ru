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
            toastr.error('<?= GetMessage('Что-то пошло не так... Попробуйте еще раз!') ?>', '<?= GetMessage('УПС!...') ?>');
        });
    </script>
<?}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
    ?>
    <div class="modal fade" id="modalSettlementOk" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><?= GetMessage('Спасибо за вашу заявку!') ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content-body d-flex justify-content-center align-items-center mt-4 mb-4">
                    <?= GetMessage('Мы свяжемся с вами в течение 30 минут') ?>
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
<section class="index-section-7" id="index-section-7">
    <div class="container">
        <div class="row align-items-center">
            <div class="index-section-7__text col-md-6">
                <div class="index-section-7__title">
                    <span><?= GetMessage('Мы на связи') ?></span>
                    <?=$arParams["TITLE_TEXT"]?>
                </div>
            </div>
            <div class="index-section-7__form col-md-6 p-5">
                <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
                    <?=bitrix_sessid_post()?>
                    <div class="index-section-7__form-input">
                        <label for="user_name">
                            <span><?= GetMessage('Ваше имя') ?> *</span>
                            <input required type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"/>
                        </label>
                        <label for="user_phone">
                            <span><?= GetMessage('Номер телефона') ?> *</span>
                            <input required type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>"/>
                        </label>
                        <label for="user_msg">
                            <span><?= GetMessage('Дополнительные пожелания') ?></span>
                            <input type="text" name="user_msg" value=""/>
                        </label>
                    </div>
                    <div class="index-section-7__form-privacy">
                        <input required type="checkbox" checked> <?= GetMessage('Согласие с политикой') ?>
                    </div>
                    <div class="index-section-7__form-button mt-4">
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse-settlement-index">
                        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                        <input type="hidden" name="referer_query" value="<?= htmlentities(print_r($_SERVER['HTTP_REFERER'] ?? '', true)) ?>">
                        <input title="<?= GetMessage('Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности.') ?>" <?if(strlen($arResult["OK_MESSAGE"]) > 0 || isset($_GET['success'])):?>disabled<?endif;?> type="submit" name="submit" value="<?= GetMessage('Получить подборку') ?>" class="red-button form-button"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
