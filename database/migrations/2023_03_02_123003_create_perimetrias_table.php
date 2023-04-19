<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerimetriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perimetrias', function (Blueprint $table) {
            $table->id();
            $table->double('bracod')->nullable();
            $table->double('bracoe')->nullable();
            $table->double('abdsup')->nullable();
            $table->double('cintura')->nullable();
            $table->double('abdinf')->nullable();
            $table->double('quadril')->nullable();
            $table->double('coxasupd')->nullable();
            $table->double('coxasupe')->nullable();
            $table->double('coxainfd')->nullable();
            $table->double('coxainfe')->nullable();
            $table->double('joelhod')->nullable();
            $table->double('joelhoe')->nullable();
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
        Schema::dropIfExists('perimetrias');
    }
}
