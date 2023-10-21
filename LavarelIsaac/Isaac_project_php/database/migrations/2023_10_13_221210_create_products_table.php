<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',50);
            $table->integer('id_marca');
            $table->string('descripcion',50);
            $table->enum('unidad_medida',['UNIDAD', 'OTRO']);
            $table->tinyInteger('disponible');
            $table->decimal('porcentaje_iva',$precision = 4, $scale = 2);
            $table->decimal('precio_unitario',$precision=20, $scale=2);
            $table->smallInteger('stock');
            $table->foreignId('id_categoria')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
