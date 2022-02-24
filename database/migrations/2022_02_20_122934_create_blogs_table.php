<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('blogs', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('title');
    //         $table->string('quote');
    //         $table->string('content1');
    //         $table->string('content2');
    //         $table->string('image1');
    //         $table->string('image2');
    //         $table->string('image3');
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::table('blogs', function ($table) {
            $table->string('content2', 10000)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
