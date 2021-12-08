<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/slick-theme.css">
<link href="<?=SITE_TEMPLATE_PATH?>/style/style-new.css" rel="stylesheet">
    <div class="section section-404 section-all-height d-flex align-items-center pr-0 pl-0">
        <div class="container" style="text-align: center">
            <br/><br/><br/><br/>
            <img src="/images/404.png"/>
            <br/><br/>
            <h2>Здесь ничего нет!</h2>
            <br/><br/>
            <a href="/" class="section__button btn">На главную</a>
            <br/><br/><br/><br/>
        </div>
    </div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
