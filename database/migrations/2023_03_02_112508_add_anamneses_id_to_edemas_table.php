<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnamnesesIdToEdemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('edemas', function (Blueprint $table) {
            $table->foreignId('anamneses_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('edemas', function (Blueprint $table) {
            $table->foreignId('anamneses_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }
}
