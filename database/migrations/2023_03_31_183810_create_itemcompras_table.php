<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemcomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcompras', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade')->default(1);
            $table->double('valorunitario')->default(0);
            $table->double('valortotal')->default(0);
            $table->integer('usado')->default(0);
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
        Schema::dropIfExists('itemcompras');
    }
}
