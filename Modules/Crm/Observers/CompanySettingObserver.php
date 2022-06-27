<?php

namespace Modules\Crm\Observers;

use Modules\Crm\Entities\CompanySetting;

class CompanySettingObserver
{
    /**
     * Handle the CompanySetting "created" event.
     *
     * @param CompanySetting $companySetting
     * @return void
     */
    public function created(CompanySetting $companySetting)
    {
        //
    }

    /**
     * Handle the CompanySetting "updated" event.
     *
     * @param CompanySetting $companySetting
     * @return void
     */
    public function updated(CompanySetting $companySetting)
    {
        //
    }

    /**
     * Handle the CompanySetting "deleted" event.
     *
     * @param CompanySetting $companySetting
     * @return void
     */
    public function deleted(CompanySetting $companySetting)
    {
        //
    }

    /**
     * Handle the CompanySetting "restored" event.
     *
     * @param CompanySetting $companySetting
     * @return void
     */
    public function restored(CompanySetting $companySetting)
    {
        //
    }

    /**
     * Handle the CompanySetting "force deleted" event.
     *
     * @param CompanySetting $companySetting
     * @return void
     */
    public function forceDeleted(CompanySetting $companySetting)
    {
        //
    }
}
