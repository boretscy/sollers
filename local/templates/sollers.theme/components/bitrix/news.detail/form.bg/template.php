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
?>
<div class="container form-bg my-5" id="feedback">
	<div class="row">
		<div class="col" >
			<div 
				class="form-bg-card b-radius-yaradius-40 b-radius-tr-bl-nr p-4 d-flex flex-column justify-content-center align-items-center"
				style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'];?>);"
				>
				<div class="row mb-4 w-100">
					<div class="col">
						<h2 class="text-center c-yawhite"><?= $arResult['NAME'];?></h2>
					</div>
				</div>
				<div class="row w-100">
					<div class="col-lg"></div>
					<div class="col-lg-6">
						<form class="row" name="<?= $arResult['CODE'];?>">
							<input type="hidden" name="FORM_CODE" value="<?= $arResult['CODE'];?>" />
							<input type="hidden" name="FORM_NAME" value="<?= $arResult['NAME'];?>" />
							<?php foreach ($arResult['PROPERTIES']['FIELDS']['VALUE'] as $k => $item ) {
								switch ( $item ) {

									case 'NAME': 
										?>
										<div class="col-lg-6 px-1">
											<input 
												type="text" 
												class="form-control b-yagray b-radius-yaradius-8 px-3" 
												name="<?= $item;?>"
												required
												placeholder="<?= $arResult['PROPERTIES']['FIELDS']['DESCRIPTION'][$k];?> *" />
										</div>
										<?php
										break;

									case 'PHONE': 
										?>
										<div class="col-lg-6 px-1">
											<input 
												type="text" 
												class="form-control b-yagray b-radius-yaradius-8 px-3" 
												name="<?= $item;?>"
												required
												autocomplete="off"
												placeholder="+7 ___ ___ __ __*"
												data-phone-pattern = "+7 ___ ___ __ __"
												maxlength="16" />
										</div>
										<?php
										break;

									case 'COMMENT': 
										?>
										<div class="col-lg-12 mt-2 px-1">
											<input 
												type="text" 
												class="form-control b-yagray b-radius-yaradius-8 px-3" 
												name="<?= $item;?>"
												placeholder="<?= $arResult['PROPERTIES']['FIELDS']['DESCRIPTION'][$k];?>" />
										</div>
										<?php
										break;

									default: break;
								}
							} ?>
							<div class="col-lg-12 my-2 px-1">
								<a 
									href="#"
									role="sendForm"
									class="form-button bg-yaorange b-radius-yaradius-8 c-yawhite c-h-yawhite text-decoration-none text-uppercase w-100 d-flex justify-content-center align-items-center fw-b-c"
									>Отправить</a>
							</div>
							<div class="col-lg-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="AGRYY_<?= $arResult['CODE'];?>" name="AGRYY" required  />
									<label class="form-check-label text-minus-minus c-yawhite" for="AGRYY_<?= $arResult['CODE'];?>">
										<noindex>Нажимая кнопку, я подтверждаю свое ознакомление с <a href="/about/personal-data-policy/" target="_blank" rel=“nofollow” class="c-yawhite c-h-yawhite">политикой обработки персональных данных</a> и даю согласие на их обработку</noindex>
									</label>
								</div>
							</div>
						</form>
						<div class="alert alert-danger text-center">
							<noindex>Ой, что-то пошло не так.<br />
							Повторите попытку позднее.</noindex>
						</div>
						<div class="alert alert-success text-center">
							<noindex>Спасибо за вашу заявку!<br />
							Мы свяжемся с Вами в ближайшее время.</noindex>
						</div>
					</div>
					<div class="col-lg"></div>
				</div>
			</div>
		</div>
	</div>
</div>
