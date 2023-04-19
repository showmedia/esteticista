<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfosToEdemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('edemas', function (Blueprint $table) {
            $table->boolean('cacifo')->default(0);
            $table->boolean('pressao')->default(0);
            $table->string('sensacao')->nullable();
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
            //
        });
    }
}
