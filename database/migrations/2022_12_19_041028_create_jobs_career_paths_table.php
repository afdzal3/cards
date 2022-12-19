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
        Schema::create('jobs_career_paths', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->nullable();
            $table->integer('affliate_id')->nullable();

            $table->timestamps();
            $table->unique(['job_id', 'affliate_id'],'jb_career_path_idx1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_career_paths');
    }
};
