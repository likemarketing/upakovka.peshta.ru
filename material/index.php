<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Пешта");
?>
<section class="index-section-1 iml-section-1">
    <div class="index-slider">
        <div class="container">
            <div class="row">
                <div class="iml-section-1__content d-flex justify-content-between">
                    <div class="iml-section-1__image d-flex justify-content-center align-items-center">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/images/iml.png" alt="IML">
                    </div>
                    <div class="iml-section-1__content-text justify-content-center d-flex flex-column">
                        <span>Презентация возможностей технологии</span>
                        <div class="content-title">
                            Вплавляемая этикетка IML – идеальное лицо вашего бренда
                        </div>
                        <div class="content-description">
                            О преимуществах и выгодах вплавляемой этикетки IML можно говорить часами, но лучше один раз увидеть! Презентация позволит понять, почему вам точно нужно попробовать
                        </div>
                    </div>
                    <div class="iml-section-1__form">
                        <?$APPLICATION->IncludeComponent(
                            "growtag:main.feedback",
                            "peshta_feedback_iml",
                            array(
                                "USE_CAPTCHA" => "N",
                                "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
                                "EMAIL_TO" => "",
                                "REQUIRED_FIELDS" => array(
                                    0 => "NAME",
                                ),
                                "EVENT_MESSAGE_ID" => array(
                                    0 => "26",
                                ),
                                "COMPONENT_TEMPLATE" => "peshta_feedback_iml",
                                "USER_CONSENT" => "N",
                                "USER_CONSENT_ID" => "0",
                                "USER_CONSENT_IS_CHECKED" => "Y",
                                "USER_CONSENT_IS_LOADED" => "N"
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
