<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemCategory extends Model
{
    use HasFactory;

    protected $table = 'item_categories';

    protected $fillable = [
        'is_system',
        'company_id',
        'slug',
        'name',
        'image_path',
        'description',
        'parent',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemCategoryFactory::new();
    }
}
