<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerpResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serp_results', function (Blueprint $table) {
            $table->unsignedBigInteger('serp_id');
            $table->unsignedBigInteger('page_id');
            $table->tinyInteger('position');

            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('serp_id')->references('id')->on('serps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serp_results');
    }
}
