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
    <div class="modal fade" id="modalSettlementOk" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Спасибо за вашу заявку!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content-body d-flex justify-content-center align-items-center mt-4 mb-4">
                    Мы перезвоним Вам в ближайшее время
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#modalSettlementOk').modal('show');
        });
    </script>
    <?
}
?>
<!-- Modal -->
<div class="modal fade" id="modalUpakovka" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-title">
                Оставьте заявку на тест или пробный заказ, и наш менеджер свяжется с вами в ближайшее время, чтобы уточнить детали
            </div>
            <form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="p-5">
                <?=bitrix_sessid_post()?>
                <div class="index-section-7__form-input mt-2">
                    <label for="user_name">
                        <span><?=GetMessage("MFT_NAME")?></span>
                        <input required type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"/>
                    </label>
                    <label for="user_phone">
                        <span><?=GetMessage("MFT_PHONE")?></span>
                        <input required type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>"/>
                    </label>
                    <label for="user_email">
                        <span><?=GetMessage("MFT_EMAIL")?></span>
                        <input required type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>"/>
                    </label>
                </div>
                <div class="form-privacy">
                    <input required type="checkbox" checked> Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="/privacy/">политикой конфиденциальности</a>
                </div>
                <div class="index-section-7__form-button mt-4">
                    <input type="hidden" name="recaptcha_response">
                    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                    <input title="Нажимая 'Заказать расчет' вы соглашаетесь с политикой конфиденциальности." <?if(strlen($arResult["OK_MESSAGE"]) > 0 || isset($_GET['success'])):?>disabled<?endif;?> type="submit" name="submit" value="Заказать расчет" class="red-button form-button"/>
                </div>
            </form>
        </div>
    </div>
</div>
