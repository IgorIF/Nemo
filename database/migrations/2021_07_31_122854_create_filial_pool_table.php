<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilialPoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filial_pool', function (Blueprint $table) {
            $table->string('filial_alias');
            $table->foreign('filial_alias')->references('alias')->on('filials');
            $table->unsignedBigInteger('pool_id');
            $table->foreign('pool_id')->references('id')->on('pools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filial_pool');
    }
}
