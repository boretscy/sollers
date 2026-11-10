<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Руководства по эксплуатации автомобилей Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetPageProperty("description", "Руководства по эксплуатации автомобилей Sollers: SF1, SF4, SF5, Argo, ST6, ST8, ST9, SP7. Скачать официальную инструкцию по эксплуатации Sollers у официального дилера Юг-Авто.");
$APPLICATION->SetTitle("Руководства по эксплуатации автомобилей");
?>

<div class="container my-5">
	<div class="row mb-4">
		<div class="col-12 text-center">
			<h1 class="fw-b-c" style="font-size: 40px; line-height: normal; color: #292523;">
				Руководства по эксплуатации автомобилей
			</h1>
		</div>
	</div>

	<?php
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"manuals.models",
		array(
			"IBLOCK_TYPE" => "content",
			"IBLOCK_ID" => 3,
			"NEWS_COUNT" => "20",
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_BY2" => "ID",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE"),
			"PROPERTY_CODE" => array("BODY", "WARRANTY_FILE"),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_LAST_MODIFIED" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"STRICT_SECTION_CHECK" => "N",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Модели",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"SET_STATUS_404" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => ""
		),
		false
	);
	?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

