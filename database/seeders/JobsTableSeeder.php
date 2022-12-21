<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'キャビンアテンダント',
                'media_id' => NULL,
                'job_category_id' => 1,
                'job_type_id' => 1,
                'description' => NULL,
                'detail' => NULL,
                'business_skill' => NULL,
                'knowledge' => NULL,
                'location' => NULL,
                'activity' => NULL,
                'academic_degree_doctor' => NULL,
                'academic_degree_master' => NULL,
                'academic_degree_professional' => NULL,
                'academic_degree_bachelor' => NULL,
                'salary_statistic_group' => NULL,
                'salary_range_first_year' => NULL,
                'salary_range_average' => NULL,
                'salary_range_remarks' => NULL,
                'restriction' => NULL,
                'estimated_total_workers' => NULL,
                'remarks' => NULL,
                'url' => NULL,
                'seo_description' => NULL,
                'seo_keywords' => NULL,
                'sort_order' => NULL,
                'publish_status' => 1,
                'version' => NULL,
                'created_by' => NULL,
                'created' => NULL,
                'modified' => '2022-12-20 11:21:28',
                'deleted' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '医者',
                'media_id' => NULL,
                'job_category_id' => 2,
                'job_type_id' => NULL,
                'description' => NULL,
                'detail' => NULL,
                'business_skill' => NULL,
                'knowledge' => NULL,
                'location' => NULL,
                'activity' => NULL,
                'academic_degree_doctor' => NULL,
                'academic_degree_master' => NULL,
                'academic_degree_professional' => NULL,
                'academic_degree_bachelor' => NULL,
                'salary_statistic_group' => NULL,
                'salary_range_first_year' => NULL,
                'salary_range_average' => NULL,
                'salary_range_remarks' => NULL,
                'restriction' => NULL,
                'estimated_total_workers' => NULL,
                'remarks' => NULL,
                'url' => NULL,
                'seo_description' => NULL,
                'seo_keywords' => NULL,
                'sort_order' => NULL,
                'publish_status' => NULL,
                'version' => NULL,
                'created_by' => NULL,
                'created' => NULL,
                'modified' => '2022-12-22 00:48:56',
                'deleted' => NULL,
            ),
        ));
        
        
    }
}