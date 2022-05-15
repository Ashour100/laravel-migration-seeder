<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda',20);
            $table->string('Stazione di partenza',20);
            $table->string('Stazione di arrivo',20);
            $table->dateTime('Orario di partenza',0);
            $table->dateTime('Orario di arrivo',0);
            $table->integer('Numero Carrozze',20);
            $table->boolean('In orario',20);
            $table->boolean('Cancellato',20);
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
        Schema::dropIfExists('trains');
    }
}
