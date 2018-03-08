<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (!Schema::hasTable('stus')) {
            Schema::create('stus', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',32);
                $table->tinyInteger('age');
                $table->enum('sex', ['w', 'm'])->default('w');
                $table->string('class',64);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stus');
    }
}
