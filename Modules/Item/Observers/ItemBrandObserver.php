<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemBrand;

class ItemBrandObserver
{
    /**
     * Handle the ItemBrand "created" event.
     *
     * @param  ItemBrand  $itemBrand
     * @return void
     */
    public function created(ItemBrand $itemBrand)
    {
        //
    }

    /**
     * Handle the ItemBrand "updated" event.
     *
     * @param  ItemBrand  $itemBrand
     * @return void
     */
    public function updated(ItemBrand $itemBrand)
    {
        //
    }

    /**
     * Handle the ItemBrand "deleted" event.
     *
     * @param  ItemBrand  $itemBrand
     * @return void
     */
    public function deleted(ItemBrand $itemBrand)
    {
        //
    }

    /**
     * Handle the ItemBrand "restored" event.
     *
     * @param  ItemBrand  $itemBrand
     * @return void
     */
    public function restored(ItemBrand $itemBrand)
    {
        //
    }

    /**
     * Handle the ItemBrand "force deleted" event.
     *
     * @param  ItemBrand  $itemBrand
     * @return void
     */
    public function forceDeleted(ItemBrand $itemBrand)
    {
        //
    }
}
