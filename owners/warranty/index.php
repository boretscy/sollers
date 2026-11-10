<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Гарантия на автомобили Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetTitle("Гарантия Sollers");
?>
<div class="container my-4">
	<!-- Hero banner -->
	<div class="row">
		<div class="col">
			<div class="warranty-banner b-radius-yaradius-40 b-radius-tr-bl-nr position-relative overflow-hidden d-flex flex-column justify-content-end p-4 p-md-5"
				 style="min-height: 420px; background: url('<?= SITE_TEMPLATE_PATH ?>/assets/images/warranty/hero.png?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/warranty/hero.png'); ?>') no-repeat center center; background-size: cover;">
				<div class="warranty-banner-gradient position-absolute top-0 start-0 w-100 h-100"
					 style="background: linear-gradient(90deg, rgba(44, 44, 44, 0.8) 0%, rgba(44, 44, 44, 0.4) 45%, rgba(52, 52, 52, 0) 80%); pointer-events: none;"></div>
				<div class="position-relative z-1" style="max-width: 680px;">
					<h1 class="c-yawhite fw-b-c mb-0 text-uppercase" style="font-size: calc(1.75rem + 1.2vw); line-height: 1.15;">
						ГАРАНТИЯ SOLLERS
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Model Tabs & Key Figures -->
<div class="container my-5">
	<!-- Tabs Navigation -->
	<div class="d-flex flex-wrap gap-2 gap-md-4 border-bottom pb-3 mb-5 overflow-auto text-nowrap" style="border-color: #E6E8EC !important;">
		<a href="#tab-sf1" class="warranty-model-tab active text-decoration-none fw-medium pb-2 position-relative" style="color: #292523; font-size: 16px; border-bottom: 2px solid #D15C22;">Sollers SF1 (СФ1)</a>
		<a href="#tab-sf4" class="warranty-model-tab text-decoration-none fw-medium pb-2 text-secondary" style="font-size: 16px;">Sollers SF4 (СФ4)</a>
		<a href="#tab-sf5" class="warranty-model-tab text-decoration-none fw-medium pb-2 text-secondary" style="font-size: 16px;">Sollers SF5 (СФ5)</a>
		<a href="#tab-argo" class="warranty-model-tab text-decoration-none fw-medium pb-2 text-secondary" style="font-size: 16px;">Sollers Argo (Арго)</a>
		<a href="#tab-st6" class="warranty-model-tab text-decoration-none fw-medium pb-2 text-secondary" style="font-size: 16px;">Sollers ST6 (СТ6)</a>
		<a href="#tab-st8" class="warranty-model-tab text-decoration-none fw-medium pb-2 text-secondary" style="font-size: 16px;">Sollers ST8 (СТ8)</a>
		<a href="#tab-st9" class="warranty-model-tab text-decoration-none fw-medium pb-2 text-secondary" style="font-size: 16px;">Sollers ST9 (СТ9)</a>
		<a href="#tab-sp7" class="warranty-model-tab text-decoration-none fw-medium pb-2 text-secondary" style="font-size: 16px;">Sollers SP7 (СП7)</a>
	</div>

	<!-- Big Numbers (Key Figures) matching Figma 247:726 -->
	<div class="row justify-content-center my-4 py-2 text-center">
		<div class="col-12 col-md-8 col-lg-6 d-flex justify-content-around align-items-center">
			<div class="d-flex flex-column align-items-center">
				<div class="fw-b-c" style="font-size: calc(2.5rem + 1.5vw); line-height: 1; color: #292523;">2 года</div>
				<div class="mt-2 text-muted" style="font-size: 15px; line-height: 18px;">без ограничения пробега</div>
			</div>
			<div style="width: 1px; height: 70px; background-color: #E6E8EC;"></div>
			<div class="d-flex flex-column align-items-center">
				<div class="fw-b-c" style="font-size: calc(2.5rem + 1.5vw); line-height: 1; color: #292523;">8&nbsp;лет</div>
				<div class="mt-2 text-muted" style="font-size: 15px; line-height: 18px;">от&nbsp;сквозной коррозии</div>
			</div>
		</div>
	</div>
</div>

