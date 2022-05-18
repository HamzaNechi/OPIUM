<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_prenom');
            $table->integer('tel');
            $table->date('dateevent');
            $table->time('heure');
            $table->integer('nb_personne');
            $table->integer('nb_garçon');
            $table->integer('nb_fille');
            $table->string('code_réservation');
            $table->foreign('dateevent')->references('date')->on('events');
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
        Schema::drop('bookings');
    }
}
