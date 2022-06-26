<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemVariation extends Model
{
    use HasFactory;

    protected $table = 'item_variations';

    protected $fillable = [
        'company_id',
        'name',
        'possible_value',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemVariationFactory::new();
    }
}
