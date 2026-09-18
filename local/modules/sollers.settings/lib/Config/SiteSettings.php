<?php

declare(strict_types=1);

namespace Sollers\Settings\Config;

use Bitrix\Main\Config\Option;

class SiteSettings
{
    public const MODULE_ID = 'sollers.settings';

    /**
     * Название сайта / дилерского центра (например, "Юг-Авто Яблоновский")
     */
    public static function getSiteName(): string
    {
        return (string)Option::get(self::MODULE_ID, 'site_name', 'Юг-Авто Яблоновский');
    }

    /**
     * Основной телефон для отображения (в исходном виде из настроек)
     */
    public static function getPhone(): string
    {
        return (string)Option::get(self::MODULE_ID, 'phone', '');
    }

    /**
     * Строго форматированный телефон вида "+7 (999) 999 99 99"
     */
    public static function getPhoneFormatted(): string
    {
        return static::formatPhone(static::getPhone());
    }

    /**
     * Нормализованный основной телефон для ссылок tel: (например, "+78612680000")
     */
    public static function getPhoneNormalized(): string
    {
        $phone = static::getPhone();
        if ($phone === '') {
            return '';
        }

        $cleaned = preg_replace('/[^\d+]/', '', $phone) ?? '';
        if (str_starts_with($cleaned, '8') && strlen($cleaned) === 11) {
            $cleaned = '+7' . substr($cleaned, 1);
        }

        return $cleaned;
    }

    /**
     * Дополнительный телефон для отображения (в исходном виде из настроек)
     */
    public static function getAdditionalPhone(): string
    {
        return (string)Option::get(self::MODULE_ID, 'additional_phone', '');
    }

    /**
     * Строго форматированный дополнительный телефон вида "+7 (999) 999 99 99"
     */
    public static function getAdditionalPhoneFormatted(): string
    {
        return static::formatPhone(static::getAdditionalPhone());
    }

    /**
     * Нормализованный дополнительный телефон для ссылок tel:
     */
    public static function getAdditionalPhoneNormalized(): string
    {
        $phone = static::getAdditionalPhone();
        if ($phone === '') {
            return '';
        }

        $cleaned = preg_replace('/[^\d+]/', '', $phone) ?? '';
        if (str_starts_with($cleaned, '8') && strlen($cleaned) === 11) {
            $cleaned = '+7' . substr($cleaned, 1);
        }

        return $cleaned;
    }

    /**
     * Универсальный метод форматирования номера в вид "+7 (999) 999 99 99"
     */
    public static function formatPhone(string $phone): string
    {
        if ($phone === '') {
            return '';
        }

        // Оставляем только цифры
        $digits = preg_replace('/\D/', '', $phone) ?? '';

        // Если начинается с 8 или 7 и 11 цифр (РФ)
        if (strlen($digits) === 11 && ($digits[0] === '7' || $digits[0] === '8')) {
            return sprintf(
                '+7 (%s) %s %s %s',
                substr($digits, 1, 3),
                substr($digits, 4, 3),
                substr($digits, 7, 2),
                substr($digits, 9, 2)
            );
        }

        // Если 10 цифр (без кода страны, например 9991234567)
        if (strlen($digits) === 10) {
            return sprintf(
                '+7 (%s) %s %s %s',
                substr($digits, 0, 3),
                substr($digits, 3, 3),
                substr($digits, 6, 2),
                substr($digits, 8, 2)
            );
        }

        return $phone;
    }

    /**
     * Контактный Email
     */
    public static function getEmail(): string
    {
        return (string)Option::get(self::MODULE_ID, 'email', '');
    }

    /**
     * Фактический адрес
     */
    public static function getAddress(): string
    {
        return (string)Option::get(self::MODULE_ID, 'address', '');
    }

    /**
     * Режим / график работы
     */
    public static function getSchedule(): string
    {
        return (string)Option::get(self::MODULE_ID, 'schedule', '');
    }

    /**
     * Получить координаты в виде массива ['lat' => float|null, 'lon' => float|null, 'raw' => string]
     *
     * @return array{lat: ?float, lon: ?float, raw: string}
     */
    public static function getCoordinates(): array
    {
        $raw = trim((string)Option::get(self::MODULE_ID, 'coordinates', ''));
        if ($raw === '') {
            return [
                'lat' => null,
                'lon' => null,
                'raw' => '',
            ];
        }

        $parts = array_map('trim', explode(',', $raw));
        $lat = isset($parts[0]) && is_numeric($parts[0]) ? (float)$parts[0] : null;
        $lon = isset($parts[1]) && is_numeric($parts[1]) ? (float)$parts[1] : null;

        return [
            'lat' => $lat,
            'lon' => $lon,
            'raw' => $raw,
        ];
    }

    /**
     * Формирует ссылку для построения маршрута на Яндекс.Картах
     */
    public static function getYandexMapUrl(): string
    {
        $coords = static::getCoordinates();
        if ($coords['lat'] === null || $coords['lon'] === null) {
            $address = static::getAddress();
            if ($address !== '') {
                return 'https://yandex.ru/maps/?text=' . rawurlencode($address);
            }
            return '#';
        }

        return sprintf(
            'https://yandex.ru/maps/?ll=%s,%s&z=15&mode=routes&rtext=~%s,%s&rtt=auto&ruri=~',
            $coords['lon'],
            $coords['lat'],
            $coords['lat'],
            $coords['lon']
        );
    }

    /**
     * Формирует ссылку для маршрута в Яндекс.Навигаторе (deeplink / web)
     */
    public static function getYandexNavigatorUrl(): string
    {
        $coords = static::getCoordinates();
        if ($coords['lat'] === null || $coords['lon'] === null) {
            return '#';
        }

        return sprintf(
            'yandexnavi://build_route_on_map?lat_to=%F&lon_to=%F',
            $coords['lat'],
            $coords['lon']
        );
    }

    /**
     * Ссылки на соцсети и мессенджеры
     *
     * @return array<string, string>
     */
    public static function getSocialLinks(): array
    {
        return [
            'telegram' => (string)Option::get(self::MODULE_ID, 'social_telegram', ''),
            'whatsapp' => (string)Option::get(self::MODULE_ID, 'social_whatsapp', ''),
            'vk' => (string)Option::get(self::MODULE_ID, 'social_vk', ''),
        ];
    }
}
