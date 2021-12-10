<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", GetMessage('We print polygraphy in Izhevsk. Operational support with bright promotional materials for business growth.'));
$APPLICATION->SetPageProperty("keywords", GetMessage('printing house, izhevsk, business cards, corporate identity, order business cards, packaging, printing, stamps, booklets, printing, numerators, printing for business'));
$APPLICATION->SetPageProperty("title", GetMessage('Peshta - Customized solutions for your business'));
$APPLICATION->SetTitle(GetMessage('Customized solutions for your business'));
$APPLICATION->SetPageProperty('canonical', "https://".$_SERVER['HTTP_HOST'].$APPLICATION->GetCurPage());
?><div class="wn-banner">
	<div class="uk-container uk-container-large uk-height-1-1">
		<div class="uk-height-1-1" uk-grid="">
			<div class="wn-banner__text uk-width-1-2@s">
				<h2>Customized solutions for your business</h2>
				<div class="uk-display-inline-block">
 <a href="" class="red-button" uk-toggle="target: #callback-modal" aria-expanded="false"><?= GetMessage('Заказать') ?></a>
				</div>
			</div>
			<!-- <div class="wn-banner__img uk-width-1-2@s">
				<img src="/local/templates/upakovka/images/product.png" alt="">
			</div> -->
		</div>
	</div>
</div>
<div class="uk-container uk-container-large">
	<div class="uk-section">
		<p class="uk-margin-large-bottom">
			<?php /*Таким образом рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации. Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений.*/ ?>
		</p>
		<div class="uk-child-width-1-3@m" uk-grid="">
			 <?$APPLICATION->IncludeComponent(
	"growtag:news.list",
	"industries_list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DESC_TEXT" => GetMessage('Подзаголовок'),
		"DETAIL_URL" => "#SITE_DIR#/industries/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "89",
		"IBLOCK_TYPE" => "industries",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "200",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => GetMessage('Новости'),
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE_TEXT" => GetMessage('Заголовок')
	)
);?>
		</div>
	</div>
</div>
<div class="bg_gray_dark uk-section">
	<div class="uk-container uk-container-large">
		<div>
			<h2 class="uk-text-center uk-margin-medium-bottom">Our partners</h2>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"growtag:news.list",
	"spisok_klientov",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DESC_TEXT" => GetMessage('Подзаголовок'),
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "88",
		"IBLOCK_TYPE" => "newpeshta",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => GetMessage('Новости'),
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"LINK",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE_TEXT" => GetMessage('Заголовок')
	)
);?>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"growtag:main.feedback",
	"peshta_feedback_footer_NEW1",
	Array(
		"ASSIGNED_BY_ID" => "18",
		"CATEGORY_ID" => "26",
		"COMPONENT_TEMPLATE" => "peshta_feedback_index",
		"DEAL_TITLE" => GetMessage('Заявка на тест или пробный заказ'),
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"FROM" => "upakovka.peshta.ru",
		"FROM_FIELD_ID" => "UF_CRM_1614519609",
		"OK_TEXT" => GetMessage('Заявка на обратный звонок успешно отправлена. Ожидайте звонка наших менеджеров.'),
		"REQUIRED_FIELDS" => array(0=>"NAME",),
		"STAGE_ID" => "C26:NEW",
		"TITLE_TEXT" => GetMessage('Хотите увидеть примеры работ в вашем бизнес-сегменте?'),
		"USERTYPE_FIELD_ID" => "UF_CRM_1614519142",
		"USERTYPE_FIELD_LIST_ID" => "540",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CAPTCHA" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>