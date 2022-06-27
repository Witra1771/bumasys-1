<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemWarranty;

class ItemWarrantyObserver
{
    /**
     * Handle the ItemWarranty "created" event.
     *
     * @param  ItemWarranty  $itemWarranty
     * @return void
     */
    public function created(ItemWarranty $itemWarranty)
    {
        //
    }

    /**
     * Handle the ItemWarranty "updated" event.
     *
     * @param  ItemWarranty  $itemWarranty
     * @return void
     */
    public function updated(ItemWarranty $itemWarranty)
    {
        //
    }

    /**
     * Handle the ItemWarranty "deleted" event.
     *
     * @param  ItemWarranty  $itemWarranty
     * @return void
     */
    public function deleted(ItemWarranty $itemWarranty)
    {
        //
    }

    /**
     * Handle the ItemWarranty "restored" event.
     *
     * @param  ItemWarranty  $itemWarranty
     * @return void
     */
    public function restored(ItemWarranty $itemWarranty)
    {
        //
    }

    /**
     * Handle the ItemWarranty "force deleted" event.
     *
     * @param  ItemWarranty  $itemWarranty
     * @return void
     */
    public function forceDeleted(ItemWarranty $itemWarranty)
    {
        //
    }
}
