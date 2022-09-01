<?php

namespace App\Http\Controllers;

use App\Models\Difabels;
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
        $data = DB::table('difabels')->get();;
        return view ('dash.index', ['data' => $data]);
    }

    public function home()
    {
        return view('dash.index');
    }

    public function about()
    {
        return view('dash.about');
    }

    public function kontak()
    {
        return view('dash.contact');
    }

    public function add()
    {
        return view('dash.add');
    }

    public function detail($id)
    {
        $data = DB::table('difabels')->where('id', $id)->first();
        return view ('dash.detail', ['data' => $data]);
    }

    public function addpost(Request $request){
        $data = new Difabels();
        $data->barang = $request->barang;
        $data->pemilik = $request->pemilik;
        $data->tanggal = $request->tanggal;
        $data->wa = $request->wa;
        if ($request->opsi1 !=null){
            $data->opsi1_check =1;
        }
        if ($request->opsi2 !=null){
            $data->opsi2_check =1;
        }
        if ($request->opsi3 !=null){
            $data->opsi3_check =1;
        }
        if ($request->opsi4 !=null){
            $data->opsi4_check =1;
        }


        $file = $request->file('image');
        $nama_file = date('YmdHi').$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->image = $nama_file;
        $data-> save();

        return redirect()->back();
    }
    

    // public function addpost(Request $request)
    // {   $this->validate($request,[
    //     'file'=>'required',
    // ]);
    //     DB::table('difabels')->insert([
    //         'barang'=> $request->barang,
    //         'pemilik'=> $request->pemilik,
    //         'tanggal'=> $request->tanggal,
    //         'wa'=>$request->wa,
    //         'file'=>$request->file
    //     ]);
    //     if ($request->opsi1 != null){
    //         $data->opsi1_check =1;
    //     }
    //     if ($request->opsi2 != null){
    //         $data->opsi2_check =1;
    //     }
    //     if ($request->opsi3 != null){
    //         $data->opsi3_check =1;
    //     }
    //     if ($request->opsi4 != null){
    //         $data->opsi4_check =1;
    //     }
        
    //     $tujuan_upload='data_file';
    //     $file->move($tujuan_upload,$file->getClientOriginalName());
    //     return redirect('/home');
    // }
}
