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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('media_id')->nullable();
            $table->integer('job_category_id')->nullable();
            $table->integer('job_type_id')->nullable();
            $table->string('description')->nullable();
            $table->string('detail')->nullable();
            $table->string('business_skill')->nullable();
            $table->string('knowledge')->nullable();
            $table->string('location')->nullable();
            $table->string('activity')->nullable();
            $table->string('academic_degree_doctor')->nullable();
            $table->string('academic_degree_master')->nullable();
            $table->string('academic_degree_professional')->nullable();
            $table->string('academic_degree_bachelor')->nullable();
            $table->string('salary_statistic_group')->nullable();
            $table->string('salary_range_first_year')->nullable();
            $table->string('salary_range_average')->nullable();
            $table->string('salary_range_remarks')->nullable();
            $table->string('restriction')->nullable();
            $table->string('estimated_total_workers')->nullable();
            $table->string('remarks')->nullable();
            $table->string('url')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('sort_order')->nullable();
            $table->integer('publish_status')->nullable();
            $table->string('version')->nullable();
            $table->integer('created_by')->nullable();
            $table->datetime('created')->nullable();
            $table->datetime('modified')->nullable();
            $table->datetime('deleted')->nullable();





            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
