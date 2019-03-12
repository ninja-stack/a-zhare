<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('posts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title')->nullable();
      $table->text('content');
      $table->string('type');
      $table->text('rewards')->nullable();
      $table->unsignedInteger('count')->default(1);
      $table->boolean('isActive')->default(true);
      $table->timestamps();
      $table->unsignedInteger('poster_id');
      $table->foreign('poster_id')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('posts');
  }
}
