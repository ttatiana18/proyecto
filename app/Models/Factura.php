<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factura extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "facturas";

    public function items(){
        return $this->hasMany(FacturaItem::class, 'factura_id');
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'nitCliente', 'nit');
    }
}
