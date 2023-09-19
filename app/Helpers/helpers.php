<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    /**
     * Get a setting value
     *
     * @param string $key
     * @param string|null $default
     * @return string|null
     */
    function setting(string $key, string $default = null): ?string
    {
        $setting = Setting::where('key', $key)->first();

        return $setting->value ?? $default;
    }
}
