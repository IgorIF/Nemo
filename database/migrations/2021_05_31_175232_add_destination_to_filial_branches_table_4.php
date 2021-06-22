<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDestinationToFilialBranchesTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filial_branches', function (Blueprint $table) {
            $table->text('swimNeverNotEarly')->nullable()->after('header');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filial_branches_table_4', function (Blueprint $table) {
            //
        });
    }
}
