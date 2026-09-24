<?php

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Text\HtmlFilter;

defined('B_PROLOG_INCLUDED') || die();

global $APPLICATION, $USER;

$moduleId = 'sollers.settings';

if (!$USER->IsAdmin()) {
    $APPLICATION->AuthForm(Loc::getMessage('ACCESS_DENIED'));
}

Loc::loadMessages(__FILE__);

$tabs = [
    [
        'DIV' => 'edit_main',
        'TAB' => 'Основные контакты',
        'ICON' => '',
        'TITLE' => 'Контактная информация автосалона',
    ],
    [
        'DIV' => 'edit_social',
        'TAB' => 'Соцсети и мессенджеры',
        'ICON' => '',
        'TITLE' => 'Ссылки на каналы и чаты',
    ],
];

$tabControl = new CAdminTabControl('tabControl', $tabs);

$request = Application::getInstance()->getContext()->getRequest();

if ($request->isPost() && check_bitrix_sessid()) {
    $siteName = (string)$request->getPost('site_name');
    $phone = (string)$request->getPost('phone');
    $additionalPhone = (string)$request->getPost('additional_phone');
    $email = (string)$request->getPost('email');
    $formRecipients = (string)$request->getPost('form_recipients');
    $address = (string)$request->getPost('address');
    $schedule = (string)$request->getPost('schedule');
    $coordinates = (string)$request->getPost('coordinates');

    $socialTelegram = (string)$request->getPost('social_telegram');
    $socialWhatsapp = (string)$request->getPost('social_whatsapp');
    $socialVk = (string)$request->getPost('social_vk');

    Option::set($moduleId, 'site_name', trim($siteName));
    Option::set($moduleId, 'phone', trim($phone));
    Option::set($moduleId, 'additional_phone', trim($additionalPhone));
    Option::set($moduleId, 'email', trim($email));
    Option::set($moduleId, 'form_recipients', trim($formRecipients));
    Option::set($moduleId, 'address', trim($address));
    Option::set($moduleId, 'schedule', trim($schedule));
    Option::set($moduleId, 'coordinates', trim($coordinates));

    Option::set($moduleId, 'social_telegram', trim($socialTelegram));
    Option::set($moduleId, 'social_whatsapp', trim($socialWhatsapp));
    Option::set($moduleId, 'social_vk', trim($socialVk));

    LocalRedirect($APPLICATION->GetCurPage() . '?mid=' . urlencode($moduleId) . '&lang=' . LANGUAGE_ID . '&mid_menu=1');
}

$siteName = Option::get($moduleId, 'site_name', 'Юг-Авто Яблоновский');
$phone = Option::get($moduleId, 'phone', '+7 (861) 268-00-00');
$additionalPhone = Option::get($moduleId, 'additional_phone', '');
$email = Option::get($moduleId, 'email', 'info@sollers-yug-avto.ru');
$formRecipients = Option::get($moduleId, 'form_recipients', '');
$address = Option::get($moduleId, 'address', 'пгт. Яблоновский, ул. Ленина, 77');
$schedule = Option::get($moduleId, 'schedule', 'Ежедневно с 08:00 до 20:00');
$coordinates = Option::get($moduleId, 'coordinates', '44.987654, 38.987654');

$socialTelegram = Option::get($moduleId, 'social_telegram', '');
$socialWhatsapp = Option::get($moduleId, 'social_whatsapp', '');
$socialVk = Option::get($moduleId, 'social_vk', '');

