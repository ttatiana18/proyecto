<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Producto;

class Proveedor extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'nitProveedor';
    public $incrementing = false;

    protected $table = 'proveedores';

    public function productos(){
        return $this->hasMany(Productos::class,'idProducto');
    }
}
