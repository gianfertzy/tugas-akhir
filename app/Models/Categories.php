<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = ['name'];


    function produks() {
        return $this->hasMany(Product::class, 'categories_id');
    }
}
