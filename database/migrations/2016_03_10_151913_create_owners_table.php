<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    public function up()
    {
        Schema::create('owners',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birth');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('owners');
    }
}