<!-- Warranty Conditions & LKP Section -->
<div class="container my-5">
	<!-- Conditions List (Frame 1000003869) -->
	<div class="row mb-5">
		<div class="col-12">
			<h3 class="fw-b-c mb-4" style="font-size: 28px; line-height: normal; color: #292523;">Условия гарантии</h3>
			<div class="d-flex flex-column gap-3" style="color: #292523; font-size: 16px; line-height: 22px;">
				<div class="d-flex align-items-start gap-2">
					<span class="fw-bold" style="color: #D15C22; min-width: 20px;">1.</span>
					<span>Гарантия распространяется на&nbsp;дефекты производства, качества сборки, брак материала. Такие дефекты в&nbsp;гарантийный период устраняются производителем безвозмездно.</span>
				</div>
				<div class="d-flex align-items-start gap-2">
					<span class="fw-bold" style="color: #D15C22; min-width: 20px;">2.</span>
					<span>Гарантийные обязательства действительны при выполнении рекомендаций, приведенных в «Руководстве по эксплуатации» автомобиля и «Сервисной книжке», при своевременном и обязательном выполнении потребителем планового технического обслуживания автомобиля и контрольно-осмотровых работ по выявлению дефектов ЛКП.</span>
				</div>
				<div class="d-flex align-items-start gap-2">
					<span class="fw-bold" style="color: #D15C22; min-width: 20px;">3.</span>
					<span>Срок гарантии исчисляется со дня передачи автомобиля первому владельцу, дата передачи автомобиля фиксируется в «Сервисной книжке», которая в дальнейшем предоставляется дилеру при прохождении планового технического обслуживания.</span>
				</div>
				<div class="d-flex align-items-start gap-2">
					<span class="fw-bold" style="color: #D15C22; min-width: 20px;">4.</span>
					<span>Использование оригинальных запасных частей, одобренных производителем, является условием сохранения гарантии на автомобиль. Гарантия на детали, отремонтированные или установленные взамен неисправных, предоставляется до конца срока гарантии на автомобиль, за исключением элементов, на которые установлен гарантийный срок меньшей продолжительности в соответствии с «Сервисной книжкой».</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Accordion: Ограничения (Frame 1000003903) -->
	<div class="row mb-5">
		<div class="col-12">
			<div class="accordion border-0" id="accordionWarrantyRestrictions">
				<div class="accordion-item border-0 bg-transparent">
					<button class="accordion-button collapsed px-4 py-3 bg-light rounded-3 text-uppercase fw-semibold d-flex justify-content-between align-items-center shadow-none"
							type="button" data-bs-toggle="collapse" data-bs-target="#collapseRestrictions" aria-expanded="false" aria-controls="collapseRestrictions"
							style="color: #292523; font-size: 15px; background-color: #F8F9FA !important;">
						<span>Ограничения</span>
					</button>
					<div id="collapseRestrictions" class="accordion-collapse collapse" data-bs-parent="#accordionWarrantyRestrictions">
						<div class="accordion-body px-4 py-3" style="color: #292523; font-size: 15px; line-height: 22px;">
							Гарантия не распространяется на естественный износ деталей, подверженных эксплуатационному износу (тормозные колодки, щетки стеклоочистителей, лампы накаливания, предохранители), а также на регламентные регулировочные работы и плановое техническое обслуживание. Подробный перечень ограничений указан в сервисной книжке автомобиля.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Paint & Body Section (Frame 1000003868) -->
	<div class="row mb-5">
		<div class="col-12 d-flex flex-column gap-3">
			<h3 class="fw-b-c mb-1" style="font-size: 28px; line-height: normal; color: #292523;">Лакокрасочное покрытие</h3>
			<p class="mb-3" style="color: #292523; font-size: 16px; line-height: 22px;">
				Регулярная проверка, согласно регламенту технического обслуживания, указанного в&nbsp;сервисной книжке, кузова и&nbsp;лакокрасочного покрытия у&nbsp;официального дилера Sollers, а&nbsp;также выполнение рекомендаций по&nbsp;итогам проверки являются условиями сохранения гарантии&nbsp;— 4&nbsp;года без ограничения пробега. Гарантия на&nbsp;лакокрасочное покрытие кузова от&nbsp;сквозной коррозии составляет 8&nbsp;лет без ограничения пробега (на&nbsp;автомобили, приобретенные до&nbsp;25&nbsp;июня 2024 года гарантия составляет 2&nbsp;года).
			</p>
			<div>
				<a href="/owners/manuals/" class="btn-ya btn-ya-primary d-inline-flex align-items-center text-decoration-none">
					<span>руководство пользователя</span>
					<span class="btn-ya-corner">
						<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 10L10 0H0V10Z" fill="white"/>
						</svg>
					</span>
				</a>
			</div>
		</div>
	</div>

	<!-- Exclusions List: Гарантия не распространяется на (Frame 1000003931) -->
	<div class="row mb-5">
		<div class="col-12">
			<div class="p-4 p-md-5 rounded-4" style="background-color: #F8F9FA;">
				<h4 class="fw-b-c mb-4" style="font-size: 22px; line-height: normal; color: #292523;">Гарантия не&nbsp;распространяется&nbsp;на:</h4>
				<div class="d-flex flex-column gap-3" style="color: #292523; font-size: 15px; line-height: 22px;">
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">1.</span>
						<span>Повреждения, вызванные небрежной/неправильной эксплуатацией автомобиля, случаями ДТП, стихийными бедствиями и катастрофами, повлекшими физическое и техническое повреждение автомобиля (включая, но не ограничиваясь попаданием воды в салон, подкапотное пространство, багажное отделение, узлы и агрегаты автомобиля), несчастным случаем или использованием автомобиля не по назначению.</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">2.</span>
						<span>Повреждения, вызванные особыми условими эксплуатации автомобиля, например: во&nbsp;время спортивных состязаний, тест-драйва, при эксплуатации на&nbsp;автомобильных дорогах, не&nbsp;отвечающих требованиям ГОСТ Р&nbsp;50597-2017 «Дороги автомобильные и&nbsp;улицы».</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">3.</span>
						<span>Повреждения, допущенные при превышении нормативов, указанных в «Руководстве по эксплуатации», например: максимальная нагрузка, частота вращения двигателя, грузоподъемность и прочее.</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">4.</span>
						<span>Повреждения автомобиля, вызванные использованием неоригинальных запасных частей.</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">5.</span>
						<span>Любые неисправности, вызванные ремонтом без согласия компании-производителя (двигатель, изменение настроек автомобиля, в том числе программного обеспечения электронных модулей, чрезмерной продолжительностью использования и т. п.).</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">6.</span>
						<span>Повреждения, ставшие следствием несвоевременного обращения в сервисный центр и эксплуатации автомобиля при поломках, запрещающих использование транспортного средства (систем охлаждения, тормозной системы, систем управления двигателем).</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">7.</span>
						<span>Ремонт, вызванный использованием не рекомендованных технических жидкостей, таких как: топливо, технические жидкости и смазки (моторное масло, тормозная жидкость, жидкость гидропривода сцепления, охлаждающая жидкость, метаноловое топливо и т. п.).</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">8.</span>
						<span>Естественный эксплуатационный износ.</span>
					</div>
					<div class="d-flex align-items-start gap-2">
						<span class="fw-bold" style="color: #D15C22; min-width: 20px;">9.</span>
						<span>Повреждения, вызванные использованием агрессивных или некачественных чистящих средств.</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Accordion: Запасные части (Frame 1000003932) -->
	<div class="row mb-5">
		<div class="col-12">
			<div class="accordion border-0" id="accordionWarrantyParts">
				<div class="accordion-item border-0 bg-transparent">
					<button class="accordion-button collapsed px-4 py-3 bg-light rounded-3 text-uppercase fw-semibold d-flex justify-content-between align-items-center shadow-none"
							type="button" data-bs-toggle="collapse" data-bs-target="#collapseParts" aria-expanded="false" aria-controls="collapseParts"
							style="color: #292523; font-size: 15px; background-color: #F8F9FA !important;">
						<span>Запасные части</span>
					</button>
					<div id="collapseParts" class="accordion-collapse collapse" data-bs-parent="#accordionWarrantyParts">
						<div class="accordion-body px-4 py-3" style="color: #292523; font-size: 15px; line-height: 22px;">
							На оригинальные запасные части и аксессуары Sollers, приобретенные и установленные у официального дилера Юг-Авто, предоставляется официальная гарантия производителя. Гарантия действует при условии соблюдения правил установки и эксплуатации.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Customer Support Section (Frame 1000003933) -->
	<div class="row mb-5">
		<div class="col-12">
			<h3 class="fw-b-c mb-3" style="font-size: 28px; line-height: normal; color: #292523;">Поддержка клиентов</h3>
			<p class="mb-4" style="color: #292523; font-size: 16px; line-height: 22px;">
				Благодарим вас за выбор автомобилей марки Sollers. Наша команда готова сделать все, чтобы автомобили Sollers были надежными помощниками ежедневно на протяжении многих лет. При возникновении вопросов по эксплуатации автомобиля воспользуйтесь алгоритмом получения поддержки:
			</p>

			<div class="row g-4">
				<!-- Step 1 -->
				<div class="col-12 col-md-6">
					<div class="p-4 rounded-4 h-100 d-flex flex-column" style="background-color: #F8F9FA;">
						<div class="fw-b-c mb-2" style="font-size: 20px; color: #D15C22;">Шаг 1</div>
						<p class="mb-0" style="color: #292523; font-size: 15px; line-height: 22px;">
							Обратитесь к уполномоченному лицу официального дилерского центра Sollers для разрешения вашего вопроса.
						</p>
					</div>
				</div>

				<!-- Step 2 -->
				<div class="col-12 col-md-6">
					<div class="p-4 rounded-4 h-100 d-flex flex-column" style="background-color: #F8F9FA;">
						<div class="fw-b-c mb-2" style="font-size: 20px; color: #D15C22;">Шаг 2</div>
						<p class="mb-2" style="color: #292523; font-size: 15px; line-height: 22px;">
							Если после обращения к официальному дилеру Sollers (шаг 1) вам все еще необходима помощь в решении вашего вопроса, пожалуйста, обратитесь к специалистам горячей линии Sollers. Мы будем рады оказать вам содействие.
						</p>
						<div class="mt-auto pt-2">
							<div class="fw-bold" style="color: #292523; font-size: 16px;">
								Телефон: <a href="tel:+74958461129" class="text-decoration-none" style="color: #D15C22;">+7 (495) 846-11-29</a>
							</div>
							<div class="text-muted small mt-1">
								Консультации по вопросам покупки и эксплуатации автомобиля проводятся с 9 до 18 по московскому времени, исключая выходные и праздничные дни.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Special Offers Carousel from Main Page -->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main.offers",
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
		"COMPONENT_TEMPLATE" => "main.offers",
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

<!-- News Carousel from Main Page -->
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
