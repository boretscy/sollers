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
<div class="container main-news my-5">
	<div class="row mb-4">
		<div class="col">
			<h2 class="text-center"><?= $arResult['NAME'];?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="swiper swMainNews">
				<div class="swiper-wrapper">
					<?php foreach ( $arResult['ITEMS'] as $arItem ) { ?>
					<div class="swiper-slide">
						<div class="main-news-card bg-yawhite b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 c-yablack c-h-yablack text-decoration-none">
							<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'];?>" class="w-100" />
							<div class="title my-3"><?= $arItem['NAME'];?></div>
							<div class="text mb-4"><?= $arItem['PREVIEW_TEXT'];?></div>
							<a 
								href="#"
								class="main-news-card-button b-radius-yaradius-8 c-yablack c-h-yablack b-yablack text-decoration-none text-uppercase w-100 d-flex justify-content-center align-items-center fw-b-c"
								>
								<span class="me-2">Подробнее</span>
								<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-button-corner.svg');?>" />
							</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>