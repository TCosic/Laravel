<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('tels', function (Blueprint $table) {
			$table->increments('id');
			$table->string('phonenumber');
			$table->unsignedInteger('contact_id');
			$table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
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
		Schema::drop('tels');
    }
}
