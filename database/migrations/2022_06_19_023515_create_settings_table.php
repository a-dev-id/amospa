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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('gofood_title')->nullable();
            $table->string('gofood_logo')->nullable();
            $table->string('gofood_description')->nullable();
            $table->string('gofood_button_text')->nullable();
            $table->string('gofood_button_link')->nullable();
            $table->string('gofood_banner')->nullable();
            $table->string('gofood_banner_link')->nullable();
            $table->string('news_informations_title')->nullable();
            $table->string('news_informations_description')->nullable();
            $table->string('homepage_video_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('tripadvisor_url')->nullable();
            $table->string('google_url')->nullable();
            $table->string('spa_service_excerpt')->nullable();
            $table->string('spa_service_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
