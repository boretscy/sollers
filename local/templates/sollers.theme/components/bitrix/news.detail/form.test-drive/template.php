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

// Получаем модели из инфоблока 3 для селектора
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

// Строим ассоциативную карту настроенных полей инфоблока
$fieldsMap = [];
if (!empty($arResult['PROPERTIES']['FIELDS']['VALUE']) && is_array($arResult['PROPERTIES']['FIELDS']['VALUE'])) {
	foreach ($arResult['PROPERTIES']['FIELDS']['VALUE'] as $k => $fieldCode) {
		$fieldsMap[$fieldCode] = $arResult['PROPERTIES']['FIELDS']['DESCRIPTION'][$k] ?? '';
	}
}
?>
<div class="container my-5">
	<div class="row justify-content-center">
		<div class="col-12">
			<form class="p-4 p-md-5 bg-white b-radius-yaradius-40 b-radius-tr-bl-nr shadow-sm" name="<?= htmlspecialcharsbx($arResult['CODE']) ?>">
				<input type="hidden" name="FORM_CODE" value="<?= htmlspecialcharsbx($arResult['CODE']) ?>" />
				<input type="hidden" name="FORM_NAME" value="<?= htmlspecialcharsbx($arResult['NAME']) ?>" />

				<div class="row g-3 mb-3">
					<?php if (isset($fieldsMap['MODEL'])): ?>
					<div class="col-12 col-md-4">
						<select class="form-select b-yagray b-radius-yaradius-8 px-3 py-2" name="MODEL" required>
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
							<option value="Sollers TR-серия">Sollers TR (грузовые)</option>
						</select>
					</div>
					<?php endif; ?>

					<?php if (isset($fieldsMap['REGION'])): ?>
					<div class="col-12 col-md-4">
						<select class="form-select b-yagray b-radius-yaradius-8 px-3 py-2" name="REGION" required>
							<option value="" disabled selected><?= htmlspecialcharsbx($fieldsMap['REGION']) ?>*</option>
							<option value="Краснодарский край">Краснодарский край</option>
							<option value="Республика Адыгея">Республика Адыгея</option>
							<option value="Другой регион">Другой регион</option>
						</select>
					</div>
					<?php endif; ?>

					<?php if (isset($fieldsMap['NAME'])): ?>
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="NAME" placeholder="<?= htmlspecialcharsbx($fieldsMap['NAME']) ?>*" required />
					</div>
					<?php endif; ?>
				</div>

				<div class="row g-3 mb-3">
					<?php if (isset($fieldsMap['PHONE'])): ?>
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="PHONE" placeholder="<?= htmlspecialcharsbx($fieldsMap['PHONE']) ?>*" data-phone-pattern="+7 ___ ___ __ __" maxlength="16" required autocomplete="off" />
					</div>
					<?php endif; ?>

					<?php if (isset($fieldsMap['EMAIL'])): ?>
					<div class="col-12 col-md-4">
						<input type="email" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="EMAIL" placeholder="<?= htmlspecialcharsbx($fieldsMap['EMAIL']) ?>*" required />
					</div>
					<?php endif; ?>

					<?php if (isset($fieldsMap['DATES'])): ?>
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="DATES" placeholder="<?= htmlspecialcharsbx($fieldsMap['DATES']) ?>" />
					</div>
					<?php endif; ?>
				</div>

				<div class="row g-3 mb-4">
					<?php if (isset($fieldsMap['COMPANY_NAME'])): ?>
					<div class="col-12 col-md-8">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="COMPANY_NAME" placeholder="<?= htmlspecialcharsbx($fieldsMap['COMPANY_NAME']) ?>" />
					</div>
					<?php endif; ?>

					<?php if (isset($fieldsMap['COMPANY_INN'])): ?>
					<div class="col-12 col-md-4">
						<input type="text" class="form-control b-yagray b-radius-yaradius-8 px-3 py-2" name="COMPANY_INN" placeholder="<?= htmlspecialcharsbx($fieldsMap['COMPANY_INN']) ?>" />
					</div>
					<?php endif; ?>
				</div>

				<div class="row g-4 align-items-center">
					<div class="col-12 col-lg-8">
						<div class="d-flex flex-column gap-2">
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
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="Y" id="AGREE_INTERVIEW_<?= htmlspecialcharsbx($arResult['CODE']) ?>" name="AGREE_INTERVIEW" />
								<label class="form-check-label text-secondary" for="AGREE_INTERVIEW_<?= htmlspecialcharsbx($arResult['CODE']) ?>" style="font-size: 13px;">
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
