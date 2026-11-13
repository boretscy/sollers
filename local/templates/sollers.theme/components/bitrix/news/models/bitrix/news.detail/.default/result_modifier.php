<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
/** @var array $arParams */

CModule::IncludeModule('iblock');

$modelId = (int)$arResult['ID'];
$comfortIbCode = 'model_comfort';
$safetyIbCode = 'model_safety';

// 1. Получаем ID инфоблоков комфорта и безопасности для выборки и тегированного кэша
$comfortIbId = 0;
$safetyIbId = 0;
$ibRes = CIBlock::GetList([], ['CODE' => [$comfortIbCode, $safetyIbCode]]);
while ($ib = $ibRes->Fetch()) {
    if ($ib['CODE'] === $comfortIbCode) {
        $comfortIbId = (int)$ib['ID'];
    } elseif ($ib['CODE'] === $safetyIbCode) {
        $safetyIbId = (int)$ib['ID'];
    }
}

// 2. Регистрация тегов кэша (Рекомендация Оси A1: инвалидация кэша страницы при правке связанных ИБ)
if (defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true && !empty($GLOBALS['CACHE_MANAGER'])) {
    if ($comfortIbId > 0) {
        $GLOBALS['CACHE_MANAGER']->RegisterTag('iblock_id_' . $comfortIbId);
    }
    if ($safetyIbId > 0) {
        $GLOBALS['CACHE_MANAGER']->RegisterTag('iblock_id_' . $safetyIbId);
    }
}

// 3. Выборка опций «Комфорт» из инфоблока model_comfort
$comfortItems = [];
if ($comfortIbId > 0 && $modelId > 0) {
    $cRes = CIBlockElement::GetList(
        ['SORT' => 'ASC', 'ID' => 'ASC'],
        [
            'IBLOCK_ID' => $comfortIbId,
            'ACTIVE' => 'Y',
            'PROPERTY_MODEL' => $modelId,
        ],
        false,
        false,
        ['ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_ICON']
    );
    while ($ob = $cRes->GetNextElement()) {
        $fields = $ob->GetFields();
        $props = $ob->GetProperties();

        $imgSrc = '';
        if (!empty($fields['PREVIEW_PICTURE'])) {
            $imgSrc = CFile::GetPath($fields['PREVIEW_PICTURE']);
        }

        $iconVal = !empty($props['ICON']['VALUE']) ? strtolower(trim($props['ICON']['VALUE'])) : 'wheel';

        $comfortItems[] = [
            'ID' => $fields['ID'],
            'TITLE' => $fields['NAME'],
            'DESC' => $fields['PREVIEW_TEXT'],
            'IMG' => $imgSrc,
            'ICON' => $iconVal,
        ];
    }
}

// 4. Выборка систем «Технологии и безопасность» из инфоблока model_safety
$safetyItems = [];
if ($safetyIbId > 0 && $modelId > 0) {
    $sRes = CIBlockElement::GetList(
        ['SORT' => 'ASC', 'ID' => 'ASC'],
        [
            'IBLOCK_ID' => $safetyIbId,
            'ACTIVE' => 'Y',
            'PROPERTY_MODEL' => $modelId,
        ],
        false,
        false,
        ['ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_BADGE']
    );
    while ($ob = $sRes->GetNextElement()) {
        $fields = $ob->GetFields();
        $props = $ob->GetProperties();

        $imgSrc = '';
        if (!empty($fields['PREVIEW_PICTURE'])) {
            $imgSrc = CFile::GetPath($fields['PREVIEW_PICTURE']);
        }

        $desc = !empty($fields['DETAIL_TEXT']) ? $fields['DETAIL_TEXT'] : $fields['PREVIEW_TEXT'];
        $badge = !empty($props['BADGE']['VALUE']) ? $props['BADGE']['VALUE'] : 'SAFETY';

        $safetyItems[] = [
            'ID' => $fields['ID'],
            'TITLE' => $fields['NAME'],
            'DESC' => $desc,
            'IMG' => $imgSrc,
            'BADGE' => $badge,
        ];
    }
}

// 5. Формирование галереи из множественного свойства MORE_PHOTO основного инфоблока
$gallery = [];
if (!empty($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'])) {
    $photoIds = is_array($arResult['PROPERTIES']['MORE_PHOTO']['VALUE']) 
        ? $arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] 
        : [$arResult['PROPERTIES']['MORE_PHOTO']['VALUE']];
    foreach ($photoIds as $fileId) {
        if (!empty($fileId)) {
            $path = CFile::GetPath($fileId);
            if ($path) {
                $gallery[] = $path;
            }
        }
    }
}

// 6. Формирование характеристик двигателя из свойств модели
$engineSpecs = [];
$specMap = [
    'SPEC_ENGINE' => ['TITLE' => 'Двигатель', 'DEFAULT_SUB' => ''],
    'SPEC_POWER' => ['TITLE' => 'Максимальная мощность', 'DEFAULT_SUB' => ''],
    'SPEC_TORQUE' => ['TITLE' => 'Крутящий момент', 'DEFAULT_SUB' => ''],
    'SPEC_TRANSMISSION' => ['TITLE' => 'Трансмиссия', 'DEFAULT_SUB' => ''],
];

foreach ($specMap as $code => $meta) {
    if (!empty($arResult['PROPERTIES'][$code]['VALUE'])) {
        $val = $arResult['PROPERTIES'][$code]['VALUE'];
        $desc = $arResult['PROPERTIES'][$code]['DESCRIPTION'] ?? '';
        
        $title = $meta['TITLE'];
        $sub = $meta['DEFAULT_SUB'];
        if (!empty($desc)) {
            $parts = explode('/', $desc, 2);
            $title = trim($parts[0]);
            $sub = isset($parts[1]) ? trim($parts[1]) : '';
        }

        $engineSpecs[] = [
            'TITLE' => $title,
            'VAL' => $val,
            'SUB' => $sub,
        ];
    }
}

// 7. Сборка модели в $arResult['MODEL_DATA'] полностью из БД
$slogan = !empty($arResult['PROPERTIES']['SLOGAN']['VALUE']) ? $arResult['PROPERTIES']['SLOGAN']['VALUE'] : 'СОЗДАН ДЛЯ РАБОТЫ';
$subtitle = !empty($arResult['PROPERTIES']['SUBTITLE']['VALUE']) ? $arResult['PROPERTIES']['SUBTITLE']['VALUE'] : '';
$warrantyBadges = [];
if (!empty($arResult['PROPERTIES']['WARRANTY_BADGES']['VALUE'])) {
    $warrantyBadges = is_array($arResult['PROPERTIES']['WARRANTY_BADGES']['VALUE']) 
        ? $arResult['PROPERTIES']['WARRANTY_BADGES']['VALUE'] 
        : [$arResult['PROPERTIES']['WARRANTY_BADGES']['VALUE']];
}

$arResult['MODEL_DATA'] = [
    'SLOGAN' => $slogan,
    'SUBTITLE' => $subtitle,
    'WARRANTY_BADGES' => $warrantyBadges,
    'ENGINE_SPECS' => $engineSpecs,
    'COMFORT_ITEMS' => $comfortItems,
    'SAFETY_ITEMS' => $safetyItems,
    'GALLERY' => $gallery,
];
