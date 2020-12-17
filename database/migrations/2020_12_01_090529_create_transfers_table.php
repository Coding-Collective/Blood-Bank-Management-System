<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id('transfer_id');
            $table->timestamps();
            $table->string('rbc')->nullable();
            $table->string('wbc')->nullable();
            $table->string('blood_report_no')->nullable();
            $table->string('acceptor_hospital')->nullable();
            $table->string('donor_hospital')->nullable();
            $table->bigInteger('acceptor_uid')->unsigned()->nullable();
            $table->bigInteger('donor_uid')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
