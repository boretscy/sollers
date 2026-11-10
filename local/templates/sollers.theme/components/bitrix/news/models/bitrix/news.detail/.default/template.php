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

// Banner from IBLOCK property BANNER
$bannerSrc = '';
if (!empty($arResult['PROPERTIES']['BANNER']['VALUE'])) {
    $bannerSrc = CFile::GetPath($arResult['PROPERTIES']['BANNER']['VALUE']);
}

// Brochure from IBLOCK property BROCHURE
$brochureFile = '';
if (!empty($arResult['PROPERTIES']['BROCHURE']['VALUE'])) {
    $brochureFile = CFile::GetPath($arResult['PROPERTIES']['BROCHURE']['VALUE']);
}

// Accessories / Warranty file
$warrantyFile = '';
if (!empty($arResult['PROPERTIES']['WARRANTY_FILE']['VALUE'])) {
    $warrantyFile = CFile::GetPath($arResult['PROPERTIES']['WARRANTY_FILE']['VALUE']);
}

$slogan = !empty($modelData['SLOGAN']) ? $modelData['SLOGAN'] : 'СОЗДАН ДЛЯ РАБОТЫ';
$warrantyBadges = !empty($modelData['WARRANTY_BADGES']) && is_array($modelData['WARRANTY_BADGES']) ? $modelData['WARRANTY_BADGES'] : [];
$engineSpecs = !empty($modelData['ENGINE_SPECS']) && is_array($modelData['ENGINE_SPECS']) ? $modelData['ENGINE_SPECS'] : [];
$comfortItems = !empty($modelData['COMFORT_ITEMS']) && is_array($modelData['COMFORT_ITEMS']) ? $modelData['COMFORT_ITEMS'] : [];
$safetyItems = !empty($modelData['SAFETY_ITEMS']) && is_array($modelData['SAFETY_ITEMS']) ? $modelData['SAFETY_ITEMS'] : [];
?>

