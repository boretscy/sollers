<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Программа «Помощь на дорогах» Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetTitle("Помощь на дорогах");
?>
<div class="container my-4">
	<!-- Hero banner (Frame 591) -->
	<div class="row">
		<div class="col">
			<div class="roadhelp-banner b-radius-yaradius-40 b-radius-tr-bl-nr position-relative overflow-hidden d-flex flex-column justify-content-end p-4 p-md-5"
				 style="min-height: 420px; background: url('<?= SITE_TEMPLATE_PATH ?>/assets/images/roadside-assistance/hero.png?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/roadside-assistance/hero.png'); ?>') no-repeat center center; background-size: cover;">
				<div class="roadhelp-banner-gradient position-absolute top-0 start-0 w-100 h-100"
					 style="background: linear-gradient(90deg, rgba(44, 44, 44, 0.8) 0%, rgba(44, 44, 44, 0.4) 45%, rgba(52, 52, 52, 0) 80%); pointer-events: none;"></div>
				<div class="position-relative z-1" style="max-width: 680px;">
					<h1 class="c-yawhite fw-b-c mb-0 text-uppercase" style="font-size: calc(1.75rem + 1.2vw); line-height: 1.15;">
						ПРОГРАММА «ПОМОЩЬ НА&nbsp;ДОРОГАХ»
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 3 Advantage Cards (Container y=589) -->
<div class="container my-5">
	<div class="row g-4">
		<!-- Card 1: Phone -->
		<div class="col-12 col-md-4">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column align-items-center justify-content-center text-center shadow-sm" style="min-height: 185px;">
				<div class="mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
					<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4741 21.8326 20.7293C21.721 20.9845 21.5574 21.2137 21.3524 21.4019C21.1473 21.5901 20.9054 21.7332 20.6421 21.8219C20.3788 21.9106 20.0999 21.943 19.823 21.917C16.7628 21.5842 13.8217 20.5372 11.23 18.86C8.82397 17.3242 6.78207 15.2823 5.246 12.876C3.56303 10.2734 2.51522 7.32014 2.188 4.248C2.16207 3.9715 2.19428 3.69302 2.28254 3.43004C2.3708 3.16706 2.51318 2.92529 2.70068 2.72021C2.88817 2.51513 3.11654 2.35123 3.37093 2.23927C3.62532 2.12731 3.90008 2.06977 4.178 2.07H7.178C7.66311 2.06522 8.13328 2.23727 8.50207 2.55462C8.87087 2.87197 9.11294 3.3134 9.184 3.798C9.317 4.704 9.539 5.594 9.846 6.452C9.989 6.848 9.957 7.288 9.757 7.658L8.487 9.245C9.914 11.755 11.968 13.809 14.478 15.236L16.065 13.966C16.435 13.766 16.875 13.734 17.271 13.877C18.129 14.184 19.019 14.406 19.925 14.539C20.4149 14.6106 20.8604 14.8559 21.1793 15.2298C21.4982 15.6038 21.6685 16.0799 21.658 16.57L22 16.92Z" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<a href="tel:88006008322" class="fw-b-c text-decoration-none" style="font-size: 24px; color: #292523;">8-800-600-83-22</a>
				<div class="mt-1 text-muted" style="font-size: 15px; line-height: 20px;">Звонок по России бесплатный</div>
			</div>
		</div>

		<!-- Card 2: 24/7 -->
		<div class="col-12 col-md-4">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column align-items-center justify-content-center text-center shadow-sm" style="min-height: 185px;">
				<div class="mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
					<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="12" cy="12" r="10" stroke="#D15C22" stroke-width="2"/>
						<polyline points="12 6 12 12 16 14" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div class="fw-b-c" style="font-size: 24px; color: #292523;">24/7</div>
				<div class="mt-1 text-muted" style="font-size: 15px; line-height: 20px;">Вы можете рассчитывать на нас</div>
			</div>
		</div>

		<!-- Card 3: 250 km -->
		<div class="col-12 col-md-4">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column align-items-center justify-content-center text-center shadow-sm" style="min-height: 185px;">
				<div class="mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
					<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="#D15C22"/>
					</svg>
				</div>
				<div class="fw-b-c" style="font-size: 24px; color: #292523;">До 250 км</div>
				<div class="mt-1 text-muted" style="font-size: 14px; line-height: 18px; max-width: 320px;">Действует на дорогах России в пределах 250 км от ближайшего дилерского центра Sollers</div>
			</div>
		</div>
	</div>
</div>

