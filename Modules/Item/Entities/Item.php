<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'company_id',
        'item_brand_id',
        'item_category_id',
        'item_warranty_id',
        'slug',
        'name',
        'variant_combination',
        'description',
        'short_description',
        'weight',
        'is_active',
        'is_managed_stock',
        'image_path',
        'brochure_path',
        'item_type',
        'tags',
        'parent',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemFactory::new();
    }
}
