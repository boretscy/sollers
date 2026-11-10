<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

// Получаем модели из инфоблока 3 для выпадающего списка
$arModels = [];
if (\Bitrix\Main\Loader::includeModule("iblock")) {
	$resModels = \CIBlockElement::GetList(
		["SORT" => "ASC", "ID" => "ASC"],
		["IBLOCK_ID" => 3, "ACTIVE" => "Y"],
		false,
		false,
		["ID", "NAME"]
	);
	while ($obModel = $resModels->Fetch()) {
		$arModels[] = $obModel["NAME"];
	}
}

// Строим карту настроенных полей формы
$fieldsMap = [];
if (!empty($arResult['PROPERTIES']['FIELDS']['VALUE']) && is_array($arResult['PROPERTIES']['FIELDS']['VALUE'])) {
	foreach ($arResult['PROPERTIES']['FIELDS']['VALUE'] as $k => $fieldCode) {
		$fieldsMap[$fieldCode] = $arResult['PROPERTIES']['FIELDS']['DESCRIPTION'][$k] ?? '';
	}
}

$siteName = \Sollers\Settings\Config\SiteSettings::getSiteName() ?: "Юг-Авто Яблоновский";
$siteAddress = \Sollers\Settings\Config\SiteSettings::getAddress() ?: "аул Тахтамукай, ул. Краснодарская, 3/3";
?>
<div class="service-form-wrapper">
	<form class="bg-white b-radius-yaradius-40 b-radius-tr-bl-nr p-4 p-md-5 service-multistep-form" name="<?= htmlspecialcharsbx($arResult['CODE']) ?>">
		<input type="hidden" name="FORM_CODE" value="<?= htmlspecialcharsbx($arResult['CODE']) ?>" />
		<input type="hidden" name="FORM_NAME" value="<?= htmlspecialcharsbx($arResult['NAME']) ?>" />

		<!-- Табы переключения шагов (HorizontalBorder по Figma 267:3040) -->
		<div class="service-steps-nav d-flex border-bottom mb-4 pb-2" style="border-color: #E6E8EC !important;">
			<button type="button" class="service-step-tab active btn btn-link text-decoration-none fw-bold p-0 pb-2 me-4 text-start position-relative" data-step="1" style="font-size: 18px; color: #292523;">
				Шаг 1 - Мой автомобиль
			</button>
			<button type="button" class="service-step-tab btn btn-link text-decoration-none fw-bold p-0 pb-2 text-start position-relative" data-step="2" style="font-size: 18px; color: #999;">
				Шаг 2 - Личная информация
			</button>
		</div>

		<!-- ШАГ 1: Мой автомобиль -->
		<div class="service-step-content" data-step-content="1">
			<div class="row g-3 mb-3">
				<?php if (isset($fieldsMap['MODEL'])): ?>
				<div class="col-12 col-md-4">
					<select class="form-select b-yagray b-radius-yaradius-8 px-3 py-2" name="MODEL" required style="height: 54px;">
						<option value="" disabled selected><?= htmlspecialcharsbx($fieldsMap['MODEL']) ?>*</option>
						<?php if (!empty($arModels)): ?>
							<?php foreach ($arModels as $modelName): ?>
								<option value="Sollers <?= htmlspecialcharsbx($modelName) ?>">Sollers <?= htmlspecialcharsbx($modelName) ?></option>
							<?php endforeach; ?>
						<?php else: ?>
							<option value="Sollers Argo">Sollers Argo (Арго)</option>
							<option value="Sollers SF4">Sollers SF4 (СФ4)</option>
							<option value="Sollers SF5">Sollers SF5 (СФ5)</option>
							<option value="Sollers ST6">Sollers ST6 (СТ6)</option>
							<option value="Sollers ST8">Sollers ST8 (СТ8)</option>
							<option value="Sollers ST9">Sollers ST9 (СТ9)</option>
							<option value="Sollers SP7">Sollers SP7 (СП7)</option>
						<?php endif; ?>
					</select>
				</div>
				<?php endif; ?>

				<?php if (isset($fieldsMap['VIN'])): ?>
				<div class="col-12 col-md-4">
					<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2 text-uppercase" name="VIN" placeholder="<?= htmlspecialcharsbx($fieldsMap['VIN']) ?>*" maxlength="17" required style="height: 54px;" />
				</div>
				<?php endif; ?>

				<?php if (isset($fieldsMap['MILEAGE'])): ?>
				<div class="col-12 col-md-4">
					<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="MILEAGE" placeholder="<?= htmlspecialcharsbx($fieldsMap['MILEAGE']) ?>*" required style="height: 54px;" />
				</div>
				<?php endif; ?>
			</div>

			<?php if (isset($fieldsMap['WISHES'])): ?>
			<div class="row mb-3">
				<div class="col-12">
					<textarea class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="WISHES" placeholder="<?= htmlspecialcharsbx($fieldsMap['WISHES']) ?>" rows="3" style="min-height: 112px; resize: vertical;"></textarea>
				</div>
			</div>
			<?php endif; ?>

			<?php if (isset($fieldsMap['SERVICE_TYPE'])): ?>
			<div class="row g-4 align-items-center mb-4 pt-2">
				<div class="col-12 col-md-6 d-flex align-items-center gap-4 flex-wrap">
					<div class="form-check d-flex align-items-center gap-2 m-0">
						<input class="form-check-input mt-0" type="checkbox" name="SERVICE_TYPE[]" value="Техническое обслуживание" id="srv_to" style="width: 22px; height: 22px; cursor: pointer;">
						<label class="form-check-label user-select-none" for="srv_to" style="cursor: pointer; font-size: 16px; color: #292523;">
							Техническое обслуживание <a href="/offers/spetsialnoe-predlozhenie-service/" target="_blank" class="text-decoration-underline c-yaorange ms-1" style="font-size: 14px;">Подробнее</a>
						</label>
					</div>
					<div class="form-check d-flex align-items-center gap-2 m-0">
						<input class="form-check-input mt-0" type="checkbox" name="SERVICE_TYPE[]" value="Ремонт" id="srv_repair" style="width: 22px; height: 22px; cursor: pointer;">
						<label class="form-check-label user-select-none" for="srv_repair" style="cursor: pointer; font-size: 16px; color: #292523;">
							Ремонт
						</label>
					</div>
				</div>
				<div class="col-12 col-md-6 text-md-end">
					<button type="button" class="btn-step-next form-button bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase fw-b-c px-5 d-inline-flex justify-content-center align-items-center" style="height: 54px; min-width: 220px; font-size: 16px; letter-spacing: 0.5px; border: none;">
						Далее
					</button>
				</div>
			</div>
			<?php endif; ?>

			<div class="text-secondary" style="font-size: 13px;">
				* — поля, обязательные для заполнения
			</div>
		</div>

		<!-- ШАГ 2: Личная информация -->
		<div class="service-step-content d-none" data-step-content="2">
			<div class="row g-3 mb-3">
				<?php if (isset($fieldsMap['NAME'])): ?>
				<div class="col-12 col-md-4">
					<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="NAME" placeholder="<?= htmlspecialcharsbx($fieldsMap['NAME']) ?>*" required style="height: 54px;" />
				</div>
				<?php endif; ?>

				<?php if (isset($fieldsMap['PHONE'])): ?>
				<div class="col-12 col-md-4">
					<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="PHONE" placeholder="<?= htmlspecialcharsbx($fieldsMap['PHONE']) ?>*" data-phone-pattern="+7 ___ ___ __ __" maxlength="16" required autocomplete="off" style="height: 54px;" />
				</div>
				<?php endif; ?>

				<?php if (isset($fieldsMap['EMAIL'])): ?>
				<div class="col-12 col-md-4">
					<input type="email" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="EMAIL" placeholder="<?= htmlspecialcharsbx($fieldsMap['EMAIL']) ?>*" required style="height: 54px;" />
				</div>
				<?php endif; ?>
			</div>

			<div class="row g-3 mb-4">
				<?php if (isset($fieldsMap['CITY'])): ?>
				<div class="col-12 col-md-4">
					<select class="form-select b-yagray b-radius-yaradius-8 px-3 py-2" name="CITY" required style="height: 54px;">
						<option value="" disabled><?= htmlspecialcharsbx($fieldsMap['CITY']) ?>*</option>
						<option value="Краснодар" selected>Краснодар</option>
						<option value="Яблоновский">пгт. Яблоновский</option>
						<option value="Адыгея">Республика Адыгея</option>
						<option value="Другой город">Другой город</option>
					</select>
				</div>
				<?php endif; ?>

				<?php if (isset($fieldsMap['DATE'])): ?>
				<div class="col-12 col-md-4">
					<input type="date" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="DATE" placeholder="<?= htmlspecialcharsbx($fieldsMap['DATE']) ?>*" required min="<?= date('Y-m-d') ?>" style="height: 54px;" />
				</div>
				<?php endif; ?>

				<?php if (isset($fieldsMap['DEALERSHIP'])): ?>
				<div class="col-12 col-md-4">
					<select class="form-select b-yagray b-radius-yaradius-8 px-3 py-2" name="DEALERSHIP" required style="height: 54px;">
						<option value="<?= htmlspecialcharsbx($siteName . ' (' . $siteAddress . ')') ?>" selected>
							<?= htmlspecialcharsbx($siteName) ?> (<?= htmlspecialcharsbx($siteAddress) ?>)
						</option>
					</select>
				</div>
				<?php endif; ?>
			</div>

			<!-- Чекбоксы согласия и юрлица -->
			<div class="d-flex flex-column gap-2 mb-4">
				<?php if (isset($fieldsMap['LEGAL_ENTITY'])): ?>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Y" id="LEGAL_ENTITY_<?= htmlspecialcharsbx($arResult['CODE']) ?>" name="LEGAL_ENTITY" />
					<label class="form-check-label text-secondary" for="LEGAL_ENTITY_<?= htmlspecialcharsbx($arResult['CODE']) ?>" style="font-size: 14px;">
						<?= htmlspecialcharsbx($fieldsMap['LEGAL_ENTITY']) ?>
					</label>
				</div>
				<?php endif; ?>

				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Y" id="AGREE_DATA_<?= htmlspecialcharsbx($arResult['CODE']) ?>" name="AGREE_DATA" required checked />
					<label class="form-check-label text-secondary" for="AGREE_DATA_<?= htmlspecialcharsbx($arResult['CODE']) ?>" style="font-size: 13px;">
						<noindex>Даю согласие на сбор и обработку моих персональных данных в соответствии с <a href="/about/personal-data-policy/" target="_blank" rel="nofollow" class="text-dark text-decoration-underline">политикой</a></noindex>
					</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Y" id="AGREE_ADS_<?= htmlspecialcharsbx($arResult['CODE']) ?>" name="AGREE_ADS" />
					<label class="form-check-label text-secondary" for="AGREE_ADS_<?= htmlspecialcharsbx($arResult['CODE']) ?>" style="font-size: 13px;">
						<noindex>Даю согласие на&nbsp;получение информации рекламного характера</noindex>
					</label>
				</div>
			</div>

			<div class="text-secondary mb-4" style="font-size: 13px;">
				* — поля, обязательные для заполнения
			</div>

			<!-- Кнопки навигации шага 2 -->
			<div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
				<button type="button" class="btn-step-prev form-button b-yablack b-radius-yaradius-8 c-yablack c-h-yaorange text-decoration-none text-uppercase fw-b-c px-4 d-inline-flex justify-content-center align-items-center" style="height: 54px; min-width: 180px; font-size: 16px; letter-spacing: 0.5px; background: transparent; border: 1px solid var(--yablack);">
					<span class="me-2">&larr;</span> Назад
				</button>
				<a href="#" role="sendForm" class="form-button bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase fw-b-c px-5 d-inline-flex justify-content-center align-items-center" style="height: 54px; min-width: 220px; font-size: 16px; letter-spacing: 0.5px;">
					Отправить заявку
				</a>
			</div>
		</div>

		<!-- Алерт-сообщения -->
		<div class="alert alert-danger text-center mt-4 d-none">
			<noindex>Ой, что-то пошло не так.<br />Повторите попытку позднее.</noindex>
		</div>
		<div class="alert alert-success text-center mt-4 d-none">
			<noindex>Спасибо! Ваша заявка на сервис успешно отправлена.<br />Мастер-консультант свяжется с Вами для согласования времени визита.</noindex>
		</div>
	</form>
