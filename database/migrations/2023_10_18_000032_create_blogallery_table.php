<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogallery', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('blog_id');
            $table->timestamps();

            $table->foreign('blog_id')->references('id')->on('blogs');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogallery');
    }
};
