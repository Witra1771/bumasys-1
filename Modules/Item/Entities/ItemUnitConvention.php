<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemUnitConvention extends Model
{
    use HasFactory;

    protected $table = 'item_unit_conventions';

    protected $fillable = [
        'item_id',
        'item_unit_id',
        'conversion_value',
        'to_item_unit_id',
        'price',
        'price_levels',
];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemUnitConventionFactory::new();
    }
}
