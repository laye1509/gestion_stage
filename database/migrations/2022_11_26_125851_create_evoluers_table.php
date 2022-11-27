<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evoluers', function (Blueprint $table) {
            $table->id();
            $table->date('dated');
            $table->date('datef');
            $table->integer('primeTransport');
            $table->timestamps();

$table->foreignId('etudiants_id')->constrained('etudiants');
$table->foreignId('entreprises_id')->constrained('entreprises');
$table->foreignId('user_id')->constrained('users');



         /*   $table->integer('etudiants_id')->unsigned();
            $table->foreign('etudiants_id')->references('id')->on('etudiants');
            $table->integer('entreprises_id')->unsigned();
            $table->foreign('entreprises_id')->references('id')->on('entreprises');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evoluers');
    }
};
