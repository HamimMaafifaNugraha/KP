<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Difabel;

class DifabelController extends Controller
{
    public function list(){
        $data = Difabel::all();
        return view('dash.overview' , ['data'=>$data]);
    }
}
