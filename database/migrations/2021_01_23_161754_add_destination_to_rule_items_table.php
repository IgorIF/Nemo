<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDestinationToRuleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rule_items', function (Blueprint $table) {
            $table->unsignedBigInteger('rule_category_id')->nullable();
            $table->foreign('rule_category_id')->references('id')->on('rule_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rule_items', function (Blueprint $table) {
            //
        });
    }
}
