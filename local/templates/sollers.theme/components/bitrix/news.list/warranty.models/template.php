<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (empty($arResult['ITEMS']) || !is_array($arResult['ITEMS'])) {
	return;
}
?>
<div class="warranty-models-nav border-bottom pb-2 mb-5 overflow-auto text-nowrap" style="border-color: #E6E8EC !important;">
	<div class="d-flex align-items-center gap-4">
		<?php foreach ($arResult['ITEMS'] as $arItem) {
			$pdfSrc = '';
			if (!empty($arItem['PROPERTIES']['WARRANTY_FILE']['VALUE'])) {
				$pdfSrc = CFile::GetPath($arItem['PROPERTIES']['WARRANTY_FILE']['VALUE']);
			}
			$href = !empty($pdfSrc) ? htmlspecialcharsbx($pdfSrc) : '#';
			$target = !empty($pdfSrc) ? ' target="_blank" download' : '';
		?>
			<a href="<?= $href ?>"<?= $target ?>
			   class="warranty-model-link text-decoration-none fw-medium pb-2 position-relative"
			   style="color: #292523; font-size: 16px; border-bottom: 2px solid transparent; transition: border-color 0.2s ease, color 0.2s ease;">
				Sollers <?= htmlspecialcharsbx($arItem['NAME']) ?>
			</a>
		<?php } ?>
	</div>
</div>

<style>
.warranty-model-link:hover {
	color: #D15C22 !important;
	border-bottom-color: #D15C22 !important;
}
.warranty-models-nav::-webkit-scrollbar {
	height: 4px;
}
.warranty-models-nav::-webkit-scrollbar-thumb {
	background: #E6E8EC;
	border-radius: 4px;
}
</style>
