<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Crm\Database\factories\CompanyFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return CompanyFactory::new();
    }
}
