<?php

declare(strict_types=1);

if (!function_exists('theme_setting')) {
    /**
     * Get a theme setting value.
     *
     * @param string $key The setting key
     * @param mixed $default Default value if setting not found
     * @return mixed
     */
    function theme_setting(string $key, mixed $default = null): mixed
    {
        $activeTheme = config('themes.active', 'default');
        $settings = config("themes.{$activeTheme}.settings", []);

        return $settings[$key] ?? $default;
    }
}

if (!function_exists('theme_asset')) {
    /**
     * Get the URL to a theme asset.
     *
     * @param string $path The asset path relative to theme assets directory
     * @return string
     */
    function theme_asset(string $path): string
    {
        $activeTheme = config('themes.active', 'default');

        return asset("themes/{$activeTheme}/{$path}");
    }
}

if (!function_exists('current_theme')) {
    /**
     * Get the current active theme slug.
     *
     * @return string
     */
    function current_theme(): string
    {
        return config('themes.active', 'default');
    }
}

if (!function_exists('is_theme_active')) {
    /**
     * Check if a specific theme is active.
     *
     * @param string $themeSlug The theme slug to check
     * @return bool
     */
    function is_theme_active(string $themeSlug): bool
    {
        return current_theme() === $themeSlug;
    }
}
