<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunitiesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('communities', function (Blueprint $table) {
      $table->increments('id');
      $table->string('slug')->unique();
      $table->string('name');
      $table->text('description');
      $table->unsignedInteger('owner_id');
      $table->foreign('owner_id')->references('id')->on('users');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('communities');
  }
}
