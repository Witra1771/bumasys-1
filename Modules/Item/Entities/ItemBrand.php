<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemBrand extends Model
{
    use HasFactory;

    protected $table = 'item_brands';

    protected $fillable = [
        'company_id',
        'slug',
        'name',
        'image_path',
        'description',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemBrandFactory::new();
    }
}
