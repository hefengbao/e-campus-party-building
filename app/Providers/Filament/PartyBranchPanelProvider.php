<?php

namespace App\Providers\Filament;

use App\Filament\SSOLogin;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Auth\Pages\Login;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

/**
 * 党支部
 */
class PartyBranchPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('party-branch')
            ->path('pb')
            ->login(env('party-building.use_ssologin') ? SSOLogin::class : Login::class )
            ->colors([
                'primary' => Color::Red,
            ])
            ->discoverResources(in: app_path('Filament/PartyBranch/Resources'), for: 'App\Filament\PartyBranch\Resources')
            ->discoverPages(in: app_path('Filament/PartyBranch/Pages'), for: 'App\Filament\PartyBranch\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/PartyBranch/Widgets'), for: 'App\Filament\PartyBranch\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('人员管理')
                    ->icon(Heroicon::Users)
                    ->collapsed()
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
