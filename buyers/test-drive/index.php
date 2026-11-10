<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Запись на тест-драйв Sollers — Официальный дилер Юг-Авто");
$APPLICATION->SetTitle("Испытайте коммерческие автомобили в реальных условиях");
?>
<div class="container my-5">
	<!-- Page Header H1 -->
	<div class="row mb-5">
		<div class="col text-center">
			<h1 class="fw-b-c text-black" style="font-size: calc(1.8rem + 1.2vw); line-height: 1.2;">
				Испытайте коммерческие автомобили в&nbsp;реальных условиях
			</h1>
		</div>
	</div>

	<!-- 5 Opportunity Cards -->
	<div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3 mb-5">
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-1.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Продолжительность до&nbsp;7&nbsp;дней</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-2.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Разрешен выезд за&nbsp;пределы региона</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-3.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">По всей России</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-4.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Пробег до 200&nbsp;км в&nbsp;сутки</div>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 text-center h-100 d-flex flex-column align-items-center justify-content-center shadow-sm">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about/opportunity-5.svg" alt="" class="mb-3" style="width: 54px; height: 54px;">
				<div class="fw-b-c text-black" style="font-size: 16px; line-height: 1.3;">Круглый год</div>
			</div>
		</div>
	</div>

	<!-- Steps Section -->
	<div class="row mb-4">
		<div class="col text-center">
			<h2 class="fw-b-c text-black">Этапы тест-драйва</h2>
		</div>
	</div>
	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 1</div>
				<h4 class="fw-b-c text-black mb-3">Выбор</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					Выберите одну из&nbsp;популярных моделей, отправьте заявку или позвоните в&nbsp;дилерский центр
				</p>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 2</div>
				<h4 class="fw-b-c text-black mb-3">Оформление</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					Оформите документы в&nbsp;дилерском центре и&nbsp;возьмите автомобиль в&nbsp;тестовую эксплуатацию на&nbsp;срок до 7&nbsp;дней
				</p>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 3</div>
				<h4 class="fw-b-c text-black mb-3">Эксплуатация</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					Оцените все характеристики автомобилей, чтобы лучше понять, что нужно вашему бизнесу
				</p>
			</div>
		</div>
		<div class="col">
			<div class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 h-100 d-flex flex-column shadow-sm">
				<div class="c-yaorange fw-b-c mb-2" style="font-size: 18px;">Шаг 4</div>
				<h4 class="fw-b-c text-black mb-3">Поделитесь мнением</h4>
				<p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.45;">
					После окончания тестовой эксплуатации и&nbsp;сдаче автомобиля, заполните анкету. Нам важно ваше мнение!
				</p>
			</div>
		</div>
	</div>

	<!-- Requirements / Accordions for Individuals and Legal entities -->
	<div class="row justify-content-center mb-5">
		<div class="col-12">
			<div class="d-flex flex-column gap-3">
				<div class="border border-dark rounded-3 px-4 py-3 d-flex justify-content-between align-items-center cursor-pointer">
					<span class="text-uppercase fw-b-c text-black" style="letter-spacing: 0.5px;">Для физических лиц</span>
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/credit/chevron-down.svg" alt="" style="width: 16px; height: 16px;">
				</div>
				<div class="border border-dark rounded-3 px-4 py-3 d-flex justify-content-between align-items-center cursor-pointer">
					<span class="text-uppercase fw-b-c text-black" style="letter-spacing: 0.5px;">Для юридических лиц</span>
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/credit/chevron-down.svg" alt="" style="width: 16px; height: 16px;">
				</div>
			</div>
		</div>
	</div>

	<!-- Test Drive Booking Form Section -->
	<div class="row mb-4">
		<div class="col text-center">
			<h2 class="fw-b-c text-black">Запишитесь на&nbsp;тест-драйв</h2>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-12">
			<form class="p-4 p-md-5 bg-white b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm" name="FORM_TEST_DRIVE">
				<input type="hidden" name="FORM_CODE" value="FORM_TEST_DRIVE" />
				<input type="hidden" name="FORM_NAME" value="Запись на тест-драйв" />

				<div class="row g-3 mb-3">
					<div class="col-12 col-md-4">
						<select class="form-select b-yagray b-radius-yaradius-8 px-3 py-2" name="MODEL" required>
							<option value="" disabled selected>Модель автомобиля*</option>
							<option value="Sollers Argo">Sollers Argo (Арго)</option>
							<option value="Sollers SF4">Sollers SF4 (СФ4)</option>
							<option value="Sollers SF5">Sollers SF5 (СФ5)</option>
							<option value="Sollers ST6">Sollers ST6 (СТ6)</option>
							<option value="Sollers ST8">Sollers ST8 (СТ8)</option>
							<option value="Sollers ST9">Sollers ST9 (СТ9)</option>
							<option value="Sollers SP7">Sollers SP7 (СП7)</option>
							<option value="Sollers TR-серия">Sollers TR (грузовые)</option>
						</select>
					</div>
					<div class="col-12 col-md-4">
						<select class="form-select b-yagray b-radius-yaradius-8 px-3 py-2" name="REGION" required>
							<option value="" disabled selected>Ваш регион*</option>
							<option value="Краснодарский край">Краснодарский край</option>
							<option value="Республика Адыгея">Республика Адыгея</option>
							<option value="Другой регион">Другой регион</option>
						</select>
					</div>
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="NAME" placeholder="ФИО*" required />
					</div>
				</div>

				<div class="row g-3 mb-3">
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="PHONE" placeholder="+7 ___ ___ __ __*" data-phone-pattern="+7 ___ ___ __ __" maxlength="16" required autocomplete="off" />
					</div>
					<div class="col-12 col-md-4">
						<input type="email" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="EMAIL" placeholder="E-mail*" required />
					</div>
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="DATES" placeholder="Укажите длительность тест-драйва и даты" />
					</div>
				</div>

				<div class="row g-3 mb-4">
					<div class="col-12 col-md-8">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="COMPANY_NAME" placeholder="Название юридического лица" />
					</div>
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="COMPANY_INN" placeholder="ИНН организации" />
					</div>
				</div>

				<div class="row g-4 align-items-center">
					<div class="col-12 col-lg-8">
						<div class="d-flex flex-column gap-2">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="Y" id="AGREE_DATA" name="AGREE_DATA" required checked />
								<label class="form-check-label text-secondary" for="AGREE_DATA" style="font-size: 13px;">
									<noindex>Даю согласие на сбор и обработку моих персональных данных в соответствии с <a href="/about/personal-data-policy/" target="_blank" rel="nofollow" class="text-dark text-decoration-underline">политикой</a></noindex>
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="Y" id="AGREE_ADS" name="AGREE_ADS" />
								<label class="form-check-label text-secondary" for="AGREE_ADS" style="font-size: 13px;">
									<noindex>Даю согласие на&nbsp;получение информации рекламного характера</noindex>
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="Y" id="AGREE_INTERVIEW" name="AGREE_INTERVIEW" />
								<label class="form-check-label text-secondary" for="AGREE_INTERVIEW" style="font-size: 13px;">
									<noindex>Даю согласие на&nbsp;прохождение интервью по&nbsp;итогу тест-драйва</noindex>
								</label>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4 text-lg-end">
						<a href="#" role="sendForm" class="form-button bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase px-4 py-3 d-inline-flex justify-content-center align-items-center fw-b-c w-100" style="letter-spacing: 0.5px;">
							Запланировать
						</a>
						<div class="text-secondary mt-2 text-start text-lg-end" style="font-size: 12px;">
							* — поля, обязательные для заполнения
						</div>
					</div>
				</div>

				<div class="alert alert-danger text-center mt-3 d-none">
					<noindex>Ой, что-то пошло не так.<br />Повторите попытку позднее.</noindex>
				</div>
				<div class="alert alert-success text-center mt-3 d-none">
					<noindex>Спасибо! Ваша заявка успешно отправлена.<br />Наш специалист свяжется с Вами в ближайшее время.</noindex>
				</div>
			</form>
		</div>
	</div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
