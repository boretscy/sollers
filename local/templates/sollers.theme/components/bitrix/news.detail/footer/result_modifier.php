<?php

$arResult['MENU'] = [];

foreach ( $arResult['PROPERTIES']['MENU_COLUMN']['VALUE'] as $k => $i ) {
    $item = [
        'TEXT' => $i,
        'LINK' => $arResult['PROPERTIES']['MENU_COLUMN']['DESCRIPTION'][$k]
    ];
    $arResult['MENU']['COLUMN'][] = $item;
}

// MODELS
$rs = CIBlockElement::GetList(
    ['NAME'=>'ASC'],
    [
        'IBLOCK' => YApp::IBLOCK_MODELS,
        'ID' => $arResult['PROPERTIES']['MENU_MODELS']['VALUE'],
        'ACTIVE' => 'Y'
    ],
    false, false,
    ['ID', 'NAME', 'CODE']
);
while ( $ob = $rs->GetNextElement() ) {
    $m = $ob->GetFields();
    $item = [
        'TEXT' => $m['NAME'],
        'LINK' => '#' // '/models/'.$m['CODE'].'/'
    ];
    $arResult['MENU']['MODELS'][] = $item;
}

foreach ( $arResult['PROPERTIES']['MENU_BUYERS']['VALUE'] as $k => $i ) {
    $item = [
        'TEXT' => $i,
        'LINK' => $arResult['PROPERTIES']['MENU_BUYERS']['DESCRIPTION'][$k]
    ];
    $arResult['MENU']['BUYERS'][] = $item;
}

foreach ( $arResult['PROPERTIES']['MENU_OWNERS']['VALUE'] as $k => $i ) {
    $item = [
        'TEXT' => $i,
        'LINK' => $arResult['PROPERTIES']['MENU_OWNERS']['DESCRIPTION'][$k]
    ];
    $arResult['MENU']['OWNERS'][] = $item;
}

foreach ( $arResult['PROPERTIES']['MENU_BUTTONS']['VALUE'] as $k => $i ) {
    $item = [
        'TEXT' => $i,
        'LINK' => $arResult['PROPERTIES']['MENU_BUTTONS']['DESCRIPTION'][$k]
    ];
    $arResult['MENU']['BUTTONS'][] = $item;
}
// YApp::sp( $arResult['MENU'] );