<?php

namespace Modules\Crm\Observers;

use Modules\Crm\Entities\ContactGroup;

class ContactGroupObserver
{
    /**
     * Handle the ContactGroup "created" event.
     *
     * @param ContactGroup $contactGroup
     * @return void
     */
    public function created(ContactGroup $contactGroup)
    {
        //
    }

    /**
     * Handle the ContactGroup "updated" event.
     *
     * @param ContactGroup $contactGroup
     * @return void
     */
    public function updated(ContactGroup $contactGroup)
    {
        //
    }

    /**
     * Handle the ContactGroup "deleted" event.
     *
     * @param ContactGroup $contactGroup
     * @return void
     */
    public function deleted(ContactGroup $contactGroup)
    {
        //
    }

    /**
     * Handle the ContactGroup "restored" event.
     *
     * @param ContactGroup $contactGroup
     * @return void
     */
    public function restored(ContactGroup $contactGroup)
    {
        //
    }

    /**
     * Handle the ContactGroup "force deleted" event.
     *
     * @param ContactGroup $contactGroup
     * @return void
     */
    public function forceDeleted(ContactGroup $contactGroup)
    {
        //
    }
}
