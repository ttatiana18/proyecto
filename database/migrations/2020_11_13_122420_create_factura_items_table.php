<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_id')->references('id')->on('facturas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('item_id')->references('idProducto')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cantidad');
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
        Schema::dropIfExists('factura_items');
    }
}
