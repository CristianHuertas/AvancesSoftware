<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'productId';


    // me sirve para hacer la relacion entre productos y su categoria
    public function categorias(){
        return $this->hasMany('App\Models\Category','categoryId', 'productId');
    }

    
}
