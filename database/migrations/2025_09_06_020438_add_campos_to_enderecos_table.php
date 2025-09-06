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
        Schema::table('enderecos', function (Blueprint $table) {
        $table->string('complemento')->nullable();
        $table->string('referencia')->nullable();
        $table->string('cep', 9)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('enderecos', function (Blueprint $table) {
        $table->dropColumn(['complemento', 'referencia', 'cep']);
    });
    }
};
