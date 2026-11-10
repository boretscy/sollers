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
<div class="container main-slider my-5 mt-3">
	<div class="row h-100">
		<div class="col">
			<div class="swiper swMainSlider b-radius-yaradius-40 b-radius-tr-bl-nr">
				<div class="swiper-wrapper">
					<?php foreach ( $arResult['ITEMS'] as $arItem ) { ?>
					<div class="swiper-slide swMainSlider-item p-5" style="background-image: url(<?= $arItem['DETAIL_PICTURE']['SRC'];?>);">
						<div class="h1 c-yawhite swMainSlider-title mb-3"><?= $arItem['NAME'];?></div>
						<?php if ( $arItem['~PREVIEW_TEXT'] ) { ?>
						<div class="c-yawhite swMainSlider-bigtext mb-3"><?= $arItem['~PREVIEW_TEXT'];?></div>
						<?php } ?>
						<?php if ( $arItem['~DETAIL_TEXT'] ) { ?>
						<div class="c-yaorange swMainSlider-slogan text-uppercase mb-3"><?= $arItem['~DETAIL_TEXT'];?></div>
						<?php } ?>
						<?php if ( $arItem['PROPERTIES']['DISCLAMER']['~VALUE'] ) { ?>
						<div class="c-yawhite swMainSlider-disclamer mb-3"><?= $arItem['PROPERTIES']['DISCLAMER']['~VALUE'];?></div>
						<?php } ?>
						<?php if ( $arItem['PROPERTIES']['BUTTON_TEXT']['VALUE'] ) { ?>
							<a 
								href="<?= (($arItem['PROPERTIES']['LINK']['VALUE'])?:'#');?>"
								class="swMainSlider-button bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase mt-5 d-flex justify-content-center align-items-center fw-b-c"
								><?= $arItem['PROPERTIES']['BUTTON_TEXT']['VALUE'];?></a>
						<?php } ?>
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
 