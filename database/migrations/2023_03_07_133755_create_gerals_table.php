<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerals', function (Blueprint $table) {
            $table->id();
            $table->string('queixa')->nullable();
            $table->boolean('tratanterior')->default(0);
            $table->string('qualtrata')->nullable();
            $table->boolean('lentescontato')->default(0);
            $table->boolean('utilcosmeticos')->default(0);
            $table->string('qualcosmeticos')->nullable();
            $table->boolean('exposol')->default(0);
            $table->boolean('filtrosolar')->default(0);
            $table->string('freqfiltro')->nullable();
            $table->boolean('tabagismo')->default(0);
            $table->string('qtncigarrosdia')->nullable();
            $table->boolean('ingerebebida')->default(0);
            $table->string('freqbebida')->nullable();
            $table->string('funcintestinal')->nullable();
            $table->string('qualsono')->nullable();
            $table->string('horasnoite')->nullable();
            $table->string('ingagua')->nullable();
            $table->string('alimentacao')->nullable();
            $table->string('alimpref')->nullable();
            $table->boolean('ativfisica')->default(0);
            $table->string('tipoativ')->nullable();
            $table->string('freqativ')->nullable();
            $table->boolean('anticonceptivo')->default(0);
            $table->string('qualconceptivo')->nullable();
            $table->date('ultimamenst')->nullable();
            $table->boolean('gestante')->default(0);
            $table->string('tempogest')->nullable();
            $table->boolean('gestacoes')->default(0);
            $table->string('qtngesta')->nullable();
            $table->boolean('tratmedico')->default(0);
            $table->string('medicamentos')->nullable();
            $table->boolean('antalergicos')->default(0);
            $table->string('qualalerg')->nullable();
            $table->boolean('portmarcapasso')->default(0);
            $table->boolean('altcardiacas')->default(0);
            $table->string('qualcard')->nullable();
            $table->boolean('hipertarterial')->default(0);
            $table->boolean('distcirculatorio')->default(0);
            $table->string('qualdistcirc')->nullable();
            $table->boolean('distrenal')->default(0);
            $table->boolean('disthormonal')->default(0);
            $table->string('qualdisthormonal')->nullable();
            $table->boolean('distgastrointest')->default(0);
            $table->string('qualdistgastro')->nullable();
            $table->boolean('eplepsia')->default(0);
            $table->string('freqeplepsia')->nullable();
            $table->boolean('psicologicas')->default(0);
            $table->string('quaispsicologicas')->nullable();
            $table->boolean('estresse')->default(0);
            $table->string('obsestresse')->nullable();
            $table->boolean('antoncologicos')->default(0);
            $table->string('qualantonco')->nullable();
            $table->boolean('diabetes')->default(0);
            $table->string('qualdiabetes')->nullable();
            $table->boolean('tipodoenca')->default(0);
            $table->string('qualdoenca')->nullable();
            $table->boolean('impdentario')->default(0);
            $table->string('qualimpdentario')->nullable();
            $table->boolean('tratderma')->default(0);
            $table->string('qualtratderma')->nullable();
            $table->boolean('cirurgplastica')->default(0);
            $table->string('qualcirur')->nullable();
            $table->boolean('cirurgreparadora')->default(0);
            $table->string('qualcirurgreparadora')->nullable();
            $table->boolean('autorizacao')->default(1);
            $table->longText('assinatura')->nullable();
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
        Schema::dropIfExists('gerals');
    }
}
