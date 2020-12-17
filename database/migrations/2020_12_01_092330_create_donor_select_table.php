<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorSelectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_select', function (Blueprint $table) {
            $table->timestamps();

            $table->bigInteger('hospital_id')->unsigned();
            $table->bigInteger('donor_uid_no')->unsigned();

            //primary keys
            $table->primary(['hospital_id', 'donor_uid_no']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donor_select');
    }
}
