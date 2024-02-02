<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = ['name','image','description','price','weigth','categories_id','stok', 'merk_id'];

    function merk(): BelongsTo {
        return $this->belongsTo(Merk::class, 'merk_id');
    }
}
