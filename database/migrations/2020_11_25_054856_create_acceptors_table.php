<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceptors', function (Blueprint $table) {
            $table->id('uid_no');
            $table->timestamps();
            $table->string('name');
            $table->string('dob');
            $table->string('address');
            $table->bigInteger('contact');
            $table->string('deficiencies');
            $table->string('blood_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acceptors');
    }
}
