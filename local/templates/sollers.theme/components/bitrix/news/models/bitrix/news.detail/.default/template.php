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
    <!-- HERO SECTION -->
    <section class="model-hero py-4 py-lg-5 mb-5">
        <div class="container">
            <div class="model-hero-card p-4 p-md-5 b-radius-yaradius-40">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="model-hero-content">
                            <?php if (!empty($bodyVal)): ?>
                                <span class="badge bg-yaorange text-white text-uppercase px-3 py-2 mb-3 fw-bold rounded-pill">
                                    <?= htmlspecialcharsbx($bodyVal) ?>
                                </span>
                            <?php endif; ?>

                            <h1 class="model-hero-title mb-2">Sollers <?= htmlspecialcharsbx($name) ?></h1>

                            <?php if (!empty($subtitle)): ?>
                                <div class="model-hero-subtitle text-muted mb-2"><?= htmlspecialcharsbx($subtitle) ?></div>
                            <?php endif; ?>

                            <div class="model-hero-slogan fw-bold text-uppercase c-yaorange mb-3">
                                <?= htmlspecialcharsbx($slogan) ?>
                            </div>

                            <?php if (!empty($warrantyBadges)): ?>
                                <div class="model-warranty-badges mb-4">
                                    <?php foreach ($warrantyBadges as $badge): ?>
                                        <div class="badge-item d-flex align-items-center mb-2">
                                            <svg class="me-2 text-primary flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#002C6C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                            <span><?= htmlspecialcharsbx($badge) ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <div class="model-hero-price mb-4">
                                <span class="price-label text-muted d-block small text-uppercase">Стоимость</span>
                                <span class="price-value fw-b-c fs-2">
                                    <?php if ($priceVal > 0): ?>
                                        от <?= number_format($priceVal, 0, '.', ' ') ?> ₽
                                    <?php else: ?>
                                        По запросу
                                    <?php endif; ?>
                                </span>
                            </div>

                            <div class="model-hero-actions d-flex flex-wrap gap-3">
                                <a href="#feedback" class="btn btn-warning bg-yaorange text-white fw-bold px-4 py-3 b-radius-yaradius-8 text-uppercase border-0">
                                    Оставить заявку
                                </a>
                                <a href="https://cars.sollers-yug-avto.ru" target="_blank" class="btn btn-outline-dark fw-bold px-4 py-3 b-radius-yaradius-8 text-uppercase">
                                    Автомобили в наличии
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center">
                        <?php if (!empty($detailImg)): ?>
                            <div class="model-hero-img-wrap">
                                <img src="<?= htmlspecialcharsbx($detailImg) ?>" alt="Sollers <?= htmlspecialcharsbx($name) ?>" class="img-fluid model-main-img" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY SPECS / ENGINE SECTION -->
    <?php if (!empty($engineSpecs)): ?>
    <section class="model-specs py-4 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title fw-bold">Двигатели и характеристики</h2>
                    <p class="text-muted">Мощность, надежность и продуманная топливная экономичность</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <?php if (!empty($engineSpecs['TYPE'])): ?>
                <div class="col-6 col-md-3">
                    <div class="spec-card h-100 p-4 bg-white b-radius-yaradius-16 border text-center">
                        <div class="spec-icon mb-2 text-primary">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <div class="spec-name small text-muted text-uppercase">Тип двигателя</div>
                        <div class="spec-value fw-bold fs-5 mt-1"><?= htmlspecialcharsbx($engineSpecs['TYPE']) ?></div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($engineSpecs['POWER'])): ?>
                <div class="col-6 col-md-3">
                    <div class="spec-card h-100 p-4 bg-white b-radius-yaradius-16 border text-center">
                        <div class="spec-icon mb-2 text-warning">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#FF6600" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                        </div>
                        <div class="spec-name small text-muted text-uppercase"><?= htmlspecialcharsbx($engineSpecs['POWER_DESC'] ?? 'Мощность') ?></div>
                        <div class="spec-value fw-bold fs-5 c-yaorange mt-1"><?= htmlspecialcharsbx($engineSpecs['POWER']) ?></div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($engineSpecs['TORQUE'])): ?>
                <div class="col-6 col-md-3">
                    <div class="spec-card h-100 p-4 bg-white b-radius-yaradius-16 border text-center">
                        <div class="spec-icon mb-2 text-primary">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="spec-name small text-muted text-uppercase"><?= htmlspecialcharsbx($engineSpecs['TORQUE_DESC'] ?? 'Крутящий момент') ?></div>
                        <div class="spec-value fw-bold fs-5 mt-1"><?= htmlspecialcharsbx($engineSpecs['TORQUE']) ?></div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($engineSpecs['TRANSMISSION'])): ?>
                <div class="col-6 col-md-3">
                    <div class="spec-card h-100 p-4 bg-white b-radius-yaradius-16 border text-center">
                        <div class="spec-icon mb-2 text-primary">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                        </div>
                        <div class="spec-name small text-muted text-uppercase">Трансмиссия</div>
                        <div class="spec-value fw-bold fs-5 mt-1"><?= htmlspecialcharsbx($engineSpecs['TRANSMISSION']) ?></div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- COMFORT SECTION -->
    <?php if (!empty($comfortItems)): ?>
    <section class="model-comfort py-5 mb-5 bg-white">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title fw-bold">Комфорт и эргономика</h2>
                    <p class="text-muted">Продуманные решения для удобства водителя и пассажиров каждый день</p>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($comfortItems as $idx => $item): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="comfort-card h-100 p-4 b-radius-yaradius-16 border d-flex align-items-start">
                            <div class="comfort-num me-3 fw-bold fs-4 c-yaorange flex-shrink-0">
                                <?= sprintf('%02d', $idx + 1) ?>
                            </div>
                            <div class="comfort-text">
                                <?= htmlspecialcharsbx($item) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- SAFETY & TECH SECTION -->
    <?php if (!empty($safetyItems)): ?>
    <section class="model-safety py-5 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title fw-bold">Технологии и безопасность</h2>
                    <p class="text-muted">Современные системы помощи водителю и круговая защита</p>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($safetyItems as $item): ?>
                    <div class="col-md-6">
                        <div class="safety-card h-100 p-4 bg-white b-radius-yaradius-16 border">
                            <div class="safety-header d-flex align-items-center mb-3">
                                <div class="safety-icon-wrap me-3 p-2 bg-light rounded-circle text-primary flex-shrink-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <h3 class="safety-title fw-bold fs-5 mb-0"><?= htmlspecialcharsbx($item['TITLE']) ?></h3>
                            </div>
                            <p class="safety-desc text-muted mb-0"><?= htmlspecialcharsbx($item['TEXT']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA & DOCUMENTS SECTION -->
    <section class="model-cta py-5 mb-5 bg-white">
        <div class="container">
            <div class="model-cta-card p-4 p-md-5 b-radius-yaradius-24 text-center border">
                <h2 class="fw-bold mb-3">Выбирайте автомобили Sollers <?= htmlspecialcharsbx($name) ?></h2>
                <p class="text-muted mb-4 max-w-600 mx-auto">
                    Официальный дилер Sollers Юг-Авто в Краснодаре и Яблоновском предлагает специальные условия покупки, программы кредитования, лизинга и трейд-ин.
                </p>

                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#feedback" class="btn btn-warning bg-yaorange text-white fw-bold px-4 py-3 b-radius-yaradius-8 text-uppercase border-0">
                        Оставить заявку
                    </a>
                    <a href="https://cars.sollers-yug-avto.ru" target="_blank" class="btn btn-primary bg-yablack text-white fw-bold px-4 py-3 b-radius-yaradius-8 text-uppercase border-0">
                        Выбрать онлайн
                    </a>
                    <?php if (!empty($warrantyFile)): ?>
                        <a href="<?= htmlspecialcharsbx($warrantyFile) ?>" target="_blank" class="btn btn-outline-secondary fw-bold px-4 py-3 b-radius-yaradius-8 text-uppercase">
                            Скачать брошюру (PDF)
                        </a>
                    <?php else: ?>
                        <a href="/owners/manuals/" class="btn btn-outline-secondary fw-bold px-4 py-3 b-radius-yaradius-8 text-uppercase">
                            Руководства и каталоги
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
