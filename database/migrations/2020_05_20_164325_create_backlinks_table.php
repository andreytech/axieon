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
            $table->unsignedBigInteger('page_from');
            $table->unsignedBigInteger('page_to');
            $table->string('referring_page_title', 2000);
            $table->string('link_anchor', 2000);
            $table->boolean('is_dofollow');
            $table->dateTime('first_seen');
            $table->dateTime('last_seen')->nullable();

            $table->foreign('page_from')->references('id')->on('pages');
            $table->foreign('page_to')->references('id')->on('pages');
        });
        DB::statement('ALTER TABLE backlinks ADD FULLTEXT idx_anchor_text(link_anchor)');
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
