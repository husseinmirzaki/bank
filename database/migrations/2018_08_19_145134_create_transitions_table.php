<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transitions', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('mount');
            $table->smallInteger('type');
            $table->integer('user_id');
            $table->integer('from_bank_id');
            $table->integer('to_bank_id')->nullable();
            $table->integer('from_account_id');
            $table->integer('to_account_id')->nullable();
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
        Schema::dropIfExists('transitions');
    }
}
