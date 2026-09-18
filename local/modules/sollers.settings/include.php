<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\Loader::registerAutoLoadClasses('sollers.settings', [
    '\\Sollers\\Settings\\Config\\SiteSettings' => 'lib/Config/SiteSettings.php',
]);
