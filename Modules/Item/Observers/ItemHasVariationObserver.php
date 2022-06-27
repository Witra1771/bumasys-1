<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemHasVariation;

class ItemHasVariationObserver
{
    /**
     * Handle the ItemHasVariation "created" event.
     *
     * @param  ItemHasVariation  $itemHasVariation
     * @return void
     */
    public function created(ItemHasVariation $itemHasVariation)
    {
        //
    }

    /**
     * Handle the ItemHasVariation "updated" event.
     *
     * @param  ItemHasVariation  $itemHasVariation
     * @return void
     */
    public function updated(ItemHasVariation $itemHasVariation)
    {
        //
    }

    /**
     * Handle the ItemHasVariation "deleted" event.
     *
     * @param  ItemHasVariation  $itemHasVariation
     * @return void
     */
    public function deleted(ItemHasVariation $itemHasVariation)
    {
        //
    }

    /**
     * Handle the ItemHasVariation "restored" event.
     *
     * @param  ItemHasVariation  $itemHasVariation
     * @return void
     */
    public function restored(ItemHasVariation $itemHasVariation)
    {
        //
    }

    /**
     * Handle the ItemHasVariation "force deleted" event.
     *
     * @param  ItemHasVariation  $itemHasVariation
     * @return void
     */
    public function forceDeleted(ItemHasVariation $itemHasVariation)
    {
        //
    }
}
