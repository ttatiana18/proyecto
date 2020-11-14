<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacturaItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "factura_items";

    public function producto(){
        return $this->belongsTo(Producto::class, 'item_id', 'idProducto');
    }
}
