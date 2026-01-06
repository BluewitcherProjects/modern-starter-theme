<?php

declare(strict_types=1);

namespace Themes\ModernStarter;

use App\Core\Support\ThemeServiceProvider;

/**
 * Modern Starter Theme Service Provider
 */
class ModernStarterThemeServiceProvider extends ThemeServiceProvider
{
    /**
     * The theme slug.
     */
    protected string $themeSlug = 'modern-starter';

    /**
     * Bootstrap the theme.
     */
    public function boot(): void
    {
        parent::boot();

        // Register theme-specific hooks
        $this->registerThemeHooks();
    }

    /**
     * Register the theme service provider.
     */
    public function register(): void
    {
        parent::register();

        // Register theme helper functions
        $this->registerHelpers();
    }

    /**
     * Register theme-specific hooks.
     */
    protected function registerThemeHooks(): void
    {
        $hooks = $this->app->make(\App\Core\Services\HookManager::class);

        // Add custom body classes
        $hooks->addFilter('body_class', function (array $classes) {
            $classes[] = 'theme-modern-starter';

            if ($this->getSetting('dark_mode', true)) {
                $classes[] = 'dark-mode-enabled';
            }

            return $classes;
        });

        // Customize products per row
        $hooks->addFilter('products_per_row', function () {
            return (int) $this->getSetting('products_per_row', 4);
        });

        // Add theme assets to head
        $hooks->addAction('theme.head', function () {
            $primaryColor = $this->getSetting('primary_color', '#4F46E5');
            $secondaryColor = $this->getSetting('secondary_color', '#10B981');

            echo "<style>:root { --color-primary: {$primaryColor}; --color-secondary: {$secondaryColor}; }</style>";
        });

        // Add custom CSS if configured
        $hooks->addAction('theme.footer', function () {
            $customCss = $this->getSetting('custom_css', '');
            $customJs = $this->getSetting('custom_js', '');

            if (!empty($customCss)) {
                echo "<style>{$customCss}</style>";
            }

            if (!empty($customJs)) {
                echo "<script>{$customJs}</script>";
            }
        });
    }

    /**
     * Register theme helper functions.
     */
    protected function registerHelpers(): void
    {
        // Register a global helper if needed
        if (!function_exists('theme_setting')) {
            require_once __DIR__ . '/helpers.php';
        }
    }

    /**
     * Get a theme setting value.
     */
    public function getSetting(string $key, mixed $default = null): mixed
    {
        $settings = $this->app['config']->get("themes.{$this->themeSlug}.settings", []);

        return $settings[$key] ?? $default;
    }

    /**
     * Get the theme's view namespace.
     */
    public function getViewNamespace(): string
    {
        return 'theme';
    }

    /**
     * Called when the theme is activated.
     */
    public function onActivate(): void
    {
        // Clear view cache when theme is activated
        $this->app['view.finder']->flush();

        // Publish theme assets
        $this->publishAssets();
    }

    /**
     * Called when the theme is deactivated.
     */
    public function onDeactivate(): void
    {
        // Clean up if needed
    }

    /**
     * Publish theme assets to public directory.
     */
    protected function publishAssets(): void
    {
        $source = $this->getThemePath('assets');
        $destination = public_path("themes/{$this->themeSlug}");

        if (is_dir($source) && !is_dir($destination)) {
            mkdir($destination, 0755, true);

            // Copy assets
            $this->copyDirectory($source, $destination);
        }
    }

    /**
     * Copy a directory recursively.
     */
    protected function copyDirectory(string $source, string $destination): void
    {
        $dir = opendir($source);

        while (($file = readdir($dir)) !== false) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $srcPath = $source . '/' . $file;
            $destPath = $destination . '/' . $file;

            if (is_dir($srcPath)) {
                if (!is_dir($destPath)) {
                    mkdir($destPath, 0755, true);
                }
                $this->copyDirectory($srcPath, $destPath);
            } else {
                copy($srcPath, $destPath);
            }
        }

        closedir($dir);
    }
}
