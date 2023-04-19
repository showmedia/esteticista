<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlacidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flacides', function (Blueprint $table) {
            $table->id();
            $table->boolean('tissular')->default(0);
            $table->boolean('muscular')->default(0);
            $table->string('ltissular')->nullable();
            $table->string('lmuscular')->nullable();
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
        Schema::dropIfExists('flacides');
    }
}
