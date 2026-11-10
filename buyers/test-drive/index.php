<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Запись на тест-драйв Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetTitle("Испытайте коммерческие автомобили в реальных условиях");
?>
<div class="container my-5">
	<!-- Page Header H1 -->
	<div class="row mb-5">
		<div class="col text-center">
			<h1 class="fw-b-c text-black" style="font-size: calc(1.8rem + 1.2vw); line-height: 1.2;">
				Испытайте коммерческие автомобили в&nbsp;реальных условиях
			</h1>
		</div>
	</div>

	<!-- 5 Opportunity Cards -->
	<div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3 mb-5">
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-1.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Продолжительность до&nbsp;7&nbsp;дней</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-2.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Разрешен выезд за&nbsp;пределы региона</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-3.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">По всей России</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-4.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Пробег до 200&nbsp;км в&nbsp;сутки</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-5.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Круглый год</div>
			</div>
		</div>
	</div>

	<!-- Steps Section -->
	<div class="row mb-4">
		<div class="col text-center">
			<h2 class="fw-b-c text-black">Этапы тест-драйва</h2>
		</div>
	</div>
	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 1</div>
				<h4 class="fw-b-c text-black mb-3">Выбор</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					Выберите одну из&nbsp;популярных моделей, отправьте заявку или позвоните в&nbsp;дилерский центр
				</p>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 2</div>
				<h4 class="fw-b-c text-black mb-3">Оформление</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					Оформите документы в&nbsp;дилерском центре и&nbsp;возьмите автомобиль в&nbsp;тестовую эксплуатацию на&nbsp;срок до 7&nbsp;дней
				</p>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 3</div>
				<h4 class="fw-b-c text-black mb-3">Эксплуатация</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					Оцените все характеристики автомобилей, чтобы лучше понять, что нужно вашему бизнесу
				</p>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 4</div>
				<h4 class="fw-b-c text-black mb-3">Поделитесь мнением</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					После окончания тестовой эксплуатации и&nbsp;сдаче автомобиля, заполните анкету. Нам важно ваше мнение!
				</p>
			</div>
		</div>
	</div>

	<!-- Requirements / Accordions for Individuals and Legal entities -->
	<div class="row justify-content-center mb-5">
		<div class="col-12">
			<div class="d-flex flex-column gap-3">
				<div class="border border-dark rounded-3 px-4 py-3 d-flex justify-content-between align-items-center cursor-pointer">
					<span class="text-uppercase fw-b-c text-black" style="letter-spacing: 0.5px;">Для физических лиц</span>
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/credit/chevron-down.svg" alt="" style="width: 16px; height: 16px;">
				</div>
				<div class="border border-dark rounded-3 px-4 py-3 d-flex justify-content-between align-items-center cursor-pointer">
					<span class="text-uppercase fw-b-c text-black" style="letter-spacing: 0.5px;">Для юридических лиц</span>
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/credit/chevron-down.svg" alt="" style="width: 16px; height: 16px;">
				</div>
			</div>
		</div>
	</div>

	<!-- Test Drive Booking Form Section -->
	<div class="row mb-4">
		<div class="col text-center">
			<h2 class="fw-b-c text-black">Запишитесь на&nbsp;тест-драйв</h2>
		</div>
	</div>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"form.test-drive",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_ELEMENT_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_CODE" => "FORM_TEST_DRIVE",
			"ELEMENT_ID" => "",
			"FIELD_CODE" => ["ID", "CODE", "NAME"],
			"IBLOCK_ID" => "6",
			"IBLOCK_TYPE" => "content",
			"IBLOCK_URL" => "",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Страница",
			"PROPERTY_CODE" => ["FIELDS"],
			"SET_BROWSER_TITLE" => "N",
			"SET_CANONICAL_URL" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"STRICT_SECTION_CHECK" => "N",
			"USE_PERMISSIONS" => "N",
			"USE_SHARE" => "N"
		)
	);?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
