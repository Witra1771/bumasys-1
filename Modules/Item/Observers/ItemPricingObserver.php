<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemPricing;

class ItemPricingObserver
{
    /**
     * Handle the ItemPricing "created" event.
     *
     * @param  ItemPricing  $itemPricing
     * @return void
     */
    public function created(ItemPricing $itemPricing)
    {
        //
    }

    /**
     * Handle the ItemPricing "updated" event.
     *
     * @param  ItemPricing  $itemPricing
     * @return void
     */
    public function updated(ItemPricing $itemPricing)
    {
        //
    }

    /**
     * Handle the ItemPricing "deleted" event.
     *
     * @param  ItemPricing  $itemPricing
     * @return void
     */
    public function deleted(ItemPricing $itemPricing)
    {
        //
    }

    /**
     * Handle the ItemPricing "restored" event.
     *
     * @param  ItemPricing  $itemPricing
     * @return void
     */
    public function restored(ItemPricing $itemPricing)
    {
        //
    }

    /**
     * Handle the ItemPricing "force deleted" event.
     *
     * @param  ItemPricing  $itemPricing
     * @return void
     */
    public function forceDeleted(ItemPricing $itemPricing)
    {
        //
    }
}
