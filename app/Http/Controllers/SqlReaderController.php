<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SqlReaderController extends Controller
{
    public function index(Request $req)
    {
        $file_url = 'public/sql/';
        $fn_sql01 = "sql01.sql";
        
        $sql01 = file_get_contents(base_path($file_url.$fn_sql01));
        $result['sql01'] = $sql01;


        $fn_sql02 = "sql02.sql";
        $sql02 = file_get_contents(base_path($file_url.$fn_sql02));
        $result['sql02'] = $sql02;

        $start = microtime(true);
        $runSQL01 = DB::select($sql01);
        $time1 = microtime(true) - $start;
        $result['time1'] = $time1;
       

        $start = microtime(true);
        $runSQL02 = DB::select($sql02);
        $time2 = microtime(true) - $start;
        $result['time2'] = $time2;

        $diffRatio = ($time1 - $time2) / $time1 * 100;
        $result['diffRatio'] = $diffRatio;
   

       //dd($result);



        return view('sql.index', $result);

    }
}