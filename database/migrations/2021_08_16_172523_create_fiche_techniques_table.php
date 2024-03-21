<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_techniques', function (Blueprint $table) {
            $table->id();
            $table->string('ref_dos_tech');
            $table->date('date_recept_ord');
            $table->date('date_envoi_odt');
            $table->date('date_envoi_ods');
            $table->date('date_fin_ods');
            $table->string('ref_ods');
            $table->string('ref_odt');
            $table->float('laltitude');
            $table->float('longitude');
            $table->string('ref_sis');
            $table->string('pos_sis');
            $table->float('orgi_si');
            $table->float('paramatre_trans');
            $table->float('altemetric');
            $table->SoftDeletes();
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
        Schema::dropIfExists('fiche_techniques');
    }
}
