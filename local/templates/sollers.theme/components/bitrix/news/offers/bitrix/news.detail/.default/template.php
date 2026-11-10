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
<div class="container offer">
	<div class="row mb-4">
		<div class="col">
			<div class="text-center h2 mb-3"><?= $arResult['IBLOCK']['NAME'];?></div>
			<div class="text-center description"><?= $arResult['IBLOCK']['DESCRIPTION'];?></div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col">
			<div class="image b-radius-yaradius-40 b-radius-tr-bl-nr p-5" style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'];?>);">
				<div class="image-content-wrap h-100 w-100 d-flex flex-column justify-content-between align-items-start">
					<div class="px-3 py-2 b-radius-yaradius-8 bg-yawhite c-yablack plate">
						с <?= explode(' ', $arResult['DATE_ACTIVE_FROM'])[0];?> по <?= explode(' ', $arResult['DATE_ACTIVE_TO'])[0];?>
					</div>
					<div class="w-100 c-yawhite">
						<h1 class=""><?= $arResult['NAME'];?></h1>
						<p class="subtitle"><?= $arResult['PROPERTIES']['SUBTITLE']['VALUE'];?></p>
						<div class="px-3 py-2 bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase fw-b-c d-inline-block"><?= $arResult['PROPERTIES']['BUTTON_TEXT']['VALUE'];?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-6 pe-5">
			<div class="summury-title mb-3">Суть акции:</div>
			<div class="summury-text position-relative ps-4"><?= $arResult['PROPERTIES']['SUMMURY']['VALUE'];?></div> 
		</div>
		<div class="col-6 ps-5">
			<div class="summury-title mb-3">Сроки проведения акции:</div>
			<div class="summury-text position-relative ps-4">с <?= explode(' ', $arResult['DATE_ACTIVE_FROM'])[0];?> по <?= explode(' ', $arResult['DATE_ACTIVE_TO'])[0];?></div> 
		</div>
	</div>
	<div class="row mb-4">
		<div class="col">
			<?= $arResult['DETAIL_TEXT'];?>
		</div>
	</div>
	<div class="row">
		<div class="col disclamer c-yagray"><?= $arResult['PROPERTIES']['DISCLAMER']['VALUE']['TEXT'];?></div>
	</div>
</div>