<div class="model-landing">
    <!-- 1. HERO BANNER (1240x420 exact mockup with signature 2-corner rounding) -->
    <div class="container my-3 my-md-4">
        <?php if (!empty($bannerSrc)): ?>
            <div class="model-hero-banner-image position-relative">
                <img src="<?= htmlspecialcharsbx($bannerSrc) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?>" class="img-fluid w-100 d-block" />
                <!-- Action hotspot over the button area -->
                <a href="#feedback" class="model-hero-banner-hotspot" aria-label="Оставить заявку"></a>
            </div>
        <?php else: ?>
            <div class="model-hero-banner position-relative p-4 p-md-5">
                <div class="model-hero-content position-relative z-index-2 d-flex flex-column justify-content-between h-100">
                    <div class="hero-top-group">
                        <h1 class="model-hero-title fw-b-c mb-1 text-white">
                            Sollers <?= htmlspecialcharsbx($name) ?>
                        </h1>
                        <div class="model-hero-slogan fw-b-c text-uppercase mb-3">
                            <?= htmlspecialcharsbx($slogan) ?>
                        </div>
                        <?php if (!empty($warrantyBadges)): ?>
                            <div class="model-hero-warranty mb-4 text-white">
                                <?php foreach ($warrantyBadges as $badge): ?>
                                    <div class="warranty-item mb-1"><?= htmlspecialcharsbx($badge) ?></div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="hero-bottom-group mt-auto">
                        <?php if (!empty($priceText)): ?>
                            <div class="model-hero-price fw-b-c mb-3 text-white fs-2">
                                <?= htmlspecialcharsbx($priceText) ?>
                            </div>
                        <?php endif; ?>
                        <div class="model-hero-btn-wrap">
                            <a href="#feedback" class="btn-hero-action text-decoration-none text-uppercase fw-b-c d-inline-flex align-items-center justify-content-center">
                                ОСТАВИТЬ ЗАЯВКУ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- 2. ANCHOR NAVIGATION BAR (Block 2 from mockup: light-gray #F3F3F3, dark links, action buttons) -->
    <div class="model-anchor-nav-bar py-2 my-4">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="nav-links d-flex flex-wrap align-items-center">
                <a href="#section-specs" class="anchor-link text-decoration-none fw-b-c me-3 me-md-4 py-2">
                    Технические характеристики
                </a>
                <?php if (!empty($engineSpecs)): ?>
                    <a href="#section-specs" class="anchor-link text-decoration-none fw-b-c me-3 me-md-4 py-2">
                        Двигатель и управление
                    </a>
                <?php endif; ?>
                <?php if (!empty($comfortItems)): ?>
                    <a href="#section-comfort" class="anchor-link text-decoration-none fw-b-c me-3 me-md-4 py-2">
                        Комфорт
                    </a>
                <?php endif; ?>
                <?php if (!empty($safetyItems)): ?>
                    <a href="#section-safety" class="anchor-link text-decoration-none fw-b-c me-3 me-md-4 py-2">
                        Технологии и безопасность
                    </a>
                <?php endif; ?>
            </div>

            <div class="nav-actions d-flex flex-wrap align-items-center gap-2">
                <!-- Кнопка «БРОШЮРА >» -->
                <?php if (!empty($brochureFile)): ?>
                    <a href="<?= htmlspecialcharsbx($brochureFile) ?>" target="_blank" class="btn-model-brochure text-decoration-none text-uppercase fw-b-c d-inline-flex align-items-center justify-content-center">
                        <span class="me-2">БРОШЮРА</span>
                        <svg class="brochure-arrow" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.5 1.5L6 6L1.5 10.5" stroke="#F37032" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                <?php else: ?>
                    <a href="/owners/manuals/" class="btn-model-brochure text-decoration-none text-uppercase fw-b-c d-inline-flex align-items-center justify-content-center">
                        <span class="me-2">БРОШЮРА</span>
                        <svg class="brochure-arrow" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.5 1.5L6 6L1.5 10.5" stroke="#F37032" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                <?php endif; ?>

                <!-- Кнопка «КАТАЛОГ АКСЕССУАРОВ» -->
                <?php if (!empty($warrantyFile)): ?>
                    <a href="<?= htmlspecialcharsbx($warrantyFile) ?>" target="_blank" class="btn-model-accessories text-decoration-none text-uppercase fw-b-c d-inline-flex align-items-center justify-content-center">
                        КАТАЛОГ АКСЕССУАРОВ
                    </a>
                <?php else: ?>
                    <a href="/owners/manuals/" class="btn-model-accessories text-decoration-none text-uppercase fw-b-c d-inline-flex align-items-center justify-content-center">
                        КАТАЛОГ АКСЕССУАРОВ
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- 3. SPECS SECTION: ДВИГАТЕЛИ И УПРАВЛЕНИЕ -->
    <?php if (!empty($engineSpecs)): ?>
    <section id="section-specs" class="model-section py-4 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="model-section-title fw-b-c text-uppercase mb-0">
                        Двигатели и управление
                    </h2>
                </div>
            </div>

            <div class="row g-3 g-md-4">
                <?php foreach ($engineSpecs as $spec): ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="model-spec-card bg-white b-radius-yaradius-24 p-4 h-100 border text-center d-flex flex-column justify-content-between">
                            <div class="spec-label text-muted small text-uppercase mb-2">
                                <?= htmlspecialcharsbx($spec['LABEL']) ?>
                            </div>
                            <div class="spec-value fw-b-c fs-1 c-yaorange my-2">
                                <?= htmlspecialcharsbx($spec['VAL']) ?>
                            </div>
                            <div class="spec-sub text-muted small mt-auto">
                                <?= htmlspecialcharsbx($spec['SUB']) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 4. COMFORT SECTION (SLIDER, Group 1000003902) -->
    <?php if (!empty($comfortItems)): ?>
    <section id="section-comfort" class="model-section py-4 mb-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h2 class="model-section-title fw-b-c text-uppercase mb-0">
                        Комфорт
                    </h2>
                </div>
                <div class="col-auto d-flex align-items-center gap-2">
                    <div class="comfort-slider-btn prev-btn rounded-circle border bg-white d-flex align-items-center justify-content-center shadow-sm">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                    <div class="comfort-slider-btn next-btn rounded-circle border bg-white d-flex align-items-center justify-content-center shadow-sm">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="swiper comfort-swiper pb-4">
                <div class="swiper-wrapper">
                    <?php foreach ($comfortItems as $item): ?>
                        <div class="swiper-slide" style="width: 320px; max-width: 85vw;">
                            <div class="model-comfort-card b-radius-yaradius-24 p-4 h-100 border bg-white d-flex flex-column justify-content-between">
                                <div>
                                    <div class="comfort-icon-wrap mb-3 text-primary">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#002C6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <h3 class="model-comfort-title fw-b-c fs-5 mb-2">
                                        <?= htmlspecialcharsbx($item['TITLE']) ?>
                                    </h3>
                                    <p class="model-comfort-desc text-muted small mb-0">
                                        <?= htmlspecialcharsbx($item['DESC']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 5. SAFETY SECTION (3 CARDS, Frame 1000003897) -->
    <?php if (!empty($safetyItems)): ?>
    <section id="section-safety" class="model-section py-4 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="model-section-title fw-b-c text-uppercase mb-0">
                        Технологии и безопасность
                    </h2>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($safetyItems as $item): ?>
                    <div class="col-12 col-md-4">
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
