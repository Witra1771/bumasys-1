<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemHasVariation extends Model
{
    use HasFactory;

    protected $table = 'item_has_variants';

    protected $fillable = [
        'item_id',
        'item_variant_id',
        'possible_value',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemHasVariationFactory::new();
    }
}
