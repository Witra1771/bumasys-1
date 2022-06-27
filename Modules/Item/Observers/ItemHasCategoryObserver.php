<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemHasCategory;

class ItemHasCategoryObserver
{
    /**
     * Handle the ItemHasCategory "created" event.
     *
     * @param  ItemHasCategory  $itemHasCategory
     * @return void
     */
    public function created(ItemHasCategory $itemHasCategory)
    {
        //
    }

    /**
     * Handle the ItemHasCategory "updated" event.
     *
     * @param  ItemHasCategory  $itemHasCategory
     * @return void
     */
    public function updated(ItemHasCategory $itemHasCategory)
    {
        //
    }

    /**
     * Handle the ItemHasCategory "deleted" event.
     *
     * @param  ItemHasCategory  $itemHasCategory
     * @return void
     */
    public function deleted(ItemHasCategory $itemHasCategory)
    {
        //
    }

    /**
     * Handle the ItemHasCategory "restored" event.
     *
     * @param  ItemHasCategory  $itemHasCategory
     * @return void
     */
    public function restored(ItemHasCategory $itemHasCategory)
    {
        //
    }

    /**
     * Handle the ItemHasCategory "force deleted" event.
     *
     * @param  ItemHasCategory  $itemHasCategory
     * @return void
     */
    public function forceDeleted(ItemHasCategory $itemHasCategory)
    {
        //
    }
}
