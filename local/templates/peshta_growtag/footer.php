<footer>
    <div class="container">
        <div class="footer-wrap d-flex bd-highlight">
            <div class="p-2 bd-highlight">
                <a href="/">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/logo-footer.svg" alt="ПЕШТА - Типография">
                </a>
                <address>
                    г. Ижевск, ул. Кирова, 113
                </address>
                <div class="footer-time">
                    Пн. – Пт. с 09:00 до 18:00
                </div>
                <div class="footer-phone mt-4">
                    <a href="tel:+73412655572">+7 (3412) 65-55-72</a>
                </div>
                <a href="#" data-target="#modalUpakovka" data-toggle="modal">Заказать звонок</a>
            </div>
            <div class="p-2 bd-highlight">
                <ul>
                    <li>
                        <a href="/">
                            Владельцам бренда
                        </a>
                    </li>
                    <li>
                        <a href="/iml-for-tare/">
                            Производителям тары
                        </a>
                    </li>
                    <!--<li>
                        <a href="/service/">Наш сервис</a>
                    </li>
                    <li>
                        <a href="/cases/">Кейсы</a>
                    </li>-->
                    <li>
                        <a href="/material/">
                            Выгоды IML для владельцев бренда
                        </a>
                    </li>
                </ul>
                <ul>
                    <!--<li>
                        <a href="/blog/">Блог</a>
                    </li>-->
                    <li>
                        <a href="/about/">О компании</a>
                    </li>
                    <li>
                        <a href="/contacts/">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto p-2 bd-highlight">
                <!--<div class="footer-icons">
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/vk.svg" alt="VKontakte"/></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/youtube.svg" alt="YouTube"/></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/telegram.svg" alt="Telegram"/></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/whatsapp.svg" alt="WhatsApp"/></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/instagram.svg" alt="Instagram"/></a>
                </div>
                <div class="footer-text-right mt-2">
                    Следите за нами
                </div>-->
                <div class="footer-mail mt-2">
                    <a href="mailto:upakovka@peshta.ru"><i class="fas fa-envelope"></i> upakovka@peshta.ru</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright row justify-content-center align-items-center">
            ООО "ИСКРА"&copy; <?=date("Y")?> Все&nbsp;права&nbsp;защищены.&nbsp;<a href="/privacy/">Политика конфиденциальности</a>
        </div>
    </div>
</footer>
<?
$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "peshta_callback_modal",
    array(
		"FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => "Заявка на тест или пробный заказ (Модальное окно)", // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => "", // ID типа покупателя
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
        "EMAIL_TO" => "",
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "7",
        ),
        "COMPONENT_TEMPLATE" => "peshta_callback_modal",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N"
    ),
    false
);

$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "peshta_settlement_modal",
    array(
		"FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => "Заявка на тест или пробный заказ (Модальное окно)", // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => "", // ID типа покупателя
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
        "EMAIL_TO" => "",
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "26",
        ),
        "COMPONENT_TEMPLATE" => "peshta_settlement_modal",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N"
    ),
    false
);

$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "peshta_upakovka_modal",
    array(
		"FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => "Заявка на тест или пробный заказ (Модальное окно)", // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => "", // ID типа покупателя
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.",
        "EMAIL_TO" => "",
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
            1 => "EMAIL",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "7",
        ),
        "COMPONENT_TEMPLATE" => "peshta_upakovka_modal",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N"
    ),
    false
);?>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallbackRecap&render=6LfkvkMaAAAAABn08kEced07b6TehmZKvtKfsrTc"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/app.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(71679709, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/71679709" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn-ru.bitrix24.ru/b13371058/crm/site_button/loader_6_o4k4qf.js');
</script>
</body>
</html>
