<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 100)->default('');
            $table->integer('age')->default(0);
            $table->string('gender', 20);
            $table->boolean('willing_to_work')->default(0);
            $table->boolean('language_1')->default(0);
            $table->boolean('language_2')->default(0);
            $table->boolean('language_3')->default(0);
            $table->boolean('language_4')->default(0);
            $table->dateTime('created_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cruds');
    }
}
