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
    <div id="modalCallbackOk" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-padding-remove popup border_overflow_hide">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
                <div class="uk-card-media-left uk-cover-container uk-visible@s">
                    <img src="<?=CFile::GetPath($arParams['MODAL_IMAGE']);?>" alt="<?=$arParams['MODAL_TITLE']?>" uk-cover>
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
            $.cookie('modal_send', true, { expires: 7 });
            UIkit.modal(document.getElementById('modalCallbackOk')).show();
        });
    </script>
    <?
}
?>
<?if(empty($arParams['MODAL_PAGE']) || in_array($APPLICATION->GetCurPage(), $arParams['MODAL_PAGE'])):?>
<!-- Modal -->
<div id="callback-modal-timer" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-padding-remove popup border_overflow_hide">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
            <div class="uk-card-media-left uk-cover-container uk-visible@s">
                <img src="<?=CFile::GetPath($arParams['MODAL_IMAGE']);?>" alt="<?=$arParams['MODAL_TITLE']?>" uk-cover>
                <canvas width="600" height="650"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title"><?=$arParams['MODAL_TITLE']?></h3>
                    <div class="roboto_font uk-margin">
                        Оставьте заявку на тест или пробный заказ, и наш менеджер свяжется с вами в ближайшее время, чтобы уточнить детали
                    </div>
                    <form class="form form_modal" action="<?=POST_FORM_ACTION_URI?>" method="POST">
                        <?=bitrix_sessid_post()?>
                        <div class="uk-margin"><input class="uk-input" type="text" placeholder="Ваше имя *" required name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"></div>
                        <!--<div class="uk-margin"><input class="uk-input" type="text" placeholder="Ваш телефон *" required name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>"></div>-->
                        <div class="uk-margin"><input class="uk-input" type="text" placeholder="Ваш e-mail *" required name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>"></div>
                        <div class="uk-margin">
                            <input type="submit" name="submit" class="red-button" <?if(strlen($arResult["OK_MESSAGE"]) > 0 || isset($_GET['success'])):?>disabled<?endif;?> value="Отправить"/>
                        </div>
                        <div class="uk-margin">
                            <label class="checkbox">
                                <!--<input type="checkbox">
                                <span class="checkbox__custom-input"></span>-->
                                <span class="checkbox__text">Нажимая на кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a href="/privacy/" class="color_red">политикой конфиденциальности</a></span>
                            </label>
                        </div>
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse-callback-modal">
                        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                    </form>
                </div>
            </div>
        </div>
        <button class="uk-modal-close" type="button"></button>
    </div>
</div>
<script type="text/javascript">
    let timerModal = <?=(int)$arParams["MODAL_TIME"]."000";?>;
    if(!$.cookie('modal_send')){
        setTimeout(function (){
            UIkit.modal(document.getElementById('callback-modal-timer')).show();
        }, timerModal);
    }
</script>
<?endif;?>