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
$gallery = !empty($modelData['GALLERY']) && is_array($modelData['GALLERY']) ? $modelData['GALLERY'] : [];
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

    <!-- 2. ANCHOR NAVIGATION BAR (Block 2 from mockup: light-gray #F3F3F3, sticky-top, dark links) -->
    <div class="model-anchor-nav-bar py-2 mb-4 sticky-top">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="nav-links d-flex flex-wrap align-items-center">
                <a href="#section-specs" class="nav-item-link me-4 text-decoration-none fw-bold small text-uppercase">
                    Технические характеристики
                </a>
                <a href="#section-engine" class="nav-item-link me-4 text-decoration-none fw-bold small text-uppercase">
                    Двигатель и управление
                </a>
                <a href="#section-comfort" class="nav-item-link me-4 text-decoration-none fw-bold small text-uppercase">
                    Комфорт
                </a>
                <a href="#section-safety" class="nav-item-link me-4 text-decoration-none fw-bold small text-uppercase">
                    Технологии и безопасность
                </a>
                <?php if (!empty($gallery)): ?>
                    <a href="#section-gallery" class="nav-item-link text-decoration-none fw-bold small text-uppercase">
                        Галерея
                    </a>
                <?php endif; ?>
            </div>
            <div class="nav-actions d-flex align-items-center gap-2">
                <?php if (!empty($brochureFile)): ?>
                    <a href="<?= htmlspecialcharsbx($brochureFile) ?>" target="_blank" class="btn-subnav-action border b-radius-yaradius-8 px-3 py-2 text-decoration-none small fw-bold text-uppercase d-inline-flex align-items-center">
                        <span class="me-2">Брошюра</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/>
                        </svg>
                    </a>
                <?php endif; ?>
                <?php if (!empty($warrantyFile)): ?>
                    <a href="<?= htmlspecialcharsbx($warrantyFile) ?>" target="_blank" class="btn-subnav-action border b-radius-yaradius-8 px-3 py-2 text-decoration-none small fw-bold text-uppercase d-inline-flex align-items-center">
                        <span class="me-2">Каталог аксессуаров</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- 3. SPECS & ENGINE SECTION -->
    <section id="section-specs" class="model-section py-4 my-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="model-section-title fw-b-c text-uppercase">
                        Двигатель и управление
                    </h2>
                </div>
            </div>

            <div class="row g-4" id="section-engine">
                <?php foreach ($engineSpecs as $spec): ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="spec-card bg-yawhite b-radius-24 p-4 h-100 d-flex flex-column justify-content-between border">
                            <div class="spec-title text-muted text-uppercase small fw-bold mb-3">
                                <?= htmlspecialcharsbx($spec['TITLE']) ?>
                            </div>
                            <div class="spec-val-wrap my-auto">
                                <div class="spec-val fw-b-c display-6 mb-1 text-primary">
                                    <?= htmlspecialcharsbx($spec['VAL']) ?>
                                </div>
                                <div class="spec-sub text-muted small">
                                    <?= htmlspecialcharsbx($spec['SUB']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4. COMFORT SECTION (Slider/Cards with image and signature details) -->
    <?php if (!empty($comfortItems)): ?>
    <section id="section-comfort" class="model-section py-5 my-4 model-section-bg-gray">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="model-section-title fw-b-c text-uppercase mb-0">
                    Комфорт
                </h2>
                <div class="comfort-slider-arrows d-none d-md-flex align-items-center gap-2">
                    <button type="button" class="comfort-slider-btn prev-btn rounded-circle border d-flex align-items-center justify-content-center" aria-label="Назад">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                    </button>
                    <button type="button" class="comfort-slider-btn next-btn rounded-circle border d-flex align-items-center justify-content-center" aria-label="Вперед">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </button>
                </div>
            </div>

            <div class="comfort-swiper swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($comfortItems as $item): ?>
                        <div class="swiper-slide comfort-slide" style="width: 300px;">
                            <div class="comfort-card bg-white b-radius-24 overflow-hidden border h-100 d-flex flex-column">
                                <div class="comfort-card-img" style="height: 180px; background-color: #f8f9fa;">
                                    <?php if (!empty($item['IMG'])): ?>
                                        <img src="<?= htmlspecialcharsbx($item['IMG']) ?>" alt="<?= htmlspecialcharsbx($item['TITLE']) ?>" class="w-100 h-100 object-fit-cover d-block" />
                                    <?php else: ?>
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center text-muted">
                                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                                <circle cx="8.5" cy="8.5" r="1.5"/>
                                                <polyline points="21 15 16 10 5 21"/>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="comfort-card-body p-4 d-flex flex-column flex-grow-1">
                                    <h3 class="comfort-card-title fw-b-c fs-6 mb-2">
                                        <?= htmlspecialcharsbx($item['TITLE']) ?>
                                    </h3>
                                    <p class="comfort-card-desc text-muted small mb-0 mt-auto">
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

    <!-- 5. SAFETY & TECHNOLOGY SECTION (6 cards with top image 608x218 by mockup) -->
    <?php if (!empty($safetyItems)): ?>
    <section id="section-safety" class="model-section py-5 my-4">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="model-section-title fw-b-c text-uppercase">
                        Технологии и безопасность
                    </h2>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($safetyItems as $item): ?>
                    <div class="col-12 col-md-6">
                        <div class="safety-card bg-white b-radius-24 overflow-hidden h-100 border d-flex flex-column">
                            <?php if (!empty($item['IMG'])): ?>
                                <div class="safety-card-img" style="height: 220px; overflow: hidden; background: #eef1f5;">
                                    <img src="<?= htmlspecialcharsbx($item['IMG']) ?>" alt="<?= htmlspecialcharsbx($item['TITLE']) ?>" class="w-100 h-100 object-fit-cover d-block" />
                                </div>
                            <?php endif; ?>
                            <div class="p-4 p-md-5 d-flex flex-column flex-grow-1 justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span class="safety-badge px-3 py-1 rounded-pill small fw-bold text-uppercase bg-light text-primary border">
                                            <?= htmlspecialcharsbx($item['BADGE'] ?? 'SAFETY') ?>
                                        </span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#002C6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 6. GALLERY SECTION (Exact 7-photo asymmetrical layout from Figma Frame 205:1189) -->
    <?php if (!empty($gallery)): ?>
    <section id="section-gallery" class="model-section py-5 my-4 model-section-bg-gray">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="model-section-title fw-b-c text-uppercase">
                        Галерея <?= htmlspecialcharsbx($name) ?>
                    </h2>
                </div>
            </div>

            <!-- Asymmetrical 7-photo grid -->
            <div class="model-gallery-grid">
                <!-- Col 1: 2 items (310x190) -->
                <div class="gallery-col col-left">
                    <?php if (!empty($gallery[0])): ?>
                        <div class="gallery-item-wrap item-small">
                            <img src="<?= htmlspecialcharsbx($gallery[0]) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?> 1" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($gallery[1])): ?>
                        <div class="gallery-item-wrap item-small">
                            <img src="<?= htmlspecialcharsbx($gallery[1]) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?> 2" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Col 2: 1 tall item (310x380) -->
                <div class="gallery-col col-mid-tall">
                    <?php if (!empty($gallery[2])): ?>
                        <div class="gallery-item-wrap item-tall">
                            <img src="<?= htmlspecialcharsbx($gallery[2]) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?> 3" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Col 3: Right group (top: narrow + wide; bottom: 2 normal) -->
                <div class="gallery-col col-right-group">
                    <div class="gallery-right-top">
                        <?php if (!empty($gallery[3])): ?>
                            <div class="gallery-item-wrap item-narrow">
                                <img src="<?= htmlspecialcharsbx($gallery[3]) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?> 4" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($gallery[4])): ?>
                            <div class="gallery-item-wrap item-wide">
                                <img src="<?= htmlspecialcharsbx($gallery[4]) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?> 5" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="gallery-right-bottom">
                        <?php if (!empty($gallery[5])): ?>
                            <div class="gallery-item-wrap item-half">
                                <img src="<?= htmlspecialcharsbx($gallery[5]) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?> 6" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($gallery[6])): ?>
                            <div class="gallery-item-wrap item-half">
                                <img src="<?= htmlspecialcharsbx($gallery[6]) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?> 7" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 7. ACTION BUTTONS (Frame 1000003906, 3 wide buttons by Figma) -->
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
