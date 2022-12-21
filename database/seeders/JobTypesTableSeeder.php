<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_types')->delete();
        
        \DB::table('job_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cabin Crew',
                'sort_order' => NULL,
                'job_category_id' => 1,
                'created_by' => NULL,
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}