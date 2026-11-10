<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Трейд-ин на автомобили Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetTitle("Программа «Бонус за трейд-ин»: выгода до 500 000 ₽*");
?>
<div class="container my-4">
	<!-- Hero banner -->
	<div class="row">
		<div class="col">
			<div class="tradein-banner b-radius-yaradius-40 b-radius-tr-bl-nr position-relative overflow-hidden d-flex flex-column justify-content-end p-4 p-md-5"
				 style="min-height: 420px; background: url('<?= SITE_TEMPLATE_PATH ?>/assets/images/tradein/hero.png?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/tradein/hero.png'); ?>') no-repeat center center; background-size: cover;">
				<div class="tradein-banner-gradient position-absolute top-0 start-0 w-100 h-100"
					 style="background: linear-gradient(90deg, rgba(44, 44, 44, 0.8) 0%, rgba(44, 44, 44, 0.4) 45%, rgba(52, 52, 52, 0) 80%); pointer-events: none;"></div>
				<div class="position-relative z-1" style="max-width: 680px;">
					<h1 class="c-yawhite fw-b-c mb-0" style="font-size: calc(1.75rem + 1.2vw); line-height: 1.15;">
						Программа «Бонус за&nbsp;трейд-ин»:<br>выгода до 500 000 ₽*
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container my-5">
	<!-- Main conditions & Benefits (2 columns matching Figma 225:2222) -->
	<div class="row g-4 g-lg-5" style="color: #292523; font-size: 16px; line-height: 22px;">
		<!-- Left Column -->
		<div class="col-12 col-lg-6 d-flex flex-column gap-4">
			<!-- Advantage -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Преимущество программы:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Программа удобна для клиентов, которые хотят обменять свой старый автомобиль с пробегом на новый автомобиль Sollers: оценочная стоимость вашего старого автомобиля может стать взносом при покупке нового автомобиля и получить скидку на приобретение нового автомобиля.</span>
					</li>
				</ul>
			</div>

			<!-- Who can use -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Кто может воспользоваться:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<div>
							<p class="mb-0">Владелец автомобиля, планирующий одновременно продать свой подержанный автомобиль и приобрести новый Sollers.</p>
							<p class="mb-0">На момент сдачи по программе владелец должен являться собственником автомобиля не менее трех месяцев.</p>
						</div>
					</li>
				</ul>
			</div>

			<!-- Which cars are accepted -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Какие автомобили принимаются в трейд-ин:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Все автомобили по&nbsp;ПТС (паспорт технического средства), находящиеся в&nbsp;собственности не&nbsp;менее трех месяцев, размер максимальной скидки на&nbsp;новый автомобиль зависит от&nbsp;марки сдаваемого в&nbsp;трейд-ин автомобиля:</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>До 150 000 рублей на автомобили Sollers ST9 (СТ9)&nbsp;и Sollers ST8 (СТ8) АКПП.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>До&nbsp;300&nbsp;000 рублей на&nbsp;автомобили Sollers SP7 (СП7).</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>До 370 000 рублей при покупке Sollers SF5 (СФ5) в модификациях цельнометаллический и грузопассажирский фургоны. Не действует на модификации остекленный фургон.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>До&nbsp;300&nbsp;000 при покупке Sollers SF5 (СФ5) в&nbsp;модификациях промтоварный фургон, изотермический или бортовая платформа.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>До&nbsp;500&nbsp;000 при покупке Sollers SF5 (СФ5) в&nbsp;модификациях автобус.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>До&nbsp;100&nbsp;000 рублей при покупке Sollers Argo (Арго). Распространяется на&nbsp;все автомобили, независимо от&nbsp;года выпуска.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>До&nbsp;200&nbsp;000 рублей на&nbsp;автомобили Sollers TR50 (ТР50), Sollers TR80 (ТР80), Sollers TR120 (ТР120), Sollers TR180 (ТР180), включая шасси и&nbsp;специальные версии**.</span>
					</li>
				</ul>
			</div>
		</div>

		<!-- Right Column -->
		<div class="col-12 col-lg-6 d-flex flex-column gap-4">
			<!-- How to use -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Как воспользоваться:</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Выбирайте новый автомобиль Sollers из&nbsp;перечисленных выше на&nbsp;сайте или в&nbsp;дилерском центре.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Привозите свой автомобиль на&nbsp;оценку в&nbsp;дилерский центр SOLLERS. Оценка стоимости выкупа вашего автомобиля происходит в&nbsp;дилерском центре с&nbsp;учетом возраста автомобиля, его пробега, внешнего вида, технического состояния и&nbsp;комплектации. На&nbsp;основании этой оценки клиент и&nbsp;представитель дилерского центра достигают согласия о&nbsp;цене выкупа автомобиля.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Размер доплаты на приобретение нового автомобиля определяется с учетом стоимости выкупа подержанного автомобиля и скидки по программе «Бонус за трейд-ин».</span>
					</li>
				</ul>
			</div>

			<!-- What is important to know -->
			<div class="d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-0" style="font-size: 28px; line-height: normal; color: #292523;">Что важно знать о программе</h3>
				<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Программа «Бонус за трейд-ин» совместима только с программой «3×ТО в подарок».</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Срок действия: до 31.08.2026.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Оформление КАСКО на&nbsp;приобретаемый автомобиль не&nbsp;обязательно.</span>
					</li>
					<li class="position-relative ps-3">
						<span class="position-absolute top-0 start-0 rounded-circle bg-yaorange" style="width: 5px; height: 5px; margin-top: 8px;"></span>
						<span>Совместима только с&nbsp;программой «3&nbsp;× ТО&nbsp;в&nbsp;подарок»</span>
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
