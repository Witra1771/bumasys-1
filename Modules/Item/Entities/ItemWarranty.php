<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemWarranty extends Model
{
    use HasFactory;

    protected $table = 'item_warranties';

    protected $fillable = [
        'company_id',
        'name',
        'description',
        'duration',
        'duration_type',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemWarrantyFactory::new();
    }
}
