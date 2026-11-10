<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

// Fetch all models for the Models megamenu
CModule::IncludeModule('iblock');

$arModels = [];
$res = CIBlockElement::GetList(
    ['SORT' => 'ASC', 'ID' => 'ASC'],
    ['IBLOCK_ID' => 3, 'ACTIVE' => 'Y'],
    false,
    false,
    ['ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PICTURE']
);

while ($ob = $res->Fetch()) {
    $imgSrc = '';
    if (!empty($ob['PREVIEW_PICTURE'])) {
        $imgSrc = CFile::GetPath($ob['PREVIEW_PICTURE']);
    } elseif (!empty($ob['DETAIL_PICTURE'])) {
        $imgSrc = CFile::GetPath($ob['DETAIL_PICTURE']);
    }

    $arModels[] = [
        'ID' => $ob['ID'],
        'CODE' => $ob['CODE'],
        'NAME' => 'Sollers ' . $ob['NAME'],
        'LINK' => '#', // Пока не ссылаемся на детальные страниц моделей
        'IMG' => $imgSrc
    ];
}

$arResult['MEGAMENU_MODELS'] = $arModels;

// Clients structure by mockup:
// Level 1: Покупателям | Владельцам | О компании
$arResult['MEGAMENU_CLIENTS'] = [
    'buyers' => [
        'TITLE' => 'Покупателям',
        'ITEMS' => [
            ['TITLE' => 'Кредит', 'LINK' => '/buyers/credit/'],
            ['TITLE' => 'Лизинг', 'LINK' => '/buyers/leasing/'],
            ['TITLE' => 'Трейд-ин', 'LINK' => '/buyers/trade-in/'],
            ['TITLE' => 'Спец.предложения', 'LINK' => '/offers/'],
            ['TITLE' => 'Запись на тест-драйв', 'LINK' => '/buyers/test-drive/'],
        ]
    ],
    'owners' => [
        'TITLE' => 'Владельцам',
        'ITEMS' => [
            ['TITLE' => 'Спец.предложения', 'LINK' => '/offers/'],
            ['TITLE' => 'Помощь на дорогах', 'LINK' => '/owners/roadside-assistance/'],
            ['TITLE' => 'Гарантия Sollers', 'LINK' => '/owners/warranty/'],
            ['TITLE' => 'Руководство по эксплуатации', 'LINK' => '/owners/manuals/'],
            ['TITLE' => 'Запись на сервис', 'LINK' => '/service/'],
        ]
    ],
    'company' => [
        'TITLE' => 'О компании',
        'ITEMS' => [
            ['TITLE' => 'О дилерском центре', 'LINK' => '/about/'],
            ['TITLE' => 'Новости', 'LINK' => '/news/'],
            ['TITLE' => 'Правовая информация', 'LINK' => '/about/legal/'],
            ['TITLE' => 'Контакты', 'LINK' => '/about/contacts/'],
        ]
    ]
];
