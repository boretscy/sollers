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
<div class="container mt-5">
	<div class="row mb-4">
		<div class="col">
			<h2 class="text-center"><?= $arResult['NAME'];?></h2>
		</div>
	</div>
</div>
<div class="container main-offers mb-5">
	<div class="row h-100">
		<div class="col">
			<div class="swiper swMainOffers b-radius-yaradius-40 b-radius-tr-bl-nr">
				<div class="swiper-wrapper">
					<?php foreach ( $arResult['ITEMS'] as $arItem ) { ?>
					<div class="swiper-slide swMainOffers-item p-5" style="background-image: url(<?= $arItem['DETAIL_PICTURE']['SRC'];?>);">
						<div class="h1 c-yawhite swMainOffers-title mb-3"><?= $arItem['~NAME'];?></div>
						<div class="c-yawhite swMainOffers-text mb-5"><?= $arItem['~PREVIEW_TEXT'];?></div>
						<a 
							href="<?= (($arItem['DETAIL_PAGE_URL'])?:'#');?>"
							class="swMainOffers-button bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase d-flex justify-content-center align-items-center fw-b-c"
							>Подробнее</a>
					</div>
					<?php } ?>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-navigation d-flex justify-content-start align-items-center">
					<div class="swiper-navigation-item swiper-prev cursor-pointer d-flex justify-content-center align-items-center me-2">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-slider-prev.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-slider-prev.svg');?>" />
					</div>
					<div class="swiper-navigation-item swiper-next cursor-pointer d-flex justify-content-center align-items-center">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-slider-next.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-slider-next.svg');?>" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 