<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\MoonShineUserResource;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use App\MoonShine\Resources\PriceResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        $core
            ->resources([
                MenuResource::class,
                SeoDataResource::class,
                ContactResource::class,
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                PriceResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
