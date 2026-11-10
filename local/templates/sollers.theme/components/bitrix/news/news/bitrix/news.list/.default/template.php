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
?>
<div class="container news-list-container my-5">
	<div class="row mb-4">
		<div class="col-12 text-center">
			<h1 class="fw-b-c mb-3" style="font-size: 40px; line-height: normal; color: #292523;">
				<?= !empty($arResult['NAME']) ? htmlspecialcharsbx($arResult['NAME']) : 'Новости' ?>
			</h1>
			<?php if (!empty($arResult['DESCRIPTION'])): ?>
				<div class="text-secondary" style="font-size: 16px; max-width: 800px; margin: 0 auto;">
					<?= $arResult['DESCRIPTION'] ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<?php if (!empty($arResult['ITEMS']) && is_array($arResult['ITEMS'])): ?>
		<div class="row g-4 mb-4">
			<?php foreach ($arResult['ITEMS'] as $arItem): 
				$imgSrc = '';
				if (!empty($arItem['PREVIEW_PICTURE']['SRC'])) {
					$imgSrc = $arItem['PREVIEW_PICTURE']['SRC'];
				} elseif (!empty($arItem['DETAIL_PICTURE']['SRC'])) {
					$imgSrc = $arItem['DETAIL_PICTURE']['SRC'];
				}
				$dateDisplay = !empty($arItem['DATE_ACTIVE_FROM']) ? explode(' ', $arItem['DATE_ACTIVE_FROM'])[0] : '';
			?>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="<?= htmlspecialcharsbx($arItem['DETAIL_PAGE_URL']) ?>" class="news-grid-card d-flex flex-column justify-content-between h-100 bg-yawhite b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-decoration-none" style="color: #292523;">
					<div>
						<?php if (!empty($imgSrc)): ?>
							<div class="news-grid-img-wrap mb-3 overflow-hidden b-radius-yaradius-8" style="height: 180px;">
								<img src="<?= htmlspecialcharsbx($imgSrc) ?>" alt="<?= htmlspecialcharsbx($arItem['NAME']) ?>" class="w-100 h-100 object-fit-cover" />
							</div>
						<?php endif; ?>

						<?php if (!empty($dateDisplay)): ?>
							<div class="news-grid-date text-secondary mb-2" style="font-size: 13px;">
								<?= htmlspecialcharsbx($dateDisplay) ?>
							</div>
						<?php endif; ?>

						<div class="news-grid-title fw-bold mb-2" style="font-size: 18px; line-height: 1.35; color: #292523;">
							<?= htmlspecialcharsbx($arItem['NAME']) ?>
						</div>

						<?php if (!empty($arItem['PREVIEW_TEXT'])): ?>
							<div class="news-grid-text text-secondary mb-3" style="font-size: 14px; line-height: 1.45;">
								<?= htmlspecialcharsbx($arItem['PREVIEW_TEXT']) ?>
							</div>
						<?php endif; ?>
					</div>

					<div>
						<span class="news-grid-btn form-button b-radius-yaradius-8 b-yablack c-yablack text-decoration-none text-uppercase w-100 d-flex justify-content-center align-items-center fw-b-c mt-2" style="height: 40px; font-size: 14px;">
							<span class="me-2">Подробнее</span>
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-button-corner.svg');?>" alt="" width="17" height="16" />
						</span>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>

		<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
			<div class="row">
				<div class="col-12 d-flex justify-content-center mt-3">
					<?= $arResult["NAV_STRING"] ?>
				</div>
			</div>
		<?php endif; ?>
	<?php else: ?>
		<div class="row">
			<div class="col-12 text-center py-5 text-secondary">
				Новостей пока нет.
			</div>
		</div>
	<?php endif; ?>
</div>

<style>
.news-grid-card {
	transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.news-grid-card:hover {
	transform: translateY(-2px);
}
.news-grid-card:hover .news-grid-btn {
	background-color: var(--yaorange) !important;
	color: var(--yawhite) !important;
	border-color: var(--yaorange) !important;
}
.news-grid-card:hover .news-grid-btn img {
	filter: brightness(0) invert(1);
}
</style>
