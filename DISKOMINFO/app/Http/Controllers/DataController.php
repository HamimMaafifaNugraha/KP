<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
        //mengambil data dari table difabels
        $data = DB::table('difabels')->get();
        return view ('dash.index', ['data' => $data]);
    }
}
