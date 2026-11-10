<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$modelsList = !empty($arResult['MEGAMENU_MODELS']) && is_array($arResult['MEGAMENU_MODELS']) ? $arResult['MEGAMENU_MODELS'] : [];
$clientsData = !empty($arResult['MEGAMENU_CLIENTS']) && is_array($arResult['MEGAMENU_CLIENTS']) ? $arResult['MEGAMENU_CLIENTS'] : [];
?>

<!-- HEADER CONTACTS & LOGO -->
<div class="container py-3 top-header">
	<div class="row align-items-center">
		<div class="col-lg-4 col-md-5">
			<a href="/" class="c-yablack c-h-yablack text-decoration-none d-flex align-items-center">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/header-logo.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/header-logo.svg') ?>" alt="<?= htmlspecialcharsbx(Site::getSiteName()) ?>" />
				<div class="yaw-1px bg-yablack h-100 mx-2"></div>
				<div class="pt-1 header-site-name fw-b-c"><?= htmlspecialcharsbx(Site::getSiteName()) ?></div>
			</a>
		</div>
		<div class="col-lg-8 col-md-7 d-flex justify-content-end align-items-center">
			<a 
				href="tel:<?= htmlspecialcharsbx(Site::getPhoneNormalized()) ?>" 
				class="d-flex justify-content-center align-items-center c-yablack c-h-yablack text-decoration-none me-4">
				<span class="top-menu-icon-wrap bg-yaorange b-radius-yaradius-4 d-flex justify-content-center align-items-center me-2">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-header-phone.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-header-phone.svg') ?>" alt="" />
				</span>
				<span class="header-contact-text">
					<?= htmlspecialcharsbx(Site::getPhoneFormatted()) ?>
				</span>
			</a>
			<a 
				href="<?= htmlspecialcharsbx(Site::getYandexMapUrl()) ?>" 
				class="d-flex justify-content-center align-items-center c-yablack c-h-yablack text-decoration-none">
				<span class="top-menu-icon-wrap bg-yaorange b-radius-yaradius-4 d-flex justify-content-center align-items-center me-2">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-header-map-marker.svg?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/svg/icon-header-map-marker.svg') ?>" alt="" />
				</span>
				<span class="header-contact-text">
					<?= htmlspecialcharsbx(Site::getAddress()) ?>
				</span>
			</a>
		</div>
	</div>
</div>

<!-- TOP NAV BAR (Frame 80:1978: bg #f3f3f3, height 52px, items gap 40px) -->
<div class="top-menu-bar w-100 position-relative">
	<div class="container">
		<div class="row">
			<div class="col">
				<nav class="d-flex align-items-center top-menu-nav">
					<a href="https://cars.sollers-yug-avto.ru/" class="top-menu-link c-yablack c-h-yaorange text-decoration-none">
						Автомобили в наличии
					</a>

					<a href="/models/" class="top-menu-link c-yablack c-h-yaorange text-decoration-none" data-menu-target="models">
						Модели
					</a>

					<a href="/about/" class="top-menu-link c-yablack c-h-yaorange text-decoration-none" data-menu-target="clients">
						Клиентам
					</a>
				</nav>
			</div>
		</div>
	</div>

	<!-- MEGAMENU 1: МОДЕЛИ (сетка 4x2 с автомобилями) -->
	<?php if (!empty($modelsList)): ?>
	<div class="megamenu-panel megamenu-models d-none" data-menu-panel="models">
		<div class="container py-4">
			<div class="row g-4 row-cols-2 row-cols-md-4">
				<?php foreach ($modelsList as $model): ?>
					<div class="col">
						<a href="<?= htmlspecialcharsbx($model['LINK']) ?>" class="megamenu-model-card text-decoration-none d-flex flex-column align-items-center text-center h-100 p-2">
							<div class="megamenu-model-img-wrap mb-2 d-flex align-items-center justify-content-center">
								<?php if (!empty($model['IMG'])): ?>
									<img src="<?= htmlspecialcharsbx($model['IMG']) ?>" alt="<?= htmlspecialcharsbx($model['NAME']) ?>" class="img-fluid" />
								<?php endif; ?>
							</div>
							<div class="megamenu-model-title fw-b-c c-yablack">
								<?= htmlspecialcharsbx($model['NAME']) ?>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<!-- MEGAMENU 2: КЛИЕНТАМ (двухуровневая структура) -->
	<?php if (!empty($clientsData)): ?>
	<div class="megamenu-panel megamenu-clients d-none" data-menu-panel="clients">
		<!-- Sub-level 1: Tabs (Покупателям, Владельцам, О компании) -->
		<div class="megamenu-clients-subtabs border-top border-bottom">
			<div class="container">
				<div class="d-flex align-items-center py-2 gap-4">
					<button type="button" class="clients-subtab-btn active text-uppercase fw-b-c bg-transparent border-0 p-0" data-clients-tab="buyers">
						Покупателям
					</button>
					<button type="button" class="clients-subtab-btn text-uppercase fw-b-c bg-transparent border-0 p-0" data-clients-tab="owners">
						Владельцам
					</button>
					<button type="button" class="clients-subtab-btn text-uppercase fw-b-c bg-transparent border-0 p-0" data-clients-tab="company">
						О компании
					</button>
				</div>
			</div>
		</div>

		<!-- Sub-level 2: Links row -->
		<div class="megamenu-clients-content border-bottom">
			<div class="container py-2">
				<?php foreach ($clientsData as $tabKey => $tab): ?>
					<div class="clients-links-row d-flex flex-wrap align-items-center gap-4 <?= $tabKey === 'buyers' ? '' : 'd-none' ?>" data-clients-content="<?= htmlspecialcharsbx($tabKey) ?>">
						<?php foreach ($tab['ITEMS'] as $item): ?>
							<a href="<?= htmlspecialcharsbx($item['LINK']) ?>" class="megamenu-client-link text-decoration-none fw-b-c c-yablack c-h-yaorange py-1">
								<?= htmlspecialcharsbx($item['TITLE']) ?>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
