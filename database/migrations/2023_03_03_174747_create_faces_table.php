<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faces', function (Blueprint $table) {
            $table->id();
            $table->string('biotipo')->nullable();
            $table->string('estado')->nullable();
            $table->string('textura')->nullable();
            $table->string('espessura')->nullable();
            $table->string('ostio')->nullable();
            $table->string('acne')->nullable();
            $table->string('cor')->nullable();
            $table->json('involucao')->nullable();
            $table->string('local')->nullable();
            $table->string('fototipo')->nullable();
            $table->string('fotoenvelhecimento')->nullable();
            $table->string('obsfotoenv')->nullable();
            $table->json('manchas')->nullable();
            $table->json('alteracoes')->nullable();
            $table->json('lesoes')->nullable();
            $table->json('cicatriz')->nullable();
            $table->json('pelos')->nullable();
            $table->string('objetivo', 500)->nullable();
            $table->string('tratamento', 500)->nullable();
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
        Schema::dropIfExists('faces');
    }
}
