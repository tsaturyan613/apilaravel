<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->integer('phone_number_one');
            $table->integer('phone_number_two')->nullable();
            $table->string('email_one');
            $table->string('email_two')->nullable();
            $table->string('first_workday');
            $table->string('last_workday');
            $table->integer('work_start_hour');
            $table->integer('work_finish_hour');
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
        Schema::dropIfExists('contacts');
    }
}
