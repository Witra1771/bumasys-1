<?php

namespace Modules\Crm\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Modules\Crm\Entities\Company;
use Modules\Crm\Entities\CompanySetting;
use Modules\Crm\Entities\Contact;
use Modules\Crm\Entities\ContactGroup;
use Modules\Crm\Observers\CompanyObserver;
use Modules\Crm\Observers\CompanySettingObserver;
use Modules\Crm\Observers\ContactGroupObserver;
use Modules\Crm\Observers\ContactObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
        Company::observe(CompanyObserver::class);
        CompanySetting::observe(CompanySettingObserver::class);
        Contact::observe(ContactObserver::class);
        ContactGroup::observe(ContactGroupObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
