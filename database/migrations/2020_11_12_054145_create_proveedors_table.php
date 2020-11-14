<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void  
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->string('nitProveedor');
            $table->primary('nitProveedor');
            $table->string('nombreProveedor');
            $table->bigInteger('telefono');
            $table->string('direccion',50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