</div>

<style>
.service-step-tab {
	border-bottom: 2px solid transparent !important;
	transition: color 0.2s ease, border-color 0.2s ease;
}
.service-step-tab.active {
	color: #292523 !important;
	border-bottom: 2px solid #F77D40 !important;
}
.service-step-tab:hover:not(.active) {
	color: #666 !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
	const form = document.querySelector('.service-multistep-form');
	if (!form) return;

	const tabs = form.querySelectorAll('.service-step-tab');
	const stepContents = form.querySelectorAll('.service-step-content');
	const btnNext = form.querySelector('.btn-step-next');
	const btnPrev = form.querySelector('.btn-step-prev');

	function switchStep(stepNum) {
		tabs.forEach(tab => {
			if (parseInt(tab.getAttribute('data-step')) === stepNum) {
				tab.classList.add('active');
				tab.style.color = '#292523';
			} else {
				tab.classList.remove('active');
				tab.style.color = '#999';
			}
		});

		stepContents.forEach(content => {
			if (parseInt(content.getAttribute('data-step-content')) === stepNum) {
				content.classList.remove('d-none');
			} else {
				content.classList.add('d-none');
			}
		});

		form.scrollIntoView({ behavior: 'smooth', block: 'start' });
	}

	function validateStep1() {
		const step1 = form.querySelector('[data-step-content="1"]');
		const requiredInputs = step1.querySelectorAll('input:required, select:required');
		let valid = true;

		requiredInputs.forEach(input => {
			input.classList.remove('is-invalid');
			const val = (input.value || '').trim();
			if (!val || val === '0') {
				input.classList.add('is-invalid');
				valid = false;
			}
			// Для VIN проверка на длину
			if (input.name === 'VIN' && val.length < 5) {
				input.classList.add('is-invalid');
				valid = false;
			}
		});

		return valid;
	}

	if (btnNext) {
		btnNext.addEventListener('click', function (e) {
			e.preventDefault();
			if (validateStep1()) {
				switchStep(2);
			}
		});
	}

	if (btnPrev) {
		btnPrev.addEventListener('click', function (e) {
			e.preventDefault();
			switchStep(1);
		});
	}

	tabs.forEach(tab => {
		tab.addEventListener('click', function (e) {
			e.preventDefault();
			const targetStep = parseInt(this.getAttribute('data-step'));
			if (targetStep === 1) {
				switchStep(1);
			} else if (targetStep === 2) {
				if (validateStep1()) {
					switchStep(2);
				}
			}
		});
	});
});
</script>
