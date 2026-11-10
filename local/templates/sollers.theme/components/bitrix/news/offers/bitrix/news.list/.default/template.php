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
<div class="container offers">
	<div class="row mb-4">
		<div class="col">
			<div class="text-center h2 mb-3"><?= $arResult['NAME'];?></div>
			<div class="text-center description"><?= $arResult['DESCRIPTION'];?></div>
		</div>
	</div>
	<div class="row">
		<?php foreach ( $arResult['ITEMS'] as $arItem ) { ?>
		<div class="col-lg-6 mb-4">
			<a href="<?= $arItem['DETAIL_PAGE_URL'];?>" class="d-block offer-card overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr bg-yawhite c-yablack c-h-yablack text-decoration-none">
				<img class="w-100" src="<?= $arItem['DETAIL_PICTURE']['SRC'];?>" />
				<div class="p-4">
					<div class="title"><?= $arItem['NAME'];?></div>
					<div class="subtitle mb-3"><?= $arItem['PROPERTIES']['SUBTITLE']['VALUE'];?></div>
					<div class="text"><?= $arItem['PROPERTIES']['SUMMURY']['VALUE'];?></div>
				</div>
			</a>
		</div>
		<?php } ?>
	</div>
</div>