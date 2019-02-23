<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsCommunities extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('posts_communities', function (Blueprint $table) {
      $table->unsignedInteger('post_id');
      $table->foreign('post_id')->references('id')->on('posts');
      $table->unsignedInteger('community_id');
      $table->foreign('community_id')->references('id')->on('communities');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('posts_communities');
  }
}
