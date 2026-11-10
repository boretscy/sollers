<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

$name = !empty($arResult['NAME']) ? $arResult['NAME'] : 'Sollers';
$modelData = !empty($arResult['MODEL_DATA']) && is_array($arResult['MODEL_DATA']) ? $arResult['MODEL_DATA'] : [];

$priceVal = !empty($arResult['PROPERTIES']['PRICE']['VALUE']) ? (float)$arResult['PROPERTIES']['PRICE']['VALUE'] : 0;
$priceText = !empty($modelData['PRICE_TEXT']) ? $modelData['PRICE_TEXT'] : ($priceVal > 0 ? 'от ' . number_format($priceVal, 0, '.', ' ') . ' ₽' : '');

$bodyVal = !empty($arResult['PROPERTIES']['BODY']['VALUE']) ? $arResult['PROPERTIES']['BODY']['VALUE'] : '';
$detailImg = !empty($arResult['DETAIL_PICTURE']['SRC']) ? $arResult['DETAIL_PICTURE']['SRC'] : (!empty($arResult['PREVIEW_PICTURE']['SRC']) ? $arResult['PREVIEW_PICTURE']['SRC'] : '');

$slogan = !empty($modelData['SLOGAN']) ? $modelData['SLOGAN'] : 'СОЗДАН ДЛЯ РАБОТЫ';
$subtitle = !empty($modelData['SUBTITLE']) ? $modelData['SUBTITLE'] : '';
$warrantyBadges = !empty($modelData['WARRANTY_BADGES']) && is_array($modelData['WARRANTY_BADGES']) ? $modelData['WARRANTY_BADGES'] : [];
$engineSpecs = !empty($modelData['ENGINE_SPECS']) && is_array($modelData['ENGINE_SPECS']) ? $modelData['ENGINE_SPECS'] : [];
$comfortItems = !empty($modelData['COMFORT_ITEMS']) && is_array($modelData['COMFORT_ITEMS']) ? $modelData['COMFORT_ITEMS'] : [];
$safetyItems = !empty($modelData['SAFETY_ITEMS']) && is_array($modelData['SAFETY_ITEMS']) ? $modelData['SAFETY_ITEMS'] : [];

$warrantyFile = '';
if (!empty($arResult['PROPERTIES']['WARRANTY_FILE']['VALUE'])) {
    $warrantyFile = CFile::GetPath($arResult['PROPERTIES']['WARRANTY_FILE']['VALUE']);
}
?>

