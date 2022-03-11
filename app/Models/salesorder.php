<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salesorder extends Model
{
    use HasFactory;
    protected $table = 'salesorder';
    protected $primaryKey = 'orderId';



    //para eviar el error al guardar
    public $timestamps = false;
}
