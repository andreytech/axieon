<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlinks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('link_from');
            $table->unsignedBigInteger('link_to');
            $table->string('referring_page_title', 2000);
            $table->string('link_anchor', 2000);
            $table->boolean('is_dofollow');
            $table->dateTime('first_seen');

            $table->foreign('link_from')->references('id')->on('pages');
            $table->foreign('link_to')->references('id')->on('pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backlinks');
    }
}
