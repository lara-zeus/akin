<?php

namespace LaraZeus\Akin;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
use Filament\Support\Facades\FilamentIcon;

class AkinTheme implements Plugin
{
    public function getId(): string
    {
        return 'zeus-akin';
    }

    public function register(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return new self();
    }

    public static function get(): static
    {
        // @phpstan-ignore-next-line
        return filament('zeus-bolt');
    }

    public function boot(Panel $panel): void
    {
        FilamentIcon::register([
            'panels::sidebar.collapse-button' => 'tabler-layout-sidebar-right-collapse-filled',
            'panels::sidebar.expand-button' => 'tabler-layout-sidebar-left-collapse-filled',
            'panels::pages.dashboard.navigation-item' => 'tabler-home',
            'panels::topbar.open-database-notifications-button' => 'tabler-bell',
        ]);

        FilamentColor::register([
            ...collect(Color::all())->forget(['slate', 'gray', 'zinc', 'neutral', 'stone'])->toArray(),
            'gray' => Color::Stone,
            'primary' => Color::Sky,
            'secondary' => Color::Amber,

            'danger' => Color::Red,
            'info' => Color::Blue,
            'success' => Color::Green,
            'warning' => Color::Yellow,
        ]);
    }
}
