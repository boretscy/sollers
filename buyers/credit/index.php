<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Кредит на автомобили Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetTitle("Программы поддержки Sollers на покупку автомобилей в кредит");
?>
<div class="container my-4">
	<!-- Hero banner -->
	<div class="row">
		<div class="col">
			<div class="credit-banner b-radius-yaradius-40 b-radius-tr-bl-nr position-relative overflow-hidden d-flex flex-column justify-content-end p-4 p-md-5"
				 style="min-height: 420px; background: url('<?= SITE_TEMPLATE_PATH ?>/assets/images/credit/hero.png?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/credit/hero.png'); ?>') no-repeat center center; background-size: cover;">
				<div class="credit-banner-gradient position-absolute top-0 start-0 w-100 h-100"
					 style="background: linear-gradient(90deg, rgba(44, 44, 44, 0.8) 0%, rgba(44, 44, 44, 0.4) 45%, rgba(52, 52, 52, 0) 80%); pointer-events: none;"></div>
				<div class="position-relative z-1" style="max-width: 680px;">
					<h1 class="c-yawhite fw-b-c mb-0" style="font-size: calc(1.75rem + 1.2vw); line-height: 1.15;">
						Программы поддержки Sollers на&nbsp;покупку автомобилей в&nbsp;кредит
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container my-5">
	<!-- Conditions & Benefits -->
	<div class="row g-4 g-lg-5">
		<div class="col-12 col-lg-6">
			<h3 class="fw-b-c text-black mb-4">Преимущество программы:</h3>
			<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">
						Маркетинговая программа «Бонус за кредит» на новые автомобили Sollers Argo (Арго), Sollers SF4 (СФ4) и Sollers SF5 (СФ5) со скидкой от производителя, снижающей стоимость автомобиля при покупке в кредит.
					</span>
				</li>
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">
						Маркетинговая программа на покупку автомобилей Sollers с субсидированной кредитной ставкой. В программе участвуют пикапы Sollers ST6 (СТ6), Sollers ST8 (СТ8), Sollers ST9 (СТ9) и минивэн Sollers SP7 (СП7).
					</span>
				</li>
			</ul>
		</div>

		<div class="col-12 col-lg-6">
			<h3 class="fw-b-c text-black mb-4">Что важно знать о программе:</h3>
			<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">
						Кредитные программы распространяются на автомобили Sollers Argo, Sollers SF4 Sollers ST6, Sollers ST8, Sollers ST9 и Sollers SP7.
					</span>
				</li>
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">
						Программа действует по 31.07.2026г.
					</span>
				</li>
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">
						Оформление КАСКО на приобретаемый автомобиль не обязательно.
					</span>
				</li>
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">
						Совместима только с программой «3 × ТО в подарок»
					</span>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- Banks / Who can use -->
<div class="container my-5">
	<div class="row mb-4">
		<div class="col text-center">
			<h2 class="fw-b-c text-black">Кто может воспользоваться:</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-12">
			<div class="d-flex flex-column gap-3">
				<div class="border border-dark rounded-3 px-4 py-3 d-flex justify-content-between align-items-center cursor-pointer">
					<span class="text-uppercase fw-b-c text-black" style="letter-spacing: 0.5px;">СБЕРБАНК</span>
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/credit/chevron-down.svg" alt="" style="width: 16px; height: 16px;">
				</div>
				<div class="border border-dark rounded-3 px-4 py-3 d-flex justify-content-between align-items-center cursor-pointer">
					<span class="text-uppercase fw-b-c text-black" style="letter-spacing: 0.5px;">ВТБ</span>
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/credit/chevron-down.svg" alt="" style="width: 16px; height: 16px;">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Documents & How to use -->
<div class="container my-5">
	<div class="row g-4 g-lg-5">
		<div class="col-12 col-lg-6">
			<h3 class="fw-b-c text-black mb-4" style="max-width: 500px;">
				Необходимо предоставить полный комплект документов для оформления заявки на&nbsp;кредит:
			</h3>
			<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">Паспорт гражданина РФ</span>
				</li>
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">Согласие на обработку персональных данных</span>
				</li>
				<li class="d-flex align-items-start">
					<span class="rounded-circle bg-yaorange me-3 mt-2 flex-shrink-0" style="width: 6px; height: 6px;"></span>
					<span class="text-secondary" style="line-height: 1.5;">
						Для индивидуальных предпринимателей (документы предоставляются в оригинале и должны содержать отметку о принятии налоговым органом): ф. № 3-НДФЛ; налоговая декларация по ЕНВД; налоговая декларация по УСН; налоговая декларация по ЕСХН
					</span>
				</li>
			</ul>
		</div>

		<div class="col-12 col-lg-6">
			<h3 class="fw-b-c text-black mb-4">Как воспользоваться:</h3>
			<div class="d-flex flex-column gap-3">
				<div class="d-flex align-items-start gap-3">
					<span class="fw-b-c c-yaorange fs-5 flex-shrink-0" style="width: 24px;">1.</span>
					<span class="text-secondary" style="line-height: 1.5;">
						Вы приезжаете в автосалон, где менеджер по продажам поможет Вам в выборе автомобиля, а также определит его точную стоимость.
					</span>
				</div>
				<div class="d-flex align-items-start gap-3">
					<span class="fw-b-c c-yaorange fs-5 flex-shrink-0" style="width: 24px;">2.</span>
					<span class="text-secondary" style="line-height: 1.5;">
						Кредитный эксперт подскажет Вам, какие документы необходимо предоставить для получения кредита, а также произведет расчет ежемесячного платежа по кредиту.
					</span>
				</div>
				<div class="d-flex align-items-start gap-3">
					<span class="fw-b-c c-yaorange fs-5 flex-shrink-0" style="width: 24px;">3.</span>
					<span class="text-secondary" style="line-height: 1.5;">
						Вы готовите документы для получения кредита, предоставляете их кредитному эксперту в автосалоне и оформляете кредитную заявку. Банк рассматривает Вашу кредитную заявку и принимает решение. О решении Банка Вам сообщит кредитный эксперт.
					</span>
				</div>
				<div class="d-flex align-items-start gap-3">
					<span class="fw-b-c c-yaorange fs-5 flex-shrink-0" style="width: 24px;">4.</span>
					<span class="text-secondary" style="line-height: 1.5;">
						В дилерском центре Вы подписываете договор купли-продажи автомобиля, вносите сумму первоначального взноса за автомобиль, оформляете полис страхования КАСКО (если применимо) и подписываете кредитный договор.
					</span>
				</div>
				<div class="d-flex align-items-start gap-3">
					<span class="fw-b-c c-yaorange fs-5 flex-shrink-0" style="width: 24px;">5.</span>
					<span class="text-secondary" style="line-height: 1.5;">
						После подписания кредитного договора Вас проинформируют о времени передачи Вам автомобиля. Обычно это происходит в срок от 1 до 3 рабочих дней с момента подписания кредитного договора.
					</span>
				</div>
				<div class="d-flex align-items-start gap-3">
					<span class="fw-b-c c-yaorange fs-5 flex-shrink-0" style="width: 24px;">6.</span>
					<span class="text-secondary" style="line-height: 1.5;">
						Далее Вы ставите автомобиль на учет в ГИБДД
					</span>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Special Offers Section -->
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => [
			0 => "",
			1 => "",
		],
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
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
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => [
			0 => "",
			1 => "",
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
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main.offers"
	],
	false
);?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
