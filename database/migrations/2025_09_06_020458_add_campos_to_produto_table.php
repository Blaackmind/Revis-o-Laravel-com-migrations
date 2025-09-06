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
        Schema::table('produto', function (Blueprint $table) {
        $table->string('codigo_interno')->unique()->nullable();
        $table->text('descricao')->nullable();
        $table->integer('estoque')->default(0);
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produto', function (Blueprint $table) {
        $table->dropColumn(['codigo_interno', 'descricao', 'estoque']);
    });
    }
};
