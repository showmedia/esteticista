<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLipodistrofiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lipodistrofias', function (Blueprint $table) {
            $table->id();
            $table->string('gordura')->nullable();
            $table->string('distribuicao')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('biotipo')->nullable();
            $table->string('peso')->nullable(0);
            $table->string('altura')->nullable(0);
            $table->string('ideal')->nullable();
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
        Schema::dropIfExists('lipodistrofias');
    }
}
