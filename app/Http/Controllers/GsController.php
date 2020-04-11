<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
    public function showData()
    {
        $dataFromGs = file_get_contents('http://gsx2json.com/api?id=1hKp7M3wLhj0cPEmFO51iWCIyyZRt68iHne_GQEeIG1g&columns=false');
        $gsData = json_decode($dataFromGs);
        return view('pages.home',['data'=>$gsData->rows]);
    }
}
