<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class sollers_settings extends CModule
{
    public $MODULE_ID = 'sollers.settings';
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;
    public $PARTNER_NAME;
    public $PARTNER_URI;

    public function __construct()
    {
        $arModuleVersion = [];
        include __DIR__ . '/version.php';

        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }

        $this->MODULE_NAME = 'Настройки сайта Sollers';
        $this->MODULE_DESCRIPTION = 'Управление общими контактами, реквизитами, соцсетями и параметрами сайта';
        $this->PARTNER_NAME = 'Юг-Авто';
        $this->PARTNER_URI = 'https://yug-avto.ru';
    }

    public function DoInstall(): bool
    {
        ModuleManager::registerModule($this->MODULE_ID);
        return true;
    }

    public function DoUninstall(): bool
    {
        ModuleManager::unRegisterModule($this->MODULE_ID);
        return true;
    }
}
