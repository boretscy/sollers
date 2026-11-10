<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Запись на сервис Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetPageProperty("description", "Онлайн запись на техническое обслуживание и ремонт коммерческих автомобилей Sollers в официальном сервисном центре Юг-Авто в Краснодаре и Яблоновском.");
$APPLICATION->SetTitle("Запись на сервис");
?>

<div class="container my-5">
	<div class="row mb-4">
		<div class="col-12 text-center">
			<h1 class="fw-b-c" style="font-size: 40px; line-height: normal; color: #292523;">
				Запись на сервис
			</h1>
		</div>
	</div>

	<?php
	$APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"form.service",
		array(
			"COMPONENT_TEMPLATE" => "form.service",
			"IBLOCK_TYPE" => "forms",
			"IBLOCK_ID" => 6,
			"ELEMENT_ID" => 28,
			"ELEMENT_CODE" => "FORM_SERVICE",
			"CHECK_DATES" => "Y",
			"FIELD_CODE" => array("NAME", "CODE"),
			"PROPERTY_CODE" => array("FIELDS"),
			"IBLOCK_URL" => "",
			"DETAIL_URL" => "",
			"SET_TITLE" => "N",
			"SET_CANONICAL_URL" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_LAST_MODIFIED" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"USE_PERMISSIONS" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y"
		),
		false
	);
	?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
