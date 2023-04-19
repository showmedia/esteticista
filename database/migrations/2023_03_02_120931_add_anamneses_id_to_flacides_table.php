<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnamnesesIdToFlacidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flacides', function (Blueprint $table) {
            $table->foreignId('anamneses_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flacides', function (Blueprint $table) {
            $table->foreignId('anamneses_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }
}
