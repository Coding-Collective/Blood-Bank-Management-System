<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForAcceptorSelectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acceptor_select', function (Blueprint $table) {
            
           $table->foreign('hospital_id')->references('hospital_id')->on('hospitals')->onDelete('cascade');
           $table->foreign('acceptor_uid_no')->references('uid_no')->on('acceptors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key_for_acceptor_select');
    }
}
