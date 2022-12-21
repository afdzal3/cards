<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_categories')->delete();
        
        \DB::table('job_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hospitality',
                'sort_order' => 1,
                'created_by' => NULL,
                'created' => '2022-12-20 11:03:05',
                'modified' => '2022-12-20 11:19:39',
                'deleted' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Healthcare',
                'sort_order' => NULL,
                'created_by' => NULL,
                'created' => '2022-12-22 00:47:25',
                'modified' => '2022-12-22 00:47:25',
                'deleted' => NULL,
            ),
        ));
        
        
    }
}