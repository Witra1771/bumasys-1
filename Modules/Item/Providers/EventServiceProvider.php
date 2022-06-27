<?php

namespace Modules\Item\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Item\Entities\Item;
use Modules\Item\Entities\ItemBrand;
use Modules\Item\Entities\ItemHasCategory;
use Modules\Item\Entities\ItemHasVariation;
use Modules\Item\Entities\ItemIsPackage;
use Modules\Item\Entities\ItemPricing;
use Modules\Item\Entities\ItemUnit;
use Modules\Item\Entities\ItemUnitConvention;
use Modules\Item\Entities\ItemVariation;
use Modules\Item\Entities\ItemWarranty;
use Modules\Item\Observers\ItemBrandObserver;
use Modules\Item\Observers\ItemHasCategoryObserver;
use Modules\Item\Observers\ItemHasVariationObserver;
use Modules\Item\Observers\ItemIsPackageObserver;
use Modules\Item\Observers\ItemObserver;
use Modules\Item\Observers\ItemPricingObserver;
use Modules\Item\Observers\ItemUnitConventionObserver;
use Modules\Item\Observers\ItemUnitObserver;
use Modules\Item\Observers\ItemWarrantyObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
        Item::observe(ItemObserver::class);
        ItemBrand::observe(ItemBrandObserver::class);
        ItemUnit::observe(ItemUnitObserver::class);
        ItemUnitConvention::observe(ItemUnitConventionObserver::class);
        ItemVariation::observe(ItemUnitConventionObserver::class);
        ItemWarranty::observe(ItemWarrantyObserver::class);
        ItemHasVariation::observe(ItemHasVariationObserver::class);
        ItemHasCategory::observe(ItemHasCategoryObserver::class);
        ItemPricing::observe(ItemPricingObserver::class);
        ItemIsPackage::observe(ItemIsPackageObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
