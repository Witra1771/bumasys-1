<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Crm\Database\factories\ContactGroupFactory;

class ContactGroup extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return ContactGroupFactory::new();
    }
}
