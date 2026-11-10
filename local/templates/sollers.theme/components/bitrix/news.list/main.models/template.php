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
<div class="container my-5 main-models">
	<div class="row mb-4">
		<div class="col">
			<h2 class="text-center"><?= $arResult['NAME'];?></h2>
		</div>
	</div>
	<div class="row">
		<?php foreach ( $arResult['ITEMS'] as $arItem ) { ?>
		<div class="col-12 col-md-6 col-lg-3 mb-4">
			<div class="main-models-card bg-yawhite b-radius-yaradius-40 b-radius-tr-bl-nr p-4">
				<img class="w-100" src="<?= $arItem['DETAIL_PICTURE']['SRC'];?>" />
				<div class="title fw-b-c mt-3">Sollers <?= $arItem['NAME'];?></div>
				<div class="body c-yaorange"><?= $arItem['PROPERTIES']['BODY']['VALUE'];?></div>
				<div class="price fw-b-c my-3">от <?= number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');?> ₽</div>
				<a 
					href="#"
					class="main-models-card-button b-radius-yaradius-8 c-yablack c-h-yablack b-yablack text-decoration-none text-uppercase w-100 d-flex justify-content-center align-items-center fw-b-c"
					>
					<span class="me-2">Узнать больше</span>
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-button-corner.svg');?>" />
				</a>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="row mt-5">
		<div class="col-lg"></div>
		<div class="col-lg-7">
			<p class="text-center description"><?= $arResult['DESCRIPTION'];?></p>
		</div>
		<div class="col-lg"></div>
	</div>
</div>
