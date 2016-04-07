<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
			$table->string('voornaam', 50);
			$table->string('achternaam', 60);
			$table->date('geboortedatum');
			$table->boolean('opnemen_kalender');
			$table->longText('opmerking');
			$table->unsignedInteger('relation_id');
			$table->foreign('relation_id')->references('id')->on('relations');
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
        Schema::drop('contacts');
    }
}
