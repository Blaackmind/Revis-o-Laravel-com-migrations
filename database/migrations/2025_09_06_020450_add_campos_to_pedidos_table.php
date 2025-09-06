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
        Schema::table('pedidos', function (Blueprint $table) {
        $table->string('status')->default('pendente');
        $table->decimal('valor_total', 10, 2)->nullable();
        $table->timestamp('data_confirmacao')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
        $table->dropColumn(['status', 'valor_total', 'data_confirmacao']);
    });
    }
};
