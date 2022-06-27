<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemVariation;

class ItemVariationObserver
{
    /**
     * Handle the ItemVariation "created" event.
     *
     * @param  ItemVariation  $itemVariation
     * @return void
     */
    public function created(ItemVariation $itemVariation)
    {
        //
    }

    /**
     * Handle the ItemVariation "updated" event.
     *
     * @param  ItemVariation  $itemVariation
     * @return void
     */
    public function updated(ItemVariation $itemVariation)
    {
        //
    }

    /**
     * Handle the ItemVariation "deleted" event.
     *
     * @param  ItemVariation  $itemVariation
     * @return void
     */
    public function deleted(ItemVariation $itemVariation)
    {
        //
    }

    /**
     * Handle the ItemVariation "restored" event.
     *
     * @param  ItemVariation  $itemVariation
     * @return void
     */
    public function restored(ItemVariation $itemVariation)
    {
        //
    }

    /**
     * Handle the ItemVariation "force deleted" event.
     *
     * @param  ItemVariation  $itemVariation
     * @return void
     */
    public function forceDeleted(ItemVariation $itemVariation)
    {
        //
    }
}
