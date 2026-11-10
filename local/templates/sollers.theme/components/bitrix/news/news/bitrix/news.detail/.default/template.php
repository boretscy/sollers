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

$imgSrc = '';
if (!empty($arResult['DETAIL_PICTURE']['SRC'])) {
	$imgSrc = $arResult['DETAIL_PICTURE']['SRC'];
} elseif (!empty($arResult['PREVIEW_PICTURE']['SRC'])) {
	$imgSrc = $arResult['PREVIEW_PICTURE']['SRC'];
}
$dateDisplay = !empty($arResult['DATE_ACTIVE_FROM']) ? explode(' ', $arResult['DATE_ACTIVE_FROM'])[0] : '';
?>
<div class="container news-detail-container my-5">
	<div class="row mb-4">
		<div class="col-12">
			<a href="<?= $arParams['IBLOCK_URL'] ?: '/news/' ?>" class="text-decoration-none fw-medium d-inline-flex align-items-center gap-2 c-yaorange c-h-yablack mb-3" style="font-size: 15px;">
				&larr; Все новости
			</a>
			<?php if (!empty($dateDisplay)): ?>
				<div class="text-secondary mb-2" style="font-size: 14px;">
					<?= htmlspecialcharsbx($dateDisplay) ?>
				</div>
			<?php endif; ?>
			<h1 class="fw-b-c mb-4" style="font-size: 36px; line-height: 1.25; color: #292523;">
				<?= htmlspecialcharsbx($arResult['NAME']) ?>
			</h1>
		</div>
	</div>

	<?php if (!empty($imgSrc)): ?>
	<div class="row mb-4">
		<div class="col-12">
			<div class="overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr" style="max-height: 480px;">
				<img src="<?= htmlspecialcharsbx($imgSrc) ?>" alt="<?= htmlspecialcharsbx($arResult['NAME']) ?>" class="w-100 h-100 object-fit-cover" />
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="row mb-5">
		<div class="col-12 col-lg-10">
			<div class="news-detail-content leading-relaxed" style="font-size: 16px; line-height: 26px; color: #292523;">
				<?php if (!empty($arResult['DETAIL_TEXT'])): ?>
					<?= $arResult['DETAIL_TEXT'] ?>
				<?php elseif (!empty($arResult['PREVIEW_TEXT'])): ?>
					<p><?= $arResult['PREVIEW_TEXT'] ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12 pt-4 border-top" style="border-color: #E6E8EC !important;">
			<a href="<?= $arParams['IBLOCK_URL'] ?: '/news/' ?>" class="form-button b-yablack b-radius-yaradius-8 c-yablack c-h-yaorange text-decoration-none text-uppercase fw-b-c px-4 d-inline-flex justify-content-center align-items-center" style="height: 48px; font-size: 14px; background: transparent; border: 1px solid var(--yablack);">
				&larr; Назад к списку новостей
			</a>
		</div>
	</div>
</div>
