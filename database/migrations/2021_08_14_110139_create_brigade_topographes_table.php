<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrigadeTopographesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brigade_topographes', function (Blueprint $table) {
            $table->id();
            $table->string('ref_brigade');
            $table->string('site_hebergement');

            $table->date('date_sorti');
            $table->date('date_retour');
            $table->date('date_inspection');

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
        Schema::dropIfExists('brigade_topographes');
    }
}
