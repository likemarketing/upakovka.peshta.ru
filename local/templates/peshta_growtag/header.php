<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:og="http://ogp.me/ns#">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TMJVFJQ');</script>
    <!-- End Google Tag Manager -->
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/style.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/style-new.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick-theme.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/circle.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-offcanvas/dist/css/bootstrap.offcanvas.min.css">
    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&amp;subset=cyrillic" rel="stylesheet">
    <script type="text/javascript">
        var body = document.body;
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://kit.fontawesome.com/21d8d1f82e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slick.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-offcanvas/dist/js/bootstrap.offcanvas.js"></script>
    <!--<script type="text/javascript" src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMJVFJQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<nav class="navbar navbar-light bg-light">
    <div class="row header">
        <div class="container">
                <div class="header-top d-flex bd-highlight align-items-center mb-1">
                    <div class="mr-auto p-2 bd-highlight">
                        <div class="header-top-left-logo">
                            <a href="/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/logo-header.png" alt="ПЕШТА" width="150"></a>
                        </div>
                        <div class="header-top-left-address">
                            <div>г. Ижевск, ул. Кирова, 113</div>
                            <div>Пн. – Пт. с 09:00 до 18:00</div>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight"><div class="header-top-right-mail"><a href="mailto:upakovka@peshta.ru"><i class="fas fa-envelope"></i> upakovka@peshta.ru</a></div></div>
                    <!--<div class="p-2 bd-highlight"><a href="/personal/" class="btn-gray"><i class="fas fa-user"></i> Кабинет</a></div>-->
                    <div class="p-2 bd-highlight">
                        <div class="header-top-tel">
                            <a href="tel:+73412655572">+7 (3412) 65-55-72</a>
                        </div>
                        <div class="header-top-call">
                            <a href="#" data-target="#modalUpakovka" data-toggle="modal">Заказать звонок</a>
                        </div>
                    </div>
                </div>
                <div class="header-bottom d-flex bd-highlight align-items-center mb-1">
                    <div class="mr-auto p-2 bd-highlight menu">
                        <ul class="menu-head">
                            <li>
                                <div class="dropdown-menu-item">
                                    <a class="dropdown-toggle dropbtn" href="#" style="pointer-events: none">
                                        Продукция
                                    </a>
                                    <div class="dropdown-menu-item-content">
                                        <div class="menu-catalog-list">
                                            <div class="menu-catalog-list__links">
                                                <div class="link">
                                                    <a href="/">
                                                        <div class="link__title">
                                                            Владельцам бренда
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="link">
                                                    <a href="/iml-for-tare/">
                                                        <div class="link__title">
                                                            Производителям тары
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--<li><a href="/service/" class="root-item">Наш сервис</a></li>
                            <li><a href="/cases/" class="root-item">Кейсы</a></li>-->
                            <li>
                                <div class="dropdown-menu-item">
                                    <a class="dropdown-toggle dropbtn" href="#" style="pointer-events: none">
                                        Полезные материалы
                                    </a>
                                    <div class="dropdown-menu-item-content">
                                        <div class="menu-catalog-list">
                                            <div class="menu-catalog-list__links">
                                                <div class="link">
                                                    <a href="/material/">
                                                        <div class="link__title">
                                                            Выгоды IML для владельцев бренда
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--<li><a href="/blog/" class="root-item">Блог</a></li>-->
                            <li><a href="/about/" class="root-item">О компании</a></li>
                            <li><a href="/contacts/" class="root-item">Контакты</a></li>
                        </ul>
                    </div>
                    <!--<div class="p-2 bd-highlight search">
                        <a href="/search"><i class="fas fa-search"></i></a>
                    </div>-->
                    <div class="p-2 bd-highlight callback">
                        <a href="#" data-target="#modalUpakovka" data-toggle="modal" class="btn-red">Заявка на расчет</a>
                    </div>
                </div>
        </div>
    </div>
</nav>
<!-- NAVBAR MOBILE -->
<nav class="navbar navbar-mobile fixed-top ">
    <div class="navbar__right">
        <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
            <span class="sr-only">Toggle navigation</span>
            <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="48" onclick="this.classList.toggle('active')">
                <path
                    class="line top"
                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                <path
                    class="line middle"
                    d="m 30,50 h 40" />
                <path
                    class="line bottom"
                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
            </svg>
        </button>
        <a href="/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/logo-header.png" alt="ПЕШТА" height="48"></a>
    </div>
    <div class="navbar__left">
        <a class="mobile-button-call">
            <i class="fas fa-phone-alt"></i>
        </a>
        <a class="mobile-button-login" href="https://color.peshta.ru/personal/">
            <i class="fas fa-user"></i>Вход
        </a>
    </div>
</nav>
<div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
    <form id="mobile-search">
        <input type="text" placeholder="Поиск">
        <button type="submit"></button>
    </form>
    <div class="mobile-call">
        <a href="tel:+73412655572" class="mobile-call__telephone">+7 (3412) 65-55-72</a>
        <a href="#" data-target="#modalUpakovka" data-toggle="modal" class="mobile-call__callback">Заказать звонок</a>
    </div>
    <hr/>
    <a href="#" data-target="#modalUpakovka" data-toggle="modal" class="mobile-red-button">Заявка на расчет</a>
    <div class="mobile-menu">
        <div class="accordion" id="accordionMobileMenu">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Продукция
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionMobileMenu">
                    <div class="card-body">
                        <ul>
                            <li><a href="/">Владельцам бренда</a></li>
                            <li><a href="/iml-for-tare/">Производителям тары</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionMobileMenu2">
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Полезные материалы
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionMobileMenu2">
                    <div class="card-body">
                        <ul>
                            <li><a href="/material/">Выгоды IML для владельцев бренда</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul>
            <!--<li>
                <a href="/service/">Наш сервис</a>
            </li>
            <li>
                <a href="/cases/">Кейсы</a>
            </li>
            <li>
                <a href="/blog/">Блог</a>
            </li>-->
            <li>
                <a href="/about/">О компании</a>
            </li>
            <li>
                <a href="/contacts/">Контакты</a>
            </li>
        </ul>
        <hr/>
        <div class="mobile-menu__mail">
            <a href="mailto:info@peshta.ru">
                <i class="fas fa-envelope" aria-hidden="true"></i> info@peshta.ru
            </a>
        </div>
    </div>
</div>
