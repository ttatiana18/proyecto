<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Proveedor;

class Producto extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'idProducto';

    public function proveedor(){
        return $this->belongsTo(Proveedor::class,'nitProveedor','nitProveedor');
    }
}
