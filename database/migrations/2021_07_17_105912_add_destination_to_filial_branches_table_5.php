<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDestinationToFilialBranchesTable5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filial_branches', function (Blueprint $table) {
            $table->text('dataFitSalonId')->nullable()->after('swimNeverNotEarly');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filial_branches', function (Blueprint $table) {
            //
        });
    }
}
