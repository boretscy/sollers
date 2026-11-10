<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
$APPLICATION->SetPageProperty("title", "О дилерском центре | Официальный дилер Sollers Юг-Авто");
$APPLICATION->SetPageProperty("description", "Официальный дилер Sollers Юг-Авто в Краснодаре и Яблоновском. Продажа, гарантия и сервис коммерческих автомобилей Sollers.");
?>

<main class="py-4 py-lg-5">
    <!-- 1. Главный Hero-баннер раздела -->
    <div class="container mb-5">
        <div class="position-relative overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm" style="min-height: 420px; background-color: #d5d6d3;">
            <!-- Фоновое изображение из макета (без затенения) -->
            <img src="/local/templates/sollers.theme/assets/images/about/bg-about.png" alt="Sollers производство" class="position-absolute top-50 start-50 translate-middle w-100 h-100 object-fit-cover" style="min-height: 420px;">

            <div class="position-relative z-1 p-4 p-md-5 d-flex flex-column justify-content-end" style="min-height: 420px; max-width: 760px;">
                <h1 class="h1 fw-b-c c-yawhite text-uppercase mb-0" style="font-size: clamp(28px, 4vw, 36px); line-height: 1.15;">
                    Sollers более 15 лет развивает производство легких коммерческих автомобилей
                </h1>
            </div>
        </div>
    </div>

    <!-- 2. Вводный акцентный лид-параграф (по центру) -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <p class="text-center c-yablack fw-semibold mb-0" style="font-size: clamp(18px, 2vw, 22px); line-height: 1.35;">
                    Группа Компаний «Юг-Авто» работает на автомобильном рынке более 28 лет, обеспечивая клиентам высокий уровень сервисного обслуживания и предоставляя выгодные условия покупки автомобилей.
                </p>
            </div>
        </div>
    </div>

    <!-- 3. Секция завода и контроля качества (Белая подложка на всю ширину) -->
    <section class="bg-white py-5 mb-5">
        <div class="container py-lg-3">
            <!-- Верхняя строка: Текст о производстве + Фото завода справа -->
            <div class="row g-4 g-lg-5 align-items-center mb-5">
                <div class="col-lg-7">
                    <p class="c-yablack mb-3 leading-relaxed" style="font-size: 16px;">
                        Группа Компаний «Юг-Авто» работает на автомобильном рынке более 28 лет, обеспечивая клиентам высокий уровень сервисного обслуживания и предоставляя выгодные условия покупки автомобилей.
                    </p>
                    <p class="c-yablack mb-3 leading-relaxed" style="font-size: 16px;">
                        Мы объединяем собственный опыт и видение ведущих производителей. Так, отражая ценности бренда Sollers, дилерский центр предлагает надежные автомобили класса LCV (легкие коммерческие автомобили), которые производятся на инновационном предприятии - Заводе группы СОЛЛЕРС в Елабуге (Республика Татарстан, ОЭЗ «Алабуга»).
                    </p>
                    <p class="c-yablack mb-0 leading-relaxed" style="font-size: 16px;">
                        Производственный комплекс СОЛЛЕРС Алабуга оснащен современным высокотехнологичным оборудованием, рассчитанным на производство широкой линейки автомобилей по технологии полного цикла. На всех этапах производства осуществляется многоступенчатый контроль качества QMS, основанный на мировых стандартах. Все выпущенные на заводе автомобили проходят проверку на линии испытаний, включающей в себя регулировку света фар, динамические испытания, дождевальную камеру и тестовый трек с различными видами покрытия.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm" style="height: 280px;">
                        <img src="/local/templates/sollers.theme/assets/images/about/image-14.png" alt="Завод СОЛЛЕРС в Елабуге" class="w-100 h-100 object-fit-cover d-block">
                    </div>
                </div>
            </div>

            <!-- Нижняя строка: Фото контроля слева + Текст об аудите справа -->
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm" style="height: 280px;">
                        <img src="/local/templates/sollers.theme/assets/images/about/image-16.png" alt="Аудит и контроль качества готовой продукции" class="w-100 h-100 object-fit-cover d-block">
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <p class="c-yablack mb-3 leading-relaxed" style="font-size: 16px;">
                        5% от всех произведенных за смену автомобилей проходят особый аудит готовой продукции, включающий испытания на специальном оборудовании, — вибростенды, воздушный и водяной тесты. Также выборочно кузова проходят через посты неразрушающего контроля, ультразвуковое тестирование точек сварки и трехкоординатный контроль геометрии готового кузова.
                    </p>
                    <p class="c-yablack mb-0 leading-relaxed" style="font-size: 16px;">
                        Дилерский центр Sollers «Юг-Авто», в свою очередь, гарантирует прозрачные условия покупки, оригинальные запчасти и полный цикл послепродажного обслуживания, включая гарантийные обязательства и работу сертифицированных специалистов.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Блок преимуществ: «Выбирая наш автосалон, вы получаете:» -->
    <div class="container mb-5">
        <h2 class="h2 fw-b-c c-yablack text-center text-uppercase mb-4 mb-lg-5" style="font-size: clamp(28px, 3.5vw, 40px);">
            Выбирая наш автосалон, вы получаете:
        </h2>

        <div class="row g-3 g-lg-4 justify-content-center">
            <!-- 1. Акции и спецпредложения -->
            <div class="col-6 col-md-4 col-lg">
                <div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-3 p-xl-4 h-100 shadow-sm d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 185px;">
                    <div class="mb-3 d-flex align-items-center justify-content-center" style="width: 62px; height: 62px;">
                        <img src="/local/templates/sollers.theme/assets/images/about/opportunity-1.svg" alt="Акции и спецпредложения" class="img-fluid" style="max-height: 54px;">
                    </div>
                    <div class="c-yablack fw-semibold" style="font-size: 16px; line-height: 1.2;">
                        Акции и спецпредложения
                    </div>
                </div>
            </div>

            <!-- 2. Дополнительные выгоды при покупке в кредит -->
            <div class="col-6 col-md-4 col-lg">
                <div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-3 p-xl-4 h-100 shadow-sm d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 185px;">
                    <div class="mb-3 d-flex align-items-center justify-content-center" style="width: 62px; height: 62px;">
                        <img src="/local/templates/sollers.theme/assets/images/about/opportunity-2.svg" alt="Выгоды в кредит" class="img-fluid" style="max-height: 54px;">
                    </div>
                    <div class="c-yablack fw-semibold" style="font-size: 16px; line-height: 1.2;">
                        Дополнительные выгоды при покупке в кредит
                    </div>
                </div>
            </div>

            <!-- 3. Программы автострахования -->
            <div class="col-6 col-md-4 col-lg">
                <div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-3 p-xl-4 h-100 shadow-sm d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 185px;">
                    <div class="mb-3 d-flex align-items-center justify-content-center" style="width: 62px; height: 62px;">
                        <img src="/local/templates/sollers.theme/assets/images/about/opportunity-3.svg" alt="Программы автострахования" class="img-fluid" style="max-height: 54px;">
                    </div>
                    <div class="c-yablack fw-semibold" style="font-size: 16px; line-height: 1.2;">
                        Программы автострахования
                    </div>
                </div>
            </div>

            <!-- 4. Программа обмена авто на новый с честной оценкой -->
            <div class="col-6 col-md-6 col-lg">
                <div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-3 p-xl-4 h-100 shadow-sm d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 185px;">
                    <div class="mb-3 d-flex align-items-center justify-content-center" style="width: 62px; height: 62px;">
                        <img src="/local/templates/sollers.theme/assets/images/about/opportunity-4.svg" alt="Программа обмена" class="img-fluid" style="max-height: 54px;">
                    </div>
                    <div class="c-yablack fw-semibold" style="font-size: 16px; line-height: 1.2;">
                        Программу обмена старого автомобиля на новый с честной оценкой стоимости
                    </div>
                </div>
            </div>

            <!-- 5. Оформление за 1 день -->
            <div class="col-12 col-md-6 col-lg">
                <div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-3 p-xl-4 h-100 shadow-sm d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 185px;">
                    <div class="mb-3 d-flex align-items-center justify-content-center" style="width: 62px; height: 62px;">
                        <img src="/local/templates/sollers.theme/assets/images/about/opportunity-5.svg" alt="Оформление за 1 день" class="img-fluid" style="max-height: 54px;">
                    </div>
                    <div class="c-yablack fw-semibold" style="font-size: 16px; line-height: 1.2;">
                        Оформление за 1 день
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Фотогалерея дилерского центра (асимметричный брендовый коллаж 380px) -->
    <div class="container mb-5">
        <div class="overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm">
            <div class="row g-2">
                <!-- Колонка 1: две картинки 190px -->
                <div class="col-md-3 d-flex flex-column gap-2">
                    <div style="height: 190px;" class="overflow-hidden">
                        <img src="/local/templates/sollers.theme/assets/images/about/gallery-1.png" alt="Автосалон Sollers Юг-Авто" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div style="height: 190px;" class="overflow-hidden">
                        <img src="/local/templates/sollers.theme/assets/images/about/gallery-2.png" alt="Шоурум Sollers Юг-Авто" class="w-100 h-100 object-fit-cover">
                    </div>
                </div>

                <!-- Колонка 2: одна высокая картинка на всю высоту (388px) -->
                <div class="col-md-3">
                    <div style="height: 388px;" class="overflow-hidden">
                        <img src="/local/templates/sollers.theme/assets/images/about/gallery-3.png" alt="Сервисный центр Sollers Юг-Авто" class="w-100 h-100 object-fit-cover">
                    </div>
                </div>

                <!-- Колонка 3: правая часть из 4 фото (2x2) -->
                <div class="col-md-6 d-flex flex-column gap-2">
                    <div class="row g-2">
                        <div class="col-4" style="height: 190px;">
                            <img src="/local/templates/sollers.theme/assets/images/about/gallery-4.png" alt="Автомобили Sollers" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-8" style="height: 190px;">
                            <img src="/local/templates/sollers.theme/assets/images/about/gallery-5.png" alt="Дилерский центр Юг-Авто" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-6" style="height: 190px;">
                            <img src="/local/templates/sollers.theme/assets/images/about/gallery-6.png" alt="Зона выдачи авто" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6" style="height: 190px;">
                            <img src="/local/templates/sollers.theme/assets/images/about/gallery-7.png" alt="Команда специалистов Sollers" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
