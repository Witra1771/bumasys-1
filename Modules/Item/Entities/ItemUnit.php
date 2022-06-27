<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemUnit extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [
        'company_id',
        'name',
        'code',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemUnitFactory::new();
    }
}
