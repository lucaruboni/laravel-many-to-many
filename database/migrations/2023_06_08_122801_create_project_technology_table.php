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
        Schema::create('project_technology', function (Blueprint $table) {
          // Add post_id column
          $table->unsignedBigInteger('project_id');
          // Add foreign key
          $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();

          // Add tag_id column
          $table->unsignedBigInteger('technology_id');
          // Add foreign key
          $table->foreign('technology_id')->references('id')->on('technologys')->cascadeOnDelete();

          // Add primary key
          $table->primary(['project_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
