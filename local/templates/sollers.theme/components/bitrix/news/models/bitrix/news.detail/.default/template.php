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

    <!-- 2. ANCHOR NAVIGATION BAR (Block 2 from mockup: exact buttons BROCHURE and ACCESSORIES) -->
    <div class="model-anchor-nav-bar py-3 mb-4 sticky-top">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="nav-links d-flex flex-wrap align-items-center">
                <a href="#section-specs" class="nav-item-link me-4 text-decoration-none fw-semibold">
                    Технические характеристики
                </a>
                <a href="#section-engine" class="nav-item-link me-4 text-decoration-none fw-semibold">
                    Двигатель и управление
                </a>
                <a href="#section-comfort" class="nav-item-link me-4 text-decoration-none fw-semibold">
                    Комфорт
                </a>
                <a href="#section-safety" class="nav-item-link me-4 text-decoration-none fw-semibold">
                    Технологии и безопасность
                </a>
                <?php if (!empty($gallery)): ?>
                    <a href="#section-gallery" class="nav-item-link text-decoration-none fw-semibold">
                        Галерея
                    </a>
                <?php endif; ?>
            </div>
            <div class="nav-actions d-flex align-items-center gap-2">
                <?php if (!empty($brochureFile)): ?>
                    <a href="<?= htmlspecialcharsbx($brochureFile) ?>" target="_blank" class="btn-subnav-brochure text-decoration-none d-inline-flex align-items-center">
                        <span>БРОШЮРА &gt;</span>
                    </a>
                <?php else: ?>
                    <a href="#feedback" class="btn-subnav-brochure text-decoration-none d-inline-flex align-items-center">
                        <span>БРОШЮРА &gt;</span>
                    </a>
                <?php endif; ?>
                <?php if (!empty($warrantyFile)): ?>
                    <a href="<?= htmlspecialcharsbx($warrantyFile) ?>" target="_blank" class="btn-subnav-accessories text-decoration-none d-inline-flex align-items-center text-uppercase">
                        <span>КАТАЛОГ АКСЕССУАРОВ</span>
                    </a>
                <?php else: ?>
                    <a href="/owners/manuals/" class="btn-subnav-accessories text-decoration-none d-inline-flex align-items-center text-uppercase">
                        <span>КАТАЛОГ АКСЕССУАРОВ</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- 3. BODY TYPES TABS & SPECS SECTION (Exact Figma Component 83) -->
    <section id="section-specs" class="model-section pt-2 pb-5">
        <div class="container">
            <!-- Body type tabs -->
            <div class="model-body-tabs mb-4 pb-1 d-flex flex-wrap">
                <span class="model-body-tab active" data-body="van">Цельнометаллический</span>
                <span class="model-body-tab" data-body="cargo-pass">Грузопассажирский фургон</span>
                <span class="model-body-tab" data-body="bus">Автобус</span>
                <span class="model-body-tab" data-body="truck">Грузовой автомобиль</span>
            </div>

            <div class="text-center my-4 py-2">
                <h2 class="model-section-title fw-b-c text-uppercase mb-0">
                    Технические характеристики
                </h2>
            </div>

            <!-- Specs Main Card -->
            <div class="specs-main-card">
                <div class="row g-4 align-items-center">
                    <!-- Left Column: Car Image + Wheelbase Switcher + Trim Links -->
                    <div class="col-12 col-lg-6">
                        <div class="text-center mb-3">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/models/sf4/van_side.png" alt="Sollers <?= htmlspecialcharsbx($name) ?> габариты" class="img-fluid d-inline-block" style="max-height: 220px;" />
                        </div>

                        <!-- Wheelbase switcher -->
                        <div class="text-center mb-4">
                            <div class="wheelbase-switcher justify-content-between mx-auto">
                                <button type="button" class="wheelbase-btn active" data-wb="l1">&lt; Короткая L1 &gt;</button>
                                <button type="button" class="wheelbase-btn" data-wb="l2">Средняя L2</button>
                                <button type="button" class="wheelbase-btn" data-wb="l3">Длинная L3</button>
                            </div>
                        </div>

                        <!-- Trim Links -->
                        <div class="spec-trim-section pt-3 border-top">
                            <div class="fw-bold small text-uppercase text-danger mb-2">Комплектации и цены</div>
                            <div class="row spec-trim-links">
                                <div class="col-6">
                                    <a href="#feedback">Sollers SF4 (СФ4) цельнометаллический</a>
                                    <a href="#feedback">Sollers SF4 (СФ4) автобус</a>
                                    <a href="#feedback">Sollers SF4 (СФ4) грузопассажирский фургон</a>
                                    <a href="#feedback">Sollers SF4 (СФ4) промтоварный</a>
                                </div>
                                <div class="col-6">
                                    <a href="#feedback">Sollers SF4 (СФ4) изотермический</a>
                                    <a href="#feedback">Sollers SF4 (СФ4) рефрижератор</a>
                                    <a href="#feedback">Sollers SF4 (СФ4) бортовой</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Metrics Grid -->
                    <div class="col-12 col-lg-6 ps-lg-4 border-start">
                        <!-- Dimensions -->
                        <div class="mb-4">
                            <div class="spec-category-label">ГАБАРИТНЫЕ РАЗМЕРЫ</div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="spec-metric-num" id="spec-dim-length">4 900</div>
                                    <div class="spec-metric-label">Общая длина, мм</div>
                                </div>
                                <div class="col-6">
                                    <div class="spec-metric-num" id="spec-dim-height">2 395</div>
                                    <div class="spec-metric-label">Общая высота, мм</div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-3 opacity-25" />

                        <!-- Cargo Compartment -->
                        <div class="mb-4">
                            <div class="spec-category-label">ГРУЗОВОЙ ОТСЕК</div>
                            <div class="row g-3 mb-2">
                                <div class="col-4">
                                    <div class="spec-metric-num" id="spec-cargo-len">2 430</div>
                                    <div class="spec-metric-label">Длина на уровне пола, мм</div>
                                </div>
                                <div class="col-4">
                                    <div class="spec-metric-num" id="spec-cargo-h">1 630</div>
                                    <div class="spec-metric-label">Высота, мм</div>
                                </div>
                                <div class="col-4">
                                    <div class="spec-metric-num" id="spec-cargo-w">1 780</div>
                                    <div class="spec-metric-label">Ширина, мм</div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-4">
                                    <div class="spec-metric-num" id="spec-cargo-vol">7.1 м³</div>
                                    <div class="spec-metric-label">Размер грузового отсека</div>
                                </div>
                                <div class="col-4">
                                    <div class="spec-metric-num" id="spec-cargo-pallets">3</div>
                                    <div class="spec-metric-label">Палеты (1200х800 мм)</div>
                                </div>
                                <div class="col-4">
                                    <div class="spec-metric-num" id="spec-cargo-weight">2 499/3 490</div>
                                    <div class="spec-metric-label">Полная масса, кг</div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-3 opacity-25" />

                        <!-- Wheels -->
                        <div>
                            <div class="spec-category-label">ТИП ЗАДНИХ КОЛЁС</div>
                            <div class="fw-bold text-dark fs-6" id="spec-wheels">
                                Односкатные
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. DARK ENGINE & CONTROL SECTION (Exact Figma Component 85) -->
    <section id="section-engine" class="model-engine-section-dark py-5">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 class="model-section-title text-white fw-b-c text-uppercase mb-0">
                    Двигатели и управление
                </h2>
            </div>

            <div class="engine-dark-card">
                <div class="row g-0 align-items-stretch">
                    <!-- Left: Engine Specs & Info -->
                    <div class="col-12 col-lg-7 p-4 p-md-5 d-flex flex-column justify-content-between">
                        <div>
                            <div class="text-white fs-4 fw-bold mb-3">Дизельный двигатель</div>
                            
                            <!-- Volume Switcher -->
                            <div class="engine-volume-switcher">
                                <button type="button" class="engine-volume-btn active" data-engine="1.9">&lt; Объем 1.9 литра &gt;</button>
                                <button type="button" class="engine-volume-btn" data-engine="2.7">Объем 2.7 литра</button>
                            </div>

                            <!-- Power & Torque -->
                            <div class="row mb-4">
                                <div class="col-6">
                                    <div class="engine-metric-val" id="engine-power">136 л.с.</div>
                                    <div class="engine-metric-sub">Максимальная мощность при 4000 об/мин</div>
                                </div>
                                <div class="col-6">
                                    <div class="engine-metric-val" id="engine-torque">310 Нм</div>
                                    <div class="engine-metric-sub">Максимальный крутящий момент при 1800-2800 об/мин</div>
                                </div>
                            </div>

                            <!-- Specs List -->
                            <div class="mb-4">
                                <div class="engine-list-item">
                                    <span><span class="dot"></span>Экологический класс:</span>
                                    <span class="fw-bold text-white" id="engine-eco">Евро-5</span>
                                </div>
                                <div class="engine-list-item">
                                    <span><span class="dot"></span>Объем топливного бака:</span>
                                    <span class="fw-bold text-white" id="engine-tank">80 литров</span>
                                </div>
                            </div>

                            <!-- Brake system -->
                            <div class="pt-3 border-top border-secondary">
                                <div class="text-white fs-5 fw-bold mb-2">Тормозная система</div>
                                <div class="small text-muted mb-1">
                                    <span class="dot"></span>Гидравлическая тормозная система с вакуумным усилителем
                                </div>
                                <div class="small text-muted">
                                    <span class="dot"></span>Дисковые тормозные механизмы на передних и задних колесах
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Engine & Car Cutout Photo -->
                    <div class="col-12 col-lg-5">
                        <div class="engine-photo-wrap">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/models/sf4/engine_side.png" alt="Двигатель Sollers <?= htmlspecialcharsbx($name) ?>" />
                        </div>
                    </div>
                </div>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Wheelbase switcher data (L1, L2, L3)
    const wbData = {
        l1: {
            len: '4 900',
            height: '2 395',
            cargoLen: '2 430',
            cargoH: '1 630',
            cargoW: '1 780',
            cargoVol: '7.1 м³',
            cargoPallets: '3',
            cargoWeight: '2 499/3 490'
        },
        l2: {
            len: '5 490',
            height: '2 395',
            cargoLen: '3 020',
            cargoH: '1 630',
            cargoW: '1 780',
            cargoVol: '9.2 м³',
            cargoPallets: '4',
            cargoWeight: '2 590/3 490'
        },
        l3: {
            len: '5 990',
            height: '2 645',
            cargoLen: '3 520',
            cargoH: '1 880',
            cargoW: '1 780',
            cargoVol: '11.5 м³',
            cargoPallets: '5',
            cargoWeight: '2 750/3 490'
        }
    };

    document.querySelectorAll('.wheelbase-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.wheelbase-btn').forEach(b => {
                b.classList.remove('active');
                b.innerText = b.innerText.replace(/[<>]/g, '').trim();
            });
            this.classList.add('active');
            this.innerText = `< ${this.innerText} >`;

            const wb = this.dataset.wb;
            if (wbData[wb]) {
                const d = wbData[wb];
                document.getElementById('spec-dim-length').innerText = d.len;
                document.getElementById('spec-dim-height').innerText = d.height;
                document.getElementById('spec-cargo-len').innerText = d.cargoLen;
                document.getElementById('spec-cargo-h').innerText = d.cargoH;
                document.getElementById('spec-cargo-w').innerText = d.cargoW;
                document.getElementById('spec-cargo-vol').innerText = d.cargoVol;
                document.getElementById('spec-cargo-pallets').innerText = d.cargoPallets;
                document.getElementById('spec-cargo-weight').innerText = d.cargoWeight;
            }
        });
    });

    // 2. Engine Volume switcher data (1.9 vs 2.7)
    const engineData = {
        '1.9': {
            power: '136 л.с.',
            torque: '310 Нм',
            eco: 'Евро-5',
            tank: '80 литров'
        },
        '2.7': {
            power: '150 л.с.',
            torque: '355 Нм',
            eco: 'Евро-5',
            tank: '80 литров'
        }
    };

    document.querySelectorAll('.engine-volume-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.engine-volume-btn').forEach(b => {
                b.classList.remove('active');
                b.innerText = b.innerText.replace(/[<>]/g, '').trim();
            });
            this.classList.add('active');
            this.innerText = `< ${this.innerText} >`;

            const eng = this.dataset.engine;
            if (engineData[eng]) {
                const ed = engineData[eng];
                document.getElementById('engine-power').innerText = ed.power;
                document.getElementById('engine-torque').innerText = ed.torque;
                document.getElementById('engine-eco').innerText = ed.eco;
                document.getElementById('engine-tank').innerText = ed.tank;
            }
        });
    });

    // 3. Body tabs interactive
    document.querySelectorAll('.model-body-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.model-body-tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
</script>
