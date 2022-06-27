<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Item\Entities\ItemHasCategory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'is_system',
        'company_id',
        'slug',
        'name',
        'category_type',
        'image_path',
        'description',
        'parent',
    ];

    function hasCategories(): HasMany
    {
        return $this->hasMany(ItemHasCategory::class, 'category_id', 'id');
    }
}
