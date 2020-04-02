<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('userID') -> default(0);
            $table->string('equasion') -> default(" ");
            $table->string('result') -> default(" ");
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
        Schema::dropIfExists('saved_histories');
    }
}
