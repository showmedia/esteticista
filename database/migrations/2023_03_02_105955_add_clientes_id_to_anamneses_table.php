<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientesIdToAnamnesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anamneses', function (Blueprint $table) {
            $table->foreignId('clientes_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anamneses', function (Blueprint $table) {
            $table->foreignId('clientes_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }
}
