<?php

namespace Calima\FilamentPageBuilder;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentPageBuilderServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-pagebuilder';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-pagebuilder' => __DIR__ . '/../resources/dist/filament-pagebuilder.css',
    ];

    protected array $scripts = [
        'plugin-filament-pagebuilder' => __DIR__ . '/../resources/dist/filament-pagebuilder.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-pagebuilder' => __DIR__ . '/../resources/dist/filament-pagebuilder.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
