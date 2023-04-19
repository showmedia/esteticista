<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServicosIdToItempacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itempacotes', function (Blueprint $table) {
            $table->foreignId('servicos_id')->nullable()->constrained();
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
            $table->foreignId('servicos_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }
}
