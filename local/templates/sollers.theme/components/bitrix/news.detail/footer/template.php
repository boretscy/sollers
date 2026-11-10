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
<div class="container footer-seo text-center my-5">
	<div class="row">
		<div class="col-12 mb-4">
			<h2><?= $arResult['NAME'];?></h2>
		</div>
		<div class="col-12">
			<?= $arResult['DETAIL_TEXT'];?>
		</div>
	</div>
</div>
<div class="bg-yablack footer c-yatextgray py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<ul class="list-unstyled">
					<?php foreach ($arResult['MENU']['COLUMN'] as $item) { ?>
					<li class="list-unstyled-item mb-3">
						<a href="<?= $item['LINK'];?>" class="c-yatextgray c-h-c-yatextgray text-decoration-none text-uppercase fw-bold"><?= $item['TEXT'];?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-lg">
				<div class="mb-3 text-uppercase fw-bold"><?= $arResult['PROPERTIES']['MENU_MODELS']['NAME'];?></div>
				<ul class="list-unstyled">
					<?php foreach ($arResult['MENU']['MODELS'] as $item) { ?>
					<li class="list-unstyled-item my-1">
						<a href="<?= $item['LINK'];?>" class="c-yatextgray c-h-c-yatextgray text-decoration-none">Sollers <?= $item['TEXT'];?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-lg">
				<div class="mb-3 text-uppercase fw-bold"><?= $arResult['PROPERTIES']['MENU_BUYERS']['NAME'];?></div>
				<ul class="list-unstyled">
					<?php foreach ($arResult['MENU']['BUYERS'] as $item) { ?>
					<li class="list-unstyled-item my-1">
						<a href="<?= $item['LINK'];?>" class="c-yatextgray c-h-c-yatextgray text-decoration-none"><?= $item['TEXT'];?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-lg-3">
				<div class="mb-3 text-uppercase fw-bold"><?= $arResult['PROPERTIES']['MENU_OWNERS']['NAME'];?></div>
				<ul class="list-unstyled">
					<?php foreach ($arResult['MENU']['OWNERS'] as $item) { ?>
					<li class="list-unstyled-item my-1">
						<a href="<?= $item['LINK'];?>" class="c-yatextgray c-h-c-yatextgray text-decoration-none"><?= $item['TEXT'];?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-lg-3">
				<ul class="list-unstyled">
					<?php foreach ($arResult['MENU']['BUTTONS'] as $item) { ?>
					<li class="list-unstyled-item mb-3">
						<a href="<?= $item['LINK'];?>" class="form-button b-yatextgray b-radius-yaradius-8 c-yatextgray c-h-c-yatextgray text-decoration-none w-100 d-flex justify-content-center align-items-center fw-b-c"><?= $item['TEXT'];?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>