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
        Schema::create('jobs_personalities', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->nullable();
            $table->integer('personality_id')->nullable();
            
            $table->timestamps();
            $table->unique(['job_id', 'personality_id'],'jb_personality_idx1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_personalities');
    }
};
