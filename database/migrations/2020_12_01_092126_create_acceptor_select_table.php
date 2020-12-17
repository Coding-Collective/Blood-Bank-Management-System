<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptorSelectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceptor_select', function (Blueprint $table) {
           $table->timestamps();
            $table->bigInteger('hospital_id')->unsigned();
            $table->bigInteger('acceptor_uid_no')->unsigned();

            //primary keys
            $table->primary(['hospital_id', 'acceptor_uid_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acceptor_select');
    }
}
