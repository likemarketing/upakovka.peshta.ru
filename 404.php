<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
    <div class="section section-404 section-all-height d-flex align-items-center pr-0 pl-0">
        <div class="row justify-content-center">
            <div class="row">
                <img src="/images/404.png"/>
            </div>
            <div class="row">
                <h2>Здесь ничего нет!</h2>
            </div>
            <div class="row">
                <a href="/" class="section__button btn">На главную</a>
            </div>
        </div>
    </div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