$tabControl->Begin();
?>
<form method="post" action="<?= $APPLICATION->GetCurPage() ?>?mid=<?= urlencode($moduleId) ?>&lang=<?= LANGUAGE_ID ?>">
    <?= bitrix_sessid_post() ?>
    <?php $tabControl->BeginNextTab(); ?>
    <tr class="heading">
        <td colspan="2">Общая информация</td>
    </tr>
    <tr>
        <td width="40%"><label for="site_name"><strong>Название сайта / автосалона:</strong></label></td>
        <td width="60%">
            <input type="text" id="site_name" name="site_name" size="50" value="<?= HtmlFilter::encode($siteName) ?>">
            <small style="display:block; color:#777; margin-top:3px;">Используется в логотипе, шапке, подвале и метатегах (напр., «Юг-Авто Яблоновский»)</small>
        </td>
    </tr>

    <tr class="heading">
        <td colspan="2">Телефоны и связь</td>
    </tr>
    <tr>
        <td width="40%"><label for="phone"><strong>Основной телефон:</strong></label></td>
        <td width="60%">
            <input type="text" id="phone" name="phone" size="40" value="<?= HtmlFilter::encode($phone) ?>">
            <small style="display:block; color:#777; margin-top:3px;">Отображается в шапке и подвале. Пример: +7 (861) 268-00-00</small>
        </td>
    </tr>
    <tr>
        <td width="40%"><label for="additional_phone">Дополнительный телефон:</label></td>
        <td width="60%">
            <input type="text" id="additional_phone" name="additional_phone" size="40" value="<?= HtmlFilter::encode($additionalPhone) ?>">
        </td>
    </tr>
    <tr>
        <td width="40%"><label for="email"><strong>Контактный Email:</strong></label></td>
        <td width="60%">
            <input type="text" id="email" name="email" size="40" value="<?= HtmlFilter::encode($email) ?>">
            <small style="display:block; color:#777; margin-top:3px;">Публичный email для отображения на сайте (в шапке, подвале, контактах)</small>
        </td>
    </tr>
    <tr>
        <td width="40%" style="vertical-align:top;"><label for="form_recipients"><strong>Получатели форм (email):</strong></label></td>
        <td width="60%">
            <textarea id="form_recipients" name="form_recipients" rows="4" cols="45" style="width:100%; max-width:400px;"><?= HtmlFilter::encode($formRecipients) ?></textarea>
            <small style="display:block; color:#777; margin-top:3px;">Множественное поле: адреса для отправки заявок с сайта. Укажите каждый email с новой строки или через запятую.<br>Если пусто, заявки будут отправляться на контактный email.</small>
        </td>
    </tr>

    <tr class="heading">
        <td colspan="2">Адрес, карта и режим работы</td>
    </tr>
    <tr>
        <td width="40%"><label for="address"><strong>Фактический адрес:</strong></label></td>
        <td width="60%">
            <input type="text" id="address" name="address" size="60" value="<?= HtmlFilter::encode($address) ?>">
        </td>
    </tr>
    <tr>
        <td width="40%"><label for="coordinates"><strong>Координаты (широта, долгота):</strong></label></td>
        <td width="60%">
            <input type="text" id="coordinates" name="coordinates" size="40" value="<?= HtmlFilter::encode($coordinates) ?>">
            <small style="display:block; color:#777; margin-top:3px;">Через запятую. Пример: <code>44.987654, 38.987654</code>. На их основе строятся ссылки на Яндекс.Карты и Навигатор.</small>
        </td>
    </tr>
    <tr>
        <td width="40%"><label for="schedule">Режим работы:</label></td>
        <td width="60%">
            <input type="text" id="schedule" name="schedule" size="40" value="<?= HtmlFilter::encode($schedule) ?>">
            <small style="display:block; color:#777; margin-top:3px;">Пример: Ежедневно с 08:00 до 20:00</small>
        </td>
    </tr>

    <?php $tabControl->BeginNextTab(); ?>
    <tr class="heading">
        <td colspan="2">Мессенджеры и социальные сети</td>
    </tr>
    <tr>
        <td width="40%"><label for="social_telegram">Telegram (ссылка):</label></td>
        <td width="60%">
            <input type="text" id="social_telegram" name="social_telegram" size="50" value="<?= HtmlFilter::encode($socialTelegram) ?>" placeholder="https://t.me/...">
        </td>
    </tr>
    <tr>
        <td width="40%"><label for="social_whatsapp">WhatsApp (ссылка):</label></td>
        <td width="60%">
            <input type="text" id="social_whatsapp" name="social_whatsapp" size="50" value="<?= HtmlFilter::encode($socialWhatsapp) ?>" placeholder="https://wa.me/...">
        </td>
    </tr>
    <tr>
        <td width="40%"><label for="social_vk">VK (ссылка):</label></td>
        <td width="60%">
            <input type="text" id="social_vk" name="social_vk" size="50" value="<?= HtmlFilter::encode($socialVk) ?>" placeholder="https://vk.com/...">
        </td>
    </tr>

    <?php $tabControl->Buttons(); ?>
    <input type="submit" name="apply" value="Сохранить" class="adm-btn-save">
    <?php $tabControl->End(); ?>
</form>
