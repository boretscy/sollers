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
<div class="row g-4 mb-5">
	<?php foreach ($arResult['ITEMS'] as $arItem) {
		$imgSrc = '';
		if (!empty($arItem['DETAIL_PICTURE']['SRC'])) {
			$imgSrc = $arItem['DETAIL_PICTURE']['SRC'];
		} elseif (!empty($arItem['PREVIEW_PICTURE']['SRC'])) {
			$imgSrc = $arItem['PREVIEW_PICTURE']['SRC'];
		}

		$bodyType = !empty($arItem['PROPERTIES']['BODY']['VALUE']) ? $arItem['PROPERTIES']['BODY']['VALUE'] : '';

		$pdfSrc = '';
		if (!empty($arItem['PROPERTIES']['WARRANTY_FILE']['VALUE'])) {
			$pdfSrc = CFile::GetPath($arItem['PROPERTIES']['WARRANTY_FILE']['VALUE']);
		}
		$btnHref = !empty($pdfSrc) ? htmlspecialcharsbx($pdfSrc) : '#';
		$btnTarget = !empty($pdfSrc) ? ' target="_blank" download' : ' onclick="event.preventDefault(); alert(\'Руководство по эксплуатации обновляется и скоро будет доступно для скачивания.\');"';
	?>
	<div class="col-12 col-md-6 col-lg-3">
		<div class="manual-model-card bg-yawhite b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column justify-content-between">
			<div>
				<div class="manual-model-img-wrapper mb-3 d-flex align-items-center justify-content-center" style="height: 138px;">
					<?php if (!empty($imgSrc)) { ?>
						<img src="<?= htmlspecialcharsbx($imgSrc) ?>" alt="Sollers <?= htmlspecialcharsbx($arItem['NAME']) ?>" class="mw-100 mh-100" style="object-fit: contain;">
					<?php } ?>
				</div>
				<div class="manual-model-title fw-b-c mb-1" style="font-size: 24px; line-height: 1.25; color: #292523;">
					Sollers <?= htmlspecialcharsbx($arItem['NAME']) ?>
				</div>
				<?php if (!empty($bodyType)) { ?>
					<div class="manual-model-body fw-medium mb-4" style="font-size: 16px; color: #D15C22;">
						<?= htmlspecialcharsbx($bodyType) ?>
					</div>
				<?php } ?>
			</div>
			<div>
				<a href="<?= $btnHref ?>"<?= $btnTarget ?>
				   class="manual-download-btn b-radius-yaradius-8 b-yaorange c-yaorange text-decoration-none text-uppercase w-100 d-flex justify-content-center align-items-center fw-b-c"
				   style="height: 40px; font-size: 14px; letter-spacing: 0.02em;">
					<span class="me-2">скачать руководство</span>
					<img class="manual-btn-icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-button-corner.svg');?>" alt="" width="17" height="16">
				</a>
			</div>
		</div>
	</div>
	<?php } ?>
</div>

<style>
.manual-model-card {
	transition: transform 0.2s ease;
}
.manual-download-btn {
	background-color: transparent;
	transition: background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
}
.manual-download-btn:hover {
	background-color: var(--yaorange) !important;
	color: var(--yawhite) !important;
	border-color: var(--yaorange) !important;
}
.manual-download-btn:hover .manual-btn-icon {
	filter: brightness(0) invert(1);
}
</style>
