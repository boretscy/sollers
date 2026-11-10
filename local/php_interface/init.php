<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;

// Автоподключение локального модуля настроек сайта
Loader::includeModule('sollers.settings');

// Глобальный алиас для быстрого доступа к настройкам в любых шаблонах: Site::get...()
if (class_exists(\Sollers\Settings\Config\SiteSettings::class) && !class_exists('Site', false)) {
    class_alias(\Sollers\Settings\Config\SiteSettings::class, 'Site');
}

// Добавление пункта "Настройки сайта Sollers" в меню админки (раздел "Контент")
\Bitrix\Main\EventManager::getInstance()->addEventHandler(
    'main',
    'OnBuildGlobalMenu',
    function (&$adminMenu, &$moduleMenu) {
        $moduleMenu[] = [
            'parent_menu' => 'global_menu_content',
            'section'     => 'sollers_settings',
            'sort'        => 50,
            'url'         => 'settings.php?mid=sollers.settings&lang=' . LANGUAGE_ID,
            'text'        => 'Настройки сайта Sollers',
            'title'       => 'Контакты, адреса, координаты и соцсети автосалона',
            'icon'        => 'sys_menu_icon',
            'page_icon'   => 'sys_page_icon',
            'items_id'    => 'menu_sollers_settings',
        ];
    }
);


// Загрузка вспомогательного приложения YApp
require_once __DIR__ . '/YApp/YApp.php';
$yapp = new YApp();
