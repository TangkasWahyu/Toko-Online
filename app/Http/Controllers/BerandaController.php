<?php

namespace App\Http\Controllers;

use App\M_Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index()
    {
        $barang = DB::table('tbl_barang')->get();
        return view('frontend.beranda', ['barang' => $barang]);
    }
    public function store(Request $request){
        $this->validate($request, [
            'file' => 'required|max:2048'
        ]);
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        if($file->move($tujuan_upload, $nama_file)){
            $data = M_Barang::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'gambar' => $nama_file
            ]);
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
    }
}
