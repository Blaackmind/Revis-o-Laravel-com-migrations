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
        Schema::table('pedido_produto', function (Blueprint $table) {
        $table->integer('quantidade')->default(1);
        $table->decimal('preco_unitario', 10, 2)->nullable();
        $table->decimal('subtotal', 10, 2)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('pedido_produto', function (Blueprint $table) {
        $table->dropColumn(['quantidade', 'preco_unitario', 'subtotal']);
    });
    }
};
