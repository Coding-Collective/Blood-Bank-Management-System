<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForDonorSelectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donor_select', function (Blueprint $table) {
            //foreign
            $table->foreign('hospital_id')->references('hospital_id')->on('hospitals')->onDelete('cascade');
            $table->foreign('donor_uid_no')->references('uid_no')->on('donors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key_for_donor_select');
    }
}
