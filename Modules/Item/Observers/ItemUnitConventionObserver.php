<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemUnitConvention;

class ItemUnitConventionObserver
{
    /**
     * Handle the ItemUnitConvention "created" event.
     *
     * @param  ItemUnitConvention $itemUnitConvention
     * @return void
     */
    public function created(ItemUnitConvention $itemUnitConvention)
    {
        //
    }

    /**
     * Handle the ItemUnitConvention "updated" event.
     *
     * @param  ItemUnitConvention  $itemUnitConvention
     * @return void
     */
    public function updated(ItemUnitConvention $itemUnitConvention)
    {
        //
    }

    /**
     * Handle the ItemUnitConvention "deleted" event.
     *
     * @param  ItemUnitConvention $itemUnitConvention
     * @return void
     */
    public function deleted(ItemUnitConvention $itemUnitConvention)
    {
        //
    }

    /**
     * Handle the ItemUnitConvention "restored" event.
     *
     * @param  ItemUnitConvention $itemUnitConvention
     * @return void
     */
    public function restored(ItemUnitConvention $itemUnitConvention)
    {
        //
    }

    /**
     * Handle the ItemUnitConvention "force deleted" event.
     *
     * @param  ItemUnitConvention $itemUnitConvention
     * @return void
     */
    public function forceDeleted(ItemUnitConvention $itemUnitConvention)
    {
        //
    }
}
