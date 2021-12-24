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
    <div id="modalCallbackOk" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-padding-remove popup border_overflow_hide">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
                <div class="uk-card-media-left uk-cover-container uk-visible@s">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/material1.png" alt="" uk-cover>
                    <canvas width="600" height="650"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title"><?= GetMessage('Заявка на расчет стоимости') ?></h3>
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
            UIkit.modal(document.getElementById('modalCallbackOk')).show();

            $(window).on('load', function() {
                reachGoal('form:order');
            });
        });
    </script>
    <?
}
?>
<div class="red-block-form">
    <div class="uk-container uk-container-large">
        <div class="uk-flex-middle uk-flex-between" uk-grid>
            <div class="uk-width-1-2@s">
                <h3 class="red-block-form__text"><?=$arParams["TITLE_TEXT"];?></h3>
                <p class="fs-18 color_fff"><?= GetMessage('Подберем и вышлем на ваш адрес электронной почты!') ?></p>
            </div>
            <div class="uk-width-1-3@s">
                <form class="form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
                    <?=bitrix_sessid_post()?>
                    <div class="uk-margin"><input class="uk-input" type="text" placeholder="<?= GetMessage('Ваше имя') ?> *" required name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"></div>
                    <div class="uk-margin"><input class="uk-input" type="text" placeholder="<?= GetMessage('Номер телефона') ?> *" required name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>"></div>
                    <div class="uk-margin"><input class="uk-input" type="text" placeholder="<?= GetMessage('Ваш e-mail') ?> *" required name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>"></div>
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse-settlement-index">
                    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                    <div class="uk-margin"><input class="red-button" title="<?= GetMessage('Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности.') ?>" <?if(strlen($arResult["OK_MESSAGE"]) > 0 || isset($_GET['success'])):?>disabled<?endif;?> type="submit" name="submit" value="<?= GetMessage('Оставить заявку') ?>"/></div>
                    <div class="uk-margin">
                        <label class="checkbox">
                            <!--<input type="checkbox">
                            <span class="checkbox__custom-input"></span>-->
                            <span class="checkbox__text"><?= GetMessage('Согласие с политикой') ?></span>
                        </label>
                    </div>
                    <input type="hidden" name="referer_query" value="<?= htmlentities(print_r($_SERVER['HTTP_REFERER'] ?? '', true)) ?>">
                </form>
            </div>
        </div>
    </div>
</div>
