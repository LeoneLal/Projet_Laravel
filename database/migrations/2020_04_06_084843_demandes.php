<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Demandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('envoi_mail');
            $table->boolean('reception_mail');
            $table->boolean('envoie_appel');
            $table->boolean('reception_appel');
            $table->date('date_rendez_vous');
            $table->string('resultat');
            $table->unsignedBigInteger('entreprise');
            $table->foreign('entreprise')->references('id')->on('entreprises');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('created_at')->useCurrent();
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
