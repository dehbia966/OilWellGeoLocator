<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportReconnaissancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapport_reconnaissances', function (Blueprint $table) {
            $table->id();
            $table->string('ref_rapport');
            $table->date('date_recp_imp');
            $table->integer('coordonne_x');
            $table->integer('coordonne_y');
            $table->integer('coordonne_z');
            $table->string('utm_x');
            $table->string('utm_y');
            $table->text('description')->nullable();
            
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
        Schema::dropIfExists('rapport_reconnaissances');
    }
}
