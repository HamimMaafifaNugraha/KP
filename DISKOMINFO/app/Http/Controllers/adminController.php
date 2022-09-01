<?php

namespace App\Http\Controllers;

use App\Models\Difabels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function overview(){
        $data = DB::table('difabels')->get();;
        return view ('overview', ['data' => $data]);
    }

    public function edit($id){
        $data = DB::table('difabels')->where('id', $id)->first();
        return view ('edit', ['data' => $data]);
    }

    public function editpost(Request $request){
        $id = $request->id;
        $data = Difabels::find($id);
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
        if ($request->image !=null){
            $file = $request->file('image');
            $nama_file = date('YmdHi').$file->getClientOriginalName();
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->image = $nama_file;
        }
        $data-> update();


        return redirect('/admin/overview');
    }

    public function hapus($id){
        $data = DB::table('difabels')->where('id', $id)->delete();
        return redirect('/admin/overview');
    }
}
