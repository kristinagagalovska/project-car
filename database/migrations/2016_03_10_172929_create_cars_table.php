<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Owner;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('owner_id')
                  ->unsigned()
                  ->nullable();
            $table->foreign('owner_id')
                  ->references('id')->on('owners')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('model');
            $table->string('mark');
            $table->string('manufacture');
            $table->string('num');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('cars');
    }
}
