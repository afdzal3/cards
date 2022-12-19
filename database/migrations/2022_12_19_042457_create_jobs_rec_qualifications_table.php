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
        Schema::create('jobs_rec_qualifications', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->nullable();
            $table->integer('affliate_id')->nullable();
            $table->timestamps();

            $table->unique(['job_id', 'affliate_id'],'jb_rec_qualification_idx1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_rec_qualifications');
    }
};
