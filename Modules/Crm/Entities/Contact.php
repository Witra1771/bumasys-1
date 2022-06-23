<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Crm\Database\factories\ContactFactory;
use Spatie\Tags\HasTags;
use OwenIt\Auditing\Contracts\Auditable;

class Contact extends Model implements Auditable
{
    use HasFactory, HasTags, \OwenIt\Auditing\Auditable;

    protected $fillable = [];

    protected static function newFactory()
    {
        return ContactFactory::new();
    }
}
