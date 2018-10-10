<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAnswerStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add stat column to answers
        Schema::table('answers', function (Blueprint $table) {
            $table->integer('picks')->default(0);
        });

        // Add stat column to restaurants
        Schema::table('restaurants', function (Blueprint $table) {
            $table->integer('picks')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->dropColumn('picks');
        });

        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropColumn('picks');
        });
    }
}
