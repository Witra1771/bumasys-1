<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemIsPackage extends Model
{
    use HasFactory;

    protected $table = 'item_is_packages';

    protected $fillable = [
        'company_id',
        'item_id_package',
        'items_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Item\Database\factories\ItemIsPackageFactory::new();
    }
}