<div class="model-landing">
    <!-- 1. HERO BANNER (Frame 591, 1240x420, dark rounded card by Figma) -->
    <div class="container my-3 my-md-4">
        <div class="model-hero-frame b-radius-yaradius-40 position-relative overflow-hidden">
            <div class="row h-100 align-items-center position-relative z-index-2 p-4 p-md-5">
                <div class="col-12 col-lg-7 text-white">
                    <h1 class="model-hero-h1 fw-b-c text-uppercase mb-2">
                        Sollers <?= htmlspecialcharsbx($name) ?>
                    </h1>

                    <div class="model-hero-slogan fw-b-c text-uppercase mb-3">
                        <?= htmlspecialcharsbx($slogan) ?>
                    </div>

                    <?php if (!empty($warrantyBadges)): ?>
                        <div class="model-hero-warranty mb-4">
                            <?php foreach ($warrantyBadges as $badge): ?>
                                <div class="warranty-badge-line d-flex align-items-center mb-1">
                                    <span class="warranty-dot me-2"></span>
                                    <span class="warranty-text"><?= htmlspecialcharsbx($badge) ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($priceText)): ?>
                        <div class="model-hero-price fw-b-c mb-4">
                            <?= htmlspecialcharsbx($priceText) ?>
                        </div>
                    <?php endif; ?>

                    <div class="model-hero-btn-wrap">
                        <a href="#feedback" class="btn-model-hero d-inline-flex align-items-center justify-content-center text-decoration-none text-uppercase fw-b-c">
                            <span>Оставить заявку</span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg" class="ms-2" alt="" />
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-5 text-center mt-4 mt-lg-0">
                    <?php if (!empty($detailImg)): ?>
                        <img src="<?= htmlspecialcharsbx($detailImg) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?>" class="model-hero-car-img img-fluid" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. ANCHOR NAVIGATION BAR (129:1078, dark background with links & pdf buttons) -->
    <div class="model-anchor-nav-bar bg-yablack py-2 mb-5">
        <div class="container d-flex flex-wrap align-items-center justify-content-between">
            <div class="nav-links d-flex flex-wrap align-items-center">
                <?php if (!empty($engineSpecs)): ?>
                    <a href="#section-specs" class="anchor-link text-decoration-none text-white text-uppercase small fw-bold me-4 py-2">
                        Двигатель и управление
                    </a>
                <?php endif; ?>
                <?php if (!empty($comfortItems)): ?>
                    <a href="#section-comfort" class="anchor-link text-decoration-none text-white text-uppercase small fw-bold me-4 py-2">
                        Комфорт
                    </a>
                <?php endif; ?>
                <?php if (!empty($safetyItems)): ?>
                    <a href="#section-safety" class="anchor-link text-decoration-none text-white text-uppercase small fw-bold me-4 py-2">
                        Технологии и безопасность
                    </a>
                <?php endif; ?>
                <a href="#section-choose" class="anchor-link text-decoration-none text-white text-uppercase small fw-bold py-2">
                    Автомобили в наличии
                </a>
            </div>

            <div class="nav-docs d-flex align-items-center mt-2 mt-md-0">
                <?php if (!empty($warrantyFile)): ?>
                    <a href="<?= htmlspecialcharsbx($warrantyFile) ?>" target="_blank" class="btn-nav-doc text-decoration-none text-white text-uppercase small fw-bold me-2 px-3 py-1 border rounded">
                        Брошюра
                    </a>
                <?php endif; ?>
                <a href="/owners/manuals/" class="btn-nav-doc text-decoration-none text-white text-uppercase small fw-bold px-3 py-1 border rounded">
                    Каталог аксессуаров
                </a>
            </div>
        </div>
    </div>

    <!-- 3. ENGINE & SPECS (Двигатели и управление) -->
    <?php if (!empty($engineSpecs)): ?>
    <section id="section-specs" class="model-section py-4 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="model-section-title fw-b-c text-uppercase">Двигатели и управление</h2>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($engineSpecs as $spec): ?>
                    <div class="col-6 col-md-3">
                        <div class="model-spec-card bg-white b-radius-yaradius-16 p-4 h-100 border text-center">
                            <div class="spec-label text-muted small text-uppercase mb-2">
                                <?= htmlspecialcharsbx($spec['TITLE']) ?>
                            </div>
                            <div class="spec-value fw-b-c fs-2 c-yaorange mb-1">
                                <?= htmlspecialcharsbx($spec['VAL']) ?>
                            </div>
                            <div class="spec-sub text-muted small">
                                <?= htmlspecialcharsbx($spec['SUB']) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 4. COMFORT CARDS SLIDER (Group 1000003902, 292x180 cards with icons) -->
    <?php if (!empty($comfortItems)): ?>
    <section id="section-comfort" class="model-section py-5 mb-5 bg-white">
        <div class="container">
            <div class="row mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h2 class="model-section-title fw-b-c text-uppercase mb-0">Комфорт</h2>
                </div>
                <div class="col-auto d-flex align-items-center gap-2">
                    <button class="comfort-slider-btn prev-btn bg-white border rounded-circle d-flex align-items-center justify-content-center p-2" type="button" aria-label="Назад">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-slider-prev.svg" alt="" width="20" height="20" />
                    </button>
                    <button class="comfort-slider-btn next-btn bg-white border rounded-circle d-flex align-items-center justify-content-center p-2" type="button" aria-label="Вперед">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-slider-next.svg" alt="" width="20" height="20" />
                    </button>
                </div>
            </div>

            <div class="swiper comfort-swiper overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach ($comfortItems as $idx => $item): ?>
                        <div class="swiper-slide h-auto" style="width: 292px;">
                            <div class="model-comfort-card bg-yawhite b-radius-yaradius-16 p-4 h-100 d-flex flex-column border">
                                <div class="comfort-card-top d-flex align-items-center justify-content-between mb-3">
                                    <div class="comfort-icon-badge bg-white rounded-circle p-2 border d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <span class="comfort-num fw-b-c text-muted small">#0<?= $idx + 1 ?></span>
                                </div>
                                <h3 class="comfort-card-title fw-b-c fs-5 mb-2">
                                    <?= htmlspecialcharsbx($item['TITLE']) ?>
                                </h3>
                                <p class="comfort-card-desc text-muted small mb-0 mt-auto">
                                    <?= htmlspecialcharsbx($item['DESC']) ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 5. SAFETY & TECH (Frame 1000003897, 2-column cards 608x387 with badges) -->
    <?php if (!empty($safetyItems)): ?>
    <section id="section-safety" class="model-section py-5 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="model-section-title fw-b-c text-uppercase">Технологии и безопасность</h2>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($safetyItems as $item): ?>
                    <div class="col-12 col-lg-6">
                        <div class="model-safety-card bg-white b-radius-yaradius-24 p-4 p-md-5 h-100 border d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="safety-badge px-3 py-1 rounded-pill small fw-bold text-uppercase bg-light text-primary border">
                                        <?= htmlspecialcharsbx($item['BADGE'] ?? 'SAFETY') ?>
                                    </span>
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#002C6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <h3 class="model-safety-title fw-b-c fs-4 mb-3">
                                    <?= htmlspecialcharsbx($item['TITLE']) ?>
                                </h3>
                                <p class="model-safety-desc text-muted mb-0">
                                    <?= htmlspecialcharsbx($item['DESC']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 6. ACTION BUTTONS (Frame 1000003906, 3 wide buttons by Figma) -->
    <section id="section-choose" class="model-section py-5 mb-5 bg-white">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="model-section-title fw-b-c text-uppercase mb-2">
                        Выбирайте автомобили Sollers <?= htmlspecialcharsbx($name) ?>
                    </h2>
                    <p class="text-muted">
                        Официальный дилер Sollers Юг-Авто в Краснодаре и Яблоновском
                    </p>
                </div>
            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-12 col-md-4">
                    <a href="#feedback" class="btn-model-action bg-yaorange text-white text-decoration-none text-uppercase fw-b-c p-3 b-radius-yaradius-8 d-flex align-items-center justify-content-center w-100">
                        <span class="me-2">Оставить заявку</span>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg" alt="" />
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="https://cars.sollers-yug-avto.ru" target="_blank" class="btn-model-action bg-yablack text-white text-decoration-none text-uppercase fw-b-c p-3 b-radius-yaradius-8 d-flex align-items-center justify-content-center w-100">
                        <span class="me-2">Выбрать онлайн</span>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg" alt="" />
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <?php if (!empty($warrantyFile)): ?>
                        <a href="<?= htmlspecialcharsbx($warrantyFile) ?>" target="_blank" class="btn-model-action b-yablack c-yablack text-decoration-none text-uppercase fw-b-c p-3 b-radius-yaradius-8 d-flex align-items-center justify-content-center w-100 border">
                            <span class="me-2">Каталог аксессуаров</span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg" alt="" />
                        </a>
                    <?php else: ?>
                        <a href="/owners/manuals/" class="btn-model-action b-yablack c-yablack text-decoration-none text-uppercase fw-b-c p-3 b-radius-yaradius-8 d-flex align-items-center justify-content-center w-100 border">
                            <span class="me-2">Каталог аксессуаров</span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/icon-button-corner.svg" alt="" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper !== 'undefined') {
        new Swiper('.comfort-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            navigation: {
                nextEl: '.comfort-slider-btn.next-btn',
                prevEl: '.comfort-slider-btn.prev-btn',
            },
        });
    }
});
</script>
