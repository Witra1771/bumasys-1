<?php

namespace Modules\Item\Observers;

use Modules\Item\Entities\ItemIsPackage;

class ItemIsPackageObserver
{
    /**
     * Handle the ItemIsPackage "created" event.
     *
     * @param  ItemIsPackage  $itemIsPackage
     * @return void
     */
    public function created(ItemIsPackage $itemIsPackage)
    {
        //
    }

    /**
     * Handle the ItemIsPackage "updated" event.
     *
     * @param  ItemIsPackage  $itemIsPackage
     * @return void
     */
    public function updated(ItemIsPackage $itemIsPackage)
    {
        //
    }

    /**
     * Handle the ItemIsPackage "deleted" event.
     *
     * @param  ItemIsPackage  $itemIsPackage
     * @return void
     */
    public function deleted(ItemIsPackage $itemIsPackage)
    {
        //
    }

    /**
     * Handle the ItemIsPackage "restored" event.
     *
     * @param  ItemIsPackage  $itemIsPackage
     * @return void
     */
    public function restored(ItemIsPackage $itemIsPackage)
    {
        //
    }

    /**
     * Handle the ItemIsPackage "force deleted" event.
     *
     * @param  ItemIsPackage  $itemIsPackage
     * @return void
     */
    public function forceDeleted(ItemIsPackage $itemIsPackage)
    {
        //
    }
}
