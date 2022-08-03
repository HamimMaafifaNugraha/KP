<?php

namespace App\Http\Controllers;

use App\Models\Difabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        //mengambil data dari table difabels
        $data = DB::table('difabels')->get();
        return view ('dash.index', ['data' => $data]);
    }

    public function add()
    {
        return view('dash.add');
    }

    public function addpost(Request $request)
    {
        $data = new Difabel();
        $data->barang = $request->barang;
        $data->pemilik = $request->pemilik;
        $data->tanggal = $request->tanggal;

        return redirect('add');
    }
}
