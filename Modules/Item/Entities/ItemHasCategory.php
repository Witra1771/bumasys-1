<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ItemHasCategory extends Model
{
    use HasFactory;

    protected $table = 'item_has_categories';

    protected $fillable = [
        'category_id',
        'model',
        'item_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemHasCategoryFactory::new();
    }

    /**
     * Get the parent category model (user or post).
     */
    public function category(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'model', 'item_id');
    }
}
