<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Узнайте больше о возможностях Пешты для вашего бизнеса");
$APPLICATION->SetPageProperty("title", "Полезные материалы");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Полезные материалы");
?>
<div class="wn-banner">
    <div class="uk-container uk-container-large uk-height-1-1 justify-content-center">
        <div class="uk-height-1-1 uk-text-center uk-flex  uk-flex-middle">
            <div class="wn-banner__text">
                <h1><?=$APPLICATION->GetProperty("title")?></h1>
                <p>
                    <?=$APPLICATION->GetProperty("description")?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="uk-container uk-container-large padding_left_right_remove_mobile">
    <div class="uk-section">
        <?$APPLICATION->IncludeComponent("growtag:news.list", "polezniye_materialy", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DESC_TEXT" => "Подзаголовок",	// Подзаголовок
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "36",	// Код информационного блока
		"IBLOCK_TYPE" => "materials",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "200",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "FILE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"TITLE_TEXT" => "Заголовок",	// Заголовок
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
    "growtag:main.feedback",
    "material_modal",
    array(
        "FROM" => "upakovka.peshta.ru", // Источник сделки
        "FROM_FIELD_ID" => "UF_CRM_1614519609", // ID пользовательского поля "Источник"
        "USERTYPE_FIELD_ID" => "UF_CRM_1614519142", // ID пользовательского поля "Тип покупателя"
        "DEAL_TITLE" => "Скачивание материала", // Название сделки
        "CATEGORY_ID" => 26, // ID Направления (IML - 26)
        "ASSIGNED_BY_ID" => 18, // ID ответственного пользователя
        "STAGE_ID" => "C26:NEW", // Стадия сделки
        "USERTYPE_FIELD_LIST_ID" => 540, // ID типа покупателя
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Заявка успешно отправлена. Материалы отправлены на указанный email.",
        "EMAIL_TO" => "",
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "7",
        ),
        "EVENT_MESSAGE_ID_OUT" => '18',
        "EVENT_OUT_ATTACHMENTS_SOURCE_IBLOCK_ID" => "36",
        "EVENT_OUT_ATTACHMENT_PROPERTY_NAME" => "FILE",
        "COMPONENT_TEMPLATE" => "peshta_feedback_iml",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N"
    ),
    false
);?>
<script>
    var currentItemId = 0;

    $('[href="#material-modal"]').click(function(e) {
        currentItemId = this.dataset.id;
    });

    $('#material-modal').on("shown", function (e) {
        $(this).find('[name="RESOURCE_ID"]').val(currentItemId);
    });
</script>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
