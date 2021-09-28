<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TMJVFJQ');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="1bfb630fd0490649" />
    <meta name="yandex-verification" content="c951c25d8653adb2" />
    <meta name="cmsmagazine" content="9f729baf893c0e1cea9ce49005885600">
    <meta property="og:title" content="<?$APPLICATION->ShowTitle();?>"/>
    <meta property="og:url" content="<?=$APPLICATION->GetCurDir()?>"/>
    <meta property="og:image" content="<?=SITE_TEMPLATE_PATH?>/images/logo.png"/>
    <meta property="og:site_name" content="ПЕШТА - Типография Ижевск"/>
    <meta property="og:description" content="<?$APPLICATION->ShowProperty('description');?>"/>
    <meta property="og:type" content="website" />
    <meta name="copyright" lang="ru" content='Типография "ПЕШТА" Ижевск' />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/css/uikit.css">
    <link href="<?=SITE_TEMPLATE_PATH?>/dest/style/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.cookie.js"></script>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<header class="uk-margin uk-margin-top">
    <div class="uk-container uk-container-large ">
        <div class="uk-flex-middle fs-14 uk-flex-between@xl uk-flex-around uk-grid-small uk-position-relative" uk-grid>
            <nav class="uk-navbar-container uk-hidden@m padding_remove_mobile_left position-static" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="" class="burger">
                                <svg class="burger__open" width="20" height="16" viewBox="0 0 20 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0 1.75C0 1.05964 0.559644 0.5 1.25 0.5H18.75C19.4404 0.5 20 1.05964 20 1.75C20 2.44036 19.4404 3 18.75 3H1.25C0.559644 3 0 2.44036 0 1.75ZM0 8C0 7.30964 0.559644 6.75 1.25 6.75H18.75C19.4404 6.75 20 7.30964 20 8C20 8.69036 19.4404 9.25 18.75 9.25H1.25C0.559644 9.25 0 8.69036 0 8ZM20 14.25C20 13.5596 19.4404 13 18.75 13H1.25C0.559644 13 0 13.5596 0 14.25C0 14.9404 0.559644 15.5 1.25 15.5H18.75C19.4404 15.5 20 14.9404 20 14.25Z"
                                          fill="#303030"/>
                                </svg>

                                <svg class="burger__closed" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 10.586L16.95 5.63599L18.364 7.04999L13.414 12L18.364 16.95L16.95 18.364L12 13.414L7.04999 18.364L5.63599 16.95L10.586 12L5.63599 7.04999L7.04999 5.63599L12 10.586Z"
                                          fill="#303030"/>
                                </svg>
                            </a>

                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3 nav-bar uk-navbar-dropdown-left">
                                <div class="uk-navbar-dropdown-grid">
                                    <div>
                                        <div class="search uk-margin-small">
                                            <form class="search__body uk-search">
                                                <input class="uk-search-input search__text" type="search"
                                                       placeholder="Искать товары">
                                                <button type="submit" class="search__submit">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M11.0962 1.90381C13.4539 4.26151 13.6217 7.97981 11.5997 10.5312L15.1857 14.1172C15.4807 14.4122 15.4807 14.8906 15.1857 15.1857C14.8906 15.4807 14.4122 15.4807 14.1172 15.1857L10.5312 11.5997C7.97981 13.6217 4.26151 13.4539 1.90381 11.0962C-0.634602 8.55779 -0.634602 4.44221 1.90381 1.90381C4.44221 -0.634602 8.55779 -0.634602 11.0962 1.90381ZM10 2.92892C11.9526 4.88154 11.9526 8.04737 10 9.99999C8.04739 11.9526 4.88157 11.9526 2.92895 9.99999C0.976324 8.04737 0.976324 4.88154 2.92895 2.92892C4.88157 0.976297 8.04739 0.976296 10 2.92892Z"
                                                              fill="#737373"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="uk-margin-small">
                                            <a href="tel:+79226834883" class="uk-flex">
                                                <svg class="uk-margin-remove" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 10.9467V13.304C14.0001 13.4728 13.9361 13.6353 13.8211 13.7588C13.706 13.8823 13.5484 13.9575 13.38 13.9693C13.0887 13.9893 12.8507 14 12.6667 14C6.77533 14 2 9.22467 2 3.33333C2 3.14933 2.01 2.91133 2.03067 2.62C2.04248 2.45163 2.11772 2.29401 2.2412 2.17894C2.36468 2.06387 2.52722 1.99992 2.696 2H5.05333C5.13603 1.99992 5.2158 2.03057 5.27715 2.08601C5.33851 2.14145 5.37706 2.21772 5.38533 2.3C5.40067 2.45333 5.41467 2.57533 5.428 2.668C5.56049 3.59262 5.832 4.49189 6.23333 5.33533C6.29667 5.46867 6.25533 5.628 6.13533 5.71333L4.69667 6.74133C5.5763 8.79097 7.2097 10.4244 9.25933 11.304L10.286 9.868C10.328 9.80933 10.3892 9.76725 10.459 9.7491C10.5288 9.73095 10.6028 9.73787 10.668 9.76867C11.5113 10.1692 12.4104 10.4401 13.3347 10.572C13.4273 10.5853 13.5493 10.6 13.7013 10.6147C13.7835 10.6231 13.8596 10.6617 13.9149 10.7231C13.9702 10.7844 14.0008 10.8641 14.0007 10.9467H14Z"
                                                          fill="#737373"/>
                                                </svg>
                                                <strong class="roboto_font fs-14">+7 (922) 683-48-83</strong>
                                            </a>
                                        </div>
                                        <hr>
                                        <ul class="uk-nav-default uk-nav-parent-icon uk-text-uppercase" uk-nav>
                                            <li class="uk-parent">
                                                <a href="#">IML Этикетка</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="/iml-for-brand/">Владельцам бренда</a></li>
                                                    <li><a href="/iml-for-tare/">Изготовителям тары</a></li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="/laminat/">Тубный ламинат</a>
                                            </li>
                                            </li>
                                            <li class="uk-parent">
                                                <a href="#">Круговая этикетка</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="/krugovaya-etiketka/">Круговая этикетка</a></li>
                                                    <li><a href="/gibkaya-upakovka/">Гибкая упаковка</a></li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="/samokleyashchayasya-etiketka/">Самоклеющаяся этикетка</a>
                                            </li>
                                            <li class="uk-parent">
                                                <a href="#">Переменный код</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="/data-matrix-code/">Data-Matrix Code</a></li>
                                                    <li><a href="/smart-upakovka/">SMART-Упаковка</a></li>
                                                </ul>
                                            </li>
                                            <li class="uk-parent">
                                                <a href="/industries/">Отрасли</a>
                                                <ul class="uk-nav-sub">
                                                    <?$APPLICATION->IncludeComponent("growtag:news.list", "industries_menu", Array(
                                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                                        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
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
                                                        "DETAIL_URL" => "#SITE_DIR#/industries/#ELEMENT_CODE#/",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                                        "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                                                        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
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
                                                        "IBLOCK_ID" => "48",	// Код информационного блока
                                                        "IBLOCK_TYPE" => "industries",	// Тип информационного блока (используется только для проверки)
                                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
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
                                                            1 => "",
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
                                                </ul>
                                            </li>
                                            <li class="uk-parent">
                                                <a href="/about/">О компании</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="/contacts/">Контакты</a></li>
                                                    <li><a href="/oborudovanie/">Оборудование</a></li>
                                                    <li><a href="/clients/">Клиенты</a></li>
                                                    <li><a href="/material/">Полезные материалы</a></li>
                                                    <li><a href="/5s-standarts/">Стандарты 5С</a></li>
                                                    <li><a href="/brc-standarts/">Стандарты BRC</a></li>
                                                </ul>
                                        </ul>
                                        <hr>
                                        <div>
                                            <a href="mailto:upakovka@peshta.ru" class=" uk-flex uk-flex-middle">
                                                <svg class="uk-margin-remove" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.00004 2H14C14.1769 2 14.3464 2.07024 14.4714 2.19526C14.5965 2.32029 14.6667 2.48986 14.6667 2.66667V13.3333C14.6667 13.5101 14.5965 13.6797 14.4714 13.8047C14.3464 13.9298 14.1769 14 14 14H2.00004C1.82323 14 1.65366 13.9298 1.52864 13.8047C1.40361 13.6797 1.33337 13.5101 1.33337 13.3333V2.66667C1.33337 2.48986 1.40361 2.32029 1.52864 2.19526C1.65366 2.07024 1.82323 2 2.00004 2ZM8.04004 7.78867L3.76537 4.15867L2.90204 5.17467L8.04871 9.54467L13.1027 5.17133L12.2307 4.16267L8.04071 7.78867H8.04004Z"
                                                          fill="#737373"/>
                                                </svg>
                                                upakovka@peshta.ru
                                            </a>
                                        </div>
                                        <div class="fs-12 uk-margin-small">
                                            <div>г. Ижевск, ул. Кирова, 113</div>
                                            <div class="uk-text-muted">ПН – ПТ с 09:00 до 20:00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="uk-flex">
                <div class="padding_remove_mobile_left">
                    <a href="/">
                        <svg class="uk-visible@m" width="161" height="28" viewBox="0 0 161 28" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M4.00005 27.7001H1.10005C0.50005 27.7001 0.300049 27.6001 0.300049 26.9001V2.7001C0.300049 1.9001 0.80005 0.600098 2.50005 0.600098H21.1C22.8 0.600098 23.3 1.9001 23.3 2.7001V27.0001C23.3 27.7001 23.1 27.8001 22.5 27.8001H19.7001C19.1 27.8001 18.9001 27.7001 18.9001 27.0001V4.5001H4.80005V27.0001C4.80005 27.6001 4.60005 27.7001 4.00005 27.7001Z"
                                      fill="#FA3F3F"/>
                                <path d="M52.3 11.3999C52.3 14.6999 50.5 15.3999 48.4 15.3999H33.5C33.5 21.8999 37.3 24.2999 41.7 24.2999C44 24.2999 46.4 23.5999 47.8 22.7999C48.2 22.4999 48.5 22.5999 48.8 23.0999L49.9 25.2999C50.2 25.7999 50.1 26.0999 49.6 26.2999C47.1 27.7999 44.1 28.1999 41.4 28.1999C33.7 28.1999 29 23.8999 29 14.1999C29 5.0999 34.1 -0.100098 41 -0.100098C48.8 -9.76548e-05 52.3 4.5999 52.3 11.3999ZM41 3.6999C36.4 3.6999 34 7.4999 33.7 11.7999H48C48 7.4999 46.6 3.6999 41 3.6999Z"
                                      fill="#FA3F3F"/>
                                <path d="M92.1001 27.7H60.3001C58.8001 27.7 57.9001 26.7 57.9001 24.9V1.4C57.9001 0.6 58.2001 0.5 58.9001 0.5H61.4001C62.2001 0.5 62.4001 0.6 62.4001 1.4V24H74.0001V1.4C74.0001 0.6 74.2001 0.5 75.0001 0.5H77.4001C78.2001 0.5 78.4001 0.6 78.4001 1.4V24H90.0001V1.4C90.0001 0.6 90.3001 0.5 91.0001 0.5H93.5001C94.1001 0.5 94.4001 0.6 94.4001 1.4V24.9C94.5001 26.7 93.7001 27.7 92.1001 27.7Z"
                                      fill="#FA3F3F"/>
                                <path d="M110.8 27.7H108.3C107.6 27.7 107.4 27.5 107.4 26.8V4.4H99.4C98.6 4.4 98.5 4.1 98.5 3.5V1.5C98.5 0.9 98.7 0.5 99.4 0.5H120.2C121 0.5 121.1 0.9 121.1 1.5V3.5C121.1 4.1 121 4.4 120.2 4.4H111.8V26.8C111.8 27.6 111.5 27.7 110.8 27.7Z"
                                      fill="#FA3F3F"/>
                                <path d="M142.8 26.5C139.7 27.9 135.9 28.3 132.5 28.3C123.6 28.3 121.4 24.3 121.4 19.7C121.4 14.9 124.4 10.5 132.7 10.5H139V9.4C139 6.1 138 4 132.8 4C130.4 4 127.3 4.5 125.6 5C125 5.2 124.7 5.2 124.6 4.6L124 2.4C123.8 2 123.9 1.7 124.5 1.5C127.1 0.4 130.8 0 133.7 0C140.6 0 143.6 3.2 143.6 9V25.2C143.5 25.9 143.3 26.3 142.8 26.5ZM132.9 14.4C130.4 14.4 125.9 14.8 125.9 19.7C125.9 23.5 128.8 24.6 132.5 24.6C133.7 24.6 136.8 24.4 139 23.6V14.4H132.9Z"
                                      fill="#FA3F3F"/>
                                <path d="M160.5 4.40019C160.5 6.50019 158.8 8.2002 156.8 8.2002C154.7 8.2002 153.1 6.50019 153.1 4.40019C153.1 2.30019 154.8 0.700195 156.8 0.700195C158.8 0.700195 160.5 2.40019 160.5 4.40019ZM161 4.40019C161 2.00019 159.1 0.200195 156.7 0.200195C154.3 0.200195 152.4 2.10019 152.4 4.40019C152.4 6.80019 154.3 8.7002 156.7 8.7002C159.1 8.7002 161 6.80019 161 4.40019ZM158.9 3.30019C158.9 2.90019 158.7 2.50019 158.4 2.30019C158 2.10019 157.6 2.10019 157.2 2.10019H155.1V6.90019H155.7V4.7002H156.8L158.2 6.90019H158.9L157.5 4.7002C158.3 4.6002 158.9 4.30019 158.9 3.30019ZM158.3 3.30019C158.3 4.30019 157.3 4.2002 156.6 4.2002H155.7V2.50019H157.1C157.7 2.50019 158.3 2.60019 158.3 3.30019Z"
                                      fill="black"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="161" height="28" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="uk-hidden@m" width="100" height="17" viewBox="0 0 100 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M2.48448 16.8178H0.683235C0.310565 16.8178 0.18634 16.7571 0.18634 16.3321V1.63926C0.18634 1.15354 0.4969 0.364258 1.5528 0.364258H13.1056C14.1615 0.364258 14.4721 1.15354 14.4721 1.63926V16.3928C14.4721 16.8178 14.3478 16.8785 13.9752 16.8785H12.236C11.8634 16.8785 11.7391 16.8178 11.7391 16.3928V2.73212H2.98137V16.3928C2.98137 16.7571 2.85715 16.8178 2.48448 16.8178Z"
                                      fill="#FA3F3F"/>
                                <path d="M32.4845 6.9216C32.4845 8.92517 31.3665 9.35017 30.0621 9.35017H20.8075C20.8075 13.2966 23.1677 14.7537 25.9006 14.7537C27.3292 14.7537 28.8199 14.3287 29.6895 13.843C29.9379 13.6609 30.1243 13.7216 30.3106 14.0252L30.9938 15.3609C31.1802 15.6645 31.118 15.8466 30.8075 15.968C29.2547 16.8787 27.3913 17.1216 25.7143 17.1216C20.9317 17.1216 18.0125 14.5109 18.0125 8.6216C18.0125 3.0966 21.1802 -0.0605469 25.4659 -0.0605469C30.3106 0.000167407 32.4845 2.79302 32.4845 6.9216ZM25.4659 2.2466C22.6087 2.2466 21.118 4.55374 20.9317 7.16445H29.8137C29.8137 4.55374 28.9441 2.2466 25.4659 2.2466Z"
                                      fill="#FA3F3F"/>
                                <path d="M57.205 16.818H37.4535C36.5218 16.818 35.9628 16.2109 35.9628 15.118V0.850139C35.9628 0.364425 36.1491 0.303711 36.5839 0.303711H38.1367C38.6336 0.303711 38.7578 0.364425 38.7578 0.850139V14.5716H45.9628V0.850139C45.9628 0.364425 46.087 0.303711 46.5839 0.303711H48.0746C48.5715 0.303711 48.6957 0.364425 48.6957 0.850139V14.5716H55.9007V0.850139C55.9007 0.364425 56.087 0.303711 56.5218 0.303711H58.0746C58.4472 0.303711 58.6336 0.364425 58.6336 0.850139V15.118C58.6957 16.2109 58.1988 16.818 57.205 16.818Z"
                                      fill="#FA3F3F"/>
                                <path d="M68.8199 16.818H67.2671C66.8324 16.818 66.7081 16.6966 66.7081 16.2716V2.67157H61.7392C61.2423 2.67157 61.1802 2.48943 61.1802 2.12514V0.910854C61.1802 0.546568 61.3044 0.303711 61.7392 0.303711H74.6584C75.1553 0.303711 75.2174 0.546568 75.2174 0.910854V2.12514C75.2174 2.48943 75.1553 2.67157 74.6584 2.67157H69.441V16.2716C69.441 16.7573 69.2547 16.818 68.8199 16.818Z"
                                      fill="#FA3F3F"/>
                                <path d="M88.6957 16.0893C86.7702 16.9393 84.41 17.1821 82.2982 17.1821C76.7702 17.1821 75.4037 14.7536 75.4037 11.9607C75.4037 9.04643 77.2671 6.375 82.4224 6.375H86.3354V5.70714C86.3354 3.70357 85.7143 2.42857 82.4845 2.42857C80.9938 2.42857 79.0684 2.73214 78.0125 3.03571C77.6398 3.15714 77.4534 3.15714 77.3913 2.79286L77.0187 1.45714C76.8944 1.21429 76.9565 1.03214 77.3292 0.910714C78.9441 0.242857 81.2423 0 83.0435 0C87.3292 0 89.1926 1.94286 89.1926 5.46429V15.3C89.1305 15.725 89.0062 15.9679 88.6957 16.0893ZM82.5466 8.74286C80.9938 8.74286 78.1988 8.98571 78.1988 11.9607C78.1988 14.2679 80 14.9357 82.2982 14.9357C83.0435 14.9357 84.969 14.8143 86.3354 14.3286V8.74286H82.5466Z"
                                      fill="#FA3F3F"/>
                                <path d="M99.6894 2.67158C99.6894 3.94658 98.6335 4.97872 97.3913 4.97872C96.087 4.97872 95.0932 3.94658 95.0932 2.67158C95.0932 1.39658 96.1491 0.425153 97.3913 0.425153C98.6335 0.425153 99.6894 1.4573 99.6894 2.67158ZM100 2.67158C100 1.21444 98.8199 0.121582 97.3292 0.121582C95.8385 0.121582 94.6584 1.27515 94.6584 2.67158C94.6584 4.12872 95.8385 5.2823 97.3292 5.2823C98.8199 5.2823 100 4.12872 100 2.67158ZM98.6956 2.00372C98.6956 1.76087 98.5714 1.51801 98.3851 1.39658C98.1366 1.27515 97.8882 1.27515 97.6398 1.27515H96.3354V4.18944H96.7081V2.85372H97.3913L98.2609 4.18944H98.6956L97.8261 2.85372C98.323 2.79301 98.6956 2.61087 98.6956 2.00372ZM98.323 2.00372C98.323 2.61087 97.7019 2.55015 97.2671 2.55015H96.7081V1.51801H97.5776C97.9503 1.51801 98.323 1.57872 98.323 2.00372Z"
                                      fill="black"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="100" height="17" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="fs-12 uk-visible@m uk-margin-left">
                    <div>г. Ижевск, ул. Кирова, 113</div>
                    <div class="uk-text-muted">ПН – ПТ с 09:00 до 20:00</div>
                </div>
            </div>
            <div class="uk-visible@m">
                <a target="_blank" href="/blog/" class="blog-and-case">
                    блог и кейсы
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.3367 7.845L6.16417 15.0175L4.98584 13.8392L12.1575 6.66667H5.83667V5H15.0033V14.1667H13.3367V7.845Z"
                              fill="#FA3F3F"/>
                    </svg>
                </a>
            </div>
            <div class="uk-visible@m">
                <a href="" class="locale">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.2427 11.5761L8 15.8188L3.75734 11.5761C2.91823 10.737 2.34679 9.66789 2.11529 8.50401C1.88378 7.34013 2.0026 6.13373 2.45673 5.03738C2.91086 3.94103 3.6799 3.00396 4.66659 2.34467C5.65328 1.68539 6.81332 1.3335 8 1.3335C9.18669 1.3335 10.3467 1.68539 11.3334 2.34467C12.3201 3.00396 13.0891 3.94103 13.5433 5.03738C13.9974 6.13373 14.1162 7.34013 13.8847 8.50401C13.6532 9.66789 13.0818 10.737 12.2427 11.5761ZM8 8.66678C8.35362 8.66678 8.69276 8.5263 8.94281 8.27625C9.19286 8.0262 9.33334 7.68707 9.33334 7.33344C9.33334 6.97982 9.19286 6.64068 8.94281 6.39064C8.69276 6.14059 8.35362 6.00011 8 6.00011C7.64638 6.00011 7.30724 6.14059 7.05719 6.39064C6.80715 6.64068 6.66667 6.97982 6.66667 7.33344C6.66667 7.68707 6.80715 8.0262 7.05719 8.27625C7.30724 8.5263 7.64638 8.66678 8 8.66678Z"
                              fill="#737373"/>
                    </svg>
                    Ижевск
                </a>
            </div>
            <div class="uk-visible@m">
                <a href="mailto:upakovka@peshta.ru" class=" uk-flex uk-flex-middle">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.00004 2H14C14.1769 2 14.3464 2.07024 14.4714 2.19526C14.5965 2.32029 14.6667 2.48986 14.6667 2.66667V13.3333C14.6667 13.5101 14.5965 13.6797 14.4714 13.8047C14.3464 13.9298 14.1769 14 14 14H2.00004C1.82323 14 1.65366 13.9298 1.52864 13.8047C1.40361 13.6797 1.33337 13.5101 1.33337 13.3333V2.66667C1.33337 2.48986 1.40361 2.32029 1.52864 2.19526C1.65366 2.07024 1.82323 2 2.00004 2ZM8.04004 7.78867L3.76537 4.15867L2.90204 5.17467L8.04871 9.54467L13.1027 5.17133L12.2307 4.16267L8.04071 7.78867H8.04004Z"
                              fill="#737373"/>
                    </svg>
                    upakovka@peshta.ru
                </a>
            </div>
            <div class="uk-visible@m">
                <a href="tel:+79226834883" class=" uk-flex uk-flex-middle">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 10.9467V13.304C14.0001 13.4728 13.9361 13.6353 13.8211 13.7588C13.706 13.8823 13.5484 13.9575 13.38 13.9693C13.0887 13.9893 12.8507 14 12.6667 14C6.77533 14 2 9.22467 2 3.33333C2 3.14933 2.01 2.91133 2.03067 2.62C2.04248 2.45163 2.11772 2.29401 2.2412 2.17894C2.36468 2.06387 2.52722 1.99992 2.696 2H5.05333C5.13603 1.99992 5.2158 2.03057 5.27715 2.08601C5.33851 2.14145 5.37706 2.21772 5.38533 2.3C5.40067 2.45333 5.41467 2.57533 5.428 2.668C5.56049 3.59262 5.832 4.49189 6.23333 5.33533C6.29667 5.46867 6.25533 5.628 6.13533 5.71333L4.69667 6.74133C5.5763 8.79097 7.2097 10.4244 9.25933 11.304L10.286 9.868C10.328 9.80933 10.3892 9.76725 10.459 9.7491C10.5288 9.73095 10.6028 9.73787 10.668 9.76867C11.5113 10.1692 12.4104 10.4401 13.3347 10.572C13.4273 10.5853 13.5493 10.6 13.7013 10.6147C13.7835 10.6231 13.8596 10.6617 13.9149 10.7231C13.9702 10.7844 14.0008 10.8641 14.0007 10.9467H14Z"
                              fill="#737373"/>
                    </svg>
                    +7 (922) 683-48-83
                </a>
            </div>
            <div class="padding_remove_mobile_left">
                <button class="red-button red-button_small " uk-toggle="target: #callback-modal">Заявка на расчет</button>
            </div>
        </div>
        <hr class="uk-visible@m">
        <div class="uk-visible@m">
            <nav class="uk-navbar-container uk-navbar-transparent uk-width-5-6" uk-navbar>
                <div class="uk-navbar-left uk-width">
                    <ul class="uk-navbar-nav uk-flex-between uk-width">
                        <li>
                            <a href="#">IML Этикетка</a>
                            <div class="uk-navbar-dropdown uk-box-shadow-small border-radius">
                                <ul class="uk-nav uk-navbar-dropdown-nav fs-14">
                                    <li><a href="/iml-for-brand/">Владельцам бренда</a></li>
                                    <li><a href="/iml-for-tare/">Изготовителям тары</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/laminat/">тубный ламинат</a>
                        </li>
                        <li>
                            <a href="#">Круговая этикетка</a>
                            <div class="uk-navbar-dropdown uk-box-shadow-small border-radius">
                                <ul class="uk-nav uk-navbar-dropdown-nav fs-14">
                                    <li><a href="/krugovaya-etiketka/">Круговая этикетка</a></li>
                                    <li><a href="/gibkaya-upakovka/">Гибкая упаковка</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/samokleyashchayasya-etiketka/">Самоклеющаяся этикетка</a>
                        </li>
                        <li>
                            <a href="#">Переменный код</a>
                            <div class="uk-navbar-dropdown uk-box-shadow-small border-radius">
                                <ul class="uk-nav uk-navbar-dropdown-nav fs-14">
                                    <li><a href="/data-matrix-code/">Data-Matrix Code</a></li>
                                    <li><a href="/smart-upakovka/">SMART-Упаковка</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/industries/">Отрасли</a>
                            <div class="uk-navbar-dropdown uk-box-shadow-small border-radius">
                                <ul class="uk-nav uk-navbar-dropdown-nav fs-14">
                                    <?$APPLICATION->IncludeComponent("growtag:news.list", "industries_menu", Array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
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
                                        "DETAIL_URL" => "#SITE_DIR#/industries/#ELEMENT_CODE#/",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                        "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                                        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
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
                                        "IBLOCK_ID" => "48",	// Код информационного блока
                                        "IBLOCK_TYPE" => "industries",	// Тип информационного блока (используется только для проверки)
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
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
                                            1 => "",
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
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/about/">О компании</a>
                            <div class="uk-navbar-dropdown uk-box-shadow-small border-radius">
                                <ul class="uk-nav uk-navbar-dropdown-nav fs-14">
                                    <li><a href="/contacts/">Контакты</a></li>
                                    <li><a href="/oborudovanie/">Оборудование</a></li>
                                    <li><a href="/clients/">Клиенты</a></li>
                                    <li><a href="/material/">Полезные материалы</a></li>
                                    <li><a href="/5s-standarts/">Стандарты 5С</a></li>
                                    <li><a href="/brc-standarts/">Стандарты BRC</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</header>
