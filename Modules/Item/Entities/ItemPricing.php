<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemPricing extends Model
{
    use HasFactory;

    protected $table = 'item_pricings';

    protected $fillable = [
        'item_id',
        'price',
        'price_levels',
        'price_is',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemPricingFactory::new();
    }
}
