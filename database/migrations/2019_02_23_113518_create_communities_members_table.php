<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunitiesMembersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('communities_members', function (Blueprint $table) {
      $table->unsignedInteger('community_id');
      $table->foreign('community_id')->references('id')->on('communities');
      $table->unsignedInteger('member_id');
      $table->foreign('member_id')->references('id')->on('users');
      $table->boolean('is_mod')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('communities_members');
  }
}
