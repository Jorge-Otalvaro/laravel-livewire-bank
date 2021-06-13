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
            $table->id();    

            $table->unsignedBigInteger('user_id');        
            $table->foreign('user_id')->references('id')->on('users');   

            $table->unsignedBigInteger('account_id');        
            $table->foreign('account_id')->references('id')->on('accounts'); 

            $table->string('uuid')->unique();

            $table->string('mount');           

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
        Schema::dropIfExists('transfers');
    }
}
