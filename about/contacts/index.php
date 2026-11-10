<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("title", "Контакты | Официальный дилер Sollers Юг-Авто");
$APPLICATION->SetPageProperty("description", "Контакты официального дилера Sollers Юг-Авто: адрес, телефон, режим работы автосалона и сервиса в Краснодаре и Яблоновском.");

$coords = \Sollers\Settings\Config\SiteSettings::getCoordinates();
$mapLat = !empty($coords['lat']) ? $coords['lat'] : 44.972461;
$mapLon = !empty($coords['lon']) ? $coords['lon'] : 38.943182;
$siteName = \Sollers\Settings\Config\SiteSettings::getSiteName() ?: "Юг-Авто Яблоновский";
$siteAddress = \Sollers\Settings\Config\SiteSettings::getAddress() ?: "аул Тахтамукай, ул. Краснодарская, 3/3";
$sitePhoneFormatted = \Sollers\Settings\Config\SiteSettings::getPhoneFormatted() ?: "+7 (861) 203 28 88";
$sitePhoneNormalized = \Sollers\Settings\Config\SiteSettings::getPhoneNormalized() ?: "+78612032888";
$siteSchedule = \Sollers\Settings\Config\SiteSettings::getSchedule() ?: "Ежедневно с 08:00 до 20:00";
$mapUrl = \Sollers\Settings\Config\SiteSettings::getYandexMapUrl() ?: "https://yandex.ru/maps/-/CDT1mUnS";
?>

<main class="py-4 py-lg-5">
    <div class="container mb-5">
        <!-- Заголовок страницы строго по макету Figma (text-center, 52px, TT Commons Pro Cond) -->
        <h1 class="h1 fw-b-c c-yablack text-center text-uppercase mb-4 mb-lg-5" style="font-size: clamp(32px, 4vw, 52px); letter-spacing: 0.5px;">
            Контакты
        </h1>

        <!-- Основной блок карточки контактов и карты (Frame 1000003981, 1240x440px) -->
        <div class="row g-4 align-items-stretch justify-content-center">
            
            <!-- Левая колонка: Информация о дилере (Белая карточка с фирменным скруглением) -->
            <div class="col-12 col-lg-6">
                <div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 p-md-5 h-100 shadow-sm d-flex flex-column justify-content-between" style="min-height: 440px;">
                    
                    <!-- Верхняя часть: Название дилера и статус -->
                    <div class="mb-4">
                        <h2 class="h3 fw-bold c-yablack mb-1" style="font-size: 24px;">
                            <?= htmlspecialcharsbx($siteName); ?>
                        </h2>
                        <div class="c-yatextgray text-uppercase fw-semibold" style="font-size: 14px; letter-spacing: 0.5px;">
                            официальный дилер SOLLERS
                        </div>
                    </div>

                    <!-- Средняя часть: Адрес, Телефон, График работы -->
                    <div class="d-flex flex-column gap-3 mb-4">
                        <!-- Адрес -->
                        <div class="d-flex align-items-center gap-3">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 24px; height: 24px;">
                                <img src="/local/templates/sollers.theme/assets/images/about/icon-mark.svg" alt="Адрес" width="18" height="20">
                            </div>
                            <div class="c-yablack" style="font-size: 16px;">
                                <?= htmlspecialcharsbx($siteAddress); ?>
                            </div>
                        </div>

                        <!-- Телефон -->
                        <div class="d-flex align-items-center gap-3">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 24px; height: 24px;">
                                <img src="/local/templates/sollers.theme/assets/images/about/icon-phone.svg" alt="Телефон" width="18" height="20">
                            </div>
                            <div>
                                <a href="tel:<?= htmlspecialcharsbx($sitePhoneNormalized); ?>" class="c-yablack c-h-yaorange text-decoration-none fw-bold" style="font-size: 18px;">
                                    <?= htmlspecialcharsbx($sitePhoneFormatted); ?>
                                </a>
                            </div>
                        </div>

                        <!-- Режим работы -->
                        <div class="d-flex align-items-center gap-3">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 24px; height: 24px;">
                                <img src="/local/templates/sollers.theme/assets/images/about/icon-clock.svg" alt="Режим работы" width="18" height="20">
                            </div>
                            <div class="c-yablack" style="font-size: 16px;">
                                <?= htmlspecialcharsbx($siteSchedule); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Нижняя часть: Кнопки действий -->
                    <div class="d-flex flex-column flex-sm-row gap-3 pt-2">
                        <!-- Построить маршрут -->
                        <a href="<?= htmlspecialcharsbx($mapUrl); ?>" target="_blank" rel="noopener noreferrer" class="form-button bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase fw-b-c d-flex align-items-center justify-content-center gap-2 px-4 shadow-sm" style="height: 48px; font-size: 16px;">
                            <span>построить маршрут</span>
                            <img src="/local/templates/sollers.theme/assets/images/about/icon-route-arrow.svg" alt="" width="16" height="16">
                        </a>

                        <!-- Заказать звонок (скролл к форме заказа звонка) -->
                        <a href="#form-order-call" onclick="document.querySelector('#form-order-call, form[role=\'form\'], .form-bg')?.scrollIntoView({behavior: 'smooth'}); return false;" class="form-button b-yablack b-radius-yaradius-8 c-yablack c-h-yaorange text-decoration-none text-uppercase fw-b-c d-flex align-items-center justify-content-center px-4" style="height: 48px; font-size: 16px; border: 1px solid var(--yablack);">
                            заказать звонок
                        </a>
                    </div>

                </div>
            </div>

            <!-- Правая колонка: Интерактивная карта Яндекс через JS API -->
            <div class="col-12 col-lg-6">
                <div class="position-relative overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm h-100" style="min-height: 440px; background-color: #f0f0f0;">
                    <!-- Контейнер для Яндекс.Карт API -->
                    <div id="contacts-map" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; min-height: 440px;"></div>
                </div>
            </div>

        </div>
    </div>
</main>

<div id="form-order-call"></div>

<!-- Подключение Яндекс.Карт API 2.1 -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof ymaps === 'undefined') return;

    ymaps.ready(function () {
        var mapLat = <?= (float)$mapLat; ?>;
        var mapLon = <?= (float)$mapLon; ?>;
        var siteName = <?= json_encode($siteName, JSON_UNESCAPED_UNICODE); ?>;
        var siteAddress = <?= json_encode($siteAddress, JSON_UNESCAPED_UNICODE); ?>;

        var map = new ymaps.Map('contacts-map', {
            center: [mapLat, mapLon],
            zoom: 16,
            controls: ['zoomControl', 'fullscreenControl']
        }, {
            searchControlProvider: 'yandex#search'
        });

        // Кастомная метка с фирменным стилем и балуном
        var placemark = new ymaps.Placemark([mapLat, mapLon], {
            hintContent: 'Юг-Авто Sollers',
            balloonContentHeader: '<div style="font-weight: bold; color: #292523;">' + siteName + '</div>',
            balloonContentBody: '<div style="color: #666; font-size: 14px; margin-top: 4px;">' + siteAddress + '</div>',
            balloonContentFooter: '<div style="color: #F77D40; font-weight: bold; margin-top: 6px;">Официальный дилер SOLLERS</div>'
        }, {
            preset: 'islands#orangeDotIconWithCaption',
            iconCaption: 'Юг-Авто Sollers'
        });

        map.geoObjects.add(placemark);
        map.behaviors.disable('scrollZoom');
    });
});
</script>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
