<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComprasIdToItemcomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itemcompras', function (Blueprint $table) {
            $table->foreignId('compras_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itemcompras', function (Blueprint $table) {
            $table->foreignId('compras_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }
}
