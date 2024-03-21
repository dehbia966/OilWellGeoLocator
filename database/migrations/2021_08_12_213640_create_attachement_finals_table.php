<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachementFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachement_finals', function (Blueprint $table) {
            $table->id();
            $table->string('ref_att');
            $table->dateTime('date_att');
            $table->string('att_signe');
            $table->text('dedcription');
            $table->float('montant_global');
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
        Schema::dropIfExists('attachement_finals');
    }
}
