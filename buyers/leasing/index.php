<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Лизинг на автомобили Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetTitle("Программа «Бонус за лизинг»: выгода до 500 000 ₽*");
?>
<div class="container my-4">
	<!-- Hero banner -->
	<div class="row">
		<div class="col">
			<div class="leasing-banner b-radius-yaradius-40 b-radius-tr-bl-nr position-relative overflow-hidden d-flex flex-column justify-content-end p-4 p-md-5"
				 style="min-height: 420px; background: url('<?= SITE_TEMPLATE_PATH ?>/assets/images/leasing/hero.png?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/leasing/hero.png'); ?>') no-repeat center center; background-size: cover;">
				<div class="leasing-banner-gradient position-absolute top-0 start-0 w-100 h-100"
					 style="background: linear-gradient(90deg, rgba(44, 44, 44, 0.8) 0%, rgba(44, 44, 44, 0.4) 45%, rgba(52, 52, 52, 0) 80%); pointer-events: none;"></div>
				<div class="position-relative z-1" style="max-width: 680px;">
					<h1 class="c-yawhite fw-b-c mb-0" style="font-size: calc(1.75rem + 1.2vw); line-height: 1.15;">
						Программа «Бонус за&nbsp;лизинг»:<br>выгода до 500 000 ₽*
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container my-5">
	<!-- Main conditions & Benefits (2 columns matching Figma 215:1785) -->
	<div class="row g-4 g-lg-5" style="color: #292523; font-size: 16px; line-height: 22px;">
		<!-- Left Column -->
		<div class="col-12 col-lg-6 d-flex flex-column gap-4">
			<!-- Advantage -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Преимущество программы:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Использование автомобиля без его приобретения в собственность позволяет покупателям оптимизировать структуру финансовых затрат. Программа финансовой поддержки создана, чтобы снизить размер лизинговых платежей для клиентов, сделав стоимость владения автомобилей SOLLERS более привлекательной.</span>
					</li>
				</ul>
			</div>

			<!-- Who can use -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Кто может воспользоваться:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Любое юридическое лицо, физическое лицо или индивидуальный предприниматель, приобретающий автомобили Sollers в&nbsp;лизинг.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Малотоннажные автомобили: Sollers Argo (Арго) и&nbsp;Sollers SF5 (СФ5).</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Пикапы: Sollers ST6 (СТ6), Sollers ST8 (СТ8), Sollers ST9 (СТ9).</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Минивэны Sollers SP7 (СП7)</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Грузовые автомобили: Sollers TR50 (ТР50), Sollers TR80 (ТР80), Sollers TR120 (ТР120), Sollers TR180 (ТР180).</span>
					</li>
				</ul>
			</div>

			<!-- How to use -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Как воспользоваться:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<div>
							<p class="mb-0">Предоставляется клиенту при обращении к&nbsp;официальному дилеру или в&nbsp;партнерскую лизинговую компанию.</p>
							<p class="mb-0">Список лизинговых компаний-партнёров:</p>
							<p class="mb-0">ООО Альфа-Лизинг</p>
							<p class="mb-0">ООО Балтийский лизинг</p>
							<p class="mb-0">АО ВТБ Лизинг</p>
							<p class="mb-0">АО Газпромбанк Лизинг (включая ООО «Каркаде» и ООО «Газпромбанк автолизинг»)</p>
							<p class="mb-0">ПАО ЛК Европлан и ООО «Автолизинг»</p>
							<p class="mb-0">ООО Мэйджор Лизинг</p>
							<p class="mb-0">ООО ПСБ Лизинг</p>
							<p class="mb-0">ООО РВБ Лизинг</p>
							<p class="mb-0">ООО РЕСО-Лизинг</p>
							<p class="mb-0">АО Сбербанк Лизинг</p>
							<p class="mb-0">ООО Совкомбанк Лизинг</p>
							<p class="mb-0">ООО СОЛЛЕРС Транспортные Решения</p>
							<p class="mb-0">ООО Т‑Лизинг</p>
							<p class="mb-0">ООО Восток‑лизинг</p>
							<p class="mb-0">ООО ЛК СТОУН‑XXI</p>
							<p class="mb-0">ООО Ген лизинг</p>
							<p class="mb-0">АО Росагролизинг</p>
							<p class="mb-0">ООО ОЗОН Лизинг</p>
							<p class="mb-0">ООО Интерлизинг</p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!-- Right Column -->
		<div class="col-12 col-lg-6 d-flex flex-column gap-4">
			<!-- What is important to know (Block 1) -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Что важно знать о программе:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<div>
							<p class="mb-2">Выгода по&nbsp;программе «Бонус за&nbsp;лизинг» составляет:</p>
							<ul class="list-unstyled ps-3 mb-0 d-flex flex-column gap-1">
								<li class="position-relative ps-3">
									<span class="position-absolute top-0 start-0" style="line-height: 22px;">•</span>
									<span>до&nbsp;500&nbsp;000&nbsp;руб. на автомобили Sollers TR50 (ТР50), Sollers TR80 (ТР80), Sollers TR120 (ТР120), Sollers TR180 (ТР180), включая шасси и специальные версии*.</span>
								</li>
								<li class="position-relative ps-3">
									<span class="position-absolute top-0 start-0" style="line-height: 22px;">•</span>
									<span>до&nbsp;400&nbsp;000&nbsp;руб. на автомобили Sollers SF5 (СФ5) в модификациях промтоварный, изотермический фургон или бортовая платформа, распространяется на автомобили независимо от года выпуска автомобиля.</span>
								</li>
								<li class="position-relative ps-3">
									<span class="position-absolute top-0 start-0" style="line-height: 22px;">•</span>
									<span>до&nbsp;500&nbsp;000&nbsp;руб. на автомобили Sollers SF5 (СФ5) в модификации автобус.</span>
								</li>
								<li class="position-relative ps-3">
									<span class="position-absolute top-0 start-0" style="line-height: 22px;">•</span>
									<span>до&nbsp;100&nbsp;000&nbsp;руб. на автомобили Sollers Argo (Арго) и модификации на его основе. Действует на автомобили, независимо от года выпуска.</span>
								</li>
								<li class="position-relative ps-3">
									<span class="position-absolute top-0 start-0" style="line-height: 22px;">•</span>
									<span>до&nbsp;100&nbsp;000&nbsp;руб. на автомобили Sollers ST6 (СТ6) и Sollers ST8 (СТ8) МКПП.</span>
								</li>
								<li class="position-relative ps-3">
									<span class="position-absolute top-0 start-0" style="line-height: 22px;">•</span>
									<span>до&nbsp;150&nbsp;000&nbsp;руб. на автомобили Sollers ST9 (СТ9) и Sollers ST8 (СТ8) АКПП.</span>
								</li>
								<li class="position-relative ps-3">
									<span class="position-absolute top-0 start-0" style="line-height: 22px;">•</span>
									<span>до&nbsp;300&nbsp;000&nbsp;руб. на автомобили Sollers SP7 (СП7).</span>
								</li>
							</ul>
						</div>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Программа распространяется на&nbsp;автомобили SOLLERS, приобретаемые у&nbsp;официальных дилеров SOLLERS или в&nbsp;партнерских лизинговых компаниях.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Программа «Бонус за лизинг» действует до 31.08.2026 и совместима с программой «3&nbsp;× ТО в подарок» для автомобилей Sollers SF5 (СФ5) и Sollers Argo (Арго).</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Программа «Бонус за лизинг» действует до 31.08.2026 и не совместима с другими программами для Sollers ST6 (СТ6), Sollers ST8 (СТ8), Sollers ST9, Sollers SP7 и Sollers TR50 (ТР50), Sollers TR80 (ТР80), Sollers TR120 (ТР120), Sollers TR180 (ТР180).</span>
					</li>
				</ul>
			</div>

			<!-- What is important to know (Block 2) -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Что важно знать о программе</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Кредитные программы распространяются на автомобили Sollers Argo, Sollers SF4 Sollers ST6, Sollers ST8, Sollers ST9 и Sollers SP7.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Программа действует по 31.07.2026г.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Оформление КАСКО на приобретаемый автомобиль не обязательно.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Совместима только с программой «3 × ТО в подарок»</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Special Offers Section (from index.php) -->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main.offers", 
	[
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
		"COMPONENT_TEMPLATE" => "main.offers",
		"DETAIL_URL" => "/offers/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => [
			0 => "PREVIEW_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "",
		],
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "7",
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
		"PROPERTY_CODE" => [
			0 => "",
			1 => "LINK",
			2 => "BUTTON_TEXT",
			3 => "",
		],
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
		"STRICT_SECTION_CHECK" => "N"
	],
	false
);?>

<!-- News Section (from index.php) -->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main.news",
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
		"COMPONENT_TEMPLATE" => "main.news",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => [0=>"",1=>"",],
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "7",
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
		"PROPERTY_CODE" => [0=>"",1=>"",],
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
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
