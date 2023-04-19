<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPacotesIdToItempacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itempacotes', function (Blueprint $table) {
            $table->foreignId('pacotes_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itempacotes', function (Blueprint $table) {
            $table->foreignId('pacotes_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }
}
