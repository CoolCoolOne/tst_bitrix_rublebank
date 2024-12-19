<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><section class="section-banner">
<div class="container">
	<div class="head-banner">
		<div class="text-button">
			<p>
				 Кредит <br>
				 на любые цели
			</p>
			<div class="button-banner">
 <a href="#!" class="blue-button">Получить кредит</a> <a href="#!" class="white-button">Подробнее</a>
			</div>
		</div>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/banner.png" alt="">
	</div>
</div>
 </section> <section class="section-card-grid">
<div class="container">
	<p class="zagolovok-section-card">
		 Лучшие решения в Рубльбанке
	</p>
	<p class="descriptor">
		 Банковские условия для комфортной жизни
	</p>
	<div class="parent">
		<div class="div1">
			<div class="card-text">
				<div class="card-head">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "card_one"
	)
);?>
				</div>
				<div class="main-card-text">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text_one"
	)
);?>
				</div>
			</div>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/ipoteka.png" alt="">
		</div>
		<div class="div2">
			<div class="card-text">
				<div class="card-head">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "card_two"
	)
);?>
				</div>
				<div class="main-card-text">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text_two"
	)
);?>
				</div>
			</div>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/ipoteka1.png" alt="">
		</div>
		<div class="div3">
			<div class="card-text">
				<div class="card-head">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "card_three"
	)
);?>
				</div>
				<div class="main-card-text">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text_three"
	)
);?>
				</div>
			</div>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/partner.png" alt="">
		</div>
		<div class="div4">
			<div class="card-text">
				<div class="card-head">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "card_four"
	)
);?>
				</div>
				<div class="main-card-text">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text_four"
	)
);?>
				</div>
			</div>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/personal-card.png" alt="">
		</div>
	</div>
</div>
 </section> <section class="secton-credit-card">
<div class="container">
	<div class="parent-card">
		<div class="main-card">
			<div class="head-img-main-card">
				<p class="head-main">
					 Кредитная карта 60 дней без процентов
				</p>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/card60day.png" alt="">
			</div>
			<div class="information-main-card">
				<div class="li-information">
					<p class="head-information">
						 500 000 p
					</p>
					<div class="line-card">
 <br>
					</div>
					<p class="main-information">
						 лимит <br>
						 по карте
					</p>
				</div>
				<div class="li-information">
					<p class="head-information">
						 от 12%
					</p>
					<div class="line-card">
 <br>
					</div>
					<p class="main-information">
						 ставка <br>
						 по карте
					</p>
				</div>
				<div class="li-information">
					<p class="head-information">
						 1 день
					</p>
					<div class="line-card">
 <br>
					</div>
					<p class="main-information">
						 решение<br>
						 по заявке
					</p>
				</div>
			</div>
			<div class="button-banner">
 <a href="#!" class="blue-button">Получить кредит</a> <a href="#!" class="white-button">Подробнее</a>
			</div>
		</div>
		<div class="credit-card">
			<p class="name-card">
				 Кредитные <br>
				 карты
			</p>
			<div class="img-card">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/strelka.png" alt="">
			</div>
		</div>
		<div class="debet-card">
 <a class="name-card" href="/karty.php">
			Дебетовые <br>
			 карты </a>
			<div class="img-card">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/strelka.png" alt="">
			</div>
		</div>
	</div>
</div>
 </section> <section class="section-how-get-card">
<div class="container">
	<p class="zagolovok-section-card">
		 Как получить карту
	</p>
	<div class="tutor-card">
		<div class="icon-text">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/icon-ostavit-card.png" alt="">
			<p>
				 Оставить <br>
				 заявку
			</p>
		</div>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/Vector.svg" alt="" class="vector">
		<div class="icon-text">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/icon-p-card.png" alt="">
			<p>
				 Получить <br>
				 одобрение
			</p>
		</div>
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/Vector.svg" alt="" class="vector">
		<div class="icon-text">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/icon-zabrat-card.png" alt="">
			<p>
				 Забрать <br>
				 карту
			</p>
		</div>
	</div>
</div>
 </section>
<!-- доработать блок с отзывами -->

<p class="zagolovok-section-card">
		Отзывы
	</p>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"review",
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
		"COMPONENT_TEMPLATE" => "review",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"IBLOCK_TYPE" => "review",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>