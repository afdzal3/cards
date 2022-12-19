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
        Schema::create('jobs_practical_skills', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->nullable();
            $table->integer('practical_skill_id')->nullable();
            $table->timestamps();

            $table->unique(['job_id', 'practical_skill_id'],'jb_practical_skill_idx1');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_practical_skills');
    }
};
