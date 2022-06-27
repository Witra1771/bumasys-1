<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemUnit;

class ItemUnitObserver
{
    /**
     * Handle the ItemUnit "created" event.
     *
     * @param  ItemUnit  $itemUnit
     * @return void
     */
    public function created(ItemUnit $itemUnit)
    {
        //
    }

    /**
     * Handle the ItemUnit "updated" event.
     *
     * @param  ItemUnit  $itemUnit
     * @return void
     */
    public function updated(ItemUnit $itemUnit)
    {
        //
    }

    /**
     * Handle the ItemUnit "deleted" event.
     *
     * @param  ItemUnit  $itemUnit
     * @return void
     */
    public function deleted(ItemUnit $itemUnit)
    {
        //
    }

    /**
     * Handle the ItemUnit "restored" event.
     *
     * @param  ItemUnit  $itemUnit
     * @return void
     */
    public function restored(ItemUnit $itemUnit)
    {
        //
    }

    /**
     * Handle the ItemUnit "force deleted" event.
     *
     * @param  ItemUnit  $itemUnit
     * @return void
     */
    public function forceDeleted(ItemUnit $itemUnit)
    {
        //
    }
}