<!-- Services Section (Услуги + roadhelp image, y=881) -->
<div class="container my-5">
	<div class="row g-4 g-lg-5 align-items-center">
		<!-- Left: Services List -->
		<div class="col-12 col-lg-6">
			<h3 class="fw-b-c mb-4" style="font-size: 28px; line-height: normal; color: #292523;">Услуги</h3>
			<div class="d-flex flex-column gap-4" style="color: #292523; font-size: 16px; line-height: 22px;">
				<!-- Service 1: Эвакуация -->
				<div class="d-flex align-items-start gap-3">
					<div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3 bg-white shadow-sm" style="width: 60px; height: 60px;">
						<svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 3H15V13H1V3Z" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M15 8H19L22 11V16H15V8Z" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<circle cx="5.5" cy="17.5" r="2.5" stroke="#D15C22" stroke-width="2"/>
							<circle cx="18.5" cy="17.5" r="2.5" stroke="#D15C22" stroke-width="2"/>
						</svg>
					</div>
					<div class="pt-2">
						Эвакуация к&nbsp;официальному дилеру SOLLERS, если автомобиль не&nbsp;может продолжать движение или его движение небезопасно
					</div>
				</div>

				<!-- Service 2: Выезд специалиста -->
				<div class="d-flex align-items-start gap-3">
					<div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3 bg-white shadow-sm" style="width: 60px; height: 60px;">
						<svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.7 6.3C15.6 5.4 16.9 4.9 18.2 5C19.5 5.1 20.7 5.8 21.5 6.8C22.3 7.8 22.6 9.1 22.4 10.4C22.2 11.7 21.4 12.8 20.3 13.5L12 21.8L9.2 19L14.7 13.5C14.3 12.9 14.1 12.2 14.1 11.5C14.1 10.8 14.3 10.1 14.7 9.5L14.7 6.3Z" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M2.5 16.5L7.5 11.5L12.5 16.5L7.5 21.5L2.5 16.5Z" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<div class="pt-2">
						Выезд технического специалиста для устранения неисправности автомобиля на&nbsp;месте
					</div>
				</div>

				<!-- Service 3: Информирование -->
				<div class="d-flex align-items-start gap-3">
					<div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3 bg-white shadow-sm" style="width: 60px; height: 60px;">
						<svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="#D15C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<div class="pt-2">
						Информирование о&nbsp;происшествии родственников/работодателя
					</div>
				</div>
			</div>
		</div>

		<!-- Right: roadhelp image -->
		<div class="col-12 col-lg-6">
			<div class="position-relative overflow-hidden b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm" style="min-height: 360px;">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/roadside-assistance/roadhelp.png?<?= @md5_file($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/assets/images/roadside-assistance/roadhelp.png'); ?>"
					 alt="Помощь на дорогах Sollers" class="w-100 h-100 object-fit-cover" style="min-height: 360px;">
			</div>
		</div>
	</div>
</div>

<!-- Full-width White Background Section: Действие программы (Rectangle 4886) -->
<section class="bg-white py-5 mb-5 shadow-sm">
	<div class="container py-lg-3">
		<!-- Program Description (Frame 1000003868) -->
		<div class="row mb-4">
			<div class="col-12 d-flex flex-column gap-3">
				<h3 class="fw-b-c mb-1" style="font-size: 28px; line-height: normal; color: #292523;">Действие программы</h3>
				<p class="mb-0" style="color: #292523; font-size: 16px; line-height: 24px;">
					Программа действует для владельцев автомобилей SOLLERS при покупке нового автомобиля у&nbsp;официального дилера и&nbsp;продлевается каждый раз, когда автомобиль проходит регулярное техническое обслуживание у&nbsp;официального дилера SOLLERS с&nbsp;выполнением всех работ, предусмотренных регламентом. Срок действия программы: один год или до&nbsp;истечения рекомендованного межсервисного интервала. При возникновении трудностей на&nbsp;дороге наберите бесплатный номер телефона круглосуточной горячей линии <a href="tel:88006008322" class="text-decoration-none fw-bold c-yaorange">8-800-600-83-22</a>. Программа распространяется на коммерческие автомобили Sollers SF4 (СФ4), Sollers Argo (Арго), Sollers SF1 (СФ1), Sollers ST6 (СТ6), Sollers ST8 (СТ8), Sollers ST9 (СТ9) разрешенной максимальной массой не более 6 тонн, а также на автобусы Sollers SA6 (СА6), SA9 (СА9) с полной массой до 45 (сорока пяти) тонн.
				</p>
			</div>
		</div>

		<!-- PDF Document Link -->
		<div class="row mb-4">
			<div class="col-12">
				<a href="#" target="_blank" class="d-inline-flex align-items-center gap-2 text-decoration-none" style="color: #292523; font-size: 16px; font-weight: 500;">
					<svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 0H2C0.9 0 0 0.9 0 2V22C0 23.1 0.9 24 2 24H18C19.1 24 20 23.1 20 22V8L12 0ZM18 22H2V2H11V9H18V22ZM4 13H16V15H4V13ZM4 17H16V19H4V17ZM4 9H8V11H4V9Z" fill="#D15C22"/>
					</svg>
					<span class="text-decoration-underline">Ознакомьтесь с условиями предоставления услуги</span>
				</a>
			</div>
		</div>

		<!-- Disclaimers (Frame 1000003942) -->
		<div class="row">
			<div class="col-12">
				<div class="d-flex flex-column gap-3 text-muted" style="font-size: 13px; line-height: 18px;">
					<div>
						Электронные системы безопасности разработаны для помощи водителю в&nbsp;сложных дорожных ситуациях и&nbsp;являются вспомогательными, что не&nbsp;снимает ответственности с&nbsp;водителя за&nbsp;безопасное управление транспортным средством.
					</div>
					<div>
						Производитель автомобилей SOLLERS постоянно совершенствует свою продукцию и&nbsp;оставляет за&nbsp;собой право на&nbsp;внесение изменений в&nbsp;технические характеристики, спецификации, цвета, цены моделей, комплектации, опции и&nbsp;т.п., представленные на&nbsp;данном сайте, без предварительного уведомления. Обращаем ваше внимание на&nbsp;то, что все представленные на&nbsp;сайте изображения и&nbsp;информация, касающаяся комплектаций, технических характеристик, цветовых сочетаний, а&nbsp;также стоимости автомобилей носят информационный характер и&nbsp;не&nbsp;являются публичной офертой.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
